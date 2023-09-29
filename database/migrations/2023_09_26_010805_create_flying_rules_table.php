<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlyingRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flying_rules', function (Blueprint $table) {
            $table->id();
            $table->integer('case_1_id')->nullable();           
            $table->integer('case_2_id')->nullable();
            $table->string('pre_diet_check')->nullable();
            $table->string('pre_dvt_check')->nullable();
            $table->string('pre_bowel_check')->nullable();
            $table->string('pre_other_check')->nullable();
            $table->string('in_oxygen_check')->nullable();
            $table->string('in_foley_check')->nullable();
            $table->string('iv_fluids')->nullable();
            $table->string('solution')->nullable();
            $table->string('rate_ml')->nullable();
            $table->string('in_other_check')->nullable();
            $table->string('in_medication_check')->nullable();
            $table->string('in_hour')->nullable();
            $table->string('in_sedation_check')->nullable();
            $table->string('in_analgesia_check')->nullable();
            $table->string('in_provider')->nullable();
            $table->string('in_signature')->nullable();
            $table->string('in_date')->nullable();

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
        Schema::dropIfExists('flying_rules');
    }
}