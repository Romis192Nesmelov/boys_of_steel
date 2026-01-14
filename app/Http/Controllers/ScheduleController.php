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
            'breadcrumbs' => [['href' => 'games.future', 'name' => __('Games future')]],
            'nav_links' => $this->mainMenu,
            'head' => __('Games future'),
            'games' => Game::query()
                ->with('teams')
                ->where('date','>', Carbon::now())
                ->orderBy('date','desc')
                ->limit(6)
                ->paginate(10),
        ]);
    }

    public function pastGames(): View
    {
        return view('games.games', [
            'breadcrumbs' => [['href' => 'games.past', 'name' => __('Games past')]],
            'nav_links' => $this->mainMenu,
            'head' => __('Results of the games'),
            'games' => Game::query()
                ->with('teams')
                ->where('date','<', Carbon::now())
                ->orderBy('date','desc')
                ->limit(6)
                ->paginate(10),
        ]);
    }
}
