<x-admin-layout>
    <div class="p-4 sm:ml-64">
        <div class="flex p-4 mb-4 mt-14 rounded bg-gray-50 dark:bg-gray-800">
            <table id="default-table">
                <thead>
                    <tr>
                        <th>
                            <span class="flex items-center">
                                NO
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                NAMA
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                EMAIL
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                NO. TELEPON
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                ROLE
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                STATUS
                            </span>
                        </th>
                        <th>
                            <span class="flex items-center">
                                AKSI
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>BKPSDM</td>
                        <td>bkpsdm@gmail.com</td>
                        <td>088888888888</td>
                        <td>OPD</td>
                        <td>Aktif</td>
                        <td class="flex">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                            </svg>

                            <a href="#">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>BPBD</td>
                        <td>bpbd@gmail.com</td>
                        <td>088888888888</td>
                        <td>OPD</td>
                        <td>Aktif</td>
                        <td class="flex">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                            </svg>

                            <a href="#">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>

</x-admin-layout>
<script>
    if (document.getElementById("default-table") && typeof simpleDatatables.DataTable !== 'undefined') {
        const dataTable = new simpleDatatables.DataTable("#default-table", {
            searchable: true,
            sortable: false
        });
    }
</script>