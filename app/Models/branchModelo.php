<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class branchModelo extends Model
{
    use HasFactory;

    protected $table = 'branch'; // Nombre de la tabla
    
    protected $primaryKey = 'idbranch'; // Clave primaria

    // Definir los campos que se pueden asignar masivamente
    protected $fillable = [
        'brnname',
        'brnborndate',
        'brn_compid',
        'brn_e',
        'brn_email',
        'brn_tel',
        'brn_logo',
    ];

    // Relación con la tabla `company`
    /*
    public function company()
    {
        return $this->belongsTo(Company::class, 'brn_compid', 'idcompany');
    }
    */
}
