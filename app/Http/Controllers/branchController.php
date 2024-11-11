<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\branchModelo;
use Carbon\Carbon;

class branchController extends Controller
{
    public function index()
    {
        $branches = branchModelo::all(); // Obtener todos los empleados
        // dd($branches); // Ver los datos
        return view('Branch.showBranch', compact('branches'));
    }

}
