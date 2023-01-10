<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('brand', 50);
            $table->string('railway_station_start', 50);
            $table->string('railway_station_end', 50);
            $table->time('date_start');
            $table->time('date_end');
            $table->string('code', 20);
            $table->unsignedTinyInteger('number_wagons');
            $table->boolean('isDate');
            $table->boolean('isDeleted')->default(0);
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
        Schema::dropIfExists('trains');
    }
};
