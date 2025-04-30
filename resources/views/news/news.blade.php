<x-app-layout>
    <x-slot name="header">@include('partials.breadcrumbs.breadcrumbs')</x-slot>

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="w-full flex flex-col md:flex-row items-center justify-start mb-4">
            <a href="{{ newsImage($news) }}" class="w-60 mr-0 mb-4 md:mr-3 md:mb-0 fancybox">
                <img class="border-2 border-solid" src="{{ newsImage($news) }}" />
            </a>
            <div class="w-full">
                <p class="text-gray-400 text-base"><i>{{ $news->short_text }}</i></p>
                <p class="text-right text-sm text-gray-500">{{ carbonDate($news->date) }}</p>
            </div>
        </div>
        <div class="w-full text-gray-300 mb-6 text-base">{!! $news->text !!}</div>
{{--        <div class="w-full text-center md:text-left my-6">--}}
{{--            <a href="{{ url(URL::previous()) }}">--}}
{{--                <x-primary-button>{{ __('Return back') }}</x-primary-button>--}}
{{--            </a>--}}
{{--        </div>--}}

        <hr class="opacity-25 mb-6">
        @include('partials.head1',['head' => 'Последние новости'])
        <div class="grid grid-cols-1 gap-6 px-6 mt-8">
            @each('news.partials.news', $last_news, 'new')
        </div>
    </div>
</x-app-layout>
