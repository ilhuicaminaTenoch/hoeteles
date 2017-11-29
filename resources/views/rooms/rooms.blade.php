@extends('adminlte::page')
@section('title', 'Tablero de Habitaciones')
@section('content_header')
    <h1 class="test">Habitaciones</h1>
@stop
@section('content')
    <div id="habitaciones" class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"></h3><br>
                        <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#createRoom">Nueva Habitación</a>
                    </div>
                    <div class="box-body">
                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="roomsTable"
                                           class="table table-bordered table-hover dataTable"
                                           role="grid" aria-describedby="example2_info">
                                        <thead>
                                        <tr role="row">
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <th>Ocupación Max</th>
                                            <th>Tipo</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr v-for="room in rooms">
                                            <td width="20px">@{{ room.room_name }}<br><strong>@{{ room.room_shortname }}</strong></td>
                                            <td>@{{ room.room_description }}</td>
                                            <td width="20px">@{{ room.ocupation_max }}</td>
                                            <td>@{{ room.type_name }}</td>
                                            <td width="10px">
                                            <a href="#"                                                             v-on:click.prevent="editRoomType(room)" class="btn btn-warning btn-sm"><i class="fa fa-fw fa-pencil"></i></a>
                                            </td>
                                            <td width="10px"><a href="#" class="btn btn-danger btn-sm"
                                                                v-on:click.prevent="deleteRoomType(room)"><i class="fa fa-fw fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">Nombre</th>
                                            <th rowspan="1" colspan="1">Descripcion</th>
                                            <th rowspan="1" colspan="1">Ocupación Max</th>
                                            <th rowspan="1" colspan="1">Tipo</th>
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
                    @include('rooms.paginacion')
                </div>
            </div>
        </div>
        @include('rooms.create')
    </div>
@stop