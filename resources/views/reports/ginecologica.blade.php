<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Download</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body{
            text-align: justify;
            font-size: 1.1em:
            color: #404040;
            padding-top: 8em;
            padding-bottom: 6em;
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
                    <td>{{ $ginecologica->consulta->paciente->name }}</td>
                </tr>
                 <tr>
                    <th>Edad:</th>
                    <td>{{ $ginecologica->edad }}</td>
                </tr>
                 <tr>
                    <th>Referido:</th>
                    <td>{{ $ginecologica->referido }}</td>
                </tr>
                <tr>
                    <th>Fecha:</th>
                    <td>{{ $ginecologica->date }}</td>
                </tr>
            </table>
        </div>
    </div>

    <p class="sub_titul"><b>CONSULTA GINECOLOGICA</b></p>

    <p class="sub_titul"><b>Diagnostico Previo</b></p>
    <p style="margin: 0">{{ $ginecologica->diagnostico_previo }}</p>

    <p class="sub_titul"><b>Signos Vitales</b></p>
    <p>
      Presion Arterial: {{ $ginecologica->signos_vitales_pa }}, Frecuencia Cardiaca: {{ $ginecologica->signos_vitales_fc }}. Frecuencia respiratoria: {{ $ginecologica->signos_vitales_fr }}.
      Peso Actual (lb): {{ $ginecologica->peso_actual }}, Incremente de peso (lb): {{ $ginecologica->incremento_peso }}.
    </p>

    <p class="sub_titul"><b>Subjetivo: </b></p>
    <p>{{ $ginecologica->subjetivo }}</p>

    <p class="sub_titul"><b>Objetivo</b></p>

    <p>Estado General: {{ $ginecologica->estado_general }}. Cardioplumonar: {{ $ginecologica->cardioplumonar }} </p>


    <p class="sub_titul"><b>Ginecologico</b></p>
    <p>
      Genitales Externos: {{ $ginecologica->genitales_externos }}. Cervix Posicion Y Consistencia: {{ $ginecologica->cervix }}.
      Examenes De Laboratorio: {{ $ginecologica->examenes }}. Ultrasonido: {{ $ginecologica->ultrasonido }}.
    </p>

    <p>
      <b>Plan:</b>
      {{ $ginecologica->plan }}
    </p>

    @if($ginecologica->comentarios != '')
      <p class="sub_titul"><b>Comentarios</b></p>
      <p>{{ $ginecologica->comentarios }}</p>
    @endif

    @include('includes._firmas')
</body>
</html>
