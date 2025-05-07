<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Game;

use MoonShine\Decorations\Column;
use MoonShine\Decorations\Divider;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Date;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\Relationships\BelongsToMany;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Game>
 */
class GameResource extends ModelResource
{
    protected string $model = Game::class;

    protected string $column = 'place';

    protected array $with = ['teams'];

    protected int $itemsPerPage = 10;

    public function title(): string
    {
        return __('Games');
    }

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Grid::make([
                    Column::make([
                        Block::make([
                            Image::make(__('Picture'),'image')
                                ->nullable()
                                ->disk('public')
                                ->dir('images/games'),
                        ]),
                        Divider::make(),
                        Date::make(__('Date'),'date')
                            ->required()
                            ->format('d.m.Y'),
//                        Grid::make([
//                            Column::make([
//                                Number::make(__('Score #1'),'score1'),
//                            ])->columnSpan(6),
//                            Column::make([
//                                Number::make(__('Score #2'),'score2'),
//                            ])->columnSpan(6),
//                        ])
                    ])->columnSpan(4),
                    Column::make([
                        BelongsToMany::make(
                            __('Teams'),
                            'teams',
                            fn($item) => $item->name,
                            resource: new TeamResource()
                        )->required()
                    ])->columnSpan(8),
                    Column::make([
                        Divider::make(),
                        TinyMce::make(__('Description'),'description')
                            ->customAttributes([
                                'rows' => 10,
                            ])->hideOnIndex(),
                    ])->columnSpan(12),
                ])
            ]),
        ];
    }

    protected function afterUpdated(Model $item): Model
    {
        $this->checkFutureGame($item);
        $this->checkTeams($item);
        return $item;
    }

    protected function afterCreated(Model $item): Model
    {
        $this->checkFutureGame($item);
        $this->checkTeams($item);
        return $item;
    }

    /**
     * @param Game $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
//        $scoreRequired = futureOrPast(request()->date) ? 'nullable' : 'required';
        return [
            'date' =>       ['required','date'],
//            'score1' =>     [$scoreRequired,'integer','max:100'],
//            'score2' =>     [$scoreRequired,'integer','max:100'],
            'description' =>['nullable','max:50000']
        ];
    }

    public function search(): array
    {
        return ['place','description'];
    }

    private function checkFutureGame(Model $item): void
    {
        if (futureOrPast(request()->date)) {
            $item->score1 = null;
            $item->score2 = null;
            $item->save();
        }
    }

    private function checkTeams(Model $item): void
    {
        $item->load('teams');
        if ($item->teams->count() >= 3) {
            $item->teams()->sync([$item->teams[0]->id,$item->teams[1]->id]);
        }
    }
}
