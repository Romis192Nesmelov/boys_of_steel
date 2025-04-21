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
    public function __invoke(): View
    {
        return view('home', [
            'breadcrumbs' => [],
//            'news' => News::query()
//                ->select(['id','image','slug','head','short_text','date'])
//                ->orderBy('date','desc')
//                ->limit(3)
//                ->get(),
            'future_games' => Game::query()
                ->with('teams')
                ->where('date','>', Carbon::now())
                ->orderBy('date','desc')
                ->limit(6)
                ->get(),
//            'teams' => Team::query()
//                ->select(['logo','slug','name','city_id'])
//                ->with('city')
//                ->get()
        ]);
    }
}
