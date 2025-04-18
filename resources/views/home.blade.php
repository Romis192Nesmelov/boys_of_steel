<x-app-layout>
    <x-slot name="header">@include('partials.breadcrumbs.breadcrumbs')</x-slot>

    <div id="main-art"></div>
    <div class="max-w-7xl mx-auto pt-6">
        @include('partials.head1',['head' => 'Our mission'])
        <div class="flex flex-col md:flex-row items-center md:items-center justify-start pt-6">
            <img class="w-40 md:w-1/4 mr-0 mb-3 md:mr-4 md:mb-0" src="{{ asset('storage/images/bos_cup.svg') }}" />
            <div class="px-4 md:px-0 md:col-span-2">
                <p class="mt-2 mb-6 text-gray-300 text-sm">Проект направлен на создание спортивного братства, вовлечение ветеранов боевых действий и членов их семей в коллективные спортивные соревнования, адаптацию и социализацию ветеранов в кругу общих интересов через физкультуру и спорт.</p>
                <p class="text-gray-300 text-sm mb-6">Проект направлен на создание спортивного братства, вовлечение ветеранов боевых действий и членов их семей в коллективные спортивные соревнования, адаптацию и социализацию ветеранов в кругу общих интересов через физкультуру и спорт.</p>
                <p class="text-gray-300 text-sm mb-6">Проведение хоккейного турнира с участием 8 команд ветеранов из Самары, Омска, Санкт-Петербурга, Уфы, Нижнего Новгорода, Екатеринбурга, Челябинска и Москвы ставит перед собой решение следующих важных задач:</p>
                <ul class="text-gray-300 list-disc ps-10">
                    <li>создание спортивного сообщества ветеранов, объединенных общей командной вовлеченностью и повышением уровня спортивного мастерства;</li>
                    <li>привлечения внимания общественности к социализации ветеранов;</li>
                    <li>совершенствование нравственно-моральных идеалов, развитие и укрепление дружбы и уважения, укрепление межведомственных связей;</li>
                    <li>патриотическое воспитание молодежи и приобщение к здоровому образу жизни;</li>
                    <li>охват всех регионов и субъектов РФ, путем создания в них своих представительств и организации проведения региональных регулярных чемпионатов, увеличение числа команд-участниц;</li>
                    <li>создание дивизионов по возрастным и другим критериям.</li>
                </ul>
            </div>
        </div>
        <hr class="opacity-25 my-6">
    </div>
    <div class="max-w-7xl mx-auto">
        @include('partials.head1',['head' => 'News'])
        <div class="py-8">
            <div class="grid grid-cols-1 gap-6 px-6">
                @each('news.partials.news', $news, 'new')
            </div>
            <div class="w-full text-center pt-6">
                <a href="{{ route('news') }}">
                    <x-primary-button>{{ __('All news') }}</x-primary-button>
                </a>
            </div>
        </div>

        <hr class="opacity-25 mb-6">

        @include('partials.head1',['head' => 'Schedule of games'])
        <div class='py-8'>
            @include('games.partials.games',['games' => $future_games])
            <div class="w-full text-center pt-6">
                <a href="{{ route('games.future') }}">
                    <x-primary-button>{{ __('All schedule') }}</x-primary-button>
                </a>
            </div>
        </div>

        <hr class="opacity-25 mb-6">
        @include('partials.head1',['head' => 'Teams'])
        <div class="owl-carousel teams">
            @each('teams.partials.team', $teams, 'team')
        </div>
        <div class="w-full text-center pt-6 pb-8">
            <a href="{{ route('teams') }}">
                <x-primary-button>{{ __('All teams') }}</x-primary-button>
            </a>
        </div>
    </div>
</x-app-layout>
