<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Content;

use MoonShine\ActionButtons\ActionButton;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Divider;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Image;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Fields\Checkbox;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Content>
 */
class ContentResource extends ModelResource
{
    protected string $model = Content::class;

    protected string $column = 'head';

    protected function modifyCreateButton(ActionButton $button): ActionButton
    {
        return $button->emptyHidden();
    }

    protected function modifyDeleteButton(ActionButton $button): ActionButton
    {
        return $button->emptyHidden();
    }

    public function title(): string
    {
        return __('Content');
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
                        ->dir('images/content')
                ])->columnSpan(2),
                Column::make([
                    Text::make(__('Head'),'head', fn($item) => strip_tags(str_replace('<br>',' ',$item->head)))
                        ->required()
                ])->columnSpan(10)
            ]),
            Block::make([
                Divider::make(),
                TinyMce::make(__('Text'),'text')
                    ->required()
                    ->customAttributes([
                        'rows' => 50,
                    ])->hideOnIndex(),
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
            'head' =>       ['required','min:5','max:191'],
            'image' =>      ['required_without:id','mimes:jpg,png','max:2000'],
            'text' =>       ['required','min:5','max:66000']
        ];
    }

    public function search(): array
    {
        return ['head','text'];
    }
}
