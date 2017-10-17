<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use DataTables;
use Carbon\Carbon;

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
            return Datatables::of(Paciente::query())->addColumn('action', 'pacientes._action')->make(true);
        }

        return response()->json([
            'paciente' => Paciente::find($id)
        ]);
    }

    /**
     * [getDateBirth description]
     * @param  [type] $date [description]
     * @return [type]       [description]
     */
    public function getAge($date)
    {
        $date = explode("-", $date);
        $age = Carbon::createFromDate($date[0], $date[1], $date[2])->diff(Carbon::now())->format('%y años, %m meses y %d dias');

        return response()->json([
            'age' => $age
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
    public function finCedula($cedula)
    {
        $paciente = Paciente::where('id_number', $cedula)->first();

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
        return view('pacientes.user', ['paciente' => $paciente]);
    }
}
