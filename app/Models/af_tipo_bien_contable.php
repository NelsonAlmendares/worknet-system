<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class af_tipo_bien_contable extends Model
{
    use HasFactory;
    protected $table = 'af_tipo_bien_contable';
 protected $primaryKey = 'id_tb_contable';
	public $timestamps = false;

    protected $fillable = [
        'tbc_codigo_contable',
        'tbc_desc',
        'tbc_e',
        
         
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

        return $estados[$this->tbc_e] ?? 'Desconocido';
    }
}
