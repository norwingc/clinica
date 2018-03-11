<div class="modal fade" id="modalUpdateCita">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['url' => '', 'class' => 'consulta-form form-examen form-horizontal']) !!}
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label>Tipo de Examen</label>
                            <div>
                                <select name="examen_type" id="examen_type" required class="form-control">
                                    <option value="">Seleccione el Examen</option>
                                    <option value="Colposcopia / Crioterapia">Colposcopia / Crioterapia</option>
                                    <option value="Consulta de Atención Prenatal">Consulta de Atención Prenatal</option>
                                    <option value="Consulta Ginecologica">Consulta Ginecologica</option>
                                    <option value="Consulta medica por primera vez">Consulta medica por primera vez</option>
                                    <option value="Curva de crecimiento">Curva de crecimiento</option>
                                    <option value="Doppler Fetal">Doppler Fetal</option>
                                    <option value="Ecocardiografia">Ecocardiografia</option>
                                    <option value="Neurosonografia">Neurosonografia</option>
                                    <option value="Toma de Exámenes / Perfil Vaginal">Toma de Exámenes / Perfil Vaginal</option>
                                    <option value="Ultrasonido Estructural">Ultrasonido Estructural</option>
                                    <option value="Ultrasonido I Trimestre">Ultrasonido I Trimestre</option>
                                    <option value="Ultrasonido Pelvico">Ultrasonido Pelvico</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Costo U$</label>
                            <div>
                                <input type="number" class="form-control" name="costo" id="costo" required min="0">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Doctor</label>
                            <div>
                                <select name="doctor" id="doctor" class="form-control" required>
                                    <option value="">Seleccione al Doctor</option>
                                    <option value="Dr. Pavon">Dr. Pavon</option>
                                    <option value="Dra. Bravo">Dra. Bravo</option>
                                    <option value="Dr. Rafael Centeno">Dr. Rafael Centeno</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Fecha</label>
                            <div>
                                <input type="date" class="form-control" name="date" id="date" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Hr de inicio</label>
                            <div>
                                <input type="time" class="form-control" name="start" id="start" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Duracion</label>
                            <div>
                                <select class="form-control" name="duracion" id="duracion" required>
                                    <option value="30 min">30 min</option>
                                    <option value="1 hr">1 hr</option>
                                    <option value="1 hr 30 min">1 hr 30 min</option>
                                    <option value="2 hr">2 hr</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Comentario</label>
                            <div>
                                <textarea name="comentario" class="form-control" id="comentario"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                {!! Form::close()  !!}
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalCitaAllDay">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Agregar dia sin citas</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => 'citas.all.day', 'class' => 'consulta-form form-examen form-horizontal']) !!}
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Fecha</label>
                            <div>
                                <input type="date" class="form-control" name="date" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Todo el dia</label>
                            <div>
                                <select class="form-control" name="all_day" onchange="allDayCita($(this))">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="allDayCita" style="display:none">
                            <div class="col-md-3">
                                <label>Hr de Inicio</label>
                                <div>
                                    <input type="time" class="form-control" name="start">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label>Hr de Fin</label>
                                <div>
                                    <input type="time" class="form-control" name="end">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label>Comentario</label>
                            <div>
                                <textarea name="comentario" class="form-control"></textarea>
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
