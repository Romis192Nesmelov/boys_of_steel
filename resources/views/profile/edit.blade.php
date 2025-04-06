<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
            <div class="p-4 p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                @include('profile.partials.update-profile-information-form')
            </div>
            <div class="p-4 p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                @include('profile.partials.update-password-form')
            </div>
        </div>
        <div class="p-4 mt-8 p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            @include('profile.partials.delete-user-form')
        </div>
    </div>
</x-app-layout>
