<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientNurseToNursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_nurse_to_nurses', function (Blueprint $table) {
            $table->id();
            $table->integer('case_1_id')->nullable();           
            $table->integer('case_2_id')->nullable();
            $table->string('rn_name')->nullable();
            $table->string('date_time')->nullable();
            $table->string('temp')->nullable();
            $table->string('hr')->nullable();
            $table->string('bp')->nullable();
            $table->string('rr')->nullable();
            $table->string('fio2')->nullable();
            $table->string('spo2')->nullable();
            $table->string('allergies')->nullable();
            $table->string('nuero')->nullable();
            $table->string('cv')->nullable();
            $table->string('pulm')->nullable();
            $table->string('gl')->nullable();
            $table->string('gu')->nullable();
            $table->string('skin')->nullable();
            $table->string('analgesia')->nullable();
            $table->string('sedation')->nullable();
            $table->string('iv')->nullable();
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('client_nurse_to_nurses');
    }
}