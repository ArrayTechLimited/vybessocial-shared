<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEarnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('earns', function (Blueprint $table) {
            $table->id();
            $table->string("social_platform");
            $table->string("no_of_advert");
            $table->string("gender");
            $table->string("location");
            $table->string("religion");
            $table->string("link")->nullable();
            $table->string("social_media_post")->nullable();
            $table->text("advert_sample_text")->nullable();
            $table->string("advert_media")->nullable();
            $table->string("payment_status")->nullable();
            $table->string("amount")->nullable();
            $table->string("reference")->nullable();
            $table->foreignId("user_id")->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("wallet_id")->constrained()->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("task_id")->constrained()->onUpdate("cascade")->onDelete("cascade");
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
        Schema::dropIfExists('earns');
    }
}
