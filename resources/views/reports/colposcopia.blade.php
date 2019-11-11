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
                    <td>{{ $colposcopia->consulta->paciente->name }}</td>
                </tr>
                 <tr>
                    <th>Edad:</th>
                    <td>{{ $colposcopia->edad }}</td>
				</tr>
				@if($colposcopia->referido != '')
					<tr>
						<th>Referido:</th>
						<td>{{ $colposcopia->referido }}</td>
					</tr>
				@endif
                <tr>
                    <th>Fecha:</th>
                    <td>{{ $colposcopia->date }}</td>
                </tr>
            </table>
        </div>
    </div>

	<p class="sub_titul">Historia</p>
	<p>{{ $colposcopia->historia }}</p>


	<p class="sub_titul">Mapa del cuello uterino</p>

	<div class="row">
		<div class="col-xs-6">
			<p>
				<b>Inspeccion Visual Con Acido Acetico</b><br>
				Interpretacion de IVAA: <br> {{ $colposcopia->interpretacion_ivaa }}
			</p>
			<img src="{{ asset('img/colposcopia1.jpg') }}">
		</div>
		<div class="col-xs-6">
			<p>
				<b>Aplicación De Lugol (Test De Schiller)</b> <br>
				Interpretacion de aplicación de lugol: <br> {{ $colposcopia->interpretacion_lugol }}
			</p>
			<img src="{{ asset('img/colposcopia1.jpg') }}">
		</div>
	</div>

	<p>
		<b>Colposcopia</b><br>
		Clasificacion de colposcopia: {{ $colposcopia->clasificacion }}. Descripcion: {{ $colposcopia->descripcion_colposcopia }}.
	</p>


    <p>
        <b>Descripicon de resultado de colposcopia</b><br>
        Descripcion: {{ $colposcopia->descripcion }}.

        @if($colposcopia->descripcion == 'Con cambios menores')
            {{ $colposcopia->cambios_menores }}.
        @endif
        @if($colposcopia->descripcion == 'Con cambios mayores')
            {{ $colposcopia->cambios_mayores }}.
        @endif
        @if($colposcopia->descripcion == 'Sugestivo de carcinoma')
            {{ $colposcopia->sugestivo_carcinoma }}.
            @if($colposcopia->sugestivo_carcinoma == 'Otro')
                Descipcion: {{ $colposcopia->descripcion_carcinoma }}.
            @endif
        @endif

        Toma de biopsia: {{ $colposcopia->toma_biopsia }}.
        Vaginoscopia: {{ $colposcopia->vaginoscopia }}. @if($colposcopia->vaginoscopia == 'Anormal') Descripcion: {{ $colposcopia->vaginoscopia_descipcion }}. @endif
        Vulvoscopia: {{ $colposcopia->vulvoscopia }}. @if($colposcopia->vulvoscopia == 'Anormal') Descripcion: {{ $colposcopia->vulvoscopia_descipcion }}. @endif
        Lesiones perianales: {{ $colposcopia->lesiones_perianales }}. @if($colposcopia->lesiones_perianales == 'Anormal') Descripcion: {{ $colposcopia->lesiones_perianales_descipcion }}. @endif
    </p>

    @if($colposcopia->comentarios != null)
        <p class="sub_titl"><b>Comentarios</b></p>
        <p>{{ $colposcopia->comentarios }}</p>
    @endif

    @include('includes._firmas')
</body>
</html>
