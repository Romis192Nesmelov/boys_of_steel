<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\OurHero;
use Illuminate\View\View;

class OurLeadersController extends BaseController
{
    /**
     * Display home page.
     */
    public function __invoke(): View
    {
        $content = Content::query()->where('id',7)->first();
        return view('content', [
            'breadcrumbs' => [['href' => 'our_leaders', 'name' => __('Our leaders')]],
            'nav_links' => $this->mainMenu,
            'content' => $content,
            'items' => OurHero::query()->orderBy('id','desc')->paginate(10),
        ]);
    }
}
