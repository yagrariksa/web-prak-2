<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
   
    public function login()
    {
        return view('client.auth.login');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email','password'))) {
            $request->session()->regenerate();

            return redirect()->route('client.home');
        }

        return back()->withErrors([
            'email' => 'Password atau email anda salah.',
        ]);

    }

    public function register()
    {
        return view('client.auth.register');
    }
   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
        ]);
        
        $data = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::loginUsingId($data->id);

        return redirect()->route('client.home');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('client.home');
    }

}
