<?php

namespace Database\Seeders;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Москва',
            'Санкт-Петербург',
            'Новосибирск',
            'Екатеринбург',
            'Казань',
            'Красноярск',
            'Нижний Новгород',
            'Челябинск',
            'Уфа',
            'Самара',
            'Ростов-на-Дону',
            'Краснодар',
            'Омск',
            'Воронеж',
            'Пермь',
            'Волгоград'
        ];

        for ($i=1;$i<=10;$i++) {
            Team::query()->create(['name' => 'Команда '.$i]);
        }
    }
}
