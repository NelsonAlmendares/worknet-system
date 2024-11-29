<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\branchModelo;
use App\Models\companyModelo; // Importar el modelo Company para obtener las compañías

class branchController extends Controller
{
    public function index()
    {
        $branches = branchModelo::all(); // Obtener todos los empleados
        // dd($branches); // Ver los datos
        return view('Branch.showBranch', compact('branches'));
    }

    // Función para almacenar una nueva sucursal en la base de datos (Store)
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'brnname' => 'required|string|max:50',
            'brnborndate' => 'nullable|date',
            'brnemail' => 'nullable|string|max:125',
            'brntel' => 'nullable|string|max:15',
            'brn_compid' => 'nullable|integer',
            'brn_e' => 'required|string|max:1',
        ]);

        try {
            // Preparar los datos a insertar
            $data = $request->all();
            // dd($request);
            // Insertar en la base de datos
            branchModelo::create($data);

            return redirect()->route('Branches.index')->with('success', 'Sucursal registrada con éxito!');
        } catch (\Exception $e) {
            // Manejar errores
            return redirect()->back()->withErrors(['error' => 'Hubo un error al registrar la sucursal: ' . $e->getMessage()]);
        }
    }


    // Función para editar la sucursal (Edit)
    public function edit($id)
    {
        $branch = branchModelo::findOrFail($id);
        // Obtener todas las compañías para la vista de edición
        $companies = companyModelo::all();
        return view('Branches.updateBranch', compact('branch', 'companies'));
    }

    // Función para actualizar una sucursal (Update)
    public function update(Request $request, $idbranch)
    {
        $request->validate([
            'brnname' => 'required|string|max:50',
            'brnborndate' => 'nullable|date',
            'brnemail' => 'nullable|string|max:25',
            'brntel' => 'nullable|string|max:15',
            'brnlogo' => 'nullable|string|max:50',
            'brn_compid' => 'nullable|integer',
            'brn_e' => 'nullable|string|max:1',
        ]);

        $branch = branchModelo::findOrFail($idbranch);
        $branch->update($request->all());

        return redirect()->route('Branches.index')->with('success', 'Sucursal actualizada con éxito.');
    }

    // Función para eliminar una sucursal (Destroy)
    public function destroy($id)
    {
        $branch = branchModelo::findOrFail($id);
        $branch->delete();

        return redirect()->route('Branches.index')->with('success', 'Sucursal eliminada correctamente.');
    }
}
