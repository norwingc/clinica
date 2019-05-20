@extends('templates._maintemplate')

@section('title') Paciente - {{ $paciente->name }}  @endsection

@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
@endsection

@section('contenido')
    <section class="content-header">
        <h1>Paciente: {{ $paciente->name }} / {{ $paciente->id_number }}</h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active"><a href="{{ route('pacientes') }}">Pacientes</a></li>
            <li class="active">Summary</li>
        </ol>
    </section>

    <div class="header-paciente">
        <div class="row">
            <div class="personal-information col-xs-6 col-md-3"><a href="{{ route('paciente.personal', $paciente) }}">Informacion Personal</a></div>
            @role('doctor')
                <div class="history col-xs-6 col-md-3"><a href="{{ route('paciente.historia', $paciente) }}">Historia Clinica</a></div>
                <div class="summary col-xs-6 col-md-3 active"><a href="{{ route('paciente.show', $paciente) }}">Resumen Clinico</a></div>
            @endrole
        </div>
    </div>

    <section class="content user-summary">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title subtitle">Informacion Personal</h3>
            </div>

            @include('includes._message')

            <div class="box-body">
                <div class="row" style="margin-bottom:2em">
                    <div class="col-md-6 col-sm-12">
                        <p><strong>Nombre Completo:</strong> {{ $paciente->name }}</p>
                        <p><strong>Cedula:</strong> {{ $paciente->id_number }}</p>
                        <p><strong>Direccion:</strong> {{ $paciente->address }}</p>
                        <p><strong>Email:</strong> {{ $paciente->email }}</p>
                        <p><strong>Telefono:</strong> {{ $paciente->phone }}</p>
                        <p><strong>Tipo y RH:</strong> {{ $paciente->tipo_rh }}</p>
                        <p><strong>Paridad:</strong> {{ $paciente->paridad }}</p>
						<p><strong>Morbilidad:</strong> {{ $paciente->morbilidad }}</p>
						<p>
							@foreach($paciente->orden_ingreso  as $value)
								<a href="{{ route('ordeningreso.report', $value) }}" target="new">Ingreso: {{ $value->date }}</a>
								<br>
							@endforeach
						</p>
                    </div>
				</div>

				@include('pacientes._comentarios')

                <div class="text-center">
                    <button class="btn btn-lg btn-warning" data-paciente="{{ $paciente->id }}" data-id="no" onclick="updatePocedimiento($(this))">Agregar fecha de procedimiento</button>
					<button class="btn btn-lg btn-warning" data-paciente="{{ $paciente->id }}" data-id="no" onclick="addOrdenIngreso($(this))">Agregar orden de ingreso</button>
				</div>

                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="subtitle">Agregar Cita</h3>

                        {!! Form::open(['route' => ['citas.store', $paciente->id]]) !!}
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label>Doctor</label>
                                    <div>
                                        <select name="doctor" id="doctor" class="form-control" required>
                                            <option value="">Seleccione al Doctor</option>
                                            <option value="Dr. Pavon">Dr. Pavon</option>
                                            <option value="Dra. Bravo">Dra. Bravo</option>
                                            <option value="Dr. Rafael Centeno">Dr. Rafael Centeno</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>Fecha</label>
                                    <div>
                                        <input type="date" class="form-control" name="date" id="date" required>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <label>Hr de inicio</label>
                                    <div>
                                        <input type="time" class="form-control" name="start" id="start" required>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <label>Duracion</label>
                                    <div>
                                        <select class="form-control" name="duracion" id="duracion" required>
                                            <option value="30 min">30 min</option>
                                            <option value="1 hr">1 hr</option>
                                            <option value="1 hr 30 min">1 hr 30 min</option>
                                            <option value="2 hr">2 hr</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <label>Costo U$</label>
                                    <div>
                                        <input type="number" class="form-control" name="costo" id="costo" min="0" required>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <label>Tipo de Examen</label>
                                    <div>
                                        <select name="examen_type" id="examen_type" class="form-control" required>
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
                            </div>
                            <div class="text-center col-sm-12">
                                <button class="btn btn-success btn-submit" type="submit">Agregar Cita</button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="subtitle">Consultas Realizadas</h3>
                    </div>
                    @if($paciente->consulta->isNotEmpty())
                        @include('pacientes._consulta')
                    @else
                        <h3 class="text-center">No existen consultas</h3>
                    @endif
                </div>
            </div>
        </div>
    </section>

@include('includes.consulta._modal')
@include('includes.consulta._script')
@include('includes.save._script')

@include('includes.procedimiento._modal')
@include('includes.procedimiento._script')

@endsection
