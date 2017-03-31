<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeLessonsGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons_guests', function (Blueprint $table) {
            $table->increments('id');

            /* Relation between lessons and guests */
            $table->integer('lesson_id')->unsigned()->index();
            $table->foreign('lesson_id')->references('id')->on('lessons')->onDelete('cascade');

            $table->integer('guest_id')->unsigned()->index();
            $table->foreign('guest_id')->references('id')->on('guests')->onDelete('cascade');

            /* Relation logging */
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
        Schema::drop('lessons_guests');
    }
}
