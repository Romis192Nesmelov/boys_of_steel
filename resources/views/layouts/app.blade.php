<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <x-favicons></x-favicons>

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
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

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
                    @each('partials.footer_menu',['home','news','schedule','teams'],'item')
                    <li><a href="#" x-data="" x-on:click.prevent="$dispatch('open-modal', 'our-mission')">{{ __('Our mission') }}</a></li>
                </ul>
                <div class="text-right sm:text-left">
                    <img class="w-20 md:w-40" src="{{ asset('storage/images/hockey_player.svg') }}">
                </div>
            </div>
        </footer>

        <x-modal name="our-mission" focusable>
            <div class="p-10">
                <p class="text-base text-gray-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor ultricies nisl, condimentum fringilla nisi interdum tempor. Ut non eros id elit fermentum ultrices nec posuere odio. Curabitur id justo ut turpis cursus commodo. Duis nec ultricies eros. Morbi consequat arcu est, eu finibus nisi mollis vitae. Proin euismod leo sed nunc fermentum efficitur. Morbi egestas turpis vel hendrerit consectetur. Aliquam gravida diam id erat condimentum pretium. Donec tempus, dui ac tempus varius, lorem velit volutpat mi, pretium laoreet enim nulla accumsan magna. Morbi pulvinar enim aliquet lacus laoreet, sed aliquam tortor sagittis. Cras nec porttitor ex. Duis id ullamcorper est. Morbi nulla diam, vestibulum id interdum eu, sollicitudin dapibus quam. Cras molestie molestie rutrum. Sed sed magna vel lacus ornare blandit vel in libero.</p>
                <p class="text-base text-gray-300">Ut purus dui, congue eget turpis et, aliquam tempus sem. Nam pellentesque neque vel magna porttitor tristique quis eget sapien. Nulla pharetra est in est bibendum, in aliquam urna suscipit. Pellentesque condimentum est eget interdum mollis. Etiam ullamcorper nec nulla ut imperdiet. Donec pharetra mattis arcu ut pulvinar. Duis libero purus, ultricies quis nunc eu, convallis molestie arcu. Mauris tempus, erat et pretium rhoncus, ligula ipsum sodales ante, non ornare lacus arcu eget dui. Suspendisse sit amet congue urna. Proin sit amet urna molestie quam sodales commodo. Nullam condimentum eros tortor. Mauris ac tempus ligula.</p>
                <p class="text-base text-gray-300">Nulla id gravida erat. Fusce finibus ante sit amet diam dapibus vehicula. Ut id metus odio. Vestibulum massa turpis, lacinia vitae rutrum et, ultrices id sem. Nulla imperdiet erat congue blandit sollicitudin. Nam consequat nulla a turpis condimentum egestas. Cras sed sem egestas, vehicula sapien vitae, commodo tellus. Vivamus ullamcorper pretium rutrum.</p>
                <p class="text-base text-gray-300">Maecenas sem metus, accumsan aliquet tempor eget, pellentesque ut massa. Morbi sodales, odio sagittis volutpat mattis, ex mauris commodo massa, sit amet laoreet mauris dui vel sapien. Quisque lacinia odio vitae leo bibendum imperdiet. Duis vel cursus ipsum. Curabitur vitae leo dapibus, tincidunt quam eu, commodo nulla. Duis malesuada, ligula id convallis tincidunt, dolor massa lacinia ipsum, sed sollicitudin risus diam sit amet mauris. Morbi iaculis enim mi, non hendrerit ipsum suscipit ac. Integer viverra sapien id eros placerat venenatis. Sed placerat faucibus urna, quis pharetra odio. Suspendisse tristique magna consectetur massa bibendum porttitor. Aenean varius risus id egestas lacinia.</p>
                <p class="text-base text-gray-300">Maecenas ullamcorper cursus blandit. Morbi eleifend ut justo at blandit. Morbi lectus turpis, posuere vel lacus ac, scelerisque malesuada velit. In sit amet libero arcu. Duis ultrices orci velit, non malesuada nunc lacinia ac. Nullam porta lorem ac erat aliquet tincidunt. Vivamus sit amet convallis lacus, at tristique sapien. Nullam vel vestibulum eros.</p>
                <div class="mt-6 flex justify-end">
                    <x-secondary-button x-on:click="$dispatch('close')">
                        {{ __('Close') }}
                    </x-secondary-button>
                </div>
            </div>
        </x-modal>
    </body>
</html>
