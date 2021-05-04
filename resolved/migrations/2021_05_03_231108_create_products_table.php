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
            $table->string('name', 45);
            $table->string('currency', 45);
            $table->float('price');
            $table->text('description');
            $table->smallInteger('rating');
            $table->dateTime('data_publishing');

            $table->unsignedBigInteger('categories_id');
            $table->unsignedBigInteger('colours_id');

            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('colours_id')->references('id')->on('colours')->onDelete('cascade');
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
