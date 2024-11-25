<x-admin-layout>
    <div class="p-4 sm:ml-64">
        <div class="p-4 rounded-lg bg-gray-50 dark:border-gray-700 mt-14">
            <h1 class="text-xl mb-5">Create OPD</h1>
            <form class="max-sm-auto">
                @csrf
                <div class="mb-5">
                    <label for="opdname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Panjang
                        OPD</label>
                    <input type="text" id="opdname" name="opdname"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Nama Panjang OPD" required />
                </div>
                <div class="mb-5">
                    <label for="opdShortName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Singkat OPD</label>
                    <input type="text" id="opdShortName" name="opdShortName"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Nama Singkat OPD" required />
                </div>
                <div class="mb-5">
                    <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                        an
                        option</label>
                    <select id="status" name="opdStatus"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Pilih status</option>
                        <option value="active">Active</option>
                        <option value="unactive">Unactive</option>
                    </select>
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
            </form>
        </div>
    </div>

</x-admin-layout>
