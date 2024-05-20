<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run()
    {
        Skill::create([
            'name' => 'Php',
            'description' => 'Linguagem de script do lado do servidor, amplamente usada no desenvolvimento web.',
            'progress' => rand(50, 100),
            'user_id' => 1
        ]);

        Skill::create([
            'name' => 'Yii2',
            'description' => 'Framework PHP rápido, seguro e eficiente.',
            'progress' => rand(50, 100),
            'user_id' => 1
        ]);

        Skill::create([
            'name' => 'Postgresql',
            'description' => 'Sistema de gerenciamento de banco de dados objeto-relacional.',
            'progress' => rand(50, 100),
            'user_id' => 1
        ]);

        Skill::create([
            'name' => 'Css',
            'description' => 'Linguagem de estilo usada para descrever a apresentação de um documento HTML.',
            'progress' => rand(50, 100),
            'user_id' => 1
        ]);


        Skill::create([
            'name' => 'Jquery',
            'description' => 'Biblioteca rápida e simplificada de JavaScript.',
            'progress' => rand(50, 100),
            'user_id' => 1
        ]);

        Skill::create([
            'name' => 'Javascript',
            'description' => 'Linguagem de programação para desenvolvimento web.',
            'progress' => rand(50, 100),
            'user_id' => 1
        ]);

        Skill::create([
            'name' => 'Dynamodb',
            'description' => 'Serviço de banco de dados NoSQL da AWS.',
            'progress' => rand(50, 100),
            'user_id' => 1
        ]);

        Skill::create([
            'name' => 'Vue3',
            'description' => 'Framework JavaScript progressivo para a criação de interfaces de usuário.',
            'progress' => rand(50, 100),
            'user_id' => 1
        ]);


        Skill::create([
            'name' => 'Git',
            'description' => 'Versionamento de código',
            'progress' => rand(50, 100),
            'user_id' => 1
        ]);


    



    }
}
