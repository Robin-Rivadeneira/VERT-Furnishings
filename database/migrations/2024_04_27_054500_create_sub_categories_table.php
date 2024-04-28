<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoriesTable extends Migration
{
    
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->bigIncrements('idSubCategory');
            $table->string('nameSubCategory');
            $table->string('stateSubCategory');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('idCategory')->on('categories');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sub_categories');
    }
}
