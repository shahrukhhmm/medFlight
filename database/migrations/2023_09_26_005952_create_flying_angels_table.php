<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlyingAngelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flying_angels', function (Blueprint $table) {
            $table->id();
            $table->integer('case_1_id')->nullable();           
            $table->integer('case_2_id')->nullable();
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->string('fax')->nullable();
            $table->string('pages')->nullable();
            $table->string('phone')->nullable();
            $table->string('date')->nullable();
            $table->string('re')->nullable();
            $table->string('dear_name')->nullable();
            $table->string('facesheet_check')->nullable();
            $table->string('commercial_check')->nullable();
            $table->string('fitness_check')->nullable();
            $table->string('constent_check')->nullable();
            $table->string('photo_check')->nullable();
            $table->string('appropiate_check')->nullable();
            $table->string('other')->nullable();
            $table->string('please_check')->nullable();
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('flying_angels');
    }
}