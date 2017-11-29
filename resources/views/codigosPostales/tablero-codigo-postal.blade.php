@extends('layouts.app')
@section('content')
    <div class="row" id="codigoPostal">
        <div class="col-xs-12">
            <h1 class="page-header">Codigos Postales</h1>
        </div>
        <div class="col-md-12 col-sm-12">
            <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#create">Nuevo codigo postal</a>

            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Codigo postal</th>
                    <th>Estado</th>
                    <th colspan="2">&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="codigoPostal in codigosPostales">
                    <td width="20px">@{{ codigoPostal.id_codigo_postal }}</td>
                    <td width="20px">@{{ codigoPostal.codigo_postal }}</td>
                    <td>@{{ codigoPostal.estado }}</td>
                    <td width="10px"><a href="#" class="btn btn-warning btn-sm" v-on:click.prevent="editaCodigosPostales(codigoPostal)">Editar</a></td>
                    <td width="10px"><a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="eliminaCodigoPostal(codigoPostal)">Eliminar</a></td>
                </tr>
                </tbody>
            </table>
            @include('codigosPostales.create')
            @include('codigosPostales.edit')
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5">
            @include('codigosPostales.descripcion-de-paginado')
        </div>
        <div class="col-sm-7">
            <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                @include('codigosPostales.paginacion')
            </div>
        </div>
    </div>
        <!--<div class="col-md-5">
            <pre>
                @{{ $data }}
            </pre>
        </div> -->


@endsection