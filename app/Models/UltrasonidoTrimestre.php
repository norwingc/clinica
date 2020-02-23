<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UltrasonidoTrimestre extends Model
{

	use SoftDeletes;

	/**
	 * [$fillable description]
	 * @var [type]
	 */
	protected $fillable = [
		"referido", "edad", "date", "edad_gestacional", "paridad", "morbilidad", "rh_tipo", "feto", "historia_preecampsia_mama", "historia_hipertension_mama",
		"historia_preecampsia_hermana", "historia_hipertension_personal", "peso", "talla", "imc", "pa_derecho", "pa_izquierdo", "pam", "ip_artrias", "notch",
		"resistencia_vascular_periferica", "bidimensional", "doppler_color", "conclusion_lcc", "conclusion_riesago_cromosomopatias",
		"conclusion_riesago_preeclampsia", "conclusion_riesago_hipertensivos", "conclusion_riesago_restiaccion", "conclusion_riesago_parto_pretermino",
		"recomendaciones", "comentarios", "recordatorio",

		"anomalias_familiares", "anomalias_familiares_descripcion", "transtorno_desarrollo_intelectual", "transtorno_desarrollo_intelectual_descripcion",
		"enfermdad_genetica", "enfermdad_genetica_descripcion", "perdida_gestacional_recurrente", "perdida_gestacional_recurrente_descripcion",
		"infertilidad", "infertilidad_descripcion", "consanguinidad", "consanguinidad_descripcion"
	];

	/**
	 * [consulta description]
	 * @return [type] [description]
	 */
	public function consulta()
	{
		return $this->belongsTo('App\Models\Consulta', 'consulta_id');
	}

	/**
	 * [fetos description]
	 * @return [type] [description]
	 */
	public function fetos()
	{
		return $this->hasMany('App\Models\UltrasonidoTrimestreFeto', 'examen_id');
	}
}
