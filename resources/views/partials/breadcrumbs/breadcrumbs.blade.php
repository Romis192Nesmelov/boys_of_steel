<div class="w-full flex">
    @each('partials.breadcrumbs.crumb', array_merge([['href' => 'home', 'name' => 'Main']], $breadcrumbs), 'item')
</div>
