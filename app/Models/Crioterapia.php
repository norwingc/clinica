<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crioterapia extends Model
{
	/**
	 * [protected description]
	 * @var [type]
	 */
	protected $fillable = [
		"referido", "edad", "date", "historia", "diagnostico_preoperatorio", "hallazgos", "esquema_crioterapia", "complicaciones",
		"comentarios", "recordatorio"
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
