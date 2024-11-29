<?php

use App\Http\Controllers\branchController;
use App\Http\Controllers\companyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\positionController;
use App\Http\Controllers\usuarioController;
use App\Http\Controllers\afActivoController;



// LOGIN
Route::get('/', function () {return view('login');})->name('login');
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
Route::put('/branchRegister/{idbranch}', [branchController::class, 'update'])->name('Branches.update');
Route::post('/branchRegister', [branchController::class, 'store'])->name('Branches.store');
// Ruta para eliminar datos
Route::delete('branchRegister/{idbranch}', [branchController::class, 'destroy'])->name('Branches.destroy');

// REGISTRO DE SUCURSAL
Route::get('/sucursalRegister', [companyController::class, 'index'])->name('Sucursal.index');
Route::get('/sucursalRegister/{id}', [companyController::class, 'edit'])->name('Sucursal.edit');
Route::put('/sucursalRegister/{idcompany}', [companyController::class, 'update'])->name('Sucursal.update');
Route::post('/sucursalRegister', [companyController::class, 'store'])->name('Sucursal.store');
// Ruta para eliminar datos
Route::delete('sucursalRegister/{idcompany}', [companyController::class, 'destroy'])->name('Sucursal.destroy');

// REGISTRO DE CARGOS
Route::get('/cargosRegister', [positionController::class, 'index'])->name('Cargos.index');
Route::get('/cargosRegister/{id}', [positionController::class, 'edit'])->name('Cargos.edit');
Route::post('/cargosRegister', [positionController::class, 'store'])->name('Cargos.store');
Route::put('/cargosRegister/{idposition}', [positionController::class, 'update'])->name('Cargos.update');
// Ruta para eliminar datos
Route::delete('cargosRegister/{idposition}', [positionController::class, 'destroy'])->name('Cargos.destroy');

// REGISTRO DE USUARIOS
Route::get('/afActivoRegister', [afActivoController::class, 'index'])->name('activos.index');
Route::get('/afActivoRegister/create', [afActivoController::class, 'create'])->name('activos.createUsuario');
Route::post('/afActivoRegister', [afActivoController::class, 'store'])->name('activos.store');
// Ruta para actualizar datos
Route::get('/afActivoRegister/{id}', [afActivoController::class, 'edit'])->name('activos.edit');
Route::put('/afActivoRegister/{idusuario}', [afActivoController::class, 'update'])->name('activos.update');
// Ruta para eliminar datos
Route::delete('afActivoRegister/{iduser}', [afActivoController::class, 'destroy'])->name('activos.destroy');

