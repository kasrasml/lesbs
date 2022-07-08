<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showCategory()
    {
        return view('public.showCategory.index');
    }
}
