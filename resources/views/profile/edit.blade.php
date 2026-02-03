<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[#3B2F2F] leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- Profile Information -->
            <div class="p-4 sm:p-8 bg-[#FFF8E7]/80 border-4 border-[#DAA520] shadow-sm sm:rounded-lg">
                <div class="max-w-xl text-[#3B2F2F]">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password -->
            <div class="p-4 sm:p-8 bg-[#FFF8E7]/80 border-4 border-[#DAA520] shadow-sm sm:rounded-lg">
                <div class="max-w-xl text-[#3B2F2F]">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete User -->
            <div class="p-4 sm:p-8 bg-[#FFF8E7]/80 border-4 border-[#DAA520] shadow-sm sm:rounded-lg">
                <div class="max-w-xl text-[#3B2F2F]">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</x-app-layout>