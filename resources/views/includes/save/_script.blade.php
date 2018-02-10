@push('scripts')

<script>
    var fetos = [];

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
                "quiste_plexos_si_1trimestre" : $(child).find('#quiste_plexos_si_1trimestre').val(),
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
    }
</script>

@endpush
