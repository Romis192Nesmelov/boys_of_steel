<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

class DocumentsController extends Controller
{
    /**
     * Display home page.
     */
    public function __invoke(): View
    {
        return view('documents', [
            'breadcrumbs' => [['href' => 'our_heroes', 'name' => __('Documents')]]
        ]);
    }
}
