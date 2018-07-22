
<p>
    <b>Motivo de la consulta:</b>
    {{ $historia->motivo }}
</p>

<p>
    <b>Historia de la Enfermedad Actual:</b>
    {{ $historia->historia }}
</p>

<p class="sub_titul">Antecedentes Familiares Patológicos</p>
    Diabetes: {{ $historia->diabetes_familiar }}.
    @if($historia->diabetes_familiar == 'Si')
        Familiar: {{ $historia->diabetes_familiar_si }}.
    @endif
    Hipertensión arterial crónica: {{ $historia->hipertension_arterial_familiar }}.
    @if($historia->hipertension_arterial_familiar == 'Si')
        Familiar: {{ $historia->hipertension_arterial_familiar_si }}.
    @endif
    Cardiopatía: {{ $historia->cardiopatia_familiar }}.
    @if($historia->cardiopatia_familiar == 'Si')
        Familiar: {{ $historia->cardiopatia_familiar_si }}.
    @endif
    Nefropatías: {{ $historia->nefropatias_familiar }}.
    @if($historia->nefropatias_familiar == 'Si')
        Familiar: {{ $historia->nefropatias_familiar_si }}.
    @endif
    Enfermedad Tiroidea: {{ $historia->tiroidea_familiar }}.
    @if($historia->tiroidea_familiar == 'Si')
        Familiar: {{ $historia->tiroidea_si_familiar }}.
    @endif
    Enfermedad Inmunológica: {{ $historia->enfermedad_inmunologica_familiar }}.
    @if($historia->enfermedad_inmunologica_familiar == 'Si')
        Enfermedades: {{ $historia->enfermedad_inmunologica_familiar_si_efermedad }}.
        Familiar: {{ $historia->enfermedad_inmunologica_familiar_si_familiar }}.
    @endif
    Enfermedad Inmunológica: {{ $historia->enfermedad_oncologica_familiar }}.
    @if($historia->enfermedad_oncologica_familiar == 'Si')
        Enfermedades: {{ $historia->enfermedad_oncologica_familiar_si }}.
    @endif
    Malformación Congénita: {{ $historia->malformacion_congenita_familiar }}.
    @if($historia->malformacion_congenita_familiar == 'Si')
        Malformación: {{ $historia->malformacion_congenita_familiar_si }}.
    @endif
    Pre Eclampsia: {{ $historia->pre_eclampsia_familiar }}.
    @if($historia->pre_eclampsia_familiar == 'Si')
        Familiar: {{ $historia->pre_eclampsia_familiar_si }}.
    @endif


<p class="sub_titul">Antecedentes Personales No Patológicos</p>
    Alergias: {{ $historia->alergias }}.
    @if($historia->alergias == 'Si')
        {{ $historia->alergias_si }}.
    @endif
    Fumado: {{ $historia->fumado }}. Alcohol: {{ $historia->alcohol }}.
    Drogas: {{ $historia->drogas }}.
    @if($historia->drogas == 'Si')
        {{ $historia->drogas_si }}.
    @endif
    Medicamentos: {{ $historia->medicamentos }}.
    @if($historia->medicamentos == 'Si')
        {{ $historia->medicamentos_si }}.
    @endif
    Tipo y Rh Paciente: {{ $historia->rh_paciente }}. Tipo y Rh Esposo: {{ $historia->rh_esposo }}.

<p class="sub_titul">Antecedentes Gineco Obstétricos</p>
    Menarca: {{ $historia->menarca }}. Inicio de vida sexual: {{ $historia->vida_sexual_inicio }}. Gesta: {{ $historia->gesta }}
    @if($historia->gesta > 0 || $historia->gesta != null)
        Parto: {{ $historia->gesta_parto }}. Aborto: {{ $historia->gesta_aborto }}. Cesárea: {{ $historia->gesta_cesarea }}.
        Embarazo Ectópico: {{ $historia->gesta_embarazo_etopico }}. Legrado: {{ $historia->gesta_legrado }}. Gemelar Previo: {{ $historia->gesta_gemelar_previo }}.
        Informacion: {{ $historia->gesta_informacion }}.
        Nacidos Vivos: {{ $historia->gesta_nacidos_vivos }}. Nacidos Muertos: {{ $historia->gesta_nacidos_muertos }}.
        Muertos primeros 7 días: {{ $historia->gesta_muertos_primeros_dias }}. Muertos > 7 días: {{ $historia->gesta_muertos_mayor_dias }}.
        Planificación Familiar: {{ $historia->planificacion }}.
        @if($historia->planificacion == 'Si')
            Tipo Planificación Familiar: {{ $historia->planificacion_tipo }}.
        @endif
        Menopausia: {{ $historia->menopausia }}.
        @if($historia->menopausia == 'Si')
            Tiempo de Menopausia: {{ $historia->menopausia_si }}.
        @endif
        Papanicolaou: {{ $historia->papanicolaou }}.
        @if($historia->papanicolaou == 'Si')
            Fecha / Resultado: {{ $historia->papanicolaou_si }}.
        @endif
        Fecha de ultima regla: {{ $historia->ultima_regla }}.
        Embarazada: {{ $historia->embarazada }}.
        @if($historia->embarazada == 'Si')
            Edad Gestacional: {!! $historia->edad_gestional !!}.
            Fecha de parto por ultrasonido: {{ $historia->fecha_ultrasonido }}.
        @endif
    @endif

<p class="sub_titul">Examen Físico</p>
    <b>Signos Vitales</b> <br>
    FC (Por minuto): {{ $historia->fc_minuto }}. FR (Por minuto): {{ $historia->fr_minuto }}. Presión arterial Derecho {{ $historia->persion_arterial_derecho }}mmhg.
    Presión arterial Izquierdo {{ $historia->persion_arterial_izquierdo }}mmhg. Temperatura {{ $historia->temperatura }}°C. <br>

    <b>Datos Antropométricos</b> <br>
    Peso (lb): {{ $historia->peso }}. Talla (mts): {{ $historia->talla }}. IMC: {{ $historia->imc }}. <br>

    <b>General</b> <br>
    Conciente: {{ $historia->conciente }}. Orientada: {{ $historia->orientada }}.  Febril: {{ $historia->febril }}. Condición hemodinámica adecuada: {{ $historia->condicion_hemodinamica }}.
    Alteraciones cardiopulmonares: {{ $historia->alteraciones_cardiopulmonares }}. Piel y Mucosas: {{ $historia->piel_mucosas }}. Cabeza y Cuello: {{ $historia->cabeza_cuello }}.
    Craneo: {{ $historia->craneo }}. ORL: {{ $historia->orl }}. Boca: {{ $historia->boca }}. Cuello: {{ $historia->cuello }}. Torax: {{ $historia->torax }}. <br>

    <b>Mamas</b> <br>
    Simétricas: {{ $historia->mamas_simetricas }}. Lesiones Vasculares: {{ $historia->mamas_lesiones_vasculares }}.
    Nódulos: {{ $historia->mamas_nodulos }}.
    @if($historia->mamas_nodulos == 'Si')
        Localización Derecho: {{ $historia->mamas_localizacion_derecho }}.
        Tamaño Derecho: {{ $historia->mamas_tamanno_derecho }}.
        Localización Izquierdo: {{ $historia->mamas_localizacion_izquierdo }}.
        Tamaño Izquierdo: {{ $historia->mamas_tamanno_izquierdo }}.
    @endif
    Galactorrea: {{ $historia->mamas_galactorrea }}.
    Campos Pulmonares: {{ $historia->mamas_campos_pulmonares }}.
    @if($historia->mamas_campos_pulmonares == 'Anormal')
        {{ $historia->mamas_campos_pulmonares_si }}.
    @endif
    Cardíaco: {{ $historia->mamas_cardiaco }}.
    @if($historia->mamas_cardiaco == 'Anormal')
        {{ $historia->mamas_cardiaco_si }}.
    @endif

    <br> <b>Abdomen y Pelvis</b> <br>
    Peristalsis: {{ $historia->peristalsis }}.
    Utero Grávido Abdominal: {{ $historia->utero_gravido_abdominal }}.
    @if($historia->utero_gravido_abdominal == 'Si')
        Presentacion: {{ $historia->presentacion }}.
        Situacion: {{ $historia->situacion }}.
        Posicion: {{ $historia->posicion }}.
        Frecuencia cardiaca fetal: {{ $historia->frecuencia_cardiaca_fetal }}.
        AFU (cms): {{ $historia->afu }}.
        @if($historia->otros_hallazgos_utero_gravido !='')
            Atros Hallazgos: {{ $historia->otros_hallazgos_utero_gravido }}.
        @endif
    @else
        Útero Intrapelvico: {{ $historia->utero_intrapelvico }}.
    @endif

    <br> <b>Examen Ginecologico</b> <br>
    Examen Ginecológicol: {{ $historia->examen_ginecologico }}.
    @if($historia->examen_ginecologico == 'Si')
        Genitales Externos: {{ $historia->genitales_externos }}.
        Vagina Normo Térmica: {{ $historia->vagina_normo_terminca }}.
        Vagina Normo elástica: {{ $historia->vagina_normo_elastica }}.
        Lesiones: {{ $historia->vagina_lesiones }}.
        @if($historia->vagina_lesiones == 'Si')
            Descripcion: {{ $historia->vagina_describa }}.
        @endif
        Leucorrea: {{ $historia->vagina_leucorrea }}.
        Fetidez: {{ $historia->vagina_fetidez }}.
        Sangrado: {{ $historia->vagina_sangrado }}.
        Hidrorrea: {{ $historia->vagina_hidrorrea }}.
        Cervix: {{ $historia->vagina_cervix }}.
        Consistencia: {{ $historia->vagina_consistencia }}.

        @if($historia->embarazada == 'Si')
            Se Palpan Calotas: {{ $historia->vagina_calotas }}.
            Membranas Integras: {{ $historia->vagina_membranas_integras }}.
            Calotas Solidas: {{ $historia->vagina_calotas_solidas }}.
            Plano: {{ $historia->vagina_plano }}.
            Pelvis: {{ $historia->vagina_pelvis }}.
            Desproporcion Cefalopelvica: {{ $historia->vagina_desproporcion_cefalopelvica }}.
        @endif

        Miembros Inferiores Edema: {{ $historia->vagina_miembros_inferiores }}.
        @if($historia->vagina_miembros_inferiores == 'Si')
            {{ $historia->vagina_miembros_inferiores_si }}.
        @endif
    @endif
    Neurologico Conservado: {{ $historia->vagina_neurologico_conservado }}.
    @if($historia->vagina_neurologico_conservado == 'Si')
        Alteracion: {{ $historia->vagina_neurologico_conservado_si }}.
    @endif

@if($historia->ultrasonido != NULL)
    <p><b>Ultrasonido Observaciones: </b> {{ $historia->ultrasonido_observaciones }}</p>
@endif

<p class="sub_titul">Observaciones y Análisis</p>
<p>{{ $historia->observaciones }}</p>

<p class="sub_titul">Diagnósticos o Problemas</p>
<p>{{ $historia->diagnosticos }}</p>

@include('includes._firmas')
