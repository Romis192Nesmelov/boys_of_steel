<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use App\Models\City;
use App\Models\Game;
use App\Models\News;
use App\Models\Team;
use App\MoonShine\Resources\CityResource;
use App\MoonShine\Resources\GameResource;
use App\MoonShine\Resources\NewsResource;
use App\MoonShine\Resources\TeamResource;
use MoonShine\Components\Link;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Metrics\ValueMetric;
use MoonShine\Pages\Page;
use MoonShine\Components\MoonShineComponent;

class Dashboard extends Page
{
    /**
     * @return array<string, string>
     */
    public function breadcrumbs(): array
    {
        return [
            '#' => $this->title()
        ];
    }

    public function title(): string
    {
        return __('Home page');
    }

    /**
     * @return list<MoonShineComponent>
     */
    public function components(): array
	{
		return [
            Grid::make([
                Column::make([
                    ValueMetric::make(fn() => (string)Link::make(app(NewsResource::class)->indexPageUrl(),__('News')))
                        ->value(fn() => News::count())
                        ->icon('heroicons.newspaper'),
                ])->columnSpan(3),
                Column::make([
                    ValueMetric::make(fn() => (string)Link::make(app(CityResource::class)->indexPageUrl(),__('Cities')))
                        ->value(fn() => City::count())
                        ->icon('heroicons.building-office-2'),
                ])->columnSpan(3),
                Column::make([
                    ValueMetric::make(fn() => (string)Link::make(app(TeamResource::class)->indexPageUrl(),__('Teams')))
                        ->value(fn() => Team::count())
                        ->icon('heroicons.user-group'),
                ])->columnSpan(3),
                Column::make([
                    ValueMetric::make(fn() => (string)Link::make(app(GameResource::class)->indexPageUrl(),__('Games')))
                        ->value(fn() => Game::count())
                        ->icon('heroicons.calendar-days'),
                ])->columnSpan(3)
            ])
        ];
	}
}
