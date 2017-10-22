<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Cita;
use App\Models\Consulta;
use Carbon\Carbon;

class CitasController extends Controller
{

    /**
     * [get description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function get($id = null)
    {
        if($id == null) return Cita::get();

        return response()->json([
            'cita' => Cita::find($id)
        ]);
    }
    /**
     * [index description]
     * @return [type] [description]
     */
    public function index()
    {
        return view('citas.index');
    }

    /**
     * [create description]
     * @return [type] [description]
     */
    public function create()
    {
        return view('citas.create');
    }

    /**
     * [store description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store(Request $request, Paciente $paciente = null)
    {

        if(!$this->validateCita($request)){
            session()->flash('message_danger', "Ya existe una cita a esa hr para " . $request->doctor);
            return back();
        }

        if($paciente == null){
            $paciente = Paciente::where('id_number', $request->id_number)->first();

            if(!$paciente){
                $paciente            = new Paciente($request->all());
                $paciente->id_number = strtoupper($request->id_number);
                $paciente->name      = ucwords(strtolower($request->name));
                $paciente->save();
            }
        }

        $consulta = new consulta($request->all());
        $consulta->date = $request->start;
        $paciente->consulta()->save($consulta);

        $cita        = new Cita($request->all());
        $cita->title = 'Paciente: '.$paciente->name;
        $cita->url   = '/Pacientes/User/View/'.$paciente->id;
        if($request->doctor != 'Dr. Pavon') $cita->color = '#ff4f81';
        if($consulta->examen_type != null) $cita->title = 'Paciente: '.$paciente->name.' / Examen: '. $consulta->examen_type;

        $consulta->cita()->save($cita);

        session()->flash('message_success', "Cita Agregada");
        return back();
    }

    /**
     * [validateCita description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function validateCita($request)
    {
        //dd($request->start);
        $date = date('Y-m-d',strtotime($request->start));
        dd($date);
    }
}
