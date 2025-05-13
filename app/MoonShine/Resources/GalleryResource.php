<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Gallery;

use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Image;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Gallery>
 */
class GalleryResource extends ModelResource
{
    protected string $model = Gallery::class;

    protected string $column = 'description';

    protected array $with = ['team'];

    protected int $itemsPerPage = 10;

    public function title(): string
    {
        return __('Gallery');
    }

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Block::make([
                Grid::make([
                    Column::make([
                        Image::make(__('Picture'),'image')
                            ->nullable()
                            ->disk('public')
                            ->dir('images/gallery'),
                    ])->columnSpan(2),
                    Column::make([
                        Text::make(__('Description'),'description')
                    ])->columnSpan(6),
                    Column::make([
                        BelongsTo::make(
                            __('Team'),
                            'team',
                            fn($item) => $item->name,
                            resource: new TeamResource()
                        )
                    ])->columnSpan(4)
                ])
            ])
        ];
    }

    /**
     * @param Gallery $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'image' =>          ['required_without:id','mimes:jpg,png','max:2000'],
            'description' =>    ['nullable','min:3','max:191']
        ];
    }

    public function search(): array
    {
        return ['description'];
    }
}
