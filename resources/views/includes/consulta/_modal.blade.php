<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
<div class="modal fade" id="modalUpdateAtencionPrenatal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['url' => '', 'class' => 'consulta-form form-examen form-horizontal']) !!}
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label>Fecha y Hora</label>
                            <div>
                                <input type="text" class="form-control" name="date" id="date_prenatal" readonly value="{{ date('Y-m-d h:i a') }}">
                            </div>
                        </div>
                         <div class="col-sm-4">
                            <label>Edad gestacional por ulrasonido</label>
                            <div>
                                <input type="text" class="form-control" name="edad_gestacional" id="edad_gestacinal_prenatal" value="De historia clinica" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Consutal de atencion prenatal NO</label>
                            <div>
                                <input type="text" class="form-control" name="numero" id="numero_prenatal" readonly value="{{ \App\Models\Prenatal::count() + 1 }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>Diagnostico Previo</label>
                            <div>
                                <textarea class="form-control" name="diagnostico_previo" id="diagnostico_previo_prenatal"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label>FC</label>
                            <div>
                                <input type="number" class="form-control" name="signos_vitales_fc" id="signos_vitales_fc_prenatal" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>FR</label>
                            <div>
                                <input type="number" class="form-control" name="signos_vitales_fr" id="signos_vitales_fr_prenatal" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>PA</label>
                            <div>
                                <input type="number" class="form-control" name="signos_vitales_pa" id="signos_vitales_pa_prenatal" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Peso Actual</label>
                            <div>
                                <input type="number" class="form-control" name="peso_actual" id="peso_actual_prenatal" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Incremente de peso</label>
                            <div>
                                <input type="text" class="form-control" name="incremento_peso" id="incremento_peso_prenatal" readonly value="calcular con el peso anteriro de historia clinica">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>Subjetivo</label>
                            <div>
                                <textarea class="form-control" name="subjetivo" id="subjetivo_prenatal"></textarea>
                            </div>
                        </div>
                    </div>
                    <p>Objetivo</p>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label>Estado General</label>
                            <div>
                                <select class="form-control" name="estado_general" id="estado_general_prenatal">
                                    <option value="Conciente">Conciente</option>
                                    <option value="Orientada">Orientada</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Alteraciones Hemodinámicas</label>
                            <div>
                                <select class="form-control" name="alteraciones_hermodinamicas" id="alteraciones_hermodinamicas_prenatal">
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Alteraciones Cardiopulmonar</label>
                            <div>
                                <select class="form-control" name="alteraciones_cardiopulmonar" id="alteraciones_cardiopulmonar_prenatal">
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Pezon y Areola</label>
                            <div>
                                <select class="form-control" name="pezon_areola" id="pezon_areola_prenatal">
                                    <option value="Invertido">Invertido</option>
                                    <option value="Normal" selected>Normal</option>
                                    <option value="Plano">Plano</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Movimientos Fetales</label>
                            <div>
                                <select class="form-control" name="movimientos_fetales" id="movimientos_fetales_prenatal">
                                    <option value="Ausentes">Ausentes</option>
                                    <option value="Presentes">Presentes</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>FCF por minuto</label>
                            <div>
                                <input type="text" class="form-control" name="fcf_minuto" id="fcf_minuto_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Actividad Uterina</label>
                            <div>
                                <input type="text" class="form-control" name="actividad_uterina" id="actividad_uterina_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Utero Grávido Abdominal</label>
                            <div>
                                <select class="form-control" name="utero_gravido" id="utero_gravido_prenatal">
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Utero Intrapelvico</label>
                            <div>
                                <select class="form-control" name="utero_intrapelvico" id="utero_intrapelvico_prenatal">
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Peristalsis</label>
                            <div>
                                <select class="form-control" name="peristalsis" id="peristalsis_prenatal">
                                    <option value="Ausente">Ausente</option>
                                    <option value="Disminuido">Disminuido</option>
                                    <option value="Presente">Presente</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>AFU (cms)</label>
                            <div>
                                <input type="text" class="form-control" name="afu" id="afu_prenatal">
                            </div>
                        </div>
                    </div>
                    <p>Ginecologico</p>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label>Examen Ginecologico</label>
                            <div>
                                <select class="form-control" name="examen_ginecologico" id="examen_ginecologico_prenatal" data-target='examen_ginecologico_si_form'>
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                            </div>
                        </div>
                        <div class="examen_ginecologico_si_form" style="display: none;">
                            <div class="col-sm-3">
                                <label>Genitales externos</label>
                                <div>
                                    <select class="form-control" name="genitales_externos" id="genitales_externos_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="Anormales">Anormales</option>
                                        <option value="Normales" selected>Normales</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Vagina Normo Térmica</label>
                                <div>
                                    <select class="form-control" name="vagina_normo_termica" id="vagina_normo_termica_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Vagina Normo Elástica</label>
                                <div>
                                    <select class="form-control" name="vagina_normo_elastica" id="vagina_normo_elastica_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Lesiones</label>
                                <div>
                                    <select class="form-control" name="vagina_lesiones" id="vagina_lesiones_prenatal" data-target='vagina_lesiones_si_form'>
                                        <option value="">Selecione Uno</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 vagina_lesiones_si_form" style="display: none">
                                <label>Describa Lesiones</label>
                                <div>
                                   <input type="text" class="form-control" name="vagina_lesiones_si" id="vagina_lesiones_si_prenatal">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Leucorrea</label>
                                <div>
                                    <select class="form-control" name="vagina_leucorrea" id="vagina_leucorrea_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Fetidez</label>
                                <div>
                                    <select class="form-control" name="vagina_fetidez" id="vagina_fetidez_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Sangrado</label>
                                <div>
                                    <select class="form-control" name="vagina_sangrado" id="vagina_sangrado_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Hidrorrea</label>
                                <div>
                                    <select class="form-control" name="vagina_hidrorrea" id="vagina_hidrorrea_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Cervix</label>
                                <div>
                                    <select class="form-control" name="vagina_cervix" id="vagina_cervix_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="Central">Central</option>
                                        <option value="Cerrado">Cerrado</option>
                                        <option value="Intermedio">Intermedio</option>
                                        <option value="Permeable">Permeable</option>
                                        <option value="Posterior">Posterior</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Consistencia</label>
                                <div>
                                    <select class="form-control" name="vagina_consistencia" id="vagina_consistencia_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="Borramiento">Borramiento</option>
                                        <option value="Dilatacion">Dilatacion</option>
                                        <option value="Firme">Firme</option>
                                        <option value="Reblandecido">Reblandecido</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Calotas</label>
                                <div>
                                    <select class="form-control" name="vagina_calotas" id="vagina_calotas_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Membranas Integras</label>
                                <div>
                                    <select class="form-control" name="vagina_membranas_integras" id="vagina_membranas_integras_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Calotas Solidas</label>
                                <div>
                                    <select class="form-control" name="vagina_calotas_solidas" id="vagina_calotas_solidas_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Plano</label>
                                <div>
                                    <select class="form-control" name="vagina_plano" id="vagina_plano_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="I">I</option>
                                        <option value="II">II</option>
                                        <option value="III">III</option>
                                        <option value="IV">IV</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Pelvis</label>
                                <div>
                                    <select class="form-control" name="vagina_pelvis" id="vagina_pelvis_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Desproporcion Cefalopelvica</label>
                                <div>
                                    <select class="form-control" name="vagina_desproporcion_cefalopelvica" id="vagina_desproporcion_cefalopelvica_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="Estrecho Superior">Estrecho Superior</option>
                                        <option value="Inferior">Inferior</option>
                                        <option value="Medio">Medio</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Miembros Inferiores Edema</label>
                                <div>
                                    <select class="form-control" name="vagina_miembros_inferiores_edema" id="vagina_miembros_inferiores_edema_prenatal" data-target='vagina_miembros_inferiores_edema_si_form'>
                                        <option value="">Selecione Uno</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 vagina_miembros_inferiores_edema_si_form" style="display: none">
                                <label>Miembros Inferiores Edema Cual</label>
                                <div>
                                    <select class="form-control" name="vagina_miembros_inferiores_edema_si" id="vagina_miembros_inferiores_edema_si_prenatal">
                                        <option value="">Selecione Uno</option>
                                        <option value="+">+</option>
                                        <option value="++">++</option>
                                        <option value="+++">+++</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Neurológico Conservado</label>
                                <div>
                                    <select class="form-control" name="vagina_ceurologico_conservado" id="vagina_ceurologico_conservado_prenatal" data-target='vagina_ceurologico_conservado_si_form'>
                                        <option value="">Selecione Uno</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 vagina_ceurologico_conservado_si_form" style="display: none">
                                <label>Alteracion</label>
                                <div>
                                   <input class="form-control" type="text" name="vagina_ceurologico_conservado_si" id="vagina_ceurologico_conservado_si">
                                </div>
                            </div>
                       </div>

                    </div>
                   <p>Examen de laboratorio</p>
                   <div class="form-group">
                        <div class="col-sm-3">
                            <label>Porta Resultados</label>
                            <div>
                                <select name="porta_examen" id="porta_examen_prenatal" class="form-control">
                                    <option value="">Seleccione Uno</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Leucocitos xmm3</label>
                            <div>
                               <input type="text" class="form-control" name="leocitos" id="leocitos_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Segmentos %</label>
                            <div>
                               <input type="text" class="form-control" name="segmentos" id="segmentos_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Linfocitos %</label>
                            <div>
                               <input type="text" class="form-control" name="linfocitos" id="linfocitos_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Hemoglobina gr/dl</label>
                            <div>
                               <input type="text" class="form-control" name="hemoglobina" id="hemoglobina_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Hematocrito %</label>
                            <div>
                               <input type="text" class="form-control" name="hematocrito" id="hematocrito_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Eosinofilos</label>
                            <div>
                               <input type="text" class="form-control" name="eosinofilos" id="eosinofilos_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Resticulocitos</label>
                            <div>
                               <input type="text" class="form-control" name="resticulocitos" id="resticulocitos_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Glicemia gr/dl</label>
                            <div>
                               <input type="text" class="form-control" name="glicemia" id="glicemia_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Glicemia gr/dl</label>
                            <div>
                               <input type="text" class="form-control" name="glicemia" id="glicemia_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>1 Hr Pospandrial gr/dl</label>
                            <div>
                               <input type="text" class="form-control" name="pospandrial_una" id="pospandrial_una_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>2 Hr Pospandrial gr/dl</label>
                            <div>
                               <input type="text" class="form-control" name="pospandrial_dos" id="pospandrial_dos_prenatal">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label>Creatinina</label>
                            <div>
                               <input type="text" class="form-control" name="creatinina" id="creatinina_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>EGO Leucocitos</label>
                            <div>
                               <input type="text" class="form-control" name="ego_leucocitos" id="ego_leucocitos_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Nitritos</label>
                            <div>
                               <input type="text" class="form-control" name="nitritos" id="nitritos_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Glucosa</label>
                            <div>
                               <input type="text" class="form-control" name="glucosa" id="glucosa_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Proteinas</label>
                            <div>
                               <input type="text" class="form-control" name="proteinas" id="proteinas_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Cilindros</label>
                            <div>
                               <input type="text" class="form-control" name="cilindros" id="cilindros_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Papanocloau</label>
                            <div>
                               <select class="form-control" name="papanocloau" id="papanocloau_renatal" data-target='papanocloau_si_form'>
                                   <option value="">Selecione Uno</option>
                                   <option value="No">No</option>
                                   <option value="Si">Si</option>
                               </select>
                            </div>
                        </div>
                        <div class="col-sm-3 papanocloau_si_form" style="display: none">
                            <label>Fecha Papanocloau</label>
                            <div>
                               <input type="date" class="form-control" name="fecha_papanocloau" id="fecha_papanocloau_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3 papanocloau_si_form" style="display: none">
                            <label>Resultado Papanocloau</label>
                            <div>
                               <input type="text" class="form-control" name="resultado_papanocloau" id="resultado_papanocloau_prenatal">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label>Cultivos Vaginales</label>
                            <div>
                               <input type="text" class="form-control" name="cultivos_vaginales" id="cultivos_vaginales_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>RPR</label>
                            <div>
                                <select class="form-control" name="rpr_positivo" id="rpr_positivo_prenatal">
                                   <option value="">Selecione Uno</option>
                                   <option value="Negativo">Negativo</option>
                                   <option value="Positivo">Positivo</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>VIH</label>
                            <div>
                                <select class="form-control" name="vih_positivo" id="vih_positivo_prenatal">
                                   <option value="">Selecione Uno</option>
                                   <option value="Negativo">Negativo</option>
                                   <option value="Positivo">Positivo</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Urocultivo</label>
                            <div>
                               <select class="form-control" name="Urocultivo" id="Urocultivo_renatal">
                                   <option value="">Selecione Uno</option>
                                   <option value="Sin Crecimiento Bacteriano">Sin Crecimiento Bacteriano</option>
                                   <option value="Con Crecimiento Bacteriano">Con Crecimiento Bacteriano</option>
                               </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Transaminasas</label>
                            <div>
                               <input type="text" class="form-control" name="transaminasas" id="transaminasas_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Billiruinas</label>
                            <div>
                               <input type="text" class="form-control" name="billiruinas" id="billiruinas_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>LDH</label>
                            <div>
                               <input type="text" class="form-control" name="ldh" id="ldh_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>TP</label>
                            <div>
                               <input type="text" class="form-control" name="tp" id="tp_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>TPT</label>
                            <div>
                               <input type="text" class="form-control" name="tpt" id="tpt_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Fibrinogeno</label>
                            <div>
                               <input type="text" class="form-control" name="fibrinogeno" id="fibrinogeno_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Acido Urico</label>
                            <div>
                               <input type="text" class="form-control" name="acido_urico" id="acido_urico_prenatal">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label>Ultrasonido</label>
                            <div>
                               <select class="form-control" name="ultrasonido" id="ultrasonido_renatal" data-target='ultrasonido_si_form'>
                                   <option value="">Selecione Uno</option>
                                   <option value="No">No</option>
                                   <option value="Si">Si</option>
                               </select>
                            </div>
                        </div>
                        <div class="col-sm-9 ultrasonido_si_form" style="display: none">
                            <label>Ultrasonido Descripcion</label>
                            <div>
                                <textarea class="form-control" name="ultrasonido_si" id="ultrasonido_si_prenatal"></textarea>
                            </div>
                        </div>
                    </div>
                    <p>Edad Gestional</p>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label>Semanas</label>
                            <div>
                               <input type="number" class="form-control" name="edad_gestional_semanas" id="edad_gestional_semanas_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Dias</label>
                            <div>
                               <input type="number" class="form-control" name="edad_gestional_dias" id="edad_gestional_dias_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>ILA</label>
                            <div>
                               <input type="number" class="form-control" name="ila" id="ila_prenatal">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Placenta Grado</label>
                            <div>
                               <select class="form-control" name="planceta_grado" id="planceta_grado_renatal">
                                   <option value="">Selecione Uno</option>
                                   <option value="0">0</option>
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                               </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Doppler Normal</label>
                            <div>
                               <select class="form-control" name="doppler_normal" id="doppler_normal_renatal">
                                   <option value="">Selecione Uno</option>
                                   <option value="No">No</option>
                                   <option value="Si">Si</option>
                               </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Incremento de Peso Materno</label>
                            <div>
                               <select class="form-control" name="incremento_peso_materno" id="incremento_peso_materno_renatal">
                                   <option value="">Selecione Uno</option>
                                   <option value="Adecuado">Adecuado</option>
                                   <option value="No Adecuado">No Adecuado</option>
                               </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Incremento de Curva Fetal</label>
                            <div>
                               <select class="form-control" name="incremento_curva_fetal" id="incremento_curva_fetal_renatal">
                                   <option value="">Selecione Uno</option>
                                   <option value="Adecuado">Adecuado</option>
                                   <option value="No Adecuado">No Adecuado</option>
                               </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Maduración Pulmonar</label>
                            <div>
                               <select class="form-control" name="maduracion_pulmonar" id="maduracion_pulmonar_renatal">
                                   <option value="">Selecione Uno</option>
                                   <option value="No">No</option>
                                   <option value="Si">Si</option>
                               </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Semanas</label>
                            <div>
                               <input type="number" class="form-control" name="maduracion_pulmonal_semanas" id="maduracion_pulmonal_semanas_prenatal">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                         <div class="col-sm-12">
                            <label>Comentarios</label>
                            <div>
                               <textarea class="form-control" name="comentario" id="comentario_prenatal"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label>Plan Medico</label>
                            <div>
                                <select class="form-control selectpicker" name="plan_medico[]" id="plan_medico_prenatal" data-live-search="true" data-size="10" multiple >
                                    <option value="Dieta rica en Proteinas y fibra">Dieta rica en Proteinas y fibra</option>
                                    <option value="Vacuna DT. Dosis 0.5 ml">Vacuna DT. Dosis 0.5 ml</option>
                                    <option value="Betametasona 12mg Intramuscular cada 24 horas por 2 dosis">Betametasona 12mg Intramuscular cada 24 horas por 2 dosis</option>
                                    <option value="Dexametasona 12mg Intramuscular STAT dosis unica">Dexametasona 12mg Intramuscular STAT dosis unica</option>
                                    <option value="Enantyum sobre liquido. 1 sobre oral cada 8 hrs por 5 dias">Enantyum sobre liquido. 1 sobre oral cada 8 hrs por 5 dias</option>
                                    <option value="Fixim Tableta 400mga 1tab oral diario por 7 dias">Fixim Tableta 400mga 1tab oral diario por 7 dias</option>
                                    <option value="Dimenhidrinato ampolla 50mg 1 ampolla Intramuscular cada 8 horas">Dimenhidrinato ampolla 50mg 1 ampolla Intramuscular cada 8 horas</option>
                                    <option value="Fluconazol 150mg 1 capsula oral semanal por 4 semanas">Fluconazol 150mg 1 capsula oral semanal por 4 semanas</option>
                                    <option value="Doxiciclina 100mg 1 tableta cada 12 horas por 10 dias">Doxiciclina 100mg 1 tableta cada 12 horas por 10 dias</option>
                                    <option value="Ciprofloxacina 500 mg 1tableta oral cada 6 horas por 7 dias">Ciprofloxacina 500 mg 1tableta oral cada 6 horas por 7 dias</option>
                                    <option value="Dicloxacilina 500mg 1tableta oral cada 8 8 horas por 7 dias">Dicloxacilina 500mg 1tableta oral cada 8 8 horas por 7 dias</option>
                                    <option value="Clindaminica 300mg 1 tableta oral cada 8 horas por 7 dias">Clindaminica 300mg 1 tableta oral cada 8 horas por 7 dias</option>
                                    <option value="Progestin Depot 250 mg 1 ampolla Intramuscular  STAT y luego semanal por 2 semanas">Progestin Depot 250 mg 1 ampolla Intramuscular  STAT y luego semanal por 2 semanas</option>
                                    <option value="Progestin 100mg 1 ampolla Intramuscular STAT y luego semanal por 2 semanas">Progestin 100mg 1 ampolla Intramuscular STAT y luego semanal por 2 semanas</option>
                                    <option value="Gesemet 1 tableta oral cada 8 horas">Gesemet 1 tableta oral cada 8 horas</option>
                                    <option value="Azitroaminica 500mg 1 tableta oral diario por 5 dias">Azitroaminica 500mg 1 tableta oral diario por 5 dias</option>
                                    <option value="Albendazol 400mg 1 tableta oral dosis unica">Albendazol 400mg 1 tableta oral dosis unica</option>
                                    <option value="Acido Folico 5 mg 1 tableta diario 9 de la noche oral todo el embarazo">Acido Folico 5 mg 1 tableta diario 9 de la noche oral todo el embarazo</option>
                                    <option value="Aspirina 100 mg 1 tableta diario 9 de la noche oral">Aspirina 100 mg 1 tableta diario 9 de la noche oral</option>
                                    <option value="Aspartato de arginina 1 vial diario oral 9 de la noche">Aspartato de arginina 1 vial diario oral 9 de la noche</option>
                                    <option value="Multivitaminas prenatal 1 tableta diario oral">Multivitaminas prenatal 1 tableta diario oral</option>
                                    <option value="Dimenhidrinato tableta de 50 mg oral. 1 tableta cada 8 horas por 5 dias">Dimenhidrinato tableta de 50 mg oral. 1 tableta cada 8 horas por 5 dias</option>
                                    <option value="Nitrofurantoina 100 mg 1 tableta cada 12 horas por 10 dias">Nitrofurantoina 100 mg 1 tableta cada 12 horas por 10 dias</option>
                                    <option value="Spasmo urolong 1 tableta oral cada 12 horas por 7 dias">Spasmo urolong 1 tableta oral cada 12 horas por 7 dias</option>
                                    <option value="Cetriler 1 tableta cada 12 horas por 5 dias">Cetriler 1 tableta cada 12 horas por 5 dias</option>
                                    <option value="Progesterona 200 mg vaginal. 9 de la noche. 1 ovulo diario">Progesterona 200 mg vaginal. 9 de la noche. 1 ovulo diario</option>
                                    <option value="Progesterona 200 mg oral. 9 d ela noche. 1 capsula diario">Progesterona 200 mg oral. 9 d ela noche. 1 capsula diario</option>
                                    <option value="Indometacina 100 mg diario supositorio (rectal) antes de dormir por 10 dias">Indometacina 100 mg diario supositorio (rectal) antes de dormir por 10 dias</option>
                                    <option value="Ketorolac 60 mg intravenoso 1 ampolla cada 8 horas">Ketorolac 60 mg intravenoso 1 ampolla cada 8 horas</option>
                                    <option value="Clindamicina 100 mg ovulos. 1 diario via vaginal por 7 dias">Clindamicina 100 mg ovulos. 1 diario via vaginal por 7 dias</option>
                                    <option value="Clindamicina 100 mg ovulo. Via vaginal Lunes y viernes">Clindamicina 100 mg ovulo. Via vaginal Lunes y viernes</option>
                                    <option value="Anara 1 tableta oral cada 8 horas">Anara 1 tableta oral cada 8 horas</option>
                                    <option value="Aceite mineral 1 cucharada (10 ml) cada 8 horas por 3 dias">Aceite mineral 1 cucharada (10 ml) cada 8 horas por 3 dias</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label>Examenes de Laboratorio</label>
                            <div>
                                <select class="form-control selectpicker" name="examen_laboratorio[]" id="examen_laboratorio_prenatal" data-live-search="true" data-size="10" multiple>
                                    <option value="BHC">BHC</option>
                                    <option value="Urocultivo">Urocultivo</option>
                                    <option value="TGO">TGO</option>
                                    <option value="TGP">TGP</option>
                                    <option value="LDH">LDH</option>
                                    <option value="Creatinina">Creatinina</option>
                                    <option value="TP">TP</option>
                                    <option value="TPT">TPT</option>
                                    <option value="Fibrinogeno">Fibrinogeno</option>
                                    <option value="Acido Urico">Acido Urico</option>
                                    <option value="Tipo y RH">Tipo y RH</option>
                                    <option value="Glucosa en ayuno">Glucosa en ayuno</option>
                                    <option value="Glucosa 1hr pospandrial">Glucosa 1hr pospandrial</option>
                                    <option value="Creatinina">Creatinina</option>
                                    <option value="Curva de Tolerancia oral a la Glucosa 75 gramos. Ayuno, 1 hora y 2 horas pospandrial">Curva de Tolerancia oral a la Glucosa 75 gramos. Ayuno, 1 hora y 2 horas pospandrial</option>
                                    <option value="RPR">RPR</option>
                                    <option value="VIH">VIH</option>
                                    <option value="Progesterona">Progesterona</option>
                                    <option value="Estrogeno">Estrogeno</option>
                                    <option value="Procalcitonina">Procalcitonina</option>
                                    <option value="CA 125">CA 125</option>
                                    <option value="TSH">TSH</option>
                                    <option value="T4">T4</option>
                                    <option value="T3">T3</option>
                                    <option value="T4 Libre">T4 Libre</option>
                                    <option value="Alfafetoproteina">Alfafetoproteina</option>
                                    <option value="CA 119">CA 119</option>
                                    <option value="FSH">FSH</option>
                                    <option value="LH">LH</option>
                                    <option value="Estradiol">Estradiol</option>
                                    <option value="Protenias en orina de 24hr">Protenias en orina de 24hr</option>
                                    <option value="HCG subunidad Beta">HCG subunidad Beta</option>
                                    <option value="Combs indirecto ">Combs indirecto </option>
                                    <option value="Perfil TORCH">Perfil TORCH</option>
                                    <option value="Test de avidez IgG para Toxoplasmosis">Test de avidez IgG para Toxoplasmosis</option>
                                    <option value="Toxoplasmosis Ig G Ig M">Toxoplasmosis Ig G Ig M</option>
                                    <option value="Anticardiolipina">Anticardiolipina</option>
                                    <option value="B-2 glicoproteina">B-2 glicoproteina</option>
                                    <option value="Anti DNA">Anti DNA</option>
                                    <option value="Bilirrubinas totales y fraccionadas">Bilirrubinas totales y fraccionadas</option>
                                    <option value="Anti SM">Anti SM</option>
                                    <option value="Anti RO">Anti RO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalUpdatedConsultaGinecologica">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['url' => '', 'class' => 'consulta-form form-examen form-horizontal']) !!}
                   <div class="form-group">
                        <div class="col-sm-4">
                            <label>Fecha y Hora</label>
                            <div>
                                <input type="text" class="form-control" name="date" id="date_ginecologica" readonly value="{{ date('Y-m-d h:i a') }}">
                            </div>
                        </div>
                         <div class="col-sm-4">
                            <label>Edad gestacional por ulrasonido</label>
                            <div>
                                <input type="text" class="form-control" name="edad_gestacional" id="edad_gestacinal_ginecologica" value="De historia clinica" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Consutal de atencion prenatal NO</label>
                            <div>
                                <input type="text" class="form-control" name="numero" id="numero_ginecologica" readonly value="{{ \App\Models\Prenatal::count() + 1 }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>Diagnostico Previo</label>
                            <div>
                                <textarea class="form-control" name="diagnostico_previo" id="diagnostico_previo_ginecologica"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label>FC</label>
                            <div>
                                <input type="number" class="form-control" name="signos_vitales_fc" id="signos_vitales_fc_ginecologica" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>FR</label>
                            <div>
                                <input type="number" class="form-control" name="signos_vitales_fr" id="signos_vitales_fr_ginecologica" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>PA</label>
                            <div>
                                <input type="number" class="form-control" name="signos_vitales_pa" id="signos_vitales_pa_ginecologica" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Peso Actual</label>
                            <div>
                                <input type="number" class="form-control" name="peso_actual" id="peso_actual_ginecologica" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Incremente de peso</label>
                            <div>
                                <input type="text" class="form-control" name="incremento_peso" id="incremento_peso_ginecologica" readonly value="calcular con el peso anteriro de historia clinica">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>Subjetivo</label>
                            <div>
                                <textarea class="form-control" name="subjetivo" id="subjetivo_ginecologica"></textarea>
                            </div>
                        </div>
                    </div>
                    <p>Objetivo</p>
                    <div class="form-group">
                        <div class="col-md-6">
                           <label>Estado Genral</label>
                           <div>
                               <input type="text" name="estado_general" id="estado_general_ginecologica" class="form-control" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                            <label>Cardioplumonar</label>
                            <div>
                                <input type="text" name="cardioplumonar" id="cardioplumonar_ginecologica" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <p>Ginecologico</p>
                    <div class="form-group">
                        <div class="col-md-6">
                           <label>Genitales Externos</label>
                           <div>
                               <input type="text" name="genitales_externos" id="genitales_externos_ginecologica" class="form-control" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                            <label>Cervix Posicion Y Consistencia</label>
                            <div>
                                <input type="text" name="cervix" id="cervix_ginecologica" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                           <label>Examenes De Laboratorio</label>
                           <div>
                                <select name="examenes" id="examenes_gicecologica" class="form-control" required>
                                    <option value="">Selecione Uno</option>
                                    <option value="Creatinina">Creatinina</option>
                                    <option value="Cultivos Vaginales">Cultivos Vaginales</option>
                                    <option value="Ego">Ego</option>
                                    <option value="Glicemia">Glicemia</option>
                                    <option value="Papanicolau">Papanicolau</option>
                                </select>
                           </div>
                        </div>
                        <div class="col-md-6">
                            <label>Ultrasonido</label>
                            <div>
                                <input type="text" name="ultrasonido" id="ultrasonido_ginecologica" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                           <label>Comentarios</label>
                           <div>
                               <textarea name="comentarios" id="comentarios_ginecologica" class="form-control" required></textarea>
                           </div>
                        </div>
                        <div class="col-md-6">
                            <label>Plan</label>
                            <div>
                                <textarea name="plan" id="plan_ginecologica" class="form-control" required></textarea>
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalUpdatedEcocardiografia">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['url' => '', 'class' => 'consulta-form form-examen form-horizontal']) !!}
                   <div class="form-group">
                        <div class="col-md-3">
                            <label>Edad</label>
                            <div>
                                <input type="number" name="edad" id="edad_ecocardiografia" class="form-control" required>
                            </div>
                        </div>
                         <div class="col-md-3">
                            <label>Medico</label>
                            <div>
                                <input type="text" class="form-control" value="{{ \Auth::user()->name }}">
                            </div>
                        </div>
                         <div class="col-md-3">
                            <label>Fecha</label>
                            <div>
                                <input type="text" name="date" id="date_ecocardiografia" class="form-control" value="{{ date('Y-m-d h:i a') }}">
                            </div>
                        </div>
                         <div class="col-md-3">
                            <label>Paridad</label>
                            <div>
                                <input type="text" name="paridad" id="paridad_ecocardiografia" class="form-control" required>
                            </div>
                        </div>
                   </div>
                   <p>Reporte De Ecocardiografia</p>
                   <p><b>Se realizó estudio ultrasonográfico en tiempo real, observando:</b></p>
                   <div class="form-group">
                       <div class="col-md-3">
                           <label>Feto</label>
                           <div>
                               <select name="feto" id="feto_ecocardiografia" class="form-control" required>
                                   <option value="Unico">Unico</option>
                                   <option value="Gemelo">Gemelo</option>
                                   <option value="A">A</option>
                                   <option value="B">B</option>
                                   <option value="C">C</option>
                               </select>
                           </div>
                       </div>
                       <div class="col-md-3">
                           <label>Presentacion</label>
                           <div>
                               <select name="presentacion" id="presentacion_ecocardiografia" class="form-control" required>
                                   <option value="Cefálico">Cefálico</option>
                                   <option value="Pélvico">Pélvico</option>
                               </select>
                           </div>
                       </div>
                       <div class="col-md-3">
                           <label>Situacion</label>
                           <div>
                               <select name="situacion" id="situacion_ecocardiografia" class="form-control" required>
                                   <option value="Longitudinal">Longitudinal</option>
                                   <option value="Transverso Dorso Superior">Transverso Dorso Superior</option>
                                   <option value="Transverso Dorso Inferior">Transverso Dorso Inferior</option>
                               </select>
                           </div>
                       </div>
                        <div class="col-md-3">
                           <label>Posicion</label>
                           <div>
                               <select name="posicion" id="posicion_ecocardiografia" class="form-control" required>
                                   <option value="Dorso Izquierdo">Dorso Izquierdo</option>
                                   <option value="Dorso Derecho">Dorso Derecho</option>
                               </select>
                           </div>
                       </div>
                       <div class="col-md-3">
                           <label>FCF (latidos por minuto)</label>
                           <div>
                              <input type="number" name="fcf" id="fcf_ecocardiografia" class="form-control" required>
                           </div>
                       </div>
                    </div>
                    <p>Corte Axial De Abdomen</p>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Situs</label>
                            <div>
                                <select name="situs" id="situs_ecocardiografia" class="form-control" required>
                                    <option value="solitus viscero atrial">solitus viscero atrial</option>
                                    <option value="Situs Inversus">Situs Inversus</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Situs Ambiguo</label>
                            <div>
                                <select name="situs" id="situs_ecocardiografia" class="form-control" required data-target='situs_ecocardiografia_si_form'>
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 situs_ecocardiografia_si_form" style="display: none">
                            <label>Isomerismo</label>
                            <div>
                                <select name="isomerismo" id="isomerismo_ecocardiografia" class="form-control" required>
                                    <option value="Derecho">Derecho</option>
                                    <option value="Izquierdo">Izquierdoa</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <p>Corazon</p>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Tanaño</label>
                            <div>
                                <select name="corazon_tamano" id="corazon_tamano_ecocardiografia" class="form-control" required>
                                    <option value="< 0.35 Normal">< 0.35 Normal</option>
                                    <option value="0.35 – 0.50 Cardiomegalia leve">0.35 – 0.50 Cardiomegalia leve</option>
                                    <option value="0.51- 0.65 Cardiomegalia moderada">0.51- 0.65 Cardiomegalia moderada</option>
                                    <option value="> 0.65 Cardiomegalia moderada">> 0.65 Cardiomegalia moderada</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Posicion</label>
                            <div>
                                <select name="corazon_posicion" id="corazon_posicion_ecocardiografia" class="form-control" required>
                                    <option value="Levocardia">Levocardia</option>
                                    <option value="Dextrocardia">Dextrocardia</option>
                                    <option value="Mesocardia">Mesocardia</option>
                                    <option value="Levo desplazamiento">Levo desplazamiento</option>
                                    <option value="Dextro desplazamiento">Dextro desplazamiento</option>
                                    <option value="Meso desplazamiento">Meso desplazamiento</option>
                                    <option value="Ectopia cordis">Ectopia cordis</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <p>Estructura</p>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Corte De 4 Cámaras</label>
                            <div>
                                <select name="corte" id="corte_ecocardiografia" class="form-control" required>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>2 Aurículas simétricas</label>
                            <div>
                                <select name="auriculas" id="auriculas_ecocardiografia" class="form-control" required>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>2 Ventrículos simétricas</label>
                            <div>
                                <select name="ventriculos" id="ventriculos_ecocardiografia" class="form-control" required>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Dominancia de cavidades</label>
                            <div>
                                <select name="dominancia" id="dominancia_ecocardiografia" class="form-control" required>
                                    <option value="Derechas">Derechas</option>
                                    <option value="Izquierdas">Izquierdas</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Foramen Oval</label>
                            <div>
                                <select name="foramen" id="foramen_ecocardiografia" class="form-control" required>
                                    <option value="2- 6 mm Normal">2- 6 mm Normal</option>
                                    <option value="< 2 mm Foramen oval restrictivo">< 2 mm Foramen oval restrictivo</option>
                                    <option value="> 6 mm Probable CIA Tipo Ostium secundum">> 6 mm Probable CIA Tipo Ostium secundum</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Válvula Mitral Implantación</label>
                            <div>
                                <select name="valvula_mitral_implantacion" id="valvula_mitral_implantacion_ecocardiografia" class="form-control" required>
                                    <option value="Correcta">Correcta</option>
                                    <option value="Incorrecta">Incorrecta</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Válvula Mitral funcionalidad</label>
                            <div>
                                <select name="valvula_mitral_funcionalidad" id="valvula_mitral_funcionalidad_ecocardiografia" class="form-control" required>
                                    <option value="Adecuada">Adecuada</option>
                                    <option value="Inadecuada">Inadecuada</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Válvula Tricúspide Implantación</label>
                            <div>
                                <select name="valvula_tricuspide_implantacion" id="valvula_tricuspide_implantacion_ecocardiografia" class="form-control" required>
                                    <option value="Correcta">Correcta</option>
                                    <option value="Incorrecta">Incorrecta</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Válvula Tricúspide funcionalidad</label>
                            <div>
                                <select name="valvula_tricuspide_funcionalidad" id="valvula_tricuspide_funcionalidad_ecocardiografia" class="form-control" required>
                                    <option value="Adecuada">Adecuada</option>
                                    <option value="Inadecuada">Inadecuada</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Tabique Interventricular Integro</label>
                            <div>
                                <select name="tabique_interaventricular" id="tabique_interaventricular_ecocardiografia" class="form-control" required>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Defecto (mm)</label>
                            <div>
                                <input type="text" name="tabique_interaventricular_defecto" id="tabique_interaventricular_defecto_ecocardiografia" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <p>CIV</p>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label>Tracto de salida de Ventrículo derecho</label>
                            <div>
                                 <select name="tracto_salida_derecho" id="tracto_salida_derecho_ecocardiografia" class="form-control" required>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                    <option value="No Valorable">No Valorable</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Tracto de salida de Ventrículo Izquierdo</label>
                            <div>
                                <select name="tracto_salida_izquierdo" id="tracto_salida_izquierdo_ecocardiografia" class="form-control" required>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                    <option value="No Valorable">No Valorable</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Tipo De Conexión Auriculo Ventricular</label>
                            <div>
                                <select name="tipo_conexion_ventricular" id="tipo_conexion_ventricular_ecocardiografia" class="form-control" required>
                                    <option value="Concordante">Concordante</option>
                                    <option value="Discordante">Discordante</option>
                                    <option value="Ambigua">Ambigua</option>
                                    <option value="Conexión AV ausente">Conexión AV ausente</option>
                                    <option value="Doble entrada ventricular">Doble entrada ventricular</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Modo De Conexión Auriculo Ventricular</label>
                            <div>
                                <select name="modo_conexion_ventricular" id="modo_conexion_ventricular_ecocardiografia" class="form-control" required>
                                    <option value="Perforado">Perforado</option>
                                    <option value="Imperforado">Imperforado</option>
                                    <option value="Válvula Auriculo ventricular común">Válvula Auriculo ventricular común</option>
                                    <option value="Cabalgante">Cabalgante</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <p>Funcion</p>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Contractilidad Miocárdica</label>
                            <div>
                                <select name="funcion_contractilidad" id="funcion_contractilidad_ecocardiografia" class="form-control" required>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Índice de rendimiento cardiaco</label>
                            <div>
                                <select name="funcion_rendimiento_cardiaco" id="funcion_rendimiento_cardiaco_ecocardiografia" class="form-control" required>
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Ritmo</label>
                            <div>
                                <select name="funcion_ritmo" id="funcion_ritmo_ecocardiografia" class="form-control" required>
                                    <option value="Regular">Regular</option>
                                    <option value="Irregular">Irregular</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Extrasístoles</label>
                            <div>
                                <select name="funcion_extrasistoles" id="funcion_extrasistoles_ecocardiografia" class="form-control" required>
                                    <option value="Presentes">Presentes</option>
                                    <option value="Ausentes">Ausentes</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <p>Corte De Tres Vasos Traquea</p>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Numero de vasos: Tres</label>
                            <div>
                                <select name="numero_vasos" id="numero_vasos_ecocardiografia" class="form-control" required>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Pulmonar Normal</label>
                            <div>
                                <select name="pulmonar" id="pulmonar_ecocardiografia" class="form-control" required>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Aorta Normal</label>
                            <div>
                                <select name="aorta" id="aorta_ecocardiografia" class="form-control" required>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Vena cava Normal</label>
                            <div>
                                <select name="vena_cava" id="vena_cava_ecocardiografia" class="form-control" required>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Tamaño de vasos: Normal</label>
                            <div>
                                <select name="tamano_vasos" id="tamano_vasos_ecocardiografia" class="form-control" required>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Tamaño de vasos: Normal</label>
                            <div>
                                <select name="tamano_vasos_normal" id="tamano_vasos_normal_ecocardiografia" class="form-control">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Tamaño de vasos: Anormal</label>
                            <div>
                                <select name="tamano_vasos_anormal" id="tamano_vasos_anormal_ecocardiografia" class="form-control">
                                    <option value="N/A">N/A</option>
                                    <option value="1a pulmonar">Arteria pulmonar</option>
                                    <option value="Aorta">Aorta</option>
                                    <option value="Vena cava">Vena cava</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <p>Posicion</p>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Arteria pulmonar izquierda</label>
                             <div>
                                <select name="arteria_pulmonar_izquierda" id="arteria_pulmonar_izquierda_ecocardiografia" class="form-control">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Aorta en medio </label>
                             <div>
                                <select name="aorta_medio" id="aorta_medio_ecocardiografia" class="form-control">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Vena cava derecha</label>
                             <div>
                                <select name="vena_cava_derecha" id="vena_cava_derecha_ecocardiografia" class="form-control">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Disposición: Normal</label>
                             <div>
                                <select name="disposicion_normal" id="disposicion_normal_ecocardiografia" class="form-control">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Disposición: Anormal</label>
                             <div>
                                <select name="disposicion_anormal" id="disposicion_anormal_ecocardiografia" class="form-control">
                                    <option value="Arteria pulmonar">Arteria pulmonar</option>
                                    <option value="Aorta">Aorta</option>
                                    <option value="Vena cava">Vena cava</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <p>Cortes Sagitales</p>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Vista Bi cava</label>
                             <div>
                                <select name="vista_bi_cava" id="vista_bi_cava_ecocardiografia" class="form-control">
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Vestíbulo venoso subdifargmatico</label>
                             <div>
                                <select name="vestibulo_venoso" id="vestibulo_venoso_ecocardiografia" class="form-control">
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Arco aortico</label>
                             <div>
                                <select name="arco_aortico" id="arco_aortico_ecocardiografia" class="form-control">
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Arco ductal</label>
                             <div>
                                <select name="arco_ductal" id="arco_ductal_ecocardiografia" class="form-control">
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Eje corto de grandes vasos</label>
                             <div>
                                <select name="eje_corto_vasos" id="eje_corto_vasos_ecocardiografia" class="form-control">
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Eje corto de ventriculos </label>
                             <div>
                                <select name="eje_corto_centriculos" id="eje_corto_centriculos_ecocardiografia" class="form-control">
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label>Revision</label>
                            <div>
                                <select name="revision" id="revision_ecocardiografia" class="form-control">
                                    <option value="Adecuada">Adecuada</option>
                                    <option value="Limitada">Limitada</option>
                                    <option value="Muy Limitada">Muy Limitada</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Conclusiones</label>
                            <div>
                                <select name="concluciones" id="concluciones_ecocardiografia" class="form-control">
                                    <option value="Corte Axial de Abdomen dentro de límites normales">Corte Axial de Abdomen dentro de límites normales</option>
                                    <option value="Corte de 4 cámaras dentro de límites normales">Corte de 4 cámaras dentro de límites normales</option>
                                    <option value="Corte de 3 vasos tráquea dentro de límites normales">Corte de 3 vasos tráquea dentro de límites normales</option>
                                </select>
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalUpdatedNeurosonografia">
     <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['url' => '', 'class' => 'consulta-form form-examen form-horizontal']) !!}
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Edad</label>
                            <div>
                                <input type="number" name="edad" id="edad_neurosonografia" class="form-control" required>
                            </div>
                        </div>
                         <div class="col-md-3">
                            <label>Medico</label>
                            <div>
                                <input type="text" class="form-control" value="{{ \Auth::user()->name }}">
                            </div>
                        </div>
                         <div class="col-md-3">
                            <label>Fecha</label>
                            <div>
                                <input type="text" name="date" id="date_neurosonografia" class="form-control" value="{{ date('Y-m-d h:i a') }}">
                            </div>
                        </div>
                         <div class="col-md-3">
                            <label>Paridad</label>
                            <div>
                                <input type="text" name="paridad" id="paridad_neurosonografia" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <P>Reporte De Neurosonografia</P>
                    <div class="form-group">
                       <div class="col-md-3">
                           <label>Feto</label>
                           <div>
                               <select name="feto" id="feto_neurosonografia" class="form-control" required>
                                   <option value="Unico">Unico</option>
                                   <option value="Gemelo">Gemelo</option>
                                   <option value="A">A</option>
                                   <option value="B">B</option>
                                   <option value="C">C</option>
                               </select>
                           </div>
                       </div>
                       <div class="col-md-3">
                           <label>Presentacion</label>
                           <div>
                               <select name="presentacion" id="presentacion_neurosonografia" class="form-control" required>
                                   <option value="Cefálico">Cefálico</option>
                                   <option value="Pélvico">Pélvico</option>
                               </select>
                           </div>
                       </div>
                       <div class="col-md-3">
                           <label>Situacion</label>
                           <div>
                               <select name="situacion" id="situacion_neurosonografia" class="form-control" required>
                                   <option value="Longitudinal">Longitudinal</option>
                                   <option value="Transverso Dorso Superior">Transverso Dorso Superior</option>
                                   <option value="Transverso Dorso Inferior">Transverso Dorso Inferior</option>
                               </select>
                           </div>
                       </div>
                        <div class="col-md-3">
                           <label>Posicion</label>
                           <div>
                               <select name="posicion" id="posicion_neurosonografia" class="form-control" required>
                                   <option value="Dorso Izquierdo">Dorso Izquierdo</option>
                                   <option value="Dorso Derecho">Dorso Derecho</option>
                               </select>
                           </div>
                       </div>
                       <div class="col-md-3">
                           <label>FCF (latidos por minuto)</label>
                           <div>
                              <input type="number" name="fcf" id="fcf_neurosonografia" class="form-control" required>
                           </div>
                       </div>
                    </div>
                    <p>Planos Axiales</p>
                    <p><b>Craneo</b></p>
                    <div class="form-group">
                         <div class="col-md-3">
                            <label>Craneo Normal</label>
                            <div>
                                <select name="craneo" id="craneo_neurosonografia" class="form-control" required>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Dolicocefalia</label>
                            <div>
                                <select name="dolicocefalia" id="dolicocefalia_neurosonografia" class="form-control" required>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Braquicefalia</label>
                            <div>
                                <select name="braquicefalia" id="braquicefalia_neurosonografia" class="form-control" required>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Tamaño normal</label>
                            <div>
                                <select name="craneo_tamano" id="craneo_tamano_neurosonografia" class="form-control" required>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Suturas craneales normales</label>
                            <div>
                                <select name="craneo_situras" id="craneo_situras_neurosonografia" class="form-control" required>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Compresión del transductor se aprecian deformidades</label>
                            <div>
                                <select name="craneo_compresion" id="craneo_compresion_neurosonografia" class="form-control" required>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>La línea interhemisferica se observa integra</label>
                            <div>
                                <select name="craneo_interhemisferica" id="craneo_interhemisferica_neurosonografia" class="form-control" required>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Los hemisferios cerebrales simétricos</label>
                            <div>
                                <select name="craneo_hemisferios" id="craneo_hemisferios_neurosonografia" class="form-control" required>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <p>Corte Transventricular</p>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Se identifica el Cavum del septum pellucidum</label>
                            <div>
                                <select name="cavum_septum" id="cavum_septum_neurosonografia" class="form-control" required>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Diámetro anteroposterior (mm)</label>
                            <div>
                                <input type="text" name="diametro_anteroposterior" id="diametro_anteroposterior_neurosonografia" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Astas frontales de ventrículos laterales simétricas</label>
                            <div>
                                <select name="asta_frontales" id="asta_frontales_neurosonografia" class="form-control" required>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Existe comunicación de astas anteriores</label>
                            <div>
                                <select name="comunicacion_asta_ateriores" id="comunicacion_asta_ateriores_neurosonografia" class="form-control" required>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Plexos coroideos homogéneos</label>
                            <div>
                                <select name="plexo_coroideos" id="plexo_coroideos_neurosonografia" class="form-control" required>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Presencia de quiste</label>
                            <div>
                                <select name="presencia_quiste" id="presencia_quiste_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 presencia_quiste_si_form" style="display: none">
                            <label>Quiste</label>
                            <div>
                                <select name="presencia_quiste_si" id="presencia_quiste_si_neurosonografia" class="form-control">
                                    <option value="Unilateral">Unilateral</option>
                                    <option value="Bilateral">Bilateral</option>
                                    <option value="Unico">Unico</option>
                                    <option value="Múltiples">Múltiples</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Se identifica la cisura parietooccipital</label>
                            <div>
                                <select name="cisura_parietooccipital" id="cisura_parietooccipital_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="No">No</option>
                                    <option value="Si">Si</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Atrios ventriculares simétricos</label>
                            <div>
                                <select name="atrios_ventruculares" id="atrios_ventruculares_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Atrios ventriculares Derecho (mm)</label>
                            <div>
                                <input type="text" name="atrios_derecho" id="atrios_derecho_neurosonografia" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Atrios ventriculares Izquierdo (mm)</label>
                            <div>
                                <input type="text" name="atrios_izquierdo" id="atrios_izquierdo_neurosonografia" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Área peri ventricular</label>
                            <div>
                                <select name="area_ventricular" id="area_ventricular_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                    <option value="Demorrágica">Demorrágica</option>
                                    <option value="Hiperecogenica">Hiperecogenica</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <p>Corte Transtalámico</p>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Talamos normales</label>
                            <div>
                                <select name="talamos_normales" id="talamos_normales_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Giro hipocampal Presente</label>
                            <div>
                                <select name="giro_hipocampal_presente" id="giro_hipocampal_presente_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                         <div class="col-md-3">
                            <label>III ventrículo con diámetros</label>
                            <div>
                                <input type="text" name="ventriculo_diametros" id="ventriculo_diametros_neurosonografia" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <p>Corte Transcerebelar</p>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Cerebelo con ambos hemisferios simétricos</label>
                            <div>
                                <select name="ambos_hemisferios_simetricos" id="ambos_hemisferios_simetricos_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Vermis</label>
                            <div>
                                <select name="vermis" id="vermis_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Presente">Presente</option>
                                    <option value="Ausente">Ausente</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Central y ecogénico</label>
                            <div>
                                <select name="central_ecogenico" id="central_ecogenico_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Morfología normal</label>
                            <div>
                                <select name="morfologia_normal" id="morfologia_normal_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Cisterna magna con diámetros (mm)</label>
                            <div>
                                <input type="text" name="cisterna_magna" id="cisterna_magna_neurosonografia" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Comunicación entre el 4º ventrículo y la cisterna magna</label>
                            <div>
                                <select name="comunicacion_4_ventriculo" id="comunicacion_4_ventriculo_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Pliegue nucal (mm)</label>
                            <div>
                                <input type="text" name="pliegue_nucal" id="pliegue_nucal_neurosonografia" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <p>Planos Coronales:</p>
                    <p><b>Corte Transfrontal</b></p>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Se observa la línea interhemisferica integra</label>
                            <div>
                                <select name="liena_intergemisferica" id="liena_intergemisferica_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Astas anteriores de los ventrículos laterales normales</label>
                            <div>
                                <select name="asta_anteriores" id="asta_anteriores_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Hueso esfenoides y las orbitas oculares normales </label>
                            <div>
                                <select name="hueso_esfenoides" id="hueso_esfenoides_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <p><b>Corte Transcaudal</b></p>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Astas anteriores de los ventrículos con diámetros</label>
                            <div>
                                <input type="text" name="ventriculos_diametro_1" id="ventriculos_diametro_1_neurosonografia" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Y de</label>
                            <div>
                                <input type="text" name="ventriculos_diametro_2" id="ventriculos_diametro_2_neurosonografia" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Núcleos caudados sin alteraciones</label>
                            <div>
                                <select name="nucleos_caudado" id="nucleos_caudado_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Espacio subaracnoideo senocortical (mm)</label>
                            <div>
                                <input type="text" name="espacio_subaracnoideo" id="espacio_subaracnoideo_neurosonografia" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Y craneocortical (mm)</label>
                            <div>
                                <input type="text" name="espacio_craneocotical" id="espacio_craneocotical_neurosonografia" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Se identifica la cisura de Silvio claramente</label>
                            <div>
                                <select name="cisura_silvio" id="cisura_silvio_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <p><b>Corte Transcerebelar</b></p>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Tentorio in situs</label>
                            <div>
                                <select name="tetorio_situs" id="tetorio_situs_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Cisura interhemisferica integra</label>
                            <div>
                                <select name="cisura_interhemisferica" id="cisura_interhemisferica_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Cuernos occipitales simétricos</label>
                            <div>
                                <select name="cuernos_occipitales" id="cuernos_occipitales_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <p>Planos Sagitales</p>
                    <p><b>Saginal Medio</b></p>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Presencia del cuerpo calloso</label>
                            <div>
                                <select name="presencia_calloso" id="presencia_calloso_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Disgenesia</label>
                            <div>
                                <select name="disgenesia" id="disgenesia_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Longitud (mm)</label>
                            <div>
                                <input type="text" name="saginal_longitud" id="saginal_longitud_neurosonografia" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Grosor (mm)</label>
                            <div>
                                <input type="text" name="saginal_grosor" id="saginal_grosor_neurosonografia" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>CSP y Cavum vergae</label>
                            <div>
                                <select name="csp_cavum" id="csp_cavum_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Sin Alteraciones">Sin Alteraciones</option>
                                    <option value="Hipoplasicos">Hipoplasicos</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Fornix, III Y IV ventrículo</label>
                            <div>
                                <select name="fornix" id="fornix_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Sin Dilatación">Sin Dilatación</option>
                                    <option value="Con Dilatación">Con Dilatación</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Tronco Encefálico</label>
                            <div>
                                <select name="tronco_encefalico" id="tronco_encefalico_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Tórcula y Tentorio in situs</label>
                            <div>
                                <select name="torcula_tendorio" id="torcula_tendorio_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Cisterna magna</label>
                            <div>
                                <select name="cisterna_magna" id="cisterna_magna_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Doppler color se visualiza el trayecto de la arteria cerebral anterior</label>
                            <div>
                                <select name="doppler_visualiza" id="doppler_visualiza_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Pericallosa</label>
                            <div>
                                <select name="pericallosa" id="pericallosa_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Vena de Galeno</label>
                            <div>
                                <select name="vena_galeno" id="vena_galeno_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <p>Desarrollo Corporal</p>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Las cisuras de Silvio</label>
                            <div>
                                <select name="cisuras_silvio" id="cisuras_silvio_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Cisura parieto occipital</label>
                            <div>
                                <select name="cisura_occipital" id="cisura_occipital_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                </select>
                            </div>
                        </div>
                         <div class="col-md-3">
                            <label>Cisura calcarina</label>
                            <div>
                                <select name="cisura_calcarina" id="cisura_calcarina_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                </select>
                            </div>
                        </div>
                         <div class="col-md-3">
                            <label> Cisura cingulada</label>
                            <div>
                                <select name="cisura_cingulada" id="cisura_cingulada_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Normal">Normal</option>
                                    <option value="Anormal">Anormal</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <p>Columna Vertebral</p>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Cortes sagitales con piel integra</label>
                            <div>
                                <select name="cortes_sagitales" id="cortes_sagitales_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Se identifica el cono medular</label>
                            <div>
                                <select name="identifica_cono" id="identifica_cono_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Se observa la disposición de la osificación</label>
                            <div>
                                <select name="observa_osificacion" id="observa_osificacion_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Integridad de los cuerpos vertebrales y los procesos laterales</label>
                            <div>
                                <select name="integridad_cuerpos" id="integridad_cuerpos_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Evidencia de signos intracraneales de Mielocele abierta</label>
                            <div>
                                <select name="evidencia_mielocele" id="evidencia_mielocele_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Evidencia de signos intracraneales de Mielomeningocele abierta</label>
                            <div>
                                <select name="evidencia_mielomeningocele" id="evidencia_mielomeningocele_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Evidencia de signos intracraneales de Mielosquisis abierta</label>
                            <div>
                                <select name="evidencia_mielosquisis" id="evidencia_mielosquisis_neurosonografia" class="form-control" required data-target="presencia_quiste_si_form">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label>Revision</label>
                            <div>
                                <select name="revision" id="revision_neurosonografia" class="form-control">
                                    <option value="Adecuada">Adecuada</option>
                                    <option value="Limitada">Limitada</option>
                                    <option value="Muy Limitada">Muy Limitada</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Conclusiones</label>
                            <div>
                                <select name="concluciones" id="concluciones_neurosonografia" class="form-control">
                                    <option value="Embarazo de 23.2 Semanas de gestación por fetometría acorde a US evolutivo ">Embarazo de 23.2 Semanas de gestación por fetometría acorde a US evolutivo </option>
                                    <option value="Neurosonografia sin alteraciones">Neurosonografia sin alteraciones</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <p class="text-center"><b>Recomendaciones: Continuar vigilancia y curva de crecimiento en 8 semanas.</b></p>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
