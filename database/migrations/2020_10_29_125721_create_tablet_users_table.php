<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabletUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tablet_users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('projects_id'); 
            //foreign key -> projects_id
            $table->string('name', 100);
            $table->string('full_name', 100);
            $table->string('familiar_name', 45);
            $table->string('profile_pic', 100)->nullable();
            $table->char('gender', 1)->nullable();
            $table->string('city', 45);
            $table->string('country', 45);
            $table->string('postcode', 20);
            $table->string('language', 45);
            $table->string('timezone', 45);

            $table->unsignedTinyInteger('volume');
            $table->boolean('power')->default(false);
            $table->boolean('kiosk')->default(false);;
            $table->boolean('documents')->default(false);;
            $table->boolean('calendar')->default(false);;
            $table->boolean('videos')->default(false);;
            $table->boolean('websites')->default(false);;
            $table->boolean('exercises')->default(false);;
            $table->boolean('photos')->default(false);;
            $table->boolean('photos_slideshow')->default(false);;
            $table->boolean('photos_delete')->default(false);;
            $table->boolean('messages')->default(false);;
            $table->boolean('messages_reply')->default(false);;
            $table->boolean('request_call')->default(false);;
            $table->boolean('video_call')->default(false);;
            // users for messages, request and video call - here as array or different table?

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
        Schema::dropIfExists('tablet_users');
    }
}
