<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ZonaController extends Controller
{
    //
    public function Index()
    {
    	return view('administrador.zonas');
    }

    public function Relacionar (){
        return view('administrador.asig_zonas');
    }

    public function Ver(){
        return view('encuestador.ver_zona');
    }
}
