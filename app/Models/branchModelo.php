<?php

namespace App\Models;

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
}
