<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceivingFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receiving_facilities', function (Blueprint $table) {
            $table->id();
            $table->integer('case_1_id')->nullable();           
            $table->integer('case_2_id')->nullable();
            $table->string('destination')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('city_state')->nullable();
            $table->string('room')->nullable();
            $table->string('zip')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('phone2')->nullable();
            $table->string('attensing_md')->nullable();
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
        Schema::dropIfExists('receiving_facilities');
    }
}