<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rolModelo extends Model
{
    use HasFactory;

    protected $table = 'rol';
    protected $primaryKey = 'idrol';
    public $timestamps = false; 

    protected $fillable = [
        'rolname',
        'roldesc',
        'rol_e',
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

        return $estados[$this->rol_e] ?? 'Desconocido';
    }
}
