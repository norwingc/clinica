<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FechaProcedimiento extends Model
{
	use SoftDeletes;

	/**
	 * [protected description]
	 * @var [type]
	 */
	protected $fillable = [
		'hospital', 'procedimiento', 'date', 'codigo', 'anestesiologo', 'hr_nacimiento', 'peso_fetal', 'complicacion_maternal', 'complicacion_fetal', 'pediatra',
		'comentario'
	];

	public function paciente()
	{
		return $this->belongsTo('App\Models\Paciente', 'paciente_id');
	}
}
