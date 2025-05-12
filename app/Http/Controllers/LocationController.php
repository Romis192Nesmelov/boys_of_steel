<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\View\View;

class LocationController extends Controller
{
    /**
     * Display home page.
     */
    public function __invoke(): View
    {
        $content = Content::query()->where('id',1)->first();
        return view('content', [
            'content' => $content,
            'breadcrumbs' => [['href' => 'location', 'name' => strip_tags($content->head)]]
        ]);
    }
}
