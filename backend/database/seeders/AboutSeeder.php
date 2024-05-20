<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    public function run()
    {
        About::create([
            'description' => 'Desenvolvedor com experiência em backend e frontend',
            'back_techs' => 'PHP, Laravel, MySQL',
            'front_techs' => 'JavaScript, Vue.js, CSS',
            'photo' => null,
            'user_id' => 1
        ]);
    }
}
