<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-center py-2 ">
            <h2 class="font-semibold text-sm text-white leading-tight grid grid-cols-2 gap-40">
                <div class="hidden text space-x-8 sm:-my-px sm:ml-10 sm:flex"><x-nav-link :href="route('home')"
                        :active="request()->routeIs('home')">{{ __('Para você') }}</x-nav-link></div>
                <div class="hidden text space-x-8 sm:-my-px sm:ml-10 sm:flex"><x-nav-link :href="route('foryou')"
                        :active="request()->routeIs('foryou')">{{ __('Seguindo') }}</x-nav-link></div>
            </h2>
        </div>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="border border-slate-600 bg-black overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-white ">
                    {{ __('feed') }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
