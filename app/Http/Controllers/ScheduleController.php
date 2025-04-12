<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\View\View;

class ScheduleController extends Controller
{
    /**
     * Display home page.
     */
    public function __invoke($slug=null): View
    {
        return view('games.games', [
            'games' => Game::query()
                ->with('teams.city')
                ->orderBy('date','desc')
                ->paginate(10),
            'breadcrumbs' => [['href' => 'schedule', 'name' => 'Schedule']]
        ]);
    }
}
