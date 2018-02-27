<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\HistoriaClinica;

use DataTables;

class PacienteController extends Controller
{
    /**
     * [get description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function get($id = null)
    {
        if($id == null){

            $paciente = Paciente::has('consulta');

            return Datatables::of($paciente)->addColumn('lastConsulta', function($paciente){
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

        if($paciente){
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
        if(\Auth::user()->isRole('recepcion')){
            return redirect()->route('paciente.personal', [$paciente]);
        }

        $paciente = Paciente::with('consulta', 'consulta.cita')->find($paciente->id);
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
        if($request->id_number != $paciente->id_number){
            $request->validate([
                'id_number' => 'required|unique:pacientes',
            ]);
        }

        if($request->phone != $paciente->phone){
            $request->validate([
                'phone'     => 'required|unique:pacientes',
            ]);
        }

        $paciente->update($request->all());

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
        if(\Auth::user()->isRole('recepcion')){
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
        return $request;
    }

    /**
     * [updateHistoria description]
     * @param  Request         $request         [description]
     * @param  HistoriaClinica $historiaclinica [description]
     * @return [type]                           [description]
     */
    public function updateHistoria(Request $request, HistoriaClinica $historiaclinica)
    {
        return $request;
    }
}
