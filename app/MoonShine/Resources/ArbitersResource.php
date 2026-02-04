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
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Resources\ModelResource;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<ArbitersResource>
 */
class ArbitersResource extends ModelResource
{
    protected string $model = Participant::class;

    protected string $column = 'surname';

    protected int $itemsPerPage = 100;

    public function title(): string
    {
        return __('Arbiters');
    }

    public function query(): Builder
    {
        return parent::query()->where('participant_type_id', 7);
    }

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Hidden::make('participant_type_id')->setValue(7)->hideOnIndex(),
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
     * @param ArbitersResource $item
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
            'participant_type_id' => ['required','integer','size:7'],
            'active'              => ['nullable','max:1'],
        ];
    }

    public function search(): array
    {
        return ['id', 'surname', 'name', 'born', 'text'];
    }
}
