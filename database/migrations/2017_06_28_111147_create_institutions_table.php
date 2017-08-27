<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->increments('id');
            $table->char('activo')->default('1');

            //Básico, Premium, Gold
            $table->string('plan')->default('3B'); //3B (Básico), 2P (Premium), 1G (Gold)

            //Código de la institución ministerio de educación
            $table->string('cod_institucion_mineduc');

            //Palabras clave
            $table->mediumText('palabras_clave');

            //Information
            $table->string('nombre')->unique();
            $table->string('nombre_corto')->unique();
            $table->string('slug');
            $table->boolean('preescolar');
            $table->boolean('escuela');
            $table->boolean('colegio');

            $table->text('trayectoria')->nullable();
            $table->string('nombre_autoridad')->nullable();
            $table->string('direccion');
            $table->boolean('laico');
            $table->boolean('religioso');
            $table->boolean('masculino');
            $table->boolean('femenino');
            $table->boolean('mixto');
            $table->boolean('fiscal');
            $table->boolean('privado');
            $table->boolean('fiscomisional');
            $table->float('pago_promedio_escuela')->nullable();
            $table->float('pago_promedio_colegio')->nullable();
            $table->string('lenguajes')->nullable();
            $table->string('telefono')->default('ND');
            $table->string('celular')->nullable();
            $table->string('email')->default('ND');;
            $table->string('web')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();

            //Description
            $table->mediumText('descripcion')->nullable();

            //Details
            $table->integer('edad_desde')->nullable(); //Preescolar
            $table->integer('edad_hasta')->nullable(); //Preescolar
            $table->boolean('extracurriculares')->nullable();
            $table->boolean('horario_extendido')->nullable();
            $table->boolean('presencial'); //Presencial
            $table->boolean('semipresencial'); //Semipresencial
            $table->boolean('distancia'); //Distancia
            $table->boolean('matutino')->nullable();
            $table->boolean('vespertino')->nullable();
            $table->boolean('nocturno')->nullable();
            $table->string('entrada_matutino')->nullable();
            $table->string('entrada_vespertino')->nullable();
            $table->string('entrada_nocturno')->nullable();
            $table->string('salida_matutino')->nullable();
            $table->string('salida_vespertino')->nullable();
            $table->string('salida_nocturno')->nullable();
            $table->string('salida_horario_extendido')->nullable();
            $table->string('alimentacion')->nullable(); //S, N, O
            $table->boolean('bachillerato_internacional')->nullable();
            $table->mediumText('actividades_extracurriculares')->nullable();
            $table->integer('porcentaje_profesores_nativos')->nullable();

            //Facilities
            $table->integer('total_estudiantes')->nullable();
            $table->integer('max_estudiantes_x_clase')->nullable();
            $table->integer('area_total')->nullable();
            $table->integer('area_deportiva')->nullable();
            $table->integer('area_espacios_verdes')->nullable();
            $table->integer('area_piscina')->nullable();
            $table->boolean('seguridad_privada')->nullable();
            $table->boolean('wifi_interior')->nullable();
            $table->boolean('wifi_exterior')->nullable();
            $table->mediumText('wifi_otros')->nullable();
            $table->boolean('camara_ip_entrada_salida')->nullable();
            $table->boolean('camara_ip_aulas_espacios')->nullable();
            $table->integer('capacidad_restaurantes')->nullable();
            $table->integer('canchas_indoor')->nullable();
            $table->integer('canchas_futbol')->nullable();
            $table->integer('canchas_basket')->nullable();
            $table->integer('canchas_tenis')->nullable();
            $table->integer('mesas_tenis')->nullable();
            $table->boolean('pista_atletica')->nullable();
            $table->integer('computadoras_para_alumnos')->nullable();
            $table->boolean('teatro')->nullable();
            $table->boolean('gimnasio')->nullable();
            $table->mediumText('otros')->nullable();

            //Certifications, achievements
            $table->mediumText('certificaciones_logros')->nullable();

            //Aditionals
            $table->string('regimen')->nullable(); //Costa, Sierra
            $table->string('jurisdiccion')->nullable(); //Hispana, Bilingüe

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
        Schema::dropIfExists('institutions');
    }
}
