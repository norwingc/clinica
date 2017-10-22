<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class CitasController extends Controller
{

    /**
     * [get description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function get($id = null)
    {
        # code...
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
    public function store(Request $request)
    {
        $paciente = Paciente::where('id_number', $request->id_number)->first();

        if(!$paciente){
            $paciente = new Paciente($request->all());
            $paciente->save();
        }

        return $paciente;
    }
}
