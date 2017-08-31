<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosgradeCourseSeminarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posgrade_course_seminars', function (Blueprint $table) {
            $table->increments('id');

            $table->char('activo')->default('1');

            //Básico, Premium, Gold
            $table->string('plan')->default('3B'); //3B (Básico), 2P (Premium), 1G (Gold)

            //Palabras clave
            $table->mediumText('palabras_clave')->nullable();

            //Information
            $table->string('nombre')->unique();
            $table->string('nombre_corto')->unique();
            $table->string('slug');
            $table->string('clasificacion')->default('Posgrado'); //Curso
            //Masterado, Doctorado, PHD, Curso Específico, Curso por Niveles, Seminario, Taller
            $table->string('tipo')->default('Masterado');
            $table->string('campo');
            $table->string('institucion');
            $table->double('costo');
            $table->mediumText('instructores');

            $table->string('telefono')->default('ND');
            $table->string('celular')->nullable();
            $table->string('email')->default('ND');;
            $table->string('web')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();

            //Details
            $table->boolean('presencial'); //Presencial
            $table->boolean('semipresencial'); //Semipresencial
            $table->boolean('distancia'); //Distancia
            $table->integer('cupos');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('duracion');
            $table->string('hora_ingreso');
            $table->string('hora_salida');
            $table->string('lugar');

            $table->mediumText('objetivo');
            $table->mediumText('temario');
            $table->longText('instructores_detalle');
            $table->mediumText('incluye');

            //Google map
            $table->mediumText('mapa_url')->nullable();

            $table->string('documento_pdf1');
            $table->string('documento_pdf2');
            $table->string('documento_pdf3');

            //Cursos por niveles
            $table->integer('max_alumnos_x_nivel');
            $table->string('meses_inicio');
            $table->string('duracion_nivel');
            $table->string('horarios');

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
        Schema::dropIfExists('posgrade_course_seminars');
    }
}
