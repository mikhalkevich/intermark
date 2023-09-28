<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MaintextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('maintexts')->insert([
            'name' => 'Команда',
            'url' => 'command',
            'body' => 'Текст для команды ',
        ]);
        DB::table('maintexts')->insert([
            'name' => 'Пресса',
            'url' => 'press',
            'body' => 'Текст для прессы',
        ]);
        DB::table('maintexts')->insert([
            'name' => 'Мероприятия',
            'url' => 'events',
            'body' => 'Текст для мероприятий и событий',
        ]);
        DB::table('maintexts')->insert([
            'name' => 'Вакансии',
            'url' => 'vacancy',
            'body' => 'Текст для вакансий',
        ]);
        DB::table('maintexts')->insert([
            'name' => 'Клиентам',
            'url' => 'clients',
            'body' => 'Текст для клиентов',
        ]);
    }
}
