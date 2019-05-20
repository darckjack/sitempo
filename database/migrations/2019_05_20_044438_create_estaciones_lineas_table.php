<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstacionesLineasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estaciones_lineas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('linea_id')->unsigned()->index();
            $table->bigInteger('estacion_id')->unsigned()->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estaciones_lineas');
    }
}
