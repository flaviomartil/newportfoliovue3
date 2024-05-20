<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PersonalInfo;

class PersonalInfoSeeder extends Seeder
{
    public function run()
    {
        PersonalInfo::create([
            'name' => 'John Doe',
            'avatar' => null,
            'instagram' => '@johndoe',
            'facebook' => 'john.doe',
            'whatsapp' => '+1234567890',
            'linkedin' => 'john-doe',
            'email' => 'john@example.com',
            'user_id' => 1
        ]);
    }
}
