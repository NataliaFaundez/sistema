<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\User;

class UsuarioController extends Controller
{
    //
    public function PostGuardar(Request $request){
    	$validator = Validator::make($request->all(), [            
            'name'  =>'required|unique:clientes,nombre',    
            'email'=>'required|email',
            'password'=>'required|',
            'rol'=>'required',
            'cliente_id'=>'required|',        
        ]);
        
    
        if ($validator->fails())
        {
            $users = User::all();
            return view('administrador.usuarios', ["users" => $users,"errors" => $validator->errors()->all()]);
        }

        $inputs = $request->all();
        //$user = Auth::user();
        //$inputs["validador_id"] = $user->id;

        User::create($inputs);
        return redirect('/sistema/clientes');
    }

    public function Index(){
        $users = User::all();
        return view('administrador.usuarios', ["users" => $users]);
    }

    public function Editar($id){
        $user = User::findOrFail($id);
        return view('sistema.editar_clientes', ['users'=> $users]);
    }
    public function EditarSave(Request $request, $id){           
            $validator = Validator::make($request->all(), [            
            'name'  =>'required|unique:clientes,nombre',    
            'email'=>'required|email',
            'password'=>'required|',
            'rol'=>'required',
            'cliente_id'=>'required|',        
        ]);            
        
        if ($validator->fails())
        {
            $users = User::all();
            return view('administrador.usuarios', ["clientes" => $clientes,"errors" => $validator->errors()->all()]);
        }
        $user = User::findOrFail($id);
        $user->name = $request->name;        
        $user->email = $request->email;
        $user->password = $request->password;
        $user->rol = $request->rol;
        $user->cliente_id = $request->cliente_id;
        $user->save();
        return redirect('/sistema/clientes');
    }
    

    public function Eliminar($id){       
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/sistema/clientes');
    }
}
