<div class="grid grid-cols-1 gap-6 px-6">
    @foreach($games as $k => $game)
        @if ($k && futureOrPast($game->date) != futureOrPast($games[$k-1]->date))
            @include('games.partials.future_or_past',['game' => $game])
        @endif
        <div class="scale-100 grid grid-cols-1 md:grid-cols-5 gap-6 p-6 bg-gray-800/50 bg-gradient-to-bl from-gray-700/50 via-transparent ring-1 ring-inset ring-white/5 rounded-lg shadow-2xl shadow-none">
            <p class="text-base font-semibold text-gray-400 text-center md:text-left">{{ carbonDateWithTime($game->date) }}</p>
            @include('games.partials.team',['first' => true, 'team' => $game->teams[0]])
            <div class="text-4xl font-semibold text-white flex items-center justify-center">
{{--                @if (futureOrPast($game->date))--}}
                    <img class="w-20" src="{{ asset('storage/images/players.svg') }}" />
{{--                @else--}}
{{--                    {{ $game->score1.':'.$game->score2 }}--}}
{{--                @endif--}}
            </div>
            @include('games.partials.team',['first' => false, 'team' => $game->teams[1]])
            <div class="flex items-center justify-center md:justify-end">
                @if (!futureOrPast($game->date))
                    <x-secondary-button
                        x-data=""
                        x-on:click.prevent="$dispatch('open-modal', 'game-details-{{ $game->id }}')"
                    >{{ __('Details') }}</x-secondary-button>
                @endif
            </div>
        </div>

{{--        @if (!futureOrPast($game->date))--}}
{{--            <x-modal name="game-details-{{ $game->id }}" focusable>--}}
{{--                <div class="p-10">--}}
{{--                    <div class="grid grid-cols-1 md:grid-cols-3 mb-6">--}}
{{--                        @include('games.partials.team',['first' => true, 'team' => $game->teams[0]])--}}
{{--                        <div class="text-4xl font-semibold text-white flex items-center justify-center">{{ $game->score1.':'.$game->score2 }}</div>--}}
{{--                        @include('games.partials.team',['first' => false, 'team' => $game->teams[1]])--}}
{{--                    </div>--}}
{{--                    <p class="text-base text-white">{{ $game->description }}</p>--}}
{{--                    <div class="mt-6 flex justify-end">--}}
{{--                        <x-secondary-button x-on:click="$dispatch('close')">--}}
{{--                            {{ __('Close') }}--}}
{{--                        </x-secondary-button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </x-modal>--}}
{{--        @endif--}}
    @endforeach
</div>
