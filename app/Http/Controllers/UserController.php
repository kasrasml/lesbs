<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view('public.login.index');
    }

    public function register()
    {
        return view('public.register.index');
    }
}
