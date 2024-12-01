<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\positionModelo;
use App\Models\typePosition; // Para mostrar los tipos de posición en la vista
use App\Models\unitModelo;

class PositionController extends Controller
{
    // Mostrar lista de posiciones (Index)
    public function index()
    {
        // Obtener todas las posiciones y tipos de posición
        $positions = positionModelo::all();
        $typePositions = typePosition::all();  // Obtener todos los tipos de posición
        $units = unitModelo::all();
        // Pasar ambas variables a la vista
        return view('Position.createPosition', compact('positions', 'typePositions', 'units'));
    }

    // Función para llamar la vista de crear posición (Crear)
    public function create()
    {
        $typePositions = typePosition::all(); // Obtener todos los tipos de posición
        dd($typePositions);  // Ver los datos
        return view('Cargos.index', compact('typePositions'));
    }

    // Función para almacenar una nueva posición en la base de datos (Store)
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'positname' => 'required|string|max:100',
            'positnameb' => 'nullable|string|max:100',
            'positdesc' => 'nullable|string',
            'positstate' => 'nullable|string|max:1',
            'positrequest' => 'nullable|string',
            'posit_idunit' => 'nullable|integer',
            'posit_idunitb' => 'nullable|integer',
            'posit_idtypeposit' => 'required|integer',
            'posit_e' => 'nullable|string|max:1',
        ]);

        try {
            // Crear el registro de posición en la base de datos
            positionModelo::create($request->all());
            return redirect()->route('Cargos.index')->with('success', 'Posición registrada con éxito!');
        } catch (\Exception $e) {
            // Imprimir el error exacto en los errores de la vista
            return redirect()->back()->withErrors([
                'error' => 'Hubo un error al registrar la posición: ' . $e->getMessage()
            ]);
        }
        
    }

    // Función para editar una posición (Edit)
    public function edit($id)
    {
        $position = positionModelo::findOrFail($id);
        $typePositions = typePosition::all(); // Obtener todos los tipos de posición para mostrar en el formulario
        $units = unitModelo::all();
        return view('Position.updatePosition', compact('position', 'typePositions', 'units'));
    }

    // Función para actualizar una posición (Update)
    public function update(Request $request, $idposition)
    {
        $request->validate([
            'positname' => 'required|string|max:100',
            'positnameb' => 'nullable|string|max:100',
            'positdesc' => 'nullable|string',
            'positstate' => 'nullable|string|max:1',
            'positrequest' => 'nullable|string',
            'posit_idunit' => 'nullable|integer',
            'posit_idunitb' => 'nullable|integer',
            'posit_idtypeposit' => 'required|integer',
            'posit_e' => 'nullable|string|max:1',
        ]);

        $position = positionModelo::findOrFail($idposition);
        $position->update($request->all());

        return redirect()->route('Cargos.index')->with('success', 'Posición actualizada con éxito.');
    }

    // Función para eliminar una posición (Destroy)
    public function destroy($id)
    {
        $position = positionModelo::findOrFail($id);
        $position->posit_e = "E";
        $position->save();

        return redirect()->route('Cargos.index')->with('success', 'Posición eliminada correctamente.');
    }
}
