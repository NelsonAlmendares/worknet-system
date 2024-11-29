<?php

namespace App\Http\Controllers;

use App\Models\countryModelo;
use App\Models\departmentModelo;
use App\Models\districtModelo;
use App\Models\municipNewModelo;
use Illuminate\Http\Request;

class countryController extends Controller
{
    public function index()
    {   
        $paises = countryModelo::all();
        return view('Country.createCountry', compact('paises'));
    }

    public function create()
    {
        $paises = countryModelo::all();
        return view('Country.createCountry', compact('paises'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'contryname' => 'required|string|max:45',
            'contry_e' => 'required|string|max:1',
            'contry_idmh' => 'required|string|max:2',
        ]);

        try {
            // Crear el registro de empleado en la base de datos
            countryModelo::create($request->all());
            // Redirigir con mensaje de éxito
            return redirect()->back()->with('success', 'País registrado con éxito!');
        } catch (\Exception $e) {
            // Redirigir con mensaje de error si falla la inserción
            return redirect()->back()->withErrors(['error' => 'Hubo un error al registrar el país. Inténtalo de nuevo.']);
        }
    }

    public function edit($id)
    {
        $pais = countryModelo::findOrFail($id);
        return view('Country.updateCountry', compact('pais'));
    }

    public function update(Request $request, $id)
    {
        $pais = countryModelo::findOrFail($id);
        $validated = $request->validate([
            'contryname' => 'required|string|max:45',
            'contry_e' => 'required|string|max:1',
            'contry_idmh' => 'required|string|max:2',
        ]);

        $pais->update($validated);

        return redirect()->back()->with('success', 'País actualizado con éxito.');
    }

    public function destroy($id)
    {
        $pais = countryModelo::findOrFail($id);
        //$department->delete();
        $pais->contry_e="E";
        $pais->save();
        return redirect()->route('Country.index')->with('success', 'País eliminado correctamente');
    }
}
