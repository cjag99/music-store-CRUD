<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[#3B2F2F] leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#FFF8E7]/80 border-4 border-[#DAA520] shadow-sm sm:rounded-lg">
                <div class="p-6 text-[#3B2F2F]">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>