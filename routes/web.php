<?php

use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/', function () {
    return view('usuarioCrear');
});


/* Route::get('/roles', [RolesController::class, 'index']);
Route::get('/usuarios/{id}', [UsuarioController::class, 'show']);
Route::get('/roles/{id}', [RolesController::class, 'show']); */