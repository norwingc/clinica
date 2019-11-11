<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consulta extends Model
{
	use SoftDeletes;

	/*
     * [$fillable description]
     * @var [type]
     */
	protected $fillable = [
		'doctor', 'costo', 'examen_type'
	];

	/**
	 * [paciente description]
	 * @return [type] [description]
	 */
	public function paciente()
	{
		return $this->belongsTo('App\Models\Paciente', 'paciente_id');
	}

	/**
	 * [cita description]
	 * @return [type] [description]
	 */
	public function cita()
	{
		return $this->belongsTo('App\Models\Cita', 'cita_id');
	}

	/**
	 * [prenatal description]
	 * @return [type] [description]
	 */
	public function prenatal()
	{
		return $this->hasOne('App\Models\Prenatal', 'consulta_id');
	}

	public function pelvico()
	{
		return $this->hasOne('App\Models\UltrasonidoPelvico', 'consulta_id');
	}

	public function trimestre()
	{
		return $this->hasOne('App\Models\UltrasonidoTrimestre', 'consulta_id');
	}

	public function estructural()
	{
		return $this->hasOne('App\Models\UltrasonidoEstructural', 'consulta_id');
	}

	public function neurosonografia()
	{
		return $this->hasOne('App\Models\Neurosonografia', 'consulta_id');
	}

	public function ecocardiografia()
	{
		return $this->hasOne('App\Models\Ecocardiografia', 'consulta_id');
	}

	public function doppler()
	{
		return $this->hasOne('App\Models\Doppler', 'consulta_id');
	}

	public function ginecologica()
	{
		return $this->hasOne('App\Models\Ginecologica', 'consulta_id');
	}

	public function colposcopia()
	{
		return $this->hasOne('App\Models\Colposcopia', 'consulta_id');
	}
}
