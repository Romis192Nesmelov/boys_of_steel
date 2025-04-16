<li {{ request()->routeIs($route) ? 'class=active' : '' }}><a href="{{ route($route) }}">{{ navLinkName($route) }}</a></li>
