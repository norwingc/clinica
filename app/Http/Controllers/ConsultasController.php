<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Consulta, UltrasonidoPelvico, Prenatal};

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
    * @param  Consulta $consulta [description]
    * @return [type]             [description]
    */
    public function storePrenatal(Request $request, Consulta $consulta)
    {
        return $request;
    }

    /**
     * [storePelvico description]
     * @param  Request  $request  [description]
     * @param  Consulta $consulta [description]
     * @return [type]             [description]
     */
    public function storePelvico(Request $request, Consulta $consulta)
    {
        $consulta->pelvico()->save(new UltrasonidoPelvico($request->all()));

        session()->flash('message_success', "Examen Agregado");
        return back();
    }
}
