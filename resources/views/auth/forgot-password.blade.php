<x-guest-layout>
    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 ">
            <div class="flex justify-center">

                <div
                    class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <h5 class="text-xl font-medium text-gray-900 dark:text-white text-center">Atur Ulang Kata Sandi</h5>
                    <hr class="mt-5">
                    <form class="space-y-6" method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div>
                            {{-- <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label> --}}
                            <p class="text-gray-500 mb-5">Masukan email Anda untuk mengatur ulang kata sandi</p>
                            <input type="email" name="userEmail" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Email" required />
                        </div>
                        <hr>
                        <div class="mx-auto">
                            <button type="submit"
                                class="w-full text-white bg-green-400 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-8 py-3 me-2 mb-2 dark:bg-green-400 dark:hover:bg-green-600 dark:focus:ring-green-600">Reset</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
    </div>
    {{-- <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form> --}}
</x-guest-layout>
