<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeonamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geonames', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uuid');
            $table->string('name');
            $table->string('lang',2);
            $table->float('lat', 10,8);
            $table->float('lng',10,8);
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
        Schema::dropIfExists('geonames');
    }
}
