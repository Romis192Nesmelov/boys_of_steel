<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Leadership;
use Cassandra\Tinyint;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Models\OurSupport;

use MoonShine\Decorations\Column;
use MoonShine\Decorations\Divider;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Checkbox;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\ModelResource;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<OurSupport>
 */
class LeadershipResource extends ModelResource
{
    protected string $model = Leadership::class;

    protected string $column = 'head';

    protected int $itemsPerPage = 10;

    public function title(): string
    {
        return __('Leadership');
    }

    public function query(): Builder
    {
        return parent::query()->orderBy('sort');
    }

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            ID::make(),
            Grid::make([
                Column::make([
                    Image::make(__('Picture'),'image')
                        ->nullable()
                        ->disk('public')
                        ->dir('images/leadership'),

                ])->columnSpan(6),
                Column::make([
                    Number::make(__('Sort'),'sort')->default(1)->sortable(),
                ])->columnSpan(6),
                Column::make([
                    Divider::make(),
                    TinyMce::make(__('Text'),'text')
                        ->required()
                        ->customAttributes([
                            'rows' => 10,
                        ])->hideOnIndex(),
                    Checkbox::make(__('Active'), 'active')
                        ->nullable()
                        ->updateOnPreview()
                ]),
            ])
        ];
    }

    /**
     * @param OurSupport $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'image' =>      ['required_without:id','mimes:jpg,png','max:2000'],
            'text' =>       ['required','min:5','max:66000'],
            'sort' =>       ['required','min:1','max:999'],
            'active' =>     ['nullable','max:1'],
        ];
    }

    public function search(): array
    {
        return ['id', 'text'];
    }
}
