<x-app-layout>
    <x-slot name="header">@include('partials.breadcrumbs.breadcrumbs')</x-slot>
    <x-slot name="main_nav">@include('partials.navigation.navigation')</x-slot>
    <x-slot name="footer_menu1">@include('partials.navigation.footer_menu', ['navs' => array_slice($nav_links,0,4)])</x-slot>
    <x-slot name="footer_menu2">@include('partials.navigation.footer_menu', ['navs' => array_slice($nav_links,4)])</x-slot>

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        @include('partials.head1',['head' => 'Команды'])
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 pt-6 px-6">
            @each('teams.partials.team', $teams, 'team')
        </div>
        <div class="w-full text-center mt-6">
            {{ $teams->links() }}
        </div>
    </div>
</x-app-layout>
