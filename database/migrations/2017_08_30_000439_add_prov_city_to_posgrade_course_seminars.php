<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProvCityToPosgradeCourseSeminars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posgrade_course_seminars', function (Blueprint $table) {
            $table->unsignedInteger('province_id')->nullable();
            $table->foreign('province_id')->references('id')->on('provinces');

            $table->unsignedInteger('city_id')->nullable();
            $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posgrade_course_seminars', function (Blueprint $table) {
            $table->dropForeign('posgrade_course_seminars_province_id_foreign');
            $table->dropForeign('posgrade_course_seminars_city_id_foreign');

            $table->dropColumn('province_id');
            $table->dropColumn('city_id');
        });
    }
}
