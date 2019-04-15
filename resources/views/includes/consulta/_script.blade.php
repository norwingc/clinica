@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
<script type="text/javascript">
    var _token = window.Laravel.csrfToken;


    $('.form-examen select').change(function(){
        //selectShow($(this));
    });

    function selectShow(este) {
        if(este.data('target') == undefined) return false;

        let target = $('.'+este.data('target'));

        if(este.val() == 'Si' || este.val() == 'Anormal'){
            if($(target).is(':hidden')){
                $(target).toggle('1000');
            }
        }

        if(este.val() == 'No' || este.val() == 'Normal'){
            if($(target).is(':hidden')){
                return false;
            }else{
                $(target).toggle('1000');
            }
        }
    }

    $(".tipo_rh").val("{{ $paciente->tipo_rh }}");

    $('#ovario_izquierdo_pelvico').change(function(event) {
        ($(this).val() == 'Presente') ? $('.ovario_izquierdo_ausente').show() : $('.ovario_izquierdo_ausente').hide();
    });
    $('#ovario_derecho_pelvico').change(function(event) {
        ($(this).val() == 'Presente') ? $('.ovario_derecho_ausente').show() : $('.ovario_derecho_ausente').hide();
    });
    $('#presencia_quiste_neurosonografia').change(function(event) {
        alert('fasdfds');
        $('#presencia_quiste_si_neurosonografia').selectpicker();
    });

    $('#cavidad_endometrial_ocupada_pelvico').change(function(){
        if($(this).val() == 'Dispositivo intrauterino'){
            $('.dispositivo_intrauterino_cual').show();
            $('.cavidad_endometrial_embarazo').hide();
        }else if ($(this).val() == 'Embarazo') {
            $('.cavidad_endometrial_embarazo').show();
            $('.dispositivo_intrauterino_cual').hide();
        }else{
            $('.cavidad_endometrial_embarazo').hide();
            $('.dispositivo_intrauterino_cual').hide();
        }
    })

    function huesoNasalAusente(este) {
        (este.val() == 'Ausente') ? $('.medicion_nasal_1trimestre').hide() : $('.medicion_nasal_1trimestre').show();
    }
    function extremidadSuperior(este) {
        (este.val() == 'No') ? $('.extermidadSuperiorAfectada').show() : $('.extermidadSuperiorAfectada').hide();
    }
    function extremidadInferior(este) {
        (este.val() == 'No') ? $('.extermidadInferiorAfectada').show() : $('.extermidadInferiorAfectada').hide();
    }
    function paredIntegra(este) {
        (este.val() == 'No') ? $('.pared_integra_1trimestre_si').show() : $('.pared_integra_1trimestre_si').hide();
    }
    function paredIntegraEstructural(este) {
        (este.val() == 'No') ? $('.pared_integra_estructural_si').show() : $('.pared_integra_estructural_si').hide();
    }
    function toraxPulmon(este) {
        (este.val() == 'No') ? $('.torax_pulmon_no_form').show() : $('.torax_pulmon_no_form').hide();
    }
    function uteroPelvico(este) {
        (este.val() == 'Presente') ? $('.utero_pelvico_ausente').show() : $('.utero_pelvico_ausente').hide();
    }
    function labioNormal(este) {
        (este.val() == 'No') ? $('.labio_normal_no').show() : $('.labio_normal_no').hide();
    }
    function corazonTamano(este) {
        (este.val() == 'Si') ? $('.corazon_tamano_no').hide() : $('.corazon_tamano_no').show();
    }
    function claficicaionLiquidoAmnioticoEstructural(este) {
        (este.val() == 'Normal') ? $('.liquido_amniotico_anormal').hide() : $('.liquido_amniotico_anormal').show();
    }
    function claficicaionLiquidoAmnioticoneurosonografia(este) {
        (este.val() == 'Normal') ? $('.liquido_amniotico_anormal').hide() : $('.liquido_amniotico_anormal').show();
    }
    function claficicaionLiquidoAmnioticoecocardiografia(este) {
       (este.val() == 'Normal') ? $('.liquido_amniotico_anormal').hide() : $('.liquido_amniotico_anormal').show();
    }
    function claficicaionLiquidoAmnioticodoppler(este) {
       (este.val() == 'Normal') ? $('.liquido_amniotico_anormal').hide() : $('.liquido_amniotico_anormal').show();
    }
    function presenciaQuiste(este) {
        $('#presencia_quiste_si_neurosonografia').selectpicker();
        (este.val() == 'No') ? $('.presencia_quiste_si_form').hide() : $('.presencia_quiste_si_form').show();
    }
    function presenciaQuisteEstructural(este) {
        $('#presencia_quiste_si_estructural').selectpicker();
        (este.val() == 'No') ? $('.presencia_quiste_si_form').hide() : $('.presencia_quiste_si_form').show();
    }
    function quistePlexos1trimestre(este) {
        $('#quiste_plexos_si_1trimestre').selectpicker();
        (este.val() == 'No') ? $('.quiste_plexos_si_form').hide() : $('.quiste_plexos_si_form').show();
    }
    function changeFunneling(este) {
        (este.val() == 'Negativo') ? $('.funneling').hide() : $('.funneling').show();
    }
    function tabiqueInterventricularEco(este) {
        $('#tipo_civ_ecocardiografia').selectpicker();
        (este.val() == 'Si') ? $('.tabique_interaventricular_noIntegro').hide() : $('.tabique_interaventricular_noIntegro').show();
    }
    function examenNst(este) {
        (este.val() == 'No') ? $('.examen_nst_si').hide() : $('.examen_nst_si').show();
    }
    function vitalidadFeto(este) {
        (este.val() == 'Ausencia de vitalidad') ? $('.feto_no_vitalidad').hide() : $('.feto_no_vitalidad').show()
    }
    function datosNst(este) {
       var html = ''

       if(este.val() == "Registro NST > 32 semanas de gestación" || este.val() == "Embarazo a término sin trabajo de parto"){
            html = "<option value='Datos ominosos'>Datos ominosos</option><option value='Sin datos ominosos'>Sin datos ominosos</option>";
       }else{
            html = "<option value='Trazo categoria I'>Trazo categoria I</option><option value='Trazo categoria II'>Trazo categoria II</option><option value='Trazo categoria III'>Trazo categoria III</option>";
       }
       $('#datos_nst_doppler').html(html);
    }
    function examenMaduracionPulmonar(este) {
      (este.val() == 'No') ? $('.examen_maduracion_si').hide() : $('.examen_maduracion_si').show();
    }
    function uteroGravidoSi(este) {
      if(este.val() == 'Si'){
        $('.utero_gravido_si').show();
        $('.utero_intrapelvico').hide();
      }else{
         $('.utero_gravido_si').hide();
         $('.utero_intrapelvico').show();
      }

    }
    function cefalopelvicaPrenatal(este) {
      (este.val() != 'No Valorable') ? $('.vagina_desproporcion_cefalopelvica_otro').show() : $('.vagina_desproporcion_cefalopelvica_otro').hide();
    }
    function clasificacionColposcopia(este) {
        (este.val() == 'No satisfactoria') ? $('#descripcion_colposcopia').val('Con un componente endocervical NO totalmente visible') : $('#descripcion_colposcopia').val('Localizada en el ectocérvix, totalmente visible');
    }

    function descripcionColposcopia(este) {
        if(este.val() == 'Con cambios menores'){
            $('.cambios_menores_si').show();
            $('.cambios_mayores_si').hide();
            $('.sugestivo_carcinoma_si').hide()
            $('.descripcion_carcinoma_otro').hide();
        }else if (este.val() == 'Con cambios mayores') {
            $('.cambios_mayores_si').show();
            $('.cambios_menores_si').hide();
            $('.sugestivo_carcinoma_si').hide()
            $('.descripcion_carcinoma_otro').hide();
        }else if(este.val() == 'Sugestivo de carcinoma'){
            $('.sugestivo_carcinoma_si').show()
            $('.cambios_mayores_si').hide();
            $('.cambios_menores_si').hide();
            $('.descripcion_carcinoma_otro').hide();
        }else{
            $('.sugestivo_carcinoma_si').hide()
            $('.cambios_mayores_si').hide();
            $('.cambios_menores_si').hide();
            $('.descripcion_carcinoma_otro').hide();
        }
    }

    function cambiosMenores(este) {
        (este.val() == 'Otro') ? $('.descripcion_carcinoma_otro').show() : $('.descripcion_carcinoma_otro').hide();
    }

    function rinonDerecho(este) {
        (este.val() == 'Presente') ? $('.rinon_derecho').show() : $('.rinon_derecho').hide();
    }
    function rinonIzquierdo(este) {
        (este.val() == 'Presente') ? $('.rinon_izquierdo').show() : $('.rinon_izquierdo').hide();
    }

    function examenOportunidad(este) {
        (este.val() == 'Si') ? $('.examen_oportunidad_si').show() : $('.examen_oportunidad_si').hide();
    }

    function cavidadEndometrial(este) {
        if(este.val() == 'Si'){
            $('.cavidad_endometrial_ocupada').show();
            $('.dispositivo_intrauterino_cual').hide();
            $('.cavidad_endometrial_embarazo').hide();
        }else{
            $('.cavidad_endometrial_ocupada').hide();
            $('.dispositivo_intrauterino_cual').hide();
            $('.cavidad_endometrial_embarazo').hide();
        }
    }

    $('#peso_actual_prenatal').focusout(function(){
        var peso_actual = $(this).val();

        if(peso_actual != ''){
            var peso_anterior = $('#incremento_peso_prenatal').data('peso');
            if(peso_anterior != 'No Existe historia clinica'){
                var diferencia_peso =  peso_actual - peso_anterior;
                $('#incremento_peso_prenatal').val(diferencia_peso);
            }
        }
    });

    function vaginaNeurologicoConcervadoNo(este) {
        if(este.val() == 'No'){
            $('.vagina_ceurologico_conservado_no_form').show();
        }else{
            $('.vagina_ceurologico_conservado_no_form').hide();
        }
    }

    function masaUterino(este) {
        (este.val() == 'No') ? $('.masa_uterino_si').hide() : $('.masa_uterino_si').show()
    }

    function agregarExamen(este) {

        var examen = este.parent(0).parent(0).parent(0).find('.examen_tipo').val();

        if(examen == '') return false;


        if(examen == 0){
            updateColposcopia(este);
        }
        if(examen == 1){
            updateAtencionPretanal(este);
        }
        if(examen == 2){
            updatedConsultaGinecologica(este);
        }
        if(examen == 3){
            updatedConsultaDoppler(este);
        }
        if(examen == 4){
            updatedEcocardiografia(este);
        }
        if(examen == 5){
            updatedNeurosonografia(este);
        }
        if(examen == 6){
            updatedEstructural(este);
        }
        if(examen == 7){
            updatedITrimestre(este);
        }
        if(examen == 8){
            updatedUltrasonidoPelvico(este);
        }
		if(examen == 9){
			updateComentarios(este);
		}

    }

    ////////////////////
    //ecocardiografia //
    ////////////////////
    $('#feto_ecocardiografia').change(function(event) {
        let cantidad = $(this).val();

        if(cantidad == '') return false;

        if(cantidad == 'Otro'){
            $('.cantidad_feto').show();
            return false;
        }else{
            $('.cantidad_feto').hide();
        }

        let child = $('#child_ecocardiografia');

        setChild(child, cantidad, 'Ecocardiografia');
    });
    $('#cantidad_feto_ecocardiografia').focusout(function(event) {
        let cantidad = $(this).val();

        if(cantidad == '') return false;

        let child = $('#child_ecocardiografia');

        setChild(child, cantidad, 'Ecocardiografia');
    });

    ////////////////////
    //neurosonografia //
    ////////////////////
    $('#feto_neurosonografia').change(function(event) {
        let cantidad = $(this).val();

        if(cantidad == '') return false;

        if(cantidad == 'Otro'){
            $('.cantidad_feto').show();
            return false;
        }else{
            $('.cantidad_feto').hide();
        }

        let child = $('#child_neurosonografia');

        setChild(child, cantidad, 'Neurosonografia');
    });
    $('#cantidad_feto_neurosonografia').focusout(function(event) {
        let cantidad = $(this).val();

        if(cantidad == '') return false;

        let child = $('#child_neurosonografia');

        setChild(child, cantidad, 'Neurosonografia');
    });

    ////////////////
    //estructural //
    ////////////////
    $('#feto_estructural').change(function(event) {
        let cantidad = $(this).val();

        if(cantidad == '') return false;

        if(cantidad == 'Otro'){
            $('.cantidad_feto').show();
            return false;
        }else{
            $('.cantidad_feto').hide();
        }

        let child = $('#child_estructural');

        setChild(child, cantidad, 'UltrasonidoEstructural');
    });
    $('#cantidad_feto_estructural').focusout(function(event) {
        let cantidad = $(this).val();

        if(cantidad == '') return false;

        let child = $('#child_estructural');

        setChild(child, cantidad, 'UltrasonidoEstructural');
    });

    ///////////////
    //1trimestre //
    ///////////////
    $('#feto_1trimestre').change(function(event) {
        let cantidad = $(this).val();

        if(cantidad == '') return false;

        if(cantidad == 'Otro'){
            $('.cantidad_feto').show();
            return false;
        }else{
            $('.cantidad_feto').hide();
        }

        let child = $('#child_1trimestre');

        setChild(child, cantidad, 'UltrasonidoTrimestre');
    });
    $('#cantidad_feto_1trimestre').focusout(function(event) {
        let cantidad = $(this).val();

        if(cantidad == '') return false;

        let child = $('#child_1trimestre', '');

        setChild(child, cantidad, 'UltrasonidoTrimestre');
    });

    ////////////
    //doppler //
    ////////////
    $('#feto_doppler').change(function(event) {
        let cantidad = $(this).val();

        if(cantidad == '') return false;

        if(cantidad == 'Otro'){
            $('.cantidad_feto').show();
            return false;
        }else{
            $('.cantidad_feto').hide();
        }

        let child = $('#child_doppler');

        setChild(child, cantidad, 'Doppler');
    });
    $('#cantidad_feto_doppler').focusout(function(event) {
        let cantidad = $(this).val();

        if(cantidad == '') return false;

        let child = $('#child_doppler');

        setChild(child, cantidad, 'Doppler');
    });

    function semanasDoppler(este) {
        (este.val() == 'Mayor a 32 Semanas') ? $('#mayor32').show() : $('#mayor32').hide();
    }

    /**
     * [setChild description]
     * @param {[type]} child    [description]
     * @param {[type]} cantidad [description]
     */
    function setChild(child, cantidad, examen) {
        let msj = 'Analizando el feto: ' + cantidad;
        let node = child.parent(0);
        let remove = child;
        $(remove).remove();

        child.removeAttr('style');
        node.append(child);
        $('.msj_feto').html(msj);

        if(cantidad > 1){
          let button = "<button type='button' class='btn btn-lg btn-info pull-right' data-examen='"+examen+"' data-cantidad='"+cantidad+"' data-child='"+child.prop('id')+"' onclick='netxtChild($(this))'>Siguiente</button>";
           $('.nextChild').html(button);
        }else{
            $('.nextChild').html('');
        }

        $('.localizacion_feto_mayor').show();
    }

    /**
     * [netxtChild description]
     * @param  {[type]} este [description]
     * @return {[type]}      [description]
     */
    function netxtChild(este) {
       $(".modal").animate({ scrollTop: 0 }, "slow");
        let child = $('#'+este.data('child'));
        let cantidad = este.data('cantidad') - 1 ;

        if(cantidad < 0) cantidad = 0;
        addFeto(child, este.data('examen'));
        setChild(child, cantidad, este.data('examen'));
    }

    function edadGestional(fecha, modal = null) {

        if(fecha == '') return false;

        fecha = fecha.split("-");

        fecha_inicio = new Date();
        dia_parto    = new Date();
        hoy          = new Date();
        lleva        = new Date();
        falta        = new Date();

        day   = fecha[2];
        month = fecha[1];
        year  = fecha[0];

        fecha_dada = new Date(year, (month-1), day);//month+"/"+day+"/"+year

         //Calculamos la fecha probable del parto
        fecha_inicio.setTime(fecha_dada.getTime());
        dia_parto.setTime(fecha_inicio.getTime() + (280 * 86400000)); //(14 * 86400000) es la fecha de concepción

        //Calculamos el tiempo que lleva
        lleva.setTime(hoy.getTime() - fecha_inicio.getTime());
        llevasemanas = parseInt(((lleva.getTime()/86400000)/7));
        llevadias = Math.floor(((lleva.getTime()/86400000)%7));
        //Calculamos el tiempo faltante
        falta.setTime(dia_parto.getTime() - hoy.getTime());

        faltasemanas = parseInt(((falta.getTime()/86400000)/7));
        faltadias = parseInt(((falta.getTime()/86400000)%7));

        let semanas = llevasemanas + " semanas y " + llevadias +" d&iacute;as";
        let faltante = faltasemanas + " semanas y " + faltadias+ " d&iacute;as";
        let fechap = dispDate(dia_parto)+", est&aacute; en la semana "+llevasemanas+" de embarazo.";

		if(modal == null){
        	var resultado = '<b>Semanas de embarazo:</b> ' + semanas + ' <b>Dias que faltan de embarazo:</b> ' + faltante + ' <b>Fecha probable de parto:</b> ' + fechap;
		}else{
			var resultado = 'Semanas de embarazo: ' + semanas + ' Dias que faltan de embarazo: ' + faltante + ' Fecha probable de parto: ' + fechap;
		}


        return resultado;
    }

    function dispDate(dateObj) {

        month = dateObj.getMonth()+1;
        var months = new Array(12);
        months[1] = "Enero";
        months[2] = "Febrero";
        months[3] = "Marzo";
        months[4] = "Abril";
        months[5] = "Mayo";
        months[6] = "Junio";
        months[7] = "Julio";
        months[8] = "Agosto";
        months[9] = "Septiembre";
        months[10] = "Octubre";
        months[11] = "Noviembre";
        months[12] = "Diciembre";
        day   = dateObj.getDate();
        var days = new Array(7);
        days[0] = "Domingo";
        days[1] = "Lunes";
        days[2] = "Martes";
        days[3] = "Mi&eacute;rcoles";
        days[4] = "Jueves";
        days[5] = "Viernes";
        days[6] = "S&aacute;bado";
        dayw = dateObj.getDay();
        day = (day < 10) ? "0" + day : day;
        year  = dateObj.getYear();
        if (year < 2000) year += 1900;
        return (days[dayw] + " " + day + " de " + months[month] + " del " + year);
    }

    /**
     * [updateColposcopia description]
     * @param  {[type]} este [description]
     * @return {[type]}      [description]
     */
    function updateColposcopia(este) {
        let consulta = este.data('consulta');
        let title    = 'Consulta Colposcopia / Crioterapia: ' + este.data('paciente');
        let colposcopia = este.data('id');
        $('.modal-title').html(title);

        if(!colposcopia){//agregar examen
            $('.consulta-form').attr('action', "{{ url('/') }}/Consultas/Colposcopia/store/"+consulta);
            $('.consulta-form')[0].reset();
        }else{
            $('.consulta-form').attr('action', "{{ url('/') }}/Consultas/Colposcopia/update/"+colposcopia);
            $('.consulta-form')[0].reset();

            $.get("{{ url('/') }}/Consultas/Colposcopia/get/"+colposcopia, function(data){
                console.log(data);
            });
        }

        $('#modalUpdatedColposcopia').modal('show');
    }

    /**
     * [updateAtencionPretanal description]
     * @param  {[type]} este [description]
     * @return {[type]}      [description]
     */
    function updateAtencionPretanal(este) {
        let consulta = este.data('consulta');
        let title    = 'Consulta de Atención Prenatal: ' + este.data('paciente');
        let prenatal = este.data('id');
		$('.modal-title').html(title);

        if(!prenatal){//agregar examen
            $('.consulta-form').attr('action', "{{ url('/') }}/Consultas/Prenatal/store/"+consulta);
            $('.consulta-form')[0].reset();
        }else{
            $('.consulta-form').attr('action', "{{ url('/') }}/Consultas/Prenatal/update/"+prenatal);
            $('.consulta-form')[0].reset();

            $.get("{{ url('/') }}/Consultas/Prenatal/get/"+prenatal, function(data){
                console.log(data);
            });
        }

        if($('#edad_gestacinal_prenatal').data('historia') != 'No'){
            $('#edad_gestacinal_prenatal').val(edadGestional($('#edad_gestacinal_prenatal').data('edad_gestacional'), 'modal'));
		}

		$('#rh_tipo_prenatal').val($('#rh_tipo_prenatal').data('value'));

        $('#modalUpdateAtencionPrenatal').modal('show');
    }

    /**
     * [updatedConsultaGinecologica description]
     * @param {[type]} este [description]
     */
    function updatedConsultaGinecologica(este) {
        let consulta     = este.data('consulta');
        let title        = 'Consulta Ginecologica: ' + este.data('paciente');
        let ginecologica = este.data('id');
        $('.modal-title').html(title);

        if(!ginecologica){//agregar examen
            $('.consulta-form').attr('action', "{{ url('/') }}/Consultas/Ginecologica/store/"+consulta);
            $('.consulta-form')[0].reset();
        }else{
            $('.consulta-form').attr('action', "{{ url('/') }}/Consultas/Ginecologica/update/"+ginecologica);
            $('.consulta-form')[0].reset();

            $.get("{{ url('/') }}/Consultas/Ginecologica/get/"+ginecologica, function(data){
                console.log(data);
            });
        }

        $('#modalUpdatedConsultaGinecologica').modal('show');
    }

    function updatedConsultaDoppler(este) {
        let consulta     = este.data('consulta');
        let title        = 'Curva de crecimiento / Doppler Fetal: ' + este.data('paciente');
        let doppler = este.data('id');
        $('.modal-title').html(title);

        if(!doppler){//agregar examen
            $('.consulta-form').attr('action', "{{ url('/') }}/Consultas/Doppler/store/"+consulta);
            $('.consulta-form')[0].reset();
        }else{
            $('.consulta-form').attr('action', "{{ url('/') }}/Consultas/Doppler/update/"+doppler);
            $('.consulta-form')[0].reset();

            $.get("{{ url('/') }}/Consultas/Doppler/get/"+doppler, function(data){
                console.log(data);
            });
        }

        $('#modalUpdatedDoppler').modal('show');
    }

    /**
     * [updatedEcocardiografia description]
     * @param  {[type]} este [description]
     * @return {[type]}      [description]
     */
    function updatedEcocardiografia(este) {
        let consulta = este.data('consulta');
        let title    = 'Consulta Ecocardiografia: ' + este.data('paciente');
        let ecocardiografia = este.data('id');
        $('.modal-title').html(title);

        if(!ecocardiografia){//agregar examen
            $('.consulta-form').attr('action', "{{ url('/') }}/Consultas/Ecocardiografia/store/"+consulta);
            $('.consulta-form')[0].reset();
        }else{
            $('.consulta-form').attr('action', "{{ url('/') }}/Consultas/Ecocardiografia/update/"+ecocardiografia);
            $('.consulta-form')[0].reset();

            $.get("{{ url('/') }}/Consultas/Ecocardiografia/get/"+ecocardiografia, function(data){
                console.log(data);
            });
        }

        $('#modalUpdatedEcocardiografia').modal('show');
    }

    /**
     * [updatedNeurosonografia description]
     * @param  {[type]} este [description]
     * @return {[type]}      [description]
     */
    function updatedNeurosonografia(este) {
        let consulta        = este.data('consulta');
        let title           = 'Neurosonografia: ' + este.data('paciente');
        let neurosonografia = este.data('id');
        $('.modal-title').html(title);

        if(!neurosonografia){//agregar examen
            $('.consulta-form').attr('action', "{{ url('/') }}/Consultas/Neurosonografia/store/"+consulta);
            $('.consulta-form')[0].reset();
        }else{
            $('.consulta-form').attr('action', "{{ url('/') }}/Consultas/Neurosonografia/update/"+neurosonografia);
            $('.consulta-form')[0].reset();

            $.get("{{ url('/') }}/Consultas/Neurosonografia/get/"+neurosonografia, function(data){
                console.log(data);
            });
        }

        $('#modalUpdatedNeurosonografia').modal('show');
    }

    /**
     * [updatedEstructural description]
     * @param  {[type]} este [description]
     * @return {[type]}      [description]
     */
    function updatedEstructural(este) {
        let consulta        = este.data('consulta');
        let title           = 'Ultrasonido Estructural: ' + este.data('paciente');
        let estructural = este.data('id');
        $('.modal-title').html(title);

        if(!estructural){//agregar examen
            $('.consulta-form').attr('action', "{{ url('/') }}/Consultas/UltrasonidoEstructural/store/"+consulta);
            $('.consulta-form')[0].reset();
        }else{
            $('.consulta-form').attr('action', "{{ url('/') }}/Consultas/UltrasonidoEstructural/update/"+estructural);
            $('.consulta-form')[0].reset();

            $.get("{{ url('/') }}/Consultas/UltrasonidoEstructural/get/"+estructural, function(data){
                console.log(data);
            });
        }

        $('#modalUpdatedEstructural').modal('show');
    }

    /**
     * [updatedITrimestre description]
     * @param  {[type]} este [description]
     * @return {[type]}      [description]
     */
    function updatedITrimestre(este) {
        let consulta        = este.data('consulta');
        let title           = 'Consulta I Trimestre: ' + este.data('paciente');
        let trimestre = este.data('id');
        $('.modal-title').html(title);

        if(!trimestre){//agregar examen
            $('.consulta-form').attr('action', "{{ url('/') }}/Consultas/UltrasonidoTrimestre/store/"+consulta);
            $('.consulta-form')[0].reset();
        }else{
            $('.consulta-form').attr('action', "{{ url('/') }}/Consultas/UltrasonidoTrimestre/update/"+trimestre);
            $('.consulta-form')[0].reset();

            $.get("{{ url('/') }}/Consultas/UltrasonidoTrimestre/get/"+trimestre, function(data){
                console.log(data);
            });
        }

        $('#modalUpdatedITrimestre').modal('show');
    }

    function updatedUltrasonidoPelvico(este) {
        let consulta        = este.data('consulta');
        let title           = 'Ultrasonido Pelvico: ' + este.data('paciente');
        let ultrasonido = este.data('id');
        $('.modal-title').html(title);

        if(!ultrasonido){//agregar examen
            $('.consulta-form').attr('action', "{{ url('/') }}/Consultas/UltrasonidoPelvico/store/"+consulta);
            $('.consulta-form')[0].reset();
        }else{
            $('.consulta-form').attr('action', "{{ url('/') }}/Consultas/UltrasonidoPelvico/update/"+ultrasonido);
            $('.consulta-form')[0].reset();

            $.get("{{ url('/') }}/Consultas/UltrasonidoPelvico/get/"+ultrasonido, function(data){
                console.log(data);
            });
        }

        $('#modalUpdatedUltrasonidoPelvico').modal('show');
    }

    /**
     * [saveFechaParto description]
     * @param  {[type]} este [description]
     * @return {[type]}      [description]
     */
    function saveFechaParto(este) {
        let paciente        = este.data('paciente');
        let title           = 'Agregar Fecha de parto';
        $('.modal-title').html(title);

        $('.consulta-form').attr('action', "{{ url('/') }}/Consultas/FechaProcedimiento/store/"+paciente);

        $('#modalAddFechaParto').modal('show');
    }

	function updateComentarios(este) {
		let paciente = {{ $paciente->id }};
		let id = este.data('id');

        $('.modal-title').html("Comentario para Paciente: " + este.data('paciente'));

		if(!id){
			$('.consulta-form').attr('action', "{{ url('/') }}/Comentarios/store/"+paciente);
		}else{
			$('.consulta-form').attr('action', "{{ url('/') }}/Comentarios/update/"+id);

			$.get("{{ url('/') }}/Comentarios/get/"+id, function(data){
				$('#comentarios_comentarios').val(data.comentario.comentario);
			});
		}

		$('#modalComentarios').modal('show');
	}
</script>
@endpush
