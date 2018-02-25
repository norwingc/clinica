@extends('templates._maintemplate')

@section('title') Perfil @endsection

@section('css')
    <style media="screen">
        .clear{
            clear: both;
        }
    </style>
@endsection

@section('contenido')

<section class="content-header">
    <h1>Perfil: {{ $user->name }}</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Perfil</li>
    </ol>
</section>

<section class="content user-summary">
    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title subtitle">Mi Cuenta</h3>
        </div>

       @include('includes._message')

        <div class="box-body">
            <div class="clear">
                {!! Form::open(['route' => 'profile.avatar', 'class' => 'form-horizontal', 'files' => 'true']) !!}
                    <div class="col-md-2 col-sm-6">
                        <img src="{{ asset('img/profile/'. $user->avatar) }}" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-10">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="col-sm-3">Subir Foto <span class="required">*</span></label>
                                <div class="col-sm-9">
                                    <input type="file" name="avatar" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-info">Subir</button>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>

            <div class="clear">
                <div class="box-header">
                    <h3 class="box-title subtitle" style="margin-top:3em">Cambiar Contraseña</h3>
                </div>

                 {!! Form::open(['route' => 'profile.password', 'class' => 'interview-form form-horizontal']) !!}
                    <div class="form-group">
                        <div class="col-sm-4">
                            <label>Contraseña </label>
                            <div>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Confirmar Contraseña (*)</label>
                            <div>
                                <input type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>&nbsp;</label>
                            <div>
                                <button type="submit" class="btn btn-success">Actualizar</button>
                            </div>
                        </div>

                    </div>
                 {!! Form::Close() !!}
            </div>

            <div class="clear">
                <div class="box-header">
                    <h3 class="box-title subtitle" style="margin-top:3em">Temas</h3>
                </div>

                @include('profile._theme')
            </div>
        </div>
    </div>

</section>

@stop
