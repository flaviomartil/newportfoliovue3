<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PersonalInfo;

class PersonalInfoSeeder extends Seeder
{
    public function run()
    {
        PersonalInfo::create([
            'name' => 'Flávio Martil',
            'avatar' => null,
            'instagram' => 'https://instagram.com/flaviowmartil/',
            'facebook' => 'https://fb.com/flaviomartil/',
            'whatsapp' => 'https://api.whatsapp.com/send?phone=5517988056558&text=Olá%2C%20vim%20pelo%20portfolio',
            'linkedin' => 'https://www.linkedin.com/in/flavio-martil',
            'email' => 'flaviomartil5@gmail.com',
            'user_id' => 1
        ]);
    }
}
