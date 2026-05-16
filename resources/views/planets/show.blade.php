@extends('layouts.main')

@section('content')
<div class="mb-8">
    <a href="{{ route('planets.index') }}" class="text-blue-400 hover:text-blue-300 ml-5 flex items-center gap-2 transition">
        ← Kembali ke Tata Surya
    </a>
</div>

<div class="bg-gray-900 bg-opacity-60 rounded-3xl p-8 border border-gray-800 backdrop-blur-sm">
    <div class="flex flex-col md:flex-row gap-12">
        
        <!-- Bagian Visual -->
        <div class="md:w-1/3 flex justify-center items-start">
            @if($planet->image_url)
                <img src="{{ asset($planet->image_url) }}" alt="Gambar {{ $planet->name }}" class="w-64 h-64 object-cover rounded-full shadow-[0_0_50px_rgba(255,255,255,0.2)] hover:scale-105 transition-transform duration-500">
            @else
                <div class="w-64 h-64 bg-gradient-to-tr from-blue-900 to-gray-800 rounded-full shadow-[0_0_50px_rgba(59,130,246,0.2)]"></div>
            @endif
        </div>

        <!-- Bagian Data -->
        <div class="md:w-2/3">
            <h1 class="text-5xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-500">{{ $planet->name }}</h1>
            <p class="text-xl text-gray-300 mb-8 leading-relaxed">{{ $planet->description }}</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="bg-black bg-opacity-40 p-5 rounded-xl border border-gray-800">
                    <h3 class="text-gray-500 text-sm uppercase tracking-wider mb-1">Massa</h3>
                    <p class="text-lg font-semibold">{{ $planet->mass }}</p>
                </div>
                <div class="bg-black bg-opacity-40 p-5 rounded-xl border border-gray-800">
                    <h3 class="text-gray-500 text-sm uppercase tracking-wider mb-1">Jarak ke Matahari</h3>
                    <p class="text-lg font-semibold">{{ $planet->distance_to_sun }}</p>
                </div>
                <div class="bg-black bg-opacity-40 p-5 rounded-xl border border-gray-800">
                    <h3 class="text-gray-500 text-sm uppercase tracking-wider mb-1">Jarak ke Bumi</h3>
                    <p class="text-lg font-semibold">{{ $planet->distance_to_earth ?? 'N/A' }}</p>
                </div>
                <div class="bg-black bg-opacity-40 p-5 rounded-xl border border-gray-800">
                    <h3 class="text-gray-500 text-sm uppercase tracking-wider mb-1">Karakteristik</h3>
                    <p class="text-base text-gray-300">{{ $planet->characteristics }}</p>
                </div>
            </div>

            <!-- Daftar Satelit -->
 
           @if($planet->satellites && count($planet->satellites) > 0)
            <div class="mt-8">
                <h3 class="text-xl font-semibold mb-4 border-b border-gray-800 pb-2">Satelit Alami</h3>
                <div class="flex flex-wrap gap-2">
                    @foreach($planet->satellites as $satellite)
                        <span class="bg-blue-900 bg-opacity-30 text-blue-300 px-4 py-1.5 rounded-full text-sm border border-blue-800">
                            {{ $satellite }}
                        </span>
                    @endforeach
                </div>
            </div>
            @endif

        </div>
    </div>
</div>
@endsection