<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class countryModelo extends Model
{
    use HasFactory;

    protected $table = 'country';
    protected $primaryKey = 'idcontry';
    public $timestamps = false;
    protected $fillable = [
        'contryname',
        'contry_e',
        'contry_idmh',
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

        return $estados[$this->contry_e] ?? 'Desconocido';
    }
}
