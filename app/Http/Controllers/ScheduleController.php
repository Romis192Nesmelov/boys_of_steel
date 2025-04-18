<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Carbon\Carbon;
use Illuminate\View\View;

class ScheduleController extends Controller
{
    /**
     * Display home page.
     */
    public function futureGames(): View
    {
        return view('games.games', [
            'games' => Game::query()
                ->with('teams')
                ->where('date','>', Carbon::now())
                ->orderBy('date','desc')
                ->limit(6)
                ->paginate(10),
            'breadcrumbs' => [['href' => 'games.future', 'name' => 'Future games']]
        ]);
    }

    public function pastGames(): View
    {
        return view('games.games', [
            'games' => Game::query()
                ->with('teams')
                ->where('date','<', Carbon::now())
                ->orderBy('date','desc')
                ->limit(6)
                ->paginate(10),
            'breadcrumbs' => [['href' => 'games.past', 'name' => 'Past games']]
        ]);
    }
}
