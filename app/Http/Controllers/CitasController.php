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

            $citas = Cita::has('consulta')->with('consulta', 'consulta.paciente')->get();

            return Datatables::of($citas)->addColumn('horario', function($cita){
                return date('g:i a', strtotime($cita->start)). ' - ' .date('g:i a', strtotime($cita->end));
            })->addColumn('action', function($cita){
                return "
                    <div class='actions'>
                        <a href='". route('paciente.show', [$cita->consulta->first()->paciente]) ."' class='btn'><i class='ion-search'></i></a>
                        <button class='btn' data-paciente='". $cita->consulta->first()->paciente->id ."' data-cita='". $cita->id ."' onclick='updateCita($(this))'><i class='ion-edit'></i></button>
                        <a href='". route('citas.delete', [$cita->id]) ."' class='btn'><i class='fa fa-trash-o'></i></a>
                    </div>";
            })->make(true);
        }

        return response()->json([
            'cita' => Cita::find($id)->load('consulta.paciente')
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
        $end   = null;

        if($request->duracion == '30 min'){
            $end = \Carbon\Carbon::parse($start)->addMinutes(30);
        }else if($request->duracion == '1 hr'){
            $end = \Carbon\Carbon::parse($start)->addMinutes(60);
        }else if($request->duracion == '1 hr 30 min'){
            $end = \Carbon\Carbon::parse($start)->addMinutes(90);
        }elseif ($request->duracion == '2 hr') {
            $end = \Carbon\Carbon::parse($start)->addMinutes(120);
        }

        if($this->validateCita($start, $end, $request->doctor) == false){
            session()->flash('message_danger', "Ya existe una cita a esa hr para " . $request->doctor);
            return back();
        }

        if($paciente == null){

            $request->validate([
                'phone'     => 'unique:pacientes',
                'id_number' => 'unique:pacientes',
            ]);

            $paciente = Paciente::where('phone', $request->phone)->first();

            if(!$paciente){
                $paciente       = new Paciente($request->all());
                $paciente->name = ucwords(strtolower($request->name));
                $paciente->save();
            }
        }

        $cita             = new Cita();
        $cita->start      = $start;
        $cita->end        = $end;
        $cita->date       = $request->date;
        $cita->comentario = $request->comentario;
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


        $cita->consulta()->save(
            $consulta = new Consulta($request->all())
        );
        $consulta->paciente_id = $paciente->id;
        $consulta->update();

        session()->flash('message_success', "Cita Agregada");
        return back();
    }

    /**
     * [storeCitaAllDay description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function storeCitaAllDay(Request $request)
    {
        $cita             = new Cita();
        $cita->date       = $request->date;
        $cita->comentario = $request->comentario;
        $cita->title      = $request->comentario;
        $cita->all_day    = true;
        $cita->color      = '#ff0000';
        $cita->start      = $request->date . ' 00:00:00';
        $cita->end        = $request->date . ' 23:59:00';
        $cita->save();

        session()->flash('message_success', "Cita Agregada");
        return back();
    }

    /**
     * [update description]
     * @param  [type] $cita [description]
     * @return [type]       [description]
     */
    public function update(Request $request,Cita $cita)
    {
        $fecha = $request->date;
        $start = $fecha . ' '.$request->start;
        $start = date('Y-m-d H:i:s', strtotime($start));
        $end   = null;

        if($request->duracion == '30 min'){
            $end = \Carbon\Carbon::parse($start)->addMinutes(30);
        }else if($request->duracion == '1 hr'){
            $end = \Carbon\Carbon::parse($start)->addMinutes(60);
        }else if($request->duracion == '1 hr 30 min'){
            $end = \Carbon\Carbon::parse($start)->addMinutes(90);
        }elseif ($request->duracion == '2 hr') {
            $end = \Carbon\Carbon::parse($start)->addMinutes(120);
        }

        if($this->validateCita($start, $end, $request->doctor) == false){
            session()->flash('message_danger', "Ya existe una cita a esa hr para " . $request->doctor);
            return back();
        }

        $cita->start      = $start;
        $cita->end        = $end;
        $cita->date       = $request->date;
        $cita->comentario = $request->comentario;
        $cita->title = 'Paciente: '. $request->name . ' Examen: '. $request->examen_type .' Costo: $'. $request->costo . ' Comentario: '. $request->comentario;
        $cita->url   = '/Pacientes/User/View/'.$cita->consulta->paciente->id;

        if($request->doctor == 'Dr. Pavon'){
            $cita->color ='#3c8dbc';
        }else if ($request->doctor == 'Dra. Bravo') {
            $cita->color = '#ff4f81';
        }else{
            $cita->color = '#00a65a';
        }

        $cita->update();

        $cita->consulta()->update($request->only(
            'doctor', 'costo', 'examen_type'
        ));

        session()->flash('message_success', "Cita Modificada");
        return back();
    }

    /**
     * [delete description]
     * @param  Cita   $cita [description]
     * @return [type]       [description]
     */
    public function delete(Cita $cita)
    {
        $cita->consulta()->delete();
        $cita->delete();

        session()->flash('message_ganger', "Cita Eliminada");
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
        if($end == null) return false;

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
