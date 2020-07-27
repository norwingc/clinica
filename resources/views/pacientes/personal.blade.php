@extends('templates._maintemplate')

@section('title') Ingresar Cita @endsection

@section('contenido')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Informacion Personal: {{ $paciente->name }} / {{ $paciente->id_number }}</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('pacientes') }}">Pacientes</a></li>
    </ol>
</section>
<div class="header-paciente">
    <div class="row">
        <div class="personal-information col-xs-6 col-md-3 active"><a href="{{ route('paciente.personal', $paciente) }}">Informacion Personal</a></div>
        @role('doctor')
			<div class="history col-xs-6 col-md-3"><a href="{{ route('paciente.historia', $paciente) }}">Historia Clinica</a></div>
			<div class="summary col-xs-6 col-md-3"><a href="{{ route('paciente.atencionprenatal.index', $paciente) }}">Atencion Prenatal</a></div>
            <div class="summary col-xs-6 col-md-3"><a href="{{ route('paciente.show', $paciente) }}">Resumen Clinico</a></div>
        @endrole
    </div>
</div>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <i class="ion ion-clipboard"></i>
                    <h3 class="box-title">Crear Cita</h3>
                    <div class="box-tools pull-right">
						<a href="{{ route('paciente.consulta.delete.last', $paciente) }}" class="btn btn-danger">Borrar Cita del dia</a>
                        <button type="button" class="btn btn-info" data-paciente="{{ $paciente->id }}" onclick="addNextCita($(this))">Agregar Proxima Cita</button>
                    </div>
                </div>
                @include('includes._message')
                <div class="box-body">
                    {!! Form::open(['route' => ['paciente.personal.update', $paciente->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Cedula Paciente</label>
                                <div>
                                    <input type="text" class="form-control cedula" name="id_number" id="id_number" value="{{ $paciente->id_number }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Nombre Paciente</label>
                                <div>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ $paciente->name }}" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Fecha Nacimiento</label>
                                <div>
                                    <input type="date" class="form-control" name="birthday" id="birthday" value="{{ $paciente->birthday }}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Edad</label>
                                <div>
                                    <input type="text" class="form-control" name="edad" id="edad" value="{{ $paciente->getAge() }}" readonly>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Email</label>
                                <div>
                                    <input type="email" class="form-control" name="email" id="email" value="{{ $paciente->email }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Telefono Convencional</label>
                                <div>
                                    <input type="text" class="form-control phone" name="convencional" id="convencional" value="{{ $paciente->convencional }}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Telefono Celular Claro</label>
                                <div>
                                    <input type="text" class="form-control phone" name="phone_claro" id="phone_claro" value="{{ $paciente->phone_claro }}">
                                </div>
							</div>
							<div class="col-sm-3">
                                <label>Telefono Celular Movistar</label>
                                <div>
                                    <input type="text" class="form-control phone" name="phone_movistar" id="phone_movistar" value="{{ $paciente->phone_movistar }}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Referido</label>
                                <div>
                                    <input type="text" name="referido" class="form-control" id="referido" value="{{ $paciente->referido }}">
                                </div>
                            </div>
							<div class="col-sm-3">
								<label>Referido por paciente</label>
								<div>
									<input type="text" name="referido_paciente" class="form-control" id="referido_paciente" value="{{ $paciente->referido_paciente }}">
								</div>
							</div>
                            <div class="col-sm-9">
                                <label>Direccion</label>
                                <div>
                                    <input type="text" name="address" class="form-control" id="address" value="{{ $paciente->address }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Estado Civil</label>
                                <div>
                                    <input type="text" class="form-control" id="estado_civil" name="estado_civil" value="{{ $paciente->estado_civil }}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Contacto</label>
                                <div>
                                    <input type="text" class="form-control" id="contacto" name="contacto" value="{{ $paciente->contacto }}">
                                </div>
                            </div>
                             <div class="col-sm-3">
                                <label>Parentesco</label>
                                <div>
                                    <input type="text" class="form-control" id="parentesco" name="parentesco" value="{{ $paciente->parentesco }}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Celular</label>
                                <div>
                                    <input type="text" class="form-control phone" id="contacto_celular" name="contacto_celular" value="{{ $paciente->contacto_celular }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label>Lugar de Trabajo</label>
                                <div>
                                    <input type="text" name="trabajo" class="form-control" id="trabajo" value="{{ $paciente->trabajo }}">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label>Escolaridad</label>
                                <select name="escolaridad" id="escolaridad" class="form-control" value="{{ $paciente->escolaridad }}">
                                    <option value="">Selecione Uno</option>
                                    <option value="Primaria">Primaria</option>
                                    <option value="Secundaria">Secundaria</option>
                                    <option value="Tecnico">Tecnico</option>
                                    <option value="Universidad">Universidad</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label>Typo y RH</label>
                                <div>
                                    <select class="form-control" name="tipo_rh" id="tipo_rh" value="{{ $paciente->tipo_rh }}">
                                        <option value="">Selecione Uno</option>
                                        <option value="O Positivo">O Positivo</option>
                                        <option value="A Negativo">A Negativo</option>
                                        <option value="A Positivo">A Positivo</option>
                                        <option value="AB Negativo">AB Negativo</option>
                                        <option value="AB Positivo">AB Positivo</option>
                                        <option value="B Negativo">B Negativo</option>
                                        <option value="B Positivo">B Positivo</option>
                                        <option value="O Negativo">O Negativo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Paridad</label>
                                <div>
                                    <input type="text" name="paridad" id="paridad" class="form-control" value="{{ $paciente->paridad }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Morbilidad</label>
                                <div>
                                    <input type="text" name="morbilidad" id="morbilidad" class="form-control" value="{{ $paciente->morbilidad }}">
                                </div>
                            </div>
                        </div>
						<div class="form-group">
							<div class="col-sm-3 ">
								<label>Embarazada</label>
								<div>
									<select name="embarazada" class="form-control" id="embarazada" data-embarazada="{{ $paciente->embarazada }}">
										<option value="No">No</option>
										<option value="Si">Si</option>
									</select>
								</div>
							</div>
							<div id="embarazada-si" style="display:none">
								<div class="col-sm-3">
									<label>Fecha de ultima regla</label>
									<div>
										<input type="date" name="ultima_regla" id="ultima_regla" class="form-control" value="{{ $paciente->ultima_regla }}">
									</div>
								</div>
								<div class="col-sm-3">
									<label>Edad Gestacional</label>
									<div>
										<p id="edad_gestional_view"></p>
										<textarea name="edad_gestional" id="edad_gestional" class="form-control" style="display: none"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-3">
                                <label>Nombre del bebe</label>
                                <div>
                                    <input type="text" class="form-control" id="nombre_bebe" name="nombre_bebe" value="{{ $paciente->nombre_bebe }}">
                                </div>
							</div>
							<div class="col-sm-6">
								<label>Comentarios</label>
								<div>
									<textarea name="personal_comentarios" class="form-control">{{ $paciente->personal_comentarios }}</textarea>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-4">
                                <label>Actualizado por</label>
                                <div>
                                    <select class="form-control" name="actualizado_por" id="actualizado_por" value="{{ $paciente->actualizado_por }}" required>
                                        <option value="">Selecione Uno</option>
                                        <option value="Tatiana Bravo">Tatiana Bravo</option>
                                        <option value="Cleyda Huete">Cleyda Huete</option>
                                    </select>
                                </div>
                            </div>
						</div>
                        <div class="text-center col-md-12">
                            <button type="submit" class="btn btn-success btn-submit">Actualizar</button>
                        </div>
					{!! Form::close() !!}
                </div>
			</div>
			<div class="box box-info">
                <div class="box-header with-border">
                    <i class="ion ion-clipboard"></i>
                    <h3 class="box-title">Imagenes</h3>
                </div>
                <div class="box-body">
					{!! Form::open(['route' => ['paciente.image.store', $paciente], 'class' => 'form-inline', 'files' => 'true']) !!}
						<label>Agregar Imagen</label>
						<input type="file" name="image" accept="image/*" class="form-control" required>
						<button type="submit" class="btn btn-success">Agregar</button>
					{!! Form::close() !!}
					@if($paciente->images->count() > 0)
						<button class="btn btn-primary" onclick="$('#modalPacienteImage').modal('show')" style="margin-top: 2em">Ver Imagenes</button>
					@endif
				</div>
			</div>
        </div>
    </div>
</section>

@include('includes.citas._modal')
@include('includes.citas._script')

@include('pacientes._modalImage')

@endsection

@section('js')
    <script>
        $('#compania_phone').val("{{ $paciente->compania_phone }}");
        $('#escolaridad').val("{{ $paciente->escolaridad }}");
        $('#tipo_rh').val("{{ $paciente->tipo_rh }}");
		$('#embarazada').val("{{ $paciente->embarazada }}");
		$('#actualizado_por').val("{{ $paciente->actualizado_por }}");

        $(document).ready(function(){
			if($('#embarazada').data('embarazada') == 'Si'){
				$('#embarazada-si').show();
            	edadGestional($('#ultima_regla').val());
			}else{
				$('#embarazada-si').hide();
			}

		})
    </script>

	<script>
		$('#embarazada').change(function(){
			($(this).val() == 'Si') ? $('#embarazada-si').show() : $('#embarazada-si').hide()
		});

        $('#ultima_regla').focusout(function() {
            edadGestional($('#ultima_regla').val());
        });
        $('#ultima_regla').focus(function() {
            edadGestional($('#ultima_regla').val());
        });

        function edadGestional(fecha) {

            if(fecha === '') return false;

            fecha = fecha.split("-");

            fecha_inicio = new Date();
            dia_parto    = new Date();
            hoy          = new Date();
            lleva        = new Date();
            falta        = new Date();

            day   = fecha[2];
            month = fecha[1];
            year  = fecha[0];

            fecha_dada = new Date(year, (month-1), day);//month+"/"+day+"/"+year

            //Calculamos la fecha probable del parto
            fecha_inicio.setTime(fecha_dada.getTime());
            dia_parto.setTime(fecha_inicio.getTime() + (280 * 86400000)); //(14 * 86400000) es la fecha de concepción

            //Calculamos el tiempo que lleva
            lleva.setTime(hoy.getTime() - fecha_inicio.getTime());
            llevasemanas = parseInt(((lleva.getTime()/86400000)/7));
            llevadias = Math.floor(((lleva.getTime()/86400000)%7));

            let semanas = llevasemanas + " semanas y " + llevadias +" d&iacute;as";

            var resultado = '<b>Semanas de embarazo:</b> ' + semanas;

            $('#edad_gestional_view').html(resultado);
        }
	</script>
@endsection
