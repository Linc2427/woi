<x-master>
    <x-slot:pagetitle>
        Tambah Job
    </x-slot:pagetitle>
    <x-slot:heading>
        Tambah Pekerjaan
    </x-slot:heading>

    <div class="container mt-3">
        <form action="{{ route('perusahaan.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nama_perusahaan" class="block text-gray-700 font-bold mb-2">Nama Perusahaan:</label>
                <input type="text" id="nama_perusahaan" name="nama_perusahaan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="lokasi" class="block text-gray-700 font-bold mb-2">Lokasi:</label>
                <input type="text" id="lokasi" name="lokasi" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="posisi" class="block text-gray-700 font-bold mb-2">Posisi:</label>
                <input type="text" id="posisi" name="posisi" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="status" class="block text-gray-700 font-bold mb-2">Status:</label>
                <select id="status" name="status" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    <option value="Applied">Applied</option>
                    <option value="Test">Test</option>
                    <option value="Accepted">Accepted</option>
                    <option value="Rejected">Rejected</option>
                </select>
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
        </form>
    </div>
</x-master>
