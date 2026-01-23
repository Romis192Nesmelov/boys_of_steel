<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\OurSupport;

use MoonShine\Decorations\Column;
use MoonShine\Decorations\Divider;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Image;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\ModelResource;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<OurSupport>
 */
class OurSupportResource extends ModelResource
{
    protected string $model = OurSupport::class;

    protected string $column = 'head';

    protected int $itemsPerPage = 10;

    public function title(): string
    {
        return __('Our leaders');
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
                ]),
                Column::make([
                    Divider::make(),
                    TinyMce::make(__('Text'),'text')
                        ->required()
                        ->customAttributes([
                            'rows' => 10,
                        ])->hideOnIndex(),
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
            'text' =>       ['required','min:5','max:66000']
        ];
    }

    public function search(): array
    {
        return ['id', 'text'];
    }
}
