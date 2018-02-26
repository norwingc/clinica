@push('scripts')

<script type="text/javascript">

    /**
     * [updateCita description]
     * @param  {[type]} este [description]
     * @return {[type]}      [description]
     */
    function updateCita(este) {
        let cita = este.data('cita');

        $('.consulta-form').attr('action', "{{ url('/') }}/Citas/update/"+ cita);

        $.get("{{ url('/') }}/Citas/get/"+ cita, function(data){
            let title = 'Modificar Cita / Paciente: ' + data.cita.consulta.paciente.name;
            $('.modal-title').html(title);

            $('#costo').val(data.cita.consulta.costo);
            $('#comentario').val(data.cita.comentario);

            $('#examen_type option').each(function(){
                if($(this).val() == data.cita.consulta.examen_type){
                    $(this).prop('selected', 'selected');
                }
            });
            $('#doctor option').each(function(){
                if($(this).val() == data.cita.consulta.doctor){
                    $(this).prop('selected', 'selected');
                }
            });

        });

        $('#modalUpdateCita').modal('show');
    }

    /**
     * [addAllDayCita description]
     */
    function addAllDayCita() {
        $('#modalCitaAllDay').modal('show');
    }

    /**
     * [addNextCita description]
     * @param {[type]} este [description]
     */
    function addNextCita(este) {
        let paciente = este.data('paciente');

        let title = 'Agregar proxima cita al paciente';
        $('.modal-title').html(title);

        $('.consulta-form').attr('action', "{{ url('/') }}/Citas/store/"+ paciente);

        $('#modalUpdateCita').modal('show');
    }

</script>

@endpush
