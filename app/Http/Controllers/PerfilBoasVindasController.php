<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilBoasVindasController extends Controller
{
    public function index (){
        return view('shop::home.perfil');
    }
}
