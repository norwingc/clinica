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
            <td>{{ $estructural->consulta->paciente->name }}</td>
        </tr>
         <tr>
            <th>Edad:</th>
            <td>{{ $estructural->edad }}</td>
        </tr>
         <tr>
            <th>Medico:</th>
            <td>{{ $estructural->consulta->doctor }}</td>
        </tr>
        <tr>
            <th>Fecha:</th>
            <td>{{ $estructural->created_at->format('d/m/Y') }}</td>
        </tr>
    </table>

    <p class="sub_titul"><b>ULTRASONIDO MORFOLOGICO DE II TRIMESTRE</b></p>

    <p><b>Se realizó estudio ultrasonográfico en tiempo real, observando:</b> Fetos: @if($estructural->feto == 1) Unico @elseif($estructural->feto == 2) Gemelo @else {{ $estructural->fetos->count() }} @endif</p>

    @php
        $count = $estructural->fetos->count();
    @endphp

    @foreach ($estructural->fetos as $value)
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
                        <th>Húmero</th>
                        <td>{{ $value->humero_medida }}</td>
                        <td>{{ $value->humero_semanas }}</td>
                    </tr>
                    <tr>
                        <th>Radio</th>
                        <td>{{ $value->radio_medida }}</td>
                        <td>{{ $value->radio_semanas }}</td>
                    </tr>
                    <tr>
                        <th>Cúbito</th>
                        <td>{{ $value->cubito_medida }}</td>
                        <td>{{ $value->cubito_semanas }}</td>
                    </tr>
                    <tr>
                        <th>Tibia</th>
                        <td>{{ $value->tibia_medida }}</td>
                        <td>{{ $value->tibia_semanas }}</td>
                    </tr>
                    <tr>
                        <th>Peroné</th>
                        <td>{{ $value->perone_medida }}</td>
                        <td>{{ $value->perone_semanas }}</td>
                    </tr>
                    <tr>
                        <th>Cerebelo</th>
                        <td>{{ $value->cerebelo_medida }}</td>
                        <td>{{ $value->cerebelo_semanas }}</td>
                    </tr>
                    <tr>
                        <th>Cisterna magna</th>
                        <td colspan="2">{{ $value->cisterna_magna }}</td>
                    </tr>
                    <tr>
                        <th>Pliegue nucal</th>
                        <td colspan="2">{{ $value->pliegue_nucal }}</td>
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
        <p>
            <b>Cráneo:</b> Forma normal: {{ $value->craneo }}. Dolicocefalia: {{ $value->dolicocefalia }}. Braquicefalia: {{ $value->braquicefalia }}. Tamaño normal: {{ $value->craneo_tamano }}.
            Suturas craneales normales: {{ $value->craneo_situras }}. A la leve compresión del transductor se aprecian deformidades: {{ $value->craneo_compresion }}.
            La línea interhemisferica se observa integra: {{ $value->craneo_interhemisferica }}. Los hemisferios cerebrales simétricos: {{ $value->craneo_hemisferios }}.
            Se identifica el Cavum del septum pellucidum: {{ $value->cavum_septum }}. Diámetro anteroposterior: {{ $value->diametro_anteroposterior }} (mm).
            Astas frontales de ventrículos laterales simétricas: {{ $value->asta_frontales }}. Existe comunicación de astas anteriores: {{ $value->comunicacion_asta_ateriores }}.
            Plexos coroideos homogéneos: {{ $value->plexo_coroideos }}. Presencia de quiste: {{ $value->presencia_quiste }}. @if($value->presencia_quiste == 'Si') {{ $value->presencia_quiste_si }}.@endif
            Se identifica la cisura parietooccipital: {{ $value->cisura_parietooccipital }}.  Atrios ventriculares simétricos: {{ $value->atrios_ventruculares }}. Derecho: {{ $value->atrio_derecho }}mm.
            Izquierdo: {{ $value->atrio_izquierdo }}mm. Área peri ventricular: {{ $value->area_ventricular }}.
        </p>

        <p>
            <b>CORTE TRANSCEREBELAR.</b> Cerebelo con ambos hemisferios simétricos: {{ $value->ambos_hemisferios_simetricos }}. Vermis: {{ $value->vermis }}. Central y ecogénico: {{ $value->central_ecogenico }}.
            Morfología normal: {{ $value->morfologia_normal }}. Cisterna magna con diámetros de: {{ $value->cisterna_magna }} mm. Comunicación entre el 4º ventrículo y la cisterna magna: {{ $value->comunicacion_4_ventriculo }}.
        </p>

        <p>
            <b>COLUMNA VERTEBRAL.</b> Cortes sagitales con piel integra: {{ $value->cortes_sagitales }}. Se identifica el cono medular: {{ $value->identifica_cono }}.  Se observa la disposición de la osificación: {{ $value->observa_osificacion }}.
            Integridad de los cuerpos vertebrales y los procesos laterales: {{ $value->integridad_cuerpos }}. Evidencia de signos intracraneales de defecto de cierre de tubo neural: {{ $value->evidencia_intracraneales }}. @if($value->evidencia_intracraneales == 'Si') Descripción: {{ $value->columna_descipcion }}. @endif
        </p>

        <p>
            Hueso nasal Presente: {{ $value->hueso_nasal }}. Retrognatia {{ $value->retrognatia }}.
            <b>CARA.</b> Labio Normal: {{ $value->labio_normal }}. @if($value->labio_normal != 'Si') {{ $value->clasificacion_labio }}.@endif
        </p>

        <p>
            <b>TORAX FETAL</b>  Ambos pulmones de tamaño normal: {{ $value->torax_pulmon }}. Lesiones ocupantes de espacio: {{ $value->torax_lesion }}. Presencia de masa quística: {{ $value->torax_masa_quistica }}.
            Presencia de masa solida: {{ $value->torax_masa_solida }}. Descripción: {{ $value->torax_descripcion }}. Vaso nutricio en masa: {{ $value->torax_nutricion_masa }}.
        </p>

        <p>
            <b>CORAZON</b> Situs: {{ $value->corazon_situs }}. Tamaño Normal: {{ $value->corazon_tamano }}. @if($value->corazon_tamano == 'No') Cardiomegalia: {{ $value->corazon_cardiomegalia }}.@endif
            Eje cardico: {{ $value->corazon_cardiomegalia_severa }}. <b>CORTE DE 4 CÁMARAS:</b> {{ $value->corazon_corte_camaras }}. Tracto de salida de Ventrículo derecho: {{ $value->corazon_tracto_derecho }}.
            Tracto de salida de Ventrículo derecho: {{ $value->corazon_tracto_izquierdo }}. Corte de 3 vasos: {{ $value->corazon_corte_vasos  }}.
        </p>

        <p>
            <b>Abdomen:</b> Inserción de cordón normal: {{ $value->insercion_cordon }}. Presencia de 3 vasos:  {{ $value->presencia_vasos }}. Arteria umbilical única {{ $value->arteria_umbilical }}.
            Pared abdominal integra {{ $value->pared_integra }}.
            @if($value->pared_integra == 'No')
                Defecto para umbilical: {{ $value->defecto_umbilical }}. Defecto en base de cordón: {{ $value->defecto_cordon }}. Medida del defecto: {{ $value->defecto_medida }}mm.
                <p>
                    <b>Estructuras presentes en defecto:</b> Cubierto por membrana: {{ $value->cubierta_membrana }}. Asas de intestino delgado {{ $value->asas_intestino_delgado }}. Asas de intestino grueso {{ $value->asas_intestino_grueso }}.
                    Dilatación de asas intra abdominal: {{ $value->dilatacion_intra_abdominal }}. Medición: {{ $value->medicion_intra_abdominal }}mm. Dilatación de asas extra abdominal: {{ $value->dilatacion_extra_abdominal }} Medición: {{ $value->medicion_extra_abdominal }}mm.
                    Sospecha de peritonitis: {{ $value->sospecha_peritonitis }}. Cámara gástrica {{ $value->camara_gastrica }}. Vejiga urinaria presente: {{ $value->vejiga_urinaria }}
                </p>
            @endif
            <p>
                Cámara gástrica Insitu: {{ $value->camara_gastrica_insitu }}. Riñon Derecho: {{ $value->rinon_derecho }}. Riñon derecho tamaño: {{ $value->rinon_derecho_tanano }}. Riñon izquierdo: {{ $value->rinon_izquierdo }}. Riñon izquierdo tamaño: {{ $value->rinon_izquierdo_tanano }}.
                Pelvis renal derecha: {{ $value->pelvis_derecha }}mm.  Pelvis renal izquierda: {{ $value->pelvis_izquierda }}mm. Presencia de Hidronefrosis: {{ $value->hidronefosis }}.
                Grado de Hidronefrosis: {{ $value->grado }}. Glandulas suprarrenales: {{ $value->glandulas_suprarrenales }}. Vejiga urinaria: {{ $value->vejiga_urinaria_insitu }}. Engrosameinto de pared vesical: {{ $value->engrosamiento_pared }}.
            </p>
        </p>

         <p>
            <b>Extremidades superiores</b> Ambas presentes: {{ $value->extremidades_superiores }}. Integras: {{ $value->extremidades_superiores_integras }}. Extremidad afectada: {{ $value->extremidades_superiores_afectada }}.
            <b>Extremidades inferiores</b> Ambas presentes: {{ $value->extremidades_inferiores }}. Integras: {{ $value->extremidades_inferiores_integras }}. Extremidad afectada: {{ $value->extremidades_inferiores_afectada }}
        </p>

        <p>
            <b>Placenta:</b>  Numero: {{ $value->placenta_numero }}. Posicion: {{ $value->placenta_posocion }}. Grado: {{ $value->placenta_grado }}. Presencia de calcificaciones probablemente patológicas: {{ $value->presencia_patologicas }}.
            Áreas de infartos placentarios: {{ $value->areas_infarto }}. Longitud de cérvix: {{ $value->longitud_cervix }}mm. Funneling: {{ $value->funneling }}. @if($value->funneling == 'Negativo') Porcentaje: {{ $value->porcentaje_funneling }}. @endif
            Sludge: {{ $value->sludge }}. Líquido amniótico: {{ $value->liquido_amniotico }}. @if($value->liquido_amniotico != 'Normal') Clasificacion: {{ $value->clasificacion_liquido_amniotico }}. @endif
            Valor de ila: {{ $value->valor_ila }}.
        </p>
    @endforeach

    <p>Revision: {{ $estructural->revision }}</p>

    <p class="sub_titul"><b>Conclusiones</b></p>
    <p style="margin:0">Embarazo por fetometría (Semanas): {{ $estructural->conclusion_embarazo_fetometria }}</p>
    <p style="margin:0">Conclusiones: {{ $estructural->concluciones }}</p>
    <p style="margin:0">Riesgo de parto Pretermino: {{ $estructural->conclusion_riesgo_parto_pretermino }}</p>
    <p style="margin:0">Riesgo de Pre eclampsia: {{ $estructural->conclusion_riesgo_preeclampsia }}</p>
    <p style="margin:0">Riesgo de Hipertensión tardía: {{ $estructural->conclusion_riesgo_hipertension }}</p>
    <p style="margin:0">Riesgo de Restricción del Crecimiento: {{ $estructural->conclusion_riesgo_restriccion_crecimiento }}</p>

    <p class="sub_titul"><b>Recomendaciones</b></p>
    <p style="margin:0">Continuar vigilancia y curva de crecimiento (semanas): {{ $estructural->conclusion_vigilancia_crecimiento }}</p>

   @if($estructural->comentarios != '')
        <p class="sub_titul"><b>Comentarios</b></p>
        <p>{{ $estructural->comentarios }}</p>
    @endif

</body>
</html>