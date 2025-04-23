<x-app-layout>
    <x-slot name="header">@include('partials.breadcrumbs.breadcrumbs')</x-slot>

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="w-full flex flex-col md:flex-row items-center justify-start mb-4">
            <a href="{{ asset($news->image)}}" class="w-80 mr-0 mb-4 md:mr-3 md:mb-0 fancybox">
                <img class=" border-2 border-solid" src="{{ newsImage($news) }}" />
            </a>
            <p class="w-full text-gray-400 text-xl"><i>{{ $news->short_text }}</i></p>
        </div>
        <div class="w-full text-gray-300 mb-6 text-xl">{!! $news->text !!}</div>
        <div class="w-full text-center md:text-left my-6">
            <a href="{{ url(URL::previous()) }}">
                <x-primary-button>{{ __('Return back') }}</x-primary-button>
            </a>
        </div>

        <hr class="opacity-25 mb-6">
        @include('partials.head1',['head' => 'Last news'])
        <div class="grid grid-cols-1 gap-6 px-6 mt-8">
            @each('news.partials.news', $last_news, 'new')
        </div>
    </div>
</x-app-layout>
