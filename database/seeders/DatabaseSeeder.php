<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\Course;
use App\Models\Group;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Subject::factory(10)->create();
        Course::factory(10)->create();
        Group::factory(10)->create();
    }
}
