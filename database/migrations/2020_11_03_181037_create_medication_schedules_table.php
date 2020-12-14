<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicationSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medication_schedules', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('tablet_users_id');
            //foreign key -> tablet_users_id
            $table->string('reference', 100);
            $table->string('instruction', 100);
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('repeat', 45);
            $table->time('prompt_time');
            $table->unsignedTinyInteger('alert_time');
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
        Schema::dropIfExists('medication_schedules');
    }
}
