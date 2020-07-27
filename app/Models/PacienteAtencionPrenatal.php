<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PacienteAtencionPrenatal extends Model
{
	use SoftDeletes;
	/**
	 * @var string[]
	 */
	protected $fillable = [
		'atencedenetes_familiares', 'atencedenetes_personales', 'fecha_ultimo_evento_obstetrico', 'peso_inicio_embarazo', 'aumento_peso_embarazo',
		'tipo_rh_esposo', 'fur', 'semana_gestacion', 'peso_fetal', 'maduracion_pulmonar_semanas_complidas'
	];

    /**
	 * [paciente description]
	 *	 * @return  [type]  [return description]
	 */
	public function paciente()
	{
		return $this->belongsTo(\App\Models\Paciente::class);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function citas(){
		return $this->hasMany(AtencionPrenatalCita::class, 'paciente_atencion_prenatal_id');
	}
}
