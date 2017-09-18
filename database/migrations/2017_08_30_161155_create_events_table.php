<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');

            $table->char('activo')->default('1');

            //Básico, Premium, Gold
            $table->string('plan')->default('3B'); //3B (Básico), 2P (Premium), 1G (Gold)

            //Palabras clave
            $table->mediumText('palabras_clave')->nullable();

            //Information
            $table->string('nombre');
            $table->string('evento_bg_picture')->nullable();
            $table->string('slug');
            $table->mediumText('informacion');
            $table->string('costo');
            $table->date('fecha_evento');
            $table->string('dia_evento');
            $table->string('mes_evento');
            $table->string('year_evento');
            $table->string('hora_evento');
            $table->string('direccion');
            $table->string('telefono')->default('ND');
            $table->string('celular')->nullable();
            $table->string('email')->default('ND');;
            $table->string('web')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();

            //Invoice data
            $table->string('ruc_invoice')->nullable();
            $table->string('razon_social_invoice')->nullable();
            $table->string('email_invoice')->nullable();
            $table->string('telefono_invoice')->nullable();
            $table->string('direccion_invoice')->nullable();

            $table->date('plan_desde')->nullable();
            $table->date('plan_hasta')->nullable();

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
        Schema::dropIfExists('events');
    }
}
