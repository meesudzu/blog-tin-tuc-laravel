<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableArticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cat_id')->unsigned();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->string('thumb');
            $table->string('summary');
            $table->longtext('content');
            $table->string('tags')->nullable();
            $table->string('source')->nullable();
            $table->boolean('is_highlight')->default(false);
            $table->integer('view')->default(0);
            $table->integer('user_id')->unsigned();
            $table->boolean('visibility')->default(true);
            $table->timestamps();
        });

        Schema::table('articles', function ($table) {
            $table->foreign('cat_id')->references('id')->on('categories');
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
        Schema::drop('articles');
    }
}
