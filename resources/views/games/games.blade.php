<x-app-layout>
    <x-slot name="header">@include('partials.breadcrumbs.breadcrumbs')</x-slot>

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        @include('partials.head1',['head' => 'Расписание игр'])
{{--        @include('games.partials.future_or_past',['game' => $games[0]])--}}

        @if (check28may())
            @include('games.partials.games',['games' => $games])
            <div class="w-full text-center mt-6">
                {{ $games->links() }}
            </div>
        @else
            @include('partials.head2',['head' => 'Жеребьёвка пройдёт 27 мая'])
        @endif
    </div>
</x-app-layout>
