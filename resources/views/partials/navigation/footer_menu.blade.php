<ul class="mb-3 md:mb-0 ml-4 mr-0 lg:mr-20 md:mr-5 list-none">
    @foreach($navs as $route => $name)
        <li class="mb-[5px] border-gray-800 border-b-2 border-solid focus:border-indigo-700 focus:outline-none transition duration-150 ease-in-out hover:border-indigo-500 {{ request()->routeIs($route) ? 'border-indigo-600 text-gray-100' : 'border-transparent text-gray-400 hover:text-gray-300 hover:border-gray-700 focus:text-gray-300' }}"><a href="{{ route($route) }}">{{ $name }}</a></li>
    @endforeach
</ul>
