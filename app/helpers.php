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
    return asset($news->image ?? 'storage/images/news/placeholder.jpg');
}

function teamLogo(\App\Models\Team $team): string
{
    return asset($team->logo ?? 'storage/images/teams_logos/def_logo.png');
}
