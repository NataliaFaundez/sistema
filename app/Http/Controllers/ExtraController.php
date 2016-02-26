<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ExtraController extends Controller
{
    // 
    public function VerFolio(){
    	return view('controlador.ver_folio');
    }

    public function AsigFolio(){
        return view('administrador.asig_folios');
    }
}
