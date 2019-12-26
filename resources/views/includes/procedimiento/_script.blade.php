@push('scripts')

<script>

	$('#procedimiento_procedimiento').change(function(event) {
        ($(this).val() == 'Otros') ? $('#otro_procedimiento').show() : $('#otro_procedimiento').hide();
    });

    function updatePocedimiento(este) {

        if(este.data('id') == 'no'){
            $('.modal-title').html('Agregar procedimiento médico');
			$('.form_procedimiento').attr('action', '/Consultas/FechaProcedimiento/store/'+este.data('paciente'))
        }else{
			$('.form_procedimiento').attr('action', '/Consultas/FechaProcedimiento/update/'+este.data('id'))
            $.get('/Consultas/FechaProcedimiento/get/'+este.data('id'), function(data){
                $('.modal-title').html('Modificar procedimiento médico / ' + data.fechaprocedimiento.paciente.name);

				$('#hospital_procedimiento').val(data.fechaprocedimiento.hospital);
				$('#procedimiento_procedimiento').val(data.fechaprocedimiento.procedimiento);
				$('#date_procedimiento').val(data.fechaprocedimiento.date);
				$('#codigo_procedimiento').val(data.fechaprocedimiento.codigo);
				$('#anestesiologo').val(data.fechaprocedimiento.anestesiologo);
				$('#hr_nacimiento').val(data.fechaprocedimiento.hr_nacimiento);
				$('#peso_fetal').val(data.fechaprocedimiento.peso_fetal);
				$('#complicacion_maternal').val(data.fechaprocedimiento.complicacion_maternal);
				$('#complicacion_fetal').val(data.fechaprocedimiento.complicacion_fetal);
				$('#pediatra').val(data.fechaprocedimiento.pediatra);
				$('#comentario_procedimiento').val(data.fechaprocedimiento.comentario);

				if(data.fechaprocedimiento.procedimiento == 'Otros') $('#otro_procedimiento').show();

				// if(data.fechaprocedimiento.procedimiento == 'Parto Vaginal' || data.fechaprocedimiento.procedimiento == 'Parto por Cesárea'){
				// 	$('.procedimiento_parto').show();
				// }
            });
        }

        $('#modalUpdateProcedimiento').modal('show');
    }

	// function procedimientoChange(este) {
	// 	if(este.val() == 'Parto Vaginal' || este.val() == 'Parto por Cesárea'){
	// 		$('.procedimiento_parto').show();
	// 	}else{
	// 		$('.procedimiento_parto').hide();
	// 	}
	// }

	function addOrdenIngreso(este) {
		$('.form_procedimiento').attr('action', '/OrdenIngreso/store/'+este.data('paciente'))
		$('#modalOrdeIngreso').modal('show');
	}
</script>

@endpush
