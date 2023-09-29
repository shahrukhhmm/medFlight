<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('case_1_id')->nullable();           
            $table->integer('case_2_id')->nullable();
            $table->string('travel_date')->nullable();
            $table->string('travel_hour')->nullable();
            $table->string('travel_ftf_start_date')->nullable();
            $table->string('travel_ftf_end_date')->nullable();
            $table->string('depart_airport')->nullable();
            $table->string('arrive_airport')->nullable();
            $table->string('airline')->nullable();
            $table->string('depart_time')->nullable();
            $table->string('depart_facility')->nullable();
            $table->string('arrive_time')->nullable();
            $table->string('arrive_date')->nullable();
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
        Schema::dropIfExists('travel_infos');
    }
}