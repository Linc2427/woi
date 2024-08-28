<x-master>
    <x-slot:pagetitle>
        Edit Perusahaan
    </x-slot:pagetitle>
    <x-slot:heading>
        Edit Data Perusahaan
    </x-slot:heading>

    <div class="container mx-auto mt-8">
        <form action="{{ route('perusahaan.update', $perusahaan->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nama_perusahaan" class="block text-gray-700">Nama Perusahaan</label>
                <input type="text" name="nama_perusahaan" id="nama_perusahaan" value="{{ old('nama_perusahaan', $perusahaan->nama_perusahaan) }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600">
            </div>

            <div class="mb-4">
                <label for="lokasi" class="block text-gray-700">Lokasi</label>
                <input type="text" name="lokasi" id="lokasi" value="{{ old('lokasi', $perusahaan->lokasi) }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600">
            </div>

            <div class="mb-4">
                <label for="posisi" class="block text-gray-700">Posisi</label>
                <input type="text" name="posisi" id="posisi" value="{{ old('posisi', $perusahaan->posisi) }}" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600">
            </div>

            <div class="mb-4">
                <label for="status" class="block text-gray-700">Status</label>
                <select name="status" id="status" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600">
                    <option value="Applied" {{ $perusahaan->status == 'Applied' ? 'selected' : '' }}>Applied</option>
                    <option value="Test" {{ $perusahaan->status == 'Test' ? 'selected' : '' }}>Test</option>
                    <option value="Accepted" {{ $perusahaan->status == 'Accepted' ? 'selected' : '' }}>Accepted</option>
                    <option value="Rejected" {{ $perusahaan->status == 'Rejected' ? 'selected' : '' }}>Rejected</option>
                </select>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Update</button>
            </div>
        </form>
    </div>
</x-master>
