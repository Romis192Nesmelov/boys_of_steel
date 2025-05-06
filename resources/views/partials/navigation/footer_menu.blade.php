<li class="border-gray-800 border-b-[1px] border-solid hover:border-indigo-500 {{ request()->routeIs($route) ? 'active' : '' }}"><a href="{{ route($route) }}">{{ navLinkName($route) }}</a></li>
