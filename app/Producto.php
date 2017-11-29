<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';
    protected $fillable = [
        'id_categoria',
        'id_imagen',
        'nombre_producto',
        'descripcion',
        'unidad_en_existencia',
        'precio_coste',
        'precio_venta',
        'autorizacion',
        'barcode'
    ];


}
