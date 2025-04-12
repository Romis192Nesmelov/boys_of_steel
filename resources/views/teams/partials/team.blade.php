<div class="text-center p-6 motion-safe:hover:scale-[1.2] transition-all duration-250">
    <a href="{{ route('teams', ['slug' => $team->slug]) }}">
        <img class="w-full" src="{{ asset($team->logo) }}">
        <p class="text-xl font-semibold text-gray-200 text-center">{{ $team->name }}</p>
        <p class="text-xs text-gray-400 text-center">{{ $team->city->name }}</p>
    </a>
</div>
