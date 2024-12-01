<?php

namespace App\Http\Controllers;

use App\Models\companyModelo;
use Illuminate\Http\Request;

class companyController extends Controller
{
    public function index()
    {
        $companies = companyModelo::all(); // Obtener todos los empleados
        // dd($branches); // Ver los datos
        return view('Company.createCompany', compact('companies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'compname' => 'required|string|max:250',
            'compdesc' => 'required|string|max:500',
            'compsr' => 'required|string|max:45',
            'compnit' => 'required|string|max:17',
            'compnrc' => 'required|string|max:20',
            'compborndate' => 'required|date',
            'comp_e' => 'required|string|max:1',
        ]);

        try {
            // Crear el registro de posición en la base de datos
            companyModelo::create($request->all());
            return redirect()->route('Sucursal.index')->with('success', 'Empresa creada con éxito.');
        } catch (\Exception $e) {
            // Imprimir el error exacto en los errores de la vista
            return redirect()->back()->withErrors([
                'error' => 'Hubo un error al registrar la posición: ' . $e->getMessage()
            ]);
        }
    }

    /*public function edit(companyModelo $company)
    {
        return view('companies.edit', compact('company'));
    }*/

    public function edit($id)
    {
        $company = companyModelo::findOrFail($id);
        return view('Company.updateCompany', compact('company'));
    }

    public function update(Request $request, $id)
    {
        $company = companyModelo::findOrFail($id);
        $validated = $request->validate([
            'compname' => 'required|string|max:250',
            'compdesc' => 'required|string|max:500',
            'compsr' => 'required|string|max:45',
            'compnit' => 'required|string|max:17',
            'compnrc' => 'required|string|max:20',
            'compborndate' => 'required|date',
            'comp_e' => 'required|string|max:1',
        ]);

        $company->update($validated);
        return redirect()->route('Sucursal.index')->with('success', 'Empresa actualizada con éxito.');
    }

    public function destroy($id)
    {
        $company = companyModelo::findOrFail($id);
        $company->comp_e = "E";
        $company->save();

        return redirect()->route('Sucursal.index')->with('success', 'Empresa eliminada con éxito.');
    }
}
