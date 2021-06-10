<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\DetailTransaksi;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CartController extends Controller
{
    public function index()
    {
        $data = Cart::with('game')->where('user_id', Auth::user()->id)->get();
        return view('client.cart.index', [
            'listcart' => $data,
        ]);
    }

    public function tambah($id)
    {
        $data = Cart::where('user_id', Auth::user()->id)->where('game_id', $id)->first();

        if ($data) {
            $data->jumlah = $data->jumlah + 1;
            $data->save();
            return redirect()->route('cart.index')->with('success', 'Menambah jumlah game');
        }
        Cart::create([
            'user_id'   => Auth::user()->id,
            'game_id'   => $id,
            'jumlah'    => 1,
        ]);

        return redirect()->route('cart.index')->with('success', 'Berhasil menambahkan item kedalam keranjang');
    }

    public function hapus($id)
    {
        Cart::find($id)->delete();

        return redirect()->back()->with('success', 'berhasil menghapus item dari keranjang');
    }

    public function checkout(Request $request)
    {
        $data = Cart::with('game')->where('user_id', Auth::user()->id)->get();

        $transaksi = Transaksi::create([
            'user_id' => Auth::user()->id,
            'total_biaya' => 0,
            'total_barang' => 0,
        ]);
        $totalbiaya = 0;
        $totalbarang = 0;
        foreach ($data as $game) {
            for ($i = 1; $i <= $game['jumlah']; $i++) {
                $detailTransaksi = DetailTransaksi::create([
                    'name' => $game->game->name,
                    'desc' => $game->game->desc,
                    'img' => $game->game->img,
                    'price' => $game->game->price,
                    'token' => Str::random(20),
                    'transaksi_id' => $transaksi->id,
                ]);
                $totalbiaya = $totalbiaya + $game->game->price;
                $totalbarang++;
            }
            $game->delete();
        }
        $transaksi['total_biaya'] = $totalbiaya;
        $transaksi['total_barang'] = $totalbarang;
        $transaksi->save();

        return redirect()->route('transaksi.list');
    }

    public function listtrans()
    {
        $data = Transaksi::with('barang')->where('user_id', Auth::user()->id)->get();

        return view('client.transaksi.list', [
            'transaksis' => $data,
        ]);
    }

    public function deatiltrans($id)
    {
        $data = Transaksi::with('barang')->find($id);

        return view('client.transaksi.details', [
            'transaksi' => $data,
        ]);
    }
}
