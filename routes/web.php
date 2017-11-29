<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::middleware(['profile:1'])->prefix('usuarios')->group(function () {

    Route::get('/', function () {
        echo "lista";
    });

    Route::get('/registro', 'UsuarioController@registro');

    Route::get('perfil', function () {
        echo "perfil";
    });

});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mapa1', 'HomeController@mapa1')->name('mapa1');
Route::get('/mapa2', 'HomeController@mapa2')->name('mapa2');
Route::get('/mapa3', 'HomeController@mapa3')->name('mapa3');

Route::get('/nuevo-hotel', 'AdministradorHoteles@LoadFormHotel')->name('nuevo-hotel');


/*Codigos Postales*/
Route::resource('codigo-postal', 'CodigosPostalesController', ['except' => 'show', 'create', 'edit']);
Route::get('/tablero-codigo-postal', 'CodigosPostalesController@tableroCodigoPostal')->name('tablero');
Route::get('/busca-codigo-postal', 'CodigosPostalesController@codigoPostal')->name('codigo-postal');
Route::post('/codigo-postal/buscar', 'CodigosPostalesController@buscaCodigoPostal')->name('busca-codigo-postal');
Route::get('/prueba-componente-codigo-postal', 'PruebaComponenteController@index')->name('prueba-codigo-postal');


/*Regions*/
Route::resource('regions', 'RegionsController', ['except' => 'show', 'create', 'edit']);
Route::get('/tablero-regions', 'RegionsController@tableroRegions')->name('tablero');
Route::post('/regions/buscar', 'RegionsController@buscaRegiones')->name('busca-regiones');


/*Rooms*/
Route::resource('roomstype', 'RoomsTypeController', ['except' => 'show', 'create', 'edit']);
Route::get('/tipo-habitaciones', 'RoomsTypeController@tableroRoomsType')->name('tablero');

/*Servicios*/
Route::resource('servicio', 'ServicesController', ['except' => 'show', 'create', 'edit']);
Route::get('/tablero-servicios', 'ServicesController@tableroServicio')->name('tablero-servicio');
Route::post('/servicio/buscar', 'ServicesController@buscaServicio')->name('busca-servicio');

/*Rooms*/
Route::resource('rooms', 'RoomsController', ['except' => 'show', 'create', 'edit']);
Route::get('/habitaciones', 'RoomsController@Rooms')->name('tablero');


/*Inventario*/
Route::get('/tablero-inventario', 'InventarioController@tableroInventario')->name('tablero-inventario');

