<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        return Usuario::all();
    }

    public function show($id){
   
        return Usuario::find($id);
    }

    public function create(Request $body){

        $usuario = new Usuario();
        $usuario->name = $body->name;
        $usuario->lastname = $body->lastname;
        $usuario->email = $body->email;
        $usuario->password = $body->password;
        $usuario->save();
        return view('success');
    }

    
}
