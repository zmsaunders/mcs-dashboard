<?php

use Carbon\Carbon;
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

        DB::table('schools')->insert([
            'name' => 'Jane Chance',
            'student_total' => 360,
            'staff_total' => 76,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('schools')->insert([
            'name' => 'Medlar View',
            'student_total' => 283,
            'staff_total' => 79,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('schools')->insert([
            'name' => 'Mark Twain',
            'student_total' => 330,
            'staff_total' => 56,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('schools')->insert([
            'name' => 'Mound',
            'student_total' => 321,
            'staff_total' => 56,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('schools')->insert([
            'name' => 'Bauer',
            'student_total' => 431,
            'staff_total' => 59,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('schools')->insert([
            'name' => 'Middle School',
            'student_total' => 1256,
            'staff_total' => 76,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('schools')->insert([
            'name' => 'Bear',
            'student_total' => 198,
            'staff_total' => 57,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('schools')->insert([
            'name' => 'High School',
            'student_total' => 1546,
            'staff_total' =>184,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('schools')->insert([
            'name' => 'Kinder',
            'student_total' => 382,
            'staff_total' => 86,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('schools')->insert([
            'name' => 'Maddux-Lang',
            'student_total' => 202,
            'staff_total' => 38,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

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
