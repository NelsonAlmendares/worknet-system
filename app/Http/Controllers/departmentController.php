<?php

namespace App\Http\Controllers;

use App\Models\departmentModelo;
use App\Models\districtModelo;
use App\Models\municipNewModelo;
use Illuminate\Http\Request;

class departmentController extends Controller
{
    public function index()
    {   
        $departments = departmentModelo::all();
        return view('Department.createDepartment', compact('departments'));
    }

    public function create()
    {
        $departments = departmentModelo::all();

        return view('Department.createDepartment', compact('departments'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'deptname' => 'required|string|max:45',
            'dept_e' => 'required|string|max:1',
            'dept_idmh' => 'required|string|max:2',
        ]);

        try {
            // Crear el registro de empleado en la base de datos
            departmentModelo::create($request->all());
            // Redirigir con mensaje de éxito
            return redirect()->back()->with('success', 'Departamento registrado con éxito!');
        } catch (\Exception $e) {
            // Redirigir con mensaje de error si falla la inserción
            return redirect()->back()->withErrors(['error' => 'Hubo un error al registrar el departamento. Inténtalo de nuevo.']);
        }
    }

    public function edit($id)
    {
        $department = departmentModelo::findOrFail($id);
        return view('Department.updateDepartment', compact('department'));
    }

    public function update(Request $request, $id)
    {
        $department = departmentModelo::findOrFail($id);
        $validated = $request->validate([
            'deptname' => 'required|string|max:45',
            'dept_e' => 'required|string|max:1',
            'dept_idmh' => 'required|string|max:2',
        ]);

        $department->update($validated);

        return redirect()->back()->with('success', 'Departamento actualizado con éxito.');
    }

    public function destroy($id)
    {
        $department = departmentModelo::findOrFail($id);
        //$department->delete();
        $department->dept_e="E";
        $department->save();
        return redirect()->route('Department.index')->with('success', 'Departamento eliminado correctamente');
    }
}
