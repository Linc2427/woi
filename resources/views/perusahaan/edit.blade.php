<x-master>
    <x-slot:pagetitle>
        Edit Perusahaan
    </x-slot:pagetitle>
    <x-slot:heading>
        Edit Data Perusahaan
    </x-slot:heading>

    <div class="container mx-auto mt-8" x-data="{ showDatepicker: '{{ $perusahaan->status }}' === 'Test' }">
        <form action="{{ route('perusahaan.update', $perusahaan->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nama_perusahaan" class="block text-gray-700 dark:text-white">Nama Perusahaan</label>
                <input type="text" name="nama_perusahaan" id="nama_perusahaan" value="{{ old('nama_perusahaan', $perusahaan->nama_perusahaan) }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600 dark:text-black">
            </div>

            <div class="mb-4">
                <label for="lokasi" class="block text-gray-700 dark:text-white">Lokasi</label>
                <input type="text" name="lokasi" id="lokasi" value="{{ old('lokasi', $perusahaan->lokasi) }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600 dark:text-black">
            </div>

            <div class="mb-4">
                <label for="posisi" class="block text-gray-700 dark:text-white">Posisi</label>
                <input type="text" name="posisi" id="posisi" value="{{ old('posisi', $perusahaan->posisi) }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600 dark:text-black">
            </div>

            <div class="mb-4">
                <label for="status" class="block text-gray-700 dark:text-white">Status</label>
                <select id="status" name="status" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:text-black" required
                        x-on:change="showDatepicker = ($event.target.value === 'Test')">
                    <option value="Applied" {{ $perusahaan->status == 'Applied' ? 'selected' : '' }}>Applied</option>
                    <option value="Test" {{ $perusahaan->status == 'Test' ? 'selected' : '' }}>Test</option>
                    <option value="Accepted" {{ $perusahaan->status == 'Accepted' ? 'selected' : '' }}>Accepted</option>
                    <option value="Rejected" {{ $perusahaan->status == 'Rejected' ? 'selected' : '' }}>Rejected</option>
                </select>
            </div>

            <div class="mb-4" x-show="showDatepicker" x-cloak>
                <label for="tanggal_test" class="block text-gray-700 dark:text-white">Tanggal Test</label>
                <input type="date" name="tanggal_test" id="tanggal_test" value="{{ old('tanggal_test', $perusahaan->tanggal_test) }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600">
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Update
                </button>
            </div>
        </form>
    </div>
</x-master>
