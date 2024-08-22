<x-master>
    <x-slot:pagetitle>
        Home
    </x-slot:pagetitle>
    <x-slot:heading>
        Home Page
    </x-slot:heading>
    <h1 class="font-bold">Hello, {{ $user }}</h1>
    <div class="container mt-3">
        <x-job-table :list="$list"/>
    </div>
</x-master>
