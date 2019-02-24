<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Paciente, Consulta, UltrasonidoPelvico, Prenatal, UltrasonidoTrimestre, UltrasonidoTrimestreFeto, UltrasonidoEstructural, UltrasonidoEstructuralFeto, Neurosonografia, NeurosonografiaFeto, Ecocardiografia, EcocardiografiaFeto, Doppler, DopplerFeto, Ginecologica, Colposcopia, FechaProcedimiento};

use PDF;
use DataTables;

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

    /**
     * [deletePrenatal description]
     * @param  Prenatal $prenatal [description]
     * @return [type]             [description]
     */
    public function deletePrenatal(Prenatal $prenatal)
    {
        $prenatal->delete();

        session()->flash('message_success', "Examen Eliminado");
        return back();
    }

    /**
     * [reportPrenatal description]
     * @param  Prenatal $prenatal [description]
     * @return [type]             [description]
     */
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
        $UltrasonidoEstructural = new UltrasonidoEstructural($request->all());
        $consulta->estructural()->save($UltrasonidoEstructural);

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
     * [deleteNeurosonografia description]
     * @param  Neurosonografia $neurosonografia [description]
     * @return [type]                           [description]
     */
    public function deleteNeurosonografia(Neurosonografia $neurosonografia)
    {
        $neurosonografia->fetos()->delete();
        $neurosonografia->delete();

        session()->flash('message_success', "Examen Eliminado");
        return back();
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
     * [deleteEcocardiografia description]
     * @param  Ecocardiografia $ecocardiografia [description]
     * @return [type]                           [description]
     */
    public function deleteEcocardiografia(Ecocardiografia $ecocardiografia)
    {
        $ecocardiografia->fetos()->delete();
        $ecocardiografia->delete();

        session()->flash('message_success', "Examen Eliminado");
        return back();
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
     * [deleteDoppler description]
     * @param  Doppler $doppler [description]
     * @return [type]           [description]
     */
    public function deleteDoppler(Doppler $doppler)
    {
        $doppler->fetos()->delete();
        $doppler->delete();

        session()->flash('message_success', "Examen Eliminado");
        return back();
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
        $ginecologica = new Ginecologica($request->all());
        (isset($request->plan_medico)) ? $ginecologica->plan_medico = implode(', ', $request->plan_medico) : '';
        (isset($request->examen_laboratorio)) ? $ginecologica->examen_laboratorio = implode(', ', $request->examen_laboratorio) : '';

        $consulta->ginecologica()->save($ginecologica);

        session()->flash('message_success', "Examen Agregado");
        return back();
    }

    /**
     * [deleteGinecologica description]
     * @param  Ginecologica $ginecologica [description]
     * @return [type]                     [description]
     */
    public function deleteGinecologica(Ginecologica $ginecologica)
    {
        $ginecologica->delete();

        session()->flash('message_success', "Examen Eliminado");
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

    /**
     * [storeColposcopia description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function storeColposcopia(Request $request, Consulta $consulta)
    {
        $consulta->colposcopia()->save(
            $colposcopia = new Colposcopia($request->all())
        );

        (isset($request->cambios_menores)) ? $colposcopia->cambios_menores = implode(', ', $request->cambios_menores) : '';
        (isset($request->cambios_mayores)) ? $colposcopia->cambios_mayores = implode(', ', $request->cambios_mayores) : '';
        $colposcopia->update();

        session()->flash('message_success', "Examen Agregado");
        return back();
    }

    /**
     * [deleteColposcopia description]
     * @param  [type] Colposcopia [description]
     * @return [type]             [description]
     */
    public function deleteColposcopia(Colposcopia $colposcopia)
    {
        $colposcopia->delete();

        session()->flash('message_success', "Examen Eliminado");
        return back();
    }

    /**
     * [reportColposcopia description]
     * @param  Colposcopia $colposcopia [description]
     * @return [type]                   [description]
     */
    public function reportColposcopia(Colposcopia $colposcopia)
    {
        //return view('reports.colposcopia', compact('colposcopia'));

        $pdf = \PDF::loadView('reports.colposcopia', compact('colposcopia'));
        return $pdf->stream();
	}

	 /**
     * [getFechaProcedimiento description]
     * @param   FechaProcedimiento  $fechaprocedimiento  [$fechaprocedimiento description]
     * @return  [type]                                   [return description]
     */
    public function getFechaProcedimiento(FechaProcedimiento $fechaprocedimiento)
    {
        return response()->json([
            'fechaprocedimiento' => $fechaprocedimiento->load('paciente')
        ]);
	}

	/**
	 * [apiFechaProcedimiento description]
	 * @return  [type]  [return description]
	 */
    public function apiFechaProcedimiento()
    {
        $fecha = FechaProcedimiento::with('paciente');

        return Datatables::of($fecha)->addColumn('action', function($fecha){
            return "<div class='actions'>
                        <a href='". route('paciente.show', [$fecha->paciente->id]) ."' class='btn'><i class='ion-search'></i></a>
                        <button class='btn' data-id='{$fecha->id}' onclick='updatePocedimiento($(this))'><i class='ion-edit'></i></button>
                        <a href='". route('fecha.procedimiento.delete', [$fecha->id]) ."' class='btn'><i class='fa fa-trash-o'></i></a>
                    </div>";
        })->make(true);
    }

    /**
     * [storeFechaProcedimiento description]
     * @param  Request  $request  [description]
     * @param  Paciente $paciente [description]
     * @return [type]             [description]
     */
    public function storeFechaProcedimiento(Request $request, Paciente $paciente)
    {
        $paciente->fecha_procedimiento()->save(
            new FechaProcedimiento($request->all())
        );

        session()->flash('message_success', "Fecha de procedimiento agregada");
        return back();
    }

	/**
	 * [updateFechaProcedimiento description]
	 * @param   Request             $request             [$request description]
	 * @param   FechaProcedimiento  $fechaprocedimiento  [$fechaprocedimiento description]
	 * @return  [type]                                   [return description]
	 */
	public function updateFechaProcedimiento(Request $request, FechaProcedimiento $fechaprocedimiento)
	{
		$fechaprocedimiento->update($request->all());

		session()->flash('message_success', "Fecha de procedimiento modificada");
        return back();

	}

    /**
     * [deleteFechaProcedimiento description]
     * @param   FechaProcedimiento  $fechaprocedimiento  [$fechaprocedimiento description]
     * @return  [type]                                   [return description]
     */
    public function deleteFechaProcedimiento(FechaProcedimiento $fechaprocedimiento)
    {
        $fechaprocedimiento->delete();

        session()->flash('message_danger', "Fecha de procedimiento eliminada");
        return back();
    }
}
