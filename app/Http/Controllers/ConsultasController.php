<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Consulta, UltrasonidoPelvico, Prenatal, UltrasonidoTrimestre, UltrasonidoTrimestreFeto, UltrasonidoEstructural, UltrasonidoEstructuralFeto, Neurosonografia, NeurosonografiaFeto, Ecocardiografia, EcocardiografiaFeto, Doppler, DopplerFeto, Ginecologica};

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
        $consulta->prenatal()->save(
          $prenatal = new Prenatal($request->all())
        );


        (isset($request->plan_medico)) ? $prenatal->plan_medico = implode(', ', $request->plan_medico) : '';
        (isset($request->examen_laboratorio)) ? $prenatal->examen_laboratorio = implode(', ', $request->examen_laboratorio) : '';
        (isset($request->estado_general)) ? $prenatal->estado_general = implode(', ', $request->estado_general) : '';
        (isset($request->vagina_cervix)) ? $prenatal->vagina_cervix = implode(', ', $request->vagina_cervix) : '';

        $prenatal->update();

        session()->flash('message_success', "Examen Agregado");
        return back();
    }

    public function reportPrenatal(Prenatal $prenatal)
    {
      //return view('reports.prenatal', compact('prenatal'));

      $pdf = \PDF::loadView('reports.prenatal', compact('prenatal'));
      return $pdf->stream();
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

    /**
     * [storeEcocardiografia description]
     * @param  Request  $request  [description]
     * @param  Consulta $consulta [description]
     * @return [type]             [description]
     */
    public function storeEcocardiografia(Request $request, Consulta $consulta)
    {
        $Ecocardiografia = new Ecocardiografia($request->all());
        $consulta->ecocardiografia()->save($Ecocardiografia);

        (isset($request->concluciones)) ? $Ecocardiografia->concluciones = implode(', ', $request->concluciones) : '';
        $Ecocardiografia->update();

        foreach ($request->fetos as $key => $value) {

            $Ecocardiografia->fetos()->save(
                $feto = new EcocardiografiaFeto($value)
            );

            (isset($value['tipo_civ'])) ? $feto->tipo_civ = implode(', ', $value['tipo_civ']) : '';
            $feto->update();
        }

        return response()->json([
            'saved' => true
        ]);
    }

    /**
     * [reportEcocardiografia description]
     * @param  Ecocardiografia $ecocardiografia [description]
     * @return [type]                           [description]
     */
    public function reportEcocardiografia(Ecocardiografia $ecocardiografia)
    {
        //return view('reports.ecocardiografia', ['ecocardio' => $ecocardiografia->load('fetos')]);

        $pdf = \PDF::loadView('reports.ecocardiografia', ['ecocardio' => $ecocardiografia->load('fetos')]);
        return $pdf->stream();
    }

    /**
     * [storeDoppler description]
     * @param  Request  $request  [description]
     * @param  Consulta $consulta [description]
     * @return [type]             [description]
     */
    public function storeDoppler(Request $request, Consulta $consulta)
    {
        $Doppler = new Doppler($request->all());
        $consulta->doppler()->save($Doppler);

        (isset($request->concluciones)) ? $Doppler->concluciones = implode(', ', $request->concluciones) : '';
        $Doppler->update();

        foreach ($request->fetos as $key => $value) {

            $Doppler->fetos()->save(
                $feto = new DopplerFeto($value)
            );
        }

        return response()->json([
            'saved' => true
        ]);
    }

    /**
     * [reportDoppler description]
     * @param  Doppler $doppler [description]
     * @return [type]           [description]
     */
    public function reportDoppler(Doppler $doppler)
    {
       //return view('reports.doppler', ['doppler' => $doppler->load('fetos')]);

       $pdf = \PDF::loadView('reports.doppler', ['doppler' => $doppler->load('fetos')]);
       return $pdf->stream();
    }

    /**
     * [storeGinecologica description]
     * @param  Consulta $consulta [description]
     * @return [type]             [description]
     */
    public function storeGinecologica(Request $request, Consulta $consulta)
    {
      $consulta->ginecologica()->save(new Ginecologica($request->all()));

      session()->flash('message_success', "Examen Agregado");
      return back();
    }

    /**
     * [reportGinecologica description]
     * @param  Ginecologica $ginecologica [description]
     * @return [type]                     [description]
     */
    public function reportGinecologica(Ginecologica $ginecologica)
    {
      //return view('reports.ginecologica', compact('ginecologica'));

      $pdf = \PDF::loadView('reports.ginecologica', compact('ginecologica'));
      return $pdf->stream();
    }
}
