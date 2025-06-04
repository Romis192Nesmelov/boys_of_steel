<?php

namespace App\Http\Controllers;

use App\Models\Content;
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
            'content' => $content,
            'items' => $model->query()
                ->orderBy('date','desc')
                ->paginate(10),
            'breadcrumbs' => [['href' => 'hockey.'.$route, 'name' => $content->head]]
        ]);
    }
}
