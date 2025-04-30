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

function navLinkName($route): string {
    return __(ucfirst(str_replace(['_','.'],' ',$route)));
}

function newsImage(\App\Models\News $news): string
{
    $imagePath = 'storage/images/news/';
    return asset($news->image ? $imagePath.$news->image : $imagePath.'placeholder.jpg');
}

function gameImage(\App\Models\Game $game): string
{
    $imagePath = 'storage/images/games/';
    return asset($game->image ? $imagePath.$game->image : $imagePath.'placeholder.jpg');
}

function teamLogo(\App\Models\Team $team): string
{
    $imagePath = 'storage/images/teams_logos/';
    return asset($team->logo ? $imagePath.$team->logo : $imagePath.'def_logo.png');
}
