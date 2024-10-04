<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="flex justify-center">

                <div
                    class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <div class="grid">

                    </div>
                    <h5 class="text-xl font-medium text-gray-900 dark:text-white text-center">Daftar</h5>
                    <form class="space-y-6" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div>
                            {{-- <label for="namaLengkap"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                Lengkap</label> --}}
                            <input type="text" name="userName" id="namaLengkap"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Nama Lengkap" required />
                        </div>
                        <div>
                            {{-- <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label> --}}
                            <input type="email" name="userEmail" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Email" required />
                        </div>
                        <div>
                            {{-- <label for="userNomor"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                                Whatsapp</label> --}}
                            {{-- <input type="text" name="userNomor" id="userNomor" placeholder="Nomor whatsapp"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required /> --}}
                            <input type="password" name="userPassword" id="userPassword" placeholder="Password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required />
                        </div>
                        <div>
                            <input type="password" name="userPassword_confirmation" id="userPassword_confirmation"
                                placeholder="Konfirmasi Password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required />
                        </div>
                        <div class="flex flex-row justify-between">
                            <div class="basis-1/2 mt-2">
                                <a href="{{ route('login') }}"
                                    class="text-white bg-gray-400 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-8 px-5 py-3 text-center dark:bg-gray-600 dark:hover:bg-gray-400 dark:focus:ring-gray-600">Kembali</a>
                            </div>
                            <div class="basis-1/2">
                                <button type="submit"
                                    class="w-full text-white bg-green-400 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-8 py-3 me-2 mb-2 dark:bg-green-400 dark:hover:bg-green-600 dark:focus:ring-green-600">Daftar</button>
                            </div>
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

</x-guest-layout>
