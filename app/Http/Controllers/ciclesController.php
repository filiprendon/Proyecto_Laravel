<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ciclesController extends Controller
{
    public function inicio(){
        return view('layouts.form');
    }
    public function cicles(){
        return view('layouts.cicles');
    }
}