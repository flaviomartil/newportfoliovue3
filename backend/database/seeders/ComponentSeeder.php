<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Component;

class ComponentSeeder extends Seeder
{
    public function run(): void
    {
        Component::create([
            'subtitle' => 'Experiência em Desenvolvimento FullStack',
            'component' => 'about',
            'user_id' => 1,
            'font-size' => 14,
        ]);

        Component::create([
            'subtitle' => 'Minha Trajetória Profissional',
            'component' => 'experiences',
            'user_id' => 1,
            'font-size' => 14,
        ]);

        Component::create([
            'subtitle' => 'Formações Acadêmicas',
            'component' => 'education',
            'user_id' => 1,
            'font-size' => 14,
        ]);

        Component::create([
            'subtitle' => 'Habilidades Técnicas e Interpessoais',
            'component' => 'skills',
            'user_id' => 1,
            'font-size' => 14,
        ]);

        Component::create([
            'subtitle' => 'Sou Flávio Martil',
            'component' => 'home',
            'user_id' => 1,
            'font-size' => 14,
        ]);

        Component::create([
            'subtitle' => 'Desenvolvedor FullStack à Sua Disposição',
            'component' => 'home',
            'user_id' => 1,
            'font-size' => 14,
        ]);

        Component::create([
            'subtitle' => 'Vamos Iniciar Seu Projeto',
            'component' => 'contact',
            'user_id' => 1,
            'font-size' => 14,
        ]);

    }
}
