<?php

use App\Http\Controllers\branchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;



Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// Registrar datos
use App\Http\Controllers\EmployeeController;

Route::get('/personaRegister', [EmpleadoController::class, 'index'])->name('Empleados.index');
Route::get('/personaRegister/create', [EmpleadoController::class, 'create'])->name('Empleados.createEmpleado');
Route::post('/personaRegister', [EmpleadoController::class, 'store'])->name('Empleados.store');
// Ruta para actualizar datos
Route::get('/personaRegister/{id}', [EmpleadoController::class, 'edit'])->name('Empleados.edit');
Route::put('/personaRegister/{idemployee}', [EmpleadoController::class, 'update'])->name('Empleados.update');
// Ruta para eliminar datos
Route::delete('/personaRegister/{id}', [EmpleadoController::class, 'destroy'])->name('Empleados.destroy');


Route::get('/branchRegister', [branchController::class, 'index'])->name('branches.index');
