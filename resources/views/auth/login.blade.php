<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="flex flex-row content-center m-8">
                <div class="basis-1/2">
                    <h1
                        class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-red-600 md:text-5xl lg:text-6xl dark:text-white">
                        MONGGO LAPOR</h1>
                    <h6 class="mb-4 text-3xl me-5 font-normal text-gray-500 dark:text-gray-400">
                        Kanal aspirasi dan pengaduan berupa keluhan, kritik, dan saran kepada pemerintah Kota Magelang
                    </h6>
                </div>
                <div class="basis-1/2">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            {{-- <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- Email Address -->
                                <div>
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email"
                                        name="userEmail" :value="old('email')" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-input-label for="password" :value="__('Password')" />
                                    <x-text-input id="password" class="block mt-1 w-full" type="password"
                                        name="userPassword" required autocomplete="current-password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div class="mt-4">
                                    <button type="submit"
                                        class="focus:outline-none text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-3 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-600 dark:focus:ring-red-900 w-full">Masuk</button>
                                </div>
                                <hr class="mt-4">
                                <div class="flex items-center justify-center mt-4">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                            href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif

                                </div>
                                <div class="mt-4 text-center">
                                    <a href="{{ route('register') }}"
                                        class="text-white bg-green-400 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-8 py-3 me-2 mb-2 dark:bg-green-400 dark:hover:bg-green-600 dark:focus:ring-green-600 ">Buat
                                        akun baru</a>
                                </div>
                            </form> --}}
                            <form class="space-y-6" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div>
                                    {{-- <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label> --}}
                                    <input type="email" name="userEmail" id="email"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="Email" required />
                                </div>
                                <div>
                                    <input type="password" name="userPassword" id="userPassword" placeholder="Password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        required />
                                </div>
                                <div class="mt-4">
                                    <button type="submit"
                                        class="focus:outline-none text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-3 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-600 dark:focus:ring-red-900 w-full">Masuk</button>
                                </div>
                                <hr class="mt-4">
                                <div class="flex items-center justify-center mt-4">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                            href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif

                                </div>
                                <div class="mt-4 text-center">
                                    <a href="{{ route('register') }}"
                                        class="text-white bg-green-400 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-8 py-3 me-2 mb-2 dark:bg-green-400 dark:hover:bg-green-600 dark:focus:ring-green-600 ">Buat
                                        akun baru</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</x-guest-layout>
