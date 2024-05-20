<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Flávio Martil',
            'email' => 'flaviomartil5@gmail.com',
            'password' => Hash::make('newresume'),
            'avatar' => null
        ]);

    }
}
