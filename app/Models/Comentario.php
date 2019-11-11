<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comentario extends Model
{
	use SoftDeletes;

	/**
	 * [$filable description]
	 *
	 * @var  [type]
	 */
	protected $fillable = ['comentario'];

	/**
	 * [paciente description]
	 * @return [type] [description]
	 */
	public function paciente()
	{
		return $this->belongsTo('App\Models\Paciente', 'paciente_id');
	}
}
