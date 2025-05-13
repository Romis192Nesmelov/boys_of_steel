<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\View\View;

class TeamsController extends Controller
{
    /**
     * Display home page.
     */
    public function __invoke($slug=null): View
    {
        if ($slug) {
            if (!$team = Team::query()->where('slug',$slug)->with(['city','games.teams'])->first()) abort(404);
            return view('teams.team', [
                'team' => $team,
                'breadcrumbs' => [
                    ['href' => 'teams', 'name' => 'Команды'],
                    ['href' => 'teams', 'slug' => $slug, 'name' => $team->name]
                ]
            ]);
        } else {
            return view('teams.teams', [
                'teams' => Team::query()->select(['logo','slug','name','city_id'])->with(['city','gallery'])->paginate(10),
                'breadcrumbs' => [['href' => 'teams', 'name' => 'Команды']]
            ]);
        }
    }
}
