<x-nav-link :href="route($route)" :active="request()->routeIs($route)">{{ __(ucfirst($route)) }}</x-nav-link>
