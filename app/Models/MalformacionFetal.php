<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MalformacionFetal extends Model
{
	use SoftDeletes;

	/**
	 * [$fillable description]
	 * @var [type]
	 */
	protected $fillable = [
		"referido", "edad", "date", "edad_gestacional", "paridad", "morbilidad", "rh_tipo",
		"dbp_medida", "dbp_semanas", "cc_medida", "cc_semanas",
		"ca_medida", "ca_semanas", "lf_medida", "lf_semanas", "humero_medida", "humero_semanas", "radio_medida", "radio_semanas", "cubito_medida", "cubito_semanas",
		"tibia_medida", "tibia_semanas", "perone_medida", "perone_semanas", "cerebelo_medida", "cerebelo_semanas", "cisterna_magna", "pliegue_nucal",
		"fetometria_promedio", "percentil", "peso_fetal", "fecha_parto",
		"descripcion_fetal", "revision", "conclusion_embarazo_gestacion",
		"concluciones", "comentarios", "recomendaciones", "recordatorio",
	];


	/**
	 * [consulta description]
	 * @return [type] [description]
	 */
	public function consulta()
	{
		return $this->belongsTo('App\Models\Consulta', 'consulta_id');
	}
}
