<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Download</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body{
            text-align: justify;
            font-size: 1.1em:
            color: #404040;
            padding-top: 8em;
            padding-bottom: 6em;
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
    </style>
</head>
<body>
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <table class="table-striped">
                <tr>
                    <th>Nombre:</th>
                    <td>{{ $ecocardio->consulta->paciente->name }}</td>
                </tr>
                 <tr>
                    <th>Edad:</th>
                    <td>{{ $ecocardio->edad }} {!! ($ecocardio->edad_gestacional != '') ? ' / '. $ecocardio->edad_gestacional : '' !!} </td>
                </tr>
                 <tr>
                    <th>Referido:</th>
                    <td>{{ $ecocardio->referido }}</td>
                </tr>
                <tr>
                    <th>Fecha:</th>
                    <td>{{ $ecocardio->date }} {!! ($ecocardio->rh_tipo != '') ? ' / '. $ecocardio->rh_tipo : '' !!}</td>
                </tr>
                <tr>
                    <th>Paridad</th>
                    <td>{{ $ecocardio->paridad }} {!! ($ecocardio->morbilidad != '') ? ' / '. $ecocardio->morbilidad : '' !!} </td>
                </tr>
            </table>
        </div>
    </div>

    <p class="sub_titul"><b>REPORTE DE ECOCARDIOGRAFIA</b></p>

    <p><b>Se realizó estudio ultrasonográfico en tiempo real, observando:</b> Fetos: @if($ecocardio->feto == 1) Unico @elseif($ecocardio->feto == 2) Gemelo @else {{ $ecocardio->fetos->count() }} @endif</p>

    @php
        $count = $ecocardio->fetos->count();
    @endphp

    @foreach ($ecocardio->fetos as $value)
        <p class="sub_titul"><b>Analizando el feto: {{ $count }}</b></p>

        <p>
            Vitalidad: {{ $value->vitalidad_feto }}. <b>PRESENTACIÓN:</b> {{ $value->presentacion }}. <b>SITUACION</b> {{ $value->situacion }}. <b>POSICION</b> {{ $value->posicion }}. <b>FCF:</b> {{ $value->fcf }}  latidos por minuto.
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
        </div>
        <p>
            <b>CORTE AXIAL DE ABDOMEN</b> Situs: {{ $value->situs_ecocardiografia }}. Situs ambiguo: {{ $value->situs_ambiguo }}. @if($value->situs_ambiguo == 'Si') Isomerismo {{ $value->isomerismo }}. @endif
        </p>

        <p>
            <b>CORAZON</b> Tanaño índice Cardiotorácico (área cardiaca/área torácica): {{ $value->corazon_tamano }}. Posicion {{ $value->corazon_posicion }}.
        </p>

        <p>
            <b>ESTRUCTURA</b> Corte De 4 Cámaras: {{ $value->corte_ecocardiografia }}. 2 Aurículas simétricas: {{ $value->corazon_posicion }}. 2 Ventrículos simétricos: {{ $value->ventriculos }}.
            @if($value->corte != 'Normal') Dominancia de cavidades: {{ $value->dominancia }}. Foramen Oval: {{ $value->foramen }}. Válvula mitral Implantación: {{ $value->valvula_mitral_implantacion }}. @endif
            Válvula Mitral funcionalidad: {{ $value->valvula_mitral_funcionalidad }}. Válvula Tricúspide Implantación: {{ $value->valvula_tricuspide_implantacion }}.
            Válvula Tricúspide funcionalidad: {{ $value->valvula_tricuspide_funcionalidad }}. Tabique interventricular Integro: {{ $value->tabique_interaventricular }}
            @if($value->tabique_interaventricular == 'No') Tamaño del Defecto (mm): {{ $value->tabique_interaventricular_defecto }}. Tipo CIV: {{ $value->tipo_civ }}. @endif
            Tracto de salida de Ventrículo derecho: {{ $value->tracto_salida_derecho }}. Tracto de salida de Ventrículo Izquierdo: {{ $value->tracto_salida_izquierdo }}
            Tipo De Conexión Auriculo Ventricular: {{ $value->tipo_conexion_ventricular }}. Modo De Conexión Auriculo Ventricular: {{ $value->modo_conexion_ventricular }}
        </p>

        <p>
            <b>FUNCION</b> Contractilidad miocárdica: {{ $value->funcion_contractilidad }}. Índice de rendimiento cardiaco: {{ $value->funcion_rendimiento_cardiaco }}
            Ritmo: {{ $value->funcion_ritmo }}. Extrasístoles: {{ $value->funcion_extrasistoles }}
        </p>

        <p>
            <b>CORTE DE TRES VASOS TRAQUEA</b> Numero de vasos:  Tres {{ $value->numero_vasos }}. Pulmonar Normal: {{ $value->pulmonar }}. Aorta Normal: {{ $value->aorta }}.
            Vena cava Normal: {{ $value->vena_cava }}. Tamaño de vasos :Normal {{ $value->tamano_vasos }}. Tamaño de vasos: Anormal {{ $value->tamano_vasos_anormal }}
            <b>Posición:</b> Arteria pulmonar izquierda: {{ $value->arteria_pulmonar_izquierda }}. Aorta en medio: {{ $value->aorta_medio }}. Vena cava derecha: {{ $value->vena_cava_derecha }}
            Disposición: Normal {{ $value->disposicion_normal }}. Disposición: Anormal: {{ $value->disposicion_anormal }}
            <b>CORTES SAGITALES</b> Vista Bi cava: {{ $value->vista_bi_cava }}. Vestíbulo venoso subdifargmatico: {{ $value->vestibulo_venoso }}. Arco aortico: {{ $value->arco_aortico }}
            Arco ductal: {{ $value->arco_ductal }}. Eje corto de grandes vasos: {{ $value->eje_corto_vasos }}. Eje corto de ventriculos: {{ $value->eje_corto_centriculos }}
        </p>

        <p>
            <b>Placenta:</b>  Numero: {{ $value->placenta_numero }}. Posicion: {{ $value->placenta_posocion }}. Grado: {{ $value->placenta_grado }}. Presencia de calcificaciones probablemente patológicas: {{ $value->presencia_patologicas }}.
            Áreas de infartos placentarios: {{ $value->areas_infarto }}. Longitud de cérvix: {{ $value->longitud_cervix }}mm. Funneling: {{ $value->funneling }}. @if($value->funneling == 'Positivo') Porcentaje: {{ $value->porcentaje_funneling }}. @endif
            Sludge: {{ $value->sludge }}. Líquido amniótico: {{ $value->liquido_amniotico }}. @if($value->liquido_amniotico != 'Normal') Clasificacion: {{ $value->clasificacion_liquido_amniotico }}. @endif
            Valor de ILA: {{ $value->valor_ila }} cms.
        </p>
    @endforeach

    <p>Revision: {{ $ecocardio->revision }}</p>

    <p class="sub_titul"><b>Conclusion</b></p>
    <p style="margin: 0">{{ $ecocardio->concluciones }}</p>

     @if($ecocardio->comentarios != '')
        <p class="sub_titul"><b>Comentarios</b></p>
        <p>{{ $ecocardio->comentarios }}</p>
    @endif

    <p class="sub_titul"><b>Recomendaciones</b></p>
    <p>{{ $ecocardio->recomendaciones }}</p>

    @include('includes._firmas')
</body>
</html>
