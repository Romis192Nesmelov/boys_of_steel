<x-app-layout>
    @include('partials.slots')

    <div class="max-w-7xl mx-auto pt-6">
        @if ($contents[0]->active)
            <div class="flex flex-col lg:flex-row items-center justify-start">
                <img class="w-40 md:w-1/4 ml-2 mr-0 md:mr-4 md:mb-0" src="{{ getImage($contents[0]) }}" />
                <div class="px-4 md:col-span-2">
                    {!! $contents[0]->text !!}
                </div>
            </div>
            <hr class="opacity-25 my-6">
        @endif

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

        @if ($contents[2]->active)
            <hr class="opacity-25 mb-6">

            @include('partials.head1',['head' => 'Расписание 3-го открытого чемпионата<br>по хоккею с шайбой на Кубок «Стальная Хоккейная Лига», г.Санкт-Петербург'])
            <div class='pb-8'>
                @if (check28may() && isset($future_games))
                    @include('games.partials.games',['games' => $future_games])
                    <div class="w-full text-center pt-6">
                        <a href="{{ route('games.future') }}">
                            <x-primary-button>Все расписание</x-primary-button>
                        </a>
                    </div>
                @else
                    @include('partials.head2',['head' => 'Жеребьёвка пройдёт 27 мая'])
                @endif

                @if ($contents[1]->active)
                    <hr class="opacity-25 my-6">
                    @include('partials.head1',['head' => $contents[1]->head])
                    <div class="w-full p-2">
                        {!! $contents[1]->text !!}
                    </div>
                @endif

                <hr class="opacity-25 my-6">
                @include('partials.head1',['head' => $contents[2]->head])
                <div class="w-full p-2">
                    {!! $contents[2]->text !!}
                </div>
            </div>

            @if (isset($teams))
                <hr class="opacity-25 mb-6">
                @include('partials.head1',['head' => 'Teams'])
                <div class="owl-carousel teams">
                    @each('teams.partials.team', $teams, 'team')
                </div>
                <div class="w-full text-center pt-6 pb-8">
                    <a href="{{ route('teams') }}">
                        <x-primary-button>Все команды</x-primary-button>
                    </a>
                </div>
            @endif
        @endif
    </div>
</x-app-layout>
