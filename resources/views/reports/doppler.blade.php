<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Download</title>
    <link rel="stylesheet" href="{{ asset('css/reports.css') }}">
</head>
<body>
    <table>
        <tr>
            <th>Nombre:</th>
            <td>{{ $doppler->consulta->paciente->name }}</td>
        </tr>
         <tr>
            <th>Edad:</th>
            <td>{{ $doppler->edad }}</td>
        </tr>
         <tr>
            <th>Referido:</th>
            <td>{{ $doppler->referido }}</td>
        </tr>
        <tr>
            <th>Fecha:</th>
            <td>{{ $doppler->created_at->format('d/m/Y') }}</td>
        </tr>
        <tr>
            <th>Paridad</th>
            <td>{{ $doppler->paridad }}</td>
        </tr>
    </table>

    <p class="sub_titul"><b>ULTRASONIDO III TRIMESTRE / DOPPLER Y CURVA DE CRECIMIENTO</b></p>

    <p><b>Se realizó estudio ultrasonográfico en tiempo real, observando:</b> Fetos: @if($doppler->feto == 1) Unico @elseif($doppler->feto == 2) Gemelo @else {{ $doppler->fetos->count() }} @endif</p>

    @php
        $count = $doppler->fetos->count();
    @endphp

    @foreach ($doppler->fetos as $value)
        <p class="sub_titul"><b>Analizando el feto: {{ $count }}</b></p>

        <p>
            Vitalidad: {{ $value->vitalidad_feto }}. <b>PRESENTACIÓN:</b> {{ $value->presentacion }}. <b>SITUACION</b> {{ $value->situacion }}. <b>POSICION</b> {{ $value->posicion }}. <b>FCF:</b> {{ $value->fcf }}  latidos por minuto.
        </p>

        <div>
            <p class="sub_titul"><b>SOMATOMETRIA</b></p>
            <table style="width: 100%;">
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
                    <td colspan="2">{{ $value->fetometria_promedio }}</td>
                </tr>
                <tr>
                    <th>Percentil</th>
                    <td colspan="2">{{ $value->percentil }}</td>
                </tr>
                <tr>
                    <th>Peso fetal</th>
                    <td colspan="2">{{ $value->peso_fetal }}</td>
                </tr>
                <tr>
                    <th>Fecha de parto estimada</th>
                    <td colspan="2">{{ $value->fecha_parto }}</td>
                </tr>
            </table>
        </div>
        <div>
            <p class="sub_titul"><b>Flujometria Doppler</b></p>
            <table style="width: 100%">
                    <tr>
                        <th>Vaso evaluado</th>
                        <th>Percentil</th>
                        <th>Valor</th>
                    </tr>
                    <tr>
                        <th>IP medio de arterias uterinas</th>
                        <td>{{ $value->percentil_ip_medio }}</td>
                        <td>{{ $value->interpretacion_ip_medio }}</td>
                    </tr>
                    <tr>
                        <th>Notch Arteria uterina Izquierda</th>
                        <td>{{ $value->percentil_notch_izquierda }}</td>
                        <td>{{ $value->interpretacion_notch_izquierda }}</td>
                    </tr>
                    <tr>
                        <th>Notch Arteria uterina Derecha</th>
                        <td>{{ $value->percentil_notch_derecha }}</td>
                        <td>{{ $value->interpretacion_notch_derecha }}</td>
                    </tr>
                    <tr>
                        <th>Índice Cerebro placentario</th>
                        <td>{{ $value->percentil_cerebro_placentario }}</td>
                        <td>{{ $value->interpretacion_cerebro_placentario }}</td>
                    </tr>
                    <tr>
                        <th>Arteria cerebral media</th>
                        <td>{{ $value->percentil_arteria_cerebral }}</td>
                        <td>{{ $value->interpretacion_arteria_cerebral }}</td>
                    </tr>
                    <tr>
                        <th>Arteria Umbilical</th>
                        <td>{{ $value->percentil_arteria_umbilical }}</td>
                        <td>{{ $value->interpretacion_arteria_umbilical }}</td>
                    </tr>
                    <tr>
                        <th>Flujo diastólico de Arteria umbilical</th>
                        <td>{{ $value->percentil_flojo_diasotolico }}</td>
                        <td>{{ $value->interpretacion_flojo_diasotolico }}</td>
                    </tr>
                    <tr>
                        <th>Itsmo aórtico</th>
                        <td>{{ $value->percentil_itsmo_aortico }}</td>
                        <td>{{ $value->interpretacion_itsmo_aortico }}</td>
                    </tr>
                    <tr>
                        <th>Ducto venoso</th>
                        <td>{{ $value->percentil_ducto_venenoso }}</td>
                        <td>{{ $value->interpretacion_ducto_venenoso }}</td>
                    </tr>
                    <tr>
                        <th>Flujo diastólico de ducto venoso</th>
                        <td>{{ $value->percentil_flujo_dicto_venenoso }}</td>
                        <td>{{ $value->interpretacion_flujo_dicto_venenoso }}</td>
                    </tr>
                    <tr>
                        <th>Vena umbilical</th>
                        <td>{{ $value->percentil_vena_umbilical }}</td>
                        <td>{{ $value->interpretacion_vena_umbilical }}</td>
                    </tr>
            </table>
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
        @endif

        <p>
            <b>Placenta:</b>  Numero: {{ $value->placenta_numero }}. Posicion: {{ $value->placenta_posocion }}. Grado: {{ $value->placenta_grado }}. Presencia de calcificaciones probablemente patológicas: {{ $value->presencia_patologicas }}.
            Áreas de infartos placentarios: {{ $value->areas_infarto }}. Longitud de cérvix: {{ $value->longitud_cervix }}mm. Funneling: {{ $value->funneling }}. @if($value->funneling == 'Negativo') Porcentaje: {{ $value->porcentaje_funneling }}. @endif
            Sludge: {{ $value->sludge }}. Líquido amniótico: {{ $value->liquido_amniotico }}. @if($value->liquido_amniotico != 'Normal') Clasificacion: {{ $value->clasificacion_liquido_amniotico }}. @endif
            Valor de ila: {{ $value->valor_ila }}.
        </p>
    @endforeach

     <p>Revision: {{ $doppler->revision }}</p>

    <p class="sub_titul"><b>Conclusion</b></p>

    <p style="margin:0">Embarazo de gestación por fetometría acorde a US evolutivo (Semanas): {{ $doppler->conclusion_embarazo_gestacion }}</p>
    <p style="margin:0">{{ $doppler->concluciones }}</p>

     @if($doppler->comentarios != '')
        <p class="sub_titul"><b>Comentarios</b></p>
        <p>{{ $doppler->comentarios }}</p>
    @endif

    @include('includes._firmas')
</body>
</html>
