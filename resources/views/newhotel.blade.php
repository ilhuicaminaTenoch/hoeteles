@extends('adminlte::page')

@section('title', 'Nuevo Hotel')

@section('content_header')
<h1>Nuevo Hotel</h1>
@stop

@section('content')
<div class="box box-primary">

<div class="box-header with-border">
<h3 class="box-title">Datos Generales</h3>	
</div>
<div class="box-body">
<form role="form">
	<input type="hidden" id="niveles" name="niveles" value="0">
	<input type="hidden" id="level_current" name="level_current" value="">
    <div class="form-group">
      <label for="hotel_name">Nombre</label>
      <input class="form-control" id="hotel_name" placeholder="" type="text">
    </div>
    
    <div class="form-group">
      <label for="hotel_name">Calle</label>
      <input class="form-control" id="hotel_calle" placeholder="" type="text">
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-xs-3">
      <label for="hotel_ext">Numero Ext.</label>
      <input class="form-control" id="hotel_ext" placeholder="" type="text">
    </div>
    <div class="col-xs-3">
      <label for="hotel_int">Numero Int.</label>
      <input class="form-control" id="hotel_int" placeholder="" type="text">
    </div>
    </div>
	</div>

    <div class="form-group">
      <label for="hotel_colonia">Colonia</label>
      <input class="form-control" id="hotel_colonia" placeholder="" type="text">
    </div>

    <div class="form-group">
    <div class="row">
    <div class="col-xs-3">
      <label for="hotel_codigo_postal">Codigo Postal</label>
      <input class="form-control" id="hotel_codigo_postal" placeholder="" type="text">
    </div>
    </div>
	</div>

    <div class="row">
    <div class="col-xs-4">
      <label for="hotel_municipio">Delegación o Municipio</label>
      <input class="form-control" id="hotel_municipio" placeholder="" type="text">
    </div>
    <div class="col-xs-4">
      <label for="hotel_estado">Estado</label>
      <select class="form-control" id="hotel_estado">
        <option value="">Seleccione un Estado</option>
        <option value="1">Aguascalientes</option>
        <option value="2">Baja California</option>
        <option value="3">Baja California Sur</option>
        <option value="4">Campeche</option>
        <option value="5">Chiapas</option>
        <option value="6">Chihuahua</option>
        <option value="7">Ciudad de México</option>
        <option value="8">Coahuila</option>
        <option value="9">Colima</option>
        <option value="10">Durango</option>
        <option value="11">Guanajuato</option>
        <option value="12">Guerrero</option>
        <option value="13">Hidalgo</option>
        <option value="14">Jalisco</option>
        <option value="15">México</option>
        <option value="16">Michoacán</option>
        <option value="17">Morelos</option>
        <option value="18">Nayarit</option>
        <option value="19">Nuevo León</option>
        <option value="20">Oaxaca</option>
        <option value="21">Puebla</option>
        <option value="22">Querétaro</option>
        <option value="23">Quintana Roo</option>
        <option value="24">San Luis Potosí</option>
        <option value="25">Sinaloa</option>
        <option value="26">Sonora</option>
        <option value="27">Tabasco</option>
        <option value="28">Tamaulipas</option>
        <option value="29">Tlaxcala</option>
        <option value="30">Veracruz</option>
        <option value="31">Yucatán</option>
        <option value="32">Zacatecas</option>
      </select>
    </div>
	</div>

  </div>
  </div>
  <!-- /.box-body -->
<div class="box box-primary">
  <div class="box-header with-border">
<h3 class="box-title">Caracteristicas del Hotel</h3>	
</div>
<div class="box-body">

<div class="form-group">
    <div class="row">
    <div class="col-xs-3">
      <label for="hotel_nivel">Nivel</label>
      <input class="form-control" id="hotel_nivel" placeholder="" type="text">
    </div>
    <div class="col-xs-3">
      <label for="hotel_cuartos">Cuartos</label>
      <input class="form-control" id="hotel_cuartos" placeholder="" type="text" onkeypress="return validateNumber(event)">
    </div>

    
    </div>
	</div>
<div class="box-footer">
<button type="button" class="btn btn-default" id="cancel_config">Cancelar</button>
<button type="button" class="btn btn-primary" id="edit_config" style="display:none;">Editar</button>
<button type="button" class="btn btn-primary" id="add_config">Agregar</button>
</div>

<div class="box">
<div class="box-header">
  <h3 class="box-title">Niveles</h3>
</div>

<div class="box-body no-padding">
              <table class="table table-striped" style="width: 300px;text-align:center;">
                <thead>
                <tr>
                  <th style="width: 30px;text-align:center;">Nombre</th>
                  <th style="width: 30px;text-align:center;">Cuartos</th>
                  <th style="width: 30px;text-align:center;"></th>
                </tr>
            	</thead>
                <tbody id="level_table">
              </tbody>
          </table>
            </div>

</div>

</div>
</div>

<div class="box box-primary">

  <div class="box-footer">
  	<button type="button" class="btn btn-default" id="cancel">Cancelar</button>
    <button type="button" class="btn btn-primary" id="save_hotel">Guardar</button>
  </div>
</div>
</form>


@stop

@section('css')
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/sweetalert.css">

@stop

@section('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="js/configuracion_hoteles.js"></script>
<script src="js/sweetalert.js"></script>
@stop