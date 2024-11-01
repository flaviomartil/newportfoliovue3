<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    public function run()
    {
        $experiences = [
            [
                'description' => 'Desenvolvedor FullStack',
                'company_name' => 'Movida',
                'started_in' => '2024-01-01',
                'finished_in' => '2024-06-05',
                'technologies' => ['PHP', 'RABBITMQ', 'POSTGRESQL', 'LARAVEL', 'ANGULAR','JENKINS'],
                'user_id' => 1
            ],
            [
                'description' => 'Desenvolvedor FullStack',
                'company_name' => 'Executiva',
                'started_in' => '2022-01-01',
                'finished_in' => '2023-12-31',
                'technologies' => ['PHP', 'YII2', 'POSTGRESQL', 'CSS', 'HTML', 'JIRA', 'TEAMS', 'CODE COMMIT', 'AWS EC2', 'AWS SNS', 'AWS PIPELINE', 'JQUERY', 'JAVASCRIPT'],
                'user_id' => 1
            ],
            [
                'description' => 'Desenvolvedor FullStack',
                'company_name' => 'Ticto',
                'started_in' => '2022-01-01',
                'finished_in' => '2023-12-31',
                'technologies' => ['Pixel Facebook/Google/TikTok', 'DynamoDB', 'Vue3', 'MailChimp', 'ActiveCampaign', 'Webhooks', 'Scrum', 'OrderBump', 'Sistema de Afiliados'],
                'user_id' => 1
            ],
            [
                'description' => 'Desenvolvedor FullStack',
                'company_name' => '4World',
                'started_in' => '2021-01-01',
                'finished_in' => '2022-01-01',
                'technologies' => ['Scrum', 'Php', 'Kanban', 'Jira'],
                'user_id' => 1
            ],
            [
                'description' => 'Desenvolvedor FullStack',
                'company_name' => 'Visual Systems',
                'started_in' => '2020-01-01',
                'finished_in' => '2022-01-01',
                'technologies' => ['Gitlab', 'Jenkins', 'Sentry', 'Scrum', 'Kanban', 'Microsoft Teams', 'Jira', 'Zabbix', 'ITOP', 'PHP', 'Laravel', 'Javascript', 'HTML', 'CSS', 'jQuery'],
                'user_id' => 1
            ],
            [
                'description' => 'Auxiliar de TI',
                'company_name' => 'Quinta Valentina',
                'started_in' => '2018-01-01',
                'finished_in' => '2020-01-01',
                'technologies' => ['PHP', 'Laravel', 'ERP Protheus', 'VTEX', 'SHOPIFY'],
                'user_id' => 1
            ],
            [
                'description' => 'Auxiliar de TI',
                'company_name' => 'Agrocave',
                'started_in' => '2016-01-01',
                'finished_in' => '2018-01-01',
                'technologies' => ['PHP', 'JS', 'JQUERY', 'CSS', 'HTML'],
                'user_id' => 1
            ]
        ];

        foreach ($experiences as $experience) {
            Experience::create([
                'description' => $experience['description'],
                'company_name' => $experience['company_name'],
                'started_in' => $experience['started_in'],
                'finished_in' => $experience['finished_in'],
                'technologies' => $this->formatTechnologies($experience['technologies']),
                'user_id' => $experience['user_id']
            ]);
        }
    }

    private function formatTechnologies(array $technologies): string
    {
        return implode(', ', array_map(function ($tech) {
            return ucwords(strtolower($tech));
        }, $technologies));
    }
}
