<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testMethod()
    {
        return view('client.auth.login');
    }

    public function login()
    {
        return view("client.auth.login");
    }

    public function forgotpassword()
    {
        return view("client.auth.passwords.email");
    }

    public function resetpassword()
    {
        return view("client.auth.passwords.reset");
    }
}
