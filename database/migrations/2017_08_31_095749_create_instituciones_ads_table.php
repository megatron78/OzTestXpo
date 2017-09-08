<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitucionesAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituciones_ads', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('orden_presentacion');
            $table->integer('categoria');
            $table->unsignedInteger('object_id');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');

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
        Schema::dropIfExists('instituciones_ads');
    }
}
