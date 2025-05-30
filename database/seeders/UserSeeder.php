<?php

namespace Database\Seeders;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
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
                'name' => 'Romis',
                'email' => 'romis.nesmelov@gmail.com',
                'password' => bcrypt('fuckingpassword192'),
                'phone' => '+7(926)247-77-25',
                'email_verified_at' => Carbon::now(),
                'user_type_id' => 2,
                'city_id' => 1,
                'team_id' => 2
            ],
            [
                'name' => 'Парень из стали',
                'email' => 'info@bos.ru',
                'password' => bcrypt('boysofsteel'),
                'phone' => '+7(926)221-47-19',
                'email_verified_at' => Carbon::now(),
                'user_type_id' => 2,
                'city_id' => 1,
                'team_id' => 1
            ]
        ];

        foreach ($data as $user) {
            User::query()->create($user);
        }
    }
}
