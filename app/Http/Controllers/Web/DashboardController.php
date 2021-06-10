<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Game::all();
        return view('client.dashboard',[
            'listgame' => $data,
        ]);
    }
}
