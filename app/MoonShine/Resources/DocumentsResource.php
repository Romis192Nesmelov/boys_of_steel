<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Document;
use Illuminate\Database\Eloquent\Model;
use App\Models\Content;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Divider;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Image;
use MoonShine\Fields\File;
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
class DocumentsResource extends ModelResource
{
    protected string $model = Document::class;

    protected string $column = 'name';

    public function title(): string
    {
        return __('Documents');
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
                        ->dir('images/docs')
                ])->columnSpan(2),
                Column::make([
                    File::make(__('Document'),'doc')
                        ->disk('public')
                        ->dir('docs')
                ])->columnSpan(2),
                Column::make([
                    Text::make(__('Doc name'),'name', fn($item) => $item->head)
                        ->required()
                ])->columnSpan(8)
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
            'name' =>       ['required','min:5','max:191','unique:documents,name,'.$item->id],
            'image' =>      ['required_without:id','mimes:jpg,png','max:2000'],
            'doc' =>        ['required_without:id','mimes:pdf,doc,docx','max:5000']
        ];
    }

    public function search(): array
    {
        return ['name'];
    }
}
