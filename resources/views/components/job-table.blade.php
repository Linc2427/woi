@php use Carbon\Carbon; @endphp
<div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10 dark:bg-gray-800">
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 dark:bg-gray-900 dark:border-gray-700 table-auto">
            <thead>
            <tr class="bg-gray-100 dark:bg-gray-700">
                <td class="border w-1/10 py-4 px-6 text-left text-gray-600 dark:text-gray-300 font-bold">No.</td>
                <td class="border w-1/4 py-4 px-6 text-left text-gray-600 dark:text-gray-300 font-bold">Nama Perusahaan</td>
                <td class="border w-1/4 py-4 px-6 text-left text-gray-600 dark:text-gray-300 font-bold">Lokasi</td>
                <td class="border w-1/4 py-4 px-6 text-left text-gray-600 dark:text-gray-300 font-bold">Posisi</td>
                <td class="border w-1/4 py-4 px-6 text-left text-gray-600 dark:text-gray-300 font-bold">Status</td>
                <td class="border w-1/4 py-4 px-6 text-left text-gray-600 dark:text-gray-300 font-bold">Tanggal Apply</td>
                <td class="border w-1/4 py-4 px-6 text-gray-600 dark:text-gray-300 font-bold text-center">Action</td>
            </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-800">
            @php
                $no = ($list->currentPage() - 1) * $list->perPage() + 1;
            @endphp
            @foreach($list as $items)
                <tr class="border-b border-gray-200 dark:border-gray-700">
                    <td class="border py-4 px-6 text-center text-gray-600 dark:text-gray-300">{{ $no++ }}</td>
                    <td class="border py-4 px-6 text-gray-600 dark:text-gray-300">{{ $items->nama_perusahaan }}</td>
                    <td class="border py-4 px-6 text-gray-600 dark:text-gray-300">{{ $items->lokasi }}</td>
                    <td class="border py-4 px-6 text-gray-600 dark:text-gray-300">{{ $items->posisi }}</td>
                    <td class="border py-4 px-6">
                        <span class="{{ $items->status === 'Applied' ? 'bg-indigo-600 dark:bg-indigo-500 text-white' : ($items->status === 'Test' ? 'bg-lime-500 dark:bg-lime-400 text-white' : ($items->status === 'Accepted' ? 'bg-green-500 dark:bg-green-400 text-white' : 'bg-red-500 dark:bg-red-400 text-white')) }} py-1 px-2 rounded-full text-xs font-bold">{{ $items->status }}</span>
                    </td>
                    <td class="border py-4 px-6 text-gray-600 dark:text-gray-300">{{ \Carbon\Carbon::parse($items['created_at'])->format('d M Y') }}</td>
                    <td class="border py-4 px-6 text-center">
                        <div class="flex justify-center space-x-2">
                            <a href="/job-detail/{{ $items->id }}" class="focus:outline-none text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 dark:bg-violet-800 dark:hover:bg-violet-900 dark:text-white font-medium rounded-lg text-sm px-5 py-2.5">Detail</a>
                            <a href="{{ route('perusahaan.edit', $items->id) }}" class="focus:outline-none text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 font-medium rounded-lg text-sm px-5 py-2.5">Edit</a>
                            <form action="{{ route('perusahaan.destroy', $items->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="focus:outline-none text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 font-medium rounded-lg text-sm px-5 py-2.5">Delete</button>
                            </form>
                        </div>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
        <div class="mt-3 mb-3 px-2 text-gray-600 dark:text-gray-300">
            {{ $list->links() }}
        </div>
</div>
