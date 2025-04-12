<li {{ request()->routeIs($item) ? 'class=active' : '' }}><a href="{{ route($item) }}">{{ __(ucfirst($item)) }}</a></li>
