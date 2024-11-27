<?php

namespace App\Http\Controllers;

use App\Models\afFuenteFinancieraModelo;
use App\Models\departmentModelo;
use App\Models\districtModelo;
use App\Models\municipNewModelo;
use Illuminate\Http\Request;

class afFuenteFinancieraController extends Controller
{
    public function index()
    {   
        $fuentes = afFuenteFinancieraModelo::all();
        return view('FuenteFinanciera.createFuenteFinanciera', compact('fuentes'));
    }

    public function create()
    {
        $fuentes = afFuenteFinancieraModelo::all();
        return view('FuenteFinanciera.createFuenteFinanciera', compact('fuentes'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'ff_nombre' => 'required|string|max:45',
            'ff_e' => 'required|string|max:1',
            'ff_desc' => 'required|string|max:100',
        ]);

        try {
            // Crear el registro de empleado en la base de datos
            afFuenteFinancieraModelo::create($request->all());
            // Redirigir con mensaje de éxito
            return redirect()->back()->with('success', 'Fuente Financiera registrada con éxito!');
        } catch (\Exception $e) {
            // Redirigir con mensaje de error si falla la inserción
            return redirect()->back()->withErrors(['error' => 'Hubo un error al registrar la fuente financiera. Inténtalo de nuevo.']);
        }
    }

    public function edit($id)
    {
        $fuente = afFuenteFinancieraModelo::findOrFail($id);
        return view('FuenteFinanciera.updateFuenteFinanciera', compact('fuente'));
    }

    public function update(Request $request, $id)
    {
        $fuente = afFuenteFinancieraModelo::findOrFail($id);
        $validated = $request->validate([
            'ff_nombre' => 'required|string|max:45',
            'ff_e' => 'required|string|max:1',
            'ff_desc' => 'required|string|max:100',
        ]);

        $fuente->update($validated);

        return redirect()->back()->with('success', 'Fuente financiera actualizada con éxito.');
    }

    public function destroy($id)
    {
        $fuente = afFuenteFinancieraModelo::findOrFail($id);
        //$department->delete();
        $fuente->ff_e="E";
        $fuente->save();
        return redirect()->route('FuenteFinanciera.index')->with('success', 'Fuente financiera eliminada correctamente');
    }
}
