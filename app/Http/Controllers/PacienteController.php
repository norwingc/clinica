<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

use DataTables;

class PacienteController extends Controller
{
    /**
     * Undocumented function
     * @return void
     */
    public function index()
    {
        return view('paciente.index');
    }

    /**
     * Undocumented function
     * @return void
     */
    public function api()
    {
        return DataTables::of(Paciente::query())->make(true);
    }

    /**
     * Undocumented function
     * @param Request $request
     * @param Paciente $Paciente
     * @return void
     */
    public function update(Request $request, Paciente $Paciente)
    {
        # code...
    }
}
