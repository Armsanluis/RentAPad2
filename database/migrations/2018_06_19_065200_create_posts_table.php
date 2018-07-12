<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('type');
            $table->string('title');
            $table->string('price');
            $table->string('location');
            $table->string('size');
            $table->string('rooms');
            $table->string('t&b');
            $table->string('amenities');
            $table->string('payment');
            $table->mediumText('body');
            $table->string('image1');
            // $table->string('image2');
            // $table->string('image3');
            // $table->string('image4');
            // $table->string('image5');
            
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
        Schema::dropIfExists('posts');
    }
}
