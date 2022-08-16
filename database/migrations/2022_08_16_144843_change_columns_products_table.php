<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnsProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function(Blueprint $table){
            $table->string('name')->nullable(false)->change();

            $table->float('regular_price')->default(0)->change();

            $table->float('sale_price')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function(Blueprint $table){
            $table->string('name', 200)->nullable()->change();

            $table->integer('regular_price')->default(0)->change();

            $table->integer('sale_price')->default(0)->change();
        });
    }
}
