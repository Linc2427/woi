@php use Carbon\Carbon; @endphp
<div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10">
    <div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-200 table-auto">
        <thead>
        <tr class="bg-gray-100">
            <td class="border w-1/10 py-4 px-6 text-left text-gray-600 font-bold">No.</td>
            <td class="border w-1/4 py-4 px-6 text-left text-gray-600 font-bold">Nama Perusahaan</td>
            <td class="border w-1/4 py-4 px-6 text-left text-gray-600 font-bold">Lokasi</td>
            <td class="border w-1/4 py-4 px-6 text-left text-gray-600 font-bold">Posisi</td>
            <td class="border w-1/4 py-4 px-6 text-left text-gray-600 font-bold">Status</td>
            <td class="border w-1/4 py-4 px-6 text-left text-gray-600 font-bold">Tanggal Apply</td>
            <td class="border w-1/4 py-4 px-6 text-gray-600 font-bold text-center">Action</td>
        </tr>
        </thead>
        <tbody class="bg-white">
        @php $no = 1; @endphp
        @foreach($list as $items)
            <tr>
                <td class="border py-4 px-6 border-b border-gray-200 text-center">{{ $no++ }}</td>
                <td class="border py-4 px-6 border-b border-gray-200">{{ $items->nama_perusahaan }}</td>
                <td class="border py-4 px-6 border-b border-gray-200">{{ $items->lokasi }}</td>
                <td class="border py-4 px-6 border-b border-gray-200">{{ $items->posisi }}</td>
                <td class="border py-4 px-6 border-b border-gray-200">
                    <span class="{{ $items->status === 'Applied' ? 'bg-indigo-600 text-white' : ($items->status === 'Test' ? 'bg-lime-500 text-white' : ($items->status === 'Accepted' ? 'bg-green-500 text-white' : 'bg-red-500 text-white')) }} py-1 px-2 rounded-full text-xs font-bold">{{ $items->status }}</span>
                </td>
                <td class="border py-4 px-6 border-gray-200">{{ Carbon::parse($items['created_at']) ->format('d M Y')  }}</td>
                <td class="border py-4 px-6 border-gray-200 flex">
                    <a href="/job-detail/{{ $items->id }}" class="focus:outline-none text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-cyan-900">Detail</a>
                    <a href="{{ route('perusahaan.edit', $items->id) }}" class="focus:outline-none text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-cyan-900">Edit</a>
                    <!-- Tombol Delete -->
                    <form action="{{ route('perusahaan.destroy', $items->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="focus:outline-none text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-cyan-900">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</div>
