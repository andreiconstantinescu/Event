<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfileToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable()  ;
            $table->string('location')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('gender')->nullable();
            $table->text('bio')->nullable();
            $table->string('profilepic')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('profiles');
    }
}
