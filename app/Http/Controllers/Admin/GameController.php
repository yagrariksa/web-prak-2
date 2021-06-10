<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\GamePublisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $game = Game::with('publisher')->get();

        return view('admin.game.index', [
            'game' => $game
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $publisher = GamePublisher::all();
        if (count($publisher) < 1) {
            session()->flash('warning', 'Harap Tambahkan Publisher terlebih dahulu sebelum menambahkan game');
            return redirect()->route('game.publisher.create');
        }
        return view('admin.game.create', [
            'publisher' => $publisher,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validator = Validator::make($request->all(), [
            'name'      => 'required',
            'publisher' => 'required',
            'desc'      => 'required',
            'price'     => 'required|integer',
            'img'       => 'required|mimes:jpg,jpeg,png',
        ]);

        if ($validator->fails()) {
            session()->flash('warning', 'Cek kembali form anda');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // dd($request);
        // dd($request->img->extension());
        // TODO : store image
        $nameimg = time() . "." . $request->img->extension();
        $request->img->storeAs('public', $nameimg);
        // TODO : store data

        Game::create([
            'name' => $request->name,
            'pub_id' => $request->publisher,
            'desc' => $request->desc,
            'price' => $request->price,
            'img' => $nameimg,
        ]);
        return redirect()->route('game.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publisher = GamePublisher::all();
        if (count($publisher) < 1) {
            session()->flash('warning', 'Harap Tambahkan Publisher terlebih dahulu sebelum menambahkan game');
            return redirect()->route('game.publisher.create');
        }

        $data = Game::find($id);

        if (!$data) {
            session()->flash('error', 'Data tidak ditemukan untk mengedit');
        } else {
            session()->flash('edit', true);
        }

        return view('admin.game.create', [
            'publisher' => $publisher,
            'data'      => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Game::find($id);

        if ($request->img) {
            $nameimg = time() . "." . $request->img->extension();

            $request->img->storeAs('public', $nameimg);
            $data->update([
                'img' => $nameimg,
            ]);
        }

        $data->update([
            'name' => $request->name,
            'pub_id' => $request->publisher,
            'desc' => $request->desc,
            'price' => $request->price,
        ]);

        return redirect()->route('game.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Game::find($id)->delete();
        return redirect()->route('game.index');
    }
}
