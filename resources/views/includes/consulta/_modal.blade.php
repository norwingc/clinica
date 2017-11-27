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
                            <label>Tratamiento</label>
                            <div>
                                <select class="form-control selectpicker" name="plan[]" id="plan_prenatal" multiple>
                                    <option value="Abundantes Liquidos">Abundantes Liquidos</option>
                                    <option value="Acetato De Medroxiprogesterona 250 Mcg Im Cada Semana">Acetato De Medroxiprogesterona 250 Mcg Im Cada Semana</option>
                                    <option value="Acido Folico 5 Mg 1 Tableta Diario 9 Pm">Acido Folico 5 Mg 1 Tableta Diario 9 Pm</option>
                                    <option value="Albendazol 400 Mg Oral Una Dosis Ayuno">Albendazol 400 Mg Oral Una Dosis Ayuno</option>
                                    <option value="Aspartato De Arginina 1 Vial Diario 9 Pm">Aspartato De Arginina 1 Vial Diario 9 Pm</option>
                                    <option value="Aspirina 100 Mg Diario 9 Pm">Aspirina 100 Mg Diario 9 Pm</option>
                                    <option value="Betametazon 12 Mg Im Cada 24 Horas Por Dos Dosis">Betametazon 12 Mg Im Cada 24 Horas Por Dos Dosis</option>
                                    <option value="Calcio 600 Mg Diario">Calcio 600 Mg Diario</option>
                                    <option value="Clindamicina 100 Mg Ovulo Vaginal 9 Pm Lunes Y Viernes">Clindamicina 100 Mg Ovulo Vaginal 9 Pm Lunes Y Viernes</option>
                                    <option value="Dexametazona 6 Mg Im Cada 12 Horas Por 4 Dosis">Dexametazona 6 Mg Im Cada 12 Horas Por 4 Dosis</option>
                                    <option value="Dieta Rica En Fibra">Dieta Rica En Fibra</option>
                                    <option value="Dieta Rica En Proteina">Dieta Rica Proteina</option>
                                    <option value="Examenes De Laboratorio">Examenes De Laboratorio</option>
                                    <option value="Ferrolent Folic 1 Tableta Cada 12 Horas">Ferrolent Folic 1 Tableta Cada 12 Horas</option>
                                    <option value="Indometacina 100 Md Diario Por 10 Dias">Indometacina 100 Md Diario Por 10 Dias</option>
                                    <option value="Metformina 500 Mg A La Mitad De La Cena Por 2 Semanas Y Luego Progresar">Metformina 500 Mg A La Mitad De La Cena Por 2 Semanas Y Luego Progresar</option>
                                    <option value="Metformina 850 Mg Cada 12 Horas">Metformina 850 Mg Cada 12 Horas</option>
                                    <option value="Metronidazol 500 Mg Cada 12 Horas Por 5 Dias">Metronidazol 500 Mg Cada 12 Horas Por 5 Dias</option>
                                    <option value="Multivitaminas Prenatal 1 Tableta Diario 9 Pm">Multivitaminas Prenatal 1 Tableta Diario 9 Pm</option>
                                    <option value="Ovulo Vaginal 1 Diario Antes De Acostarse">Ovulo Vaginal 1 Diario Antes De Acostarse</option>
                                    <option value="Progesterona 200 Mg Diario Vaginal 9 Pm">Progesterona 200 Mg Diario Vaginal 9 Pm</option>
                                    <option value="Sulfato Ferroso 1 Tableta Diario">Sulfato Ferroso 1 Tableta Diario</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label>Examenes</label>
                            <div>
                                <select class="form-control selectpicker" name="examen[]" id="examen_prenatal" multiple>
                                    <option value="Dieta Rica Proteina">Dieta Rica Proteina</option>
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
