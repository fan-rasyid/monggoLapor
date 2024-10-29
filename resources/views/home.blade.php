<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="flex flex-row">
                <div class="basis-1/2"> --}}

            <form class="max-w-lg mx-auto">
                <div class="flex">
                    <button id="dropdown-button" data-dropdown-toggle="dropdown"
                        class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                        type="button">All categories <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    <div id="dropdown"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                            <li>
                                <button type="button"
                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mockups</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Templates</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Design</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logos</button>
                            </li>
                        </ul>
                    </div>
                    <div class="relative w-full">
                        <input type="search" id="search-dropdown"
                            class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-gray-500 focus:border-gray-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                            placeholder="Penelusuran Kategori" required />
                        <button type="submit"
                            class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-gray-400 rounded-e-lg border border-gray-400 hover:bg-gray-500 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>

            {{-- Isi Content  --}}
            <div class="mt-5 block w-full bg-white rounded-lg shadow">
                <div class="relative p-1 flex flex-row">
                    <img class="w-10 h-10 rounded-full ms-5 mt-2 mb-2"
                        src="https://png.pngtree.com/png-vector/20191101/ourmid/pngtree-cartoon-color-simple-male-avatar-png-image_1934459.jpg"
                        alt="Rounded avatar">
                    <p class="ms-2 mt-2 pt-2">Anonymous</p>
                </div>
                <hr>
                <p class="mx-auto p-4 text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Molestiae
                    laborum
                    suscipit,
                    deleniti nam officia, quidem est perspiciatis corporis necessitatibus quaerat ipsum
                    obcaecati vero, hic sint rem eius unde magni corrupti.</p>

                <img srcset="https://letsenhance.io/static/8f5e523ee6b2479e26ecc91b9c25261e/1015f/MainAfter.jpg"
                    class="w-full h-auto max-w-xl mx-auto rounded-lg pb-5" alt="image description">

                <hr>
                {{-- <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.408-5.5a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4a1 1 0 0 0-1-1h-2Z"
                        clip-rule="evenodd" />
                </svg>
                <span>Status : Selesai</span> --}}

                <p class="text-end text-gray-500 p-2 me-2">Selengkapnya</p>
            </div>
            <div class="mt-5 block w-full bg-white rounded-lg shadow">
                <div class="relative p-1 flex flex-row">
                    <img class="w-10 h-10 rounded-full ms-5 mt-2 mb-2"
                        src="https://png.pngtree.com/png-vector/20191101/ourmid/pngtree-cartoon-color-simple-male-avatar-png-image_1934459.jpg"
                        alt="Rounded avatar">
                    <p class="ms-2 mt-2 pt-2">Anonymous</p>
                </div>
                <hr>
                <p class="mx-auto p-4 text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Molestiae
                    laborum
                    suscipit,
                    deleniti nam officia, quidem est perspiciatis corporis necessitatibus quaerat ipsum
                    obcaecati vero, hic sint rem eius unde magni corrupti.</p>

                <img srcset="https://letsenhance.io/static/8f5e523ee6b2479e26ecc91b9c25261e/1015f/MainAfter.jpg"
                    class="w-full h-auto max-w-xl mx-auto rounded-lg pb-5" alt="image description">

                <hr>
                <p class="text-end text-gray-500 p-2 me-2">Selengkapnya</p>
            </div>
            <div class="mt-5 block w-full bg-white rounded-lg shadow">
                <div class="relative p-1 flex flex-row">
                    <img class="w-10 h-10 rounded-full ms-5 mt-2 mb-2"
                        src="https://png.pngtree.com/png-vector/20191101/ourmid/pngtree-cartoon-color-simple-male-avatar-png-image_1934459.jpg"
                        alt="Rounded avatar">
                    <p class="ms-2 mt-2 pt-2">Anonymous</p>
                </div>
                <hr>
                <p class="mx-auto p-4 text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Molestiae
                    laborum
                    suscipit,
                    deleniti nam officia, quidem est perspiciatis corporis necessitatibus quaerat ipsum
                    obcaecati vero, hic sint rem eius unde magni corrupti.</p>

                <img srcset="https://letsenhance.io/static/8f5e523ee6b2479e26ecc91b9c25261e/1015f/MainAfter.jpg"
                    class="w-full h-auto max-w-xl mx-auto rounded-lg pb-5" alt="image description">

                <hr>
                <p class="text-end text-gray-500 p-2 me-2">Selengkapnya</p>
            </div>
        </div>
    </div>
    <div class="basis-1/2">

    </div>



    </div>
    </div>
</x-app-layout>
