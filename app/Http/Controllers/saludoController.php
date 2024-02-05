<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class saludoController extends Controller
{
    public function inicio(){
        return view('layouts.form');
    }
    public function saludo(){
        return 'Hola me llamo Filip';
    }
}
