<?php

namespace App\Http\Controllers;

use App\Models\SledgeHockey;
use App\Models\PhygitalHockey;
use Illuminate\View\View;

class HockeyController extends Controller
{
    /**
     * Display home page.
     */
    public function sledge(): View
    {
        return $this->getHockey(new SledgeHockey(), 'sledge', 'Следж-хоккей');
    }

    public function phygital(): View
    {
        return $this->getHockey(new SledgeHockey(), 'phygital', 'Фиджитал-хоккей');
    }

    private function getHockey(SledgeHockey|PhygitalHockey $model, string $route, string $name): view
    {
        return view('hockey.hockey', [
            'items' => $model->query()
                ->orderBy('date','desc')
                ->paginate(10),
            'breadcrumbs' => [['href' => 'hockey.'.$route, 'name' => $name]]
        ]);
    }
}
