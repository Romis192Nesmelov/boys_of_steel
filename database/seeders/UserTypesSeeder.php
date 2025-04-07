<?php

namespace Database\Seeders;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserType;

class UserTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['Организатор', 'Игрок', 'Болельщик', 'СМИ', 'Тренер', 'Волонтёр'];

        foreach ($data as $type) {
            UserType::create(['name' => $type]);
        }
    }
}
