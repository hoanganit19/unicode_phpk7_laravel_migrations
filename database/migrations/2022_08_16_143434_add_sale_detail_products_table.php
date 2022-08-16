<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSaleDetailProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function(Blueprint $table){
            $table->text('sale_detail')->after('content')->nullable();

            $table->dateTime('last_update')->after('sale_detail')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table){

            if (Schema::hasColumn('products', 'sale_detail')){
                $table->dropColumn('sale_detail');
            }

            if (Schema::hasColumn('products', 'last_update')){
                $table->dropColumn('last_update');
            }
        });

    }
}
