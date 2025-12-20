<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Participant;
use Illuminate\Contracts\Database\Eloquent\Builder;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Date;
use MoonShine\Fields\Hidden;
use MoonShine\Fields\Number;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<PlayersResource>
 */
class PlayersResource extends ModelResource
{
    protected string $model = Participant::class;

    protected array $with = ['team'];

    protected string $column = 'surname';

    protected int $itemsPerPage = 100;

    public function title(): string
    {
        return __('Players');
    }

    public function query(): Builder
    {
        return parent::query()
            ->where('participant_type_id', 2);
    }

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Hidden::make('participant_type_id')->setValue(2)->hideOnIndex(),
            Grid::make([
                Column::make([
                    Text::make(__('Surname'),'surname')
                        ->required(),
                    Text::make(__('Name'),'name')
                        ->required(),
                    BelongsTo::make(
                        __('Team'),
                        'team',
                        fn($item) => $item->name,
                        new TeamResource()
                    )
                ])->columnSpan(10),
                Column::make([
                    Date::make(__('Born'),'born')
                        ->required()
                        ->format('d.m.Y'),
                    Number::make(__('Number'),'number'),
                ])->columnSpan(2),
            ])
        ];
    }

    /**
     * @param PlayersResource $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'surname' => ['required','min:3','max:191'],
            'name'    => ['required','min:3','max:191'],
            'number'  => ['integer','nullable','min:1','max:999'],
            'born'    => ['required','date'],
        ];
    }

    public function search(): array
    {
        return ['id', 'surname', 'name', 'born'];
    }
}
