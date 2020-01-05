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
