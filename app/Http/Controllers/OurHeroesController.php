<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\OurHero;
use Illuminate\View\View;

class OurHeroesController extends Controller
{
    /**
     * Display home page.
     */
    public function __invoke(): View
    {
        $content = Content::query()->where('id',7)->first();
        return view('content', [
            'content' => $content,
            'items' => OurHero::query()->orderBy('id','desc')->paginate(10),
            'breadcrumbs' => [['href' => 'our_heroes', 'name' => strip_tags($content->head)]]
        ]);
    }
}
