@push('scripts')

<script>
    function updatePocedimiento(este) {

        if(este.data('id') == 'no'){
            $('.modal-title').html('Agregar procedimiento medico');
			$('.form_procedimiento').attr('action', '/Consultas/FechaProcedimiento/store/'+este.data('paciente'))
        }else{
			$('.form_procedimiento').attr('action', '/Consultas/FechaProcedimiento/update/'+este.data('id'))
            $.get('/Consultas/FechaProcedimiento/get/'+este.data('id'), function(data){
                $('.modal-title').html('Modificar procedimiento mefico / ' + data.fechaprocedimiento.paciente.name);

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
</script>

@endpush