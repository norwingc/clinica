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
            padding-top: 8em;
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
        .page-break {
            page-break-after: always;
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
      Presion Arterial: {{ $ginecologica->signos_vitales_pa }} mmhg, Frecuencia Cardiaca: {{ $ginecologica->signos_vitales_fc }}. Frecuencia respiratoria: {{ $ginecologica->signos_vitales_fr }}.
      Peso Actual (lb): {{ $ginecologica->peso_actual }}, Incremente de peso (lb): {{ $ginecologica->incremento_peso }}.
    </p>

    <p class="sub_titul"><b>Subjetivo: </b></p>
    <p>{{ $ginecologica->subjetivo }}</p>

    <p class="sub_titul"><b>Objetivo</b></p>

    <p>Estado General: {{ $ginecologica->estado_general }}. Cardioplumonar: {{ $ginecologica->cardioplumonar }} </p>


    <p class="sub_titul"><b>Ginecologico</b></p>
    <p>
      Genitales Externos: {{ $ginecologica->genitales_externos }}. Cervix Posicion Y Consistencia: {{ $ginecologica->cervix }}. Ultrasonido: {{ $ginecologica->ultrasonido }}.
    </p>

    @if($ginecologica->comentarios != '')
      <p class="sub_titul"><b>Comentarios</b></p>
      <p>{{ $ginecologica->comentarios }}</p>
    @endif

    @include('includes._firmas')

    @if($ginecologica->plan_medico != '' || $ginecologica->examen_laboratorio != '' || $ginecologica->plan_medico_otro != '' || $ginecologica->examen_laboratorio_otro != '')
        <div class="page-break"></div>
    @endif

    @if($ginecologica->plan_medico != ''  || $ginecologica->plan_medico_otro != '')
        <p class="sub_titul"><b>Plan Medico:</b></p>
        @php
            $plan1 = explode(',', $ginecologica->plan_medico);
            $plan2 = explode(',', $ginecologica->plan_medico_otro);
        @endphp

        <ul>
            @for ($i = 0; $i < count($plan1); $i++)
                <li>{{ $plan1[$i] }}</li>
            @endfor
            @for ($i = 0; $i < count($plan2); $i++)
                <li>{{ $plan2[$i] }}</li>
            @endfor
        </ul>
    @endif

    @if($ginecologica->examen_laboratorio != '' || $ginecologica->examen_laboratorio_otro != '')
        <p class="sub_titul"><b>Examenes de Laboratorio:</b></p>
        @php
            $examen1 = explode(',', $ginecologica->examen_laboratorio);
            $examen2 = explode(',', $ginecologica->examen_laboratorio_otro);
        @endphp
        <ul>
            @for ($i = 0; $i < count($examen1); $i++)
                <li>{{ $examen1[$i] }}</li>
            @endfor
            @for ($i = 0; $i < count($examen2); $i++)
                <li>{{ $examen2[$i] }}</li>
            @endfor
        </ul>
    @endif
</body>
</html>
