<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id');
            $table->integer('city_id');
            $table->integer('district_id');
            $table->integer('street_id');
            $table->string('title');
            $table->string('address_detail');
            $table->string('acreage');
            $table->integer('floor');
            $table->integer('user_id');
            $table->string('tenant');
            $table->string('content');
            $table->double('price_per_month', 8, 2);
            $table->string('images');
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
        Schema::dropIfExists('rooms');
    }
}
