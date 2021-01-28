@extends('template.template')

@section('title') Paciente - {{ $paciente->short_name }} @endsection

@section('content')
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
	<li class="breadcrumb-item"><a href="{{ route('paciente.index') }}">Pacientes</a></li>
	<li class="breadcrumb-item active">{{ $paciente->full_name }} / {{ $paciente->id_number }}</li>
</ol>

<div class="container-fluid sub-navigation mb-4">
	<a href="{{ route('paciente.historia.index', $paciente) }}">Informacion Personal</a>
	<a href="{{ route('paciente.historia.index', $paciente) }}" class="active">Historia Clinica</a>
    <a href="{{ route('paciente.historia.index', $paciente) }}">Atencion Prenatal</a>
    <a href="{{ route('paciente.historia.index', $paciente) }}">Resumen Clinico</a>
</div>

<section id="app">
</section>
@endsection
