<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ModeloController extends Controller
{
    //
    public function Index()
    {
    	return view('administrador.encuestas');
    }

    public function Relacionar()
    {
        return view('administrador.asig_encuesta');
    } 
}
