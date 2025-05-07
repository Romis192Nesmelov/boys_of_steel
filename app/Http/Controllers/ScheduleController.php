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
//        if (!check28may()) abort(404);
        return view('games.games', [
            'games' => Game::query()
                ->with('teams')
                ->where('date','>', Carbon::now()->setDate(2025,5,28))
                ->orderBy('date','desc')
                ->limit(6)
                ->paginate(10),
            'breadcrumbs' => [['href' => 'games.future', 'name' => 'Расписание']]
        ]);
    }

    public function pastGames(): View
    {
        return view('games.past_games', [
            'games' => Game::query()
                ->with('teams')
                ->where('date','<', Carbon::now()->setDate(2025,5,28))
                ->orderBy('date','desc')
                ->limit(6)
                ->paginate(10),
            'breadcrumbs' => [['href' => 'games.past', 'name' => 'Прошедшие игры']]
        ]);
    }
}
