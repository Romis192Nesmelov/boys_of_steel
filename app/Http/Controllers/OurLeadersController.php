<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\OurSupport;
use Illuminate\View\View;

class OurLeadersController extends BaseController
{
    public function leadership(): View
    {
        $content = Content::query()->where('id',2)->first();
        return view('content', [
            'breadcrumbs' => [['href' => 'leadership', 'name' => __('Leadership')]],
            'nav_links' => $this->mainMenu,
            'content' => $content
        ]);
    }

    public function ourSupport(): View
    {
        $content = Content::query()->where('id',7)->first();
        return view('content', [
            'breadcrumbs' => [['href' => 'our_support', 'name' => __('Our support')]],
            'nav_links' => $this->mainMenu,
            'content' => $content,
            'items' => OurSupport::query()->orderBy('id','desc')->paginate(10),
        ]);
    }
}
