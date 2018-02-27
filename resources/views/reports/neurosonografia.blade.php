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
            <td>{{ $neurosono->consulta->paciente->name }}</td>
        </tr>
         <tr>
            <th>Edad:</th>
            <td>{{ $neurosono->edad }}</td>
        </tr>
         <tr>
            <th>Referido:</th>
            <td>{{ $neurosono->referido }}</td>
        </tr>
        <tr>
            <th>Fecha:</th>
            <td>{{ $neurosono->created_at->format('d/m/Y') }}</td>
        </tr>
        <tr>
            <th>Paridad</th>
            <td>{{ $neurosono->paridad }}</td>
        </tr>
    </table>

    <p class="sub_titul"><b>REPORTE DE NEUROSONOGRAFIA</b></p>

    <p><b>Se realizó estudio ultrasonográfico en tiempo real, observando:</b> Fetos: @if($neurosono->feto == 1) Unico @elseif($neurosono->feto == 2) Gemelo @else {{ $neurosono->fetos->count() }} @endif</p>

    @php
        $count = $neurosono->fetos->count();
    @endphp

    @foreach ($neurosono->fetos as $value)
        <p class="sub_titul"><b>Analizando el feto: {{ $count }}</b></p>

        <p>
            Vitalidad: {{ $value->vitalidad_feto }}. <b>PRESENTACIÓN:</b> {{ $value->presentacion }}. <b>SITUACION</b> {{ $value->situacion }}. <b>POSICION</b> {{ $value->posicion }}. <b>FCF:</b> {{ $value->fcf }}  latidos por minuto.
        </p>

        <div>
            <table style="width: 100%">
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
                    <td colspan="2">{{ $value->fecha_parto }}</td>
                </tr>
            </table>
        </div>
        <div>
            <table style="width: 100%">
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

        <p class="sub_titul"><b>Se realiza un barrido suave en sentido craneocaudal identificando las siguientes estructuras:</b></p>

        <p>
            <b>PLANOS AXIALES:</b> <b>Cráneo:</b> Forma normal: {{ $value->craneo }}. Dolicocefalia: {{ $value->dolicocefalia }}. Braquicefalia: {{ $value->braquicefalia }}. Tamaño normal: {{ $value->craneo_tamano }}.
            Suturas craneales normales: {{ $value->craneo_situras }}. A la leve compresión del transductor se aprecian deformidades: {{ $value->craneo_compresion }}.
            La línea interhemisferica se observa integra: {{ $value->craneo_interhemisferica }}. Los hemisferios cerebrales simétricos: {{ $value->craneo_hemisferios }}.
        </p>

        <p>
            <b>CORTE TRANSVENTRICULAR</b> Se identifica el Cavum del septum pellucidum: {{ $value->cavum_septum }}. Diámetro anteroposterior de: {{ $value->diametro_anteroposterior }}mm.
            Astas frontales de ventrículos laterales simétricas: {{ $value->asta_frontales }}. Existe comunicación de astas anteriores: {{ $value->comunicacion_asta_ateriores }}.
            Plexos coroideos homogéneos: {{ $value->plexo_coroideos }}. Presencia de quiste: {{ $value->presencia_quiste }}. @if($value->presencia_quiste == 'Si') {{ $value->presencia_quiste_si }}. @endif
            Se identifica la cisura parietooccipital: {{ $value->cisura_parietooccipital }}. Atrios ventriculares simétricos: {{ $value->atrios_ventruculares }}.
            Atrio ventricular Derecho: {{ $value->atrio_derecho }}(mm). Atrio ventricular Izquierdo: {{ $value->atrio_izquierdo }}(mm). Área peri ventricular: {{ $value->area_ventricular }}.
        </p>

        <p>
            <b>CORTE TRANSTALÀMICO</b> Talamos normales: {{ $value->talamos_normales }}. Giro hipocampal Presente: {{ $value->giro_hipocampal_presente }}. III ventrículo con diámetros de {{ $value->ventriculo_diametros }}mm.
        </p>

        <p>
            <b>CORTE TRANSCEREBELAR.</b> Cerebelo con ambos hemisferios simétricos: {{ $value->ambos_hemisferios_simetricos }}. Vermis: {{ $value->vermis_neurosonografia }}. Central y ecogénico: {{ $value->central_ecogenico }}.
            Morfología normal: {{ $value->morfologia_normal }}. Cisterna magna con diámetros de: {{ $value->cisterna_magna }}mm. Comunicación entre el 4º ventrículo y la cisterna magna: {{ $value->comunicacion_4_ventriculo }}.
            Pliegue nucal de {{ $value->pliegue_nucal }}mm.
        </p>

        <p>
            <b>PLANOS CORONALES:</b> <b>CORTE TRANSFRONTAL.</b> Se observa la línea interhemisferica integra: {{ $value->liena_intergemisferica }}. Astas anteriores de los ventrículos laterales normales: {{ $value->asta_anteriores }}.
            Hueso esfenoides y las orbitas oculares normales: {{ $value->hueso_esfenoides }}. <br>
            <b>CORTE TRANSCAUDAL.</b> Asta anterior derecha: {{ $value->asta_aterior_derecha }}(mm). Asta anterior izquierda: {{ $value->asta_aterior_izquierda }}(mm).
            Núcleos caudados sin alteraciones: {{ $value->nucleos_caudado }}. Espacio subaracnoideo senocortical: {{ $value->espacio_subaracnoideo }}mm y craneocortical: {{ $value->espacio_craneocotical }}mm.
            Se identifica la cisura  de  Silvio claramente: {{ $value->cisura_silvio }}. <br>
            <b>CORTE TRANSCEREBELAR.</b> Tentorio in situs: {{  $value->tetorio_situs }}. Cisura interhemisferica integra: {{ $value->cisura_interhemisferica }}. Cuernos occipitales simétricos: {{ $value->cuernos_occipitales }}.
        </p>

        <p>
            <b>PLANOS SAGITALES.</b> <b>SAGITAL MEDIO.</b> Presencia del cuerpo calloso: {{ $value->presencia_calloso }}. Disgenesia: {{ $value->disgenesia }}.
            Longitud: {{ $value->saginal_longitud }}(mm). Grosor {{ $value->saginal_grosor }}(mm). CSP y Cavum vergae: {{ $value->csp_cavum }}. Fornix, III Y IV ventrículo: {{ $value->fornix_neurosonografia }}.
            Tronco encefálico: {{ $value->tronco_encefalico }}. Tórcula y Tentorio in situs: {{ $value->torcula_tendorio }}. Cisterna magna: {{ $value->cisterna_magna }}.
            Doppler color se visualiza el trayecto de la arteria cerebral anterior {{ $value->doppler_visualiza }}. Pericallosa: {{ $value->pericallosa }} y vena de galeno {{ $value->vena_galeno }}
        </p>

        <p>
            <b>El desarrollo cortical:</b> Las cisuras de Silvio: {{ $value->cisuras_silvio }}. Cisura parieto occipital: {{ $value->cisura_occipital }}. Cisura calcarina: {{ $value->observa_osificacion }}.
            Cisura cingulada: {{ $value->cisura_cingulada }}
        </p>

        <p>
            <b>COLUMNA VERTEBRAL.</b> Cortes sagitales con piel integra: {{ $value->cortes_sagitales }}. Se identifica el cono medular: {{ $value->identifica_cono }}. Se observa la disposición de la osificación: {{ $value->observa_osificacion }}.
            Integridad de los cuerpos vertebrales y los procesos laterales: {{ $value->integridad_cuerpos }}. Evidencia de signos intracraneales de Mielocele abierta: {{ $value->evidencia_mielocele }}.
            Evidencia de signos intracraneales de Mielomeningocele abierta: {{ $value->evidencia_mielomeningocele }}. Evidencia de signos intracraneales de Mielosquisis abierta: {{ $value->evidencia_mielosquisis }}.
        </p>

         <p>
            <b>Placenta:</b>  Numero: {{ $value->placenta_numero }}. Posicion: {{ $value->placenta_posocion }}. Grado: {{ $value->placenta_grado }}. Presencia de calcificaciones probablemente patológicas: {{ $value->presencia_patologicas }}.
            Áreas de infartos placentarios: {{ $value->areas_infarto }}. Longitud de cérvix: {{ $value->longitud_cervix }}mm. Funneling: {{ $value->funneling }}. @if($value->funneling == 'Negativo') Porcentaje: {{ $value->porcentaje_funneling }}. @endif
            Sludge: {{ $value->sludge }}. Líquido amniótico: {{ $value->liquido_amniotico }}. @if($value->liquido_amniotico != 'Normal') Clasificacion: {{ $value->clasificacion_liquido_amniotico }}. @endif
            Valor de ila: {{ $value->valor_ila }}.
        </p>
    @endforeach

    <p>Revision: {{ $neurosono->revision }}</p>

    <p class="sub_titul"><b>Conclusion</b></p>

    <p style="margin: 0">Embarazo por fetometría: {{ $neurosono->conclusion_embarazo_gestacion }}</p>
    <p style="margin: 0">{{ $neurosono->concluciones }}</p>

    @if($neurosono->comentarios != '')
        <p class="sub_titul"><b>Comentarios</b></p>
        <p>{{ $neurosono->comentarios }}</p>
    @endif

    <p class="sub_titul"><b>Recomendaciones</b></p>
    <p>{{ $neurosono->recomendaciones }}</p>

    @include('includes._firmas')
</body>
</html>
