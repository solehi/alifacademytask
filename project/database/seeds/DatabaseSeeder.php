<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call('UsersTableSeeder');
        $this->call('StudentsTableSeeder');
        $this->call('CourseTableSeeder');
        $this->call('CourseStudentTable');

        $this->command->info('Таблица пользователей загружена данными!');
    }
}
