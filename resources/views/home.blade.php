<x-master>
    <x-slot:pagetitle>
        Home
    </x-slot:pagetitle>
    <x-slot:heading>
        Home Page
    </x-slot:heading>
    <h1 class="font-bold">Hello, {{ $user }}</h1>
    <div class="container mt-3">
        <div class="container md:container animate-fadeOut">
            @if(session('success'))
                <div class="bg-green-500 text-white p-4 rounded-lg mb-3 animate-fadeOut">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="bg-red-500 text-white p-4 rounded-lg mb-3 animate-fadeOut">
                    {{ session('error') }}
                </div>
            @endif
        </div>
        <div class="container md:container md:mx-0 flex justify-end">
            <a href="{{ route('perusahaan.create') }}" class="flex justify-end focus:outline-none text-black bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-cyan-900 mb-3">Tambah</a>
        </div>
        <div class="container">
            <input type="text" name="search" id="search" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-600 dark:focus:ring-amber-100 dark:text-blue-800 dark:bg-gray-600 mb-3" placeholder="Search..." x-model="searchList">
        </div>
        <x-job-table :list="$list"/>
    </div>
</x-master>
