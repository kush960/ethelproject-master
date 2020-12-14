<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVitalResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vital_responses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('tablet_users_id')->nullable(); //for now
            //foreign key -> tablet_users_id
            $table->string('reference', 100);
            $table->dateTime('submitted_at');
            $table->boolean('met_systolic');
            $table->boolean('met_diastolic');
            $table->boolean('met_oximetry');
            $table->boolean('met_pulse');
            $table->boolean('met_respiration');
            $table->boolean('met_temperature');
            $table->boolean('met_blood_glucose');           
            $table->unsignedSmallInteger('systolic');           
            $table->unsignedSmallInteger('diastolic');            
            $table->unsignedTinyInteger('oximetry');           
            $table->unsignedTinyInteger('pulse');         
            $table->unsignedTinyInteger('respiration');         
            $table->decimal('temperature', 5, 1);         
            $table->decimal('blood_glucose', 5, 1);
            $table->string('entered_by');
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
        Schema::dropIfExists('vital_responses');
    }
}
