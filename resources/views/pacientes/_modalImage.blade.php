<div class="modal fade" id="modalPacienteImage">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Imagenes del paciente {{ $paciente->name }}</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					@foreach ($paciente->images as $image)
						<div class="col-md-4">
							<img src="{{ $image->url_img }}" class="img-responsive" style="margin: auto; display:block">
							<div>
								<span>Imagen guardada: {{ $image->date }}</span>
								<a href="{{ route('paciente.image.delete', $image) }}" class="btn btn-danger">Borrar</a>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
