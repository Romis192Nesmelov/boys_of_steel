<nav x-data="{ open: false }" class="bg-gray-900 border-b border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-2 sm:px-6">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex md:flex sm:hidden items-center mr-1 lg:mr-5 shrink-0">
                    <a href="{{ route('home') }}"><x-application-logo class="block h-9 w-auto fill-current text-gray-200" /></a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-1 lg:space-x-3 sm:-my-px sm:ms-3 sm:flex">
                    @foreach($nav_links as $route)
                        <x-nav-link :href="route($route)" :active="request()->routeIs($route)">{{ navLinkName($route) }}</x-nav-link>
                    @endforeach
{{--                    <a class="cursor-pointer inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-400 hover:text-gray-300 hover:border-gray-700 focus:outline-none focus:text-gray-300 focus:border-gray-700 transition duration-150 ease-in-out" x-on:click.prevent="$dispatch('open-modal', 'our-mission')">{{ __('Our mission') }}</a>--}}
                </div>
            </div>

            <!-- Settings Dropdown -->
{{--            @auth--}}
{{--                <div class="hidden sm:flex sm:items-center sm:ms-6">--}}
{{--                    <x-dropdown align="right" width="48">--}}
{{--                        <x-slot name="trigger">--}}
{{--                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-400 bg-gray-900 hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">--}}
{{--                                <div>{{ Auth::user()->name }}</div>--}}

{{--                                <div class="ms-1">--}}
{{--                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">--}}
{{--                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
{{--                            </button>--}}
{{--                        </x-slot>--}}

{{--                        <x-slot name="content">--}}
{{--                            <x-dropdown-link :href="route('profile.edit')">{{ __('Profile') }}</x-dropdown-link>--}}

{{--                            <!-- Authentication -->--}}
{{--                            <form method="POST" action="{{ route('logout') }}">--}}
{{--                                @csrf--}}
{{--                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</x-dropdown-link>--}}
{{--                            </form>--}}
{{--                        </x-slot>--}}
{{--                    </x-dropdown>--}}
{{--                </div>--}}
{{--            @else--}}
{{--                <div class="hidden sm:flex items-center text-xs ml-4">--}}
{{--                    <a href="{{ route('login') }}" class="font-semibold text-gray-400 hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ __("Log in") }}</a>--}}
{{--                    <a href="{{ route('register') }}" class="ml-3 font-semibold text-gray-400 hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ __("Register") }}</a>--}}
{{--                </div>--}}
{{--            @endauth--}}

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-gray-400 hover:bg-gray-900 focus:outline-none focus:bg-gray-900 focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            @foreach($nav_links as $route)
                <x-responsive-nav-link :href="route($route)" :active="request()->routeIs($route)">{{ navLinkName($route) }}</x-responsive-nav-link>
            @endforeach
        </div>

        <!-- Responsive Settings Options -->
{{--        <div class="pt-2 pb-1 border-t border-gray-600">--}}
{{--            @auth--}}
{{--                <div class="px-4">--}}
{{--                    <div class="font-medium text-base text-gray-200">{{ Auth::user()->name }}</div>--}}
{{--                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>--}}
{{--                </div>--}}

{{--                <div class="mt-3 space-y-1">--}}
{{--                    <x-responsive-nav-link :href="route('profile.edit')">{{ __('Profile') }}</x-responsive-nav-link>--}}

{{--                    <!-- Authentication -->--}}
{{--                    <form method="POST" action="{{ route('logout') }}">--}}
{{--                        @csrf--}}
{{--                        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</x-responsive-nav-link>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            @else--}}
{{--                <div class="space-y-1">--}}
{{--                    <x-responsive-nav-link :href="route('login')">{{ __('Log in') }}</x-responsive-nav-link>--}}
{{--                    <x-responsive-nav-link :href="route('register')">{{ __('Register') }}</x-responsive-nav-link>--}}
{{--                </div>--}}
{{--            @endauth--}}
{{--        </div>--}}

    </div>
</nav>
