<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('room', 100);
            $table->integer('number_room');
            $table->integer('number_bathroom');
            $table->integer('price');
            $table->string('title', 255);
            $table->string('describe', 255);
            $table->string('address', 255);
            $table->integer('id_image')->unsigned();
            $table->foreign('id_image')->references('id')->on('image');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->integer('id_house')->unsigned();
            $table->foreign('id_house')->references('id')->on('houses');
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
        Schema::dropIfExists('post');
    }
}
