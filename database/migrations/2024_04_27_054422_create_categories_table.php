<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('idCategory');
            $table->string('nameCategory');
            $table->string('stateCategory');
            $table->unsignedBigInteger('idStores');
            $table->foreign('idStores')->references('idStore')->on('stores');
        });
    }


    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
