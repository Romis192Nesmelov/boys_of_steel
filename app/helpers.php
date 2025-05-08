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
    return time() >= 1748379660;
}

function navLinkName($route): string {
    return __(ucfirst(str_replace(['_','.'],' ',$route)));
}

function getImage(\Illuminate\Database\Eloquent\Model $model): string
{
    $field = $model->logo ?? $model->image;
    return asset($field ? 'storage/'.$field : 'storage/images/placeholder.jpg');
}

function generateFakeText(): string
{
    $text = '';
    for($i=0;$i<rand(5,10);$i++) {
        $text .= '<p>'.fake()->paragraph().'</p>';
    }
    return $text;
}
