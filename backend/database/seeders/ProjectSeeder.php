<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        Project::create([
            'name' => 'Project X',
            'description' => 'Projeto inovador para resolver problema Y',
            'photo' => null,
            'link' => 'https://github.com/johndoe/project-x',
            'date' => '2023-05-01',
            'user_id' => 1
        ]);
    }
}
