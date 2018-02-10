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
        $pelvico = new UltrasonidoPelvico($request->all());
        $consulta->pelvico()->save($pelvico);

        $pelvico->cara              = implode(', ', $request->cara);
        $pelvico->localizacion_masa = implode(', ', $request->localizacion_masa);
        $pelvico->concluciones      = implode(', ', $request->concluciones);
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
        $UltrasonidoTrimestre->save();

        foreach ($request->fetos as $key => $value) {
            $UltrasonidoTrimestre->fetos()->save(
                new UltrasonidoTrimestreFeto($value)
            );
        }

        return response()->json([
            'saved' => true
        ]);
    }
}
