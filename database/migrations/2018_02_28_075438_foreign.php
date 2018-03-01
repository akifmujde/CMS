<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Foreign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('post',function (Blueprint $table){
            $table->integer('user_id')->unsigned();
            $table->integer('phtalb_id')->unsigned();
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('phtalb_id')->references('id')->on('photo_album');
            $table->foreign('category_id')->references('id')->on('category');
        });

        Schema::table('photos',function (Blueprint $table){
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('photo_album',function (Blueprint $table){
            $table->integer('photo_id')->unsigned();
            $table->integer('album_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('photo_id')->references('id')->on('photos');
            $table->foreign('album_id')->references('id')->on('album');
            $table->foreign('user_id')->references('id')->on('users');

        });

        Schema::table('album',function (Blueprint $table){
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('category',function (Blueprint $table){
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('users',function (Blueprint $table){
            $table->integer('role_id')->unsigned()->default(1);
            $table->foreign('role_id')->references('id')->on('role');
        });

        Schema::table('menu_post',function (Blueprint $table){
            $table->integer('post_id')->unsigned();
            $table->integer('menu_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('post_id')->references('id')->on('post');
            $table->foreign('menu_id')->references('id')->on('menu');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('menu',function (Blueprint $table){
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
