<?php

use App\Http\Controllers\branchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\usuarioController;


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/usuarioRegister', [usuarioController::class, 'index'])->name('Usuarios.index');
Route::get('/usuarioRegister/create', [usuarioController::class, 'create'])->name('Usuarios.createUsuario');
Route::post('/usuarioRegister', [usuarioController::class, 'store'])->name('Usuarios.store');
// Ruta para actualizar datos
Route::get('/usuarioRegister/{id}', [usuarioController::class, 'edit'])->name('Usuarios.edit');
Route::put('/usuarioRegister/{idusuario}', [usuarioController::class, 'update'])->name('Usuarios.update');
// Ruta para eliminar datos
Route::delete('usuarioRegister/{iduser}', [UsuarioController::class, 'destroy'])->name('Usuarios.destroy');


// Registrar datos
Route::get('/personaRegister', [EmpleadoController::class, 'index'])->name('Empleados.index');
Route::get('/personaRegister/create', [EmpleadoController::class, 'create'])->name('Empleados.createEmpleado');
Route::post('/personaRegister', [EmpleadoController::class, 'store'])->name('Empleados.store');
// Ruta para actualizar datos
Route::get('/personaRegister/{id}', [EmpleadoController::class, 'edit'])->name('Empleados.edit');
Route::put('/personaRegister/{idemployee}', [EmpleadoController::class, 'update'])->name('Empleados.update');
// Ruta para eliminar datos
Route::delete('/personaRegister/{id}', [EmpleadoController::class, 'destroy'])->name('Empleados.destroy');


Route::get('/branchRegister', [branchController::class, 'index'])->name('branches.index');
