<div class="flex flex-col items-center justify-start px-2">
    <h2 class="mb-3 text-md lg:text-md font-semibold text-center text-white">{{ $doc->name }}</h2>
    <img class="w-30 xs:w-full mr-0 border-2 border-gray-100 border-solid mb-3" src="{{ asset('storage/'.$doc->image) }}" />
    <a href="{{ asset('storage/'.$doc->doc) }}" target="_blank">
        <button class="bg-gray-200 hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">{{ __('Download').' '.strtoupper(pathinfo($doc->doc)['extension']) }}</button>
    </a>
</div>
