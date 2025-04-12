<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\View\View;

class NewsController extends Controller
{
    /**
     * Display home page.
     */
    public function __invoke($slug=null): View
    {
        if ($slug) {
            if (!$news = News::query()->where('slug',$slug)->first()) abort(404);
            return view('news.news', [
                'news' => $news,
                'last_news' => News::query()
                    ->where('id','!=',$news->id)
                    ->select(['id','image','slug','head','short_text','date'])
                    ->orderBy('date','desc')
                    ->limit(3)
                    ->get(),
                'breadcrumbs' => [
                    ['href' => 'news', 'name' => 'News'],
                    ['href' => 'news', 'slug' => $slug, 'name' => $news->head]
                ]
            ]);
        } else {
            return view('news.all_news', [
                'news' => News::query()
                    ->select(['id','image','slug','head','short_text','date'])
                    ->orderBy('date','desc')
                    ->paginate(9),
                'breadcrumbs' => [['href' => 'news', 'name' => 'News']]
            ]);
        }
    }
}
