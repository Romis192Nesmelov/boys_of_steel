<x-app-layout>
    @include('partials.slots')

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        @include('partials.head1',['head' => $breadcrumbs[0]['name']])

        <div class="max-w-7xl mx-auto py-3">
            <div class="flex flex-col lg:flex-row justify-center px-6">
                @each('partials.docs.doc',$docs,'doc')
            </div>
        </div>
    </div>
</x-app-layout>
