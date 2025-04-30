<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Team;

use MoonShine\Decorations\Column;
use MoonShine\Decorations\Divider;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Image;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Slug;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Team>
 */
class TeamResource extends ModelResource
{
    protected string $model = Team::class;

    protected string $sortDirection = 'asc';

    protected array $with = ['city'];

    protected int $itemsPerPage = 10;

    public function title(): string
    {
        return __('Teams');
    }

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Slug::make('Slug')
                ->from('head')
                ->separator('-')
                ->hideOnAll(),

            Grid::make([
                Column::make([
                    Block::make([
                        Image::make(__('Logo'),'logo')
                            ->nullable()
                            ->disk('public')
                            ->dir('images/teams_logos'),
                    ]),
                ])->columnSpan(12),
                Column::make([
                    Text::make(__('Title'),'name')
                        ->required(),
                    Text::make('E-mail','email')
                        ->hideOnIndex(),
                    Text::make(__('Site'),'site')
                        ->hideOnIndex()
                ])->columnSpan(6),
                Column::make([
                    Text::make(__('Captain'),'captain'),
                    Text::make(__('Phone'),'phone')
                        ->mask('+7(999)999-99-99')
                        ->hideOnIndex(),
                    BelongsTo::make(
                        __('City'),
                        'city',
                        fn($item) => $item->name,
                        resource: new CityResource()
                    )->hideOnIndex()
                ])->columnSpan(6),
                Column::make([
                    TinyMce::make(__('Description'),'description')
                        ->customAttributes([
                            'rows' => 10,
                        ])->hideOnIndex(),
                ])->columnSpan(12),
            ])
        ];
    }

    /**
     * @param Team $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'logo' =>           ['nullable','mimes:jpg,png','max:2000'],
            'name' =>           ['required','min:3','max:191','unique:teams,name'.(isset($item->id) ? ','.$item->id : '')],
            'captain' =>        ['nullable','max:191'],
            'email' =>          ['nullable','max:191'],
            'phone' =>          ['nullable','max:191'],
            'site' =>           ['nullable','max:191'],
            'description' =>    ['nullable','max:191'],
        ];
    }

    public function search(): array
    {
        return ['name','captain','email','phone','site','description'];
    }
}
