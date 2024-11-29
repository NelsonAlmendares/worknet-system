<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departmentModelo extends Model
{
    use HasFactory;

    protected $table = 'department';
    protected $primaryKey = 'iddepartment';
    public $timestamps = false;
    protected $fillable = [
        'deptname',
        'dept_e',
        'dept_idmh',
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

        return $estados[$this->dept_e] ?? 'Desconocido';
    }
}
