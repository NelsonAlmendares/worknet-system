<?php

namespace App\Http\Controllers;

use App\Models\afActivoModelo;
use App\Models\departmentModelo;
use App\Models\districtModelo;
use App\Models\EmpleadoModelo;
use App\Models\municipModelo;
use App\Models\Solicitud;
use Illuminate\Http\Request;

class solicitudController extends Controller
{
    public function index()
    {
        $solicitudes = Solicitud::all();
        $empleados = EmpleadoModelo::all();
        $activos = afActivoModelo::all();
        return view('Solicitud.createSolicitud', compact('solicitudes', 'empleados', 'activos'));
    }

    public function create()
    {
        $solicitudes = Solicitud::all();
        $empleados = EmpleadoModelo::all();
        $activos = afActivoModelo::all();
        return view('Solicitud.createSolicitud', compact('solicitudes', 'empleados', 'activos'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'slog_accion' => 'required|string|max:45',
            'slog_comentario' => 'required|string|max:100',
            'slog_cod_af' => 'required|exists:af_activo,id_activo',
            'slog_id_emp' => 'required|exists:employee,idemployee',
        ]);

        $activo = afActivoModelo::findOrFail($request['slog_cod_af']);
        $codigoActivo = $activo->a_codigo_activo;
        $request['slog_codigo_af']=$codigoActivo;

        try {
            // Crear el registro de empleado en la base de datos
            Solicitud::create($request->all());
            // Redirigir con mensaje de éxito
            return redirect()->back()->with('success', 'Solicitud registrada con éxito!');
        } catch (\Exception $e) {
            // Redirigir con mensaje de error si falla la inserción
            return redirect()->back()->withErrors(['error' => 'Hubo un error al registrar la solicitud. Inténtalo de nuevo.']);
        }
    }

    public function edit($id)
    {
        $solicitud = Solicitud::findOrFail($id);
        $empleados = EmpleadoModelo::all();
        $activos = afActivoModelo::all();
        return view('Solicitud.updateSolicitud', compact('solicitud', 'empleados', 'activos'));
    }

    public function update(Request $request, $id)
    {
        $solicitud = Solicitud::findOrFail($id);
        $validated = $request->validate([
            'slog_accion' => 'required|string|max:45',
            'slog_comentario' => 'required|string|max:100',
            'slog_cod_af' => 'required|exists:af_activo,id_activo',
            'slog_id_emp' => 'required|exists:employee,idemployee',
        ]);

        $activo = afActivoModelo::findOrFail($request['slog_cod_af']);
        $codigoActivo = $activo->a_codigo_activo;
        $request['slog_codigo_af']=$codigoActivo;

        $solicitud->update($validated);

        return redirect()->back()->with('success', 'Solicitud actualizada con éxito.');
    }

    public function destroy($id)
    {
        //
    }
}
