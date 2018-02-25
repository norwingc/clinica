<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Download</title>
    <link rel="stylesheet" href="{{ asset('css/reports.css') }}">
</head>
<body>
    <table>
        <tr>
            <th>Nombre:</th>
            <td>{{ $colposcopia->consulta->paciente->name }}</td>
        </tr>
         <tr>
            <th>Edad:</th>
            <td>{{ $colposcopia->edad }}</td>
        </tr>
         <tr>
            <th>Referido:</th>
            <td>{{ $colposcopia->referido }}</td>
        </tr>
        <tr>
            <th>Fecha:</th>
            <td>{{ $colposcopia->date }}</td>
        </tr>
    </table>

    <p class="sub_titul">Mapa del cuello uterino</p>

    <p>
        <b>Inspeccion Visual Con Acido Acetico</b><br>
        Interpretacion de IVAA: {{ $colposcopia->interpretacion_ivaa }}

        <div style="height: 130px; width: 50%">
            <img src="{{ asset('img/colposcopia1.jpg') }}" style="margin: auto; display: block">
        </div>
    </p>

    <p>
        <b>Aplicación De Lugol (Test De Schiller)</b><br>
        Interpretacion de aplicación de lugol: {{ $colposcopia->interpretacion_lugol }}

        <div style="height: 130px; width: 50%">
            <img src="{{ asset('img/colposcopia1.jpg') }}" style="margin: auto; display: block">
        </div>
    </p>

    <p>
        <b>Colposcopiaa</b><br>
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
