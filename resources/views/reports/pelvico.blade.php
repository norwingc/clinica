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

    <li>Vejia de bordes:  {{ $pelvico->bordes }}</li>
    <li>Presencia de ecos en su interior: {{ $pelvico->ecos_interior }}</li>
    <li style="list-style-type: square">Utero: {{ $pelvico->utero }} </li>

    @if($pelvico->utero == 'Presente')
        <ul>
            <li>Forma: {{ $pelvico->forma }}</li>
            <li>Bordes: {{ $pelvico->bordes }}</li>
            <li>Paredes: {{ $pelvico->paredes }}</li>
        </ul>

        <p class="sub_titul">Medicion</p>
        <ul>
            <li>Longitud: {{ $pelvico->longitud }}</li>
            <li>Ancho: {{ $pelvico->ancho }}</li>
            <li>Grosor: {{ $pelvico->grosor }}</li>
            <li>Masas en musculo uterino: {{ $pelvico->masa_uterino }}</li>
            @if($pelvico->masa_uterino == 'Si')
                <ul>
                    <li>Numero de masas: {{ $pelvico->masa_uterino_cuantas }}</li>
                    <li>Cara: {{ $pelvico->cara }}</li>
                    <li>Localizacion de la masa: {{ $pelvico->localizacion_masa }}</li>
                    <li>Mediciones {{ $pelvico->mediciones }}</li>
                </ul>
            @endif
            <li>Presencia de tabique {{ $pelvico->presencia_tabique }}</li>
            @if($pelvico->presencia_tabique == 'Si')
                <ul>
                    <li>Medicion: {{ $pelvico->tabique_medicion }}</li>
                </ul>
            @endif
            <li>Endometrio (mm): {{ $pelvico->endometrio }}</li>
            <li>Modo: {{ $pelvico->endometrio_modo }}</li>
            <li>Cavidad endometrial ocupada: {{ $pelvico->cavidad_endometrial }}</li>
            @if($pelvico->cavidad_endometrial == 'Si')
                <ul>
                    <li>Dispositivo intrauterino: {{ $pelvico->dispositivo_intrauterino }}</li>
                    <li>Saco gestacional: {{ $pelvico->saco_gestional }}</li>
                    <li>Saco gestacional Bordes: {{ $pelvico->saco_gestional_bordes }}</li>
                    <li>Ubicacion: {{ $pelvico->saco_gestional_ubicacion }}</li>
                    <li>Reaccion coridodecidual: {{ $pelvico->reaccion_coridodecidual }}</li>
                    <li>Presencia de vesicula vitelina: {{ $pelvico->presencia_vesicula }}</li>
                    <li>Presencia de yema embrionaria: {{ $pelvico->presencia_yema }}</li>
                    <li>Vitalidad: {{ $pelvico->vitalidad }}</li>
                    <li>Longitud craneo cauda (mm): {{ $pelvico->longitud_craneo }}</li>
                    <li>Edad gestacional: {{ $pelvico->edad_gestacional }}</li>
                    <li>Fecha estimada de parto: {{ $pelvico->fecha_parto }}</li>
                </ul>
            @endif
        </ul>
    @endif
    <p class="sub_titul">Ovario Izquierdo</p>
    <ul>
        <li>Ovario: {{ $pelvico->ovario_izquierdo }}</li>
        @if($pelvico->ovario_izquierdo == 'Presente')
            <ul>
                <li>Mide (mm): {{ $pelvico->ovario_izquierdo_1 }}</li>
                <li>X (mm): {{ $pelvico->ovario_izquierdo_2 }}</li>
                <li>Presencia de masa anexial: {{ $pelvico->presencia_masa_anexial_izquierdo }}</li>
                @if($pelvico->presencia_masa_anexial_izquierdo == 'Si')
                    <ul>
                        <li>Tipo: {{ $pelvico->ovario_izquierdo_tipo }}</li>
                        <li>Vegetaciones: {{ $pelvico->ovario_izquierdo_vegetaciones }}</li>
                        <li>Septos: {{ $pelvico->ovario_izquierdo_septos }}</li>
                        <li>Irregularidad de la masa: {{ $pelvico->ovario_izquierdo_irregularidad_masa }}</li>
                        <li>Vaso nutricio: {{ $pelvico->ovario_izquierdo_vaso_nutricio }}</li>
                        <li>Patron vascular: {{ $pelvico->ovario_izquierdo_patron_vascular }}</li>
                    </ul>
                @endif
            </ul>
        @endif
    </ul>
    <p class="sub_titul">Ovario Derecho</p>
    <ul>
        <li>Ovario: {{ $pelvico->ovario_derecho }}</li>
        @if($pelvico->ovario_derecho == 'Presente')
            <ul>
                <li>Mide (mm): {{ $pelvico->ovario_derecho_1 }}</li>
                <li>X (mm): {{ $pelvico->ovario_derecho_2 }}</li>
                <li>Presencia de masa anexial: {{ $pelvico->presencia_masa_anexial_derecho }}</li>
                @if($pelvico->presencia_masa_anexial_derecho == 'Si')
                    <ul>
                        <li>Tipo: {{ $pelvico->ovario_derecho_tipo }}</li>
                        <li>Vegetaciones: {{ $pelvico->ovario_derecho_vegetaciones }}</li>
                        <li>Septos: {{ $pelvico->ovario_derecho_septos }}</li>
                        <li>Irregularidad de la masa: {{ $pelvico->ovario_derecho_irregularidad_masa }}</li>
                        <li>Vaso nutricio: {{ $pelvico->ovario_derecho_vaso_nutricio }}</li>
                        <li>Patron vascular: {{ $pelvico->ovario_derecho_patron_vascular }}</li>
                    </ul>
                @endif
            </ul>
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
