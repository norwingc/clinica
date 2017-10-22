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
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                @include('includes._message')
                <div class="box-body">
                    {!! Form::open(['route' => 'citas.store', 'class' => 'form-horizontal']) !!}
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Cedula Paciente</label>
                                <div>
                                    <input type="text" class="form-control cedula" name="id_number" id="id_number" required>
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
                                <label>Telefono Celular</label>
                                <div>
                                    <input type="text" class="form-control phone" name="celular" id="celular" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Referido</label>
                                <div>
                                    <input type="text" class="form-control" name="referido" id="referido" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Tipo de Examen</label>
                                <div>
                                    <select name="examen_type" id="examen_type" required class="form-control">
                                        <option value="">Seleccione el Examen</option>
                                        <option value="Ultrasonido">Ultrasonido</option>
                                        <option value="Examen2">Examen2</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Costo U$</label>
                                <div>
                                    <input type="number" class="form-control" name="costo" id="costo" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Doctor</label>
                                <div>
                                    <select name="doctor" id="doctor" class="form-control" required>
                                        <option value="">Seleccione al Doctor</option>
                                        <option value="Dr. Pavon">Dr. Pavon</option>
                                        <option value="Dra. Bravo">Dra. Bravo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Inicio de la cita</label>
                                <div>
                                    <input type="datetime-local" class="form-control" name="start" id="start" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Fin de la cita</label>
                                <div>
                                    <input type="datetime-local" class="form-control" name="end" id="end" required>
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
@endsection

@section('js')
    <script>
        function searchPaciente() {
            let id = $('#id_number').val();

            if(id == '') return false;

            $.get('/Pacientes/findCedula/'+id, function(data){
                console.log(data);
                if(data.paciente != null){
                    $('#name').val(data.paciente.name);
                    $('#celular').val(data.paciente.celular);
                    $('#referido').val(data.paciente.referido);
                }else{
                    alert('Paciente no encotrado');
                }
            });
        }
    </script>
@endsection
