<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Resources\ArbitersResource;
use App\MoonShine\Resources\CityResource;
use App\MoonShine\Resources\ContentResource;
use App\MoonShine\Resources\GalleryResource;
use App\MoonShine\Resources\GameResource;
use App\MoonShine\Resources\LeadershipResource;
use App\MoonShine\Resources\NewsResource;
use App\MoonShine\Resources\ParticipantTypeResource;
use App\MoonShine\Resources\PlayersResource;
use App\MoonShine\Resources\OurSupportResource;
use App\MoonShine\Resources\PhygitalHockeyResource;
use App\MoonShine\Resources\SledgeHockeyResource;
use App\MoonShine\Resources\SlidesResource;
use App\MoonShine\Resources\TeamResource;
use App\MoonShine\Resources\DocumentsResource;
use App\MoonShine\Resources\TrainersResource;
use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;
use MoonShine\Contracts\Resources\ResourceContract;
use MoonShine\Menu\MenuElement;
use MoonShine\Pages\Page;
use Closure;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    /**
     * @return list<ResourceContract>
     */
    protected function resources(): array
    {
        return [];
    }

    /**
     * @return list<Page>
     */
    protected function pages(): array
    {
        return [];
    }

    /**
     * @return Closure|list<MenuElement>
     */
    protected function menu(): array
    {
        return [
            MenuItem::make(
                static fn() => __('Slides'),
                new SlidesResource()
            ),
            MenuGroup::make(static fn() => __('moonshine::ui.resource.system'), [
                MenuItem::make(
                    static fn() => __('moonshine::ui.resource.admins_title'),
                    new MoonShineUserResource()
                ),
                MenuItem::make(
                    static fn() => __('moonshine::ui.resource.role_title'),
                    new MoonShineUserRoleResource()
                ),
            ]),
            MenuItem::make(
                static fn() => __('News'),
                new NewsResource()
            ),
            MenuItem::make(
                static fn() => __('Cities'),
                new CityResource()
            ),
            MenuGroup::make(static fn() => __('Teams'), [
                MenuItem::make(
                    static fn() => __('Teams'),
                    new TeamResource()
                ),
                MenuItem::make(
                    static fn() => __('Gallery'),
                    new GalleryResource()
                ),
            ]),
            MenuItem::make(
                static fn() => __('Games'),
                new GameResource()
            ),
            MenuGroup::make(static fn() => __('Hockey'), [
                MenuItem::make(
                    static fn() => __('Hockey sledge'),
                    new SledgeHockeyResource()
                ),
                MenuItem::make(
                    static fn() => __('Hockey phygital'),
                    new PhygitalHockeyResource()
                ),
            ]),
            MenuGroup::make(static fn() => __('Participants'), [
                MenuItem::make(
                    static fn() => __('Participants types'),
                    new ParticipantTypeResource()
                ),
                MenuItem::make(
                    static fn() => __('Players'),
                    new PlayersResource()
                ),
                MenuItem::make(
                    static fn() => __('Trainers'),
                    new TrainersResource()
                ),
                MenuItem::make(
                    static fn() => __('Arbiters'),
                    new ArbitersResource()
                ),
            ]),
            MenuGroup::make(static fn() => __('Our support'), [
                MenuItem::make(
                    static fn() => __('Leadership'),
                    new LeadershipResource()
                ),
                MenuItem::make(
                    static fn() => __('Our support'),
                    new OurSupportResource()
                ),
            ]),
            MenuItem::make(
                static fn() => __('Content'),
                new ContentResource()
            ),
            MenuItem::make(
                static fn() => __('Documents'),
                new DocumentsResource()
            ),
        ];
    }

    /**
     * @return Closure|array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [];
    }
}
