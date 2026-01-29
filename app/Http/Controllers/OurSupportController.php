<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Leadership;
use App\Models\OurSupport;
use Illuminate\View\View;

class OurSupportController extends BaseController
{
    public function leadership(): View
    {
        return $this->getContent(new Leadership(), 2, 'leadership');
    }

    public function ourSupport(): View
    {
        return $this->getContent(new OurSupport(), 7, 'our_support');
    }

    private function getContent(OurSupport|Leadership $model, int $contentId, string $route): View
    {
        $content = Content::query()->where('id',$contentId)->first();
        return view('content', [
            'breadcrumbs' => [['href' => $route, 'name' => $content->head]],
            'nav_links' => $this->mainMenu,
            'content' => $content,
            'items' => $model->query()->where('active',1)->orderBy('sort')->paginate(10),
        ]);
    }
}
