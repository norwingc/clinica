@extends('templates._maintemplate')

@section('title') Ingresar Cita @endsection

@section('contenido')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Informacion Personal: {{ $paciente->name }} / {{ $paciente->id_number }}</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ route('pacientes') }}">Pacientes</a></li>
    </ol>
</section>
<div class="header-paciente">
    <div class="row">
        <div class="personal-information col-xs-6 col-md-3 active"><a href="{{ route('paciente.personal', $paciente) }}">Informacion Personal</a></div>
        @role('doctor')
            <div class="history col-xs-6 col-md-3"><a href="{{ route('paciente.historia', $paciente) }}">Historia Clinica</a></div>
            <div class="summary col-xs-6 col-md-3 active"><a href="{{ route('paciente.show', $paciente) }}">Resumen Clinico</a></div>
        @endrole
    </div>
</div>

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
                    {!! Form::open(['route' => ['paciente.personal.update', $paciente->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Cedula Paciente</label>
                                <div>
                                    <input type="text" class="form-control cedula" name="id_number" id="id_number" value="{{ $paciente->id_number }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Nombre Paciente</label>
                                <div>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ $paciente->name }}" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Fecha Nacimiento</label>
                                <div>
                                    <input type="date" class="form-control" name="birthday" id="birthday" value="{{ $paciente->birthday }}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Edad</label>
                                <div>
                                    <input type="text" class="form-control" name="edad" id="edad" value="{{ $paciente->getAge() }}" readonly>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Email</label>
                                <div>
                                    <input type="email" class="form-control" name="email" id="email" value="{{ $paciente->email }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">
                                <label>Telefono Convencional</label>
                                <div>
                                    <input type="text" class="form-control phone" name="convencional" id="convencional" value="{{ $paciente->convencional }}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label>Telefono Celular</label>
                                <div>
                                    <input type="text" class="form-control phone" name="celular" id="celular" value="{{ $paciente->celular }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label>Direccion</label>
                                <div>
                                    <input type="text" name="address" class="form-control" id="address" value="{{ $paciente->address }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label>Contacto</label>
                                <div>
                                    <input type="text" class="form-control" id="contacto" name="contacto" value="{{ $paciente->contacto }}">
                                </div>
                            </div>
                             <div class="col-sm-4">
                                <label>Parentesco</label>
                                <div>
                                    <input type="text" class="form-control" id="parentesco" name="parentesco" value="{{ $paciente->parentesco }}">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label>Celular</label>
                                <div>
                                    <input type="text" class="form-control phone" id="contacto_celular" name="contacto_celular" value="{{ $paciente->contacto_celular }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label>Lugar de Trabajo</label>
                                <div>
                                    <input type="text" name="trabajo" class="form-control" id="trabajo" value="{{ $paciente->trabajo }}">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label>Escolaridad</label>
                                <select name="escolaridad" id="escolaridad" class="form-control" value="{{ $paciente->escolaridad }}">
                                    <option value="">Selecione Uno</option>
                                    <option value="Primaria">Primaria</option>
                                    <option value="Secundaria">Secundaria</option>
                                    <option value="Tecnico">Tecnico</option>
                                    <option value="Universidad">Universidad</option>
                                </select>
                            </div>
                        </div>
                        <div class="text-center col-md-12">
                            <button type="submit" class="btn btn-success btn-submit">Actualizar</button>
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
        $('#escolaridad option').each(function(){
            if($(this).val() == '{{ $paciente->escolaridad }}'){
                $(this).prop('selected', 'selected');
            }
        });
    </script>
@endsection
