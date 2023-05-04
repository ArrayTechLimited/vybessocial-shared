<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerformTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perform_tasks', function (Blueprint $table) {
            $table->id();
            $table->string('amount');
            $table->string('status');
            $table->string('image_screenshot');
            $table->string('social_media_username');
            $table->foreignId('earn_id')->constrained();
            $table->foreignId('task_id')->constrained();
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('perform_tasks');
    }
}
