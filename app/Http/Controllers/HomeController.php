<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Content;
//use App\Models\Game;
use App\Models\News;
use Illuminate\View\View;

class HomeController extends BaseController
{
    /**
     * Display home page.
     */
    public function __invoke(): View
    {
        return view('home', [
            'breadcrumbs' => [],
            'nav_links' => $this->mainMenu,
            'slides' => Slide::query()->where('active',1)->get(),
            'contents' => Content::query()->whereIn('id',[1,2,3])->get(),
            'news' => News::query()
                ->select(['id','image','slug','head','short_text','date'])
                ->orderBy('date','desc')
                ->limit(3)
                ->get(),
//            'future_games' => Game::query()
//                ->with('teams')
//                ->where('date','>', get28may())
//                ->orderBy('date','desc')
//                ->limit(6)
//                ->get(),
//            'teams' => Team::query()
//                ->select(['logo','slug','name','city_id'])
//                ->with('city')
//                ->get()
        ]);
    }
}
