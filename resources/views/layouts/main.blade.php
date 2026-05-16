<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solar System Explorer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- 1. Tambahkan CSS Swiper.js di sini -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <style>
        /* CSS yang sudah ada sebelumnya (Background, Swup, Loading Spinner) tetap dipertahankan */
        body {
            background-color: #0B0D17;
            color: #ffffff;
            /* Kita tambahkan background bintang-bintang sederhana menggunakan gambar/CSS radial */
            background-image: radial-gradient(circle at center, #1B2735 0%, #090A0F 100%);
            min-height: 100vh;
        }

        #swup { transition: opacity 0.4s ease-in-out, transform 0.4s ease-in-out; opacity: 1; transform: translateY(0); }
        html.is-animating #swup { opacity: 0; transform: translateY(15px); }
        
        .loading-screen { position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: #0B0D17; display: flex; justify-content: center; align-items: center; z-index: 9999; opacity: 0; pointer-events: none; transition: opacity 0.3s; }
        html.is-rendering .loading-screen { opacity: 1; pointer-events: all; }
        .spinner { width: 50px; height: 50px; border: 5px solid rgba(255,255,255,0.1); border-top-color: #3b82f6; border-radius: 50%; animation: spin 1s infinite linear; }
        @keyframes spin { to { transform: rotate(360deg); } }

        /* --- KUSTOMISASI SWIPER SLIDER --- */
        .swiper-slide {
            /* Mengatur agar lebar slide mengikuti isi kontennya */
            width: 300px; 
            transition: all 0.3s ease;
        }
        @media (min-width: 768px) {
            .swiper-slide { width: 500px; }
        }
        /* Mengubah warna panah navigasi menjadi putih */
        .swiper-button-next, .swiper-button-prev {
            color: #ffffff !important;
        }
    </style>
</head>
<body class="antialiased overflow-x-hidden">

    <nav class="p-6 text-center">
        <a href="{{ route('planets.index') }}" class="text-3xl font-bold tracking-widest text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-500 hover:opacity-80 transition">
            REHAN TATA SURYA
        </a>
    </nav>

    <div class="loading-screen"><div class="spinner"></div></div>

    <!-- Ubah bagian ini agar menggunakan lebar penuh (w-full) dan mencegah scroll horizontal (overflow-hidden) -->
    <main id="swup" class="transition-fade w-1/2 overflow-hidden mx-auto flex-grow flex flex-col justify-center min-h-[80vh]">
        @yield('content')
    </main>

    <!-- Memanggil library Swup dan Swiper -->
    <script src="https://unpkg.com/swup@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <script>
        const swup = new Swup();

        function initSlider() {
            if (document.querySelector('.planet-slider')) {
                new Swiper('.planet-slider', {
                    effect: 'coverflow',
                    grabCursor: true,
                    centeredSlides: true,
                    slidesPerView: 'auto',
                    loop: true,
                    coverflowEffect: {
                        rotate: 0, 
                        stretch: 120, // <-- UBAH NILAI INI. Semakin besar angkanya, semakin jauh jarak antar planet
                        depth: 250,   // Kedalaman 3D sedikit dikurangi agar planet di belakang tidak terlalu kecil
                        modifier: 1,
                        slideShadows: false, 
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });
            }
        }

        // Jalankan saat pertama kali web dibuka
        initSlider();

        // Jalankan ulang setiap kali Swup memuat halaman baru
        swup.hooks.on('page:view', () => {
            initSlider();
        });
    </script>
</body>
</html>