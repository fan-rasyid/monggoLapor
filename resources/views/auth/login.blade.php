<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="flex flex-row content-center mx-8 my-20">
                <div class="basis-1/2">
                    <h1
                        class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-red-600 md:text-5xl lg:text-6xl dark:text-white">
                        MONGGO LAPOR</h1>
                    <h6 class="mb-4 text-3xl me-5 font-normal text-gray-500 dark:text-gray-400">
                        Kanal aspirasi dan pengaduan berupa keluhan, kritik, dan saran kepada pemerintah Kota Magelang
                    </h6>
                </div>
                <div class="basis-1/2">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg shadow-2xl">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
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
                                            {{ __('Lupa Password ?') }}
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
        <div class="bg-white px-8 py-8">
            <div class="text-center">
                <h5 class="text-2xl font-extrabold text-gray-900 dark:text-white">VIDEO MONGGO LAPOR</h5>
                <hr class="w-96 h-1 mx-auto my-4 bg-gray-900 border-0 rounded md:my-4 dark:bg-gray-700">
                <div class="h-auto max-w-4xl mx-auto">
                    <video class="w-full my-4" controls>
                        <source src="https://www.youtube.com/watch?v=R9lhb_eGXdk" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <div class="px-8 py-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="text-center">
                    <h5 class="text-2xl font-extrabold text-gray-900 dark:text-white">STATISTIK MONGGO LAPOR</h5>
                    <hr class="w-96 h-1 mx-auto bg-gray-900 border-0 rounded md:my-4 dark:bg-gray-700">
                    <div class="flex flex-row content-center mx-8 my-14">
                        <div class="basis-1/3">
                            <p class="text-5xl font-extrabold text-gray-900 dark:text-white">1920</p>
                            <p class="my-2 text-xs tracking-wider font-thin text-gray-900 dark:text-white">ADUAN MASUK
                            </p>
                        </div>
                        <div class="basis-1/3">
                            <p class="text-5xl font-extrabold text-gray-900 dark:text-white">1920</p>
                            <p class="my-2 text-xs tracking-wider font-thin text-gray-900 dark:text-white">ADUAN DALAM
                                PROSES</p>
                        </div>
                        <div class="basis-1/3">
                            <p class="text-5xl font-extrabold text-gray-900 dark:text-white">1920</p>
                            <p class="my-2 text-xs tracking-wider font-thin text-gray-900 dark:text-white">ADUAN
                                TERTANGANI</p>
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
