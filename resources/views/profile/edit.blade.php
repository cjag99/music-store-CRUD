<x-app-layout>


    <div class="py-12">
        <div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">

            <!-- Profile Information -->
            <div class="border-4 border-[#DAA520] bg-[#FFF8E7]/80 p-4 shadow-sm sm:rounded-lg sm:p-8">
                <div class="max-w-xl text-[#3B2F2F]">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password -->
            <div class="border-4 border-[#DAA520] bg-[#FFF8E7]/80 p-4 shadow-sm sm:rounded-lg sm:p-8">
                <div class="max-w-xl text-[#3B2F2F]">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete User -->
            <div class="border-4 border-[#DAA520] bg-[#FFF8E7]/80 p-4 shadow-sm sm:rounded-lg sm:p-8">
                <div class="max-w-xl text-[#3B2F2F]">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
