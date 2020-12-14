<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVitalQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vital_questions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name', 45);
            $table->string('prompt', 100);
            $table->string('category', 45)->nullable();
            $table->string('type', 45);
            $table->unsignedTinyInteger('priority');
            $table->unsignedDecimal('min', 5, 1);
            $table->unsignedDecimal('max', 5, 1);
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
        Schema::dropIfExists('vital_questions');
    }
}
