<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProvCantParrCityToInstTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('institutions', function (Blueprint $table) {
            $table->unsignedInteger('province_id')->nullable();
            $table->foreign('province_id')->references('id')->on('provinces');

            $table->unsignedInteger('canton_id')->nullable();
            $table->foreign('canton_id')->references('id')->on('cantons');

            $table->unsignedInteger('parish_id')->nullable();
            $table->foreign('parish_id')->references('id')->on('parishes');

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
        Schema::table('institutions', function (Blueprint $table) {
            $table->dropForeign('institutions_province_id_foreign');
            $table->dropForeign('institutions_canton_id_foreign');
            $table->dropForeign('institutions_parish_id_foreign');
            $table->dropForeign('institutions_city_id_foreign');

            $table->dropColumn('province_id');
            $table->dropColumn('canton_id');
            $table->dropColumn('parish_id');
            $table->dropColumn('city_id');
        });
    }
}
