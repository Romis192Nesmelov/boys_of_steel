<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Content;

use MoonShine\ActionButtons\ActionButton;
use MoonShine\Decorations\Divider;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Image;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Content>
 */
class ContentResource extends ModelResource
{
    protected string $model = Content::class;

    protected string $title = 'Contents';

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
            Block::make([
                Image::make(__('Picture'),'image')
                    ->nullable()
                    ->disk('public')
                    ->dir('images/content'),
                Divider::make(),
                TinyMce::make(__('Text'),'text', fn($item) => substr(strip_tags($item->text),0,400).'...')
                    ->required()
                    ->customAttributes([
                        'rows' => 50,
                    ])
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
            'text' =>       ['required','min:5','max:50000']
        ];
    }

    public function search(): array
    {
        return ['text'];
    }
}
