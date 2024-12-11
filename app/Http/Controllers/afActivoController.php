<?php

namespace App\Http\Controllers;

use App\Models\af_tipo_bien_contable;
use Illuminate\Http\Request;
use App\Models\afActivoModelo;
use App\Models\afDVidaUtilModelo;
use App\Models\afFuenteFinancieraModelo;
use App\Models\EmpleadoModelo;

class afActivoController extends Controller
{
    public function index()
    {
        $activos = afActivoModelo::all();
        $bienes = af_tipo_bien_contable::all();
        $fuentes = afFuenteFinancieraModelo::all();
        $empleados = EmpleadoModelo::all();
        $vidas = afDVidaUtilModelo::all();
        return view('afActivo.afActivo', compact('activos', 'bienes', 'fuentes', 'empleados', 'vidas'));
    }

    // Mostrar el formulario para crear un nuevo activo
    public function create()
    {
        $activos = afActivoModelo::all();
        $bienes = af_tipo_bien_contable::all();
        $fuentes = afFuenteFinancieraModelo::all();
        $empleados = EmpleadoModelo::all();
        $vidas = afDVidaUtilModelo::all();
        return view('afActivo.afActivo', compact('activos', 'bienes', 'fuentes', 'empleados', 'vidas'));
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

        return redirect()->route('activos.index')->with('success', 'Activo creado correctamente');
    }

    // Mostrar el formulario para editar un activo
    public function edit($id)
    {
        $activo = afActivoModelo::findOrFail($id);
        $bienes = af_tipo_bien_contable::all();
        $fuentes = afFuenteFinancieraModelo::all();
        $empleados = EmpleadoModelo::all();
        $vidas = afDVidaUtilModelo::all();
        return view('afActivo.afActivoUpdate', compact('activo', 'bienes', 'fuentes', 'empleados', 'vidas'));
    }

    // Actualizar un activo
    public function update(Request $request, $id_activo)
    {
        $activo = afActivoModelo::findOrFail($id_activo);

        $activo->update([
            'a_cod_activo_interno_ant' => $request->a_cod_activo_interno_ant,
            'a_codigo_activo' => $request->a_codigo_activo,
            'a_id_tb_contable' => $request->a_id_tb_contable,
            'a_id_f_financiera' => $request->a_id_f_financiera,
            'a_responsable_id_emp' => $request->a_responsable_id_emp,
            'a_nombre' => $request->a_nombre,
            'a_desc' => $request->a_desc,
            'a_tipo' => $request->a_tipo,
            'a_color' => $request->a_color,
            'a_marca' => $request->a_marca,
            'a_modelo' => $request->a_modelo,
            'a_n_serie' => $request->a_n_serie,
            'a_valor_dolar' => $request->a_valor_dolar,
            'a_valor_colon' => $request->a_valor_colon,
            'a_fecha_ingreso' => $request->a_fecha_ingreso,
            'a_fecha_compra' => $request->a_fecha_compra,
            'a_fac_respaldo' => $request->a_fac_respaldo,
            'a_acta_recepcion' => $request->a_acta_recepcion,
            'a_ubicacion_desc' => $request->a_ubicacion_desc,
            'a_ubicacion_nivel' => $request->a_ubicacion_nivel,
            'a_uso_estado' => $request->a_uso_estado,
            'a_estado' => $request->a_estado,
            'a_e' => $request->a_e,
            'a_vidautil' => $request->a_vidautil,
        ]);

        return redirect()->route('activos.index')->with('success', 'Activo actualizado correctamente');
    }


    // Eliminar un activo
    public function destroy($id)
    {
        $activo = afActivoModelo::findOrFail($id);
        $activo->delete();

        return redirect()->route('activos.index')->with('success', 'Activo eliminado correctamente');
    }
}
