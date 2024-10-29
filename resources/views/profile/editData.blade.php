<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex flex-row">
            <div class="basis-1/2">
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.update-profile-information-form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="basis-1/2">
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                <ul>
                                    <li class="bg-gray-100 hover:bg-gray-200 mb-1">
                                        <a href="{{ route('profile.edit') }}">Profile</a>
                                    </li>
                                    <li class="bg-gray-100 hover:bg-gray-200 mb-1">
                                        <a href="{{ route('profile.password') }}">Ubah Kata Sandi</a>
                                    </li>
                                    <li class="bg-gray-100 hover:bg-gray-200 mb-1">
                                        {{-- <a href="">Keluar</a> --}}
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Keluar
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-2">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                <ul>
                                    <li class="bg-gray-100 hover:bg-gray-200 mb-1">
                                        <a href="{{ route('profile.edit') }}">Laporan Belum diproses</a>
                                    </li>
                                    <li class="bg-gray-100 hover:bg-gray-200 mb-1">
                                        <a href="">Laporan dalam proses</a>
                                    </li>
                                    <li class="bg-gray-100 hover:bg-gray-200 mb-1">
                                        <a href="">Laporan selesai</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</x-app-layout>
