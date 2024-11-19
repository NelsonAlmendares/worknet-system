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
}
