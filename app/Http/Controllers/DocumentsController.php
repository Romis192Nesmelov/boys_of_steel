<?php

namespace App\Http\Controllers;
use App\Models\Document;
use Illuminate\View\View;

class DocumentsController extends BaseController
{
    /**
     * Display home page.
     */
    public function __invoke(): View
    {
        return view('documents', [
            'breadcrumbs' => [['href' => 'documents', 'name' => __('Documents')]],
            'nav_links' => $this->mainMenu,
            'docs' => Document::query()->where('active',1)->get()
        ]);
    }
}
