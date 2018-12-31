<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'name' => 'Java',
            'info' => 'Информация о курсе'

        ]);
        DB::table('courses')->insert([
            'name' => 'Язык программирование C#',
            'info' => 'Информация о курсе'

        ]);
        DB::table('courses')->insert([
            'name' => 'PHP Laravel',
            'info' => 'Информация о курсе'

        ]);


    }
}
