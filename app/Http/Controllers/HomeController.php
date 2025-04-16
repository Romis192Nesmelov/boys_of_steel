<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\News;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display home page.
     */
    public function home(): View
    {
        $params = [];
        foreach (['future_games','past_games'] as $k) {
            $params[$k] =  Game::query()
                ->with('teams')
                ->where('date',($k == 'future_games' ? '>' : '<='), Carbon::now())
                ->orderBy('date','desc')
                ->limit(6)
                ->get();
        }
        $params['news'] = News::query()->select(['id','image','slug','head','short_text','date'])->orderBy('date','desc')->limit(3)->get();
        $params['teams'] = Team::query()->select(['logo','slug','name','city_id'])->with('city')->get();
        $params['breadcrumbs'] = [];

        return view('home', $params);
    }

    public function ourMission(): View
    {
        return view('our_mission', [
            'breadcrumbs' => [['href' => 'our_mission', 'name' => 'Our mission']]
        ]);
    }
}
