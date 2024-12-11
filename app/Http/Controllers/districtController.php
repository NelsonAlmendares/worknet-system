<?php

namespace App\Http\Controllers;

use App\Models\districtModelo;
use App\Models\municipNewModel;
use Illuminate\Http\Request;

class districtController extends Controller
{
    public function index()
    {
        $districts = districtModelo::all();
        $municipsnew = municipNewModel::all();
        return view('District.createDistrict', compact('municipsnew', 'districts'));
    }

    public function create()
    {
        $municipsnew = municipNewModel::all();
        $districts = districtModelo::all();

        return view('District.createDistrict', compact('municipsnew', 'districts'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'distname' => 'required|string|max:45',
            'dist_e' => 'required|string|max:1',
            'dist_idmh' => 'required|string|max:2',
            'dist_idmunicipnew' => 'required|exists:municipnew,idmunicipnew',
        ]);

        try {
            // Crear el registro de empleado en la base de datos
            districtModelo::create($request->all());
            // Redirigir con mensaje de éxito
            return redirect()->back()->with('success', 'Distrito registrado con éxito!');
        } catch (\Exception $e) {
            // Redirigir con mensaje de error si falla la inserción
            return redirect()->back()->withErrors(['error' => 'Hubo un error al registrar el distrito. Inténtalo de nuevo.']);
        }
    }

    public function edit($id)
    {
        $municipsnew = municipNewModel::all();
        $district = districtModelo::findOrFail($id);
        return view('District.updateDistrict', compact('municipsnew', 'district'));
    }

    public function update(Request $request, $id)
    {
        $distric = districtModelo::findOrFail($id);
        $validated = $request->validate([
            'distname' => 'required|string|max:45',
            'dist_e' => 'required|string|max:1',
            'dist_idmh' => 'required|string|max:2',
            'dist_idmunicipnew' => 'required|exists:municipnew,idmunicipnew',
        ]);

        $distric->update($validated);

        return redirect()->back()->with('success', 'Distrito actualizado con éxito.');
    }

    public function destroy($id)
    {
        $distric = districtModelo::findOrFail($id);
        //$distric->delete();
        $distric->dist_e="E";
        $distric->save();
        return redirect()->route('District.index')->with('success', 'Municipio eliminado correctamente');
    }
}
