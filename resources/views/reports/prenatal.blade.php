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
            <td>{{ $prenatal->consulta->paciente->name }}</td>
        </tr>
         <tr>
            <th>Edad:</th>
            <td>{{ $prenatal->edad }}</td>
        </tr>
         <tr>
            <th>Medico:</th>
            <td>{{ $prenatal->consulta->doctor }}</td>
        </tr>
        <tr>
            <th>Fecha:</th>
            <td>{{ $prenatal->created_at->format('d/m/Y') }}</td>
        </tr>
    </table>

    <p class="sub_titul">Consulta de atencion prenatal: {{ $prenatal->numero }}</p>

    <p>
      Edad gestacional por ulrasonido: {{ $prenatal->edad_gestacional }}
    </p>
    <p>Diagnostico Previo: {{ $prenatal->diagnostico_previo }}</p>

    <p>
      Presion Arterial Brazo Derecho: {{ $prenatal->presion_arterial_derecho }}mmhg. Presion Arterial Brazo Izquierdo: {{ $prenatal->presion_arterial_izquierdo }}mmhg.
      Presion Arterial Media: {{ $prenatal->presion_arterial_media }}mmhg. Frecuencia Cardiaca: {{ $prenatal->signos_vitales_fc }}. Frecuencia Respiratoria: {{ $prenatal->signos_vitales_fr }}.
      Temeratura: {{ $prenatal->temperatura }} ºC. Peso Actual {{ $prenatal->peso_actual }}lb. Incremente de peso: {{ $prenatal->incremento_peso }}lb.
    </p>

    <p><b>Subjetivo:</b> {{ $prenatal->subjetivo }}</p>

    <p>
      <b>Objetivo</b> <br>
      Estado General: {{ $prenatal->estado_general }}. Alteraciones Hemodinámicas: {{ $prenatal->alteraciones_hermodinamicas }}. Alteraciones Cardiopulmonar: {{ $prenatal->alteraciones_cardiopulmonar }}.
      Pezon y Areola: {{ $prenatal->pezon_areola }}. Movimientos Fetales: {{ $prenatal->movimientos_fetales }}. FCF por minuto: {{ $prenatal->fcf_minuto }}. Actividad Uterina: {{ $prenatal->actividad_uterina }}.
      Utero Grávido Abdominal: {{ $prenatal->utero_gravido }}.
      @if($prenatal->utero_gravido == 'Si')
        Presentacion: {{ $prenatal->presentacion }}. Situacion: {{ $prenatal->situacion }}. Posicion: {{ $prenatal->posicion }}.
      @endif
      Utero Intrapelvico: {{ $prenatal->utero_intrapelvico }}. Peristalsis: {{ $prenatal->peristalsis }}. AFU: {{ $prenatal->afu }}.
    </p>

    <p>
      <b>Examen Ginecologico: {{ $prenatal->examen_ginecologico }}</b> <br>
      @if($prenatal->examen_ginecologico == 'Si')
        Genitales externos: {{ $prenatal->genitales_externos }}. Vagina Normo Térmica: {{ $prenatal->vagina_normo_termica }}. Vagina Normo Elástica: {{ $prenatal->vagina_normo_elastica }}.
        Lesiones: {{ $prenatal->vagina_lesiones }}. @if($prenatal->vagina_lesiones == 'Si') Descripcion: {{ $prenatal->vagina_lesiones_si }}. @endif
        Leucorrea: {{ $prenatal->vagina_leucorrea }} @if($prenatal->vagina_leucorrea == 'Si') Descripcion: {{ $prenatal->vagina_leucorrea_descripcion }}. @endif
        Fetidez: {{ $prenatal->vagina_fetidez }}. Sangrado: {{ $prenatal->vagina_sangrado }}. Hidrorrea: {{ $prenatal->vagina_hidrorrea }}. Cervix: {{ $prenatal->vagina_cervix }}.
        Consistencia: {{ $prenatal->vagina_consistencia }}. Borramiento: {{ $prenatal->borramiento }} %. Dilatacion: {{ $prenatal->dilatacion }}cm. Calotas: {{ $prenatal->vagina_calotas }}.
        Membranas Integras: {{ $prenatal->vagina_membranas_integras }}. Plano: {{ $prenatal->vagina_plano }}. Pelvis: {{ $prenatal->vagina_pelvis }}.
        Desproporcion Cefalopelvica: {{ $prenatal->vagina_desproporcion_cefalopelvica }}. @if($prenatal->vagina_desproporcion_cefalopelvica != 'No Valorable') Descipcion: {{ $prenatal->vagina_desproporcion_cefalopelvica_descripcion }}. @endif
        Miembros Inferiores Edema: {{ $prenatal->vagina_miembros_inferiores_edema }}. @if($prenatal->vagina_miembros_inferiores_edema != 'No') Clasificacion de edema: {{ $prenatal->vagina_miembros_inferiores_edema_si }}. @endif
        Neurológico Conservado: {{ $prenatal->vagina_ceurologico_conservado }}. @if($prenatal->vagina_ceurologico_conservado == 'Si') Alteracion: {{ $prenatal->vagina_ceurologico_conservado_si }}. @endif
      @endif
    </p>

    <p>
      <b>Examen de laboratorio: {{ $prenatal->porta_examen }}</b> <br>
      @if($prenatal->porta_examen == 'Si')
        {!! ($prenatal->leocitos != null) ? "Leucocitos xmm3:  $prenatal->leocitos." : "" !!}
        {!! ($prenatal->segmentos != null) ? "Segmentos:  $prenatal->segmentos%." : "" !!}
        {!! ($prenatal->linfocitos != null) ? "Linfocitos:  $prenatal->linfocitos%." : "" !!}
        {!! ($prenatal->hemoglobina != null) ? "Hemoglobina gr/dl:  $prenatal->hemoglobina." : "" !!}
        {!! ($prenatal->hematocrito != null) ? "Hematocrito:  $prenatal->hematocrito%." : "" !!}
        {!! ($prenatal->eosinofilos != null) ? "Eosinofilos:  $prenatal->eosinofilos." : "" !!}
        {!! ($prenatal->resticulocitos != null) ? "Resticulocitos:  $prenatal->resticulocitos." : "" !!}
        {!! ($prenatal->glicemia != null) ? "Glicemia gr/dl:  $prenatal->glicemia." : "" !!}
        {!! ($prenatal->pospandrial_una != null) ? "1 Hr Pospandrial gr/dl:  $prenatal->pospandrial_una." : "" !!}
        {!! ($prenatal->pospandrial_dos != null) ? "2 Hr Pospandrial gr/dl:  $prenatal->pospandrial_dos." : "" !!}
        {!! ($prenatal->creatinina != null) ? "Creatinina:  $prenatal->creatinina." : "" !!}
        {!! ($prenatal->ego_leucocitos != null) ? "EGO Leucocitos:  $prenatal->ego_leucocitos." : "" !!}
        {!! ($prenatal->nitritos != null) ? "Nitritos:  $prenatal->nitritos." : "" !!}
        {!! ($prenatal->glucosa != null) ? "Glucosa:  $prenatal->glucosa." : "" !!}
        {!! ($prenatal->proteinas != null) ? "Proteinas:  $prenatal->proteinas." : "" !!}
        {!! ($prenatal->cilindros != null) ? "Cilindros:  $prenatal->cilindros." : "" !!}
        {!! ($prenatal->papanicolaou != null) ? "Papanicolaou:  $prenatal->papanicolaou." : "" !!}
        @if($prenatal->papanicolaou == 'Si')
          Fecha Papanicolaou: {{ $prenatal->fecha_papanicolaou }}. Resultado Papanicolaou: {{ $prenatal->resultado_papanicolaou }}.
        @endif
        {!! ($prenatal->cultivos_vaginales != null) ? "Cultivos Vaginales:  $prenatal->cultivos_vaginales." : "" !!}
        {!! ($prenatal->rpr_positivo != null) ? "RPR:  $prenatal->rpr_positivo." : "" !!}
        {!! ($prenatal->vih_positivo != null) ? "VIH:  $prenatal->vih_positivo." : "" !!}
        {!! ($prenatal->urocultivo != null) ? "Urocultivo:  $prenatal->urocultivo." : "" !!}
        {!! ($prenatal->transaminasas != null) ? "Transaminasas:  $prenatal->transaminasas." : "" !!}
        {!! ($prenatal->billiruinas != null) ? "Billiruinas:  $prenatal->billiruinas." : "" !!}
        {!! ($prenatal->ldh != null) ? "LDH:  $prenatal->ldh." : "" !!}
        {!! ($prenatal->tp != null) ? "TP:  $prenatal->tp." : "" !!}
        {!! ($prenatal->tpt != null) ? "TPT:  $prenatal->tpt." : "" !!}
        {!! ($prenatal->fibrinogeno != null) ? "Fibrinogeno:  $prenatal->fibrinogeno." : "" !!}
        {!! ($prenatal->acido_urico != null) ? "Acido Urico:  $prenatal->acido_urico." : "" !!}
      @endif
    </p>

    <p>
      <b>Ultrasonido: {{ $prenatal->ultrasonido }}</b> <br>
      @if($prenatal->ultrasonido == 'Si')
        Ultrasonido Descripcion: {{ $prenatal->ultrasonido_si }}
      @endif
    </p>

    <p>
      <b>Edad Gestacional</b> <br>
      Semanas: {{ $prenatal->edad_gestional_semanas }}. Dias: {{ $prenatal->edad_gestional_dias }}. ILA: {{ $prenatal->ila }}. Placenta Grado: {{ $prenatal->planceta_grado }}.
      Doppler Normal: {{ $prenatal->doppler_normal }}. Incremento de Peso Materno: {{ $prenatal->incremento_peso_materno }}. Incremento de Curva Fetal: {{ $prenatal->incremento_curva_fetal }}.
      Maduración Pulmonar: {{ $prenatal->maduracion_pulmonar }} @if($prenatal->maduracion_pulmonar == 'Si') Semanas que si cumplio maduracion: {{ $prenatal->maduracion_pulmonal_semanas }}. @endif
    </p>

    @if($prenatal->comentarios != null)
      <p>
        <b>Comentarios: </b> <br>
        {{ $prenatal->comentarios }}
      </p>
    @endif

    <p>
      <b>Plan Medico:</b> <br>
      {{ $prenatal->plan_medico }}
    </p>

    <p>
      <b>Examenes de Laboratorio:</b><br>
      {{ $prenatal->examen_laboratorio }}
    </p>
</body>
</html>
