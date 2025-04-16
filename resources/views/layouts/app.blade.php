<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', __('League of steel')) }}</title>

        @include('partials.favicons')

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/js/pagedone.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/css/pagedone.css " rel="stylesheet"/>
        @vite([
            'resources/css/app.css',
            'resources/css/styles.css',
            'resources/css/owl.carousel.min.css',
            'resources/css/jquery.fancybox.min.css',
            'resources/css/icons/icomoon/styles.css',
            'resources/js/app.js',
            'resources/js/owl.carousel.js',
            'resources/js/jquery.fancybox.min.js',
            'resources/js/main.js'
        ])
    </head>
    <body class="font-sans antialiased">
        @php $nav_links = ['home','our_mission','news','schedule','teams'] @endphp
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('partials.navigation.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-900 shadow border-b border-gray-800">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <footer class="py-8 dark:bg-gray-800">
            <div class="max-w-7xl mx-auto text-white flex flex-col md:flex-row items-center md:items-start justify-between">
                <ul class="mb-3 md:mb-0">
                    @each('partials.navigation.footer_menu',$nav_links,'route')
{{--                    <li><a href="#" x-data="" x-on:click.prevent="$dispatch('open-modal', 'our-mission')">{{ __('Our mission') }}</a></li>--}}
                </ul>
                <div class="text-right sm:text-left">
                    <img class="w-20 md:w-40" src="{{ asset('storage/images/hockey_player.svg') }}">
                </div>
            </div>
        </footer>

{{--        <x-modal name="our-mission" focusable>--}}
{{--        </x-modal>--}}
    </body>
</html>
