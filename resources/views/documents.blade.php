<x-app-layout>
    <x-slot name="header">@include('partials.breadcrumbs.breadcrumbs')</x-slot>

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        @include('partials.head1',['head' => $breadcrumbs[0]['name']])

        <div class="max-w-7xl mx-auto py-3">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 px-6">
                @each('partials.docs.doc',[
                    'certificate_of_state_registration',
                    'extract_from_the_USRLE',
                    'SHL_position'
                ],'doc')
            </div>
        </div>
    </div>
</x-app-layout>
