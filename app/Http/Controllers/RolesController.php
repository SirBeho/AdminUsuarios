<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index(){
        return Roles::all();
    }

    public function show($id){
   
        return Roles::find($id);
    }

    public function create(Request $body){

        $usuario = new Roles();
        $usuario->nombre = $body->nombre;
        $usuario->save();
        return "registro ".$body->name." añadido satisfacoriamente";
    }


   
}
