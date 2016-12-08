<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->text('comment');
            $table->integer('event_id')->unsigned();
            $table->timestamps();

        });

        Schema::table('comments', function ($table){
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('username')->references('name')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropForeign(['event_id']);
        Schema::dropForeign(['username']);
        Schema::drop('comments');

    }
}
