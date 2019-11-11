<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\PacienteOrdenIngreso;

class OrdenIngresoController extends Controller
{
	/**
	 * [store description]
	 * @param   Request   $request   [$request description]
	 * @param   Paciente  $paciente  [$paciente description]
	 * @return  [type]               [return description]
	 */
	public function store(Request $request, Paciente $paciente)
	{
		$orden = $paciente->orden_ingreso()->save(new PacienteOrdenIngreso($request->all()));

		return $this->report($orden);
	}

	/**
	 * [report description]
	 * @param   PacienteOrdenIngreso  $pacienteordeningreso  [$pacienteordeningreso description]
	 * @return  [type]                                       [return description]
	 */
	public function report(PacienteOrdenIngreso $pacienteordeningreso)
	{
		$pdf = \PDF::loadView('reports.orden_ingreso', ['orden' => $pacienteordeningreso]);
		return $pdf->stream();
	}
}
