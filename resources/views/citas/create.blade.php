@extends('templates._maintemplate')

@section('title') Ingresar Cita @endsection

@section('contenido')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Ingresar Cita</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('citas.create') }}">Ingresar Cita</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <i class="ion ion-clipboard"></i>
                    <h3 class="box-title">Crear Cita</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-danger" onclick="addAllDayCita($(this))">Agregar dia sin citas</button>
                    </div>
                </div>
                @include('includes._message')
                <div class="box-body">
                        {!! Form::open(['route' => 'citas.store', 'class' => 'form-horizontal', 'id' => 'form_citas']) !!}
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Telefono Paciente</label>
                                <div>
                                    <input type="text" class="form-control phone" name="convencional" id="phone">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>&nbsp;</label>
                                <div>
                                    <button type="button" class="btn btn-info" onclick="searchPaciente()">Buscar</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Nombre Paciente</label>
                                <div>
                                    <input type="text" class="form-control" name="name" id="name" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Referido</label>
                                <div>
                                    <input type="text" class="form-control" name="referido" id="referido">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Tipo de Examen</label>
                                <div>
                                    <select name="examen_type" id="examen_type" required class="form-control">
                                        <option value="">Seleccione el Examen</option>
										<option value="Colposcopia">Colposcopia</option>
										<option value="Crioterapia">Crioterapia</option>
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
                            <div class="col-sm-3">
                                <label>Costo U$</label>
                                <div>
                                    <input type="number" class="form-control" name="costo" id="costo" required min="0">
                                </div>
                            </div>
                            <div class="col-sm-3">
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
                            <div class="col-md-3">
                                <label>Fecha</label>
                                <div>
                                    <input type="date" class="form-control" name="date" id="date" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Hr de inicio</label>
                                <div>
                                    <input type="time" class="form-control" name="start" id="start" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Duracion</label>
                                <div>
                                    <select class="form-control" name="duracion" id="duracion" required>
										<option value="30 min">5 min</option>
										<option value="30 min">15 min</option>
										<option value="30 min">20 min</option>
										<option value="30 min">30 min</option>
                                        <option value="1 hr">1 hr</option>
                                        <option value="1 hr 30 min">1 hr 30 min</option>
                                        <option value="2 hr">2 hr</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label>Comentario</label>
                                <div>
                                    <textarea name="comentario" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-success btn-submit" type="submit">Agregar Cita</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>

@include('includes.citas._modal')
@include('includes.citas._script')

@endsection

@section('js')
    <script>
        function searchPaciente() {
            let phone = $('#phone').val();

            if(phone == '') return false;

            $.get('/Pacientes/findPhone/'+phone, function(data){
                console.log(data);
                if(data.paciente != null){
                    $('#name').val(data.paciente.name);
                    $('#referido').val(data.paciente.referido);

                    $('#form_citas').attr('action', "{{ url('/') }}/Citas/store/"+ data.paciente.id);

                }else{
                    alert('Paciente no encotrado');
                }
            });
        }
    </script>
@endsection
