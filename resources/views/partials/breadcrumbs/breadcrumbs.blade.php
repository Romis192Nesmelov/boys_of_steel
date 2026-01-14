<div class="w-full flex justify-between">
    <div class="flex">
        @each('partials.breadcrumbs.crumb', array_merge([['href' => 'home', 'name' => 'Главная']], $breadcrumbs), 'item')
    </div>
    <div class="flex items-center">
        @foreach([
            'vhl-logo.svg' => 'https://www.vhlru.ru/',
            'mhl-logo.png' => 'https://mhl.khl.ru/',
            'lhl-logo.png' => 'https://lhl-77.ru/',
            'fhr-logo.svg' => 'https://fhr.ru/',
            'khl-logo.svg' => 'https://www.khl.ru/',
        ] as $logo => $href)
            <div class="w-10 mx-3 hover:opacity-50">
                <a href="{!! $href !!}" target="_blank">
                    <img src="{{ asset('storage/images/foreign_logos/'.$logo) }}" />
                </a>
            </div>
        @endforeach
    </div>
</div>
