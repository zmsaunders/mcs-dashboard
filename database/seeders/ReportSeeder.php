<?php

namespace Database\Seeders;

use App\Models\Report;
use App\Models\School;
use Carbon\Carbon;
use DB;
use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->addSchools();
        $this->janeChanceCases();
        $this->mmsCases();
        $this->mhsCases();
        $this->bauerCases();
        $this->bearCases();
        $this->kinderCases();
        $this->markTwainCases();
        $this->medlarCases();
        $this->moundCases();
        $this->madduxCases();
    }

    public function addSchools()
    {
        DB::table('schools')->insert([
            'name' => 'Jane Chance',
            'student_total' => 313,
            'staff_total' => 76,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('schools')->insert([
            'name' => 'Medlar View',
            'student_total' => 278,
            'staff_total' => 79,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('schools')->insert([
            'name' => 'Mark Twain',
            'student_total' => 325,
            'staff_total' => 56,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('schools')->insert([
            'name' => 'Mound',
            'student_total' => 320,
            'staff_total' => 56,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('schools')->insert([
            'name' => 'Bauer',
            'student_total' => 355,
            'staff_total' => 59,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('schools')->insert([
            'name' => 'Middle School',
            'student_total' => 1190,
            'staff_total' => 76,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('schools')->insert([
            'name' => 'Bear',
            'student_total' => 176,
            'staff_total' => 57,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('schools')->insert([
            'name' => 'High School',
            'student_total' => 1575,
            'staff_total' =>184,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('schools')->insert([
            'name' => 'Kinder',
            'student_total' => 344,
            'staff_total' => 86,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('schools')->insert([
            'name' => 'Maddux-Lang',
            'student_total' => 154,
            'staff_total' => 38,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }

    public function bauerCases() {
        $sid = School::where('name', 'Bauer')->first()->id;
        $this->addWeekNumbers($sid, 'September 8 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'September 14 2020', 1, 2, 0, 0);
        $this->addWeekNumbers($sid, 'September 21 2020', 1, 21, 0, 5);
        $this->addWeekNumbers($sid, 'September 28 2020', 0, 23, 0, 5);

        $this->addWeekNumbers($sid, 'October 5 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'October 12 2020', 0, 2, 0, 0);
        $this->addWeekNumbers($sid, 'October 26 2020', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'November 2 2020', 4, 20, 0, 0);
        $this->addWeekNumbers($sid, 'November 9 2020', 0, 4, 0, 0);
        $this->addWeekNumbers($sid, 'November 16 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'November 23 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'November 30 2020', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'December 7 2020', 0, 0, 1, 1);
        $this->addWeekNumbers($sid, 'December 14 2020', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'January 4 2021', 0, 0, 2, 1);
        $this->addWeekNumbers($sid, 'January 11 2021', 0, 0, 0, 1);
        $this->addWeekNumbers($sid, 'January 18 2021', 3, 0, 0, 0);
        $this->addWeekNumbers($sid, 'January 25 2021', 1, 0, 0, 0);

        $this->addWeekNumbers($sid, 'February 1 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'February 8 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'February 15 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'February 22 2021', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'March 1 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'March 8 2021', 1, 1, 0, 0);
        $this->addWeekNumbers($sid, 'March 15 2021', 0, 1, 0, 0);
        $this->addWeekNumbers($sid, 'March 22 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'March 29 2021', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'April 12 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'April 19 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'April 26 2021', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'May 3 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'May 10 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'May 24 2021', 1, 0, 0, 0);

        // New Year
        $this->addWeekNumbers($sid, 'August 16 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'August 23 2021', 3, 23, 0, 0);

    }

    public function bearCases() {
        $sid = School::where('name', 'Bear')->first()->id;
        $this->addWeekNumbers($sid, 'September 8 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'September 14 2020', 0, 0, 0, 1);
        $this->addWeekNumbers($sid, 'September 21 2020', 0, 1, 0, 1);
        $this->addWeekNumbers($sid, 'September 28 2020', 0, 1, 0, 0);

        $this->addWeekNumbers($sid, 'October 5 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'October 12 2020', 0, 2, 0, 0);
        $this->addWeekNumbers($sid, 'October 26 2020', 0, 2, 1, 1);

        $this->addWeekNumbers($sid, 'November 2 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'November 9 2020', 1, 1, 1, 1);
        $this->addWeekNumbers($sid, 'November 16 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'November 23 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'November 30 2020', 0, 13, 1, 1);

        $this->addWeekNumbers($sid, 'December 7 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'December 14 2020', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'January 4 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'January 11 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'January 18 2021', 0, 0, 1, 1);
        $this->addWeekNumbers($sid, 'January 25 2021', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'February 1 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'February 8 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'February 15 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'February 22 2021', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'March 1 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'March 8 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'March 15 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'March 22 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'March 29 2021', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'April 12 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'April 19 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'April 26 2021', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'May 3 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'May 10 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'May 24 2021', 0, 0, 0, 0);

        // New Year
        $this->addWeekNumbers($sid, 'August 16 2021', 6, 6, 0, 0);
        $this->addWeekNumbers($sid, 'August 23 2021', 3, 13, 0, 0);
    }

    public function kinderCases() {
        $sid = School::where('name', 'Kinder')->first()->id;
        $this->addWeekNumbers($sid, 'September 8 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'September 14 2020', 0, 0, 1, 2);
        $this->addWeekNumbers($sid, 'September 21 2020', 0, 1, 0, 0);
        $this->addWeekNumbers($sid, 'September 28 2020', 0, 10, 0, 0);

        $this->addWeekNumbers($sid, 'October 5 2020', 0, 8, 0, 0);
        $this->addWeekNumbers($sid, 'October 12 2020', 0, 9, 0, 0);
        $this->addWeekNumbers($sid, 'October 26 2020', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'November 2 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'November 9 2020', 0, 0, 1, 1);
        $this->addWeekNumbers($sid, 'November 16 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'November 23 2020', 2, 2, 0, 0);
        $this->addWeekNumbers($sid, 'November 30 2020', 0, 2, 1, 1);

        $this->addWeekNumbers($sid, 'December 7 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'December 14 2020', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'January 4 2021', 1, 1, 1, 1);
        $this->addWeekNumbers($sid, 'January 11 2021', 0, 1, 0, 0);
        $this->addWeekNumbers($sid, 'January 18 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'January 25 2021', 1, 1, 0, 0);

        $this->addWeekNumbers($sid, 'February 1 2021', 0, 1, 0, 0);
        $this->addWeekNumbers($sid, 'February 8 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'February 15 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'February 22 2021', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'March 1 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'March 8 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'March 15 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'March 22 2021', 1, 4, 0, 0);
        $this->addWeekNumbers($sid, 'March 29 2021', 0, 4, 0, 0);

        $this->addWeekNumbers($sid, 'April 12 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'April 19 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'April 26 2021', 1, 4, 0, 0);

        $this->addWeekNumbers($sid, 'May 3 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'May 10 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'May 24 2021', 0, 0, 0, 0);

        // New Year
        $this->addWeekNumbers($sid, 'August 16 2021', 1, 1, 0, 0);
        $this->addWeekNumbers($sid, 'August 23 2021', 1, 1, 2, 2);
    }

    public function markTwainCases() {
        $sid = School::where('name', 'Mark Twain')->first()->id;
        $this->addWeekNumbers($sid, 'September 8 2020', 0, 2, 0, 0);
        $this->addWeekNumbers($sid, 'September 14 2020', 0, 4, 0, 0);
        $this->addWeekNumbers($sid, 'September 21 2020', 0, 6, 0, 0);
        $this->addWeekNumbers($sid, 'September 28 2020', 0, 3, 0, 0);

        $this->addWeekNumbers($sid, 'October 5 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'October 12 2020', 0, 4, 0, 0);
        $this->addWeekNumbers($sid, 'October 26 2020', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'November 2 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'November 9 2020', 1, 1, 1, 1);
        $this->addWeekNumbers($sid, 'November 16 2020', 1, 6, 2, 7);
        $this->addWeekNumbers($sid, 'November 23 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'November 30 2020', 1, 11, 0, 0);

        $this->addWeekNumbers($sid, 'December 7 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'December 14 2020', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'January 4 2021', 1, 1, 1, 0);
        $this->addWeekNumbers($sid, 'January 11 2021', 0, 1, 0, 0);
        $this->addWeekNumbers($sid, 'January 18 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'January 25 2021', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'February 1 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'February 8 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'February 15 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'February 22 2021', 2, 5, 0, 0);

        $this->addWeekNumbers($sid, 'March 1 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'March 8 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'March 15 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'March 22 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'March 29 2021', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'April 12 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'April 19 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'April 26 2021', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'May 3 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'May 10 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'May 24 2021', 1, 2, 0, 0);

        // New Year
        $this->addWeekNumbers($sid, 'August 16 2021', 2, 4, 1, 1);
        $this->addWeekNumbers($sid, 'August 23 2021', 1, 6, 0, 0);
    }

    public function medlarCases() {
        $sid = School::where('name', 'Medlar View')->first()->id;
        $this->addWeekNumbers($sid, 'September 8 2020', 0, 3, 0, 0);
        $this->addWeekNumbers($sid, 'September 14 2020', 2, 1, 0, 1);
        $this->addWeekNumbers($sid, 'September 21 2020', 0, 3, 0, 0);
        $this->addWeekNumbers($sid, 'September 28 2020', 0, 1, 0, 0);

        $this->addWeekNumbers($sid, 'October 5 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'October 12 2020', 0, 1, 0, 0);
        $this->addWeekNumbers($sid, 'October 26 2020', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'November 2 2020', 1, 8, 1, 1);
        $this->addWeekNumbers($sid, 'November 9 2020', 0, 3, 1, 1);
        $this->addWeekNumbers($sid, 'November 16 2020', 1, 4, 1, 2);
        $this->addWeekNumbers($sid, 'November 23 2020', 0, 10, 0, 3);
        $this->addWeekNumbers($sid, 'November 30 2020', 1, 1, 1, 4);

        $this->addWeekNumbers($sid, 'December 7 2020', 1, 1, 0, 0);
        $this->addWeekNumbers($sid, 'December 14 2020', 0, 0, 1, 2);

        $this->addWeekNumbers($sid, 'January 4 2021', 0, 0, 1, 0);
        $this->addWeekNumbers($sid, 'January 11 2021', 2, 4, 1, 1);
        $this->addWeekNumbers($sid, 'January 18 2021', 1, 1, 0, 0);
        $this->addWeekNumbers($sid, 'January 25 2021', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'February 1 2021', 0, 4, 0, 0);
        $this->addWeekNumbers($sid, 'February 8 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'February 15 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'February 22 2021', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'March 1 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'March 8 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'March 15 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'March 22 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'March 29 2021', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'April 12 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'April 19 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'April 26 2021', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'May 3 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'May 10 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'May 24 2021', 0, 0, 0, 0);

        // New Year
        $this->addWeekNumbers($sid, 'August 16 2021', 1, 4, 0, 0);
        $this->addWeekNumbers($sid, 'August 23 2021', 0, 0, 0, 0);
    }

    public function moundCases() {
        $sid = School::where('name', 'Mound')->first()->id;
        $this->addWeekNumbers($sid, 'September 8 2020', 0, 1, 0, 0);
        $this->addWeekNumbers($sid, 'September 14 2020', 0, 1, 0, 0);
        $this->addWeekNumbers($sid, 'September 21 2020', 0, 1, 0, 0);
        $this->addWeekNumbers($sid, 'September 28 2020', 0, 2, 0, 0);

        $this->addWeekNumbers($sid, 'October 5 2020', 0, 1, 0, 0);
        $this->addWeekNumbers($sid, 'October 12 2020', 0, 5, 0, 1);
        $this->addWeekNumbers($sid, 'October 26 2020', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'November 2 2020', 3, 36, 0, 3);
        $this->addWeekNumbers($sid, 'November 9 2020', 0, 28, 1, 4);
        $this->addWeekNumbers($sid, 'November 16 2020', 0, 5, 1, 3);
        $this->addWeekNumbers($sid, 'November 23 2020', 0, 5, 0, 1);
        $this->addWeekNumbers($sid, 'November 30 2020', 1, 9, 1, 1);

        $this->addWeekNumbers($sid, 'December 7 2020', 1, 1, 0, 0);
        $this->addWeekNumbers($sid, 'December 14 2020', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'January 4 2021', 1, 1, 0, 0);
        $this->addWeekNumbers($sid, 'January 11 2021', 0, 1, 0, 0);
        $this->addWeekNumbers($sid, 'January 18 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'January 25 2021', 0, 0, 1, 1);

        $this->addWeekNumbers($sid, 'February 1 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'February 8 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'February 15 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'February 22 2021', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'March 1 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'March 8 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'March 15 2021', 1, 9, 0, 0);
        $this->addWeekNumbers($sid, 'March 22 2021', 0, 9, 0, 0);
        $this->addWeekNumbers($sid, 'March 29 2021', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'April 12 2021', 1, 7, 0, 0);
        $this->addWeekNumbers($sid, 'April 19 2021', 0, 7, 0, 0);
        $this->addWeekNumbers($sid, 'April 26 2021', 2, 4, 0, 1);

        $this->addWeekNumbers($sid, 'May 3 2021', 0, 5, 0, 1);
        $this->addWeekNumbers($sid, 'May 10 2021', 0, 5, 0, 1);
        $this->addWeekNumbers($sid, 'May 24 2021', 0, 0, 0, 0);

        // New Year
        $this->addWeekNumbers($sid, 'August 16 2021', 2, 2, 0, 0);
        $this->addWeekNumbers($sid, 'August 23 2021', 0, 1, 0, 0);
    }

    public function madduxCases() {
        $sid = School::where('name', 'Maddux-Lang')->first()->id;
        $this->addWeekNumbers($sid, 'September 8 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'September 14 2020', 0, 1, 0, 1);
        $this->addWeekNumbers($sid, 'September 21 2020', 0, 1, 0, 0);
        $this->addWeekNumbers($sid, 'September 28 2020', 0, 1, 0, 0);

        $this->addWeekNumbers($sid, 'October 5 2020', 0, 1, 0, 0);
        $this->addWeekNumbers($sid, 'October 12 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'October 26 2020', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'November 2 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'November 9 2020', 0, 3, 0, 0);
        $this->addWeekNumbers($sid, 'November 16 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'November 23 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'November 30 2020', 0, 10, 0, 0);

        $this->addWeekNumbers($sid, 'December 7 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'December 14 2020', 0, 23, 2, 11);

        $this->addWeekNumbers($sid, 'January 4 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'January 11 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'January 18 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'January 25 2021', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'February 1 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'February 8 2021', 0, 2, 0, 0);
        $this->addWeekNumbers($sid, 'February 15 2021', 0, 15, 1, 9);
        $this->addWeekNumbers($sid, 'February 22 2021', 0, 6, 0, 6);

        $this->addWeekNumbers($sid, 'March 1 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'March 8 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'March 15 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'March 22 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'March 29 2021', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'April 12 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'April 19 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'April 26 2021', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'May 3 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'May 10 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'May 24 2021', 0, 0, 0, 0);

        // New Year
        $this->addWeekNumbers($sid, 'August 16 2021', 2, 2, 2, 2);
        $this->addWeekNumbers($sid, 'August 23 2021', 1, 1, 0, 0);
    }

    public function mhsCases() {
        $sid = School::where('name', 'High School')->first()->id;
        $this->addWeekNumbers($sid, 'September 8 2020', 0, 6, 3, 3);
        $this->addWeekNumbers($sid, 'September 14 2020', 1, 35, 0, 3);
        $this->addWeekNumbers($sid, 'September 21 2020', 2, 59, 0, 1);
        $this->addWeekNumbers($sid, 'September 28 2020', 1, 41, 1, 2);

        $this->addWeekNumbers($sid, 'October 5 2020', 1, 21, 0, 1);
        $this->addWeekNumbers($sid, 'October 12 2020', 4, 45, 0, 0);
        $this->addWeekNumbers($sid, 'October 26 2020', 7, 43, 1, 1);

        $this->addWeekNumbers($sid, 'November 2 2020', 7, 134, 1, 1);
        $this->addWeekNumbers($sid, 'November 9 2020', 6, 111, 3, 11);
        $this->addWeekNumbers($sid, 'November 16 2020', 2, 48, 1, 11);
        $this->addWeekNumbers($sid, 'November 23 2020', 2, 14, 1, 3);
        $this->addWeekNumbers($sid, 'November 30 2020', 9, 14, 1, 3);

        $this->addWeekNumbers($sid, 'December 7 2020', 5, 5, 1, 1);
        $this->addWeekNumbers($sid, 'December 14 2020', 2, 2, 3, 3);

        $this->addWeekNumbers($sid, 'January 4 2021', 5, 11, 2, 4);
        $this->addWeekNumbers($sid, 'January 11 2021', 2, 11, 0, 2);
        $this->addWeekNumbers($sid, 'January 18 2021', 6, 10, 1, 1);
        $this->addWeekNumbers($sid, 'January 25 2021', 5, 15, 1, 1);

        $this->addWeekNumbers($sid, 'February 1 2021', 9, 31, 1, 1);
        $this->addWeekNumbers($sid, 'February 8 2021', 8, 19, 0, 0);
        $this->addWeekNumbers($sid, 'February 15 2021', 3, 10, 0, 1);
        $this->addWeekNumbers($sid, 'February 22 2021', 2, 7, 0, 0);

        $this->addWeekNumbers($sid, 'March 1 2021', 2, 10, 0, 0);
        $this->addWeekNumbers($sid, 'March 8 2021', 0, 5, 0, 0);
        $this->addWeekNumbers($sid, 'March 15 2021', 1, 4, 0, 0);
        $this->addWeekNumbers($sid, 'March 22 2021', 4, 41, 0, 0);
        $this->addWeekNumbers($sid, 'March 29 2021', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'April 12 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'April 19 2021', 3, 18, 0, 0);
        $this->addWeekNumbers($sid, 'April 26 2021', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'May 3 2021', 2, 9, 0, 0);
        $this->addWeekNumbers($sid, 'May 10 2021', 0, 4, 0, 0);
        $this->addWeekNumbers($sid, 'May 24 2021', 2, 0, 0, 0);

        // New Year
        $this->addWeekNumbers($sid, 'August 16 2021', 4, 10, 0, 0);
        $this->addWeekNumbers($sid, 'August 23 2021', 6, 43, 1, 1);
    }

    public function mmsCases() {
        $sid = School::where('name', 'Middle School')->first()->id;
        $this->addWeekNumbers($sid, 'September 8 2020', 0, 3, 1, 1);
        $this->addWeekNumbers($sid, 'September 14 2020', 1, 12, 2, 3);
        $this->addWeekNumbers($sid, 'September 21 2020', 2, 25, 0, 2);
        $this->addWeekNumbers($sid, 'September 28 2020', 0, 19, 0, 1);

        $this->addWeekNumbers($sid, 'October 5 2020', 0, 6, 1, 3);
        $this->addWeekNumbers($sid, 'October 12 2020', 1, 13, 0, 2);
        $this->addWeekNumbers($sid, 'October 26 2020', 1, 27, 2, 2);

        $this->addWeekNumbers($sid, 'November 2 2020', 3, 54, 4, 5);
        $this->addWeekNumbers($sid, 'November 9 2020', 3, 24, 3, 4);
        $this->addWeekNumbers($sid, 'November 16 2020', 4, 72, 3, 6);
        $this->addWeekNumbers($sid, 'November 23 2020', 2, 70, 0, 3);
        $this->addWeekNumbers($sid, 'November 30 2020', 3, 43, 0, 0);

        $this->addWeekNumbers($sid, 'December 7 2020', 4, 19, 1, 4);
        $this->addWeekNumbers($sid, 'December 14 2020', 4, 32, 2, 2);

        $this->addWeekNumbers($sid, 'January 4 2021', 4, 2, 0, 0);
        $this->addWeekNumbers($sid, 'January 11 2021', 2, 1, 0, 0);
        $this->addWeekNumbers($sid, 'January 18 2021', 3, 4, 0, 0);
        $this->addWeekNumbers($sid, 'January 25 2021', 1, 4, 2, 6);

        $this->addWeekNumbers($sid, 'February 1 2021', 4, 6, 1, 4);
        $this->addWeekNumbers($sid, 'February 8 2021', 1, 3, 0, 0);
        $this->addWeekNumbers($sid, 'February 15 2021', 1, 0, 0, 0);
        $this->addWeekNumbers($sid, 'February 22 2021', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'March 1 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'March 8 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'March 15 2021', 2, 3, 0, 0);
        $this->addWeekNumbers($sid, 'March 22 2021', 2, 4, 0, 0);
        $this->addWeekNumbers($sid, 'March 29 2021', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'April 12 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'April 19 2021', 0, 0, 0, 1);
        $this->addWeekNumbers($sid, 'April 26 2021', 3, 5, 0, 1);

        $this->addWeekNumbers($sid, 'May 3 2021', 0, 4, 0, 0);
        $this->addWeekNumbers($sid, 'May 10 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'May 24 2021', 0, 0, 0, 0);

        // New Year
        $this->addWeekNumbers($sid, 'August 16 2021', 2, 11, 0, 0);
        $this->addWeekNumbers($sid, 'August 23 2021', 13, 99, 7, 13);
    }

    public function janeChanceCases() {
        $sid = School::where('name', 'Jane Chance')->first()->id;
        $this->addWeekNumbers($sid, 'September 8 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'September 14 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'September 21 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'September 28 2020', 0, 4, 0, 0);

        $this->addWeekNumbers($sid, 'October 5 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'October 12 2020', 2, 32, 0, 0);
        $this->addWeekNumbers($sid, 'October 26 2020', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'November 2 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'November 9 2020', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'November 16 2020', 1, 6, 0, 0);
        $this->addWeekNumbers($sid, 'November 23 2020', 1, 31, 3, 12);
        $this->addWeekNumbers($sid, 'November 30 2020', 1, 26, 1, 2);

        $this->addWeekNumbers($sid, 'December 7 2020', 0, 0, 1, 0);
        $this->addWeekNumbers($sid, 'December 14 2020', 0, 0, 1, 1);

        $this->addWeekNumbers($sid, 'January 4 2021', 1, 1, 0, 0);
        $this->addWeekNumbers($sid, 'January 11 2021', 1, 1, 1, 1);
        $this->addWeekNumbers($sid, 'January 18 2021', 1, 7, 0, 1);
        $this->addWeekNumbers($sid, 'January 25 2021', 0, 5, 0, 0);

        $this->addWeekNumbers($sid, 'February 1 2021', 1, 2, 1, 3);
        $this->addWeekNumbers($sid, 'February 8 2021', 2, 5, 0, 1);
        $this->addWeekNumbers($sid, 'February 15 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'February 22 2021', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'March 1 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'March 8 2021', 2, 2, 0, 1);
        $this->addWeekNumbers($sid, 'March 15 2021', 0, 1, 0, 0);
        $this->addWeekNumbers($sid, 'March 22 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'March 29 2021', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'April 12 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'April 19 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'April 26 2021', 0, 0, 0, 0);

        $this->addWeekNumbers($sid, 'May 3 2021', 2, 0, 0, 0);
        $this->addWeekNumbers($sid, 'May 10 2021', 0, 0, 0, 0);
        $this->addWeekNumbers($sid, 'May 24 2021', 0, 0, 0, 0);

        // New Year
        $this->addWeekNumbers($sid, 'August 16 2021', 1, 7, 0, 0);
        $this->addWeekNumbers($sid, 'August 23 2021', 5, 25, 0, 0);
    }

    public function addWeekNumbers($school, $date, $studentP, $studentQ, $staffP, $staffQ) {
        $report = new Report;
        $report->school_id = $school;
        $report->week = date('Y-m-d', strtotime($date));
        $report->student_positive = $studentP;
        $report->student_quarantine = $studentQ;
        $report->staff_positive = $staffP;
        $report->staff_quarantine = $staffQ;
        $report->save();
    }
}
