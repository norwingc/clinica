@push('scripts')

<script>
    var fetos = [];

    /**
     * [saveTrimestre description]
     * @param  {[type]} este [description]
     * @return {[type]}      [description]
     */
    function saveTrimestre(este) {
        $(este).button('loading');
        var form = $(este.data('examen'));
        var _token = $('meta[name="csrf-token"]').attr('content');

        addFeto($(form).find('#child_1trimestre'), 'UltrasonidoTrimestre');

        var data = {
            "_token" : _token,
            "edad": $(form).find('#edad_1trimestre').val(),
            "date": $(form).find('#date_1trimestre').val(),
            "paridad": $(form).find('#paridad_1trimestre').val(),
            "feto": $(form).find('#feto_1trimestre').val(),
            "historia_preecampsia_mama": $(form).find('#historia_preecampsia_mama_1trimestre').val(),
            "historia_hipertension_mama": $(form).find('#historia_hipertension_mama_1trimestre').val(),
            "historia_preecampsia_hermana": $(form).find('#historia_preecampsia_hermana_1trimestre').val(),
            "historia_hipertension_personal": $(form).find('#historia_hipertension_personal_1trimestre').val(),
            "peso": $(form).find('#peso').val(),
            "talla": $(form).find('#talla').val(),
            "imc": $(form).find('#imc').val(),
            "pa_derecho": $(form).find('#pa_derecho_1trimestre').val(),
            "pa_izquierdo": $(form).find('#pa_izquierdo_1trimestre').val(),
            "ip_artrias": $(form).find('#ip_artrias_1trimestre').val(),
            "bidimensional": $(form).find('#bidimensional_1trimestre').val(),
            "doppler_color": $(form).find('#doppler_color_1trimestre').val(),
            "conclusion_lcc": $(form).find('#conclusion_lcc_1trimestre').val(),
            "conclusion_riesago_cromosomopatias": $(form).find('#conclusion_riesago_cromosomopatias_1trimestre').val(),
            "conclusion_riesago_preeclampsia": $(form).find('#conclusion_riesago_preeclampsia_1trimestre').val(),
            "conclusion_riesago_hipertensivos": $(form).find('#conclusion_riesago_hipertensivos_1trimestre').val(),
            "conclusion_riesago_restiaccion": $(form).find('#conclusion_riesago_restiaccion_1trimestre').val(),
            "conclusion_riesago_parto_pretermino": $(form).find('#conclusion_riesago_parto_pretermino_1trimestre').val(),
            "recomendaciones": $(form).find('#recomendaciones_1trimestre').val(),
            "comentarios": $(form).find('#comentarios_1trimestre').val(),
            "recordatorio": $(form).find('#recordatorio_1trimestre').val(),
            "fetos" : fetos
        };

        $.post($(form).attr('action'), data, function(resp){
            if(resp.saved == true){
                $(este).button('reset');
                alert('Examen Guardado');
                location.reload();
            }
        });
    }

    /**
     * [saveEstructural description]
     * @param  {[type]} este [description]
     * @return {[type]}      [description]
     */
    function saveEstructural(este) {
        $(este).button('loading');
        var form = $(este.data('examen'));
        var _token = $('meta[name="csrf-token"]').attr('content');

        addFeto($(form).find('#child_estructural'), 'UltrasonidoEstructural');

         var data = {
            "_token" : _token,
            "edad" : $(form).find('#edad_estructural').val(),
            "date" : $(form).find('#date_estructural').val(),
            "paridad" : $(form).find('#paridad_estructural').val(),
            "feto" : $(form).find('#feto_estructural').val(),
            "revision": $(form).find('#revision_estructural').val(),
            "conclusion_riesgo_parto_pretermino" : $(form).find('#conclusion_riesgo_parto_pretermino_estructural').val(),
            "conclusion_riesgo_preeclampsia" : $(form).find('#conclusion_riesgo_preeclampsia_estructural').val(),
            "conclusion_riesgo_hipertension" : $(form).find('#conclusion_riesgo_hipertension_estructural').val(),
            "conclusion_riesgo_restriccion_crecimiento" : $(form).find('#conclusion_riesgo_restriccion_crecimiento_estructural').val(),
            "conclusion_embarazo_fetometria" : $(form).find('#conclusion_embarazo_fetometria_estructural').val(),
            "conclusion_vigilancia_crecimiento" : $(form).find('#conclusion_vigilancia_crecimiento_estructural').val(),
            "concluciones" : $(form).find('#concluciones_estructural').val(),
            "comentarios" : $(form).find('#comentarios_estructural').val(),
            "recordatorio" : $(form).find('#recordatorio_estructural').val(),
            "fetos" : fetos
        };

        $.post($(form).attr('action'), data, function(resp){
            if(resp.saved == true){
                $(este).button('reset');
                alert('Examen Guardado');
                location.reload();
            }
        });
    }

    function addFeto(child, examen) {

        if(examen == 'UltrasonidoTrimestre'){
            fetos.push({
                "vitalidad_feto": $(child).find('#vitalidad_feto_1trimestre').val(),
                "somatometria_lcc" : $(child).find('#somatometria_lcc_1trimestre').val(),
                "somatometria_semanas" : $(child).find('#somatometria_semanas_1trimestre').val(),
                "somatometria_semanas" : $(child).find('#somatometria_semanas_1trimestre').val(),
                "somatometria_dbp" : $(child).find('#somatometria_dbp_1trimestre').val(),
                "somatometria_cc" : $(child).find('#somatometria_cc_1trimestre').val(),
                "somatometria_ca" : $(child).find('#somatometria_ca_1trimestre').val(),
                "somatometria_lf" : $(child).find('#somatometria_lf_1trimestre').val(),
                "somatometria_fcf" : $(child).find('#somatometria_fcf_1trimestre').val(),
                "somatometria_fetometria" : $(child).find('#somatometria_fetometria_1trimestre').val(),
                "somatometria_tn" : $(child).find('#somatometria_tn_1trimestre').val(),
                "somatometria_fecha_estimada_parto" : $(child).find('#somatometria_fecha_estimada_parto_1trimestre').val(),
                "craneo" : $(child).find('#craneo_1trimestre').val(),
                "craneo_forma" : $(child).find('#craneo_forma_1trimestre').val(),
                "pexos_caroideos" : $(child).find('#pexos_caroideos_1trimestre').val(),
                "quiste_plexos" : $(child).find('#quiste_plexos_1trimestre').val(),
                "quiste_plexos_si" : $(child).find('#quiste_plexos_si_1trimestre').val(),
                "hueso_nasal" : $(child).find('#hueso_nasal_1trimestre').val(),
                "medicion_nasal" : $(child).find('#medicion_nasal_1trimestre').val(),
                "torax_normal" : $(child).find('#torax_normal_1trimestre').val(),
                "localizacion_intratoracica" : $(child).find('#localizacion_intratoracica_1trimestre').val(),
                "ectopia_cordis" : $(child).find('#ectopia_cordis_1trimestre').val(),
                "anomalia_cardica" : $(child).find('#anomalia_cardica_1trimestre').val(),
                "descripcion_anomalia_cardica" : $(child).find('#descripcion_anomalia_cardica_1trimestre').val(),
                "localizacion_defecto_abdominal" : $(child).find('#localizacion_defecto_abdominal_1trimestre').val(),
                "defecto_medida" : $(child).find('#defecto_medida_1trimestre').val(),
                "cubierta_membrana" : $(child).find('#cubierta_membrana_1trimestre').val(),
                "asas_intestino_delgado" : $(child).find('#asas_intestino_delgado_1trimestre').val(),
                "asas_intestino_grueso" : $(child).find('#asas_intestino_grueso_1trimestre').val(),
                "dilatacion_intra_abdominal" : $(child).find('#dilatacion_intra_abdominal_1trimestre').val(),
                "medicion_intra_abdominal" : $(child).find('#medicion_intra_abdominal_1trimestre').val(),
                "dilatacion_extra_abdominal" : $(child).find('#dilatacion_extra_abdominal_1trimestre').val(),
                "medicion_extra_abdominal" : $(child).find('#medicion_extra_abdominal_1trimestre').val(),
                "sospecha_peritonitis" : $(child).find('#sospecha_peritonitis_1trimestre').val(),
                "camara_gastrica" : $(child).find('#camara_gastrica_1trimestre').val(),
                "vejiga_urinaria" : $(child).find('#vejiga_urinaria_1trimestre').val(),
                "insercion_cordon" : $(child).find('#insercion_cordon_1trimestre').val(),
                "presencia_vasos" : $(child).find('#presencia_vasos_1trimestre').val(),
                "arteria_umbilical" : $(child).find('#arteria_umbilical_1trimestre').val(),
                "pared_integra" : $(child).find('#pared_integra_1trimestre').val(),
                "vejiga" : $(child).find('#vejiga_1trimestre').val(),
                "extremidades_superiores" : $(child).find('#extremidades_superiores_1trimestre').val(),
                "extremidades_superiores_integras" : $(child).find('#extremidades_superiores_integras_1trimestre').val(),
                "extremidades_superiores_afectada" : $(child).find('#extremidades_superiores_afectada_1trimestre').val(),
                "extremidades_inferiores" : $(child).find('#extremidades_inferiores_1trimestre').val(),
                "extremidades_inferiores_integras" : $(child).find('#extremidades_inferiores_integras_1trimestre').val(),
                "extremidades_inferiores_afectada" : $(child).find('#extremidades_inferiores_afectada_1trimestre').val(),
                "placenta_numero" : $(child).find('#placenta_numero_1trimestre').val(),
                "placenta_posocion" : $(child).find('#placenta_posocion_1trimestre').val(),
                "fusion_membranas" : $(child).find('#fusion_membranas_1trimestre').val(),
                "placenta_grado" : $(child).find('#placenta_grado_1trimestre').val(),
                "longitud_cervix" : $(child).find('#longitud_cervix_1trimestre').val(),
                "funneling" : $(child).find('#funneling_1trimestre').val(),
                "porcentaje_funneling" : $(child).find('#porcentaje_funneling_1trimestre').val(),
                "sludge" : $(child).find('#sludge_1trimestre').val(),
                "liquido_amniotico" : $(child).find('#liquido_amniotico_1trimestre').val(),
                "basal" : $(child).find('#basal_1trimestre').val(),
                "edad_tn" : $(child).find('#edad_tn_1trimestre').val(),
                "edad_tn_marcadores" : $(child).find('#edad_tn_marcadores_1trimestre').val()
            });
        }

        if(examen == 'UltrasonidoEstructural'){
            fetos.push({
                "vitalidad_feto": $(child).find('#vitalidad_feto_estructural').val(),
                "presentacion": $(child).find('#presentacion_estructural').val(),
                "situacion": $(child).find('#situacion_estructural').val(),
                "posicion": $(child).find('#posicion_estructural').val(),
                "fcf": $(child).find('#fcf_estructural').val(),

                "dbp_medida": $(child).find('#dbp_medida_estructural').val(),
                "dbp_semanas": $(child).find('#dbp_semanas_estructural').val(),
                "cc_medida": $(child).find('#cc_medida_estructural').val(),
                "cc_semanas": $(child).find('#cc_semanas_estructural').val(),
                "ca_medida": $(child).find('#ca_medida_estructural').val(),
                "ca_semanas": $(child).find('#ca_semanas_estructural').val(),
                "lf_medida": $(child).find('#lf_medida_estructural').val(),
                "lf_semanas": $(child).find('#lf_semanas_estructural').val(),
                "humero_medida": $(child).find('#humero_medida_estructural').val(),
                "humero_semanas": $(child).find('#humero_semanas_estructural').val(),
                "radio_medida": $(child).find('#radio_medida_estructural').val(),
                "radio_semanas": $(child).find('#radio_semanas_estructural').val(),
                "cubito_medida": $(child).find('#cubito_medida_estructural').val(),
                "cubito_semanas": $(child).find('#cubito_semanas_estructural').val(),
                "tibia_medida": $(child).find('#tibia_medida_estructural').val(),
                "tibia_semanas": $(child).find('#tibia_semanas_estructural').val(),
                "perone_medida": $(child).find('#perone_medida_estructural').val(),
                "perone_semanas": $(child).find('#perone_semanas_estructural').val(),
                "cerebelo_medida": $(child).find('#cerebelo_medida_estructural').val(),
                "cisterna_magna": $(child).find('#cisterna_magna_estructural').val(),
                "pliegue_nucal": $(child).find('#pliegue_nucal_estructural').val(),
                "fetometria_promedio": $(child).find('#fetometria_promedio_estructural').val(),
                "percentil": $(child).find('#percentil_estructural').val(),
                "peso_fetal": $(child).find('#peso_fetal_estructural').val(),
                "fecha_parto": $(child).find('#fecha_parto_estructural').val(),

                //presencia_quiste_si

                "percentil_ip_medio": $(child).find('#percentil_ip_medio_estructural').val(),
                "interpretacion_ip_medio": $(child).find('#interpretacion_ip_medio_estructural').val(),
                "percentil_notch_izquierda": $(child).find('#percentil_notch_izquierda_estructural').val(),
                "interpretacion_notch_izquierda": $(child).find('#interpretacion_notch_izquierda_estructural').val(),
                "percentil_notch_derecha": $(child).find('#percentil_notch_derecha_estructural').val(),
                "interpretacion_notch_derecha": $(child).find('#interpretacion_notch_derecha_estructural').val(),
                "percentil_cerebro_placentario": $(child).find('#percentil_cerebro_placentario_estructural').val(),
                "interpretacion_cerebro_placentario": $(child).find('#interpretacion_cerebro_placentario_estructural').val(),
                "percentil_arteria_cerebral": $(child).find('#percentil_arteria_cerebral_estructural').val(),
                "interpretacion_arteria_cerebral": $(child).find('#interpretacion_arteria_cerebral_estructural').val(),
                "percentil_arteria_umbilical": $(child).find('#percentil_arteria_umbilical_estructural').val(),
                "interpretacion_arteria_umbilical": $(child).find('#interpretacion_arteria_umbilical_estructural').val(),
                "percentil_flojo_diasotolico": $(child).find('#percentil_flojo_diasotolico_estructural').val(),
                "interpretacion_flojo_diasotolico": $(child).find('#interpretacion_flojo_diasotolico_estructural').val(),
                "percentil_itsmo_aortico": $(child).find('#percentil_itsmo_aortico_estructural').val(),
                "interpretacion_itsmo_aortico": $(child).find('#interpretacion_itsmo_aortico_estructural').val(),
                "percentil_ducto_venenoso": $(child).find('#percentil_ducto_venenoso_estructural').val(),
                "interpretacion_ducto_venenoso": $(child).find('#interpretacion_ducto_venenoso_estructural').val(),
                "percentil_flujo_dicto_venenoso": $(child).find('#percentil_flujo_dicto_venenoso_estructural').val(),
                "interpretacion_flujo_dicto_venenoso": $(child).find('#interpretacion_flujo_dicto_venenoso_estructural').val(),
                "percentil_vena_umbilical": $(child).find('#percentil_vena_umbilical_estructural').val(),
                "interpretacion_vena_umbilical": $(child).find('#interpretacion_vena_umbilical_estructural').val(),

                "craneo": $(child).find('#craneo_estructural').val(),
                "dolicocefalia": $(child).find('#dolicocefalia_estructural').val(),
                "braquicefalia": $(child).find('#braquicefalia_estructural').val(),
                "craneo_tamano": $(child).find('#craneo_tamano_estructural').val(),
                "craneo_situras": $(child).find('#craneo_situras_estructural').val(),
                "craneo_compresion": $(child).find('#craneo_compresion_estructural').val(),
                "craneo_interhemisferica": $(child).find('#craneo_interhemisferica_estructural').val(),
                "craneo_hemisferios": $(child).find('#craneo_hemisferios_estructural').val(),
                "cavum_septum": $(child).find('#cavum_septum_estructural').val(),
                "diametro_anteroposterior": $(child).find('#diametro_anteroposterior_estructural').val(),
                "asta_frontales": $(child).find('#asta_frontales_estructural').val(),
                "comunicacion_asta_ateriores": $(child).find('#comunicacion_asta_ateriores_estructural').val(),
                "plexo_coroideos": $(child).find('#plexo_coroideos_estructural').val(),
                "presencia_quiste": $(child).find('#presencia_quiste_estructural').val(),
                "presencia_quiste_si": $(child).find('#presencia_quiste_si_estructural').val(),
                "cisura_parietooccipital": $(child).find('#cisura_parietooccipital_estructural').val(),
                "atrios_ventruculares": $(child).find('#atrios_ventruculares_estructural').val(),
                "atrio_derecho": $(child).find('#atrio_derecho_estructural').val(),
                "atrio_izquierdo": $(child).find('#atrio_izquierdo_estructural').val(),
                "area_ventricular": $(child).find('#area_ventricular_estructural').val(),
                "ambos_hemisferios_simetricos": $(child).find('#ambos_hemisferios_simetricos_estructural').val(),
                "vermis": $(child).find('#vermis_estructural').val(),
                "central_ecogenico": $(child).find('#central_ecogenico_estructural').val(),
                "morfologia_normal": $(child).find('#morfologia_normal_estructural').val(),
                "cisterna_magna": $(child).find('#cisterna_magna_estructural').val(),
                "comunicacion_4_ventriculo": $(child).find('#comunicacion_4_ventriculo_estructural').val(),
                "cortes_sagitales": $(child).find('#cortes_sagitales_estructural').val(),
                "identifica_cono": $(child).find('#identifica_cono_estructural').val(),
                "observa_osificacion": $(child).find('#observa_osificacion_estructural').val(),
                "integridad_cuerpos": $(child).find('#integridad_cuerpos_estructural').val(),
                "evidencia_intracraneales": $(child).find('#evidencia_intracraneales_estructural').val(),
                "columna_descipcion": $(child).find('#columna_descipcion_estructural').val(),
                "hueso_nasal": $(child).find('#hueso_nasal_estructural').val(),
                "retrognatia": $(child).find('#retrognatia_estructural').val(),
                "labio_normal": $(child).find('#labio_normal_estructural').val(),
                "clasificacion_labio": $(child).find('#clasificacion_labio_estructural').val(),
                "torax_pulmon": $(child).find('#torax_pulmon_estructural').val(),
                "torax_lesion": $(child).find('#torax_lesion_estructural').val(),
                "torax_masa_quistica": $(child).find('#torax_masa_quistica_estructural').val(),
                "torax_masa_solida": $(child).find('#torax_masa_solida_estructural').val(),
                "torax_descripcion": $(child).find('#torax_descripcion_estructural').val(),
                "torax_nutricion_masa": $(child).find('#torax_nutricion_masa_estructural').val(),
                "corazon_situs": $(child).find('#corazon_situs_estructural').val(),
                "corazon_tamano": $(child).find('#corazon_tamano_estructural').val(),
                "corazon_cardiomegalia": $(child).find('#corazon_cardiomegalia_estructural').val(),
                "corazon_cardiomegalia_severa": $(child).find('#corazon_cardiomegalia_severa_estructural').val(),
                "corazon_corte_camaras": $(child).find('#corazon_corte_camaras_estructural').val(),
                "corazon_tracto_derecho": $(child).find('#corazon_tracto_derecho_estructural').val(),
                "corazon_tracto_izquierdo": $(child).find('#corazon_tracto_izquierdo_estructural').val(),
                "corazon_corte_vasos": $(child).find('#corazon_corte_vasos_estructural').val(),
                "insercion_cordon": $(child).find('#insercion_cordon_estructural').val(),
                "presencia_vasos": $(child).find('#presencia_vasos_estructural').val(),
                "arteria_umbilical": $(child).find('#arteria_umbilical_estructural').val(),
                "pared_integra": $(child).find('#pared_integra_estructural').val(),
                "defecto_umbilical": $(child).find('#defecto_umbilical_esctructural').val(),
                "defecto_cordon": $(child).find('#defecto_cordon_esctructural').val(),
                "defecto_medida": $(child).find('#defecto_medida_esctructural').val(),
                "cubierta_membrana" : $(child).find('#cubierta_membrana_estructural').val(),
                "asas_intestino_delgado" : $(child).find('#asas_intestino_delgado_estructural').val(),
                "asas_intestino_grueso" : $(child).find('#asas_intestino_grueso_estructural').val(),
                "dilatacion_intra_abdominal" : $(child).find('#dilatacion_intra_abdominal_estructural').val(),
                "medicion_intra_abdominal" : $(child).find('#medicion_intra_abdominal_estructural').val(),
                "dilatacion_extra_abdominal" : $(child).find('#dilatacion_extra_abdominal_estructural').val(),
                "medicion_extra_abdominal" : $(child).find('#medicion_extra_abdominal_estructural').val(),
                "sospecha_peritonitis" : $(child).find('#sospecha_peritonitis_estructural').val(),
                "camara_gastrica" : $(child).find('#camara_gastrica_estructural').val(),
                "vejiga_urinaria" : $(child).find('#vejiga_urinaria_estructural').val(),
                "camara_gastrica_insitu": $(child).find('#camara_gastrica_insitu_estructural').val(),
                "rinon_derecho": $(child).find('#rinon_derecho_estructural').val(),
                "rinon_derecho_tanano": $(child).find('#rinon_derecho_tanano_estructural').val(),
                "rinon_izquierdo": $(child).find('#rinon_izquierdo_estructural').val(),
                "rinon_izquierdo_tanano": $(child).find('#rinon_izquierdo_tanano_estructural').val(),
                "pelvis_derecha": $(child).find('#pelvis_derecha_esctructural').val(),
                "pelvis_izquierda": $(child).find('#pelvis_izquierda_esctructural').val(),
                "hidronefosis": $(child).find('#hidronefosis_estructural').val(),
                "grado": $(child).find('#grado_estructural').val(),
                "glandulas_suprarrenales": $(child).find('#glandulas_suprarrenales_estructural').val(),
                "vejiga_urinaria_insitu": $(child).find('#vejiga_urinaria_insitu_estructural').val(),
                "engrosamiento_pared": $(child).find('#engrosamiento_pared_estructural').val(),
                "extremidades_superiores" : $(child).find('#extremidades_superiores_estructural').val(),
                "extremidades_superiores_integras" : $(child).find('#extremidades_superiores_integras_estructural').val(),
                "extremidades_superiores_afectada" : $(child).find('#extremidades_superiores_afectada_estructural').val(),
                "extremidades_inferiores" : $(child).find('#extremidades_inferiores_estructural').val(),
                "extremidades_inferiores_integras" : $(child).find('#extremidades_inferiores_integras_estructural').val(),
                "extremidades_inferiores_afectada" : $(child).find('#extremidades_inferiores_afectada_estructural').val(),

                "placenta_numero" : $(child).find('#placenta_numero_estructural').val(),
                "placenta_posocion" : $(child).find('#placenta_posocion_estructural').val(),
                "placenta_grado" : $(child).find('#placenta_grado_estructural').val(),
                "presencia_patologicas" : $(child).find('#presencia_patologicas_estructural').val(),
                "areas_infarto" : $(child).find('#areas_infarto_estructural').val(),
                "longitud_cervix" : $(child).find('#longitud_cervix_estructural').val(),
                "funneling" : $(child).find('#funneling_estructural').val(),
                "porcentaje_funneling" : $(child).find('#porcentaje_funneling_estructural').val(),
                "sludge" : $(child).find('#sludge_estructural').val(),
                "liquido_amniotico" : $(child).find('#liquido_amniotico_estructural').val(),
                "clasificacion_liquido_amniotico" : $(child).find('#clasificacion_liquido_amniotico_estructural').val(),
                "valor_ila" : $(child).find('#valor_ila_estructural').val()
            });
        }

    }


</script>

@endpush
