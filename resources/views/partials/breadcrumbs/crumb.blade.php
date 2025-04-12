<div class="font-semibold text-xs md:text-base text-gray-200 text-gray-200 leading-tight">
    <i class="mx-1 md:mx-3 text-gray-600 icon-circle-right2"></i><a href="{{ route($item['href'], (isset($item['slug']) ? ['slug' => $item['slug']] : [])) }}">{{ __($item['name']) }}</a>
</div>
