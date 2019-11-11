<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PacienteOrdenIngreso extends Model
{
	use SoftDeletes;

	/**
	 * [$fillable description]
	 * @var [type]
	 */
	protected $fillable = [
		'date', 'hospital', 'sala', 'procedimiento', 'motivo_ingreso', 'diagnostico_ingreso', 'indicaciones',
	];

	/**
	 * [paciente description]
	 * @return [type] [description]
	 */
	public function paciente()
	{
		return $this->belongsTo('App\Models\Paciente', 'paciente_id');
	}
}
