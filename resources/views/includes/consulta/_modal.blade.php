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
                            <label>Signos Vitales</label>
                            <div>
                                <select class="form-control" name="signos_vitales" id="signos_vitales_prenatal">
                                    <option value="">Seleccione uno</option>
                                    <option value="FC">FC</option>
                                    <option value="FR">FR</option>
                                    <option value="PA">PA</option>
                                </select>
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
                                <label>Membranas Intergas</label>
                                <div>
                                    <select class="form-control" name="vagina_membranas_intergas" id="vagina_membranas_intergas_prenatal">
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
