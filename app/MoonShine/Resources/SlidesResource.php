<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Slide;
use Illuminate\Database\Eloquent\Model;
use App\Models\Content;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Divider;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Image;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Fields\Checkbox;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Content>
 */
class SlidesResource extends ModelResource
{
    protected string $model = Slide::class;

    protected string $column = 'image';

    public function title(): string
    {
        return __('Slides');
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
                        ->disk('public')
                        ->dir('images/slider')
                ])->columnSpan(2),
                Column::make([
                    Text::make(__('Text'),'text', fn($item) => $item->text)
                        ->required()
                ])->columnSpan(10)
            ]),
            Block::make([
                Divider::make(),
                Checkbox::make(__('Active'), 'active')
                    ->nullable()
                    ->updateOnPreview()
            ]),
        ];
    }

    /**
     * @param Content $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'image' =>      ['required_without:id','mimes:jpg,png','max:2000'],
            'text' =>       ['required','nullable','min:5','max:100','unique:slides,text,'.$item->id],
        ];
    }

    public function search(): array
    {
        return ['text'];
    }
}
