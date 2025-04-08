<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Main') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="flex justify-center">
            <img width="300" src="{{ asset('storage/images/logo_red.svg') }}">
        </div>

        <div class="mt-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
{{--                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>--}}
{{--                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">--}}
{{--                            Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.--}}
{{--                        </p>--}}
                </div>

                <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
{{--                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>--}}
{{--                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">--}}
{{--                            Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.--}}
{{--                        </p>--}}
                </div>

                <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
{{--                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>--}}
{{--                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">--}}
{{--                            Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.--}}
{{--                        </p>--}}
                </div>

                <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
{{--                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>--}}
{{--                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">--}}
{{--                            Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.--}}
{{--                        </p>--}}
                </div>
            </div>
        </div>

{{--        <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">--}}
{{--            <div class="text-center text-sm sm:text-left">--}}
{{--                &nbsp;--}}
{{--            </div>--}}

{{--            <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">--}}
{{--                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</x-app-layout>
