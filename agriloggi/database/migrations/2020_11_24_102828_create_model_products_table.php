<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('idProduct');
            $table->unsignedInteger('stock_Users');
            $table->unsignedInteger('category_idcategory');
            $table->unsignedInteger('quantityType_idquantityType');
            $table->string('title',45);
            $table->tinyInteger('boost');
            $table->tinyInteger('ad');
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
        Schema::dropIfExists('product');
    }
}
