<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Стальная лига') }}</title>

        @include('partials.favicons')

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js" type="text/javascript"></script>

{{--        <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>--}}
{{--        <script src="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/js/pagedone.js"></script>--}}
{{--        <link href="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/css/pagedone.css " rel="stylesheet"/>--}}
        @vite([
            'resources/css/app.css',
{{--            'resources/css/owl.carousel.min.css',--}}
            'resources/css/jquery.fancybox.min.css',
            'resources/css/icons/icomoon/styles.css',
            'resources/css/main.css',
            'resources/js/app.js',
            'resources/js/owl.carousel.js',
            'resources/js/jquery.fancybox.min.js',
            'resources/js/main.js'
        ])
    </head>
    <body class="font-sans antialiased">
        @php $nav_links = ['about_us','news','games.future','games.past','teams','hockey.sledge','hockey.phygital','our_heroes'] @endphp
        <div class="min-h-screen bg-gray-900">
            <div class="max-w-7xl mx-auto py-4">
                <div class="flex flex-col md:flex-row items-center justify-center">
                    <a class="hover:opacity-50" href="{{ route('home') }}">
                        <img class="w-20 ml-0 md:ml-4 mt-3 md:mt-0" src="{{ asset('storage/images/logo_bos2.svg') }}" />
                    </a>
                    <div>
                        <p class="text-center text-xl md:text-3xl lg:text-5xl text-white font-semibold px-4 md:px-0">Стальная хоккейная Лига</p>
                        <p class="text-center text-base md:text-xl lg:text-2xl text-white font-semibold px-4 md:px-0">Чемпионат по хоккею с шайбой на Кубок «Парни из Стали»</p>
                        <p class="text-center text-xl md:text-base lg:text-xl text-white">При поддержке правительства Санкт-Петербурга</p>
                    </div>
                    <img class="w-20 ml-0 md:ml-4 mt-3 md:mt-0" src="{{ asset('storage/images/gerb-sankt-peterburga.png') }}" />
                </div>
            </div>
            <hr class="opacity-25">
            @include('partials.navigation.navigation')
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-gray-900 shadow border-b border-gray-800">
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
        <footer class="py-8 bg-gray-800">
            <div class="max-w-7xl mx-auto text-white flex flex-col md:flex-row items-center md:items-start justify-between">
                <div class="flex flex-col md:flex-row">
                    <ul class="mb-3 md:mb-0 ml-4 mr-0 md:mr-20 list-none">
                        @each('partials.navigation.footer_menu',array_slice($nav_links,0,4),'route')
                    </ul>
                    <ul class="mb-3 md:mb-0 ml-4 mr-0 md:mr-20 list-none">
                        @each('partials.navigation.footer_menu',array_slice($nav_links,-4),'route')
                    </ul>
                    <div class="ml-0 md:ml-8">
                        <div class="text-center md:text-left text-gray-600 font-bold text-xl mb-3">Контакты:</div>
                        <ul class="text-center md:text-left text-white text-sm list-none pl-0">
                            <li class="border-gray-800 border-b-[1px] border-solid hover:border-indigo-500">E-mail: <a href="mailto:info@dartcom.ru" target="_blank">info@dartcom.ru</a></li>
                        </ul>
                    </div>
{{--                    @guest--}}
{{--                        <ul class="mb-3 md:mb-0">--}}
{{--                            @each('partials.navigation.footer_menu',['login','register','password.request'],'route')--}}
{{--                        </ul>--}}
{{--                    @endguest--}}
                </div>
                <div class="motion-safe:hover:scale-[1.02] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500 pr-4 pb-2">
                    <a class="w-full text-center" href="http://t.me/steelliga" target="_blank">
                        <img class="w-full md:w-40" src="{{ asset('storage/images/qr.svg') }}">
                        <div class="text-center text-gray-500 text-sm mt-1">http://t.me/steelliga</div>
                    </a>
                </div>
            </div>
            <hr class="opacity-25">
            <div class="max-w-xl mx-auto text-gray-500 text-center text-xl pt-6 pb-2">
                Спонсор сайта компания ООО «Дартком»
            </div>
            <div class="max-w-xl mx-auto text-gray-600 text-center text-sm">
                ©{{ date('Y') }}. Стальная лига. Все права защищены.<br>Полное или частичное копирование материалов запрещено.
            </div>
        </footer>

{{--        <x-modal name="our-mission" focusable>--}}
{{--        </x-modal>--}}
    </body>
</html>
