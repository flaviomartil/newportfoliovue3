<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Education;

class EducationSeeder extends Seeder
{
    public function run()
    {
        Education::create([
            'name' => 'Gestão de Projetos USP',
            'description' => 'Curso voltado para a gestão de projetos',
            'started_in' => '2023-01-01',
            'finished_in' => '2025-12-01',
            'user_id' => 1
        ]);

        // Graduação
        Education::create([
            'name' => 'Análise e Desenvolvimento de Sistemas UNIP',
            'description' => 'Curso voltado para o desenvolvimento de sistemas',
            'started_in' => '2018-01-01',
            'finished_in' => '2020-12-01',
            'user_id' => 1
        ]);
    }
}
