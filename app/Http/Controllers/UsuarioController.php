<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //

    public function registro(){
        return view('usuarios.form-usuario');
    }
}
