<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpleadoModelo extends Model
{
    use HasFactory;

    protected $table = 'employee'; // Nombre de la tabla

    protected $primaryKey = 'idemployee'; // Nombre de la clave primaria personalizada

    public $timestamps = false; // Desactivar timestamps automáticos

    // Campos permitidos para la asignación masiva
    protected $fillable = [
        'empfname', 'empsname', 'emptname', 'empfsurname', 'empssurname', 'emptsurname',
        'empmname', 'empdui', 'empnit', 'empborndate', 'empemail', 'empcell', 'empoftel',
        'empecontactname', 'empecontactcel', 'empcontactkin', 'empbgender', 'empfullname',
        'empfullnameb', 'emp_idposition', 'emp_e'
    ];

}
