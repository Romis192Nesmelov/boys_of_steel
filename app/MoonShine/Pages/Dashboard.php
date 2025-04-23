<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use App\Models\News;
use App\MoonShine\Resources\NewsResource;
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


                ])->columnSpan(3)
            ])
        ];
	}
}
