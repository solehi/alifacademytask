<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('students')->insert([
            'name' => 'Максимов Максим',
            'email' => 'exemple@gmail.com',
            'address' => 'Душанбе/зарафшон2/',
            'phone' => str_random(10),
            'date_of_birth' => '2000-01-01'


        ]);
        DB::table('students')->insert([
            'name' => 'Попов Алексей',
            'email' => 'alex@gmail.com',
            'address' => 'Худжанд /озоди /17',
            'phone' => '92000000',
            'date_of_birth' => '2000-01-01'


        ]);

        DB::table('students')->insert([
            'name' => 'Иванов Иван Иванович',
            'email' => 'ivan@gmail.com',
            'address' => 'Душанбе',
            'phone' => '+992930000000',
            'date_of_birth' => '2018-01-01'


        ]);
        DB::table('students')->insert([
            'name' => 'Александров Михаил',
            'email' => 'mikhail@gmail.com',
            'address' => 'Душанбе Испечак2 м0 д0 к0',
            'phone' => '900000000',
            'date_of_birth' => '2018-01-01'


        ]);
    }
}
