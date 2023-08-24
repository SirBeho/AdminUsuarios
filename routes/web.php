<?php


use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.lista');

Route::get('/', function () {
    return view('usuarioCrear');
})->name('formulario.show');

/* Route::get('/roles', [RolesController::class, 'index']);
Route::get('/usuarios/{id}', [UsuarioController::class, 'show']);
Route::get('/roles/{id}', [RolesController::class, 'show']); */