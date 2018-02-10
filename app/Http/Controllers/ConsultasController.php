<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Consulta, UltrasonidoPelvico, Prenatal, UltrasonidoTrimestre, UltrasonidoTrimestreFeto};

use PDF;

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
        $consulta->pelvico()->save(
            $pelvico = new UltrasonidoPelvico($request->all())
        );

        (isset($request->cara)) ? $pelvico->cara = implode(', ', $request->cara) : '';
        (isset($request->localizacion_masa)) ? $pelvico->localizacion_masa = implode(', ', $request->localizacion_masa) : '';
        (isset($request->concluciones)) ? $pelvico->concluciones = implode(', ', $request->concluciones) : '';

        $pelvico->update();

        session()->flash('message_success', "Examen Agregado");
        return back();
    }

    /**
     * [deletePelvico description]
     * @param  UltrasonidoPelvico $pelvico [description]
     * @return [type]                      [description]
     */
    public function deletePelvico(UltrasonidoPelvico $pelvico)
    {
        return $pelvico;
    }

    /**
     * [reportPelvico description]
     * @param  UltrasonidoPelvico $pelvico [description]
     * @return [type]                      [description]
     */
    public function reportPelvico(UltrasonidoPelvico $pelvico)
    {
        //return view('reports.pelvico', compact('pelvico'));

        $pdf = \PDF::loadView('reports.pelvico', compact('pelvico'));
        return $pdf->stream();
    }

    /**
     * [storeTrimestre description]
     * @param  Request  $request  [description]
     * @param  Consulta $consulta [description]
     * @return [type]             [description]
     */
    public function storeTrimestre(Request $request, Consulta $consulta)
    {
        $UltrasonidoTrimestre = new UltrasonidoTrimestre($request->all());
        $consulta->trimestre()->save($UltrasonidoTrimestre);

        foreach ($request->fetos as $key => $value) {

            $UltrasonidoTrimestre->fetos()->save(
                $feto = new UltrasonidoTrimestreFeto($value)
            );

            (isset($value['quiste_plexos_si'])) ? $feto->quiste_plexos_si = implode(', ', $value['quiste_plexos_si']) : '';
            $feto->update();
        }

        return response()->json([
            'saved' => true
        ]);
    }

    /**
     * [deleteTrimestre description]
     * @param  UltrasonidoTrimestre $trimestre [description]
     * @return [type]                          [description]
     */
    public function deleteTrimestre(UltrasonidoTrimestre $trimestre)
    {
        return $trimestre;
    }

    /**
     * [reportTrimestre description]
     * @param  UltrasonidoTrimestre $trimestre [description]
     * @return [type]                          [description]
     */
    public function reportTrimestre(UltrasonidoTrimestre $trimestre)
    {
        return $trimestre->load('fetos');
    }
}
