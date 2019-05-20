<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registros', function(Blueprint $table) {
            $table->foreign('estacion_id')->references('id')->on('estacions');
            $table->foreign('tren_id')->references('id')->on('trens');
        });

        Schema::table('estaciones_trenes', function (Blueprint $table) {
            $table->foreign('estacion_id')->references('id')->on('estacions');
            $table->foreign('tren_id')->references('id')->on('trens');
        });

        Schema::table('estaciones_lineas', function (Blueprint $table) {
            $table->foreign('estacion_id')->references('id')->on('estacions');
            $table->foreign('linea_id')->references('id')->on('lineas');
        });

        Schema::table('horarios', function (Blueprint $table) {
            $table->foreign('estacion_id')->references('id')->on('estacions');
            $table->foreign('linea_id')->references('id')->on('lineas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
