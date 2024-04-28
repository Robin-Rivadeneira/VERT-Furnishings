<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
   
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->bigIncrements('idStore');
            $table->string('ImgStore')->nullable();
            $table->string('storeName');
            $table->string('directory');
            $table->string('cellphone');
            $table->string('stateStore');
        });
    }

    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
