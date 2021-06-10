<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GamePublisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GamePublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publisher = GamePublisher::get();

        return view('admin.game.publisher.index', [
            'data' => $publisher
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.game.publisher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $publisher = GamePublisher::create([
            'name' => $request->name,
        ]);

        if ($publisher) {
            session()->flash('success', 'Sukses menambahkan publisher');
        } else {
            session()->flash('error', 'Gagal menambahkan publisher');
        }

        return redirect()->route('game.publisher.index');
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
        $publisher = GamePublisher::find($id);

        $publisher->update([
            'name' => $request->name,
        ]);

        session()->flash('success','Berhasil mengupdate data');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        GamePublisher::find($id)->delete();

        session()->flash('success','Berhasil menghapus data');

        return redirect()->back();
    }
}
