<?php

namespace App\Http\Controllers;

use App\Models\positionModelo;
use Illuminate\Http\Request;

class positionController extends Controller
{
    public function index()
    {
        $positions = positionModelo::all(); // Obtener todos los empleados
        // dd($branches); // Ver los datos
        return view('Position.createPosition', compact('positions'));
    }
}
