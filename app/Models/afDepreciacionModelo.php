<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class afDepreciacionModelo extends Model
{
	use HasFactory;
	protected $table = 'af_depreciacion';
	protected $primaryKey = 'afd_id';
	public $timestamps = false;

	/*protected $casts = [
		'afd_activo' => 'int',
		'afd_valor_depreciacion' => 'float',
		'afd_vida_util' => 'int',
		'afd_cuota_anual' => 'float',
		'afd_cuota_diaria' => 'float',
		'afd_fecha_generacion' => 'datetime',
		'afd_fecha_corte' => 'datetime'
	];*/

	protected $fillable = [
		'afd_activo',
		'afd_valor_depreciacion',
		'afd_vida_util',
		//'afd_cuota_anual',
		//'afd_cuota_diaria',
		'afd_fecha_generacion',
		'afd_fecha_corte',
		'afd_codigo_informe',
		'afd_e',
	];

	public function af_activo()
	{
		return $this->belongsTo(afActivoModelo::class, 'afd_activo');
	}

	public function vida_util()
	{
		return $this->belongsTo(afDVidaUtilModelo::class, 'afd_vida_util');
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

        return $estados[$this->afd_e] ?? 'Desconocido';
    }

	public function getFechaFormateadaAttribute()
	{
		return Carbon::parse($this->afd_fecha_generacion)->format('d/m/Y');
	}
	public function getFechaFormateada2Attribute()
	{
		return Carbon::parse($this->afd_fecha_corte)->format('d/m/Y');
	}

	public function getFechaFormateadaAltAttribute()
	{
		return Carbon::parse($this->afd_fecha_generacion)->format('Y-m-d');
	}
	
	public function getFechaFormateadaAlt2Attribute()
	{
		return Carbon::parse($this->afd_fecha_corte)->format('Y-m-d');
	}
}
