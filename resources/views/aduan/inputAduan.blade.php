<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex flex-row">
            <div class="basis-1/2">
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('aduan.partials.input-aduan-form')
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