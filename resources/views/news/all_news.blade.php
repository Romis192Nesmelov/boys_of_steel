<x-app-layout>
    <x-slot name="header">@include('partials.breadcrumbs.breadcrumbs')</x-slot>
    <x-slot name="main_nav">@include('partials.navigation.navigation')</x-slot>
    <x-slot name="footer_menu1">@include('partials.navigation.footer_menu', ['navs' => array_slice($nav_links,0,4)])</x-slot>
    <x-slot name="footer_menu2">@include('partials.navigation.footer_menu', ['navs' => array_slice($nav_links,4)])</x-slot>

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        @include('partials.head1',['head' => 'Новости'])
        <div class="py-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 px-6">
                @each('news.partials.news', $news, 'new')
            </div>
        </div>
        <div class="w-full text-center mt-6">
            {{ $news->links() }}
        </div>
    </div>
</x-app-layout>
