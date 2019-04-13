<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('avatar')->default('avatar-default.jpg');
            $table->boolean('status')->default(true);
            $table->integer('permission_id')->unsigned()->default(3);
            $table->timestamps();
        });

        Schema::table('users', function ($table) {
            $table->foreign('permission_id')->references('id')->on('permissions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
