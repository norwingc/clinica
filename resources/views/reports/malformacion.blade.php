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
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <table class="table-striped">
                <tr>
                    <th>Nombre:</th>
                    <td>{{ $malformacion->consulta->paciente->name }}</td>
                </tr>
                 <tr>
                    <th>Edad:</th>
                    <td>{{ $malformacion->edad }} {!! ($malformacion->edad_gestacional != '') ? ' / '. $malformacion->edad_gestacional : '' !!} </td>
				</tr>
				@if($malformacion->referido != '')
					<tr>
						<th>Referido:</th>
						<td>{{ $malformacion->referido }}</td>
					</tr>
				@endif
                <tr>
                    <th>Fecha:</th>
                    <td>{{ $malformacion->date }} {!! ($malformacion->rh_tipo != '') ? ' / '. $malformacion->rh_tipo : '' !!}</td>
                </tr>
                <tr>
                    <th>Paridad</th>
                    <td>{{ $malformacion->paridad }} {!! ($malformacion->morbilidad != '') ? ' / '. $malformacion->morbilidad : '' !!} </td>
                </tr>
            </table>
        </div>
	</div>
	<div class="row">
		<div class="col-xs-5 col-xs-offset-3">
			<table class="table-striped">
				<tr>
					<th colspan="3" style="text-align: center">SOMATOMETRIA</th>
				</tr>
				<tr>
					<th>Parámetro</th>
					<th>Medida mm</th>
					<th>Semanas</th>
				</tr>
				<tr>
					<th>DBP</th>
					<td>{{ $malformacion->dbp_medida }}</td>
					<td>{{ $malformacion->dbp_semanas }}</td>
				</tr>
				<tr>
					<th>CC</th>
					<td>{{ $malformacion->cc_medida }}</td>
					<td>{{ $malformacion->cc_semanas }}</td>
				</tr>
				<tr>
					<th>CA</th>
					<td>{{ $malformacion->ca_medida }}</td>
					<td>{{ $malformacion->ca_semanas }}</td>
				</tr>
				<tr>
					<th>LF</th>
					<td>{{ $malformacion->lf_medida }}</td>
					<td>{{ $malformacion->lf_semanas }}</td>
				</tr>
				<tr>
					<th>Humero</th>
					<th>{{ $malformacion->humero_medida }}</th>
					<th>{{ $malformacion->humero_semanas }}</th>
				</tr>
				<tr>
					<th>Radio</th>
					<th>{{ $malformacion->radio_medida }}</th>
					<th>{{ $malformacion->radio_semanas }}</th>
				</tr>
				<tr>
					<th>Cúbito</th>
					<th>{{ $malformacion->cubito_medida }}</th>
					<th>{{ $malformacion->cubito_semanas }}</th>
				</tr>
				<tr>
					<th>Tibia</th>
					<th>{{ $malformacion->tibia_medida }}</th>
					<th>{{ $malformacion->tibia_semanas }}</th>
				</tr>
				<tr>
					<th>Peroné</th>
					<th>{{ $malformacion->perone_medida }}</th>
					<th>{{ $malformacion->perone_semanas }}</th>
				</tr>
				<tr>
					<th>Cerebelo</th>
					<th>{{ $malformacion->cerebelo_medida }}</th>
					<th>{{ $malformacion->cerebelo_semanas }}</th>
				</tr>
				<tr>
					<th>Cisterna magna</th>
					<td colspan="2" class="text-center">{{ $malformacion->cisterna_magna }}</td>
				</tr>
				<tr>
					<th>Pliegue nucal</th>
					<td colspan="2" class="text-center">{{ $malformacion->pliegue_nucal }}</td>
				</tr>
				<tr>
					<th>Fetometría promedio</th>
					<td colspan="2" class="text-center">{{ $malformacion->fetometria_promedio }}</td>
				</tr>
				<tr>
					<th>Percentil</th>
					<td colspan="2" class="text-center">{{ $malformacion->percentil }}</td>
				</tr>
				<tr>
					<th>Peso fetal</th>
					<td colspan="2" class="text-center">{{ $malformacion->peso_fetal }}</td>
				</tr>
				<tr>
					<th>Fecha de parto estimada</th>
					<td colspan="2">{{ date('d/m/Y', strtotime($malformacion->fecha_parto)) }}</td>
				</tr>
			</table>
		</div>
	</div>

	<p class="sub_titul"><b>Descripcion Fetal</b></p>

	<p>{{ $malformacion->descripcion_fetal }}</p>

	<p>Revision: {{ $malformacion->revision }}</p>

    <p class="sub_titul"><b>Conclusion</b></p>

    <p style="margin:0">Embarazo por fetometría de: {{ $malformacion->conclusion_embarazo_gestacion }}</p>
    <p style="margin:0">{{ $malformacion->concluciones }}</p>

     @if($malformacion->comentarios != '')
        <p class="sub_titul"><b>Comentarios</b></p>
        <p>{{ $malformacion->comentarios }}</p>
    @endif

    @if($malformacion->recomendaciones != '')
        <p class="sub_titul"><b>Recomendaciones</b></p>
        <p>{{ $malformacion->recomendaciones }}</p>
    @endif

    @include('includes._firmas')
</body>
