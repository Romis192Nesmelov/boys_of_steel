<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\View\View;

class NewsController extends BaseController
{
    /**
     * Display home page.
     */
    public function __invoke($slug=null): View
    {
        if ($slug) {
            if (!$news = News::query()->where('slug',$slug)->first()) abort(404);
            return view('news.news', [
                'breadcrumbs' => [
                    ['href' => 'news', 'name' => __('News')],
                    ['href' => 'news', 'slug' => $slug, 'name' => $news->head]
                ],
                'nav_links' => $this->mainMenu,
                'news' => $news,
                'last_news' => News::query()
                    ->where('id','!=',$news->id)
                    ->select(['id','image','slug','head','short_text','date'])
                    ->orderBy('date','desc')
                    ->limit(3)
                    ->get(),
            ]);
        } else {
            return view('news.all_news', [
                'breadcrumbs' => [['href' => 'news', 'name' => __('News')]],
                'nav_links' => $this->mainMenu,
                'news' => News::query()
                    ->select(['id','image','slug','head','short_text','date'])
                    ->orderBy('date','desc')
                    ->paginate(9)
            ]);
        }
    }
}
