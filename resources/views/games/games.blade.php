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

        <hr class="opacity-25 my-6">

        @include('partials.head2',['head' => $contents[1]->head])
        <div class="w-full my-6">
            {!! $contents[1]->text !!}
        </div>

        @include('partials.head2',['head' => $contents[2]->head])
        <div class="w-full my-6">
            {!! $contents[2]->text !!}
        </div>

        @include('partials.head2',['head' => $contents[0]->head])
        <div class="w-full p-2 mt-5">
            {!! $contents[0]->text !!}
        </div>
    </div>
</x-app-layout>
