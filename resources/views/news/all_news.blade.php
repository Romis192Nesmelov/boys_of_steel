<x-app-layout>
    <x-slot name="header">@include('partials.breadcrumbs.breadcrumbs')</x-slot>

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        @include('partials.head1',['head' => 'News'])
        <div class="py-8">
            <div class="grid grid-cols-1 gap-6 px-6">
                @each('news.partials.news', $news, 'new')
            </div>
        </div>
        <div class="w-full text-center mt-6">
            {{ $news->links() }}
        </div>
    </div>
</x-app-layout>
