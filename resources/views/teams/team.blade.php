<x-app-layout>
    <x-slot name="header">@include('partials.breadcrumbs.breadcrumbs')</x-slot>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-12">
        @include('partials.head1',['head' => $team->name])
        <img src="{{ getLogo($team) }}" class="max-w-2xl mx-auto" />
        @include('partials.head2',['head' => 'Капитан команды: '.$team->captain])
        <div class="w-full text-gray-300 mt-4">{!! $team->description !!}</div>

        @if ($team->gallery->count())
            <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 gap-6 mt-6 px-2">
                @foreach($team->gallery as $item)
                    <a href="{{ getImage($item) }}" class="fancybox" title="{{ $item->description ?: '' }}">
                        <div class="w-full h-52 border-2 border-solid bg-center bg-cover" style="background-image: url({{ getImage($item) }})"></div>
                    </a>
                @endforeach
            </div>
        @endif
{{--        <hr class="opacity-25 my-6">--}}
{{--        @if (!$team->games->count())--}}
{{--            @include('partials.head2',['head' => 'Игр не найдено'])--}}
{{--        @else--}}
{{--            @include('partials.head1',['head' => 'Игры команды'])--}}
{{--        @endif--}}

{{--        @include('games.partials.future_or_past',['game' => $team->games[0]])--}}
{{--        @include('games.partials.games',['games' => $team->games])--}}
    </div>
</x-app-layout>
