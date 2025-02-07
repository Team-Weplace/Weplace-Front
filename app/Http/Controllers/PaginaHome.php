<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaHome extends Controller
{
    public function index()
    {
        return view('shop::home.home');
    }
}
