<?php

namespace App\Http\Controllers;

use App\Models\departmentModelo;
use App\Models\districtModelo;
use App\Models\municipModelo;
use Illuminate\Http\Request;

class municipController extends Controller
{
    public function index()
    {
        //$districts = districtModelo::all();
        $departments = departmentModelo::all();
        $municips = municipModelo::all(); // Obtener todos los municipios
        //return view('Municip.createMunicip', compact('municips', 'districts', 'departments'));
        return view('Municip.createMunicip', compact('municips', 'departments'));
    }

    public function create()
    {
        //$districts = districtModelo::all();
        $departments = departmentModelo::all();
        $municips = municipModelo::all(); // Obtener todos los municipios
        //return view('Municip.createMunicip', compact('municips', 'districts', 'departments'));
        return view('Municip.createMunicip', compact('municips', 'departments'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'municipname' => 'required|string|max:45',
            'municip_e' => 'required|string|max:1',
            'municip_idmh' => 'required|string|max:2',
            //'municip_iddistrict' => 'required|exists:district,iddistrict',
            'municip_iddepartment' => 'required|exists:department,iddepartment',
        ]);

        try {
            // Crear el registro de empleado en la base de datos
            municipModelo::create($request->all());
            // Redirigir con mensaje de éxito
            return redirect()->back()->with('success', 'Municipio registrado con éxito!');
        } catch (\Exception $e) {
            // Redirigir con mensaje de error si falla la inserción
            return redirect()->back()->withErrors(['error' => var_dump($e).'Hubo un error al registrar el municipio. Inténtalo de nuevo.']);
        }
    }

    public function edit($id)
    {
        //$districts = districtModelo::all();
        $departments = departmentModelo::all();
        $municip = municipModelo::findOrFail($id);
        //return view('Municip.updateMunicip', compact('municip', 'districts', 'departments'));
        return view('Municip.updateMunicip', compact('municip', 'departments'));
    }

    public function update(Request $request, $id)
    {
        $municip = municipModelo::findOrFail($id);
        $validated = $request->validate([
            'municipname' => 'required|string|max:45',
            'municip_e' => 'required|string|max:1',
            'municip_idmh' => 'required|string|max:2',
            //'municip_iddistrict' => 'required|exists:district,iddistrict',
            'municip_iddepartment' => 'required|exists:department,iddepartment',
        ]);

        $municip->update($validated);

        return redirect()->back()->with('success', 'Municipio actualizado con éxito.');
    }

    public function destroy($id)
    {
        $municip = municipModelo::findOrFail($id);
        //$municip->delete();
        $municip->municip_e="E";
        $municip->save();
        return redirect()->route('Municip.index')->with('success', 'Municipio eliminado correctamente');
    }
}
