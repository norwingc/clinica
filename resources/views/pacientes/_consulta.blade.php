<div class="col-sm-12">
@foreach($paciente->consulta()->with('cita', 'prenatal')->latest()->get() as $value)

<div class="consulta col-lg-offset-1">
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <p><b>Fecha de la consulta: </b> {{ $value->date }}</p>
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
                @if(!$value->prenatal)
                    <button class="btn btn-success">Agragar Consulta Prenatal</button>
                @else
                    <button class="btn btn-success">Ver consulta Prenatal</button>
                @endif
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">


            @if($value->examen_type == '')
                <div class="col-sm-12 col-lg-6">
                    <label>Agregar Examen</label>
                    <div>
                        <select class="form-control">
                            <option value="">Seleccione el Examen</option>
                            <option value="Colposcopia / Crioterapia">Colposcopia / Crioterapia</option>
                            <option value="Consulta de Atención Prenatal">Consulta de Atención Prenatal</option>
                            <option value="Consulta Ginecologica">Consulta Ginecologica</option>
                            <option value="Consulta medica por primera vez">Consulta medica por primera vez</option>
                            <option value="Curva de crecimiento">Curva de crecimiento</option>
                            <option value="Doppler Fetal">Doppler Fetal</option>
                            <option value="Ecocardiografia">Ecocardiografia</option>
                            <option value="Neurosonografia">Neurosonografia</option>
                            <option value="Toma de Exámenes / Perfil Vaginal">Toma de Exámenes / Perfil Vaginal</option>
                            <option value="Ultrasonido Estructural">Ultrasonido Estructural</option>
                            <option value="Ultrasonido I Trimestre">Ultrasonido I Trimestre</option>
                            <option value="Ultrasonido Pelvico">Ultrasonido Pelvico</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <label>&nbsp;</label>
                    <div>
                        <button class="btn btn-success">Agregar</button>
                    </div>
                </div>
            @else
                <div class="col-sm-12 col-lg-6">
                    <label>&nbsp;</label>
                    <div>
                        <button class="btn btn-success">Agregar Examen {{ $value->examen_type }}</button>
                    </div>
                </div>
            @endif

        </div>
    </div>
</div>

<hr>

@endforeach
</div>
