<?php

namespace App\Http\Controllers;

use App\Models\departmentModelo;
use App\Models\municipNewModel;
use Illuminate\Http\Request;

class municipNewController extends Controller
{
    public function index()
    {
        $departments = departmentModelo::all();
        $municipsnew = municipNewModel::all(); // Obtener todos los municipios
        return view('MunicipNew.createMunicipNew', compact('municipsnew', 'departments'));
    }

    public function create()
    {
        $departments = departmentModelo::all();
        $municipsnew = municipNewModel::all(); // Obtener todos los municipios
        return view('MunicipNew.createMunicipNew', compact('municipsnew', 'departments'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'municipnewname' => 'required|string|max:45',
            'municipnew_e' => 'required|string|max:1',
            'municipnew_idmh' => 'required|string|max:2',
            'municipnew_iddept' => 'required|exists:department,iddepartment',
        ]);

        try {
            // Crear el registro de empleado en la base de datos
            municipNewModel::create($request->all());
            // Redirigir con mensaje de éxito
            return redirect()->back()->with('success', 'Municipio (nuevo) registrado con éxito!');
        } catch (\Exception $e) {
            // Redirigir con mensaje de error si falla la inserción
            return redirect()->back()->withErrors(['error' => 'Hubo un error al registrar el municipio (nuevo). Inténtalo de nuevo.']);
        }
    }

    public function edit($id)
    {
        $departments = departmentModelo::all();
        $municipnew = municipNewModel::findOrFail($id);
        return view('MunicipNew.updateMunicipNew', compact('municipnew', 'departments'));
    }

    public function update(Request $request, $id)
    {
        $municip = municipNewModel::findOrFail($id);
        $validated = $request->validate([
            'municipnewname' => 'required|string|max:45',
            'municipnew_e' => 'required|string|max:1',
            'municipnew_idmh' => 'required|string|max:2',
            'municipnew_iddept' => 'required|exists:department,iddepartment',
        ]);

        $municip->update($validated);

        return redirect()->back()->with('success', 'Municipio (nuevo) actualizado con éxito.');
    }

    public function destroy($id)
    {
        $municip = municipNewModel::findOrFail($id);
        $municip->municipnew_e="E";
        $municip->save();

        return redirect()->route('MunicipNew.index')->with('success', 'Municipio (nuevo) eliminado correctamente');
    }
}
