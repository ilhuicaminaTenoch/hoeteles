@extends('adminlte::page')
@section('title', 'Tablero Tipo de Habitaciones')
@section('content_header')
    <h1 class="test">Tipo de Habitaciones</h1>
@stop
@section('content')
    <div id="tipoHabitaciones" class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"></h3><br>
                        <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#createRoomType">Nuevo Tipo de Habitación</a>
                    </div>
                    <div class="box-body">
                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="roomsTypeTable"
                                           class="table table-bordered table-hover dataTable"
                                           role="grid" aria-describedby="example2_info">
                                        <thead>
                                        <tr role="row">
                                            <th>Tipo</th>
                                            <th>Descripcion</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr v-for="roomtype in roomstype">
                                            <td width="20px">@{{ roomtype.type_name }}</td>
                                            <td>@{{ roomtype.type_description }}</td>
                                            <td width="10px"><a href="#" class="btn btn-warning btn-sm"
                                                                v-on:click.prevent="editRoomType(roomtype)">Editar</a>
                                            </td>
                                            <td width="10px"><a href="#" class="btn btn-danger btn-sm"
                                                                v-on:click.prevent="deleteRoomType(roomtype)">Eliminar</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">Tipo</th>
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
                <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">
                </div>
            </div>
            <div class="col-sm-7">
                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                    @include('roomsType.paginacion')
                </div>
            </div>
        </div>
        @include('roomsType.create')
        @include('roomsType.edit')
    </div>
@stop






