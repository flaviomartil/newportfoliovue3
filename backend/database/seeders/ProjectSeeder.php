<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        Project::create([
            'name' => 'Sorteador de Times de Futebol',
            'description' => 'Sorteio de times de futebol, com a possibilidade de adicionar e remover jogadores.',
            'photo' => env('APP_URL') . '/storage/img/codesoccer.png',
            'category' => 'web',
            'link' => 'https://github.com/flaviomartil/code-group-soccer-teams',
            'date' => '2024-01-01',
            'user_id' => 1
        ]);

        Project::create([
            'name' => 'Portfólio Taiza',
            'description' => 'Portfólio desenvolvido para a Taiza, com o intuito de mostrar seus trabalhos e serviços.',
            'photo' => env('APP_URL') . '/storage/img/portfoliotaiza.jpg',
            'category' => 'web',
            'link' => 'https://github.com/flaviomartil/portfoliotaiza',
            'date' => '2024-04-01',
            'user_id' => 1
        ]);

        Project::create([
            'name' => 'Bot discord Fivem',
            'description' => 'Bot para discord que mostra informações de um servidor, gerencia cargos, avisa novos pedidos de set, sugestões com modal discordjs14',
            'photo' => env('APP_URL') . '/storage/img/botfivem.jpg',
            'category' => 'desktop',
            'link' => 'https://github.com/flaviomartil/discord-node-bot',
            'date' => '2024-01-01',
            'user_id' => 1
        ]);

        Project::create([
            'name' => 'Quinta Valentina - Site',
            'description' => 'E-commerce de sapatos / Fms / Pms / Cms',
            'photo' => env('APP_URL') . '/storage/img/qv.jpg',
            'category' => 'web',
            'link' => 'https://quintavalentina.com.br/',
            'date' => '2020-03-03',
            'user_id' => 1
        ]);

        Project::create([
            'name' => 'Ticto V2',
            'description' => 'Site de vendas de afiliados',
            'photo' => env('APP_URL') . '/storage/img/ticto.jpg',
            'category' => 'web',
            'link' => 'https://www.ticto.com.br/',
            'date' => '2022-01-01',
            'user_id' => 1
        ]);

        Project::create([
            'name' => 'Painel para mecanica Fivem',
            'description' => 'Painel para gerenciamento de fluxo de caixa e serviços de uma mecanica de fivem',
            'photo' => env('APP_URL') . '/storage/img/painelmecanica.jpg',
            'category' => 'web',
            'link' => 'https://github.com/flaviomartil/painelMecanica',
            'date' => '2023-05-05',
            'user_id' => 1
        ]);

        Project::create([
            'name' => 'AluraTracker',
            'description' => 'Sistema para gestão de atividades com cronometro feito no curso da alura em vue.',
            'photo' => env('APP_URL') . '/storage/img/aluratracker.png',
            'category' => 'web',
            'link' => 'https://github.com/flaviomartil/alura-tracker',
            'date' => '2022-12-12',
            'user_id' => 1
        ]);

        Project::create([
            'name' => 'Encurtador de links com parametros - Yii2',
            'description' => 'Encurtador que permite compartilhar links com parâmetros e permissões, garantindo que o destinatário veja o mesmo conteúdo.',
            'photo' => env('APP_URL') . '/storage/img/encurtador.jpg',
            'category' => 'web',
            'link' => 'https://github.com/flaviomartil/yii2-url-shortener-params-multi-tenant',
            'date' => '2023-02-12',
            'user_id' => 1
        ]);

        Project::create([
            'name' => 'Sistema de pizzaria em C',
            'description' => 'Projeto feito durante faculdade em C, com cadastro de clientes, produtos, pedidos e relatórios.',
            'photo' => env('APP_URL') . '/storage/img/pizzariac.jpg',
            'category' => 'desktop',
            'link' => 'https://github.com/flaviomartil/Unip/tree/master',
            'date' => '2019-01-01',
            'user_id' => 1
        ]);
    }
}
