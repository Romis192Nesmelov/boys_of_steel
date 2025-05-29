<?php

namespace App\Http\Controllers;

use App\Models\Content;
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
            'contents' => Content::query()->whereIn('id',[2,6,7])->get(),
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
