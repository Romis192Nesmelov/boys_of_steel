<x-app-layout>
    <x-slot name="header">@include('partials.breadcrumbs.breadcrumbs')</x-slot>
    <x-slot name="main_nav">@include('partials.navigation.navigation')</x-slot>
    <x-slot name="footer_menu1">@include('partials.navigation.footer_menu', ['navs' => array_slice($nav_links,0,4)])</x-slot>
    <x-slot name="footer_menu2">@include('partials.navigation.footer_menu', ['navs' => array_slice($nav_links,4)])</x-slot>

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="max-w-7xl mx-auto py-3">
            <div class="w-full flex flex-col md:flex-row items-center md:items-start justify-start mb-4">
                <a href="{{ getImage($news) }}" class="w-80 mr-0 mb-4 md:mr-5 md:mb-0 fancybox">
                    <img class="border-2 border-solid" src="{{ getImage($news) }}" />
                </a>
                <div class="w-full">
                    <div class="flex flex-col md:flex-row items-center md:items-start justify-center md:justify-between">
                        <h1 class="w-full text-start text-3xl text-gray-300 font-semibold pt-6 md:pt-0 mb-8">{{ $news->head }}</h1>
                        <div class="text-base text-gray-500">{{ carbonDate($news->date) }}</div>
                    </div>
                    <p class="text-gray-400 text-base mb-3"><i>{{ $news->short_text }}</i></p>
                    <hr class="opacity-25 mb-3">
                    <div class="text-gray-400 text-base">{!! $news->text !!}</div>
                </div>
            </div>
        </div>

{{--        <div class="w-full text-center md:text-left my-6">--}}
{{--            <a href="{{ url(URL::previous()) }}">--}}
{{--                <x-primary-button>{{ __('Return back') }}</x-primary-button>--}}
{{--            </a>--}}
{{--        </div>--}}

        <hr class="opacity-25 mb-6">
        @include('partials.head1',['head' => 'Последние новости'])
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 px-6 mt-8">
            @each('news.partials.news', $last_news, 'new')
        </div>
    </div>
</x-app-layout>
