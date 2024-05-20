<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Education;

class EducationSeeder extends Seeder
{
    public function run()
    {
        Education::create([
            'name' => 'Engenharia de Software',
            'description' => 'Curso voltado para o desenvolvimento de software',
            'started_in' => '2019-02-01',
            'finished_in' => '2023-12-01',
            'user_id' => 1
        ]);
    }
}
