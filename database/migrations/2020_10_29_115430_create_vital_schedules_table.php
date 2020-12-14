<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVitalSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vital_schedules', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('tablet_users_id')->nullable(); //for now
            //foreign key -> tablet_users_id
            $table->string('reference', 100);
            $table->date('start_date');
            $table->date('end_date');
            $table->string('repeat', 45);
            $table->time('prompt_time');
            $table->boolean('use_alert');
            $table->time('alert_time')->nullable();
            $table->boolean('alert_sent');
            $table->boolean('use_systolic');
            $table->boolean('use_diastolic');
            $table->boolean('use_oximetry');
            $table->boolean('use_pulse');
            $table->boolean('use_respiration');
            $table->boolean('use_temperature');
            $table->boolean('use_blood_glucose');
            $table->unsignedSmallInteger('systolic_min');
            $table->unsignedSmallInteger('systolic_max');
            $table->unsignedSmallInteger('diastolic_min');
            $table->unsignedSmallInteger('diastolic_max');
            $table->unsignedTinyInteger('oximetry_min');
            $table->unsignedTinyInteger('oximetry_max');
            $table->unsignedTinyInteger('pulse_min');
            $table->unsignedTinyInteger('pulse_max');
            $table->unsignedTinyInteger('respiration_min');
            $table->unsignedTinyInteger('respiration_max');
            $table->decimal('temperature_min', 5, 1);
            $table->decimal('temperature_max', 5, 1);
            $table->decimal('blood_glucose_min', 5, 1);
            $table->decimal('blood_glucose_max', 5, 1);
            $table->string('scheduled_by');
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
        Schema::dropIfExists('vital_schedules');
    }
}
