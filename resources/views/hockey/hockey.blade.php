<x-app-layout>
    <x-slot name="header">@include('partials.breadcrumbs.breadcrumbs')</x-slot>
    <x-slot name="main_nav">@include('partials.navigation.navigation')</x-slot>
    <x-slot name="footer_menu1">@include('partials.navigation.footer_menu', ['navs' => array_slice($nav_links,0,4)])</x-slot>
    <x-slot name="footer_menu2">@include('partials.navigation.footer_menu', ['navs' => array_slice($nav_links,4)])</x-slot>

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
        @include('partials.paginated_items')
    </div>
</x-app-layout>
