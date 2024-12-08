<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class AfDepreciacionV
 * 
 * @property int $afd_id
 * @property int $afd_activo
 * @property float $afd_valor_depreciacion
 * @property int $afd_vida_util
 * @property float|null $afd_cuota_anual
 * @property float|null $afd_cuota_diaria
 * @property Carbon $afd_fecha_generacion
 * @property Carbon $afd_fecha_corte
 * @property string|null $afd_codigo_informe
 * @property float|null $afd_depreciacion_acumulada
 *
 * @package App\Models
 */
class afDepreciacionVModelo extends Model
{
	protected $table = 'af_depreciacion_v';
	public $incrementing = false;
	public $timestamps = false;

	/*protected $casts = [
		'afd_id' => 'int',
		'afd_activo' => 'int',
		'afd_valor_depreciacion' => 'float',
		'afd_vida_util' => 'int',
		'afd_cuota_anual' => 'float',
		'afd_cuota_diaria' => 'float',
		'afd_fecha_generacion' => 'datetime',
		'afd_fecha_corte' => 'datetime',
		'afd_depreciacion_acumulada' => 'float'
	];*/

	protected $fillable = [
		'afd_id',
		'afd_activo',
		'afd_valor_depreciacion',
		'afd_vida_util',
		'afd_cuota_anual',
		'afd_cuota_diaria',
		'afd_fecha_generacion',
		'afd_fecha_corte',
		'afd_codigo_informe',
		'afd_depreciacion_acumulada',
		'afd_e'
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

	public static function getDepreciacion()
    {
		return DB::table('af_depreciacion')
        ->selectRaw("
    SELECT
    `worknet`.`af_depreciacion`.`afd_id` AS `afd_id`,
    `worknet`.`af_depreciacion`.`afd_activo` AS `afd_activo`,
    `worknet`.`af_depreciacion`.`afd_valor_depreciacion` AS `afd_valor_depreciacion`,
    `worknet`.`af_depreciacion`.`afd_vida_util` AS `afd_vida_util`,
    (
        `worknet`.`af_depreciacion`.`afd_valor_depreciacion` - `worknet`.`af_depreciacion`.`afd_valor_depreciacion` * 0.10
    ) /(
    SELECT
        `worknet`.`af_d_vida_util`.`plazo_vida_util_afd`
    FROM
        `worknet`.`af_d_vida_util`
    WHERE
        `worknet`.`af_d_vida_util`.`id_vida_util_afd` = `worknet`.`af_depreciacion`.`afd_vida_util`
) AS `afd_cuota_anual`,
(
    `worknet`.`af_depreciacion`.`afd_valor_depreciacion` - `worknet`.`af_depreciacion`.`afd_valor_depreciacion` * 0.10
) /(
    SELECT
        `worknet`.`af_d_vida_util`.`plazo_vida_util_afd`
    FROM
        `worknet`.`af_d_vida_util`
    WHERE
        `worknet`.`af_d_vida_util`.`id_vida_util_afd` = `worknet`.`af_depreciacion`.`afd_vida_util`
) / 365 AS `afd_cuota_diaria`,
`worknet`.`af_depreciacion`.`afd_fecha_generacion` AS `afd_fecha_generacion`,
`worknet`.`af_depreciacion`.`afd_fecha_corte` AS `afd_fecha_corte`,
`worknet`.`af_depreciacion`.`afd_codigo_informe` AS `afd_codigo_informe`,
(
    TO_DAYS(
        `worknet`.`af_depreciacion`.`afd_fecha_corte`
    ) - TO_DAYS(
        `worknet`.`af_depreciacion`.`afd_fecha_generacion`
    )
) / 365 *(
    `worknet`.`af_depreciacion`.`afd_valor_depreciacion` - `worknet`.`af_depreciacion`.`afd_valor_depreciacion` * 0.10
) /(
    SELECT
        `worknet`.`af_d_vida_util`.`plazo_vida_util_afd`
    FROM
        `worknet`.`af_d_vida_util`
    WHERE
        `worknet`.`af_d_vida_util`.`id_vida_util_afd` = `worknet`.`af_depreciacion`.`afd_vida_util`
) AS `afd_depreciacion_acumulada`,
`worknet`.`af_depreciacion`.`afd_e` AS `afd_e`
FROM
    `worknet`.`af_depreciacion`
        ")->get();

    }
}
