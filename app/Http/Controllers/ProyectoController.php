<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Proyecto;
use App\Cliente;

class ProyectoController extends Controller
{
    //
    public function PostGuardar(Request $request){
        $validator = Validator::make($request->all(), [            
            'nombre'  =>'required|alpha',             
            'cliente_id' =>'required|exists:clientes,id'         
        ]);

        if ($validator->fails())
        {
            $proyectos = Proyecto::all();
            return view('administrador.proyecto', ["proyectos" => $proyectos,"errors" => $validator->errors()->all()]);
        }

        $inputs = $request->all();

        Proyecto::create($inputs);
        return redirect('/administrador/proyecto');
    }

    public function Index(){
        $proyectos = Proyecto::with("cliente")->get();
        return view('administrador.proyecto', ["proyectos" => $proyectos, "clientes"=> Cliente::all()]);
    }

    public function Editar($id){
        $proyecto = Proyecto::findOrFail($id);
        $clientes = Cliente::all();
        return view('administrador.proyecto_editar', compact("proyecto", "clientes"));
    }
    public function EditarSave(Request $request, $id){
        $validator = Validator::make($request->all(), [            
            'nombre'  =>'required|alpha',
            'cliente_id'=>'required|exists:clientes,id'            
        ]);
        if ($validator->fails())
        {
            $proyectos = Proyecto::all();
            return view('administrador.proyecto', ["proyectos" => $proyectos,"errors" => $validator->errors()->all()]);
        }
        $proyecto = Proyecto::findOrFail($id);
        $clientes = Cliente::all();
        $proyecto->nombre = $request->nombre;
        $proyecto->cliente_id = $request->cliente_id;              
        $proyecto->save();
        return redirect('/administrador/proyecto');
    }

    public function Eliminar($id){       
        $proyecto = Proyecto::findOrFail($id);
        $proyecto->delete();
        return redirect('/administrador/proyecto');
    }
}
