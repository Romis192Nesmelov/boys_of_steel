<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\View\View;

class AboutUsController extends Controller
{
    /**
     * Display home page.
     */
    public function __invoke(): View
    {
        $content = Content::query()->where('id',4)->first();
        return view('content', [
            'content' => $content,
            'breadcrumbs' => [['href' => 'about_us', 'name' => strip_tags($content->head)]]
        ]);
    }
}
