@extends('templates._maintemplate')

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
        <div class="personal-information col-xs-6 col-md-3"><a href="{{ route('paciente.personal', $paciente) }}">Informacion Personal</a></div>
        <div class="history col-xs-6 col-md-3 active"><a href="{{ route('paciente.historia', $paciente) }}">Historia Clinica</a></div>
        <div class="summary col-xs-6 col-md-3"><a href="{{ route('paciente.show', $paciente) }}">Summary</a></div>
    </div>
</div>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <i class="ion ion-clipboard"></i>
                    <h3 class="box-title">Historia Clinica</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                @include('includes._message')
                <div class="box-body">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
