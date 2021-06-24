<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\DetailTransaksi;
use App\Models\Game;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop()
    {
        $data = Game::all();
        return view('shop.shop',[
            'listgame' => $data,
        ]);
    }

    public function show($id)
    {
        $index=Game::find($id);
        return view('shop.product',['game' => $index,]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
