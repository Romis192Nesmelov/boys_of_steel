<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Participant;
use Illuminate\Contracts\Database\Eloquent\Builder;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Divider;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Checkbox;
use MoonShine\Fields\Date;
use MoonShine\Fields\Hidden;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Resources\ModelResource;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<PlayersResource>
 */
class PlayersResource extends ModelResource
{
    protected string $model = Participant::class;

    protected array $with = ['team'];

    protected string $column = 'surname';

    protected int $itemsPerPage = 100;

    public function title(): string
    {
        return __('Players');
    }

    public function query(): Builder
    {
        return parent::query()->where('participant_type_id', 2);
    }

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Hidden::make('participant_type_id')->setValue(2)->hideOnIndex(),
            Grid::make([
                Column::make([
                    Image::make(__('Photo'),'image')
                        ->nullable()
                        ->disk('public')
                        ->dir('images/participants'),

                ])->columnSpan(2),
                Column::make([
                    Text::make(__('Surname'),'surname')
                        ->required(),
                    Text::make(__('Name'),'name')
                        ->required(),
                    BelongsTo::make(
                        __('Team'),
                        'team',
                        fn($item) => $item->name,
                        new TeamResource()
                    )->nullable()
                ])->columnSpan(8),
                Column::make([
                    Date::make(__('Born'),'born')
                        ->required()
                        ->format('d.m.Y'),
                    Number::make(__('Number'),'number'),
                ])->columnSpan(2),
                Column::make([
                    Divider::make(),
                    Textarea::make(__('Description'),'description')
                        ->nullable()
                        ->customAttributes([
                            'rows' => 2,
                        ])->hideOnIndex(),
                    Checkbox::make(__('Active'), 'active')
                        ->nullable()
                        ->default(1)
                        ->updateOnPreview()
                ]),
            ])
        ];
    }

    /**
     * @param PlayersResource $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'image'               => ['nullable','mimes:jpg,png','max:2000'],
            'surname'             => ['required','min:3','max:191'],
            'name'                => ['required','min:3','max:191'],
            'number'              => ['integer','nullable','min:1','max:999'],
            'born'                => ['required','date'],
            'description'         => ['nullable','min:3','max:1000'],
            'participant_type_id' => ['nullable','integer','size:2'],
            'active'              => ['nullable','max:1'],
        ];
    }

    public function search(): array
    {
        return ['id', 'surname', 'name', 'born', 'text'];
    }
}
