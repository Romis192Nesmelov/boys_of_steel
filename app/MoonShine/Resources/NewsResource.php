<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\News;

use MoonShine\Decorations\Column;
use MoonShine\Decorations\Divider;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Date;
use MoonShine\Fields\Image;
use MoonShine\Fields\Slug;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<News>
 */
class NewsResource extends ModelResource
{
    protected string $model = News::class;

    protected string $column = 'head';

    protected int $itemsPerPage = 10;

    public function title(): string
    {
        return __('News');
    }

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Slug::make('Slug')
                ->from('head')
                ->separator('-')
                ->hideOnAll(),

            Grid::make([
                Column::make([
                    Block::make([
                        Image::make(__('Picture'),'image')
                            ->nullable()
                            ->disk('public')
                            ->dir('images/news'),
                    ]),
                    Date::make(__('Date'),'date')
                        ->required()
                        ->format('d.m.Y'),
                ])->columnSpan(2),
                Column::make([
                    Text::make(__('Head'),'head')
                        ->required(),

                    Text::make(__('Short'),'short_text')
                        ->required()
                        ->customAttributes([
                            'rows' => 8,
                        ])->hideOnIndex(),
                ])->columnSpan(10),
                Column::make([
                    Divider::make(),
                    TinyMce::make(__('News'),'text')
                        ->required()
                        ->customAttributes([
                            'rows' => 10,
                        ])->hideOnIndex(),
                ])->columnSpan(12),
            ])
        ];
    }

    /**
     * @param News $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'image' =>      ['required_without:id','mimes:jpg,png','max:2000'],
            'head' =>       ['required','min:3','max:191'],
            'short_text' => ['required','min:3','max:191'],
            'text' =>       ['required','min:5','max:66000'],
            'date' =>       ['required','date'],
        ];
    }

    public function search(): array
    {
        return ['id', 'head', 'short_text', 'text'];
    }
}
