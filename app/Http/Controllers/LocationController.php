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
        return view('content', [
            'content' => Content::query()->where('id',1)->first(),
            'breadcrumbs' => [['href' => 'location', 'name' => 'Место проведения']]
        ]);
    }
}
