<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInstPrePosEvToAds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('instituciones_ads', function (Blueprint $table) {
            $table->unsignedInteger('institution_id')->nullable();
            $table->foreign('institution_id')->references('id')->on('institutions');

            $table->unsignedInteger('pregrade_id')->nullable();
            $table->foreign('pregrade_id')->references('id')->on('pregrades');

            $table->unsignedInteger('pos_course_seminar_id')->nullable();
            $table->foreign('pos_course_seminar_id')->references('id')->on('posgrade_course_seminars');

            $table->unsignedInteger('event_id')->nullable();
            $table->foreign('event_id')->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('instituciones_ads', function (Blueprint $table) {
            $table->dropForeign('instituciones_ads_institution_id_foreign');
            $table->dropForeign('instituciones_ads_pregrade_id_foreign');
            $table->dropForeign('instituciones_ads_pos_course_seminar_id_foreign');
            $table->dropForeign('instituciones_ads_event_id_foreign');

            $table->dropColumn('institution_id');
            $table->dropColumn('pregrade_id');
            $table->dropColumn('pos_course_seminar_id');
            $table->dropColumn('event_id');
        });
    }
}
