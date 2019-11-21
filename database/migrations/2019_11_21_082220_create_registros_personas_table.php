<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrosPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros_personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('in_or_out')->default(false);
            $table->bigInteger('estacion_id')->unsigned()->index();
            $table->bigInteger('tren_id')->unsigned()->index();
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
        Schema::dropIfExists('registros_personas');
    }
}
