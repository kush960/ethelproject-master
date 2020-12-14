<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::table('vital_schedules', function (Blueprint $table) {
            $table->foreign('tablet_users_id')->references('id')->on('tablet_users');
        });
        Schema::table('vital_responses', function (Blueprint $table) {
            $table->foreign('tablet_users_id')->references('id')->on('tablet_users');
        });
        Schema::table('tablet_users', function (Blueprint $table) {
            $table->foreign('projects_id')->references('id')->on('projects');
            });
        Schema::table('projects', function (Blueprint $table) {
            $table->foreign('organisations_id')->references('id')->on('organisations');
        });
        Schema::table('media', function (Blueprint $table) {
            $table->foreign('tablet_users_id')->references('id')->on('tablet_users');
        });
        */

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*
        Schema::table('vital_schedules', function (Blueprint $table) {
            $table->dropForeign('vital_schedules_tablet_users_id_foreign');
        });
        Schema::table('vital_responses', function (Blueprint $table) {
            $table->dropForeign('vital_responses_tablet_users_id_foreign');
        });
        Schema::table('tablet_users', function (Blueprint $table) {
            $table->dropForeign('tablet_users_projects_id_foreign');
            });
        Schema::table('projects', function (Blueprint $table) {
            $table->dropForeign('projects_organisations_id_foreign');
        });
        */

    }
}
