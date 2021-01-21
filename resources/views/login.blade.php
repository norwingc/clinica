<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    	<meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Salud Materno Fetal - Login</title>
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!}
        </script>
        <style>
            body{
                background: linear-gradient(to bottom right, #50a3a2 0%, #53e3a6 100%)
            }
        </style>
    </head>
    <body class="d-flex justify-content-center align-items-center" style="min-height: 100vh">
        <div class="container">
            <div class="row justify-content-center animated fadeIn">
                <div class="col-md-6">
                    @if(session()->has('message'))
                        <div class="alert alert-danger">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="card-group">
                        <div class="card p-4">
                            <div class="card-body">
                                <form action="{{ route('login') }}" autocomplete="off" method="POST" class="form-login">
                                    @csrf
                                    <img src="/images/logo.png" style="max-width:15%; display:block; margin:auto">
                                    <div class="input-group mb-3 mt-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        </div>
                                        <input class="form-control" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        </div>
                                        <input class="form-control" type="password" name="password" placeholder="Contraseña" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button class="btn btn-primary px-4 float-right mt-2" type="submit">Entrar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ mix('/js/app.js') }}" charset="utf-8"></script>
        <script>
            function forgotPassword(){
                $('.form-login').toggle()
                $('.form-password').toggle()
            }
        </script>
    </body>
</html>
