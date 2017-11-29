<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_producto');
            $table->integer('id_categoria')->unsigned();
            $table->integer('id_imagen')->unsigned();
            $table->string('nombre_producto',60);
            $table->mediumText('descripcion');
            $table->integer('unidad_en_existencia');
            $table->decimal('precio_coste',8,2);
            $table->decimal('precio_venta',8,2);
            $table->boolean('autorizacion');
            $table->string('barcode',60);
            $table->timestamps();
        });

        Schema::table('producto', function($table) {
            $table->foreign('id_categoria')->references('id_categoria')->on('categoria');
            $table->foreign('id_imagen')->references('id_imagen')->on('imagen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
