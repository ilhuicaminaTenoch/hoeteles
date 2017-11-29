<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rooms', function (Blueprint $table)
        {
            $table->increments('room_id');
            $table->string('room_name', 65);
            $table->string('room_shortname', 65);
            $table->string('room_description', 255);
            $table->integer('ocupation_base');
            $table->integer('ocupation_max');
            $table->integer('type_room_id')->unsigned()->nullable();
            $table->timestamps();
            //$table->foreign('type_room_id')->references('type_room_id')->on('RoomsType');
        });

        Schema::table('Rooms', function($table)
        {
            $table->foreign('type_room_id')->references('type_room_id')->on('RoomsType');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Rooms');
    }
}
