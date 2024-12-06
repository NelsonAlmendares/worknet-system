<?php

namespace App\Http\Controllers;

use App\Models\rolModelo;
use Illuminate\Http\Request;

class rolController extends Controller
{
    public function index()
    {   
        $roles = rolModelo::all();
        return view('Rol.createRol', compact('roles'));
    }

    public function create()
    {
        $roles = rolModelo::all();
        return view('Rol.createRol', compact('roles'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'rolname' => 'required|string|max:45',
            'rol_e' => 'required|string|max:1',
            'roldesc' => 'required|string|max:100',
        ]);

        try {
            // Crear el registro de empleado en la base de datos
            rolModelo::create($request->all());
            // Redirigir con mensaje de éxito
            return redirect()->back()->with('success', 'Rold registrado con éxito!');
        } catch (\Exception $e) {
            // Redirigir con mensaje de error si falla la inserción
            return redirect()->back()->withErrors(['error' => 'Hubo un error al registrar el Rol. Inténtalo de nuevo.']);
        }
    }

    public function edit($id)
    {
        $rol = rolModelo::findOrFail($id);
        return view('Rol.updateRol', compact('rol'));
    }

    public function update(Request $request, $id)
    {
        $rol = rolModelo::findOrFail($id);
        $validated = $request->validate([
            'rolname' => 'required|string|max:45',
            'rol_e' => 'required|string|max:1',
            'roldesc' => 'required|string|max:100',
        ]);

        $rol->update($validated);

        return redirect()->back()->with('success', 'Rol actualizado con éxito.');
    }

    public function destroy($id)
    {
        $rol = rolModelo::findOrFail($id);
        //$department->delete();
        $rol->rol_e="E";
        $rol->save();
        return redirect()->route('Rol.index')->with('success', 'Rol eliminado correctamente');
    }
}
