<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use App\Models\City;
use App\Models\Content;
use App\Models\Game;
use App\Models\News;
use App\Models\OurHero;
use App\Models\PhygitalHockey;
use App\Models\SledgeHockey;
use App\Models\Team;
use App\Models\Document;
use App\MoonShine\Resources\CityResource;
use App\MoonShine\Resources\ContentResource;
use App\MoonShine\Resources\GameResource;
use App\MoonShine\Resources\NewsResource;
use App\MoonShine\Resources\OurHeroResource;
use App\MoonShine\Resources\PhygitalHockeyResource;
use App\MoonShine\Resources\SledgeHockeyResource;
use App\MoonShine\Resources\TeamResource;
use App\MoonShine\Resources\DocumentsResource;
use MoonShine\Components\Link;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Metrics\ValueMetric;
use MoonShine\Models\MoonshineUser;
use MoonShine\Pages\Page;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Resources\MoonShineUserResource;

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
                    ValueMetric::make(fn() => (string)Link::make(app(MoonShineUserResource::class)->indexPageUrl(),__('Users')))
                        ->value(fn() => MoonshineUser::count())
                        ->icon('heroicons.user-group'),
                ])->columnSpan(2),
                Column::make([
                    ValueMetric::make(fn() => (string)Link::make(app(NewsResource::class)->indexPageUrl(),__('News')))
                        ->value(fn() => News::count())
                        ->icon('heroicons.newspaper'),
                ])->columnSpan(2),
                Column::make([
                    ValueMetric::make(fn() => (string)Link::make(app(CityResource::class)->indexPageUrl(),__('Cities')))
                        ->value(fn() => City::count())
                        ->icon('heroicons.building-office-2'),
                ])->columnSpan(2),
                Column::make([
                    ValueMetric::make(fn() => (string)Link::make(app(TeamResource::class)->indexPageUrl(),__('Teams')))
                        ->value(fn() => Team::count())
                        ->icon('heroicons.user-group'),
                ])->columnSpan(2),
                Column::make([
                    ValueMetric::make(fn() => (string)Link::make(app(GameResource::class)->indexPageUrl(),__('Games')))
                        ->value(fn() => Game::count())
                        ->icon('heroicons.calendar-days'),
                ])->columnSpan(2),
                Column::make([
                    ValueMetric::make(fn() => (string)Link::make(app(SledgeHockeyResource::class)->indexPageUrl(),__('Hockey sledge')))
                        ->value(fn() => SledgeHockey::count())
                        ->icon('heroicons.hand-raised'),
                ])->columnSpan(2),
                Column::make([
                    ValueMetric::make(fn() => (string)Link::make(app(PhygitalHockeyResource::class)->indexPageUrl(),__('Hockey phygital')))
                        ->value(fn() => PhygitalHockey::count())
                        ->icon('heroicons.power'),
                ])->columnSpan(2),
                Column::make([
                    ValueMetric::make(fn() => (string)Link::make(app(OurHeroResource::class)->indexPageUrl(),__('Our heroes')))
                        ->value(fn() => OurHero::count())
                        ->icon('heroicons.users'),
                ])->columnSpan(2),
                Column::make([
                    ValueMetric::make(fn() => (string)Link::make(app(ContentResource::class)->indexPageUrl(),__('Content')))
                        ->value(fn() => Content::count())
                        ->icon('heroicons.book-open'),
                ])->columnSpan(2),
                Column::make([
                    ValueMetric::make(fn() => (string)Link::make(app(DocumentsResource::class)->indexPageUrl(),__('Documents')))
                        ->value(fn() => Document::count())
                        ->icon('heroicons.document-duplicate'),
                ])->columnSpan(2),
            ])
        ];
	}
}
