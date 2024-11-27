<?php

use App\Http\Controllers\afActivoController;
use App\Http\Controllers\afDepreciacionController;
use App\Http\Controllers\afDVidaUtilController;
use App\Http\Controllers\afFuenteFinancieraController;
use App\Http\Controllers\branchController;
use App\Http\Controllers\companyController;
use App\Http\Controllers\departmentController;
use App\Http\Controllers\districtController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\municipController;
use App\Http\Controllers\municipNewController;
use App\Http\Controllers\positionController;
use App\Http\Controllers\usuarioController;
use App\Models\departmentModelo;
use App\Models\districtModelo;

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


//Registro de Municipios
Route::get('/municip', [municipController::class, 'index'])->name('Municip.index');
Route::get('/municip/create', [municipController::class, 'create'])->name('Municip.create');
Route::post('/municip', [municipController::class, 'store'])->name('Municip.store');
// Ruta para actualizar datos
Route::get('/municip/{id}', [municipController::class, 'edit'])->name('Municip.edit');
Route::put('/municip/{id}', [municipController::class, 'update'])->name('Municip.update');
// Ruta para eliminar datos
Route::delete('/municip/{id}', [municipController::class, 'destroy'])->name('Municip.destroy');

//Registro de Municipios (nuevo)
Route::get('/municipNew', [municipNewController::class, 'index'])->name('MunicipNew.index');
Route::get('/municipNew/create', [municipNewController::class, 'create'])->name('MunicipNew.create');
Route::post('/municipNew', [municipNewController::class, 'store'])->name('MunicipNew.store');
// Ruta para actualizar datos
Route::get('/municipNew/{id}', [municipNewController::class, 'edit'])->name('MunicipNew.edit');
Route::put('/municipNew/{id}', [municipNewController::class, 'update'])->name('MunicipNew.update');
// Ruta para eliminar datos
Route::delete('/municipNew/{id}', [municipNewController::class, 'destroy'])->name('MunicipNew.destroy');

//Registro de Distritos
Route::get('/district', [districtController::class, 'index'])->name('District.index');
Route::get('/district/create', [districtController::class, 'create'])->name('District.create');
Route::post('/district', [districtController::class, 'store'])->name('District.store');
// Ruta para actualizar datos
Route::get('/district/{id}', [districtController::class, 'edit'])->name('District.edit');
Route::put('/district/{id}', [districtController::class, 'update'])->name('District.update');
// Ruta para eliminar datos
Route::delete('/district/{id}', [districtController::class, 'destroy'])->name('District.destroy');

//Registro de Departamentos
Route::get('/department', [departmentController::class, 'index'])->name('Department.index');
Route::get('/department/create', [departmentController::class, 'create'])->name('Department.create');
Route::post('/department', [departmentController::class, 'store'])->name('Department.store');
// Ruta para actualizar datos
Route::get('/department/{id}', [departmentController::class, 'edit'])->name('Department.edit');
Route::put('/department/{id}', [departmentController::class, 'update'])->name('Department.update');
// Ruta para eliminar datos
Route::delete('/department/{id}', [departmentController::class, 'destroy'])->name('Department.destroy');

//Registro de Fuente Financiera
Route::get('/fuenteFinanciera', [afFuenteFinancieraController::class, 'index'])->name('FuenteFinanciera.index');
Route::get('/fuenteFinanciera/create', [afFuenteFinancieraController::class, 'create'])->name('FuenteFinanciera.create');
Route::post('/fuenteFinanciera', [afFuenteFinancieraController::class, 'store'])->name('FuenteFinanciera.store');
// Ruta para actualizar datos
Route::get('/fuenteFinanciera/{id}', [afFuenteFinancieraController::class, 'edit'])->name('FuenteFinanciera.edit');
Route::put('/fuenteFinanciera/{id}', [afFuenteFinancieraController::class, 'update'])->name('FuenteFinanciera.update');
// Ruta para eliminar datos
Route::delete('/fuenteFinanciera/{id}', [afFuenteFinancieraController::class, 'destroy'])->name('FuenteFinanciera.destroy');

//Registro de Vida Útil
Route::get('/vidaUtil', [afDVidaUtilController::class, 'index'])->name('VidaUtil.index');
Route::get('/vidaUtil/create', [afDVidaUtilController::class, 'create'])->name('VidaUtil.create');
Route::post('/vidaUtil', [afDVidaUtilController::class, 'store'])->name('VidaUtil.store');
// Ruta para actualizar datos
Route::get('/vidaUtil/{id}', [afDVidaUtilController::class, 'edit'])->name('VidaUtil.edit');
Route::put('/vidaUtil/{id}', [afDVidaUtilController::class, 'update'])->name('VidaUtil.update');
// Ruta para eliminar datos
Route::delete('/vidaUtil/{id}', [afDVidaUtilController::class, 'destroy'])->name('VidaUtil.destroy');

//Registro de Vida Útil
Route::get('/depreciacion', [afDepreciacionController::class, 'index'])->name('Depreciacion.index');
Route::get('/depreciacion/create', [afDepreciacionController::class, 'create'])->name('Depreciacion.create');
Route::post('/depreciacion', [afDepreciacionController::class, 'store'])->name('Depreciacion.store');
// Ruta para actualizar datos
Route::get('/depreciacion/{id}', [afDepreciacionController::class, 'edit'])->name('Depreciacion.edit');
Route::put('/depreciacion/{id}', [afDepreciacionController::class, 'update'])->name('Depreciacion.update');
// Ruta para eliminar datos
Route::delete('/depreciacion/{id}', [afDepreciacionController::class, 'destroy'])->name('Depreciacion.destroy');