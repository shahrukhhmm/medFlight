<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntakeDemographicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intake_demographics', function (Blueprint $table) {
            $table->id();
            $table->integer('case_1_id')->nullable();
            $table->string('client_name')->nullable();
            $table->string('dob')->nullable();
            $table->string('age')->nullable();
            $table->string('diagnosis')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('secondary_contact')->nullable();
            $table->string('contact_number_2')->nullable();
            $table->string('relationship')->nullable();
            $table->string('email')->nullable();
            $table->string('other')->nullable();
            $table->string('address')->nullable();
            $table->string('client_rep')->nullable();

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
        Schema::dropIfExists('intake_demographics');
    }
}