<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class positionModelo extends Model
{
    use HasFactory;

    protected $table = 'position';

    protected $primaryKey = 'idposition';

    public $timestamps = false; 

    protected $fillable = [
        'positname',
        'positnameb',
        'positdesc',
        'positstate',
        'positrequest',
        'posit_idunit',
        'posit_idunitb',
        'posit_idtypeposit',
        'posit_e',
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
            'V' => 'Vigente',
            'O' => 'Oculto',
        ];

        return $estados[$this->posit_e] ?? 'Desconocido';
    }

    public function typePosition()
    {
        return $this->belongsTo(typePosition::class, 'posit_idtypeposit', 'idtypeposit');
    }

    public function unitA()
    {
        return $this->belongsTo(unitModelo::class, 'posit_idunit', 'idunit');
    }

    public function unitB()
    {
        return $this->belongsTo(unitModelo::class, 'posit_idunitb', 'idunit');
    }
}
