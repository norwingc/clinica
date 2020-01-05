<div class="col-sm-12">
@foreach($paciente->consulta()->with('cita')->latest()->get() as $value)

<div class="consulta col-lg-offset-1">
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <p>
                <b>Fecha de la consulta: </b> {{ date('d/m/Y', strtotime($value->cita->date)) }}
                <b>Costo: </b> ${{ $value->costo }}
            </p>
            <p>
                <b>Doctor: </b> {{ $value->doctor }}
                <b>Tipo de examen: </b> {!! ($value->examen_type != '') ? $value->examen_type : 'N/A' !!}
            </p>
            <p>
                <b>Hora de Inicio: </b> {{ date('g:i a', strtotime($value->cita->start)) }}
                <b>Hora de Fin: </b> {{ date('g:i a', strtotime($value->cita->end)) }}
            </p>
            <p><b>Reportes:</b></p>
            @include('includes.consulta._dowloadExamenes')
            <div class="action" style="margin-top: 1em">
                <a href="{{ route('consulta.delete', $value) }}" class="btn btn-danger col-md-12">Eliminar Consulta</a>
            </div>

        </div>
        <div class="col-lg-6 col-sm-12">

            <div class="col-sm-12 col-lg-6">
                <label>Agregar Examen</label>
                <div>
                    <select class="form-control examen_tipo">
						<option value="">Seleccione el Examen</option>
						<option value="9">Comentarios</option>
                        <option value="0">Colposcopia / Crioterapia</option>
                        <option value="1">Consulta de Atención Prenatal</option>
                        <option value="2">Consulta Ginecologica</option>
                        <option value="3">Curva de crecimiento / Doppler Fetal</option>
                        <option value="4">Ecocardiografia</option>
						<option value="5">Neurosonografia</option>
						<option value="10">Malformación Fetal</option>
                        <option value="6">Ultrasonido Estructural</option>
                        <option value="7">Ultrasonido I Trimestre</option>
                        <option value="8">Ultrasonido Pelvico</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <label>&nbsp;</label>
                <div>
                    <button class="btn btn-success" data-consulta='{{ $value->id }}' data-paciente='{{ $paciente->name }}' data-id='false' onClick="agregarExamen($(this))">Agregar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

@endforeach
</div>
