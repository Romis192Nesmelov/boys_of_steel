<?php

namespace Database\Seeders;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Game;
use App\Models\GameTeam;
use Illuminate\Database\Seeder;
use App\Models\Team;

class GameTeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $games = Game::query()->select('id')->get();
        foreach ($games as $game) {
            $teamOneId = Team::all()->random()->id;
            $teamTwoId = Team::query()->where('id','!=',$teamOneId)->get()->random()->id;
            GameTeam::query()->create([
                'game_id' => $game->id,
                'team_id' => $teamOneId
            ]);
            GameTeam::query()->create([
                'game_id' => $game->id,
                'team_id' => $teamTwoId
            ]);
        }
    }
}
