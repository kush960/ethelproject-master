<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicationResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medication_responses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('tablet_users_id')->nullable(); //for now
            //foreign key -> tablet_users_id
            $table->string('reference', 100);
            $table->dateTime('submitted_at');
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
        Schema::dropIfExists('medication_responses');
    }
}
