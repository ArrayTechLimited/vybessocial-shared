<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductAdvertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_adverts', function (Blueprint $table) {
            $table->id();
            $table->string('amount')->nullable();
            $table->foreignId('product_id')->constrained();
            $table->foreignId('wallet_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('product_adverts');
    }
}
