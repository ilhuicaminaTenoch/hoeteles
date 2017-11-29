
@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
<h1>Mapa Piso 1</h1>
@stop

@section('content')
    <iframe width="99%" height="800px" src="http://104.199.124.206/mapainteractivo/index_hotel.html" frameborder="0" allowfullscreen></iframe>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!'); </script>
@stop