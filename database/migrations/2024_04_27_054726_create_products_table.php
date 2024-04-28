<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
 
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('idProduct');
            $table->string('productImage')->nullable();
            $table->string('productName');
            $table->text('productDescription')->nullable();
            $table->string('productPrice');
            $table->integer('availableQuantity');
            $table->unsignedBigInteger('idCategory');
            $table->foreign('idCategory')->references('idCategory')->on('categories'); 
            $table->unsignedBigInteger('idStore');
            $table->foreign('idStore')->references('idStore')->on('stores');
            $table->unsignedBigInteger('idSubCategory')->nullable();
            $table->foreign('idSubCategory')->references('idSubCategory')->on('sub_categories'); 
            $table->string('productStatus');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }

    public function after()
    {
        return [
            CreateStoresTable::class,
            CreateSubCategoriesTable::class
        ];
    }
}

