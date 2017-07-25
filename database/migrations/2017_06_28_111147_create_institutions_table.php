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

            //Information
            $table->string('name');
            $table->string('slug');
            $table->boolean('preschool');
            $table->boolean('school');
            $table->boolean('bachelor');

            $table->text('trajectory');
            $table->string('authority_name');
            $table->string('address');
            $table->boolean('laic');
            $table->boolean('religious');
            $table->boolean('all_male');
            $table->boolean('all_female');
            $table->boolean('male_female');
            $table->boolean('public');
            $table->boolean('private');
            $table->boolean('public_private');
            $table->float('avg_pay_school');
            $table->float('avg_pay_college');
            $table->string('languages');
            $table->string('phone_number');
            $table->string('whatsapp');
            $table->string('email');
            $table->string('web');
            $table->string('facebook');
            $table->string('twitter');

            //Description
            $table->mediumText('description');

            //Details
            $table->integer('age_from'); //Preescolar
            $table->integer('age_to'); //Preescolar
            $table->boolean('extracurricular');
            $table->boolean('extended_schedule');
            $table->boolean('face_to_face_learning');
            $table->boolean('semi_face_to_face_learning');
            $table->boolean('online_learning');
            $table->boolean('morning_schedule');
            $table->boolean('afternoon_schedule');
            $table->boolean('night_schedule');
            $table->string('entrance_morning');
            $table->string('entrance_afternoon');
            $table->string('entrance_night');
            $table->string('exit_morning');
            $table->string('exit_afternoon');
            $table->string('exit_night');
            $table->string('exit_extended_schedule');
            $table->boolean('feeding_yes');
            $table->boolean('feeding_no');
            $table->boolean('feeding_optional');
            $table->boolean('international_hs');
            $table->mediumText('extracurricular_activities');
            $table->integer('native_teachers_percent');

            //Facilities
            $table->integer('total_students');
            $table->integer('max_students_per_class');
            $table->integer('total_area');
            $table->integer('sports_area');
            $table->integer('green_fields_area');
            $table->integer('pool_area');
            $table->boolean('private_security');
            $table->boolean('class_wifi');
            $table->boolean('outside_wifi');
            $table->mediumText('wifi_description');
            $table->boolean('ip_entrance_cams');
            $table->boolean('ip_classes_cams');
            $table->integer('dinner_room_capacity');
            $table->integer('indoor_soccer_fields');
            $table->integer('soccer_fields');
            $table->integer('basketball_fields');
            $table->integer('tennis_fields');
            $table->integer('tennis_tables');
            $table->boolean('athletic_track');
            $table->integer('computer_per_student');
            $table->boolean('theatre');
            $table->boolean('gym');
            $table->mediumText('other_facilities');

            //Certifications, achievements
            $table->mediumText('achievements_certifications');

            //Aditionals
            $table->boolean('diurnal'); //Diurno
            $table->boolean('evening'); //Vespertino
            $table->boolean('nightly'); //Nocturno
            $table->string('school_system'); //Costa, Sierra
            $table->string('jurisdiction'); //Hispana, Bilingüe

            //Images

            //Google map
            $table->float('lat');
            $table->float('lng');

            //Invoice data
            $table->string('ruc_invoice');
            $table->string('social_name');
            $table->string('email_invoice');
            $table->string('phone_invoice');
            $table->string('address_invoice');

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
