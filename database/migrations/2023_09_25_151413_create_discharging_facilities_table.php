<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDischargingFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discharging_facilities', function (Blueprint $table) {
            $table->id();            $table->integer('case_1_id')->nullable();           $table->integer('case_2_id')->nullable();
            $table->string('present_location')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('city_state')->nullable();
            $table->string('room')->nullable();
            $table->string('zip')->nullable();
            $table->string('unit')->nullable();
            $table->string('unit_phone')->nullable();
            $table->string('attending_md')->nullable();
            $table->string('fax')->nullable();
            $table->string('admission_date')->nullable();
            $table->string('discharge_date')->nullable();
            $table->string('other')->nullable();
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
        Schema::dropIfExists('discharging_facilities');
    }
}