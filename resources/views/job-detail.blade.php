<x-master>
<x-slot:pagetitle>
    Detail
</x-slot:pagetitle>
<x-slot:heading>
    Job Detail
</x-slot:heading>
<div class="container mt-3">
    <h1 class="text-center font-bold">{{$detail['nama_perusahaan']}}</h1>
    <p>Posisi yang dilamar: {{$detail['posisi']}}</p>
    <p>Status: {{$detail['status']}}</p>
    <p>Tanggal Lamaran: {{$detail['created_at']->format('d M Y')}}</p>
</div>
</x-master>
