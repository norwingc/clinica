<div class="modal fade" id="modalUpdateProcedimiento">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['url' => '', 'class' => 'consulta-form form-examen form-horizontal form_procedimiento']) !!}
                    <div class="form-group">
                        <div class="col-md-3">
                            <label>Hospital</label>
                            <div>
                                <select class="form-control" name="hospital" id="hospital_procedimiento" required>
									<option value="">Seleccione uno</option>
                                    <option value="Hospital Vivian Pellas">Hospital Vivian Pellas</option>
                                    <option value="Hospital Cruz Azul">Hospital Cruz Azul</option>
                                    <option value="Hospital Salud Integral">Hospital Salud Integral</option>
                                    <option value="Hospital Militar">Hospital Militar</option>
                                    <option value="Hospital Carlos Roberto Huembes">Hospital Carlos Roberto Huembes</option>
                                    <option value="Hospital Bautista">Hospital Bautista</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>procedimiento</label>
                            <div>
                                <select class="form-control" name="procedimiento" id="procedimiento_procedimiento" required>
									<option value="">Seleccione uno</option>
                                    <option value="Parto Vaginal">Parto Vaginal</option>
                                    <option value="Parto por Cesárea">Parto por Cesárea</option>
                                    <option value="AMEU">AMEU</option>
                                    <option value="Laparoatomia">Laparoatomia</option>
                                    <option value="Histerectomía">Histerectomía</option>
                                    <option value="Cerclaje Cervical">Cerclaje Cervical</option>
                                    <option value="OTB">OTB</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Fecha procedimiento</label>
                            <div>
                                <input type="date" name="date" id="date_procedimiento" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Codigo</label>
                            <div>
                                <input type="text" name="codigo" id="codigo_procedimiento" class="form-control">
                            </div>
						</div>
						<div class="col-md-3">
							<label>Anestesiólogo</label>
							<div>
								<input type="text" name="anestesiologo" id="anestesiologo" class="form-control" value="Dr. Serge Amador">
							</div>
						</div>
						<div class="procedimiento_parto">
							<div class="col-md-3">
								<label>Hora de nacimiento</label>
								<div>
									<input type="text" name="hr_nacimiento" id="hr_nacimiento" class="form-control">
								</div>
							</div>
							<div class="col-md-3">
								<label>Peso fetal</label>
								<div>
									<input type="text" name="peso_fetal" id="peso_fetal" class="form-control">
								</div>
							</div>
							<div class="col-md-3">
								<label>Complicacion maternal</label>
								<div>
									<textarea name="complicacion_maternal" id="complicacion_maternal" class="form-control"></textarea>
								</div>
							</div>
							<div class="col-md-3">
								<label>Complicacion fetal</label>
								<div>
									<textarea name="complicacion_fetal" id="complicacion_fetal" class="form-control"></textarea>
								</div>
							</div>
							<div class="col-md-3">
								<label>Pediatra</label>
								<div>
									<input type="text" name="pediatra" id="pediatra" class="form-control" value="Dr. Rafael Centeno">
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<label>Comentario</label>
							<div>
								<textarea name="comentario" id="comentario_procedimiento" class="form-control"></textarea>
							</div>
						</div>
					</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
