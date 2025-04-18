<x-app-layout>
    <x-slot name="header">@include('partials.breadcrumbs.breadcrumbs')</x-slot>

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        @include('partials.head1',['head' => $team->name])
        <img src="{{ teamLogo($team) }}" class="max-w-2xl mx-auto" />
        <p class="w-full text-gray-300 mb-6">{{ $team->description }}</p>
        <hr class="opacity-25 my-6">
        @if (!$team->games->count())
            @include('partials.head2',['head' => 'Games not found'])
        @else
            @include('partials.head1',['head' => 'Games of the team'])
        @endif

        @include('games.partials.future_or_past',['game' => $team->games[0]])
        @include('games.partials.games',['games' => $team->games])
    </div>
</x-app-layout>
