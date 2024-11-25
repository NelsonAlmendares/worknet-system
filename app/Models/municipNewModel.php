<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class municipNewModel extends Model
{
    use HasFactory;

    protected $table = 'municipnew';
    protected $primaryKey = 'idmunicipnew';
    public $timestamps = false;
    protected $fillable = [
        'municipnewname',
        'municipnew_e',
        'municipnew_idmh',
        'municipnew_iddept',
    ];

    public function department()
    {
        return $this->belongsTo(departmentModelo::class, 'municipnew_iddept', 'iddepartment');
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

        return $estados[$this->municipnew_e] ?? 'Desconocido';
    }
}
