<x-app-layout>    
    <div class="z-10 ml-16 mt-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 bg-whiteColor">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Data Profil</h1>
                </div>
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="w-full">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="w-full">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
    </div>
</x-app-layout>
