<section>


    <form class="space-y-6" method="POST" action="">
        @csrf
        <p>Apakah anda bersedia menampilkan nama anda pada laporan ?</p>
        <div class="flex">
            <div class="flex items-center me-4">
                <input id="inline-radio" type="radio" value="" name="inline-radio-group"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="inline-radio" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ya</label>
            </div>
            <div class="flex items-center me-4">
                <input id="inline-2-radio" type="radio" value="" name="inline-radio-group"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="inline-2-radio"
                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tidak</label>
            </div>
        </div>

        <hr class="w-full h-0.5 mx-auto my-4 bg-gray-200 border-0 rounded md:my-4 dark:bg-gray-700">


        <div class="mb-6">
            <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
            <select id="kategori"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                <option>OPD A</option>
                <option>OPD B</option>
                <option>OPD C</option>
                <option>OPD D</option>
            </select>
        </div>
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
            <input type="text" name="judul" id="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                placeholder="Judul Laporan" value="" required />
        </div>
        <div class="mb-6">
            <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi
                Laporan</label>
            <input type="text" id="large-input" name="deskripsiLaporan"
                class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Deskripsi Laporan..." value="">
        </div>
        <div class="mb-6">
            <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
            <input type="text" id="large-input" name="userAddress"
                class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Alamat" value="">
        </div>
        <div class="mb-6">

            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Unggah Foto
            </label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="user_avatar_help" id="user_avatar" type="file">
            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">Max 2 Mb</div>
        </div>
        <hr class="w-full h-0.5 mx-auto my-4 bg-gray-200 border-0 rounded md:my-4 dark:bg-gray-700">

        <div class="mt-4">
            <button type="submit"
                class="focus:outline-none text-white bg-green-400 hover:bg-green-500 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-3 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-600 dark:focus:ring-red-900">Lapor</button>
            <button type="submit"
                class="focus:outline-none text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-3 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-600 dark:focus:ring-red-900">Batal</button>
        </div>
    </form>
</section>
