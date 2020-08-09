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
                    <td>{{ $crioterapia->consulta->paciente->name }}</td>
                </tr>
                 <tr>
                    <th>Edad:</th>
                    <td>{{ $crioterapia->edad }}</td>
				</tr>
				@if($crioterapia->referido != '')
					<tr>
						<th>Referido:</th>
						<td>{{ $crioterapia->referido }}</td>
					</tr>
				@endif
                <tr>
                    <th>Fecha:</th>
                    <td>{{ $crioterapia->date }}</td>
                </tr>
            </table>
        </div>
    </div>

	<p class="sub_titul">Historia</p>
	<p>{{ $crioterapia->historia }}</p>

	<p class="sub_titul">Diagnóstico preoperatorio</p>
	<p>{{ $crioterapia->diagnostico_preoperatorio }}</p>

	<p class="sub_titul">Hallazgos</p>
	<p>{{ $crioterapia->hallazgos }}</p>

	<p class="sub_titul">Esquema de crioterapia</p>
	<p>{{ $crioterapia->esquema_crioterapia }}</p>

	<p class="sub_titul">Complicaciones</p>
	<p>{{ $crioterapia->complicaciones }}</p>

	<p class="sub_titul">Indicaciones</p>
	<ol>
		<li>Después de la crioterapia puede presenta flujo vaginal acuosos por 4 – 6 semanas</li>
		<li>Algunas pacientes pueden tener un ligero sangrado o dolor tipo cólico</li>
		<li>Tome analgésico indicado</li>
		<li>No se deberían de tener relaciones sexuales por un mes, si es imposible evitarlas, esperar 15 días y utilizar preservativo.</li>
		<li>Los datos de alarma son: sangrado activo, dolor intenso o secreción con mal olor.</li>
		<li>Antes cualquier dato de alarma favor llamar a su médico</li>
	</ol>

    @if($crioterapia->comentarios != null)
        <p class="sub_titl"><b>Comentarios</b></p>
        <p>{{ $crioterapia->comentarios }}</p>
    @endif

    @include('includes._firmas')
</body>
</html>
