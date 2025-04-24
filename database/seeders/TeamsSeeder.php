<?php

namespace Database\Seeders;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Team;
use Illuminate\Database\Seeder;

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
            [
                'name' => 'СКА',
                'captain' => 'Шарипов Константин',
                'email' => 'hcskacvo@mail.ru',
                'phone' => '+7(919)303-91-91',
                'city_id' => 4,
            ],
            [
                'name' => 'Динамо-Ратник',
                'captain' => 'Кудинов Андрей',
                'email' => 'prezident@fh74.ru',
                'phone' => '+7(919)319-00-24',
                'city_id' => 8,
            ],
            [
                'name' => 'Патриот',
                'captain' => 'Кобозев Сергей',
                'email' => 'ksm.77@bk.ru',
                'phone' => '+7(915)432-90-66',
                'city_id' => 1,
            ],
            [
                'name' => 'Шурави',
                'captain' => 'Равиль',
                'email' => 'ra@megi.ru',
                'phone' => '+7(917)447-40-03',
                'city_id' => 9,
            ],
            [
                'name' => 'Барс',
                'captain' => 'Седых Сергей',
                'email' => 'sedykh.sa.fhoo@gmail.com',
                'phone' => '+7(966)396-97-00',
                'city_id' => 13,
            ],
            [
                'name' => 'Динамо',
                'captain' => 'Руслан Энверович',
                'email' => 'dynamo-nn@bk.ru',
                'phone' => '+7(987)087-99-99',
                'city_id' => 7,
            ],
            [
                'name' => 'Мирные Люди',
                'captain' => 'Агарков Андрей',
                'email' => 'andrewagarkoff@yandex.ru',
                'city_id' => 10,
            ],
            [
                'name' => 'Бастион',
                'captain' => 'Лютов Владимир Викторович',
                'city_id' => 2,
            ],
        ];

        foreach ($data as $item) {
            Team::query()->create($item);
        }
    }
}
