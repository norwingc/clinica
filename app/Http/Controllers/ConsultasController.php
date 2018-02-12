<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Consulta, UltrasonidoPelvico, Prenatal, UltrasonidoTrimestre, UltrasonidoTrimestreFeto, UltrasonidoEstructural, UltrasonidoEstructuralFeto, Neurosonografia, NeurosonografiaFeto};

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
        $pelvico->delete();

        session()->flash('message_success', "Examen Eliminado");
        return back();
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
        $trimestre->fetos()->delete();
        $trimestre->delete();

        session()->flash('message_success', "Examen Eliminado");
        return back();
    }

    /**
     * [reportTrimestre description]
     * @param  UltrasonidoTrimestre $trimestre [description]
     * @return [type]                          [description]
     */
    public function reportTrimestre(UltrasonidoTrimestre $trimestre)
    {
        //return view('reports.trimestre', ['trimestre' => $trimestre->load('fetos')]);

        $pdf = \PDF::loadView('reports.trimestre', ['trimestre' => $trimestre->load('fetos')]);
        return $pdf->stream();
    }

    /**
     * [storeEstructural description]
     * @param  Request  $request  [description]
     * @param  Consulta $consulta [description]
     * @return [type]             [description]
     */
    public function storeEstructural(Request $request, Consulta $consulta)
    {
        //return $request;

        $UltrasonidoEstructural = new UltrasonidoEstructural($request->all());
        $consulta->trimestre()->save($UltrasonidoEstructural);

        foreach ($request->fetos as $key => $value) {

            $UltrasonidoEstructural->fetos()->save(
                $feto = new UltrasonidoEstructuralFeto($value)
            );

            (isset($value['presencia_quiste_si'])) ? $feto->presencia_quiste_si = implode(', ', $value['presencia_quiste_si']) : '';
            $feto->update();
        }

        return response()->json([
            'saved' => true
        ]);
    }

    /**
     * [reportEstructural description]
     * @param  UltrasonidoEstructural $estructural [description]
     * @return [type]                              [description]
     */
    public function reportEstructural(UltrasonidoEstructural $estructural)
    {
       //return view('reports.estructural', ['estructural' => $estructural->load('fetos')]);

        $pdf = \PDF::loadView('reports.estructural', ['estructural' => $estructural->load('fetos')]);
        return $pdf->stream();
    }

    /**
     * [deleteEstructural description]
     * @param  UltrasonidoEstructural $estructural [description]
     * @return [type]                              [description]
     */
    public function deleteEstructural(UltrasonidoEstructural $estructural)
    {
        $estructural->fetos()->delete();
        $estructural->delete();

        session()->flash('message_success', "Examen Eliminado");
        return back();
    }

    /**
     * [storeNeurosonografia description]
     * @param  Request  $request  [description]
     * @param  Consulta $consulta [description]
     * @return [type]             [description]
     */
    public function storeNeurosonografia(Request $request, Consulta $consulta)
    {
        $Neurosonografia = new Neurosonografia($request->all());
        $consulta->neurosonografia()->save($Neurosonografia);

        foreach ($request->fetos as $key => $value) {

            $Neurosonografia->fetos()->save(
                $feto = new NeurosonografiaFeto($value)
            );

            (isset($value['presencia_quiste_si'])) ? $feto->presencia_quiste_si = implode(', ', $value['presencia_quiste_si']) : '';
            $feto->update();
        }

        return response()->json([
            'saved' => true
        ]);
    }

    /**
     * [reportNeurosonografia description]
     * @param  Neurosonografia $neurosono [description]
     * @return [type]                     [description]
     */
    public function reportNeurosonografia(Neurosonografia $neurosonografia)
    {
        //return view('reports.neurosonografia', ['neurosono' => $neurosonografia->load('fetos')]);

        $pdf = \PDF::loadView('reports.neurosonografia', ['neurosono' => $neurosonografia->load('fetos')]);
        return $pdf->stream();
    }
}
