<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('room', 100);
            $table->integer('number_room');
            $table->integer('number_bathroom');
            $table->integer('price');
            $table->string('month', 255);
            $table->string('describe', 255);
            $table->integer('id_address')->unsigned();
            $table->foreign('id_address')->references('id')->on('address');
            $table->integer('id_kind_house')->unsigned();
            $table->foreign('id_kind_house')->references('id')->on('kind_house');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->boolean('status');
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
        Schema::dropIfExists('houses');
    }
}
