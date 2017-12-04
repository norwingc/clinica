<div class="col-sm-12">
@foreach($paciente->consulta()->with('cita')->latest()->get() as $value)

<div class="consulta col-lg-offset-1">
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <p>
                <b>Fecha de la consulta: </b> {{ $value->date }}
                <b>Costo: </b> {{ $value->costo }}
            </p>
            <p>
                <b>Doctor: </b> {{ $value->doctor }}
                <b>Tipo de examen: </b> {!! ($value->examen_type != '') ? $value->examen_type : 'N/A' !!}
            </p>
            <p>
                <b>Hora de Inicio: </b> {{ date('g:i a', strtotime($value->cita->start)) }}
                <b>Hora de Fin: </b> {{ date('g:i a', strtotime($value->cita->end)) }}
            </p>
            <div class="action">
                <button class="btn btn-info">Editar</button>
                <a href="{{ route('consulta.delete', $value) }}" class="btn btn-danger">Eliminar</a>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">

            <div class="col-sm-12 col-lg-6">
                <label>Agregar Examen</label>
                <div>
                    <select class="form-control examen_tipo">
                        <option value="">Seleccione el Examen</option>
                        <option value="0">Colposcopia / Crioterapia</option>
                        <option value="1">Consulta de Atención Prenatal</option>
                        <option value="2">Consulta Ginecologica</option>
                        <option value="3">Consulta medica por primera vez</option>
                        <option value="4">Curva de crecimiento</option>
                        <option value="5">Doppler Fetal</option>
                        <option value="6">Ecocardiografia</option>
                        <option value="7">Neurosonografia</option>
                        <option value="8">Toma de Exámenes / Perfil Vaginal</option>
                        <option value="9">Ultrasonido Estructural</option>
                        <option value="10">Ultrasonido I Trimestre</option>
                        <option value="11">Ultrasonido Pelvico</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <label>&nbsp;</label>
                <div>
                    <button class="btn btn-success examen_agregar" data-consulta='{{ $value->id }}' data-paciente='{{ $paciente->name }}' data-id='false'>Agregar</button>
                </div>
            </div>

        </div>
    </div>
</div>

<hr>

@endforeach
</div>
