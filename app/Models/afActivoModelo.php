<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class afActivoModelo extends Model
{
    use HasFactory;

    protected $table = 'af_activo';  // Nombre de la tabla

    protected $primaryKey = 'id_activo'; // Clave primaria
    
    public $timestamps = false; // No usamos timestamps

    protected $fillable = [
        'a_cod_activo_interno_ant', 'a_codigo_activo', 'a_id_tb_contable', 'a_id_f_financiera',
        'a_responsable_id_emp', 'a_nombre', 'a_desc', 'a_tipo', 'a_color', 'a_marca',
        'a_modelo', 'a_n_serie', 'a_valor_dolar', 'a_valor_colon', 'a_fecha_ingreso', 'a_fecha_compra',
        'a_fac_respaldo', 'a_acta_recepcion', 'a_ubicacion_desc', 'a_ubicacion_nivel', 'a_uso_estado',
        'a_estado', 'a_e', 'a_vidautil'
    ];

    /*
        Relaciones con otras tablas

        public function tipoBienContable()
        {
            return $this->belongsTo(TipoBienContable::class, 'a_id_tb_contable');
        }

        public function fuenteFinanciera()
        {
            return $this->belongsTo(FuenteFinanciera::class, 'a_id_f_financiera');
        }

        public function empleadoResponsable()
        {
            return $this->belongsTo(Employee::class, 'a_responsable_id_emp');
        }

        public function vidaUtil()
        {
            return $this->belongsTo(VidaUtil::class, 'a_vidautil');
        }

    */
}
