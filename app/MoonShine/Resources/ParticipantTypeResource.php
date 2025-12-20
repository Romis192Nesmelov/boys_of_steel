<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\ParticipantType;

use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<ParticipantType>
 */
class ParticipantTypeResource extends ModelResource
{
    protected string $model = ParticipantType::class;

    protected string $sortDirection = 'asc';

    protected int $itemsPerPage = 20;

    public function title(): string
    {
        return __('Participant type');
    }

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make(__('Name'),'name')
                    ->required(),
            ]),
        ];
    }

    /**
     * @param ParticipantType $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'name' => ['required', 'unique:participant_types', 'min:3','max:191'],
        ];
    }

    public function search(): array
    {
        return ['name'];
    }
}
