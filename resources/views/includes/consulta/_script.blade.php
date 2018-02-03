@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
<script type="text/javascript">
    var _token = window.Laravel.csrfToken;


    $('.form-examen select').change(function(){
        selectShow($(this));
    });

    function selectShow(este) {
        if(este.data('target') == undefined) return false;

        let target = $('.'+este.data('target'));

        if(este.val() == 'Si' || este.val() == 'Anormal'){
            if($(target).is(':hidden')){
                $(target).toggle('1000');

                let select = $(target).find('select');
                select.prop('required', 'required');

                let input = $(target).find('input');
                input.prop('required', 'required');
            }
        }

        if(este.val() == 'No' || este.val() == 'Normal'){
            if($(target).is(':hidden')){
                return false;
            }else{
                $(target).toggle('1000');

                let select = $(target).find('select');
                select.removeAttr('required');
                select.val('');
                select.selectpicker('deselectAll');

                let input = $(target).find('input');
                input.removeAttr('required');
                input.val('');
            }
        }
    }

    $('#ovario_izquierdo_pelvico').change(function(event) {
        ($(this).val() == 'Presente') ? $('.ovario_izquierdo_ausente').show() : $('.ovario_izquierdo_ausente').hide();
    });
    $('#ovario_derecho_pelvico').change(function(event) {
        ($(this).val() == 'Presente') ? $('.ovario_derecho_ausente').show() : $('.ovario_derecho_ausente').hide();
    });

    function huesoNasalAusente(este) {
        (este.val() == 'Ausente') ? $('.medicion_nasal_1trimestre').hide() : $('.medicion_nasal_1trimestre').show();
    }

    function paredIntegra(este) {
        (este.val() == 'No') ? $('.pared_integra_1trimestre_si').show() : $('.pared_integra_1trimestre_si').hide();
    }
    function paredIntegraEstructural(este) {
        (este.val() == 'No') ? $('.pared_integra_estructural_si').show() : $('.pared_integra_estructural_si').hide();
    }

    function uteroPelvico(este) {
        (este.val() == 'Presente') ? $('.utero_pelvico_ausente').show() : $('.utero_pelvico_ausente').hide();
    }
    function labioNormal(este) {
        (este.val() == 'Si') ? $('.labio_normal_no').hide() : $('.labio_normal_no').show();
    }
    function corazonTamano(este) {
        (este.val() == 'Si') ? $('.corazon_tamano_no').hide() : $('.corazon_tamano_no').show();
    }
    function claficicaionLiquidoAmnioticoEstructural(este) {
        (este.val() == 'Normal') ? $('.liquido_amniotico_anormal').hide() : $('.liquido_amniotico_anormal').show();
    }


    $('.examen_agregar').click(function(){

        let examen = $('.examen_tipo').val();

        if(examen == '') return false;

        if(examen == 0){
            updateColposcopia($(this));
        }
        if(examen == 1){
            updateAtencionPretanal($(this));
        }
        if(examen == 2){
            updatedConsultaGinecologica($(this));
        }
        if(examen == 3){
            updatedConsultaDoppler($(this));
        }
        if(examen == 4){
            updatedEcocardiografia($(this));
        }
        if(examen == 5){
            updatedNeurosonografia($(this));
        }
        if(examen == 6){
            updatedEstructural($(this));
        }
        if(examen == 7){
            updatedITrimestre($(this));
        }
        if(examen == 8){
            updatedUltrasonidoPelvico($(this));
        }
    });

    ////////////////////
    //ecocardiografia //
    ////////////////////
    $('#feto_ecocardiografia').change(function(event) {
        let cantidad = $(this).val();

        if(cantidad == '') return false;

        if(cantidad == 'Otro'){
            $('.cantidad_feto').show();
            return false;
        }

        let child = $('#child_ecocardiografia');

        setChild(child, cantidad);
    });
    $('#cantidad_feto_ecocardiografia').focusout(function(event) {
        let cantidad = $(this).val();

        if(cantidad == '') return false;

        let child = $('#child_ecocardiografia');

        setChild(child, cantidad);
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
        }

        let child = $('#child_neurosonografia');

        setChild(child, cantidad);
    });
    $('#cantidad_feto_neurosonografia').focusout(function(event) {
        let cantidad = $(this).val();

        if(cantidad == '') return false;

        let child = $('#child_neurosonografia');

        setChild(child, cantidad);
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
        }

        let child = $('#child_estructural');

        setChild(child, cantidad);
    });
    $('#cantidad_feto_estructural').focusout(function(event) {
        let cantidad = $(this).val();

        if(cantidad == '') return false;

        let child = $('#child_estructural');

        setChild(child, cantidad);
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
        }

        let child = $('#child_1trimestre');

        setChild(child, cantidad);
    });
    $('#cantidad_feto_1trimestre').focusout(function(event) {
        let cantidad = $(this).val();

        if(cantidad == '') return false;

        let child = $('#child_1trimestre');

        setChild(child, cantidad);
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
        }

        let child = $('#child_doppler');

        setChild(child, cantidad);
    });
    $('#cantidad_feto_doppler').focusout(function(event) {
        let cantidad = $(this).val();

        if(cantidad == '') return false;

        let child = $('#child_doppler');

        setChild(child, cantidad);
    });

    function semanasDoppler(este) {
        if(este.val() == 32){
            $('#mayor32').show();
            $('#mayor36').hide();
        }else{
            $('#mayor36').show();
            $('#mayor32').hide();
        }
    }

    /**
     * [setChild description]
     * @param {[type]} child    [description]
     * @param {[type]} cantidad [description]
     */
    function setChild(child, cantidad) {
        let msj = 'Analizando el feto: ' + cantidad;
        let node = child.parent(0);
        let remove = child;
        $(remove).remove();

        child.removeAttr('style');
        node.append(child);
        $('.msj_feto').html(msj);

        if(cantidad > 1){
          let button = "<button type='button' class='btn btn-lg btn-info pull-right' data-cantidad='"+cantidad+"' data-child='"+child.prop('id')+"' onclick='netxtChild($(this))'>Siguiente</button>";
           $('.nextChild').html(button);
        }else{
            $('.nextChild').html('');
        }
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

        setChild(child, cantidad);
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
        let title           = 'Consulta Neurosonografia: ' + este.data('paciente');
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
        let title           = 'Consulta Estructural: ' + este.data('paciente');
        let estructural = este.data('id');
        $('.modal-title').html(title);

        if(!estructural){//agregar examen
            $('.consulta-form').attr('action', "{{ url('/') }}/Consultas/Estructural/store/"+consulta);
            $('.consulta-form')[0].reset();
        }else{
            $('.consulta-form').attr('action', "{{ url('/') }}/Consultas/Estructural/update/"+estructural);
            $('.consulta-form')[0].reset();

            $.get("{{ url('/') }}/Consultas/Estructural/get/"+estructural, function(data){
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
            $('.consulta-form').attr('action', "{{ url('/') }}/Consultas/ITrimestre/store/"+consulta);
            $('.consulta-form')[0].reset();
        }else{
            $('.consulta-form').attr('action', "{{ url('/') }}/Consultas/ITrimestre/update/"+trimestre);
            $('.consulta-form')[0].reset();

            $.get("{{ url('/') }}/Consultas/ITrimestre/get/"+trimestre, function(data){
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
</script>
@endpush
