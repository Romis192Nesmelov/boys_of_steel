<x-app-layout>
    @include('partials.slots')

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
