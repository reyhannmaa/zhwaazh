@extends('layouts.main2')

@section('content')
<div class="w-full relative py-12">
    <!-- Kontainer Swiper -->
    <div class="swiper planet-slider w-full h-full">
        <div class="swiper-wrapper flex items-center">
            
            @foreach($planets as $planet)
            <div class="swiper-slide flex flex-col items-center justify-center">
                <!-- Link menuju halaman detail -->
                <a href="{{ route('planets.show', $planet->id) }}" class="group block w-full text-center outline-none">
                    
                    <!-- Area Gambar Planet -->
                    <div class="relative w-full aspect-square flex items-center justify-center mb-6 drop-shadow-[0_0_30px_rgba(255,255,255,0.1)] group-hover:drop-shadow-[0_0_50px_rgba(59,130,246,0.3)] transition-all duration-500">
                        @if($planet->image_url)
                            <img src="{{ asset($planet->image_url) }}" alt="Gambar {{ $planet->name }}" class="w-full h-full object-contain">
                        @else
                            <div class="w-4/5 h-4/5 bg-gradient-to-tr from-gray-700 to-gray-900 rounded-full flex items-center justify-center border-4 border-gray-800">
                                <span class="text-gray-500 text-sm">No Image</span>
                            </div>
                        @endif
                    </div>

                    <!-- Judul Planet (Terlihat seperti di Screenshot_71.jpg) -->
                    <h2 class="text-5md md:text-5md font-extrabold tracking-widest uppercase text-white drop-shadow-lg group-hover:text-blue-400 transition-colors duration-300">
                        {{ $planet->name }}
                    </h2>
                </a>
            </div>
            @endforeach

        </div>
        
        <!-- Panah Navigasi Kiri & Kanan -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
@endsection