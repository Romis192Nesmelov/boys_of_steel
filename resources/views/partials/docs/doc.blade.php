<div class="flex flex-col items-center justify-start">
    <h2 class="mb-3 text-md lg:text-xl font-semibold text-center text-white">{{ __(ucfirst(str_replace('_',' ',$doc))) }}</h2>
    <img class="w-30 xs:w-full mr-0 border-2 border-gray-100 border-solid mb-3" src="{{ asset('storage/images/docs/'.$doc.'.jpg') }}" />
    <a href="{{ asset('storage/docs/'.$doc.'.pdf') }}" target="_blank">
        <button class="bg-gray-200 hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">{{ __('Download').' PDF' }}</button>
    </a>
</div>
