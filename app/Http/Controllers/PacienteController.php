<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\HistoriaClinica;

use DataTables;
use PDF;

class PacienteController extends Controller
{
	/**
	 * [get description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function get($id = null)
	{
		if ($id == null) {

			$paciente = Paciente::has('consulta');

			return Datatables::of($paciente)->addColumn('lastConsulta', function ($paciente) {
				return $paciente->lastConsulta->examen_type;
			})->addColumn('action', 'pacientes._action')->make(true);
		}

		return response()->json([
			'paciente' => Paciente::find($id)
		]);
	}

	/**
	 * [getHistoria description]
	 * @param  Paciente $paciente [description]
	 * @return [type]             [description]
	 */
	public function getHistoria(Paciente $paciente)
	{
		return response()->json([
			'historia' => $paciente->historia
		]);
	}

	/**
	 * [index description]
	 * @return [type] [description]
	 */
	public function index()
	{
		return view('pacientes.index');
	}

	/**
	 * [findByCedula description]
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function findByCedula(Request $request)
	{
		$paciente = Paciente::where('id_number', $request->id_number)->first();

		if ($paciente) {
			return redirect()->action('PacienteController@show', ['paciente' => $paciente]);
		}
		return view('404', ['message' => 'Paciente no encontrado']);
	}

	/**
	 * [finCedula description]
	 * @param  [type] $cedula [description]
	 * @return [type]         [description]
	 */
	public function findCedula($cedula)
	{
		$paciente = Paciente::where('id_number', $cedula)->first();

		return response()->json([
			'paciente' => $paciente
		]);
	}

	/**
	 * [findPhone description]
	 * @param  [type] $phone [description]
	 * @return [type]        [description]
	 */
	public function findPhone($phone)
	{
		$paciente = Paciente::where('phone', $phone)->first();

		return response()->json([
			'paciente' => $paciente
		]);
	}

	/**
	 * [show description]
	 * @param  Paciente $paciente [description]
	 * @return [type]             [description]
	 */
	public function show(Paciente $paciente)
	{
		if (\Auth::user()->isRole('recepcion')) {
			return redirect()->route('paciente.personal', [$paciente]);
		}

		$paciente->load('consulta.cita', 'images');
		return view('pacientes.user', ['paciente' => $paciente]);
	}

	/**
	 * [information description]
	 * @param  Paciente $paciente [description]
	 * @return [type]             [description]
	 */
	public function personal(Paciente $paciente)
	{
		return view('pacientes.personal', ['paciente' => $paciente]);
	}

	/**
	 * [updatePersonal description]
	 * @param  Request  $request  [description]
	 * @param  Paciente $paciente [description]
	 * @return [type]             [description]
	 */
	public function updatePersonal(Request $request, Paciente $paciente)
	{
		if ($request->id_number != $paciente->id_number) {
			$request->validate([
				'id_number' => 'unique:pacientes',
			]);
		}

		if ($request->phone != $paciente->phone) {
			$request->validate([
				'phone'     => 'unique:pacientes',
			]);
		}

		$paciente->update($request->all());

		foreach ($paciente->consulta as $key => $value) {
			if ($value->cita) {
				$new_title = 'Nombre: ' . $paciente->name . ' / Procedimiento: ' . $value->examen_type . ' / Costo: ' . $value->costo;
				$value->cita->title = $new_title;
				$value->cita->update();
			}
		}

		session()->flash('message_success', "Informacion Actualizada");
		return back();
	}

	/**
	 * [historia description]
	 * @param  Paciente $paciente [description]
	 * @return [type]             [description]
	 */
	public function historia(Paciente $paciente)
	{
		if (\Auth::user()->isRole('recepcion')) {
			return redirect()->route('paciente.personal', [$paciente]);
		}

		$paciente = Paciente::with('historia')->find($paciente->id);
		return view('pacientes.historia', ['paciente' => $paciente]);
	}

	/**
	 * [storeHistoria description]
	 * @param  Request  $request  [description]
	 * @param  Paciente $paciente [description]
	 * @return [type]             [description]
	 */
	public function storeHistoria(Request $request, Paciente $paciente)
	{
		$historia = new HistoriaClinica($request->all());
		(isset($request->diabetes_familiar_si)) ? $historia->diabetes_familiar_si = implode(', ', $request->diabetes_familiar_si) : '';
		(isset($request->hipertension_arterial_familiar_si)) ? $historia->hipertension_arterial_familiar_si = implode(', ', $request->hipertension_arterial_familiar_si) : '';
		(isset($request->cardiopatia_familiar_si)) ? $historia->cardiopatia_familiar_si = implode(', ', $request->cardiopatia_familiar_si) : '';
		(isset($request->nefropatias_familiar_si)) ? $historia->nefropatias_familiar_si = implode(', ', $request->nefropatias_familiar_si) : '';
		(isset($request->tiroidea_si_emfermedad)) ? $historia->tiroidea_si_emfermedad = implode(', ', $request->tiroidea_si_emfermedad) : '';

		(isset($request->tiroidea_si_familiar)) ? $historia->tiroidea_si_familiar = implode(', ', $request->tiroidea_si_familiar) : '';
		(isset($request->enfermedad_inmunologica_familiar_si_familiar)) ? $historia->enfermedad_inmunologica_familiar_si_familiar = implode(', ', $request->enfermedad_inmunologica_familiar_si_familiar) : '';
		(isset($request->enfermedad_inmunologica_familiar_si)) ? $historia->enfermedad_inmunologica_familiar_si = implode(', ', $request->enfermedad_inmunologica_familiar_si) : '';
		(isset($request->pre_eclampsia_familiar_si)) ? $historia->pre_eclampsia_familiar_si = implode(', ', $request->pre_eclampsia_familiar_si) : '';
		(isset($request->inmunologica_tipo)) ? $historia->inmunologica_tipo = implode(', ', $request->inmunologica_tipo) : '';


		$paciente->historia()->save($historia);


		session()->flash('message_success', "Historia Clinica Agregada");
		return back();
	}

	/**
	 * [deleteHistoria description]
	 * @param  HistoriaClinica $historiaclinica [description]
	 * @return [type]                           [description]
	 */
	public function deleteHistoria(HistoriaClinica $historiaclinica)
	{
		$historiaclinica->delete();

		session()->flash('message_danger', "Historia Clinica Borrada");
		return back();
	}

	/**
	 * [downloadHistoria description]
	 * @param  HistoriaClinica $historiaclinica [description]
	 * @return [type]                           [description]
	 */
	public function downloadHistoria(HistoriaClinica $historiaclinica)
	{
		$pdf = \PDF::loadView('reports.historia', compact('historiaclinica'));
		return $pdf->stream();
	}
}
