<x-master>
    <x-slot:pagetitle>
        Tambah Job
    </x-slot:pagetitle>
    <x-slot:heading>
        Tambah Pekerjaan
    </x-slot:heading>

    <div class="container mt-3" x-data="{ showDatepicker: false }">
        <form action="{{ route('perusahaan.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nama_perusahaan" class="block text-gray-700 font-bold mb-2 dark:text-white">Nama Perusahaan:</label>
                <input type="text" id="nama_perusahaan" name="nama_perusahaan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="lokasi" class="block text-gray-700 font-bold mb-2 dark:text-white">Lokasi:</label>
                <input type="text" id="lokasi" name="lokasi" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="posisi" class="block text-gray-700 font-bold mb-2 dark:text-white">Posisi:</label>
                <input type="text" id="posisi" name="posisi" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="status" class="block text-gray-700 font-bold mb-2 dark:text-white">Status:</label>
                <select id="status" name="status" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required
                        x-on:change="showDatepicker = ($event.target.value === 'Test')">
                    <option value="Applied">Applied</option>
                    <option value="Test">Test</option>
                    <option value="Accepted">Accepted</option>
                    <option value="Rejected">Rejected</option>
                </select>
            </div>

            <!-- Datepicker muncul ketika opsi "Test" dipilih -->
            <div class="mb-4" x-show="showDatepicker" x-cloak>
                <label for="tanggal_test" class="block text-gray-700 font-bold mb-2 dark:text-white">Tanggal Test:</label>
                <input type="date" id="tanggal_test" name="tanggal_test" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline dark:text-white">Submit</button>
        </form>
    </div>
</x-master>
