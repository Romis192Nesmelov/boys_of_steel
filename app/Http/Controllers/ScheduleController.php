<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Game;
use Carbon\Carbon;
use Illuminate\View\View;

class ScheduleController extends BaseController
{
    /**
     * Display home page.
     */
    public function futureGames(): View
    {
        return view('games.games', [
            'breadcrumbs' => [['href' => 'games.future', 'name' => 'Расписание']],
            'nav_links' => $this->mainMenu,
            'content' => Content::query()->where('id',2)->first(),
            'games' => Game::query()
                ->with('teams')
                ->where('date','>', Carbon::now()->setDate(2025,5,28))
                ->orderBy('date','desc')
                ->limit(6)
                ->paginate(10),
        ]);
    }

    public function pastGames(): View
    {
        return view('games.past_games', [
            'breadcrumbs' => [['href' => 'games.past', 'name' => 'Прошедшие игры']],
            'nav_links' => $this->mainMenu,
            'games' => Game::query()
                ->with('teams')
                ->where('date','<', Carbon::now())
                ->orderBy('date','desc')
                ->limit(6)
                ->paginate(10),
        ]);
    }
}
