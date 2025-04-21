<div class="flex flex-col md:flex-row items-center justify-center {{ $first ? 'md:justify-end' : 'md:justify-start' }}">
{{--    @if (!$first)--}}
{{--        <img class="w-20 mr-0 md:mr-4" src="{{ teamLogo($team) }}" />--}}
{{--    @endif--}}
    <div class="text-center {{ $first ? 'md:text-right' : 'md:text-left' }}">
        <p class="text-2xl text-gray-900 text-white">{{ $team->name }}</p>
        <p class="text-2xl text-gray-600">{{ $team->city->name }}</p>
    </div>
{{--    @if ($first)--}}
{{--        <img class="w-20 ml-0 md:ml-4" src="{{ teamLogo($team) }}" />--}}
{{--    @endif--}}
</div>
