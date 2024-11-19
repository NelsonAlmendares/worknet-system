<?php

use App\Http\Controllers\branchController;
use App\Http\Controllers\companyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\positionController;
use App\Http\Controllers\usuarioController;


// LOGIN
Route::get('/', function () {
    return view('login');
})->name('login');
Route::get('/login', [UsuarioController::class, 'Login'])->name('login');
Route::post('/login', [UsuarioController::class, 'LoginPost'])->name('Usuario.LoginPost');

// FORMULARIO DE BIENVENIDA
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// REGISTRO DE USUARIOS
Route::get('/usuarioRegister', [usuarioController::class, 'index'])->name('Usuarios.index');
Route::get('/usuarioRegister/create', [usuarioController::class, 'create'])->name('Usuarios.createUsuario');
Route::post('/usuarioRegister', [usuarioController::class, 'store'])->name('Usuarios.store');
// Ruta para actualizar datos
Route::get('/usuarioRegister/{id}', [usuarioController::class, 'edit'])->name('Usuarios.edit');
Route::put('/usuarioRegister/{idusuario}', [usuarioController::class, 'update'])->name('Usuarios.update');
// Ruta para eliminar datos
Route::delete('usuarioRegister/{iduser}', [UsuarioController::class, 'destroy'])->name('Usuarios.destroy');

// REGISTRO DE EMPLEADOS
Route::get('/personaRegister', [EmpleadoController::class, 'index'])->name('Empleados.index');
Route::get('/personaRegister/create', [EmpleadoController::class, 'create'])->name('Empleados.createEmpleado');
Route::post('/personaRegister', [EmpleadoController::class, 'store'])->name('Empleados.store');
// Ruta para actualizar datos
Route::get('/personaRegister/{id}', [EmpleadoController::class, 'edit'])->name('Empleados.edit');
Route::put('/personaRegister/{idemployee}', [EmpleadoController::class, 'update'])->name('Empleados.update');
// Ruta para eliminar datos
Route::delete('/personaRegister/{id}', [EmpleadoController::class, 'destroy'])->name('Empleados.destroy');
// USAR PARA QUE SE REGISTREN DATOS: ALTER TABLE conacyt.user MODIFY COLUMN  user_e varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;

// REGISTRO DE COMPAÑIA
Route::get('/branchRegister', [branchController::class, 'index'])->name('Branches.index');
Route::get('/branchRegister/{id}', [branchController::class, 'edit'])->name('Branches.edit');
Route::put('/branchRegister/{idcompany}', [usuarioController::class, 'update'])->name('Branches.update');
// Ruta para eliminar datos
Route::delete('branchRegister/{idcompany}', [UsuarioController::class, 'destroy'])->name('Branches.destroy');

// REGISTRO DE SUCURSAL
Route::get('/sucursalRegister', [companyController::class, 'index'])->name('Sucursal.index');
Route::get('/sucursalRegister/{id}', [companyController::class, 'edit'])->name('Sucursal.edit');
Route::put('/sucursalRegister/{idcompany}', [usuarioController::class, 'update'])->name('Sucursal.update');
// Ruta para eliminar datos
Route::delete('sucursalRegister/{idcompany}', [UsuarioController::class, 'destroy'])->name('Sucursal.destroy');

// REGISTRO DE CARGOS
Route::get('/cargosRegister', [positionController::class, 'index'])->name('Cargos.index');
Route::get('/cargosRegister/{id}', [positionController::class, 'edit'])->name('Cargos.edit');
Route::put('/cargosRegister/{idposition}', [usuarioController::class, 'update'])->name('Cargos.update');
// Ruta para eliminar datos
Route::delete('cargosRegister/{idposition}', [UsuarioController::class, 'destroy'])->name('Cargos.destroy');
