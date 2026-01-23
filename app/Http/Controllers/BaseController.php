<?php

namespace App\Http\Controllers;

class BaseController extends Controller
{
    protected array $mainMenu;

    public function __construct()
    {
        $this->mainMenu = [
            'news'                          => __('News'),
            __('Schedule of games')     => ['games.future' => __('Games future'), 'games.past' => __('Games past')],
            'teams'                         => __('Teams'),
            __('Hockey')                => ['hockey.sledge' => __('Hockey sledge'), 'hockey.phygital' => __('Hockey phygital')],
            __('Participants')          => ['players' => __('Players'), 'trainers' => __('Trainers'), 'arbiters' => __('Arbiters')],
            __('Our support')           => ['leadership' => __('Leadership'), 'our_support' => __('Our support')],
            'documents'                     => __('Documents')
        ];
    }
}
