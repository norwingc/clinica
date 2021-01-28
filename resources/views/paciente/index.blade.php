@extends('template.template')

@section('title') Pacientes @endsection

@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('/css/dataTables/dataTables.bootstrap4.min.css') }}">
@endsection

@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Inicio</a></li>
    <li class="breadcrumb-item active">Pacientes</li>
</ol>
<div class="container-fluid" id="app">
    @include('template._message')
    <paciente-table />
</div>
@endsection
