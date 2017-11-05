<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta;
use App\Models\Prenatal;

class ConsultasController extends Controller
{
    /**
     * [delete description]
     * @param  Consulta $consulta [description]
     * @return [type]             [description]
     */
    public function delete(Consulta $consulta)
    {
        $consulta->cita()->delete();
        $consulta->prenatal()->delete();
        $consulta->delete();

        session()->flash('message_danger', "Consulta Eliminada");
        return back();
    }

    /**
     * [storePrenatal description]
     * @param  Request  $request  [description]
     * @param  Prenatal $prenatal [description]
     * @return [type]             [description]
     */
    public function storePrenatal(Request $request, Prenatal $prenatal)
    {
        return $request;
    }
}
