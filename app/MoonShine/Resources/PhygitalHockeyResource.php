<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\SledgeHockey;
use Illuminate\Database\Eloquent\Model;
use App\Models\PhygitalHockey;

use MoonShine\Decorations\Column;
use MoonShine\Decorations\Divider;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Date;
use MoonShine\Fields\Image;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<PhygitalHockey>
 */
class PhygitalHockeyResource extends ModelResource
{
    protected string $model = PhygitalHockey::class;

    protected string $column = 'head';

    protected int $itemsPerPage = 10;

    public function title(): string
    {
        return __('Hockey phygital');
    }

    /**
     * @return list<MoonShineComponent|Field>
     */

    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Grid::make([
                Column::make([
                    Image::make(__('Picture'),'image')
                        ->nullable()
                        ->disk('public')
                        ->dir('images/hockey'),
                ])->columnSpan(6),
                Column::make([
                    Date::make(__('Date'),'date')
                        ->required()
                        ->format('d.m.Y'),
                ])->columnSpan(6),
                Column::make([
                    Divider::make(),
                    TinyMce::make(__('Text'),'text')
                        ->required()
                        ->customAttributes([
                            'rows' => 10,
                        ])->hideOnIndex(),
                ])->columnSpan(12),
            ])
        ];
    }

    /**
     * @param SledgeHockey $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'image' =>      ['required_without:id','mimes:jpg,png','max:2000'],
            'text' =>       ['required','min:5','max:66000'],
            'date' =>       ['required','date'],
        ];
    }

    public function search(): array
    {
        return ['id', 'text'];
    }
}
