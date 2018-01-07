@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
<script type="text/javascript">
    var _token = window.Laravel.csrfToken;

    $('.examen_agregar').click(function(){

        let examen = $('.examen_tipo').val();

        if(examen == '') return false;

        if(examen == 1){//consulta atencion prental
            updateAtencionPretanal($(this));
        }

        if(examen == 2){
            updatedConsultaGinecologica($(this));
        }

        if(examen == 6){
            updatedEcocardiografia($(this));
        }

    });

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
</script>
@endpush
