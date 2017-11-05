@push('scripts')
<script type="text/javascript">
    var _token = window.Laravel.csrfToken;

    $('#examen_agregar').click(function(){

        let examen = $('#examen_tipo').val();

        if(examen == '') return false;

        if(examen == 1){//consulta atencion prental
            updateAtencionPretanal($(this));
        }

    });

    /**
     * [updateAtencionPretanal description]
     * @param  {[type]} este [description]
     * @return {[type]}      [description]
     */
    function updateAtencionPretanal(este) {
        let consulta = este.data('consulta');
        let title   = 'Consulta de Atención Prenatal: ' + este.data('paciente');
        $('.modal-title').html(title);
        let prenatal = este.data('id');

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



</script>
@endpush
