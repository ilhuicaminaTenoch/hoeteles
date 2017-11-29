@extends('adminlte::page')
@section('title', 'Tablero Regiones')
@section('content_header')
    <h1 class="test">Regiones</h1>
@stop
@section('content')
    <div id="crudRegiones" class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="row">
                            <div class="col-lg-9 col-md-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" v-model="txtRegion">
                                    <span class="input-group-btn" name="txtRegion">
                                        <button class="btn btn-default" type="button" v-on:click="buscaRegiones()">Buscar</button>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <a href="#" class="btn btn-primary pull-right" data-toggle="modal"
                                   data-target="#createRegion">Nueva region</a>
                            </div>
                        </div>


                    </div>
                    <div class="box-body">
                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example2"
                                           class="table table-bordered table-hover dataTable"
                                           role="grid" aria-describedby="example2_info">
                                        <thead>
                                        <tr role="row">
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr v-for="elemento in regiones">
                                            <td width="20px">@{{ elemento.region_name }}</td>
                                            <td>@{{ elemento.region_description }}</td>
                                            <td width="10px"><a href="#" class="btn btn-warning btn-sm"
                                                                v-on:click.prevent="editaRegiones(elemento)">Editar</a>
                                            </td>
                                            <td width="10px"><a href="#" class="btn btn-danger btn-sm"
                                                                v-on:click.prevent="eliminaRegion(elemento)">Eliminar</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">Nombre</th>
                                            <th rowspan="1" colspan="1">Descripcion</th>
                                        </tr>
                                        </tfoot>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
        @include('regions.create')
        @include('regions.edit')
    </div>
@stop






