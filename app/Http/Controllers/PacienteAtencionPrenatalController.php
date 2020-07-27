<?php

namespace App\Http\Controllers;

use App\Models\AtencionPrenatalCita;
use App\Models\Paciente;
use App\Models\PacienteAtencionPrenatal;
use Illuminate\Http\Request;

class PacienteAtencionPrenatalController extends Controller
{
	/**
	 * @param Paciente $paciente
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
	 */
	public function index(Paciente $paciente)
	{
		$atencion_prenatal = $paciente->atencion_prenatal;
		if (!$atencion_prenatal) $atencion_prenatal = new PacienteAtencionPrenatal();
		return view('pacientes.atencion-prenatal.index', compact('paciente', 'atencion_prenatal'));
	}

	/**
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function store(Request $request, Paciente $paciente)
	{
		$paciente_atencion_prenatal = new PacienteAtencionPrenatal($request->all());
		if ($paciente->atencion_prenatal) {
			$paciente->atencion_prenatal()->update($paciente_atencion_prenatal->toArray());
		} else {
			$paciente->atencion_prenatal()->save($paciente_atencion_prenatal);
		}

		session()->flash('message_success', "Informacion Actualizada");
		return back();
	}

	/**
	 * @param Request $request
	 * @param PacienteAtencionPrenatal $PacienteAtencionPrenatal
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function storeCita(Request $request, $paciente, PacienteAtencionPrenatal $PacienteAtencionPrenatal)
	{
		$PacienteAtencionPrenatal->citas()->save(new AtencionPrenatalCita($request->all()));
		session()->flash('message_success', "Informacion Actualizada");
		return back();
	}

	/**
	 * @param Request $request
	 * @param AtencionPrenatalCita $atencionPrenatalCita
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function updateCita(Request $request, AtencionPrenatalCita $atencionPrenatalCita)
	{
		$atencionPrenatalCita->update($request->all());
		session()->flash('message_success', "Informacion Actualizada");
		return back();
	}

	/**
	 * @param Paciente $paciente
	 */
	public function report(Paciente $paciente)
	{
		if($paciente->atencion_prenatal){
			$paciente->load('atencion_prenatal.citas');
			$pdf = \PDF::loadView('reports.atencion-prenatal', compact('paciente'));
			return $pdf->stream();
		}
		return back();
	}
}
