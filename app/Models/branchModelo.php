<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class branchModelo extends Model
{
    use HasFactory;

    protected $table = 'branch'; // Nombre de la tabla
    
    protected $primaryKey = 'idbranch'; // Clave primaria

    public $timestamps = false; 

    // Definir los campos que se pueden asignar masivamente
    protected $fillable = [
        'brnname',
        'brnborndate',
        'brnemail',
        'brntel',
        'brn_compid',
        'brn_e',
    ];

    public function getEstadoDescripcionAttribute()
    {
        $estados = [
            'A' => 'Activo',
            'S' => 'Suspendido',
            'I' => 'Inactivo',
            'R' => 'Retirado',
            'E' => 'Eliminado',
            'C' => 'Contingente',
        ];

        return $estados[$this->brn_e] ?? 'Desconocido';
    }

    public function company()
    {
        return $this->belongsTo(companyModelo::class, 'brn_compid', 'idcompany');
    }



    public function getFechaFormateadaAttribute()
	{
		return Carbon::parse($this->brnborndate)->format('d/m/Y');
	}
}
