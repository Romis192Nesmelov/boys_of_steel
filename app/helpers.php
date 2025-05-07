<?php

function carbonDate($date): string
{
    return \Carbon\Carbon::parse($date)->format('d.m.Y');
}

function carbonDateWithTime($date): string
{
    return \Carbon\Carbon::parse($date)->format('d.m.Y H:i:s');
}

function carbonToTimestamp($date): int
{
    return \Carbon\Carbon::parse($date)->timestamp;
}

function futureOrPast($date): bool
{
    return carbonToTimestamp($date) >= time();
}

function get28may(): int
{
    return 1748379660;
}

function check28may(): bool
{
    return time() >= get28may();
}

function navLinkName($route): string {
    return __(ucfirst(str_replace(['_','.'],' ',$route)));
}

function newsImage(\App\Models\News $news): string
{
    return asset($news->image ? 'storage/images/news/'.$news->image : 'storage/images/placeholder.jpg');
}

function gameImage(\App\Models\Game $game): string
{
    return asset($game->image ? 'storage/images/games/'.$game->image : 'storage/images/placeholder.jpg');
}

function teamLogo(\App\Models\Team $team): string
{
    return asset($team->logo ? 'storage/images/teams_logos/'.$team->logo : 'storage/images/def_logo.png');
}

function hockeyImage(\App\Models\SledgeHockey|\App\Models\PhygitalHockey $model): string
{
    return asset($model->image ? 'storage/images/hockey/'.$model->image : 'storage/images/placeholder.jpg');
}

function contentImage(\App\Models\Content $model): string
{
    return asset($model->image ? 'storage/images/content/'.$model->image : 'storage/images/placeholder.jpg');
}

function generateFakeText(): string
{
    $text = '';
    for($i=0;$i<rand(5,10);$i++) {
        $text .= '<p>'.fake()->paragraph().'</p>';
    }
    return $text;
}
