<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
   use  HasFactory; 
   protected $table = 'solicitud_log';
   protected $primaryKey = 'slog_id';
	public $timestamps = false;
 
   protected $fillable = [
      'slog_id_emp',
      'slog_accion',
      'slog_cod_af',
      'slog_comentario',
      'slog_codigo_af', 
   ];   
   public function employee()
	{
		return $this->belongsTo(EmpleadoModelo::class, 'slog_id_emp', 'idemployee');
	}
   public function activo()
	{
		return $this->belongsTo(afActivoModelo::class, 'slog_cod_af', 'id_activo');
	}

}





 
