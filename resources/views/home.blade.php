<x-app-layout>
    <x-slot name="header">@include('partials.breadcrumbs.breadcrumbs')</x-slot>

    <div class="max-w-7xl mx-auto pt-6">
        <div class="flex flex-col lg:flex-row items-center justify-start">
            <img class="w-40 md:w-1/4 ml-2 mr-0 md:mr-4 md:mb-0" src="{{ asset('storage/images/content/'.$home->image) }}" />
            <div class="px-4 md:px-0 md:col-span-2">
                {!! $home->text !!}
            </div>
        </div>
        <hr class="opacity-25 my-6">
    </div>
    <div class="max-w-7xl mx-auto">
        @include('partials.head1',['head' => 'Новости'])
        <div class="pb-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 px-6">
                @each('news.partials.news', $news, 'new')
            </div>
            <div class="w-full text-center pt-6">
                <a href="{{ route('news') }}">
                    <x-primary-button>Все новости</x-primary-button>
                </a>
            </div>
        </div>

        <hr class="opacity-25 mb-6">

        @include('partials.head1',['head' => 'Расписание 3-го открытого чемпионата<br>по хоккею с шайбой на Кубок «Парни из Стали», г.Санкт-Петербург'])
        <div class='pb-8'>
            @if (check28may())
                @include('games.partials.games',['games' => $future_games])
                <div class="w-full text-center pt-6">
                    <a href="{{ route('games.future') }}">
                        <x-primary-button>Все расписание</x-primary-button>
                    </a>
                </div>
            @else
                @include('partials.head2',['head' => 'Жеребьёвка пройдёт 27 мая'])
            @endif

            <hr class="opacity-25 my-6">
            @include('partials.head1',['head' => 'Тайминг проведения игр<br>третьего открытого турнира «ПАРНИ ИЗ СТАЛИ»'])
            <div class="w-full p-2">
                {!! $timing->text !!}

{{--                <div class="mt-8">--}}
{{--                    <a href="{{ asset('storage/timinng.docx') }}">--}}
{{--                        <x-primary-button>Скачать</x-primary-button>--}}
{{--                    </a>--}}
{{--                </div>--}}
            </div>
        </div>

{{--        <hr class="opacity-25 mb-6">--}}
{{--        @include('partials.head1',['head' => 'Teams'])--}}
{{--        <div class="owl-carousel teams">--}}
{{--            @each('teams.partials.team', $teams, 'team')--}}
{{--        </div>--}}
{{--        <div class="w-full text-center pt-6 pb-8">--}}
{{--            <a href="{{ route('teams') }}">--}}
{{--                <x-primary-button>Все команды</x-primary-button>--}}
{{--            </a>--}}
{{--        </div>--}}
    </div>
</x-app-layout>
