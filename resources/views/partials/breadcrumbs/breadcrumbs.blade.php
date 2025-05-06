<div class="w-full flex">
    @each('partials.breadcrumbs.crumb', array_merge([['href' => 'home', 'name' => 'Главная']], $breadcrumbs), 'item')
</div>
