<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class districtModelo extends Model
{
    use HasFactory;

    protected $table = 'district';
    protected $primaryKey = 'iddistrict';
    public $timestamps = false;
    protected $fillable = [
        'distname',
        'dist_e',
        'dist_idmh',
        'dist_idmunicipnew',
    ];

    public function municipNew()
    {
        return $this->belongsTo(municipNewModel::class, 'dist_idmunicipnew', 'idmunicipnew');
    }

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

        return $estados[$this->dist_e] ?? 'Desconocido';
    }
}
