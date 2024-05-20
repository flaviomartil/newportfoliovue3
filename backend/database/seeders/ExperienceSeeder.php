<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    public function run()
    {
        Experience::create([
            'description' => 'Desenvolvedor Full-Stack',
            'company_name' => 'Tech Company',
            'started_in' => '2020-05-01',
            'finished_in' => null,
            'user_id' => 1
        ]);
    }
}
