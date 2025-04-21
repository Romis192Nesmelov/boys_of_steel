<a href="{{ route('news',['slug' => $new->slug]) }}" class="scale-100 flex flex-col justify-between p-6 bg-gray-800/50 bg-gradient-to-bl from-gray-700/50 via-transparent ring-1 ring-inset ring-white/5 rounded-lg motion-safe:hover:scale-[1.02] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
    <div>
        <h2 class="mb-3 text-4xl font-semibold text-white">{{ $new->head }}</h2>
        <div class="flex flex-col md:flex-row items-start justify-start">
            <img class="w-60 mr-0 mb-3 md:mr-4 md:mb-0 border-2 border-solid" src="{{ asset($new->image) }}" />
            <p class="text-gray-400 text-xl leading-relaxed md:col-span-2">{{ $new->short_text }}</p>
        </div>
    </div>
    <p class="w-full text-right text-xl text-gray-500">{{ carbonDate($new->date) }}</p>
</a>
