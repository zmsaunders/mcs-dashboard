<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCovidTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function($table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('student_total')->unsigned();
            $table->integer('staff_total')->unsigned();
            $table->timestamps();
        });

        Schema::create('reports', function($table) {
            $table->increments('id');
            $table->integer('affected')->unsigned();
            $table->integer('school_id')->unsigned();
            $table->foreign('school_id')->references('id')->on('schools');

            $table->string('group');
            $table->string('type'); // Positive vs quarantine
            $table->dateTime('week');
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
        Schema::drop('reports');
        Schema::drop('schools');
    }
}
