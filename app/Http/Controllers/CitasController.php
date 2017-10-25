<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Cita;
use App\Models\Consulta;

use Carbon\Carbon;
use DataTables;

class CitasController extends Controller
{
    /**
     * [api description]
     * @return [type] [description]
     */
    public function api()
    {
        return Cita::get();
    }

    /**
     * [get description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function get($id = null)
    {
        if($id == null){
            $citas = Cita::with('consulta', 'consulta.paciente');
            return Datatables::of($citas)->addColumn('horario', function($cita){
                return date('g:i a', strtotime($cita->start)). ' - ' .date('g:i a', strtotime($cita->end));
            })->addColumn('action', function($cita){
                return "<div class='actions'><a href='". route('paciente.show', [$cita->consulta->paciente]) ."' class='btn'><i class='ion-search'></i></a></div>";
            })->make(true);
        }

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

        if($this->validateCita($request) == false){
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

        $consulta       = new consulta($request->all());
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
        $from = min($request->start, $request->end);
        $till = max($request->start, $request->end);

        $cita = Cita::with(['consulta' => function($query) use ($request){
            $query->where('doctor', $request->doctor);
        }])->where('start', '<=', $from)->where('end', '>=', $till)->first();

        //dd($cita && $cita->consulta);

        if($cita && $cita->consulta) return false;

        return true;
    }
}
