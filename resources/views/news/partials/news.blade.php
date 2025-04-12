<a href="{{ route('news',['slug' => $new->slug]) }}" class="scale-100 flex flex-col justify-between p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg motion-safe:hover:scale-[1.02] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
    <div>
        <h2 class="mb-3 text-xl font-semibold text-gray-900 dark:text-white">{{ $new->head }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
            <img class="w-full border-2 border-solid" src="{{ asset($new->image) }}" />
            <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed md:col-span-2">{{ $new->short_text }}</p>
        </div>
    </div>
    <p class="w-full text-right text-sm text-gray-500">{{ carbonDate($new->date) }}</p>
</a>
