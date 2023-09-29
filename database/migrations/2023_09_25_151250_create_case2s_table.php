<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCase2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case2s', function (Blueprint $table) {
            $table->id();
            $table->string('status')->nullable();
            $table->string('dob')->nullable();
            $table->string('coordinator')->nullable();
            $table->string('flight_rn')->nullable();
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
        Schema::dropIfExists('case2s');
    }
}