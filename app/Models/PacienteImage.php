<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PacienteImage extends Model
{
	use SoftDeletes;

	/**
	 * [$fillable description]
	 * @var [type]
	 */
	protected $fillable = [
		'url_img'
	];

	/**
	 * [getDateAttribute description]
	 * @return  [type]  [return description]
	 */
	public function getDateAttribute()
	{
		return $this->created_at->format('d/F/Y');
	}

	/**
	 * [paciente description]
	 *	 * @return  [type]  [return description]
	 */
	public function paciente()
	{
		return $this->belongsTo(\App\Models\Paciente::class);
	}
}
