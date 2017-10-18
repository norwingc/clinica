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
                                    <input type="text" class="form-control cedula" name="id_number" id="id_number">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label></label>
                                <div>
                                    <button type="button" class="btn btn-info" onclick="searchPaciente()">Buscar</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Nombre Paciente</label>
                                <div>
                                    <input type="text" class="form-control" name="name" id="name">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Fecha Nacimiento</label>
                                <div>
                                    <input type="date" class="form-control" name="birthday" id="birthday">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Edad</label>
                                <div>
                                    <input type="text" class="form-control" name="edad" id="edad" readonly>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Email</label>
                                <div>
                                    <input type="email" class="form-control" name="email" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Telefono Convencional</label>
                                <div>
                                    <input type="email" class="form-control phone" name="convencional" id="convencional">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Telefono Celular</label>
                                <div>
                                    <input type="email" class="form-control phone" name="celular" id="celular">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label>Direccion</label>
                                <div>
                                    <input type="text" name="address" class="form-control" id="address">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label>Contacto</label>
                                <div>
                                    <input type="text" class="form-control" id="contacto" name="contacto">
                                </div>
                            </div>
                             <div class="col-sm-4">
                                <label>Parentesco</label>
                                <div>
                                    <input type="text" class="form-control" id="parentesco" name="parentesco">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label>Celular</label>
                                <div>
                                    <input type="text" class="form-control phone" id="contacto_celular" name="contacto_celular">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label>Lugar de Trabajo</label>
                                <div>
                                    <input type="text" name="trabajo" class="form-control" id="trabajo">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label>Escolaridad</label>
                                <select name="escolaridad" id="escolaridad" class="form-control">
                                    <option value="">Selecione Uno</option>
                                    <option value="Primaria">Primaria</option>
                                    <option value="Secundaria">Secundaria</option>
                                    <option value="Tecnico">Tecnico</option>
                                    <option value="Universidad">Universidad</option>
                                </select>
                            </div>
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
                    $('#birthday').val(data.paciente.birthday);
                    $('#email').val(data.paciente.email);
                    $('#edad').val(data.age.original.age);
                    $('#convencional').val(data.paciente.convencional);
                    $('#celular').val(data.paciente.celular);
                    $('#address').val(data.paciente.address);
                    $('#contacto').val(data.paciente.contacto);
                    $('#parentesco').val(data.paciente.parentesco);
                    $('#parentesco').val(data.paciente.parentesco);
                    $('#contacto_celular').val(data.paciente.contacto_celular);
                    $('#trabajo').val(data.paciente.trabajo);

                    $('#escolaridad option').each(function(){
                        if($(this).val() == data.paciente.escolaridad){
                            $(this).prop('selected', 'selected');
                        }
                    });
                }else{
                    alert('Paciente no encotrado');
                }
            });
        }
    </script>
@endsection
