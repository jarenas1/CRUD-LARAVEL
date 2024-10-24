<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios.index'); //esa referencia le asigna el nombre usuarios.index a la ruta para que sea más facil de manejar
Route::get('usuarios/{id}', [UserController::class, 'show'])->name('usuarios.show');
Route::delete('usuarios/{id}', [UserController::class, 'destroy'])->name('usuarios.destroy');
Route::get('usuarios/editar/{id}', [UserController::class, 'edit'])->name('usuarios.edit');
Route::put('/users/{id}/update', [UserController::class, 'update'])->name('usuarios.update');