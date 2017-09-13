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
            $table->string('clasificacion')->default('Posgrado');//Cursos
            //Masterado, Doctorado, PHD, Curso Específico, Curso por Niveles, Seminario, Taller
            $table->string('tipo')->default('Masterado');
            $table->string('campo')->nullable();
            $table->string('institucion');
            $table->double('costo')->nullable();
            $table->mediumText('instructores')->nullable();

            $table->string('telefono')->default('ND');
            $table->string('celular')->nullable();
            $table->string('email')->default('ND');
            $table->string('web')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();

            //Details
            $table->boolean('presencial')->default(1); //Presencial
            $table->boolean('semipresencial')->default(1); //Semipresencial
            $table->boolean('distancia')->default(1); //Distancia
            $table->integer('cupos')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->string('duracion');
            $table->string('hora_ingreso')->nullable();
            $table->string('hora_salida')->nullable();
            $table->string('lugar')->nullable();

            $table->mediumText('objetivo')->nullable();
            $table->mediumText('temario')->nullable();
            $table->longText('instructores_detalle')->nullable();
            $table->mediumText('incluye')->nullable();

            //Google map
            $table->mediumText('mapa_url')->nullable();

            $table->string('documento_pdf1')->nullable();
            $table->string('documento_pdf2')->nullable();
            $table->string('documento_pdf3')->nullable();

            $table->mediumText('otros_posgrados_cursos')->nullable();

            //Cursos por niveles
            $table->integer('max_alumnos_x_nivel')->nullable();
            $table->string('meses_inicio')->nullable();
            $table->string('duracion_nivel')->nullable();
            $table->string('horarios')->nullable();

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
        Schema::dropIfExists('posgrade_course_seminars');
    }
}
