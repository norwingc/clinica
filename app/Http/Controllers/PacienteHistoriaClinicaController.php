<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\PacienteHistoriaClinica;
use Illuminate\Http\Request;

class PacienteHistoriaClinicaController extends Controller
{
    /**
     * Undocumented function
     * @param Paciente $paciente
     * @return void
     */
    public function index(Paciente $paciente)
    {
        $paciente->load('historia_clinica');
        return view('paciente.historia-clinica', compact('paciente'));
    }

    /**
     * Undocumented function
     * @param Request $request
     * @return void
     */
    public function store(Request $request, Paciente $paciente)
    {
        # code...
    }

    /**
     * Undocumented function
     * @param Request $request
     * @param PacienteHistoriaClinica $pacienteHistoriaClinica
     * @return void
     */
    public function update(Request $request, PacienteHistoriaClinica $pacienteHistoriaClinica)
    {
        # code...
    }

    /**
     * Undocumented function
     * @param PacienteHistoriaClinica $pacienteHistoriaClinica
     * @return void
     */
    public function delete(PacienteHistoriaClinica $pacienteHistoriaClinica)
    {
        # code...
    }

    /**
     * Undocumented function
     * @param Paciente $paciente
     * @return void
     */
    public function download(Paciente $paciente)
    {
        # code...
    }
}
