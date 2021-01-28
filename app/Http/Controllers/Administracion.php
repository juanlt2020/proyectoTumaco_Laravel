<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Administracion extends Controller
{
    //
    public function index(){
        return view('home');
    }

    public function usuarios(){
        return view('administracion.users.usuarios');
    }

    public function descripcion(){
        return view('administracion.detalle');
    }

}
