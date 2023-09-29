<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhysicanStatementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physican_statements', function (Blueprint $table) {
            $table->id();
            $table->integer('case_1_id')->nullable();           
            $table->integer('case_2_id')->nullable();
            $table->string('passenger_name')->nullable();
            $table->string('date_of_travel')->nullable();
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->string('airline')->nullable();
            $table->string('flight')->nullable();
            $table->string('edpartment_time')->nullable();
            $table->string('arival_time')->nullable();
            $table->string('discharging_facility')->nullable();
            $table->string('discharging_md')->nullable();
            $table->string('facility_address')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('addmision_date')->nullable();
            $table->string('diagnosis')->nullable();
            $table->string('ftf_from_date')->nullable();
            $table->string('class_of_service')->nullable();
            $table->string('economy')->nullable();
            $table->string('passenger')->nullable();
            $table->string('oxygen_required')->nullable();
            $table->string('oxygen_needed')->nullable();
            $table->string('sop2_target')->nullable();
            $table->string('attendant')->nullable();
            $table->string('special_service')->nullable();
            $table->string('forseen')->nullable();
            $table->string('contagious')->nullable();
            $table->string('prognosis')->nullable();
            $table->string('facility')->nullable();
            $table->string('address')->nullable();
            $table->string('physician_name')->nullable();
            $table->string('signature')->nullable();
            $table->string('date')->nullable();

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
        Schema::dropIfExists('physican_statements');
    }
}