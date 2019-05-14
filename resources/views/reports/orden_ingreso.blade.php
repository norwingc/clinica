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
            padding-bottom: 8em;
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
        .bold{
            font-weight: bold;
        }
    </style>
</head>
<body>
	<h5 class="sub_titul" style="margin-bottom:4em"><b>ORDEN DE INGRESO A HOSPITAL {{ $orden->hospital }}</b></h5>
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <table class="table-striped">
                <tr>
                    <th>Nombre:</th>
                    <td>{{ $orden->paciente->name }}</td>
				</tr>
				<tr>
					<th>Cedula:</th>
					<td>{{ $orden->paciente->id_number }}</td>
				</tr>
                <tr>
                    <th>Edad:</th>
                    <td>{{ $orden->paciente->age }} años</td>
                </tr>

                <tr>
                    <th>Fecha:</th>
                    <td>{{ date('d/m/Y', strtotime($orden->date)) }}</td>
                </tr>
                <tr>
                    <th>Paridad</th>
                    <td>{{ $orden->paciente->paridad }} / {{ $orden->paciente->morbilidad }} </td>
                </tr>
            </table>
        </div>
	</div>

	<p>
		{{ $orden->paciente->contacto }} ({{ $orden->paciente->parentesco }})<br>
		{{ $orden->paciente->contacto_celular }}
	</p>

	<h5 class="sub_titul text-uppercase" style="text-align:left; margin: 2em 0"><b>Motivo de ingreso</b></h5>
	<p>Ingreso para <b>{{ $orden->motivo_ingreso }}</b></p>

	<h5 class="sub_titul text-uppercase" style="text-align:left; margin: 2em 0"><b>Sala</b></h5>
	<p>{{ $orden->sala }}</p>

	<h5 class="sub_titul text-uppercase" style="text-align:left; margin: 2em 0"><b>Diagnostico de ingreso</b></h5>
	<p>{{ $orden->diagnostico_ingreso }}</p>

	<h5 class="sub_titul text-uppercase" style="text-align:left; margin: 2em 0"><b>indicaciones</b></h5>
	@php
		$indicaciones = explode(',', $orden->indicaciones)
	@endphp
	@for ($i = 0; $i < count($indicaciones); $i++)
		<li>{{ $indicaciones[$i] }}</li>
	@endfor

	<h5 class="text-center"><b>Reportar eventos: Clinica 22277635 / 84654680</b></h5>

	@include('includes._firmas')
</body>
</html>
