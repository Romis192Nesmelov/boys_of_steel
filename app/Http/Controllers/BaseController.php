<?php

namespace App\Http\Controllers;
use App\Models\Content;

class BaseController extends Controller
{
    protected array $mainMenu = [
        'news'          => 'Новости',
        'games.future'  => 'Расписание',
        'games.past'    => 'Прошедшие игры',
        'teams'         => 'Команды',
        'documents'     => 'Документы'
    ];

    public function __construct()
    {
        $contentMenu = Content::query()
            ->select(['id','head','active'])
            ->whereIn('id',[4,5,6,7])
            ->get();

        $additionalMenuItems = ['about_us', 'hockey.sledge', 'hockey.phygital', 'our_leaders'];
        $count = 0;

        foreach ($contentMenu as $item) {
            if ($item->id == 4 && $item->active)
                $this->mainMenu = [$additionalMenuItems[$count] => $item->head] + $this->mainMenu;
            elseif ($item->id > 4 && $item->active)
                $this->mainMenu = array_slice($this->mainMenu, 0, count($this->mainMenu) - 1) + [$additionalMenuItems[$count] => $item->head] + $this->mainMenu;
            $count++;
        }
    }
}
