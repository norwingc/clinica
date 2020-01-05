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
            "_token"                             : _token,
            "referido"                           : $(form).find('#referido').val(),
            "edad"                               : $(form).find('#edad_1trimestre').val(),
            "edad_gestacional"                   : $(form).find('#edad_gestacional_1trimestre').val(),
            "morbilidad"                         : $(form).find('#morbilidad_1trimestre').val(),
            "rh_tipo"                            : $(form).find('#rh_tipo_1trimestre').val(),
            "date"                               : $(form).find('#date_1trimestre').val(),
            "paridad"                            : $(form).find('#paridad_1trimestre').val(),
            "feto"                               : $(form).find('#feto_1trimestre').val(),
            "historia_preecampsia_mama"          : $(form).find('#historia_preecampsia_mama_1trimestre').val(),
            "historia_hipertension_mama"         : $(form).find('#historia_hipertension_mama_1trimestre').val(),
            "historia_preecampsia_hermana"       : $(form).find('#historia_preecampsia_hermana_1trimestre').val(),
            "historia_hipertension_personal"     : $(form).find('#historia_hipertension_personal_1trimestre').val(),
            "peso"                               : $(form).find('#peso').val(),
            "talla"                              : $(form).find('#talla').val(),
            "imc"                                : $(form).find('#imc').val(),
            "pa_derecho"                         : $(form).find('#pa_derecho_1trimestre').val(),
            "pa_izquierdo"                       : $(form).find('#pa_izquierdo_1trimestre').val(),
			"pam"                       		 : $(form).find('#pam_1trimestre').val(),
            "ip_artrias"                         : $(form).find('#ip_artrias_1trimestre').val(),
			"notch"                         	 : $(form).find('#notch_1trimestre').val(),
            "bidimensional"                      : $(form).find('#bidimensional_1trimestre').val(),
            "doppler_color"                      : $(form).find('#doppler_color_1trimestre').val(),
            "conclusion_lcc"                     : $(form).find('#conclusion_lcc_1trimestre').val(),
            "conclusion_riesago_cromosomopatias" : $(form).find('#conclusion_riesago_cromosomopatias_1trimestre').val(),
            "conclusion_riesago_preeclampsia"    : $(form).find('#conclusion_riesago_preeclampsia_1trimestre').val(),
            "conclusion_riesago_hipertensivos"   : $(form).find('#conclusion_riesago_hipertensivos_1trimestre').val(),
            "conclusion_riesago_restiaccion"     : $(form).find('#conclusion_riesago_restiaccion_1trimestre').val(),
            "conclusion_riesago_parto_pretermino": $(form).find('#conclusion_riesago_parto_pretermino_1trimestre').val(),
            "recomendaciones"                    : $(form).find('#recomendaciones_1trimestre').val(),
            "comentarios"                        : $(form).find('#comentarios_1trimestre').val(),
            "recordatorio"                       : $(form).find('#recordatorio_1trimestre').val(),
            "fetos"                              : fetos
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
            "_token"                                    : _token,
            "referido"                                  : $(form).find('#referido').val(),
            "edad"                                      : $(form).find('#edad_estructural').val(),
            "edad_gestacional"                          : $(form).find('#edad_gestacional_estructural').val(),
            "morbilidad"                                : $(form).find('#morbilidad_estructural').val(),
            "rh_tipo"                                   : $(form).find('#rh_tipo_estructural').val(),
            "date"                                      : $(form).find('#date_estructural').val(),
            "paridad"                                   : $(form).find('#paridad_estructural').val(),
            "feto"                                      : $(form).find('#feto_estructural').val(),
            "revision"                                  : $(form).find('#revision_estructural').val(),
            "conclusion_riesgo_parto_pretermino"        : $(form).find('#conclusion_riesgo_parto_pretermino_estructural').val(),
            "conclusion_riesgo_preeclampsia"            : $(form).find('#conclusion_riesgo_preeclampsia_estructural').val(),
            "conclusion_riesgo_hipertension"            : $(form).find('#conclusion_riesgo_hipertension_estructural').val(),
            "conclusion_riesgo_restriccion_crecimiento" : $(form).find('#conclusion_riesgo_restriccion_crecimiento_estructural').val(),
            "conclusion_embarazo_fetometria"            : $(form).find('#conclusion_embarazo_fetometria_estructural').val(),
            "concluciones"                              : $(form).find('#concluciones_estructural').val(),
            "comentarios"                               : $(form).find('#comentarios_estructural').val(),
            "recomendaciones"                           : $(form).find('#recomendaciones_estructural').val(),
            "recordatorio"                              : $(form).find('#recordatorio_estructural').val(),
            "fetos"                                     : fetos
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
     * [saveNeurosonografia description]
     * @param  {[type]} este [description]
     * @return {[type]}      [description]
     */
    function saveNeurosonografia(este) {
        $(este).button('loading');
        var form = $(este.data('examen'));
        var _token = $('meta[name="csrf-token"]').attr('content');

        addFeto($(form).find('#child_neurosonografia'), 'Neurosonografia');

         var data = {
            "_token"                        : _token,
            "referido"                      : $(form).find('#referido').val(),
            "edad"                          : $(form).find('#edad_neurosonografia').val(),
            "edad_gestacional"              : $(form).find('#edad_gestacional_neurosonografia').val(),
            "morbilidad"                    : $(form).find('#morbilidad_neurosonografia').val(),
            "rh_tipo"                       : $(form).find('#rh_tipo_neurosonografia').val(),
            "date"                          : $(form).find('#date_neurosonografia').val(),
            "paridad"                       : $(form).find('#paridad_neurosonografia').val(),
            "feto"                          : $(form).find('#feto_neurosonografia').val(),
            "revision"                      : $(form).find('#revision_neurosonografia').val(),
            "conclusion_embarazo_gestacion" : $(form).find('#conclusion_embarazo_gestacion_neurosonografia').val(),
            "concluciones"                  : $(form).find('#concluciones_neurosonografia').val(),
            "comentarios"                   : $(form).find('#comentarios_neurosonografia').val(),
            "recomendaciones"               : $(form).find('#recomendaciones_neurosonografia').val(),
            "recordatorio"                  : $(form).find('#recordatorio_neurosonografia').val(),
            fetos                           : fetos
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
     * [saveEcocardiografia description]
     * @param  {[type]} este [description]
     * @return {[type]}      [description]
     */
    function saveEcocardiografia(este) {
        $(este).button('loading');
        var form = $(este.data('examen'));

        var _token = $('meta[name="csrf-token"]').attr('content');

        addFeto($(form).find('#child_ecocardiografia'), 'Ecocardiografia');

        var data = {
            "_token"           : _token,
            "referido"         : $(form).find('#referido').val(),
            "edad"             : $(form).find('#edad_ecocardiografia').val(),
            "edad_gestacional" : $(form).find('#edad_gestacional_ecocardiografia').val(),
            "morbilidad"       : $(form).find('#morbilidad_ecocardiografia').val(),
            "rh_tipo"          : $(form).find('#rh_tipo_ecocardiografia').val(),
            "date"             : $(form).find('#date_ecocardiografia').val(),
            "paridad"          : $(form).find('#paridad_ecocardiografia').val(),
            "feto"             : $(form).find('#feto_ecocardiografia').val(),
            "revision"         : $(form).find('#revision_ecocardiografia').val(),
            "concluciones"     : $(form).find('#concluciones_ecocardiografia').val(),
            "comentarios"      : $(form).find('#comentarios_ecocardiografia').val(),
            "recomendaciones"  : $(form).find('#recomendaciones_ecocardiografia').val(),
            "recordatorio"     : $(form).find('#recordatorio_ecocardiografia').val(),
            "fetos"            : fetos
        }

        $.post($(form).attr('action'), data, function(resp){
            if(resp.saved == true){
                $(este).button('reset');
                alert('Examen Guardado');
                location.reload();
            }
        });
    }

    /**
     * [saveDoppler description]
     * @param  {[type]} este [description]
     * @return {[type]}      [description]
     */
    function saveDoppler(este) {
        //$(este).button('loading');
        var form = $(este.data('examen'));

        var _token = $('meta[name="csrf-token"]').attr('content');

        addFeto($(form).find('#child_doppler'), 'Doppler');

        var data = {
            "_token"                        : _token,
            "referido"                      : $(form).find('#referido').val(),
            "edad"                          : $(form).find('#edad_doppler').val(),
            "edad_gestacional"              : $(form).find('#edad_gestacional_doppler').val(),
            "morbilidad"                    : $(form).find('#morbilidad_doppler').val(),
            "rh_tipo"                       : $(form).find('#rh_tipo_doppler').val(),
            "date"                          : $(form).find('#date_doppler').val(),
            "paridad"                       : $(form).find('#paridad_doppler').val(),
            "feto"                          : $(form).find('#feto_doppler').val(),
            "revision"                      : $(form).find('#revision_doppler').val(),
            "conclusion_embarazo_gestacion" : $(form).find('#conclusion_embarazo_gestacion_doppler').val(),
            "concluciones"                  : $(form).find('#concluciones_doppler').val(),
            "comentarios"                   : $(form).find('#comentarios_doppler').val(),
            "recomendaciones"               : $(form).find('#recomendaciones_doppler').val(),
            "recordatorio"                  : $(form).find('#recordatorio_doppler').val(),
            "fetos"                         : fetos
        }

        $.post($(form).attr('action'), data, function(resp){
            console.log(resp);
            if(resp.saved == true){
                $(este).button('reset');
                alert('Examen Guardado');
                location.reload();
            }
        });
    }

    /**
     * [addFeto description]
     * @param {[type]} child  [description]
     * @param {[type]} examen [description]
     */
    function addFeto(child, examen) {

        if(examen == 'UltrasonidoTrimestre'){
            fetos.push({
                "vitalidad_feto"                    : $(child).find('#vitalidad_feto_1trimestre').val(),
                "localizacion_feto"                 : $(child).find('#localizacion_feto_1trimestre').val(),
                "somatometria_lcc"                  : $(child).find('#somatometria_lcc_1trimestre').val(),
                "somatometria_semanas"              : $(child).find('#somatometria_semanas_1trimestre').val(),
                "somatometria_semanas"              : $(child).find('#somatometria_semanas_1trimestre').val(),
                "somatometria_dbp"                  : $(child).find('#somatometria_dbp_1trimestre').val(),
                "somatometria_cc"                   : $(child).find('#somatometria_cc_1trimestre').val(),
                "somatometria_ca"                   : $(child).find('#somatometria_ca_1trimestre').val(),
                "somatometria_lf"                   : $(child).find('#somatometria_lf_1trimestre').val(),
                "somatometria_fcf"                  : $(child).find('#somatometria_fcf_1trimestre').val(),
                "somatometria_fetometria"           : $(child).find('#somatometria_fetometria_1trimestre').val(),
                "somatometria_tn"                   : $(child).find('#somatometria_tn_1trimestre').val(),
                "somatometria_fecha_estimada_parto" : $(child).find('#somatometria_fecha_estimada_parto_1trimestre').val(),
                "craneo"                            : $(child).find('#craneo_1trimestre').val(),
                "craneo_forma"                      : $(child).find('#craneo_forma_1trimestre').val(),
                "pexos_caroideos"                   : $(child).find('#pexos_caroideos_1trimestre').val(),
                "quiste_plexos"                     : $(child).find('#quiste_plexos_1trimestre').val(),
                "quiste_plexos_si"                  : $(child).find('#quiste_plexos_si_1trimestre').val(),
                "hueso_nasal"                       : $(child).find('#hueso_nasal_1trimestre').val(),
                "medicion_nasal"                    : $(child).find('#medicion_nasal_1trimestre').val(),
                "torax_normal"                      : $(child).find('#torax_normal_1trimestre').val(),
                "localizacion_intratoracica"        : $(child).find('#localizacion_intratoracica_1trimestre').val(),
                "ectopia_cordis"                    : $(child).find('#ectopia_cordis_1trimestre').val(),
                "anomalia_cardica"                  : $(child).find('#anomalia_cardica_1trimestre').val(),
                "descripcion_anomalia_cardica"      : $(child).find('#descripcion_anomalia_cardica_1trimestre').val(),
                "localizacion_defecto_abdominal"    : $(child).find('#localizacion_defecto_abdominal_1trimestre').val(),
                "defecto_medida"                    : $(child).find('#defecto_medida_1trimestre').val(),
                "cubierta_membrana"                 : $(child).find('#cubierta_membrana_1trimestre').val(),
                "asas_intestino_delgado"            : $(child).find('#asas_intestino_delgado_1trimestre').val(),
                "asas_intestino_grueso"             : $(child).find('#asas_intestino_grueso_1trimestre').val(),
                "dilatacion_intra_abdominal"        : $(child).find('#dilatacion_intra_abdominal_1trimestre').val(),
                "medicion_intra_abdominal"          : $(child).find('#medicion_intra_abdominal_1trimestre').val(),
                "dilatacion_extra_abdominal"        : $(child).find('#dilatacion_extra_abdominal_1trimestre').val(),
                "medicion_extra_abdominal"          : $(child).find('#medicion_extra_abdominal_1trimestre').val(),
                "sospecha_peritonitis"              : $(child).find('#sospecha_peritonitis_1trimestre').val(),
                "camara_gastrica"                   : $(child).find('#camara_gastrica_1trimestre').val(),
                "vejiga_urinaria"                   : $(child).find('#vejiga_urinaria_1trimestre').val(),
                "insercion_cordon"                  : $(child).find('#insercion_cordon_1trimestre').val(),
                "presencia_vasos"                   : $(child).find('#presencia_vasos_1trimestre').val(),
                "arteria_umbilical"                 : $(child).find('#arteria_umbilical_1trimestre').val(),
                "pared_integra"                     : $(child).find('#pared_integra_1trimestre').val(),
                "vejiga"                            : $(child).find('#vejiga_1trimestre').val(),
                "extremidades_superiores"           : $(child).find('#extremidades_superiores_1trimestre').val(),
                "extremidades_superiores_integras"  : $(child).find('#extremidades_superiores_integras_1trimestre').val(),
                "extremidades_superiores_afectada"  : $(child).find('#extremidades_superiores_afectada_1trimestre').val(),
                "extremidades_inferiores"           : $(child).find('#extremidades_inferiores_1trimestre').val(),
                "extremidades_inferiores_integras"  : $(child).find('#extremidades_inferiores_integras_1trimestre').val(),
                "extremidades_inferiores_afectada"  : $(child).find('#extremidades_inferiores_afectada_1trimestre').val(),
                "placenta_numero"                   : $(child).find('#placenta_numero_1trimestre').val(),
                "placenta_posocion"                 : $(child).find('#placenta_posocion_1trimestre').val(),
                "fusion_membranas"                  : $(child).find('#fusion_membranas_1trimestre').val(),
                "placenta_grado"                    : $(child).find('#placenta_grado_1trimestre').val(),
                "longitud_cervix"                   : $(child).find('#longitud_cervix_1trimestre').val(),
                "funneling"                         : $(child).find('#funneling_1trimestre').val(),
                "porcentaje_funneling"              : $(child).find('#porcentaje_funneling_1trimestre').val(),
                "sludge"                            : $(child).find('#sludge_1trimestre').val(),
                "liquido_amniotico"                 : $(child).find('#liquido_amniotico_1trimestre').val(),
                "basal"                             : $(child).find('#basal_1trimestre').val(),
                "edad_tn"                           : $(child).find('#edad_tn_1trimestre').val(),
                "edad_tn_marcadores"                : $(child).find('#edad_tn_marcadores_1trimestre').val()
            });
        }

        if(examen == 'UltrasonidoEstructural'){
            fetos.push({
                "vitalidad_feto"                     : $(child).find('#vitalidad_feto_estructural').val(),
                "localizacion_feto"                  : $(child).find('#localizacion_feto_estructural').val(),
                "presentacion"                       : $(child).find('#presentacion_estructural').val(),
                "situacion"                          : $(child).find('#situacion_estructural').val(),
                "posicion"                           : $(child).find('#posicion_estructural').val(),
                "fcf"                                : $(child).find('#fcf_estructural').val(),
                "sexo_feto"                          : $(child).find('#sexo_feto_estructural').val(),
                "dbp_medida"                         : $(child).find('#dbp_medida_estructural').val(),
                "dbp_semanas"                        : $(child).find('#dbp_semanas_estructural').val(),
                "cc_medida"                          : $(child).find('#cc_medida_estructural').val(),
                "cc_semanas"                         : $(child).find('#cc_semanas_estructural').val(),
                "ca_medida"                          : $(child).find('#ca_medida_estructural').val(),
                "ca_semanas"                         : $(child).find('#ca_semanas_estructural').val(),
                "lf_medida"                          : $(child).find('#lf_medida_estructural').val(),
                "lf_semanas"                         : $(child).find('#lf_semanas_estructural').val(),
                "humero_medida"                      : $(child).find('#humero_medida_estructural').val(),
                "humero_semanas"                     : $(child).find('#humero_semanas_estructural').val(),
                "radio_medida"                       : $(child).find('#radio_medida_estructural').val(),
                "radio_semanas"                      : $(child).find('#radio_semanas_estructural').val(),
                "cubito_medida"                      : $(child).find('#cubito_medida_estructural').val(),
                "cubito_semanas"                     : $(child).find('#cubito_semanas_estructural').val(),
                "tibia_medida"                       : $(child).find('#tibia_medida_estructural').val(),
                "tibia_semanas"                      : $(child).find('#tibia_semanas_estructural').val(),
                "perone_medida"                      : $(child).find('#perone_medida_estructural').val(),
                "perone_semanas"                     : $(child).find('#perone_semanas_estructural').val(),
                "cerebelo_medida"                    : $(child).find('#cerebelo_medida_estructural').val(),
                "cerebelo_semanas"                   : $(child).find('#cerebelo_semanas_estructural').val(),
                "cisterna_magna"                     : $(child).find('#cisterna_magna_estructural').val(),
                "pliegue_nucal"                      : $(child).find('#pliegue_nucal_estructural').val(),
                "fetometria_promedio"                : $(child).find('#fetometria_promedio_estructural').val(),
                "percentil"                          : $(child).find('#percentil_estructural').val(),
                "peso_fetal"                         : $(child).find('#peso_fetal_estructural').val(),
                "fecha_parto"                        : $(child).find('#fecha_parto_estructural').val(),
                "percentil_ip_medio"                 : $(child).find('#percentil_ip_medio_estructural').val(),
                "interpretacion_ip_medio"            : $(child).find('#interpretacion_ip_medio_estructural').val(),
                "percentil_notch_izquierda"          : $(child).find('#percentil_notch_izquierda_estructural').val(),
                "interpretacion_notch_izquierda"     : $(child).find('#interpretacion_notch_izquierda_estructural').val(),
                "percentil_notch_derecha"            : $(child).find('#percentil_notch_derecha_estructural').val(),
                "interpretacion_notch_derecha"       : $(child).find('#interpretacion_notch_derecha_estructural').val(),
                "percentil_cerebro_placentario"      : $(child).find('#percentil_cerebro_placentario_estructural').val(),
                "interpretacion_cerebro_placentario" : $(child).find('#interpretacion_cerebro_placentario_estructural').val(),
                "percentil_arteria_cerebral"         : $(child).find('#percentil_arteria_cerebral_estructural').val(),
                "interpretacion_arteria_cerebral"    : $(child).find('#interpretacion_arteria_cerebral_estructural').val(),
                "percentil_arteria_umbilical"        : $(child).find('#percentil_arteria_umbilical_estructural').val(),
                "interpretacion_arteria_umbilical"   : $(child).find('#interpretacion_arteria_umbilical_estructural').val(),
                "percentil_flojo_diasotolico"        : $(child).find('#percentil_flojo_diasotolico_estructural').val(),
                "interpretacion_flojo_diasotolico"   : $(child).find('#interpretacion_flojo_diasotolico_estructural').val(),
                "percentil_itsmo_aortico"            : $(child).find('#percentil_itsmo_aortico_estructural').val(),
                "interpretacion_itsmo_aortico"       : $(child).find('#interpretacion_itsmo_aortico_estructural').val(),
                "percentil_ducto_venenoso"           : $(child).find('#percentil_ducto_venenoso_estructural').val(),
                "interpretacion_ducto_venenoso"      : $(child).find('#interpretacion_ducto_venenoso_estructural').val(),
                "percentil_flujo_dicto_venenoso"     : $(child).find('#percentil_flujo_dicto_venenoso_estructural').val(),
                "interpretacion_flujo_dicto_venenoso": $(child).find('#interpretacion_flujo_dicto_venenoso_estructural').val(),
                "percentil_vena_umbilical"           : $(child).find('#percentil_vena_umbilical_estructural').val(),
                "interpretacion_vena_umbilical"      : $(child).find('#interpretacion_vena_umbilical_estructural').val(),
                "craneo"                             : $(child).find('#craneo_estructural').val(),
                "dolicocefalia"                      : $(child).find('#dolicocefalia_estructural').val(),
                "braquicefalia"                      : $(child).find('#braquicefalia_estructural').val(),
                "craneo_tamano"                      : $(child).find('#craneo_tamano_estructural').val(),
                "craneo_situras"                     : $(child).find('#craneo_situras_estructural').val(),
                "craneo_compresion"                  : $(child).find('#craneo_compresion_estructural').val(),
                "craneo_interhemisferica"            : $(child).find('#craneo_interhemisferica_estructural').val(),
                "craneo_hemisferios"                 : $(child).find('#craneo_hemisferios_estructural').val(),
                "cavum_septum"                       : $(child).find('#cavum_septum_estructural').val(),
                "diametro_anteroposterior"           : $(child).find('#diametro_anteroposterior_estructural').val(),
                "asta_frontales"                     : $(child).find('#asta_frontales_estructural').val(),
                "comunicacion_asta_ateriores"        : $(child).find('#comunicacion_asta_ateriores_estructural').val(),
                "plexo_coroideos"                    : $(child).find('#plexo_coroideos_estructural').val(),
                "presencia_quiste"                   : $(child).find('#presencia_quiste_estructural').val(),
                "presencia_quiste_si"                : $(child).find('#presencia_quiste_si_estructural').val(),
                "cisura_parietooccipital"            : $(child).find('#cisura_parietooccipital_estructural').val(),
                "atrios_ventruculares"               : $(child).find('#atrios_ventruculares_estructural').val(),
                "atrio_derecho"                      : $(child).find('#atrio_derecho_estructural').val(),
                "atrio_izquierdo"                    : $(child).find('#atrio_izquierdo_estructural').val(),
                "area_ventricular"                   : $(child).find('#area_ventricular_estructural').val(),
                "ambos_hemisferios_simetricos"       : $(child).find('#ambos_hemisferios_simetricos_estructural').val(),
                "vermis"                             : $(child).find('#vermis_estructural').val(),
                "central_ecogenico"                  : $(child).find('#central_ecogenico_estructural').val(),
                "morfologia_normal"                  : $(child).find('#morfologia_normal_estructural').val(),
                "cisterna_magna"                     : $(child).find('#cisterna_magna_estructural').val(),
                "comunicacion_4_ventriculo"          : $(child).find('#comunicacion_4_ventriculo_estructural').val(),
                "cortes_sagitales"                   : $(child).find('#cortes_sagitales_estructural').val(),
                "identifica_cono"                    : $(child).find('#identifica_cono_estructural').val(),
                "observa_osificacion"                : $(child).find('#observa_osificacion_estructural').val(),
                "integridad_cuerpos"                 : $(child).find('#integridad_cuerpos_estructural').val(),
                "evidencia_intracraneales"           : $(child).find('#evidencia_intracraneales_estructural').val(),
                "columna_descipcion"                 : $(child).find('#columna_descipcion_estructural').val(),
                "hueso_nasal"                        : $(child).find('#hueso_nasal_estructural').val(),
                "retrognatia"                        : $(child).find('#retrognatia_estructural').val(),
                "labio_normal"                       : $(child).find('#labio_normal_estructural').val(),
                "clasificacion_labio"                : $(child).find('#clasificacion_labio_estructural').val(),
                "torax_pulmon"                       : $(child).find('#torax_pulmon_estructural').val(),
                "torax_lesion"                       : $(child).find('#torax_lesion_estructural').val(),
                "torax_masa_quistica"                : $(child).find('#torax_masa_quistica_estructural').val(),
                "torax_masa_solida"                  : $(child).find('#torax_masa_solida_estructural').val(),
                "torax_descripcion"                  : $(child).find('#torax_descripcion_estructural').val(),
                "torax_nutricion_masa"               : $(child).find('#torax_nutricion_masa_estructural').val(),
                "corazon_situs"                      : $(child).find('#corazon_situs_estructural').val(),
                "corazon_tamano"                     : $(child).find('#corazon_tamano_estructural').val(),
                "corazon_cardiomegalia"              : $(child).find('#corazon_cardiomegalia_estructural').val(),
                "corazon_cardiomegalia_severa"       : $(child).find('#corazon_cardiomegalia_severa_estructural').val(),
                "corazon_corte_camaras"              : $(child).find('#corazon_corte_camaras_estructural').val(),
                "corazon_tracto_derecho"             : $(child).find('#corazon_tracto_derecho_estructural').val(),
                "corazon_tracto_izquierdo"           : $(child).find('#corazon_tracto_izquierdo_estructural').val(),
                "corazon_corte_vasos"                : $(child).find('#corazon_corte_vasos_estructural').val(),
                "insercion_cordon"                   : $(child).find('#insercion_cordon_estructural').val(),
                "presencia_vasos"                    : $(child).find('#presencia_vasos_estructural').val(),
                "arteria_umbilical"                  : $(child).find('#arteria_umbilical_estructural').val(),
                "pared_integra"                      : $(child).find('#pared_integra_estructural').val(),
                "defecto_umbilical"                  : $(child).find('#defecto_umbilical_esctructural').val(),
                "defecto_cordon"                     : $(child).find('#defecto_cordon_esctructural').val(),
                "defecto_medida"                     : $(child).find('#defecto_medida_esctructural').val(),
                "cubierta_membrana"                  : $(child).find('#cubierta_membrana_estructural').val(),
                "asas_intestino_delgado"             : $(child).find('#asas_intestino_delgado_estructural').val(),
                "asas_intestino_grueso"              : $(child).find('#asas_intestino_grueso_estructural').val(),
                "dilatacion_intra_abdominal"         : $(child).find('#dilatacion_intra_abdominal_estructural').val(),
                "medicion_intra_abdominal"           : $(child).find('#medicion_intra_abdominal_estructural').val(),
                "dilatacion_extra_abdominal"         : $(child).find('#dilatacion_extra_abdominal_estructural').val(),
                "medicion_extra_abdominal"           : $(child).find('#medicion_extra_abdominal_estructural').val(),
                "sospecha_peritonitis"               : $(child).find('#sospecha_peritonitis_estructural').val(),
                "camara_gastrica"                    : $(child).find('#camara_gastrica_estructural').val(),
                "vejiga_urinaria"                    : $(child).find('#vejiga_urinaria_estructural').val(),
                "camara_gastrica_insitu"             : $(child).find('#camara_gastrica_insitu_estructural').val(),
                "rinon_derecho"                      : $(child).find('#rinon_derecho_estructural').val(),
                "rinon_derecho_tanano"               : $(child).find('#rinon_derecho_tanano_estructural').val(),
                "pelvis_derecho"                     : $(child).find('#pelvis_derecho_estructural').val(),
                "hidronefosis_derecho"               : $(child).find('#hidronefosis_derecho_estructural').val(),
                "grado_derecho"                      : $(child).find('#grado_derecho_estructural').val(),
                "glandulas_suprarrenales_derecho"    : $(child).find('#glandulas_suprarrenales_derecho_estructural').val(),
                "rinon_izquierdo"                    : $(child).find('#rinon_izquierdo_estructural').val(),
                "rinon_izquierdo_tanano"             : $(child).find('#rinon_izquierdo_tanano_estructural').val(),
                "pelvis_izquierdo"                   : $(child).find('#pelvis_izquierdo_esctructural').val(),
                "hidronefosis_izquierdo"             : $(child).find('#hidronefosis_izquierdo_estructural').val(),
                "grado_izquierdo"                    : $(child).find('#grado_izquierdo_estructural').val(),
                "glandulas_suprarrenales_izquierdo"  : $(child).find('#glandulas_suprarrenales_izquierdo_estructural').val(),
                "vejiga_urinaria_insitu"             : $(child).find('#vejiga_urinaria_insitu_estructural').val(),
                "engrosamiento_pared"                : $(child).find('#engrosamiento_pared_estructural').val(),
                "extremidades_superiores"            : $(child).find('#extremidades_superiores_estructural').val(),
                "extremidades_superiores_integras"   : $(child).find('#extremidades_superiores_integras_estructural').val(),
                "extremidades_superiores_afectada"   : $(child).find('#extremidades_superiores_afectada_estructural').val(),
                "extremidades_inferiores"            : $(child).find('#extremidades_inferiores_estructural').val(),
                "extremidades_inferiores_integras"   : $(child).find('#extremidades_inferiores_integras_estructural').val(),
                "extremidades_inferiores_afectada"   : $(child).find('#extremidades_inferiores_afectada_estructural').val(),
                "placenta_numero"                    : $(child).find('#placenta_numero_estructural').val(),
                "placenta_posocion"                  : $(child).find('#placenta_posocion_estructural').val(),
                "placenta_grado"                     : $(child).find('#placenta_grado_estructural').val(),
                "presencia_patologicas"              : $(child).find('#presencia_patologicas_estructural').val(),
                "areas_infarto"                      : $(child).find('#areas_infarto_estructural').val(),
                "longitud_cervix"                    : $(child).find('#longitud_cervix_estructural').val(),
                "funneling"                          : $(child).find('#funneling_estructural').val(),
                "porcentaje_funneling"               : $(child).find('#porcentaje_funneling_estructural').val(),
                "sludge"                             : $(child).find('#sludge_estructural').val(),
                "liquido_amniotico"                  : $(child).find('#liquido_amniotico_estructural').val(),
                "clasificacion_liquido_amniotico"    : $(child).find('#clasificacion_liquido_amniotico_estructural').val(),
                "valor_ila"                          : $(child).find('#valor_ila_estructural').val()
            });
        }

        if(examen == 'Neurosonografia'){
            fetos.push({
                "vitalidad_feto"                        : $(child).find('#vitalidad_feto_neurosonografia').val(),
                "localizacion_feto"                     : $(child).find('#localizacion_feto_neurosonografia').val(),
                "presentacion"                          : $(child).find('#presentacion_neurosonografia').val(),
                "situacion"                             : $(child).find('#situacion_neurosonografia').val(),
                "posicion"                              : $(child).find('#posicion_neurosonografia').val(),
                "fcf"                                   : $(child).find('#fcf_neurosonografia').val(),
                "sexo_feto"                             : $(child).find('#sexo_feto_neurosonografia').val(),
                "dbp_medida"                            : $(child).find('#dbp_medida_neurosonografia').val(),
                "dbp_semanas"                           : $(child).find('#dbp_semanas_neurosonografia').val(),
                "cc_medida"                             : $(child).find('#cc_medida_neurosonografia').val(),
                "cc_semanas"                            : $(child).find('#cc_semanas_neurosonografia').val(),
                "ca_medida"                             : $(child).find('#ca_medida_neurosonografia').val(),
                "ca_semanas"                            : $(child).find('#ca_semanas_neurosonografia').val(),
                "lf_medida"                             : $(child).find('#lf_medida_neurosonografia').val(),
                "lf_semanas"                            : $(child).find('#lf_semanas_neurosonografia').val(),
                "fetometria_promedio"                   : $(child).find('#fetometria_promedio_neurosonografia').val(),
                "percentil"                             : $(child).find('#percentil_neurosonografia').val(),
                "peso_fetal"                            : $(child).find('#peso_fetal_neurosonografia').val(),
                "fecha_parto"                           : $(child).find('#fecha_parto_neurosonografia').val(),
                "percentil_ip_medio"                    : $(child).find('#percentil_ip_medio_neurosonografia').val(),
                "interpretacion_ip_medio"               : $(child).find('#interpretacion_ip_medio_neurosonografia').val(),
                "percentil_notch_izquierda"             : $(child).find('#percentil_notch_izquierda_neurosonografia').val(),
                "interpretacion_notch_izquierda"        : $(child).find('#interpretacion_notch_izquierda_neurosonografia').val(),
                "percentil_notch_derecha"               : $(child).find('#percentil_notch_derecha_neurosonografia').val(),
                "interpretacion_notch_derecha"          : $(child).find('#interpretacion_notch_derecha_neurosonografia').val(),
                "percentil_cerebro_placentario"         : $(child).find('#percentil_cerebro_placentario_neurosonografia').val(),
                "interpretacion_cerebro_placentario"    : $(child).find('#interpretacion_cerebro_placentario_neurosonografia').val(),
                "percentil_arteria_cerebral"            : $(child).find('#percentil_arteria_cerebral_neurosonografia').val(),
                "interpretacion_arteria_cerebral"       : $(child).find('#interpretacion_arteria_cerebral_neurosonografia').val(),
                "percentil_arteria_umbilical"           : $(child).find('#percentil_arteria_umbilical_neurosonografia').val(),
                "interpretacion_arteria_umbilical"      : $(child).find('#interpretacion_arteria_umbilical_neurosonografia').val(),
                "percentil_flojo_diasotolico"           : $(child).find('#percentil_flojo_diasotolico_neurosonografia').val(),
                "interpretacion_flojo_diasotolico"      : $(child).find('#interpretacion_flojo_diasotolico_neurosonografia').val(),
                "percentil_itsmo_aortico"               : $(child).find('#percentil_itsmo_aortico_neurosonografia').val(),
                "interpretacion_itsmo_aortico"          : $(child).find('#interpretacion_itsmo_aortico_neurosonografia').val(),
                "percentil_ducto_venenoso"              : $(child).find('#percentil_ducto_venenoso_neurosonografia').val(),
                "interpretacion_ducto_venenoso"         : $(child).find('#interpretacion_ducto_venenoso_neurosonografia').val(),
                "percentil_flujo_dicto_venenoso"        : $(child).find('#percentil_flujo_dicto_venenoso_neurosonografia').val(),
                "interpretacion_flujo_dicto_venenoso"   : $(child).find('#interpretacion_flujo_dicto_venenoso_neurosonografia').val(),
                "percentil_vena_umbilical"              : $(child).find('#percentil_vena_umbilical_neurosonografia').val(),
                "interpretacion_vena_umbilical"         : $(child).find('#interpretacion_vena_umbilical_neurosonografia').val(),
                "craneo"                                : $(child).find('#craneo_neurosonografia').val(),
                "dolicocefalia"                         : $(child).find('#dolicocefalia_neurosonografia').val(),
                "braquicefalia"                         : $(child).find('#braquicefalia_neurosonografia').val(),
                "craneo_tamano"                         : $(child).find('#craneo_tamano_neurosonografia').val(),
                "craneo_situras"                        : $(child).find('#craneo_situras_neurosonografia').val(),
                "craneo_compresion"                     : $(child).find('#craneo_compresion_neurosonografia').val(),
                "craneo_interhemisferica"               : $(child).find('#craneo_interhemisferica_neurosonografia').val(),
                "craneo_hemisferios"                    : $(child).find('#craneo_hemisferios_neurosonografia').val(),
                "cavum_septum"                          : $(child).find('#cavum_septum_neurosonografia').val(),
                "diametro_anteroposterior"              : $(child).find('#diametro_anteroposterior_neurosonografia').val(),
                "asta_frontales"                        : $(child).find('#asta_frontales_neurosonografia').val(),
                "comunicacion_asta_ateriores"           : $(child).find('#comunicacion_asta_ateriores_neurosonografia').val(),
                "plexo_coroideos"                       : $(child).find('#plexo_coroideos_neurosonografia').val(),
                "presencia_quiste"                      : $(child).find('#presencia_quiste_neurosonografia').val(),
                "presencia_quiste_si"                   : $(child).find('#presencia_quiste_si_neurosonografia').val(),
                "cisura_parietooccipital"               : $(child).find('#cisura_parietooccipital_neurosonografia').val(),
                "atrios_ventruculares"                  : $(child).find('#atrios_ventruculares_neurosonografia').val(),
                "atrio_derecho"                         : $(child).find('#atrio_derecho_neurosonografia').val(),
                "atrio_izquierdo"                       : $(child).find('#atrio_izquierdo_neurosonografia').val(),
                "area_ventricular"                      : $(child).find('#area_ventricular_neurosonografia').val(),
                "talamos_normales"                      : $(child).find('#talamos_normales_neurosonografia').val(),
                "giro_hipocampal_presente"              : $(child).find('#giro_hipocampal_presente_neurosonografia').val(),
                "ventriculo_diametros"                  : $(child).find('#ventriculo_diametros_neurosonografia').val(),
                "ambos_hemisferios_simetricos"          : $(child).find('#ambos_hemisferios_simetricos_neurosonografia').val(),
                "vermis"                                : $(child).find('#vermis_neurosonografia').val(),
                "central_ecogenico"                     : $(child).find('#central_ecogenico_neurosonografia').val(),
                "morfologia_normal"                     : $(child).find('#morfologia_normal_neurosonografia').val(),
                "cisterna_magna"                        : $(child).find('#cisterna_magna_neurosonografia').val(),
                "comunicacion_4_ventriculo"             : $(child).find('#comunicacion_4_ventriculo_neurosonografia').val(),
                "pliegue_nucal"                         : $(child).find('#pliegue_nucal_neurosonografia').val(),
                "liena_intergemisferica"                : $(child).find('#liena_intergemisferica_neurosonografia').val(),
                "asta_anteriores"                       : $(child).find('#asta_anteriores_neurosonografia').val(),
                "hueso_esfenoides"                      : $(child).find('#hueso_esfenoides_neurosonografia').val(),
                "asta_aterior_derecha"                  : $(child).find('#asta_aterior_derecha_neurosonografia').val(),
                "asta_aterior_izquierda"                : $(child).find('#asta_aterior_izquierda_neurosonografia').val(),
                "nucleos_caudado"                       : $(child).find('#nucleos_caudado_neurosonografia').val(),
                "espacio_subaracnoideo"                 : $(child).find('#espacio_subaracnoideo_neurosonografia').val(),
                "espacio_craneocotical"                 : $(child).find('#espacio_craneocotical_neurosonografia').val(),
                "cisura_silvio"                         : $(child).find('#cisura_silvio_neurosonografia').val(),
                "tetorio_situs"                         : $(child).find('#tetorio_situs_neurosonografia').val(),
                "cisura_interhemisferica"               : $(child).find('#cisura_interhemisferica_neurosonografia').val(),
                "cuernos_occipitales"                   : $(child).find('#cuernos_occipitales_neurosonografia').val(),
                "presencia_calloso"                     : $(child).find('#presencia_calloso_neurosonografia').val(),
                "disgenesia"                            : $(child).find('#disgenesia_neurosonografia').val(),
                "saginal_longitud"                      : $(child).find('#saginal_longitud_neurosonografia').val(),
                "saginal_grosor"                        : $(child).find('#saginal_grosor_neurosonografia').val(),
                "csp_cavum"                             : $(child).find('#csp_cavum_neurosonografia').val(),
                "fornix"                                : $(child).find('#fornix_neurosonografia').val(),
                "tronco_encefalico"                     : $(child).find('#tronco_encefalico_neurosonografia').val(),
                "torcula_tendorio"                      : $(child).find('#torcula_tendorio_neurosonografia').val(),
                "cisterna_magna"                        : $(child).find('#cisterna_magna_neurosonografia').val(),
                "doppler_visualiza"                     : $(child).find('#doppler_visualiza_neurosonografia').val(),
                "pericallosa"                           : $(child).find('#pericallosa_neurosonografia').val(),
                "vena_galeno"                           : $(child).find('#vena_galeno_neurosonografia').val(),
                "cisuras_silvio"                        : $(child).find('#cisuras_silvio_neurosonografia').val(),
                "vena_galeno"                           : $(child).find('#vena_galeno_neurosonografia').val(),
                "cisura_occipital"                      : $(child).find('#cisura_occipital_neurosonografia').val(),
                "cisura_calcarina"                      : $(child).find('#cisura_calcarina_neurosonografia').val(),
                "cisura_cingulada"                      : $(child).find('#cisura_cingulada_neurosonografia').val(),
                "cortes_sagitales"                      : $(child).find('#cortes_sagitales_neurosonografia').val(),
                "identifica_cono"                       : $(child).find('#identifica_cono_neurosonografia').val(),
                "observa_osificacion"                   : $(child).find('#observa_osificacion_neurosonografia').val(),
                "integridad_cuerpos"                    : $(child).find('#integridad_cuerpos_neurosonografia').val(),
                "evidencia_mielocele"                   : $(child).find('#evidencia_mielocele_neurosonografia').val(),
                "evidencia_mielocele_descripcion"       : $(child).find('#evidencia_mielocele_descripcion_neurosonografia').val(),
                "evidencia_mielomeningocele"            : $(child).find('#evidencia_mielomeningocele_neurosonografia').val(),
                "evidencia_mielomeningocele_descripcion": $(child).find('#evidencia_mielomeningocele_descripcion_neurosonografia').val(),
                "evidencia_mielosquisis"                : $(child).find('#evidencia_mielosquisis_neurosonografia').val(),
                "evidencia_mielosquisise_descripcion"   : $(child).find('#evidencia_mielosquisise_descripcion_neurosonografia').val(),
                "placenta_numero"                       : $(child).find('#placenta_numero_neurosonografia').val(),
                "placenta_posocion"                     : $(child).find('#placenta_posocion_neurosonografia').val(),
                "placenta_grado"                        : $(child).find('#placenta_grado_neurosonografia').val(),
                "presencia_patologicas"                 : $(child).find('#presencia_patologicas_neurosonografia').val(),
                "areas_infarto"                         : $(child).find('#areas_infarto_neurosonografia').val(),
                "longitud_cervix"                       : $(child).find('#longitud_cervix_neurosonografia').val(),
                "funneling"                             : $(child).find('#funneling_neurosonografia').val(),
                "porcentaje_funneling"                  : $(child).find('#porcentaje_funneling_neurosonografia').val(),
                "sludge"                                : $(child).find('#sludge_neurosonografia').val(),
                "liquido_amniotico"                     : $(child).find('#liquido_amniotico_neurosonografia').val(),
                "clasificacion_liquido_amniotico"       : $(child).find('#clasificacion_liquido_amniotico_neurosonografia').val(),
                "valor_ila"                             : $(child).find('#valor_ila_neurosonografia').val()
            });
        }

        if(examen == 'Ecocardiografia'){
            fetos.push({
                "vitalidad_feto"                     : $(child).find('#vitalidad_feto_ecocardiografia').val(),
                "localizacion_feto"                  : $(child).find('#localizacion_feto_ecocardiografia').val(),
                "presentacion"                       : $(child).find('#presentacion_ecocardiografia').val(),
                "situacion"                          : $(child).find('#situacion_ecocardiografia').val(),
                "posicion"                           : $(child).find('#posicion_ecocardiografia').val(),
                "fcf"                                : $(child).find('#fcf_ecocardiografia').val(),
                "sexo_feto"                          : $(child).find('#sexo_feto_ecocardiografia').val(),
                "dbp_medida"                         : $(child).find('#dbp_medida_ecocardiografia').val(),
                "dbp_semanas"                        : $(child).find('#dbp_semanas_ecocardiografia').val(),
                "cc_medida"                          : $(child).find('#cc_medida_ecocardiografia').val(),
                "cc_semanas"                         : $(child).find('#cc_semanas_ecocardiografia').val(),
                "ca_medida"                          : $(child).find('#ca_medida_ecocardiografia').val(),
                "ca_semanas"                         : $(child).find('#ca_semanas_ecocardiografia').val(),
                "lf_medida"                          : $(child).find('#lf_medida_ecocardiografia').val(),
                "lf_semanas"                         : $(child).find('#lf_semanas_ecocardiografia').val(),
                "fetometria_promedio"                : $(child).find('#fetometria_promedio_ecocardiografia').val(),
                "percentil"                          : $(child).find('#percentil_ecocardiografia').val(),
                "peso_fetal"                         : $(child).find('#peso_fetal_ecocardiografia').val(),
                "fecha_parto"                        : $(child).find('#fecha_parto_ecocardiografia').val(),
                "percentil_ip_medio"                 : $(child).find('#percentil_ip_medio_ecocardiografia').val(),
                "interpretacion_ip_medio"            : $(child).find('#interpretacion_ip_medio_ecocardiografia').val(),
                "percentil_notch_izquierda"          : $(child).find('#percentil_notch_izquierda_ecocardiografia').val(),
                "interpretacion_notch_izquierda"     : $(child).find('#interpretacion_notch_izquierda_ecocardiografia').val(),
                "percentil_notch_derecha"            : $(child).find('#percentil_notch_derecha_ecocardiografia').val(),
                "interpretacion_notch_derecha"       : $(child).find('#interpretacion_notch_derecha_ecocardiografia').val(),
                "percentil_cerebro_placentario"      : $(child).find('#percentil_cerebro_placentario_ecocardiografia').val(),
                "interpretacion_cerebro_placentario" : $(child).find('#interpretacion_cerebro_placentario_ecocardiografia').val(),
                "percentil_arteria_cerebral"         : $(child).find('#percentil_arteria_cerebral_ecocardiografia').val(),
                "interpretacion_arteria_cerebral"    : $(child).find('#interpretacion_arteria_cerebral_ecocardiografia').val(),
                "percentil_arteria_umbilical"        : $(child).find('#percentil_arteria_umbilical_ecocardiografia').val(),
                "interpretacion_arteria_umbilical"   : $(child).find('#interpretacion_arteria_umbilical_ecocardiografia').val(),
                "percentil_flojo_diasotolico"        : $(child).find('#percentil_flojo_diasotolico_ecocardiografia').val(),
                "interpretacion_flojo_diasotolico"   : $(child).find('#interpretacion_flojo_diasotolico_ecocardiografia').val(),
                "percentil_itsmo_aortico"            : $(child).find('#percentil_itsmo_aortico_ecocardiografia').val(),
                "interpretacion_itsmo_aortico"       : $(child).find('#interpretacion_itsmo_aortico_ecocardiografia').val(),
                "percentil_ducto_venenoso"           : $(child).find('#percentil_ducto_venenoso_ecocardiografia').val(),
                "interpretacion_ducto_venenoso"      : $(child).find('#interpretacion_ducto_venenoso_ecocardiografia').val(),
                "percentil_flujo_dicto_venenoso"     : $(child).find('#percentil_flujo_dicto_venenoso_ecocardiografia').val(),
                "interpretacion_flujo_dicto_venenoso": $(child).find('#interpretacion_flujo_dicto_venenoso_ecocardiografia').val(),
                "percentil_vena_umbilical"           : $(child).find('#percentil_vena_umbilical_ecocardiografia').val(),
                "interpretacion_vena_umbilical"      : $(child).find('#interpretacion_vena_umbilical_ecocardiografia').val(),
                "situs"                              : $(child).find('#situs_ecocardiografia').val(),
                "situs_ambiguo"                      : $(child).find('#situs_ambiguo_ecocardiografia').val(),
                "isomerismo"                         : $(child).find('#isomerismo_ecocardiografia').val(),
                "corazon_tamano"                     : $(child).find('#corazon_tamano_ecocardiografia').val(),
                "corazon_posicion"                   : $(child).find('#corazon_posicion_ecocardiografia').val(),
                "corte"                              : $(child).find('#corte_ecocardiografia').val(),
                "auriculas"                          : $(child).find('#auriculas_ecocardiografia').val(),
                "ventriculos"                        : $(child).find('#ventriculos_ecocardiografia').val(),
                "dominancia"                         : $(child).find('#dominancia_ecocardiografia').val(),
                "foramen"                            : $(child).find('#foramen_ecocardiografia').val(),
                "valvula_mitral_implantacion"        : $(child).find('#valvula_mitral_implantacion_ecocardiografia').val(),
                "valvula_mitral_funcionalidad"       : $(child).find('#valvula_mitral_funcionalidad_ecocardiografia').val(),
                "valvula_tricuspide_implantacion"    : $(child).find('#valvula_tricuspide_implantacion_ecocardiografia').val(),
                "valvula_tricuspide_funcionalidad"   : $(child).find('#valvula_tricuspide_funcionalidad_ecocardiografia').val(),
                "tabique_interaventricular"          : $(child).find('#tabique_interaventricular_ecocardiografia').val(),
                "tabique_interaventricular_defecto"  : $(child).find('#tabique_interaventricular_defecto_ecocardiografia').val(),
                "tipo_civ"                           : $(child).find('#tipo_civ_ecocardiografia').val(),
                "tracto_salida_derecho"              : $(child).find('#tracto_salida_derecho_ecocardiografia').val(),
                "tracto_salida_izquierdo"            : $(child).find('#tracto_salida_izquierdo_ecocardiografia').val(),
                "tipo_conexion_ventricular"          : $(child).find('#tipo_conexion_ventricular_ecocardiografia').val(),
                "modo_conexion_ventricular"          : $(child).find('#modo_conexion_ventricular_ecocardiografia').val(),
                "funcion_contractilidad"             : $(child).find('#funcion_contractilidad_ecocardiografia').val(),
                "funcion_rendimiento_cardiaco"       : $(child).find('#funcion_rendimiento_cardiaco_ecocardiografia').val(),
                "funcion_ritmo"                      : $(child).find('#funcion_ritmo_ecocardiografia').val(),
                "funcion_extrasistoles"              : $(child).find('#funcion_extrasistoles_ecocardiografia').val(),
                "numero_vasos"                       : $(child).find('#numero_vasos_ecocardiografia').val(),
                "pulmonar"                           : $(child).find('#pulmonar_ecocardiografia').val(),
                "aorta"                              : $(child).find('#aorta_ecocardiografia').val(),
                "vena_cava"                          : $(child).find('#vena_cava_ecocardiografia').val(),
                "tamano_vasos"                       : $(child).find('#tamano_vasos_ecocardiografia').val(),
                "tamano_vasos_normal"                : $(child).find('#tamano_vasos_normal_ecocardiografia').val(),
                "tamano_vasos_anormal"               : $(child).find('#tamano_vasos_anormal_ecocardiografia').val(),
                "arteria_pulmonar_izquierda"         : $(child).find('#arteria_pulmonar_izquierda_ecocardiografia').val(),
                "aorta_medio"                        : $(child).find('#aorta_medio_ecocardiografia').val(),
                "vena_cava_derecha"                  : $(child).find('#vena_cava_derecha_ecocardiografia').val(),
                "disposicion_normal"                 : $(child).find('#disposicion_normal_ecocardiografia').val(),
                "disposicion_anormal"                : $(child).find('#disposicion_anormal_ecocardiografia').val(),
                "vista_bi_cava"                      : $(child).find('#vista_bi_cava_ecocardiografia').val(),
                "vestibulo_venoso"                   : $(child).find('#vestibulo_venoso_ecocardiografia').val(),
                "arco_aortico"                       : $(child).find('#arco_aortico_ecocardiografia').val(),
                "arco_ductal"                        : $(child).find('#arco_ductal_ecocardiografia').val(),
                "eje_corto_vasos"                    : $(child).find('#eje_corto_vasos_ecocardiografia').val(),
                "eje_corto_centriculos"              : $(child).find('#eje_corto_centriculos_ecocardiografia').val(),
                "placenta_numero"                    : $(child).find('#placenta_numero_ecocardiografia').val(),
                "placenta_posocion"                  : $(child).find('#placenta_posocion_ecocardiografia').val(),
                "placenta_grado"                     : $(child).find('#placenta_grado_ecocardiografia').val(),
                "presencia_patologicas"              : $(child).find('#presencia_patologicas_ecocardiografia').val(),
                "areas_infarto"                      : $(child).find('#areas_infarto_ecocardiografia').val(),
                "longitud_cervix"                    : $(child).find('#longitud_cervix_ecocardiografia').val(),
                "funneling"                          : $(child).find('#funneling_ecocardiografia').val(),
                "porcentaje_funneling"               : $(child).find('#porcentaje_funneling_ecocardiografia').val(),
                "sludge"                             : $(child).find('#sludge_ecocardiografia').val(),
                "liquido_amniotico"                  : $(child).find('#liquido_amniotico_ecocardiografia').val(),
                "clasificacion_liquido_amniotico"    : $(child).find('#clasificacion_liquido_amniotico_ecocardiografia').val(),
                "valor_ila"                          : $(child).find('#valor_ila_ecocardiografia').val()
            });
        }

        if(examen == 'Doppler'){
            fetos.push({
                "vitalidad_feto"                     : $(child).find('#vitalidad_feto_doppler').val(),
                "localizacion_feto"                  : $(child).find('#localizacion_feto_doppler').val(),
                "presentacion"                       : $(child).find('#presentacion_doppler').val(),
                "situacion"                          : $(child).find('#situacion_doppler').val(),
                "posicion"                           : $(child).find('#posicion_doppler').val(),
                "fcf"                                : $(child).find('#fcf_doppler').val(),
                "sexo_feto"                          : $(child).find('#sexo_feto_doppler').val(),
                "dbp_medida"                         : $(child).find('#dbp_medida_doppler').val(),
                "dbp_semanas"                        : $(child).find('#dbp_semanas_doppler').val(),
                "cc_medida"                          : $(child).find('#cc_medida_doppler').val(),
                "cc_semanas"                         : $(child).find('#cc_semanas_doppler').val(),
                "ca_medida"                          : $(child).find('#ca_medida_doppler').val(),
                "ca_semanas"                         : $(child).find('#ca_semanas_doppler').val(),
                "lf_medida"                          : $(child).find('#lf_medida_doppler').val(),
                "lf_semanas"                         : $(child).find('#lf_semanas_doppler').val(),
                "fetometria_promedio"                : $(child).find('#fetometria_promedio_doppler').val(),
                "percentil"                          : $(child).find('#percentil_doppler').val(),
                "peso_fetal"                         : $(child).find('#peso_fetal_doppler').val(),
                "fecha_parto"                        : $(child).find('#fecha_parto_doppler').val(),
                "percentil_ip_medio"                 : $(child).find('#percentil_ip_medio_doppler').val(),
                "interpretacion_ip_medio"            : $(child).find('#interpretacion_ip_medio_doppler').val(),
                "percentil_notch_izquierda"          : $(child).find('#percentil_notch_izquierda_doppler').val(),
                "interpretacion_notch_izquierda"     : $(child).find('#interpretacion_notch_izquierda_doppler').val(),
                "percentil_notch_derecha"            : $(child).find('#percentil_notch_derecha_doppler').val(),
                "interpretacion_notch_derecha"       : $(child).find('#interpretacion_notch_derecha_doppler').val(),
                "percentil_cerebro_placentario"      : $(child).find('#percentil_cerebro_placentario_doppler').val(),
                "interpretacion_cerebro_placentario" : $(child).find('#interpretacion_cerebro_placentario_doppler').val(),
                "percentil_arteria_cerebral"         : $(child).find('#percentil_arteria_cerebral_doppler').val(),
                "interpretacion_arteria_cerebral"    : $(child).find('#interpretacion_arteria_cerebral_doppler').val(),
                "percentil_arteria_umbilical"        : $(child).find('#percentil_arteria_umbilical_doppler').val(),
                "interpretacion_arteria_umbilical"   : $(child).find('#interpretacion_arteria_umbilical_doppler').val(),
                "percentil_flojo_diasotolico"        : $(child).find('#percentil_flojo_diasotolico_doppler').val(),
                "interpretacion_flojo_diasotolico"   : $(child).find('#interpretacion_flojo_diasotolico_doppler').val(),
                "percentil_itsmo_aortico"            : $(child).find('#percentil_itsmo_aortico_doppler').val(),
                "interpretacion_itsmo_aortico"       : $(child).find('#interpretacion_itsmo_aortico_doppler').val(),
                "percentil_ducto_venenoso"           : $(child).find('#percentil_ducto_venenoso_doppler').val(),
                "interpretacion_ducto_venenoso"      : $(child).find('#interpretacion_ducto_venenoso_doppler').val(),
                "percentil_flujo_dicto_venenoso"     : $(child).find('#percentil_flujo_dicto_venenoso_doppler').val(),
                "interpretacion_flujo_dicto_venenoso": $(child).find('#interpretacion_flujo_dicto_venenoso_doppler').val(),
                "percentil_vena_umbilical"           : $(child).find('#percentil_vena_umbilical_doppler').val(),
                "interpretacion_vena_umbilical"      : $(child).find('#interpretacion_vena_umbilical_doppler').val(),
                "semanas"                            : $(child).find('#semanas_doppler').val(),
                "movimiento_respiratorios"           : $(child).find('#movimiento_respiratorios_doppler').val(),
                "tono_fetal"                         : $(child).find('#tono_fetal_doppler').val(),
                "movimiento_corporales"              : $(child).find('#movimiento_corporales_doppler').val(),
                "liquido_amoniotico"                 : $(child).find('#liquido_amoniotico_doppler').val(),
                "integridad_cardiaca"                : $(child).find('#integridad_cardiaca_doppler').val(),
                "examen_nst"                         : $(child).find('#examen_nst_doppler').val(),
                "analisis_nst"                       : $(child).find('#analisis_nst_doppler').val(),
                "datos_nst"                          : $(child).find('#datos_nst_doppler').val(),
                "examen_maduracion"                  : $(child).find('#examen_maduracion_doppler').val(),
                "indice_maduracion_torax"            : $(child).find('#indice_maduracion_torax_doppler').val(),
                "indice_maduracion_basal"            : $(child).find('#indice_maduracion_basal_doppler').val(),
                "indice_maduracion_pulmonar"         : $(child).find('#indice_maduracion_pulmonar_doppler').val(),
                "riesgo_distres"                     : $(child).find('#riesgo_distres_doppler').val(),
                "examen_oportunidad"                 : $(child).find('#examen_oportunidad_doppler').val(),
                "parto_espontaneo"                   : $(child).find('#parto_espontaneo_doppler').val(),
                "cesarea_espontaneo"                 : $(child).find('#cesarea_espontaneo_doppler').val(),
                "cesarea_induccion"                  : $(child).find('#cesarea_induccion_doppler').val(),
                "placenta_numero"                    : $(child).find('#placenta_numero_doppler').val(),
                "placenta_posocion"                  : $(child).find('#placenta_posocion_doppler').val(),
                "placenta_grado"                     : $(child).find('#placenta_grado_doppler').val(),
                "presencia_patologicas"              : $(child).find('#presencia_patologicas_doppler').val(),
                "areas_infarto"                      : $(child).find('#areas_infarto_doppler').val(),
                "longitud_cervix"                    : $(child).find('#longitud_cervix_doppler').val(),
                "funneling"                          : $(child).find('#funneling_doppler').val(),
                "porcentaje_funneling"               : $(child).find('#porcentaje_funneling_doppler').val(),
                "sludge"                             : $(child).find('#sludge_doppler').val(),
                "liquido_amniotico"                  : $(child).find('#liquido_amniotico_doppler').val(),
                "clasificacion_liquido_amniotico"    : $(child).find('#clasificacion_liquido_amniotico_doppler').val(),
                "valor_ila"                          : $(child).find('#valor_ila_doppler').val()

            });
        }
    }


</script>

@endpush
