<x-app-layout>
    @include('partials.slots')

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        @include('partials.head1',['head' => $breadcrumbs[0]['name']])

        <div class="max-w-7xl mx-auto py-3">
            @if ($items->count())
                <table id="participants">
                    <thead>
                        <tr>
                            <th class="text-left w-1/8">{{ __('Photo') }}</th>
                            <th class="text-left w-1/5">{{ __('Surname') }}</th>
                            <th class="w-1/5">{{ __('Name') }}</th>
                            @if ($typeId == 2 || $typeId == 7)
                                <th class="w-2 text-center">{{ __('Number') }}</th>
                            @endif
                            <th class="text-center w-1/6">{{ __('Born') }}</th>
                            <th class="text-center w-2/3">{{ __('Description') }}</th>
                            @if ($typeId == 2)
                                <th class="w-2/3">{{ __('Team') }}</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td class="text-center">
                                    @if ($item->image)
                                        <a href="{{ asset('storage/'.$item->image) }}" class="fancybox">
                                            <img class="hidden md:block w-full" src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->name }}"/>
                                        </a>
                                    @else
                                        <img class="hidden md:block w-full" src="{{ asset('storage/images/def_avatar.svg') }}" alt="{{ $item->name }}"/>
                                    @endif
                                </td>
                                <td class="text-left">{{ $item->surname }}</td>
                                <td class="text-left">{{ $item->name }}</td>
                                @if ($typeId == 2 || $typeId == 7)
                                    <td class="text-center">{{ $item->number }}1</td>
                                @endif
                                <td class="text-center">{{ carbonDate($item->born) }}</td>
                                <td class="text-left">{{ $item->description }}</td>
                                @if ($typeId != 7)
                                    <td class="w-full">
                                        @if ($item->team)
                                            <nobr><img class="hidden md:block w-6 float-left mr-1" src="{{ getLogo($item->team) }}" alt="{{ $item->name }}"/>{{ $item->name }}</nobr>
                                        @endif
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                @include('partials.head2',['head' => __('Nothing was found!')])
            @endif
        </div>
    </div>
    <script>
        $(document).ready( function () {
            $('#participants').DataTable({
                pageLength: 50,
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.13.4/i18n/ru.json'
                }
            });
        } );
    </script>
</x-app-layout>
