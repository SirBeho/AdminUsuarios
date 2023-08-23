<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function show()
    {
        $datos = [
            'name' => old('name'),
            'lastname' => old('lastname'),
            'email' => old('email'),
            // Otros campos...
        ];

        return view('usuarioCrear', compact('datos'));
}
}
