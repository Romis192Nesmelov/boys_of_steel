<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\SledgeHockey;
use App\Models\PhygitalHockey;
use Illuminate\View\View;

class HockeyController extends BaseController
{
    /**
     * Display home page.
     */
    public function sledge(): View
    {
        return $this->getHockey(new SledgeHockey(), 'sledge', 5);
    }

    public function phygital(): View
    {
        return $this->getHockey(new PhygitalHockey(), 'phygital', 6);
    }

    private function getHockey(SledgeHockey|PhygitalHockey $model, string $route, int $contentId): view
    {
        $content = Content::query()->where('id',$contentId)->first();
        return view('hockey.hockey', [
            'breadcrumbs' => [['href' => 'hockey.'.$route, 'name' => __('Hockey '.$route)]],
            'nav_links' => $this->mainMenu,
            'content' => $content,
            'items' => $model->query()
                ->orderBy('date','desc')
                ->paginate(10),
        ]);
    }
}
