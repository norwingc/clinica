@extends('templates._maintemplate')

@section('title') Citas  @endsection

@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
@endsection

@section('contenido')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Citas</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Citas</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <i class="ion ion-clipboard"></i>
                    <h3 class="box-title">Citas</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                @include('includes._message')
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="table" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Paciente</th>
                                    <th>Telefono</th>
                                    <th>Hospital</th>
                                    <th>Via de nacimiento</th>
                                    <th>Dia</th>
                                    <th>Codigo</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<!-- DataTables -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">
   $('#table').DataTable( {
        processing: true,
        serverSide: true,
        ajax: '{!! route('fecha.procedimiento.get') !!}',
        columns:[
            {data: 'paciente.name', name: 'paciente.name'},
            {data: 'paciente.celular', name: 'paciente.celular'},
            {data: 'hospital', name: 'hospital'},
            {data: 'procedimiento', name: 'procedimiento'},
            {data: 'date', name: 'date'},
            {data: 'costo', name: 'costo'},
            {data: 'action', name: 'action'},
        ]
    });
</script>
@endsection
