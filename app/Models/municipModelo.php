<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class municipModelo extends Model
{
    use HasFactory;

    protected $table = 'municip';
    protected $primaryKey = 'idmunicip';
    public $timestamps = false;

    protected $fillable = [
        'municipname',
        'municip_e',
        'municip_idmh',
        //'municip_iddistrict',
        'municip_iddepartment',
    ];

    /*public function district()
    {
        return $this->belongsTo(districtModelo::class, 'municip_iddistrict', 'iddistrict');
    }*/

    public function department()
    {
        return $this->belongsTo(departmentModelo::class, 'municip_iddepartment', 'iddepartment');
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

        return $estados[$this->municip_e] ?? 'Desconocido';
    }
}
