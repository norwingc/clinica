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
            <div class="history col-xs-6 col-md-3"><a href="{{ route('paciente.historia', $paciente) }}">Historia Clinica</a></div>
            <div class="summary col-xs-6 col-md-3 active"><a href="{{ route('paciente.show', $paciente) }}">Summary</a></div>
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
                        </div>
                </div>
            </div>
        </div>
    </section>
@endsection
