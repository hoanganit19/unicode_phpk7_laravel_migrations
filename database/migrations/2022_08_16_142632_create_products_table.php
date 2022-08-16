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
            //$table->id(); //bigint, autoincrement, primary key
            $table->increments('id');
            $table->string('name', 200)->nullable();
            $table->text('description')->nullable();
            $table->integer('regular_price')->default(0);
            $table->integer('sale_price')->default(0);
            $table->text('content')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps(); //created_at, updated_at
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
