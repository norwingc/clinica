<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AtencionPrenatalCita extends Model
{
	protected $fillable = [
		'fecha', 'edad_gestacional', 'peso', 'precion_arterial', 'afu', 'presentacion', 'fcf', 'movimientos_fetales', 'morbilidad'
	];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function atencion_prenatal()
	{
		return $this->belongsTo(PacienteAtencionPrenatal::class, 'paciente_atencion_prenatal_id');
	}
}
