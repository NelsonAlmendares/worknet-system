<?php

use App\Http\Controllers\afActivoController;
use App\Http\Controllers\afDepreciacionController;
use App\Http\Controllers\afDVidaUtilController;
use App\Http\Controllers\afFuenteFinancieraController;
use App\Http\Controllers\afTipoBienContableController;
use App\Http\Controllers\branchController;
use App\Http\Controllers\companyController;
use App\Http\Controllers\countryController;
use App\Http\Controllers\departmentController;
use App\Http\Controllers\districtController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\municipController;
use App\Http\Controllers\municipNewController;
use App\Http\Controllers\positionController;
use App\Http\Controllers\rolController;
use App\Http\Controllers\solicitudController;
use App\Http\Controllers\usuarioController;
use App\Models\departmentModelo;
use App\Models\districtModelo;

// LOGIN
Route::get('/', function () { return view('login'); })->name('login');
Route::get('/login', [UsuarioController::class, 'Login'])->name('login');
Route::post('/login', [UsuarioController::class, 'LoginPost'])->name('Usuario.LoginPost');
Route::post('/logout', [UsuarioController::class, 'logout'])->name('logout');

// Rutas protegidas con middleware de autenticación
Route::middleware(['auth'])->group(function () {
    // FORMULARIO DE BIENVENIDA
    Route::get('/welcome', function () { return view('welcome'); })->name('welcome');

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
    Route::delete('/cargosRegister/{id}', [positionController::class, 'destroy'])->name('Cargos.destroy');

    // REGISTRO DE USUARIOS
    Route::get('/afActivoRegister', [afActivoController::class, 'index'])->name('activos.index');
    Route::get('/afActivoRegister/create', [afActivoController::class, 'create'])->name('activos.createUsuario');
    Route::post('/afActivoRegister', [afActivoController::class, 'store'])->name('activos.store');
    // Ruta para actualizar datos
    Route::get('/afActivoRegister/{id}', [afActivoController::class, 'edit'])->name('activos.edit');
    Route::put('/afActivoRegister/{id_activo}', [afActivoController::class, 'update'])->name('activos.update');
    // Ruta para eliminar datos
    Route::delete('afActivoRegister/{id_activo}', [afActivoController::class, 'destroy'])->name('activos.destroy');

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

    //Registro de depreciación
    Route::get('/depreciacion', [afDepreciacionController::class, 'index'])->name('Depreciacion.index');
    Route::get('/depreciacion/create', [afDepreciacionController::class, 'create'])->name('Depreciacion.create');
    Route::post('/depreciacion', [afDepreciacionController::class, 'store'])->name('Depreciacion.store');
    // Ruta para actualizar datos
    Route::get('/depreciacion/{id}', [afDepreciacionController::class, 'edit'])->name('Depreciacion.edit');
    Route::put('/depreciacion/{id}', [afDepreciacionController::class, 'update'])->name('Depreciacion.update');
    // Ruta para eliminar datos
    Route::delete('/depreciacion/{id}', [afDepreciacionController::class, 'destroy'])->name('Depreciacion.destroy');

    //Registro de Bien Contable
    Route::get('/bienContable', [afTipoBienContableController::class, 'index'])->name('BienContable.index');
    Route::get('/bienContable/create', [afTipoBienContableController::class, 'create'])->name('BienContable.create');
    Route::post('/bienContable', [afTipoBienContableController::class, 'store'])->name('BienContable.store');
    // Ruta para actualizar datos
    Route::get('/bienContable/{id}', [afTipoBienContableController::class, 'edit'])->name('BienContable.edit');
    Route::put('/bienContable/{id}', [afTipoBienContableController::class, 'update'])->name('BienContable.update');
    // Ruta para eliminar datos
    Route::delete('/bienContable/{id}', [afTipoBienContableController::class, 'destroy'])->name('BienContable.destroy');

    //Registro de País
    Route::get('/country', [countryController::class, 'index'])->name('Country.index');
    Route::get('/country/create', [countryController::class, 'create'])->name('Country.create');
    Route::post('/country', [countryController::class, 'store'])->name('Country.store');
    // Ruta para actualizar datos
    Route::get('/country/{id}', [countryController::class, 'edit'])->name('Country.edit');
    Route::put('/country/{id}', [countryController::class, 'update'])->name('Country.update');
    // Ruta para eliminar datos
    Route::delete('/country/{id}', [countryController::class, 'destroy'])->name('Country.destroy');

    //Registro de País
    Route::get('/solicitud', [solicitudController::class, 'index'])->name('Solicitud.index');
    Route::get('/solicitud/create', [solicitudController::class, 'create'])->name('Solicitud.create');
    Route::post('/solicitud', [solicitudController::class, 'store'])->name('Solicitud.store');
    // Ruta para actualizar datos
    Route::get('/solicitud/{id}', [solicitudController::class, 'edit'])->name('Solicitud.edit');
    Route::put('/solicitud/{id}', [solicitudController::class, 'update'])->name('Solicitud.update');
    // Ruta para eliminar datos
    Route::delete('/solicitud/{id}', [solicitudController::class, 'destroy'])->name('Solicitud.destroy');

    //Registro de Rol
    Route::get('/rol', [rolController::class, 'index'])->name('Rol.index');
    Route::get('/rol/create', [rolController::class, 'create'])->name('Rol.create');
    Route::post('/rol', [rolController::class, 'store'])->name('Rol.store');
    // Ruta para actualizar datos
    Route::get('/rol/{id}', [rolController::class, 'edit'])->name('Rol.edit');
    Route::put('/rol/{id}', [rolController::class, 'update'])->name('Rol.update');
    // Ruta para eliminar datos
    Route::delete('/rol/{id}', [rolController::class, 'destroy'])->name('Rol.destroy');
});
