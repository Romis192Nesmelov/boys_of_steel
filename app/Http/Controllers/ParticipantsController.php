<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\View\View;

class ParticipantsController extends BaseController
{
    /**
     * Display home page.
     */
    public function players(): View
    {
        return $this->getView('players', 2);
    }

    public function trainers(): View
    {
        return $this->getView('trainers', 5);
    }

    public function arbiters(): View
    {
        return $this->getView('arbiters', 7);
    }

    private function getView(string $route, int $typeId): View
    {
        return view('participants', [
            'breadcrumbs' => [['href' => $route, 'name' => __(ucfirst($route))]],
            'nav_links' => $this->mainMenu,
            'typeId' => $typeId,
            'items' => Participant::query()->where('participant_type_id',$typeId)->with('team')->get()
        ]);
    }
}
