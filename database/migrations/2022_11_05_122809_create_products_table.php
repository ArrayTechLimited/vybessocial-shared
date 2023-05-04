<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // $table->string('product_image')->nullable();
            $table->string('title');
            $table->string('quantity');
            $table->string('price');
            $table->string('discount_price');
            $table->string('description');
            $table->string('youtube_link');
            $table->string('address');
            $table->string('state_name');
            $table->string('lga_name');
            $table->foreignId('super_category_id')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('sub_category_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('wallet_id')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('products');
    }
}
