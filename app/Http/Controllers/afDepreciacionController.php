<?php

namespace App\Http\Controllers;

use App\Models\afActivoModelo;
use App\Models\afDepreciacionModelo;
use App\Models\afDepreciacionVModelo;
use App\Models\afDVidaUtilModelo;
use App\Models\departmentModelo;
use App\Models\districtModelo;
use App\Models\municipNewModelo;
use Illuminate\Http\Request;

class afDepreciacionController extends Controller
{
    public function index()
    {   
        $depreciaciones = afDepreciacionVModelo::all();
        $activos = afActivoModelo::all();
        $vidas = afDVidaUtilModelo::all();
        return view('Depreciacion.createDepreciacion', compact('depreciaciones', 'activos', 'vidas'));
    }

    public function create()
    {
        $depreciaciones = afDepreciacionVModelo::all();
        $activos = afActivoModelo::all();
        $vidas = afDVidaUtilModelo::all();
        return view('Depreciacion.createDepreciacion', compact('depreciaciones', 'activos', 'vidas'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'afd_activo' => 'required|exists:af_activo,id_activo',
            'afd_valor_depreciacion' => 'required|numeric',
            'afd_vida_util' => 'required|exists:af_d_vida_util,id_vida_util_afd',
            'afd_fecha_generacion' => 'required|date',
            'afd_fecha_corte' => 'required|date|after:afd_fecha_generacion',
            'afd_e' => 'required|string|max:1',
            'afd_codigo_informe' => 'required|string|max:20',
        ]);
        $request['afd_valor_depreciacion'] = round($request['afd_valor_depreciacion'], 2);

        try {
            // Crear el registro de empleado en la base de datos
            afDepreciacionModelo::create($request->all());
            // Redirigir con mensaje de éxito
            return redirect()->back()->with('success', 'Depreciación registrada con éxito!');
        } catch (\Exception $e) {
            // Redirigir con mensaje de error si falla la inserción
            return redirect()->back()->withErrors(['error' => $e.'Hubo un error al registrar la depreciación. Inténtalo de nuevo.']);
        }
    }

    public function edit($id)
    {
        $depreciacion = afDepreciacionModelo::findOrFail($id);
        $activos = afActivoModelo::all();
        $vidas = afDVidaUtilModelo::all();
        return view('Depreciacion.updateDepreciacion', compact('depreciacion', 'activos', 'vidas'));
    }

    public function update(Request $request, $id)
    {
        $depreciacion = afDepreciacionModelo::findOrFail($id);
        $validated = $request->validate([
            'afd_activo' => 'required|exists:af_activo,id_activo',
            'afd_valor_depreciacion' => 'required|numeric',
            'afd_vida_util' => 'required|exists:af_d_vida_util,id_vida_util_afd',
            'afd_fecha_generacion' => 'required|date',
            'afd_fecha_corte' => 'required|date|after:afd_fecha_generacion',
            'afd_e' => 'required|string|max:1',
            'afd_codigo_informe' => 'required|string|max:20',
        ]);
        $request['afd_valor_depreciacion'] = round($request['afd_valor_depreciacion'], 2);
        $depreciacion->update($validated);

        return redirect()->back()->with('success', 'Depreciación actualizada con éxito.');
    }

    public function destroy($id)
    {
        $depreciacion = afDepreciacionModelo::findOrFail($id);
        //$department->delete();
        $depreciacion->afd_e="E";
        $depreciacion->save();
        return redirect()->route('Depreciacion.index')->with('success', 'Depreciación eliminada correctamente');
    }
}
 