<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usuario extends Controller
{ 
    function conectado(){
       return View('conectado');
    }

    function desconectado(){
        return View('desconectado');
    }
}