<x-app-layout>
    <div class="py-2">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <h2 class="py-3 text-3xl font-bold">DATA CABANG</h2>
            <div class=" overflowhidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900">
                    <br /><br />
                    <div class="flex flex-col">
                        <div class="-m-1.5 overflow-x-auto">
                            <div class="p-1.5 min-w-full inline-block align-middle">

                                <div class="py-3 ">
                                    <x-primary-button tag="a" href="#">Tambah Cabang Baru</x-primary-button>
                                </div>

                                <div class="border rounded-lg overflow-hidden border-gray-700">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-900">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-white uppercase">Name</th>
                                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-white uppercase">Age</th>
                                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-white uppercase">Address</th>
                                                <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-white uppercase">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-700">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">John Brown</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">45</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">New York No. 1 Lake Park</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                    <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">Jim Green</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">27</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">London No. 1 Lake Park</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                    <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">Joe Black</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">31</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">Sidney No. 1 Lake Park</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                    <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
