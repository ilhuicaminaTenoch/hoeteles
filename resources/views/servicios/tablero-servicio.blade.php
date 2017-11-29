@extends('adminlte::page')
@section('title', 'Tablero Servicios')
@section('content_header')
    <h1 class="test">Servicios</h1>
@stop
@section('content')
    <div id="crudServicios" class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="row">
                            <div class="col-lg-9 col-md-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" v-model="txtServicio">
                                    <span class="input-group-btn" name="txtServicio">
                                        <button class="btn btn-default" type="button" v-on:click="buscaServicios()">Buscar</button>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <a href="#" class="btn btn-primary pull-right" data-toggle="modal"
                                   data-target="#createServicio">Nuevo servicio</a>
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
                                            <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Nombre</th>
                                            <th tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Descripcion</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr role="row" v-for="servicio in servicios">
                                            <td>@{{ servicio.service_name }}</td>
                                            <td>@{{ servicio.service_description }}</td>
                                            <td align="right">
                                                <a href="#"
                                                   class="btn btn-warning btn-sm right"
                                                   v-on:click.prevent="edita(servicio)">Editar</a>
                                            </td>
                                            <td>
                                                <a href="#"
                                                   class="btn btn-danger btn-sm"
                                                   v-on:click.prevent="elimina(servicio)">Eliminar</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr role="row">
                                            <th>Servicio</th>
                                            <th>Descripcion</th>
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
        @include('servicios.create')
        @include('servicios.edit')
    </div>
@stop






