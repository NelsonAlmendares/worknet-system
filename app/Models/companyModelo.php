<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companyModelo extends Model
{
    use HasFactory;

    protected $table = 'company';

    protected $primaryKey = 'idcompany';

    public $timestamps = false; 

    protected $fillable = [
        'compname',
        'compdesc',
        'compsr',
        'compnit',
        'compnrc',
        'compborndate',
        'comp_e',
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

        return $estados[$this->comp_e] ?? 'Desconocido';
    }

    public function getFechaFormateadaAttribute()
	{
		return Carbon::parse($this->compborndate)->format('d/m/Y');
	}
}
