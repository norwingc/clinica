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
            font-size: 1.1em;
            color: #404040;
            padding-top: 12em;
            padding-bottom: 8em;
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
                    <td>{{ $doppler->consulta->paciente->name }}</td>
                </tr>
                 <tr>
                    <th>Edad:</th>
                    <td>{{ $doppler->edad }} {!! ($doppler->edad_gestacional != '') ? ' / '. $doppler->edad_gestacional : '' !!} </td>
                </tr>
                 <tr>
                    <th>Referido:</th>
                    <td>{{ $doppler->referido }}</td>
                </tr>
                <tr>
                    <th>Fecha:</th>
                    <td>{{ $doppler->date }} {!! ($doppler->rh_tipo != '') ? ' / '. $doppler->rh_tipo : '' !!}</td>
                </tr>
                <tr>
                    <th>Paridad</th>
                    <td>{{ $doppler->paridad }} {!! ($doppler->morbilidad != '') ? ' / '. $doppler->morbilidad : '' !!} </td>
                </tr>
            </table>
        </div>
    </div>

    <p class="sub_titul"><b>ULTRASONIDO III TRIMESTRE / DOPPLER Y CURVA DE CRECIMIENTO</b></p>

    <p><b>Se realizó estudio ultrasonográfico en tiempo real, observando:</b> Fetos: @if($doppler->feto == 1) Unico @elseif($doppler->feto == 2) Gemelo @else {{ $doppler->fetos->count() }} @endif</p>

    @php
        $count = $doppler->fetos->count();
    @endphp

    @foreach ($doppler->fetos as $value)
        <p class="sub_titul"><b>Analizando el feto: {{ $count }}</b></p>

        <p>
            Vitalidad: {{ $value->vitalidad_feto }}. <b>Localizacion:</b> {{ $value->localizacion_feto }}.
            @if($value->presentacion != 'N/A') <b>PRESENTACIÓN:</b> {{ $value->presentacion }}.@endif
            <b>SITUACION</b> {{ $value->situacion }}. <b>POSICION</b> {{ $value->posicion }}. <b>FCF:</b> {{ $value->fcf }}  latidos por minuto. <b>Sexo: </b> {{ $value->sexo_feto }}
        </p>

        <div class="row">
            <div class="col-xs-5">
                <table class="table-striped">
                        <tr>
                            <th colspan="3" style="text-align: center">SOMATOMETRIA</th>
                        </tr>
                        <tr>
                            <th>Parámetro</th>
                            <th>Medida mm</th>
                            <th>Semanas</th>
                        </tr>
                        <tr>
                            <th>DBP</th>
                            <td>{{ $value->dbp_medida }}</td>
                            <td>{{ $value->dbp_semanas }}</td>
                        </tr>
                        <tr>
                            <th>CC</th>
                            <td>{{ $value->cc_medida }}</td>
                            <td>{{ $value->cc_semanas }}</td>
                        </tr>
                        <tr>
                            <th>CA</th>
                            <td>{{ $value->ca_medida }}</td>
                            <td>{{ $value->ca_semanas }}</td>
                        </tr>
                        <tr>
                            <th>LF</th>
                            <td>{{ $value->lf_medida }}</td>
                            <td>{{ $value->lf_semanas }}</td>
                        </tr>
                         <tr>
                            <th>Fetometría promedio</th>
                            <td colspan="2" class="text-center">{{ $value->fetometria_promedio }}</td>
                        </tr>
                        <tr>
                            <th>Percentil</th>
                            <td colspan="2" class="text-center">{{ $value->percentil }}</td>
                        </tr>
                        <tr>
                            <th>Peso fetal</th>
                            <td colspan="2" class="text-center">{{ $value->peso_fetal }}</td>
                        </tr>
                        <tr>
                            <th>Fecha de parto estimada</th>
                            <td colspan="2">{{ date('d/m/Y', strtotime($value->fecha_parto)) }}</td>
                        </tr>
                    </table>
            </div>
            <div class="col-xs-6">
                <table class="table-striped">
                    <tr>
                        <th colspan="3" style="text-align: center">Flujometria Doppler</th>
                    </tr>
                    <tr>
                        <th>Vaso evaluado</th>
                        <th>Percentil</th>
                        <th>Valor</th>
                    </tr>
                    <tr>
                        <th>IP medio de arterias uterinas</th>
                        <td>{{ $value->percentil_ip_medio }}</td>
                        <td class="{{ $value->interpretacion_ip_medio != 'Normal'? 'bold' : '' }}">{{ $value->interpretacion_ip_medio }}</td>
                    </tr>
                    <tr>
                        <th>Notch Arteria uterina Izquierda</th>
                        <td>{{ $value->percentil_notch_izquierda }}</td>
                        <td class="{{ $value->interpretacion_notch_izquierda != 'Normal'? 'bold' : '' }}">{{ $value->interpretacion_notch_izquierda }}</td>
                    </tr>
                    <tr>
                        <th>Notch Arteria uterina Derecha</th>
                        <td>{{ $value->percentil_notch_derecha }}</td>
                        <td class="{{ $value->interpretacion_notch_derecha != 'Normal'? 'bold' : '' }}">{{ $value->interpretacion_notch_derecha }}</td>
                    </tr>
                    @if($value->vitalidad_feto != 'Ausencia de vitalidad')
                        <tr>
                            <th>Índice Cerebro placentario</th>
                            <td>{{ $value->percentil_cerebro_placentario }}</td>
                            <td class="{{ $value->interpretacion_cerebro_placentario != 'Normal'? 'bold' : '' }}">{{ $value->interpretacion_cerebro_placentario }}</td>
                        </tr>
                        <tr>
                            <th>Arteria cerebral media</th>
                            <td>{{ $value->percentil_arteria_cerebral }}</td>
                            <td class="{{ $value->interpretacion_arteria_cerebral != 'Normal'? 'bold' : '' }}">{{ $value->interpretacion_arteria_cerebral }}</td>
                        </tr>
                        <tr>
                            <th>Arteria Umbilical</th>
                            <td>{{ $value->percentil_arteria_umbilical }}</td>
                            <td class="{{ $value->interpretacion_arteria_umbilical != 'Normal'? 'bold' : '' }}">{{ $value->interpretacion_arteria_umbilical }}</td>
                        </tr>
                        <tr>
                            <th>Flujo diastólico de Arteria umbilical</th>
                            <td>{{ $value->percentil_flojo_diasotolico }}</td>
                            <td class="{{ $value->interpretacion_flojo_diasotolico != 'Normal'? 'bold' : '' }}">{{ $value->interpretacion_flojo_diasotolico }}</td>
                        </tr>
                        <tr>
                            <th>Itsmo aórtico</th>
                            <td>{{ $value->percentil_itsmo_aortico }}</td>
                            <td class="{{ $value->interpretacion_itsmo_aortico != 'Normal'? 'bold' : '' }}">{{ $value->interpretacion_itsmo_aortico }}</td>
                        </tr>
                        <tr>
                            <th>Ducto venoso</th>
                            <td>{{ $value->percentil_ducto_venenoso }}</td>
                            <td class="{{ $value->interpretacion_ducto_venenoso != 'Normal'? 'bold' : '' }}">{{ $value->interpretacion_ducto_venenoso }}</td>
                        </tr>
                        <tr>
                            <th>Flujo diastólico de ducto venoso</th>
                            <td>{{ $value->percentil_flujo_dicto_venenoso }}</td>
                            <td class="{{ $value->interpretacion_flujo_dicto_venenoso != 'Normal'? 'bold' : '' }}">{{ $value->interpretacion_flujo_dicto_venenoso }}</td>
                        </tr>
                        <tr>
                            <th>Vena umbilical</th>
                            <td>{{ $value->percentil_vena_umbilical }}</td>
                            <td class="{{ $value->interpretacion_vena_umbilical != 'Normal'? 'bold' : '' }}">{{ $value->interpretacion_vena_umbilical }}</td>
                        </tr>
                    @endif
                </table>
            </div>
        </div>

        @if($value->semanas == 'Mayor a 32 Semanas')

            <p>
                <b>Evaluación de parámetros biofísicos fetales</b> <br>
                Movimientos respiratorios (Normalidad 2 movimientos en 30 minutos) {{ $value->movimiento_respiratorios }}.
                Tono fetal (2 movimientos de flexión y extensión de dedos de mano, 1 movimientos de protrusión lingual y 2 movimientos de arqueamiento de columna): {{ $value->tono_fetal }}
                Movimientos corporales (Normalidad 2 en 30 minutos): {{ $value->movimiento_corporales }}. Liquido amniótico normal {{ $value->liquido_amoniotico }}
            </p>

            @if($value->examen_nst == 'Si')
                <p>
                    <b>NST</b><br>
                    Analisis de NST: {{ $value->analisis_nst }}. Datos NST: {{ $value->datos_nst }}
                </p>
            @endif

            @if($value->examen_maduracion == 'Si')
                <p>
                    <b>Maduracion pulmunar</b><br>
                    Índice de maduración Tórax/Cardio: {{ $value->indice_maduracion_torax }}. Índice maduración basal: {{ $value->indice_maduracion_basal }}. Índice evaluación pulmonar: {{ $value->indice_maduracion_pulmonar }}.
                    RIESGO DE DISTRES RESPIRATORIO: {{ $value->riesgo_distres }}
                </p>
            @endif

            @if($value->examen_oportunidad == 'Si')
                <p>
                    <b>Oportunidad de parto o cesárea. Calculadora fetal medicine foundation (Programa de Screning I trimestre) ID104192</b><br>
                    Oportunidad de parto espontaneo en los proximos 7 a 10 dias: {{ $value->parto_espontaneo }}.  <br>
                    Oportunidad de cesárea despues de parto espontaneo: {{ $value->cesarea_espontaneo }}.  <br>
                    Oportunidad de cesárea despues de induccion: {{ $value->cesarea_induccion }}. <br>
                </p>
            @endif
        @endif

        <p>
            <b>Placenta:</b>  Numero: {{ $value->placenta_numero }}. Posicion: {{ $value->placenta_posocion }}. Grado: {{ $value->placenta_grado }}. Presencia de calcificaciones probablemente patológicas: {{ $value->presencia_patologicas }}.
            Áreas de infartos placentarios: {{ $value->areas_infarto }}. Longitud de cérvix: {{ $value->longitud_cervix }}mm. Funneling: {{ $value->funneling }}. @if($value->funneling == 'Positivo') Porcentaje: {{ $value->porcentaje_funneling }}. @endif
            Sludge: {{ $value->sludge }}. Líquido amniótico: {{ $value->liquido_amniotico }}. @if($value->liquido_amniotico != 'Normal') Clasificacion: {{ $value->clasificacion_liquido_amniotico }}. @endif
            Valor de ILA: {{ $value->valor_ila }} cms.
        </p>

        @php
            $count--;
        @endphp
    @endforeach

     <p>Revision: {{ $doppler->revision }}</p>

    <p class="sub_titul"><b>Conclusion</b></p>

    <p style="margin:0">Embarazo por fetometría de: {{ $doppler->conclusion_embarazo_gestacion }}</p>
    <p style="margin:0">{{ $doppler->concluciones }}</p>

     @if($doppler->comentarios != '')
        <p class="sub_titul"><b>Comentarios</b></p>
        <p>{{ $doppler->comentarios }}</p>
    @endif

    @if($doppler->recomendaciones != '')
        <p class="sub_titul"><b>Recomendaciones</b></p>
        <p>{{ $doppler->recomendaciones }}</p>
    @endif

    @include('includes._firmas')
</body>
</html>
