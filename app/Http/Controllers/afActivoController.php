<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\afActivoModelo;

class afActivoController extends Controller
{
    public function index()
    {
        $activos = afActivoModelo::all();
        return view('afActivo.afActivo', compact('activos'));
    }

    // Mostrar el formulario para crear un nuevo activo
    public function create()
    {
        return view('af_activo.create');
    }
    /*
        INSERT INTO af_activo (a_cod_activo_interno_ant, a_codigo_activo, a_id_tb_contable, a_id_f_financiera, a_responsable_id_emp, a_nombre, a_desc, a_tipo, a_color, a_marca, a_modelo, a_n_serie, a_valor_dolar, a_valor_colon, a_fecha_ingreso, a_fecha_compra, a_fac_respaldo, a_acta_recepcion, a_ubicacion_desc, a_ubicacion_nivel, a_uso_estado, a_estado, a_e, a_vidautil) 
        VALUES ('A001', 'ACT001', 1, 1, 43, 'Computadora', 'Computadora de oficina', 'Tecnología', 'Negro', 'Dell', 'XPS 15', 'SN123456789', 1200.50, 100000.00, '2024-01-15', '2024-01-10', 'Factura123.pdf', 'Acta123.pdf', 'Oficina Principal', 'Nivel 1', 'Activo', 'Disponible', 'A', 1);
    */

    // Guardar un nuevo activo
    public function store(Request $request)
    {
        $validated = $request->validate([
            'a_cod_activo_interno_ant' => 'nullable|string|max:45',
            'a_codigo_activo' => 'required|string|max:45|unique:af_activo',
            'a_id_tb_contable' => 'required|integer',
            'a_id_f_financiera' => 'required|integer',
            'a_responsable_id_emp' => 'required|integer',
            'a_nombre' => 'nullable|string|max:100',
            'a_desc' => 'nullable|string|max:500',
            'a_tipo' => 'nullable|string|max:45',
            'a_color' => 'nullable|string|max:45',
            'a_marca' => 'nullable|string|max:100',
            'a_modelo' => 'nullable|string|max:100',
            'a_n_serie' => 'nullable|string|max:100',
            'a_valor_dolar' => 'required|numeric',
            'a_valor_colon' => 'required|numeric',
            'a_fecha_ingreso' => 'required|date',
            'a_fecha_compra' => 'required|date',
            'a_fac_respaldo' => 'nullable|string|max:500',
            'a_acta_recepcion' => 'nullable|string|max:500',
            'a_ubicacion_desc' => 'nullable|string|max:500',
            'a_ubicacion_nivel' => 'nullable|string|max:10',
            'a_uso_estado' => 'nullable|string|max:20',
            'a_estado' => 'nullable|string|max:20',
            'a_e' => 'nullable|string|max:1',
            'a_vidautil' => 'required|integer',
        ]);

        afActivoModelo::create($validated);

        return redirect()->route('af_activo.index')->with('success', 'Activo creado correctamente');
    }

    // Mostrar el formulario para editar un activo
    public function edit($id)
    {
        $activo = afActivoModelo::findOrFail($id);
        return view('af_activo.edit', compact('activo'));
    }

    // Actualizar un activo
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'a_cod_activo_interno_ant' => 'nullable|string|max:45',
            'a_codigo_activo' => 'required|string|max:45|unique:af_activo,a_codigo_activo,' . $id,
            // Valida los demás campos...
        ]);

        $activo = afActivoModelo::findOrFail($id);
        $activo->update($validated);

        return redirect()->route('af_activo.index')->with('success', 'Activo actualizado correctamente');
    }

    // Eliminar un activo
    public function destroy($id)
    {
        $activo = afActivoModelo::findOrFail($id);
        $activo->delete();

        return redirect()->route('af_activo.index')->with('success', 'Activo eliminado correctamente');
    }
}
