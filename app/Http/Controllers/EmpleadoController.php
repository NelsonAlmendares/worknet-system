<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmpleadoModelo;
use Carbon\Carbon;


class EmpleadoController extends Controller
{

    public function index()
    {
        $empleados = EmpleadoModelo::all(); // Obtener todos los empleados
        // dd($empleados); // Ver los datos
        return view('Empleados.createEmpleado', compact('empleados'));
    }


    // Funcion para llamar la vista en la carpeta (views->Empleados 'createEmpleado')
    public function create()
    {
        return view('Empleados.createEmpleado');
    }

    // Función para crear datos en la base:
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'empfname' => 'required|string|max:45',
            'empsname' => 'required|string|max:45',
            'empfsurname' => 'required|string|max:45',
            'empssurname' => 'required|string|max:45',
            'empdui' => 'required|string|max:10',
            'empnit' => 'required|string|max:17',
            'empborndate' => 'required|date',
            'empemail' => 'nullable|email|max:170',
            'empcell' => 'nullable|string|max:17',
            'empbgender' => 'required|string|max:1',
            'empfullname' => 'required|string|max:250',
            'empfullnameb' => 'required|string|max:250',
            'emp_e' => 'required|string|max:1',
        ]);

        try {
            // Crear el registro de empleado en la base de datos
            EmpleadoModelo::create($request->all());

            // Redirigir con mensaje de éxito
            return redirect()->back()->with('success', 'Empleado registrado con éxito!');
        } catch (\Exception $e) {
            // Redirigir con mensaje de error si falla la inserción
            return redirect()->back()->withErrors(['error' => 'Hubo un error al registrar el empleado. Inténtalo de nuevo.']);
        }
    }

    public function edit($id)
    {
        $empleado = EmpleadoModelo::findOrFail($id);
        return response()->json($empleado); // Devuelve los datos en formato JSON
    }


    public function update(Request $request, $idemployee)
    {
        $empleado = EmpleadoModelo::findOrFail($idemployee);

        $empleado->update([
            'empfname' => $request->empfname,
            'empsname' => $request->empsname,
            'empfsurname' => $request->empfsurname,
            'empssurname' => $request->empssurname,
            'empdui' => $request->empdui,
            'empnit' => $request->empnit,
            'empborndate' => $request->empborndate,
            'empbgender' => $request->empbgender,
            'empfullname' => $request->empfullname,
            'empfullnameb' => $request->empfullnameb,
            'emp_e' => $request->emp_e,
            'empemail' => $request->empemail,
        ]);

        return redirect()->back()->with('success', 'Empleado actualizado con éxito.');
    }

    public function destroy($id)
    {
        $empleado = EmpleadoModelo::findOrFail($id);
        $empleado->delete();

        return redirect()->route('Empleados.index')->with('success', 'Empleado eliminado correctamente');
    }

}
