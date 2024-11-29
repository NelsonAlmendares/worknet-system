<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class afFuenteFinancieraModelo extends Model
{
	protected $table = 'af_fuente_financiera';
	protected $primaryKey = 'id_f_financiera';
	public $timestamps = false;

	protected $fillable = [
		'ff_nombre',
		'ff_desc',
		'ff_e'
	];

	/*public function af_activos()
	{
		return $this->hasMany(AfActivo::class, 'a_id_f_financiera');
	}*/

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

        return $estados[$this->ff_e] ?? 'Desconocido';
    }
}
