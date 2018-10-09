<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Download</title>
    <style>
        <?php include(base_path().'/css/bootstrap.min.css');?>
    </style>
    <style>
        body{
            text-align: justify;
            font-size: 1.1em:
            color: #404040;
            padding-top: 8em;
            padding-bottom: 7em;
        }
        .sub_titul{
            color: #3c8dbc;
            text-align: center;
            text-decoration: underline;
            font-weight: bold;
            margin-top: 1em;
        }
        table{
            width: 100%;
        }
        .bold{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <table class="table-striped">
                <tr>
                    <th>Nombre:</th>
                    <td>{{ $trimestre->consulta->paciente->name }}</td>
                </tr>
                 <tr>
                    <th>Edad:</th>
                    <td>{{ $trimestre->edad }} {!! ($trimestre->edad_gestacional != '') ? ' / '. $trimestre->edad_gestacional : '' !!} </td>
                </tr>
                 <tr>
                    <th>Referido:</th>
                    <td>{{ $trimestre->referido }}</td>
                </tr>
                <tr>
                    <th>Fecha:</th>
                    <td>{{ $trimestre->date }} {!! ($trimestre->rh_tipo != '') ? ' / '. $trimestre->rh_tipo : '' !!}</td>
                </tr>
                <tr>
                    <th>Paridad</th>
                    <td>{{ $trimestre->paridad }} {!! ($trimestre->morbilidad != '') ? ' / '. $trimestre->morbilidad : '' !!} </td>
                </tr>
            </table>
        </div>
    </div>

    <p class="sub_titul">ULTRASONIDO ESTRUCTURAL DE I TRIMESTRE</p>

    <p>
        <b>Se realizó estudio ultrasonográfico en tiempo real, observando:</b>
        Fetos: @if($trimestre->feto == 1) Unico @elseif($trimestre->feto == 2) Gemelo @else {{ $trimestre->fetos->count() }} @endif
    </p>

    @php
        $count = $trimestre->fetos->count();
    @endphp
    @foreach ($trimestre->fetos as $value)
        <p class="sub_titul"><b>Revision de feto: {{ $count }}</b></p>

        <p>
            <b>Vitalidad:</b> {{ $value->vitalidad_feto }}. <b>Localizacion: </b> {{ $value->localizacion_feto }}
        </p>

        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <table class="table-striped">
                    <tr>
                        <th>LCC</th>
                        <td>{{ $value->somatometria_lcc }}mm / {{ $value->somatometria_semanas }}</td>
                    </tr>
                    <tr>
                        <th>DBP</th>
                        <td>{{ $value->somatometria_dbp }} Semanas</td>
                    </tr>
                    <tr>
                        <th>CC</th>
                        <td>{{ $value->somatometria_cc }} Semanas</td>
                    </tr>
                    <tr>
                        <th>CA</th>
                        <td>{{ $value->somatometria_ca }} Semanas</td>
                    </tr>
                    <tr>
                        <th>LF</th>
                        <td>{{ $value->somatometria_lf }} Semanas</td>
                    </tr>
                    <tr>
                        <th>FCF</th>
                        <td>{{ $value->somatometria_fcf }} latidos por min</td>
                    </tr>
                    <tr>
                        <th>Fetometría</th>
                        <td>{{ $value->somatometria_fetometria }} Semanas</td>
                    </tr>
                    <tr>
                        <th>TN</th>
                        <td>{{ $value->somatometria_tn }} mm</td>
                    </tr>
                    <tr>
                        <th>Fecha estimada de parto</th>
                        <td>{{ date('d/m/Y', strtotime($value->somatometria_fecha_estimada_parto)) }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <p class="sub_titul"><b>I TAMIZAJE PARA DEFECTOS ESTRUCTURALES</b></p>
        <p>
            <b>Craneo</b> Integridad: Normal {{ $value->craneo }}. Forma: Normal {{ $value->craneo_forma }}. Plexos coroideos: Normal {{ $value->pexos_caroideos }}. Presencia de quiste de plexos coroideos: {{ $value->quiste_plexos }}.  @if($value->quiste_plexos == 'Si') {{ $value->quiste_plexos_si }} @endif <br>
            Hueso nasal: {{ $value->hueso_nasal }}. Medición: {{ $value->medicion_nasal }} mm
            Tórax: {{ $value->torax_normal }}
            <b>Corazón</b> Localización  intratoracica {{ $value->localizacion_intratoracica }}. Ectopia cordis {{ $value->ectopia_cordis }}. Anomalía cardiaca {{ $value->anomalia_cardica }}  @if($value->anomalia_cardica == 'Si'). Descripcion: {{ $value->descripcion_anomalia_cardica }} @endif
        </p>
        <p><b>Abdomen:</b> Inserción de cordón normal {{ $value->insercion_cordon }}. Presencia de 3 vasos {{ $value->presencia_vasos }}. Arteria umbilical única {{ $value->arteria_umbilical }}. Pared abdominal integra {{ $value->pared_integra }}. @if($value->pared_integra == 'No') {{ $value->localizacion_defecto_abdominal }}. Medida del defecto: {{ $value->defecto_medida }} mm @endif</p>
        @if($value->pared_integra == 'No')
            <p>
                <b>Estructuras presentes en defecto:</b> Cubierto por membrana: {{ $value->cubierta_membrana }}. Asas de intestino delgado: {{ $value->asas_intestino_delgado }}.
                Asas de intestino grueso: {{ $value->asas_intestino_grueso }}. Dilatación de asas intra abdominal: {{ $value->dilatacion_intra_abdominal }}. @if($value->dilatacion_intra_abdominal == 'Si') Medición: {{ $value->medicion_intra_abdominal }}mm. @endif
                Dilatación de asas extra abdominal: {{ $value->dilatacion_extra_abdominal }}. @if($value->dilatacion_extra_abdominal == 'Si') Medición: {{ $value->medicion_extra_abdominal }}mm. @endif
                Sospecha de peritonitis: {{ $value->sospecha_peritonitis }}. Cámara gástrica presente: {{ $value->camara_gastrica }}. Vejiga urinaria presente {{ $value->vejiga_urinaria }}.
            </p>
        @endif
        <p>Cámara gástrica Insitu: {{ $value->camara_gastrica }}. Vejiga Urinaria Insitu: {{ $value->vejiga }}.</p>
        <p>
            <b>Extremidades superiores</b> Ambas presentes: {{ $value->extremidades_superiores }}. Integras: {{ $value->extremidades_superiores_integras }}. @if($value->extremidades_superiores_integras == 'No') Extremidad afectada: {{ $value->extremidades_superiores_afectada }}. @endif
            <b>Extremidades inferiores</b> Ambas presentes: {{ $value->extremidades_inferiores }}. Integras: {{ $value->extremidades_inferiores_integras }}. @if($value->extremidades_inferiores_integras == 'No') Extremidad afectada: {{ $value->extremidades_inferiores_afectada }}. @endif
        </p>
        <p>
            <b>Placenta:</b>  Numero: {{ $value->placenta_numero }}. Posicion: {{ $value->placenta_posocion }}. Fusion de membranas: {{ $value->fusion_membranas }}. Grado: {{ $value->placenta_grado }}. Longitud de cérvix: {{ $value->longitud_cervix }}mm.
            Funneling:  {{ $value->funneling }}. @if($value->funneling == 'Positivo') Porcentaje: {{ $value->porcentaje_funneling }}.@endif Sludge: {{ $value->sludge }}. Líquido amniótico: {{ $value->liquido_amniotico }}
        </p>

        <p class="sub_titul"><b>II TAMIZAJE PARA EL ASESORAMIENTO CLÍNICO DE RIESGO DE CROMOSOMOPATÍA</b></p>

        <div class="row">
            <div class="col-xs-5">
                <table class="table-striped">
                    <tr class="text-center">
                        <th colspan="2" class="text-center">RIESGO TRISOMÍA 21</th>
                    </tr>
                    <tr>
                        <th>Basal (Edad)</th>
                        <td>{{ $value->basal}}</td>
                    </tr>
                    <tr>
                        <th>Edad + Translucencia Nucal</th>
                        <td>{{ $value->edad_tn}}</td>
                    </tr>
                    <tr>
                        <th>Edad +TN + Marcadores Emergentes</th>
                        <td>{{ $value->edad_tn_marcadores}}</td>
                    </tr>
                </table>
            </div>
            <div class="col-xs-5">
                <img class="img-responsive" src="{{ asset('img/grafico_trimestre.png') }}" alt="">
            </div>
        </div>

        @php
            $count--;
        @endphp
    @endforeach

    <p class="sub_titul"><b>III TAMIZAJE PARA  ENFERMEDADES HIPERTENSIVAS EN EL EMBARAZO</b></p>
    <p>
        <b>Antecedentes Maternos:</b> Historia de Madre con Pre eclampsia: {{ $trimestre->historia_preecampsia_mama }}. Historia de Madre con Hipertensión: {{ $trimestre->historia_hipertension_mama }}.
        Historia de hermana con Pre eclampsia: {{ $trimestre->historia_preecampsia_hermana }}. <b>Historia personal de hipertensión</b> Pre eclampsia previa {{ $trimestre->historia_hipertension_personal }}
    </p>
    <p>Peso actual: {{ $trimestre->peso }}. Talla: {{ $trimestre->talla }}. IMC: {{ $trimestre->imc }}.  Presion arterial brazo derecho: {{ $trimestre->pa_derecho }} mmhg. Presion arterial brazo izquierdo {{ $trimestre->pa_izquierdo }} mmhg. IP medio de arterias uterinas: {{ $trimestre->ip_artrias }}.</p>

    <p class="sub_titul"><b>Tamizaje De Vasa Previa</b></p>
    <p>Bidimensional: {{ $trimestre->bidimensional }}. Doppler color: {{ $trimestre->doppler_color }}</p>

    <p class="sub_titul"><b>Conclusiones</b></p>
    <p style="margin: 0">
        Feto por longitud craneo cauda {{ $trimestre->conclusion_lcc }}.
        Riesgo para procesos de cromosomopatías (Síndrome de Down) {{ $trimestre->conclusion_riesago_cromosomopatias }}. <br>
        Riesgo para Pre eclampsia de aparición temprana: {{ $trimestre->conclusion_riesago_preeclampsia }}.
        Riesgo fenómenos hipertensivos tardíos: {{ $trimestre->conclusion_riesago_hipertensivos }}.
        Riesgo para Restricción del Crecimiento Intrauterino: {{ $trimestre->conclusion_riesago_restiaccion }}.
        Riesgo para Parto Pretermino: {{ $trimestre->conclusion_riesago_parto_pretermino }}.
    </p>

    @if($trimestre->comentarios != '')
        <p class="sub_titul"><b>Comentarios</b></p>
        <p>{{ $trimestre->comentarios }}</p>
    @endif

    @if($trimestre->recomendaciones != '')
        <p class="sub_titul"><b>Recomendaciones</b></p>
        <p>{{ $trimestre->recomendaciones }}</p>
    @endif

    @include('includes._firmas')
</body>
</html>
