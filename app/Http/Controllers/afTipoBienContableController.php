<?php

namespace App\Http\Controllers;

use App\Models\af_tipo_bien_contable;
use App\Models\departmentModelo;
use App\Models\districtModelo;
use App\Models\municipNewModelo;
use Illuminate\Http\Request;

class afTipoBienContableController extends Controller
{
    public function index()
    {   
        $bienes = af_tipo_bien_contable::all();
        return view('BienContable.createBienContable', compact('bienes'));
    }

    public function create()
    {
        $bienes = af_tipo_bien_contable::all();
        return view('BienContable.createBienContable', compact('bienes'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'tbc_codigo_contable' => 'required|string|max:45',
            'tbc_e' => 'required|string|max:1',
            'tbc_desc' => 'required|string|max:100',
        ]);

        try {
            // Crear el registro de empleado en la base de datos
            af_tipo_bien_contable::create($request->all());
            // Redirigir con mensaje de éxito
            return redirect()->back()->with('success', 'Tipo de bien contable registrado con éxito!');
        } catch (\Exception $e) {
            // Redirigir con mensaje de error si falla la inserción
            return redirect()->back()->withErrors(['error' => 'Hubo un error al registrar el tipo de bien contable. Inténtalo de nuevo.']);
        }
    }

    public function edit($id)
    {
        $bien = af_tipo_bien_contable::findOrFail($id);
        return view('BienContable.updateBienContable', compact('bien'));
    }

    public function update(Request $request, $id)
    {
        $bien = af_tipo_bien_contable::findOrFail($id);
        $validated = $request->validate([
            'tbc_codigo_contable' => 'required|string|max:45',
            'tbc_e' => 'required|string|max:1',
            'tbc_desc' => 'required|string|max:100',
        ]);

        $bien->update($validated);

        return redirect()->back()->with('success', 'Tipo de bien contable actualizado con éxito.');
    }

    public function destroy($id)
    {
        $bien = af_tipo_bien_contable::findOrFail($id);
        //$department->delete();
        $bien->tbc_e="E";
        $bien->save();
        return redirect()->route('BienContable.index')->with('success', 'Tipo de bien contable eliminado correctamente');
    }
}
