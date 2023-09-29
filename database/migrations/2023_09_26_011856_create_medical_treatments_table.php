<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_treatments', function (Blueprint $table) {
            $table->id();
            $table->integer('case_1_id')->nullable();           
            $table->integer('case_2_id')->nullable();
            $table->string('name')->nullable();
            $table->string('text2')->nullable();
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->string('from1')->nullable();
            $table->string('to1')->nullable();
            $table->string('client_signature')->nullable();
            $table->string('client_date')->nullable();
            $table->string('guardian_signature')->nullable();
            $table->string('guardian_date')->nullable();
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
        Schema::dropIfExists('medical_treatments');
    }
}