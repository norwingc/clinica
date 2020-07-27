<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Download</title>
	<style>
		<?php include(base_path().'/css/bootstrap.min.css');?>
	</style>
	<style>
		body{
			text-align: justify;
			font-size: 1.1em;
			color: #404040;
			padding-top: 12em;
			padding-bottom: 7em;
		}
		.sub_titul{
			color: #3c8dbc;
			text-align: center;
			text-decoration: underline;
			font-weight: bold;
			margin-top: 1em;
		}
		table{
			width: 100%;
		}
	</style>
</head>
<body>
<div class="row">
	<div class="col-xs-6 col-xs-offset-3">
		<table class="table-striped">
			<tr>
				<th>Nombre:</th>
				<td>{{ $paciente->name }}</td>
			</tr>
			<tr>
				<th>Edad:</th>
				<td>{{ $paciente->age}} años</td>
			</tr>
			@if($paciente->referido != '')
				<tr>
					<th>Referido:</th>
					<td>{{ $paciente->referido }}</td>
				</tr>
			@endif
			<tr>
				<th>Fecha:</th>
				<td>{{ date('d/m/Y') }} </td>
			</tr>
			<tr>
				<th>Paridad</th>
				<td>{{ $paciente->paridad }} {!! ($paciente->morbilidad != '') ? ' / '. $paciente->morbilidad : '' !!} </td>
			</tr>
		</table>
	</div>
</div>

<p class="sub_titul" style="margin-top: 3em">Antecendentes Familares</p>
<p>{{ $paciente->atencion_prenatal->atencedenetes_familiares }}</p>

<p class="sub_titul">Antecendentes Patológicos personales</p>
<p style="margin-bottom: 3em">{{ $paciente->atencion_prenatal->atencedenetes_personales }}</p>

<p><b>Fecha último evento obstétrico:</b> {{ $paciente->atencion_prenatal->fecha_ultimo_evento_obstetrico }}</p>
<p>
	<b>Peso inicial de embarazo (kg):</b> {{ $paciente->atencion_prenatal->peso_inicio_embarazo }}
	<b>Aumenteo de peso en todo el embarazo (kg):</b> {{ $paciente->atencion_prenatal->aumento_peso_embarazo }}
</p>
<p>
	<b>Tipo y RH paciente:</b> {{ $paciente->tipo_rh }}
	<b>Tipo y RH Esposo:</b> {{ $paciente->atencion_prenatal->tipo_rh_esposo }}
</p>
<p>
	<b>FUR:</b> {{ $paciente->atencion_prenatal->fur }}
	<b>Semanas de gestación:</b> {{ $paciente->atencion_prenatal->semana_gestacionz }}
	<b>Peso Fetal:</b> {{ $paciente->atencion_prenatal->peso_fetal }}
</p>
<p>
	<b>Maduraci&oacute;n pulmonar semans cumplidas:</b> {{ $paciente->atencion_prenatal->maduracion_pulmonar_semanas_complidas }}
</p>

<table class="table-striped table-sm" style="margin-top: 3em">
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

@include('includes._firmas')
</body>
</html>
