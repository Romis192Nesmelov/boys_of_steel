<x-app-layout>
    @include('partials.slots')

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        @include('partials.head1',['head' => $content->head])

        <div class="max-w-7xl mx-auto py-3">
            @if ($content->active)
                <div class="w-full flex flex-col md:flex-row items-center md:items-start justify-start mb-4">
                    @if ($content->image)
                        <a href="{{ getImage($content) }}" class="w-10/12 mr-0 mb-4 md:mr-5 md:mb-0 fancybox">
                            <img class="border-2 border-solid" src="{{ getImage($content) }}" />
                        </a>
                    @endif
                    <div class="text-gray-400 text-base">
                        {!! $content->text !!}
                    </div>
                </div>
            @endif
        </div>

        @if (isset($items) && count($items))
            <hr class="opacity-25 my-6">
            @include('partials.paginated_items')
        @endif
    </div>
</x-app-layout>
