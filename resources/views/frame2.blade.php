
@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1>Mapa Piso 1</h1>
@stop

@section('content')

<div>
    <iframe width="99%" height="640px" src="http://104.199.124.206/mapainteractivo/index.html" frameborder="0" allowfullscreen></iframe>
</div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop