<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            AboutSeeder::class,
            EducationSeeder::class,
            ExperienceSeeder::class,
            PersonalInfoSeeder::class,
            ProjectSeeder::class,
            SkillSeeder::class,
        ]);
    }
}
