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
            <td>{{ $pelvico->consulta->paciente->name }}</td>
        </tr>
         <tr>
            <th>Edad:</th>
            <td>{{ $pelvico->edad }}</td>
        </tr>
         <tr>
            <th>Medico:</th>
            <td>{{ $pelvico->consulta->doctor }}</td>
        </tr>
        <tr>
            <th>Fecha:</th>
            <td>{{ $pelvico->created_at->format('d/m/Y') }}</td>
        </tr>
    </table>

    <p class="sub_titul">Se realiza ultrasonido en tiempo real encontrando:</p>

    <p>Vejia de: bordes: {{ $pelvico->bordes }}. Presencia de ecos en su interior: {{ $pelvico->ecos_interior }}</p>

    <p>Utero {{ $pelvico->utero }}</p>

    @if($pelvico->utero == 'Presente')
        <p>Forma: {{ $pelvico->forma }}. Bordes: {{ $pelvico->bordes }}. Paredes: {{ $pelvico->paredes }}</p>
        <p>
            Longitud: {{ $pelvico->longitud }}. Ancho: {{ $pelvico->ancho }}. Grosor: {{ $pelvico->grosor }}. Masas en musculo uterino: {{ $pelvico->masa_uterino }}.
            @if($pelvico->masa_uterino == 'Si')
                Numero de masas: {{ $pelvico->masa_uterino_cuantas }}. Cara: {{ $pelvico->cara }}. Localizacion de la masa: {{ $pelvico->localizacion_masa }}. Mediciones: {{ $pelvico->mediciones }}.
            @endif
        </p>
        <p>
            Presencia de tabique: {{ $pelvico->presencia_tabique }}.
            @if($pelvico->presencia_tabique == 'Si')
                   Medicion: {{ $pelvico->tabique_medicion }}.
            @endif
            Endometrio (mm): {{ $pelvico->endometrio }}. Modo: {{ $pelvico->endometrio_modo }}. Cavidad endometrial ocupada: {{ $pelvico->cavidad_endometrial }}.
            @if($pelvico->cavidad_endometrial == 'Si')
                Dispositivo intrauterino: {{ $pelvico->dispositivo_intrauterino }}. Saco gestacional: {{ $pelvico->saco_gestional }}.
                Saco gestacional Bordes: {{ $pelvico->saco_gestional_bordes }}. Ubicacion: {{ $pelvico->saco_gestional_ubicacion }}.
                Reaccion coridodecidual: {{ $pelvico->reaccion_coridodecidual }}. Presencia de vesicula vitelina: {{ $pelvico->presencia_vesicula }}.
                Presencia de yema embrionaria: {{ $pelvico->presencia_yema }}. Vitalidad: {{ $pelvico->vitalidad }}. Longitud craneo cauda (mm): {{ $pelvico->longitud_craneo }}.
                Edad gestacional: {{ $pelvico->edad_gestacional }}. Fecha estimada de parto: {{ $pelvico->fecha_parto }}.
            @endif
        </p>
    @endif

    <p class="sub_titul">Ovario Izquierdo</p>
    <ul>
        <p>Ovario: {{ $pelvico->ovario_izquierdo }}.</p>
        @if($pelvico->ovario_izquierdo == 'Presente')
            <p>
                Mide (mm): {{ $pelvico->ovario_izquierdo_1 }}. X (mm): {{ $pelvico->ovario_izquierdo_2 }}. Presencia de masa anexial: {{ $pelvico->presencia_masa_anexial_izquierdo }}
                @if($pelvico->presencia_masa_anexial_izquierdo == 'Si')
                    Tipo: {{ $pelvico->ovario_izquierdo_tipo }}. Vegetaciones: {{ $pelvico->ovario_izquierdo_vegetaciones }}. Septos: {{ $pelvico->ovario_izquierdo_septos }}.
                    Irregularidad de la masa: {{ $pelvico->ovario_izquierdo_irregularidad_masa }}. Vaso nutricio: {{ $pelvico->ovario_izquierdo_vaso_nutricio }}. Patron vascular: {{ $pelvico->ovario_izquierdo_patron_vascular }}.
                @endif
            </p>
        @endif
    </ul>
    <p class="sub_titul">Ovario Derecho</p>
    <ul>
        <p>Ovario: {{ $pelvico->ovario_derecho }}</p>
        @if($pelvico->ovario_derecho == 'Presente')
            <p>
                Mide (mm): {{ $pelvico->ovario_derecho_1 }}. X (mm): {{ $pelvico->ovario_derecho_2 }}. Presencia de masa anexial: {{ $pelvico->presencia_masa_anexial_derecho }}
                @if($pelvico->presencia_masa_anexial_derecho == 'Si')
                    Tipo: {{ $pelvico->ovario_derecho_tipo }}. Vegetaciones: {{ $pelvico->ovario_derecho_vegetaciones }}. Septos: {{ $pelvico->ovario_derecho_septos }}.
                    Irregularidad de la masa: {{ $pelvico->ovario_derecho_irregularidad_masa }}. Vaso nutricio: {{ $pelvico->ovario_derecho_vaso_nutricio }}. Patron vascular: {{ $pelvico->ovario_derecho_patron_vascular }}.
                @endif
            </p>
        @endif
    </ul>
    <p class="sub_titul">Conclusiones</p>
    <ul>
        <li>{{ $pelvico->concluciones }}</li>
        <li>Embarazo por longitud craneo caudal (semanas): {{ $pelvico->embarazo_lcc_semanas }}</li>
    </ul>
    <p class="sub_titul">Comentarios</p>
    <p>{{ $pelvico->comentarios }}</p>
</body>
</html>
