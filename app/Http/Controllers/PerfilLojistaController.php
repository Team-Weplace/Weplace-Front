<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilLojistaController extends Controller
{
    public function index()
    {
        return view('shop::home.perfilLojista');
    }
}
