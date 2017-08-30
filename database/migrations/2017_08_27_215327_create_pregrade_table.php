<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePregradeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregrades', function (Blueprint $table) {
            $table->increments('id');

            $table->char('activo')->default('1');

            //Básico, Premium, Gold
            $table->string('plan')->default('3B'); //3B (Básico), 2P (Premium), 1G (Gold)

            //Palabras clave
            $table->mediumText('palabras_clave');

            //Information
            $table->string('nombre')->unique();
            $table->string('nombre_corto')->unique();
            $table->string('slug');
            $table->string('tipo')->default('Universidad');
            $table->string('pregrade_bg_picture')->nullable();

            $table->text('trayectoria')->nullable();
            $table->string('nombre_autoridad')->nullable();
            $table->string('direccion');
            $table->boolean('fiscal');
            $table->boolean('privado');
            $table->boolean('fiscomisional');
            $table->string('telefono')->default('ND');
            $table->string('celular')->nullable();
            $table->string('email')->default('ND');;
            $table->string('web')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();

            //Description
            $table->mediumText('descripcion')->nullable();

            //Details
            $table->boolean('presencial'); //Presencial
            $table->boolean('semipresencial'); //Semipresencial
            $table->boolean('distancia'); //Distancia
            $table->boolean('matutino')->nullable();
            $table->boolean('vespertino')->nullable();
            $table->boolean('nocturno')->nullable();

            //Carreras
            $table->longText('carreras');

            //Facilities
            $table->integer('area_total')->nullable();
            $table->integer('area_deportiva')->nullable();
            $table->integer('area_espacios_verdes')->nullable();
            $table->integer('area_piscina')->nullable();
            $table->boolean('seguridad_privada')->nullable();
            $table->boolean('wifi_interior')->nullable();
            $table->boolean('wifi_exterior')->nullable();
            $table->mediumText('wifi_otros')->nullable();
            $table->integer('capacidad_restaurantes')->nullable();
            $table->integer('canchas_indoor')->nullable();
            $table->integer('canchas_futbol')->nullable();
            $table->integer('canchas_basket')->nullable();
            $table->integer('canchas_tenis')->nullable();
            $table->integer('mesas_tenis')->nullable();
            $table->boolean('pista_atletica')->nullable();
            $table->boolean('teatro')->nullable();
            $table->boolean('gimnasio')->nullable();
            $table->mediumText('otros')->nullable();

            //Certifications, achievements
            $table->mediumText('certificaciones_logros')->nullable();

            //Images
            $table->string('institution_picture_1')->nullable();
            $table->string('institution_picture_2')->nullable();
            $table->string('institution_picture_3')->nullable();
            $table->string('institution_picture_4')->nullable();
            $table->string('institution_picture_5')->nullable();
            $table->string('institution_picture_6')->nullable();

            //Images banner
            $table->string('banner_inst_picture_1')->nullable();
            $table->string('banner_inst_picture_2')->nullable();
            $table->string('banner_inst_picture_3')->nullable();
            $table->string('banner_inst_picture_4')->nullable();
            $table->string('banner_inst_picture_5')->nullable();

            //Google map
            $table->mediumText('mapa_url')->nullable();

            //Invoice data
            $table->string('ruc_invoice')->nullable();
            $table->string('razon_social_invoice')->nullable();
            $table->string('email_invoice')->nullable();
            $table->string('telefono_invoice')->nullable();
            $table->string('direccion_invoice')->nullable();

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
        Schema::dropIfExists('pregrades');
    }
}
