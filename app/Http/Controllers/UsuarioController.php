<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

require_once '../../AdminUsuarios/resources/functions/error.php';

class UsuarioController extends Controller
{
    public function index(){
        return Usuario::all();
    }

    public function show($id){
   
        return Usuario::find($id);
    }

    public function create(Request $request)
{
    try {
        $usuario = new Usuario();
        $usuario->name = $request->input('name');
        $usuario->lastname = $request->input('lastname');
        $usuario->email = $request->input('email');
        $usuario->password = $request->input('password');
        $usuario->save();

        return view('success')->with('msg', 'Usuario creado correctamente');
    } catch (\Exception $e) {
        return redirect()->route('formulario.show')->with('error', 'Error al crear el usuario: ' . Error_SQL($e))->withInput();
    }
}

    public function lista(){
   
        $usuario =  Usuario::all();
        return view('lista',compact(array('usuario')));
    }

    
}
