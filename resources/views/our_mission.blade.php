<x-app-layout>
    <x-slot name="header">@include('partials.breadcrumbs.breadcrumbs')</x-slot>

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        @include('partials.head1',['head' => 'Our mission'])
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-6 px-6">
            <img src="{{ asset('storage/images/logo_bos2.svg') }}" />
            <div class="md:col-span-2">
                <x-simple-p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor ultricies nisl, condimentum fringilla nisi interdum tempor. Ut non eros id elit fermentum ultrices nec posuere odio. Curabitur id justo ut turpis cursus commodo. Duis nec ultricies eros. Morbi consequat arcu est, eu finibus nisi mollis vitae. Proin euismod leo sed nunc fermentum efficitur. Morbi egestas turpis vel hendrerit consectetur. Aliquam gravida diam id erat condimentum pretium. Donec tempus, dui ac tempus varius, lorem velit volutpat mi, pretium laoreet enim nulla accumsan magna. Morbi pulvinar enim aliquet lacus laoreet, sed aliquam tortor sagittis. Cras nec porttitor ex. Duis id ullamcorper est. Morbi nulla diam, vestibulum id interdum eu, sollicitudin dapibus quam. Cras molestie molestie rutrum. Sed sed magna vel lacus ornare blandit vel in libero.</x-simple-p>
                <x-simple-p>Ut purus dui, congue eget turpis et, aliquam tempus sem. Nam pellentesque neque vel magna porttitor tristique quis eget sapien. Nulla pharetra est in est bibendum, in aliquam urna suscipit. Pellentesque condimentum est eget interdum mollis. Etiam ullamcorper nec nulla ut imperdiet. Donec pharetra mattis arcu ut pulvinar. Duis libero purus, ultricies quis nunc eu, convallis molestie arcu. Mauris tempus, erat et pretium rhoncus, ligula ipsum sodales ante, non ornare lacus arcu eget dui. Suspendisse sit amet congue urna. Proin sit amet urna molestie quam sodales commodo. Nullam condimentum eros tortor. Mauris ac tempus ligula.</x-simple-p>
            </div>
            <div class="md:col-span-2">
                <x-simple-p>Nulla id gravida erat. Fusce finibus ante sit amet diam dapibus vehicula. Ut id metus odio. Vestibulum massa turpis, lacinia vitae rutrum et, ultrices id sem. Nulla imperdiet erat congue blandit sollicitudin. Nam consequat nulla a turpis condimentum egestas. Cras sed sem egestas, vehicula sapien vitae, commodo tellus. Vivamus ullamcorper pretium rutrum.</x-simple-p>
                <x-simple-p>Maecenas sem metus, accumsan aliquet tempor eget, pellentesque ut massa. Morbi sodales, odio sagittis volutpat mattis, ex mauris commodo massa, sit amet laoreet mauris dui vel sapien. Quisque lacinia odio vitae leo bibendum imperdiet. Duis vel cursus ipsum. Curabitur vitae leo dapibus, tincidunt quam eu, commodo nulla. Duis malesuada, ligula id convallis tincidunt, dolor massa lacinia ipsum, sed sollicitudin risus diam sit amet mauris. Morbi iaculis enim mi, non hendrerit ipsum suscipit ac. Integer viverra sapien id eros placerat venenatis. Sed placerat faucibus urna, quis pharetra odio. Suspendisse tristique magna consectetur massa bibendum porttitor. Aenean varius risus id egestas lacinia.</x-simple-p>
            </div>
            <img src="{{ asset('storage/images/bos_cup.svg') }}" />
        </div>
    </div>
</x-app-layout>
