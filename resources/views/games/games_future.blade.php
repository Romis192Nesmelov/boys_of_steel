<x-app-layout>
    @include('partials.slots')

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        @include('partials.head1',['head' => __('Games future')])

        @if ($games->count())
            @include('games.partials.games',['games' => $games])
            <div class="w-full text-center mt-6">
                {{ $games->links() }}
            </div>
        @else
            <div class="w-full my-6">
                @include('partials.head2',['head' => __('The draw has not been conducted yet')])
            </div>
        @endif
    </div>
</x-app-layout>
