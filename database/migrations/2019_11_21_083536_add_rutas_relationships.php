<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRutasRelationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('horarios', function (Blueprint $table) {
            $table->foreign('ruta_id')->references('id')->on('rutas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('horarios', function (Blueprint $table) {
            $table->dropForeign('horarios_ruta_id_foreign');
        });
    }
}
