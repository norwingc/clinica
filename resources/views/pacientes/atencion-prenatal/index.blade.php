@extends('templates._maintemplate')

@section('title') Atencion Prenatal @endsection

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
			<div class="personal-information col-xs-6 col-md-3"><a href="{{ route('paciente.personal', $paciente) }}">Informacion Personal</a></div>
			@role('doctor')
				<div class="history col-xs-6 col-md-3"><a href="{{ route('paciente.historia', $paciente) }}">Historia Clinica</a></div>
				<div class="summary col-xs-6 col-md-3 active"><a href="{{ route('paciente.atencionprenatal.index', $paciente) }}">Atencion Prenatal</a></div>
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
						<h3 class="box-title">Informacion prenatal</h3>
						<div class="box-tools pull-right">
							<a href="{{ route('paciente.atencionprenatal.report', [$paciente]) }}" class="btn btn-info">Descargar Reporte</a>
						</div>
					</div>
					@include('includes._message')
					<div class="box-body">
						{!! Form::open(['route' => ['paciente.atencionprenatal.store', $paciente], 'class' => 'consulta-form form-examen form-horizontal']) !!}
							<div class="form-group">
								<div class="col-md-12">
									<label>Antecendentes Familares</label>
									<textarea name="atencedenetes_familiares" class="form-control" required>{{ $atencion_prenatal->atencedenetes_familiares  }}</textarea>
								</div>
								<div class="col-md-12">
									<label>Antecendentes Patol&oacute;gicos personales</label>
									<textarea name="atencedenetes_personales" class="form-control" required>{{ $atencion_prenatal->atencedenetes_personales  }}</textarea>
								</div>
								<div class="col-md-4">
									<label>Fecha &uacute;ltimo evento obst&eacute;trico</label>
									<input type="date" class="form-control" name="fecha_ultimo_evento_obstetrico" value="{{$atencion_prenatal->fecha_ultimo_evento_obstetrico}}" required>
								</div>
								<div class="col-md-4">
									<label>Peso inicial de embarazo (kg)</label>
									<input type="text" class="form-control" name="peso_inicio_embarazo" value="{{$atencion_prenatal->peso_inicio_embarazo}}" required>
								</div>
								<div class="col-md-4">
									<label>Aumenteo de peso en todo el embarazo (kg)</label>
									<input type="text" class="form-control" name="aumento_peso_embarazo" value="{{$atencion_prenatal->aumento_peso_embarazo}}" required>
								</div>
								<div class="col-md-4">
									<label>Tipo y RH esposo</label>
									<select class="form-control" name="tipo_rh_esposo" id="tipo_rh_esposo" value="{{$atencion_prenatal->tipo_rh_esposo}}" required>
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
								<div class="col-md-4">
									<label>FUR</label>
									<input type="text" class="form-control" name="fur" value="{{$atencion_prenatal->fur}}" required>
								</div>
								<div class="col-md-4">
									<label>Semanas de gestaci&oacute;n</label>
									<input type="text" class="form-control" name="semana_gestacion" value="{{$atencion_prenatal->semana_gestacion}}" required>
								</div>
								<div class="col-md-4">
									<label>Peso fetal</label>
									<input type="text" class="form-control" name="peso_fetal" value="{{$atencion_prenatal->peso_fetal}}" required>
								</div>
								<div class="col-md-4">
									<label>Maduraci&oacute;n pulmonar semans cumplidas</label>
									<input type="text" class="form-control" name="maduracion_pulmonar_semanas_complidas" value="{{$atencion_prenatal->maduracion_pulmonar_semanas_complidas}}" required>
								</div>
							</div>
						<div class="form-group text-center">
							<button type="submit" class="btn btn-success btn-lg text-center">Guardar Informacion</button>
						</div>
						{!! Form::close() !!}


						@if($paciente->atencion_prenatal && $paciente->atencion_prenatal->citas)
							<button type="button" class="btn btn-lg btn-info" id="add_cita">Agregar Cita</button>
							<div style="margin-top: 3em">
								<table class="table">
									<thead>
										<tr>
											<th>Fecha</th>
											<th>Edad Gestacional</th>
											<th>Peso KG</th>
											<th>Presi&oacute;n arterial</th>
											<th>AFU</th>
											<th>Presentaci&oacute;n</th>
											<th>FCF</th>
											<th>Movimientos Fetales</th>
											<th>Morbilidad</th>
										</tr>
									</thead>
									<tbody>
										@foreach($paciente->atencion_prenatal->citas as $cita)
											<tr>
												<td>{{ $cita->fecha }}</td>
												<td>{{ $cita->edad_gestacional }}</td>
												<td>{{ $cita->peso }}</td>
												<td>{{ $cita->precion_arterial }}</td>
												<td>{{ $cita->afu }}</td>
												<td>{{ $cita->presentacion }}</td>
												<td>{{ $cita->fcf }}</td>
												<td>{{ $cita->movimientos_fetales }}</td>
												<td>{{ $cita->morbilidad }}</td>
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						@endif
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="modal fade" id="modalCitaAtencionPrenatal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Cita paciente: {{ $paciente->name }} / {{ $paciente->id_number }}</h4>
				</div>
				<div class="modal-body">
					{!! Form::open(['url' => '', 'class' => 'consulta-form form-examen form-horizontal']) !!}
						<div class="form-group">
							<div class="col-md-3">
								<label>Fecha</label>
								<input type="date" name="fecha" id="fecha" class="form-control" value="{{date('Y-m-d')}}">
							</div>
							<div class="col-md-3">
								<label>Edad Gestacional</label>
								<input type="text" name="edad_gestacional" id="edad_gestacional" class="form-control" data-edad_gestacional="{{ $paciente->ultima_regla }}">
							</div>
							<div class="col-md-3">
								<label>Peso KG</label>
								<input type="text" name="peso" id="peso" class="form-control">
							</div>
							<div class="col-md-3">
								<label>Presi&oacute;n arterial</label>
								<input type="text" name="precion_arterial" id="precion_arterial" class="form-control">
							</div>
							<div class="col-md-3">
								<label>AFU</label>
								<input type="text" name="afu" id="afu" class="form-control">
							</div>
							<div class="col-md-3">
								<label>Presentaci&oacute;n</label>
								<input type="text" name="presentacion" id="presentacion" class="form-control">
							</div>
							<div class="col-md-3">
								<label>FCF</label>
								<input type="text" name="fcf" id="fcf" class="form-control">
							</div>
							<div class="col-md-3">
								<label>Movimientos Fetales</label>
								<input type="text" name="movimientos_fetales" id="movimientos_fetales" class="form-control">
							</div>
							<div class="col-md-3">
								<label>Morbilidad</label>
								<input type="text" name="morbilidad" id="morbilidad" class="form-control">
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
@endsection

@section('js')
	<script>
		$('#tipo_rh_esposo').val("{{ $atencion_prenatal->tipo_rh_esposo }}");
		$('#add_cita').click(function(){
			$('.consulta-form').attr('action', "{{ route('paciente.atencionprenatal.store.cita', [$paciente, $paciente->atencion_prenatal]) }}");
			setEdadGestacional()
			$('#modalCitaAtencionPrenatal').modal('show');
		})
	</script>
	<script>
		function setEdadGestacional(){
			if($('#edad_gestacional').data('edad_gestacional') != null){
				$('#edad_gestacional').val(edadGestional($('#edad_gestacional').data('edad_gestacional')))
			}
		}
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

			let semanas = llevasemanas + " semanas y " + llevadias +" dias";

			var resultado = 'Semanas de embarazo: ' + semanas;

			return resultado
		}
	</script>
@endsection
