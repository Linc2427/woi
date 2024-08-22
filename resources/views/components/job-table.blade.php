<div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10">
    <table class="min-w-full bg-white border border-gray-200">
        <thead>
        <tr class="bg-gray-100">
            <td class="border w-1/10 py-4 px-6 text-left text-gray-600 font-bold">No.</td>
            <td class="border w-1/4 py-4 px-6 text-left text-gray-600 font-bold">Nama Perusahaan</td>
            <td class="border w-1/4 py-4 px-6 text-left text-gray-600 font-bold">Lokasi</td>
            <td class="border w-1/4 py-4 px-6 text-left text-gray-600 font-bold">Posisi</td>
            <td class="border w-1/4 py-4 px-6 text-left text-gray-600 font-bold">Status</td>
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
                <td class="border py-4 px-6 border-b border-gray-200"><span class="bg-red-500 text-white py-1 px-2 rounded-full text-xs">{{ $items->status }}</span></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
