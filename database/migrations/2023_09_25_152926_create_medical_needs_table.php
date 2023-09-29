<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalNeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_needs', function (Blueprint $table) {
            $table->id();
            $table->integer('case_1_id')->nullable();           
            $table->integer('case_2_id')->nullable();
            $table->string('oxygen')->nullable();
            $table->string('spo2_target')->nullable();
            $table->string('class_of_service')->nullable();
            $table->string('sit_up_tolerance')->nullable();
            $table->string('econ_acceptable')->nullable();
            $table->string('staff_needed')->nullable();
            $table->string('special_service_request')->nullable();
            $table->string('oxygen_needed_during')->nullable();
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
        Schema::dropIfExists('mediacal_needs');
    }
}