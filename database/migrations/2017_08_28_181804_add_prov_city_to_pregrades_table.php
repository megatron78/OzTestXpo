<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProvCityToPregradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pregrades', function (Blueprint $table) {
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
        Schema::table('pregrades', function (Blueprint $table) {
            $table->dropForeign('pregrades_province_id_foreign');
            $table->dropForeign('pregrades_city_id_foreign');

            $table->dropColumn('province_id');
            $table->dropColumn('city_id');
        });
    }
}
