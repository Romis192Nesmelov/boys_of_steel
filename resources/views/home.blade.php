<x-app-layout>
    <x-slot name="header">@include('partials.breadcrumbs.breadcrumbs')</x-slot>

    <div id="main-art"></div>
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-6 px-6">
            <img class="hidden md:block relative -top-10" src="{{ asset('storage/images/players.png') }}" />
            <div class="md:col-span-2">
                <p class="mt-2 mb-6 text-gray-300 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et magna eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla tristique lacus ac nulla pellentesque, eu blandit erat ornare. Quisque molestie orci eu lectus mollis dictum. Vivamus scelerisque ante felis, in faucibus nulla mattis ac. Etiam eleifend nibh vitae tellus dictum, a luctus sem facilisis. Duis sed dolor eget neque rutrum facilisis. Nam pharetra aliquet suscipit.</p>
                <p class="text-gray-300 text-sm">Phasellus facilisis urna sit amet vestibulum viverra. Proin faucibus tortor nec magna porta, in egestas metus congue. Sed euismod congue sapien. Etiam a quam enim. Sed id diam libero. Vivamus id pretium est. Fusce ultricies odio non tempor vehicula. Phasellus pulvinar, libero eget tempus posuere, nisl nulla pellentesque tortor, sit amet vestibulum odio nulla tristique ex. Vestibulum vestibulum aliquam sem, vitae congue orci blandit ac. Proin lobortis auctor odio eget eleifend. Nulla vehicula justo id ipsum interdum porttitor.</p>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto">
        @include('partials.head1',['head' => 'News'])
        <div class="py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-6">
                @each('news.partials.news', $news, 'new')
            </div>
            <div class="w-full text-center pt-6">
                <a href="{{ route('news') }}">
                    <x-primary-button>{{ __('All news') }}</x-primary-button>
                </a>
            </div>
        </div>
        @if (auth()->guest())
            <hr class="opacity-25">
            <div class="w-full text-center py-6">
                <a href="{{ route('register') }}">
                    <button type="submit" class="w-90 md:w-1/4 h-12 text-sm px-4 py-2 bg-red-600 border rounded-md font-semibold text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 focus:ring-offset-gray-800 transition ease-in-out duration-150">
                        {{ __('To register') }}
                    </button>
                </a>
            </div>
        @endif
        <hr class="opacity-25 mb-6">
        @include('partials.head1',['head' => 'Schedule of games'])

        <div class="py-8">
            <div class="tabs">
                <div class="block">
                    <ul class="flex border-b border-gray-200 space-x-3 transition-all duration-300 -mb-px">
                        @include('partials.tabs.tab',['activeTab' => true, 'tabData' => 'future_games', 'tabName' => __('Future games')])
                        @include('partials.tabs.tab',['activeTab' => false, 'tabData' => 'past_games', 'tabName' => __('Past games')])
                    </ul>
                </div>
                <div class="mt-3">
                    <x-tab-panel id="future_games">
                        @include('games.partials.games',['games' => $future_games])
                    </x-tab-panel>
                    <x-tab-panel id="past_games" class="hidden">
                        @include('games.partials.games',['games' => $past_games])
                    </x-tab-panel>
                </div>
            </div>

            <div class="w-full text-center pt-6">
                <a href="{{ route('schedule') }}">
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
