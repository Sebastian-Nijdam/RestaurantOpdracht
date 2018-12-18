<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDishrecipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dish_recipes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('dish_id');
            $table->unsignedInteger('product_id');
            $table->string('ingredients_list');

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('dish_id')->references('id')->on('dishes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dishrecipe');
    }
}
