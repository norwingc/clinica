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
                if(\Auth::user()->isRole('doctor')){
                    return "<div class='actions'><a href='". route('paciente.show', [$cita->consulta->paciente]) ."' class='btn'><i class='ion-search'></i></a></div>";
                }else{
                    return "<div class='actions'><a href='". route('paciente.personal', [$cita->consulta->paciente]) ."' class='btn'><i class='ion-search'></i></a></div>";
                }
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


        $fecha = $request->date;
        $start = $fecha . ' '.$request->start;
        $start = date('Y-m-d H:i:s', strtotime($start));

        if($request->duracion == '30 min'){
            $end = \Carbon\Carbon::parse($start)->addMinutes(30);
        }else if($request->duracion == '1 hr'){
            $end = \Carbon\Carbon::parse($start)->addMinutes(60);
        }else if($request->duracion == '1hr 30min'){
            $end = \Carbon\Carbon::parse($start)->addMinutes(90);
        }elseif ($request->duracion == '2hr') {
            $end = \Carbon\Carbon::parse($start)->addMinutes(120);
        }else{
            $end = null;
        }

        if($request->duracion != 'Todo el dia'){
            if($this->validateCita($start, $end, $request->doctor) == false){
                session()->flash('message_danger', "Ya existe una cita a esa hr para " . $request->doctor);
                return back();
            }

            if($paciente == null){
                $paciente = Paciente::where('phone', $request->phone)->first();

                if(!$paciente){
                    $paciente       = new Paciente($request->all());
                    $paciente->name = ucwords(strtolower($request->name));
                    $paciente->save();
                }
            }
        }

        $cita        = new Cita();
        $cita->start = $start;
        $cita->end   = $end;
        $cita->date  = $request->date;

        if($request->duracion != 'Todo el dia'){
            $cita->title = 'Paciente: '. $request->name . ' Examen: '. $request->examen_type .' Costo: $'. $request->costo . ' Comentario: '. $request->comentario;
            $cita->url   = '/Pacientes/User/View/'.$paciente->id;

            if($request->doctor == 'Dr. Pavon'){
                $cita->color ='#3c8dbc';
            }else if ($request->doctor == 'Dra. Bravo') {
                $cita->color = '#ff4f81';
            }else{
                $cita->color = '#00a65a';
            }

            $cita->save();

        }else{
            $cita->title   = $request->title;
            $cita->all_day = true;
            $cita->color   = '#ff0000';
            $cita->start = $request->date . ' 00:00:00';
            $cita->end   = $request->date . ' 23:59:00';
            $cita->save();
        }


        $cita->consulta()->save(
            $consulta = new Consulta($request->all())
        );
        $consulta->paciente_id = $paciente->id;
        $consulta->update();

        session()->flash('message_success', "Cita Agregada");
        return back();
    }

    /**
     * [validateCita description]
     * @param  [type] $start  [description]
     * @param  [type] $end    [description]
     * @param  [type] $doctor [description]
     * @return [type]         [description]
     */
    public function validateCita($start, $end, $doctor)
    {
        $from = min($start, $end);
        $till = max($start, $end);

        $cita = Cita::with(['consulta' => function($query) use ($doctor){
            $query->where('doctor', $doctor);
        }])->where('start', '<=', $from)->where('end', '>=', $till)->first();

        //dd($cita && $cita->consulta);

        if($cita && $cita->consulta) return false;

        return true;
    }
}
