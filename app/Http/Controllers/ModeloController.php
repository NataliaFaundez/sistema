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
    	return view('administrador.crear_encuestas');
    }
//relaciona proyecto con el modelo de encuesta
    public function RelacionarModelo()
    {
    	return view('administrador.encuestas');
    }
//relaciona usuario con el modelos de emcesta
    public function Relacionar()
    {
        return view('administrador.asig_encuesta');
    } 
}
