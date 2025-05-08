<div class="p-6 motion-safe:hover:scale-[1.2] transition-all duration-250">
    <a href="{{ route('teams', ['slug' => $team->slug]) }}">
        <img class="w-3/4 mx-auto" src="{{ getLogo($team) }}">
        <p class="text-xl font-semibold text-gray-200 text-center">{{ $team->name }}</p>
        <p class="text-base text-gray-400 text-center">{{ $team->city->name }}</p>
    </a>
</div>
