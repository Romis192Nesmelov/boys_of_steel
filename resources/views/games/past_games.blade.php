<x-app-layout>
    <x-slot name="header">@include('partials.breadcrumbs.breadcrumbs')</x-slot>

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        @include('partials.head1',['head' => 'Итоги 3-го открытого чемпионата по хоккею с шайбой<br>на Кубок «Стальная Хоккейная Лига», г.Санкт-Петербург'])

        @foreach($games as $game)
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="w-full flex flex-col md:flex-row items-center md:items-start justify-start mb-4">
                    <a href="{{ getImage($game) }}" class="w-80 mt-0 md:mt-12 mr-0 mb-4 md:mr-5 md:mb-0 fancybox">
                        <img class="border-2 border-solid" src="{{ getImage($game) }}" />
                    </a>
                    <div class="w-full">
                        <div class="flex flex-col md:flex-row items-center md:items-start justify-center md:justify-end mb-4">
{{--                            <div class="text-2xl text-gray-400">{{ 'Счет: '.$game->score1.':'.$game->score2 }}</div>--}}
                            <div class="text-base text-gray-500">{{ carbonDate($game->date) }}</div>
                        </div>
                        <div class="text-gray-400 text-base">{!! $game->description !!}</div>
                    </div>
                </div>
                <hr class="opacity-25 mb-0 md:mb-6">
            </div>
        @endforeach

        <div class="w-full text-center mt-6">
            {{ $games->links() }}
        </div>
    </div>
</x-app-layout>
