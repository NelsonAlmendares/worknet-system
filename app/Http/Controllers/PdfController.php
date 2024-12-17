<?php

namespace App\Http\Controllers;

use App\Models\afActivoModelo;
use App\Models\afDepreciacionVModelo;
use App\Models\EmpleadoModelo;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\UsuarioModelo;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function generatePdf(Request $request)
    {
        // Obtener el parámetro que indica qué tabla se va a generar
        $table = $request->input('table');

        // Determinar qué datos obtener según la tabla seleccionada
        switch ($table) {
            case 'empleados':
                $data = EmpleadoModelo::all(); // Obtener todos los usuarios
                break;

            case 'usuarios':
                $data = UsuarioModelo::all(); // Obtener todos los pedidos
                break;

            case 'activos':
                $data = afActivoModelo::all(); // Obtener todos los productos
                break;

            case 'depreciaciones':
                $data = afDepreciacionVModelo::all(); // Obtener todos los productos
                break;

            default:
                return response()->json(['error' => 'Tabla no válida'], 400);
        }

        // Generar el PDF con los datos correspondientes
        if($table != "activos" && $table != "depreciaciones"){
            $pdf = Pdf::loadView('PDF.pdf', compact('data', 'table'));
        }else{
            $pdf = Pdf::loadView('PDF.pdf', compact('data', 'table'))->setPaper('A4', 'landscape');
        }

        // Descargar el PDF

        return $pdf->download("CONACYT-Reporte_$table.pdf");
        
    }
}
