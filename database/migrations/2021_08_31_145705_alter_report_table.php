<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reports', function ($table) {
            $table->integer('student_positive')->unsigned();
            $table->integer('student_quarantine')->unsigned();
            $table->integer('staff_positive')->unsigned();
            $table->integer('staff_quarantine')->unsigned();

            $table->dropColumn('affected');
            $table->dropColumn('type');
            $table->dropColumn('group');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reports', function ($table) {
            $table->dropColumn('student_positive');
            $table->dropColumn('student_quarantine');
            $table->dropColumn('staff_positive');
            $table->dropColumn('staff_quarantine');

            $table->integer('affected')->unsigned();
            $table->string('type');
            $table->string('group');
        });
    }
}
