<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaComponenteController extends Controller
{
    public function index(){
        return view('pruebaComponente.index');
    }

}
