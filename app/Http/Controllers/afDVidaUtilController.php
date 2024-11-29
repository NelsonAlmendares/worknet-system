<?php

namespace App\Http\Controllers;

use App\Models\afDVidaUtilModelo;
use Illuminate\Http\Request;

class afDVidaUtilController extends Controller
{
    public function index()
    {   
        $vidas = afDVidaUtilModelo::all();
        return view('VidaUtil.createVidaUtil', compact('vidas'));
    }

    public function create()
    {
        $vidas = afDVidaUtilModelo::all();
        return view('VidaUtil.createVidaUtil', compact('vidas'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'tipo_vida_util_afd' => 'required|string|max:45',
            'factor_anual' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'plazo_vida_util_afd' => 'required|numeric',
        ]);

        $request['factor_anual'] = round($request['factor_anual'], 2);

        try {
            // Crear el registro de empleado en la base de datos
            afDVidaUtilModelo::create($request->all());
            // Redirigir con mensaje de éxito
            return redirect()->back()->with('success', 'Vida útil registrada con éxito!');
        } catch (\Exception $e) {
            // Redirigir con mensaje de error si falla la inserción
            return redirect()->back()->withErrors(['error' => 'Hubo un error al registrar la vida útil. Inténtalo de nuevo.']);
        }
    }

    public function edit($id)
    {
        $vida = afDVidaUtilModelo::findOrFail($id);
        return view('VidaUtil.updateVidaUtil', compact('vida'));
    }

    public function update(Request $request, $id)
    {
        $vida = afDVidaUtilModelo::findOrFail($id);
        $validated = $request->validate([
            'tipo_vida_util_afd' => 'required|string|max:45',
            'factor_anual' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'plazo_vida_util_afd' => 'required|numeric',
        ]);
        $request['factor_anual'] = round($request['factor_anual'], 2);
        $vida->update($validated);

        return redirect()->back()->with('success', 'Vida útil actualizada con éxito.');
    }

    public function destroy($id)
    {
        //
    }
}
