<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
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
            return Datatables::of(Paciente::query())->addColumn('action', 'pacientes._action')->make(true);
        }

        return response()->json([
            'paciente' => Paciente::find($id)
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

        }
        return view('404', ['message' => 'Paciente no encontrado'])
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
