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
            $table->integer('uuid',7);
            $table->string('name',50);
            $table->string('lang',2);
            $table->float('lat', 7,5);
            $table->float('lng',7,5);
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
