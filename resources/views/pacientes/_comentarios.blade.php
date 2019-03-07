@forelse ($paciente->comentarios as $comentario)
<div class="row" style="margin-bottom:2em">
	<div class="col-md-12">
		<h3 class="text-center subtitle">Comentarios</h3>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Fecha</th>
					<th>Comentario</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{ $comentario->created_at->format('d-m-Y') }}</td>
					<td>{{ $comentario->comentario }}</td>
					<td class="actions">
						<button class='btn' data-paciente='{{ $paciente->name }}' data-id="{{ $comentario->id }}" onclick='updateComentarios($(this))'><i class='ion-edit'></i></button>
						<a href='{{ route('comentario.delete', $comentario) }}' class='btn'><i class='fa fa-trash-o'></i></a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@empty
    
@endforelse