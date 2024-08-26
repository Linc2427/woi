@php use Carbon\Carbon; @endphp
<x-master>
    <x-slot:pagetitle>
        Detail
    </x-slot:pagetitle>
    <x-slot:heading>
        Job Detail
    </x-slot:heading>
    <div class="container mt-3">
        <h1 class="text-center font-bold text-3xl">{{$detail['nama_perusahaan']}}</h1>
        <p class="text text-lg">Posisi yang dilamar: {{$detail['posisi']}}</p>
        <p class="text text-lg">Status: {{$detail['status']}}</p>
        @if($detail['status'] === 'Test')
            <p class="text text-lg font-bold text-red-500">Tanggal Test: {{ Carbon::parse($detail['tanggal_test'])->format('d M Y') }}</p>
            <p class="text text-lg font-bold text-red-500">Pukul: {{ Carbon::parse($detail['tanggal_test'])->format('H:i') }}</p>
        @endif
        <p class="text text-lg">Tanggal Lamaran: {{$detail['created_at']->format('d M Y')}}</p>
    </div>
</x-master>
