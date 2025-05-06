<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserTypesSeeder::class);
        $this->call(CitiesSeeder::class);
        $this->call(TeamsSeeder::class);
//        \App\Models\Team::factory(8)->create();
        $this->call(UserSeeder::class);
        \App\Models\News::factory(18)->create();
        \App\Models\Game::factory(20)->create();
        \App\Models\SledgeHockey::factory(20)->create();
        \App\Models\PhygitalHockey::factory(20)->create();
        \App\Models\Content::factory(1)->create();
        $this->call(GameTeamsSeeder::class);
    }
}
