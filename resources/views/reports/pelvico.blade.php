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
                    <td>{{ $pelvico->consulta->paciente->name }}</td>
                </tr>
                 <tr>
                    <th>Edad:</th>
                    <td>{{ $pelvico->edad }} {!! ($pelvico->edad_gestacional != '') ? ' / '. $pelvico->edad_gestacional : '' !!} </td>
                </tr>
                 <tr>
                    <th>Referido:</th>
                    <td>{{ $pelvico->referido }}</td>
                </tr>
                <tr>
                    <th>Fecha:</th>
                    <td>{{ $pelvico->date }} {!! ($pelvico->rh_tipo != '') ? ' / '. $pelvico->rh_tipo : '' !!}</td>
                </tr>
                <tr>
                    <th>Paridad</th>
                    <td>{{ $pelvico->paridad }} {!! ($pelvico->morbilidad != '') ? ' / '. $pelvico->morbilidad : '' !!} </td>
                </tr>
            </table>
        </div>
    </div>

    <p class="sub_titul">Se realiza ultrasonido en tiempo real encontrando:</p>

    <p>Vejia de: bordes: {{ $pelvico->bordes }}. Presencia de ecos en su interior: {{ $pelvico->ecos_interior }}</p>

    <p>Utero: {{ $pelvico->utero }}.

    @if($pelvico->utero == 'Presente')
       Forma: {{ $pelvico->forma }}. Bordes: {{ $pelvico->bordes }}. Paredes: {{ $pelvico->paredes }}

        Longitud: {{ $pelvico->longitud }}. Ancho: {{ $pelvico->ancho }}. Grosor: {{ $pelvico->grosor }}. Masas en musculo uterino: {{ $pelvico->masa_uterino }}.
        @if($pelvico->masa_uterino == 'Si' || $pelvico->masa_uterino == 'Unica' || $pelvico->masa_uterino == 'Multiple')
            Numero de masas: {{ $pelvico->masa_uterino_cuantas }}. Cara: {{ $pelvico->cara }}. Localizacion de la masa: {{ $pelvico->localizacion_masa }}. Mediciones: {{ $pelvico->mediciones }}mm.
        @endif

        Presencia de tabique: {{ $pelvico->presencia_tabique }}.
        @if($pelvico->presencia_tabique == 'Si')
               Medicion: {{ $pelvico->tabique_medicion }}mm.
        @endif

        <p>
            @if($pelvico->endometrio != '') Endometrio (mm): {{ $pelvico->endometrio }}. Modo: {{ $pelvico->endometrio_modo }}.@endif
            Cavidad endometrial ocupada: {{ $pelvico->cavidad_endometrial }}.
            @if($pelvico->cavidad_endometrial == 'Si')
                @if($pelvico->cavidad_endometrial_ocupada == 'Dispositivo intrauterino')
                    Dispositivo Intrauterino: {{ $pelvico->dispositivo_intrauterino }}.
                @else
                    Saco gestacional: {{ $pelvico->saco_gestional }}.
                    Saco gestacional Bordes: {{ $pelvico->saco_gestional_bordes }}. Ubicacion: {{ $pelvico->saco_gestional_ubicacion }}.
                    Reaccion coridodecidual: {{ $pelvico->reaccion_coridodecidual }}. Presencia de vesicula vitelina: {{ $pelvico->presencia_vesicula }}.
                    Presencia de yema embrionaria: {{ $pelvico->presencia_yema }}. Vitalidad: {{ $pelvico->vitalidad }}. Longitud craneo cauda (mm): {{ $pelvico->longitud_craneo }}.
                    Edad gestacional: {{ $pelvico->edad_gestacional_embarazo }}. Fecha estimada de parto: {{ date('d/m/Y', strtotime($pelvico->fecha_parto)) }}.
                @endif
            @endif
        </p>
    @endif

    <p class="sub_titul">Ovario Izquierdo</p>

    <p>
        Ovario: {{ $pelvico->ovario_izquierdo }}.
        @if($pelvico->ovario_izquierdo == 'Presente')
            Mide (mm): {{ $pelvico->ovario_izquierdo_1 }}. X (mm): {{ $pelvico->ovario_izquierdo_2 }}. Presencia de masa anexial: {{ $pelvico->presencia_masa_anexial_izquierdo }}
            @if($pelvico->presencia_masa_anexial_izquierdo == 'Si')
                Tipo: {{ $pelvico->ovario_izquierdo_tipo }}. Vegetaciones: {{ $pelvico->ovario_izquierdo_vegetaciones }}. Septos: {{ $pelvico->ovario_izquierdo_septos }}.
                Irregularidad de la masa: {{ $pelvico->ovario_izquierdo_irregularidad_masa }}. Vaso nutricio: {{ $pelvico->ovario_izquierdo_vaso_nutricio }}. Patron vascular: {{ $pelvico->ovario_izquierdo_patron_vascular }}.
            @endif
        @endif
    </p>

    <p class="sub_titul">Ovario Derecho</p>

    <p>
        Ovario: {{ $pelvico->ovario_derecho }}
        @if($pelvico->ovario_derecho == 'Presente')
            Mide (mm): {{ $pelvico->ovario_derecho_1 }}. X (mm): {{ $pelvico->ovario_derecho_2 }}. Presencia de masa anexial: {{ $pelvico->presencia_masa_anexial_derecho }}
            @if($pelvico->presencia_masa_anexial_derecho == 'Si')
                Tipo: {{ $pelvico->ovario_derecho_tipo }}. Vegetaciones: {{ $pelvico->ovario_derecho_vegetaciones }}. Septos: {{ $pelvico->ovario_derecho_septos }}.
                Irregularidad de la masa: {{ $pelvico->ovario_derecho_irregularidad_masa }}. Vaso nutricio: {{ $pelvico->ovario_derecho_vaso_nutricio }}. Patron vascular: {{ $pelvico->ovario_derecho_patron_vascular }}.
            @endif
        @endif
    </p>

    <p class="sub_titul">Conclusiones</p>
    <ul>
        <li>{{ $pelvico->concluciones }}</li>
        @if($pelvico->concluciones_otras != '')
            <li>{{ $pelvico->concluciones_otras }}</li>
        @endif
        @if($pelvico->embarazo_lcc_semanas != '')
            <li>Embarazo por longitud craneo caudal (semanas): {{ $pelvico->embarazo_lcc_semanas }}</li>
        @endif
    </ul>


    @if($pelvico->comentarios != '')
        <p class="sub_titul">Comentarios</p>
        <p>{{ $pelvico->comentarios }}</p>
    @endif

    @if($pelvico->recomendaciones != '')
        <p class="sub_titul">Recomendaciones</p>
        <p>{{ $pelvico->recomendaciones }}</p>
    @endif

    @include('includes._firmas')
</body>
</html>
