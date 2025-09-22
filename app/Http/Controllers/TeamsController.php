<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\View\View;

class TeamsController extends BaseController
{
    /**
     * Display home page.
     */
    public function __invoke($slug=null): View
    {
        if ($slug) {
            if (!$team = Team::query()->where('slug',$slug)->with(['city','games.teams'])->first()) abort(404);
            return view('teams.team', [
                'breadcrumbs' => [
                    ['href' => 'teams', 'name' => 'Команды'],
                    ['href' => 'teams', 'slug' => $slug, 'name' => $team->name]
                ],
                'nav_links' => $this->mainMenu,
                'team' => $team,
            ]);
        } else {
            return view('teams.teams', [
                'breadcrumbs' => [['href' => 'teams', 'name' => 'Команды']],
                'nav_links' => $this->mainMenu,
                'teams' => Team::query()->select(['logo','slug','name','city_id'])->with(['city','gallery'])->paginate(10),
            ]);
        }
    }
}
