<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class afDVidaUtilModelo extends Model
{
	protected $table = 'af_d_vida_util';
	protected $primaryKey = 'id_vida_util_afd';
	public $timestamps = false;

	/*protected $casts = [
		'factor_anual' => 'float',
		'plazo_vida_util_afd' => 'int'
	];*/

	protected $fillable = [
		'tipo_vida_util_afd',
		'factor_anual',
		'plazo_vida_util_afd'
	];

	/*public function af_activos()
	{
		return $this->hasMany(afActivoModelo::class, 'a_vidautil');
	}*/
}
