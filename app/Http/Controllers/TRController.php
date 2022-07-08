<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TRController extends Controller
{
    public function TR()
    {
        return view('public.TR.index');
    }
}
