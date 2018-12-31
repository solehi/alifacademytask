<?php

use Illuminate\Database\Seeder;

class CourseStudentTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_student')->insert([
            'student_id' => 1,
            'course_id' => 2,


        ]);

        DB::table('course_student')->insert([
            'student_id' => 1,
            'course_id' => 1,


        ]);
    }
}

