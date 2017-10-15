@extends('templates._maintemplate')

@section('contenido')
<style type="text/css">
    .img404 img{
        margin: 10% auto;
        display: block;
    }
    .content-wrapper{
        background: white;
    }
</style>

<h1 class="text-center">{{ $message }}</h1>
<div class="img404">
    <img src="{{ asset('img/404.png') }}" alt="404 Error">
</div>

@endsection
