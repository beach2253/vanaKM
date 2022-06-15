<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-content leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-backdrop overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-backdrop border-b border-primery">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
