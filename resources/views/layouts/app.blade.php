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
        @php $nav_links = ['home','games.future','games.past','teams'] @endphp
        <div class="min-h-screen bg-gray-900">
            <div class="max-w-7xl mx-auto py-4">
                <div class="flex flex-col md:flex-row items-center justify-center">
                    <img class="w-40 ml-0 md:ml-4 mt-3 md:mt-0" src="{{ asset('storage/images/logo_bos2.svg') }}" />
                    <div>
                        <p class="bg-white text-center text-7xl text-black font-semibold px-4 md:px-0 py-2">{{ __('Steel Hockey League') }}</p>
                        <p class="bg-red-600 text-center text-5xl text-white font-semibold px-4 md:px-0 py-2">{{ __('Ice Hockey Championship for the Cup «Boys from Steel»') }}</p>
                        <p class="bg-sky-700 text-4xl text-center text-white py-2">*{{ __('With the support of the Government of St. Petersburg»') }}</p>
                    </div>
                    <img class="w-40 ml-0 md:ml-4 mt-3 md:mt-0" src="{{ asset('storage/images/gerb-sankt-peterburga.png') }}" />
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
                    <ul class="mb-3 md:mb-0 mr-0 md:mr-20">
                        @each('partials.navigation.footer_menu',$nav_links,'route')
                    </ul>
{{--                    @guest--}}
{{--                        <ul class="mb-3 md:mb-0">--}}
{{--                            @each('partials.navigation.footer_menu',['login','register','password.request'],'route')--}}
{{--                        </ul>--}}
{{--                    @endguest--}}
                </div>
                <div class="motion-safe:hover:scale-[1.02] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <a class="w-full px-4 text-center" href="http://t.me/steelliga" target="_blank">
                        <img class="w-full md:w-40" src="{{ asset('storage/images/qr.svg') }}">
                        <div class="text-center text-gray-500 text-sm mt-1">http://t.me/steelliga</div>
                    </a>
                </div>
            </div>
            <hr class="opacity-25">
            <div class="max-w-xl mx-auto text-gray-600 text-center text-sm pt-6">
                ©{{ date('Y').', '.__('League of steel').'. '.__('All rights reserved.') }} <br> {{ __('Full or partial copying of materials is prohibited.') }}
            </div>
        </footer>

{{--        <x-modal name="our-mission" focusable>--}}
{{--        </x-modal>--}}
    </body>
</html>
