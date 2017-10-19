@extends('templates._maintemplate')

@section('title') Inicio @endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.6.1/fullcalendar.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.6.1/fullcalendar.print.min.css" media='print'>
@endsection

@section('contenido')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Citas</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <i class="ion ion-clipboard"></i>
                    <h3 class="box-title">Dashboard</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                @include('includes._message')
                <div class="box-body">
                     <div class="row">
                        <div class="col-lg-4 col-xs-12">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>0</h3>
                                    <p>Citas del dia</p>
                                </div>
                                <div class="icon">
                                    <i class="ion-ios-person"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-12">
                            <!-- small box -->
                            <div class="small-box bg-blue">
                                <div class="inner">
                                    <h3>{{ App\Models\Paciente::count() }}</h3>
                                    <p>Pacientes</p>
                                </div>
                                <div class="icon">
                                    <i class="ion-ios-people"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-12">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>0</h3>
                                    <p>Citas</p>
                                </div>
                                <div class="icon">
                                    <i class="ion-ios-person"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="calendar"></div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.6.1/fullcalendar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.6.1/locale/es.js"></script>
<script>
$(document).ready(function() {

        $('.calendar').fullCalendar({

            height: 550,
            eventStartEditable: false,
            defaultView: 'agendaWeek',
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listWeek'
            },
            navLinks: true,
            editable: false,
            eventLimit: true,
        });

    });
</script>
@endsection
