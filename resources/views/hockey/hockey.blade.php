<x-app-layout>
    <x-slot name="header">@include('partials.breadcrumbs.breadcrumbs')</x-slot>

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        @include('partials.head1',['head' => $content->head])

        <div class="flex flex-col lg:flex-row items-center justify-start">
            @if ($content->image)
                <img class="w-40 md:w-1/4 ml-2 mr-0 md:mr-4 md:mb-0" src="{{ getImage($content->image) }}" />
            @endif
            <div class="px-4 md:px-0 md:col-span-2 text-white">
                {!! $content->text !!}
            </div>
        </div>
        <hr class="opacity-25 my-6">

        @foreach ($items as $item)
            <div class="max-w-7xl mx-auto py-3">
                <div class="w-full flex flex-col md:flex-row items-center md:items-start justify-start mb-4">
                    <a href="{{ getImage($item) }}" class="w-80 mt-0 md:mt-12 mr-0 mb-4 md:mr-5 md:mb-0 fancybox">
                        <img class="border-2 border-solid" src="{{ getImage($item) }}" />
                    </a>
                    <div class="w-full">
                        <div class="flex flex-col md:flex-row items-center md:items-start justify-center md:justify-end mb-4">
                            <div class="text-base text-gray-500">{{ carbonDate($item->date) }}</div>
                        </div>
                        <div class="text-gray-400 text-base">{!! $item->text !!}</div>
                    </div>
                </div>
                <hr class="opacity-25">
            </div>
        @endforeach
        <div class="w-full text-center mt-6">
            {{ $items->links() }}
        </div>
    </div>
</x-app-layout>
