<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UsuarioController extends Controller
{
    public function index(){
      return view('vistas.inicio');
    }
}
