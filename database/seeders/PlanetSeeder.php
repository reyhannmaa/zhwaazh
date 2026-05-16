<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Planet;

class PlanetSeeder extends Seeder
{
    public function run(): void
    {
        $planets = [
            [
                'name' => 'Merkurius',
                'description' => 'Planet terkecil dan terdekat dengan Matahari di Tata Surya kita.',
                'mass' => '3.30 × 10^23 kg',
                'characteristics' => 'Tidak memiliki atmosfer untuk menahan panas, sehingga suhu permukaannya sangat ekstrem (sangat panas di siang hari, sangat dingin di malam hari). Penuh dengan kawah seperti Bulan.',
                'satellites' => [], // Array kosong karena tidak punya satelit
                'distance_to_sun' => '57.9 juta km',
                'distance_to_earth' => '91.7 juta km (terdekat)',
                'image_url' => 'images/planets/merkuriuspl.png',
            ],
            [
                'name' => 'Venus',
                'description' => 'Planet kedua dari Matahari dan sering disebut sebagai "kembaran" Bumi karena ukuran dan strukturnya yang mirip.',
                'mass' => '4.87 × 10^24 kg',
                'characteristics' => 'Planet terpanas di tata surya kita karena efek rumah kaca yang ekstrem dari atmosfer tebal karbon dioksidanya. Berotasi dengan arah yang berlawanan dari kebanyakan planet.',
                'satellites' => [], 
                'distance_to_sun' => '108.2 juta km',
                'distance_to_earth' => '41.4 juta km (terdekat)',
                'image_url' => 'images/planets/venuspl.png',
            ],
            [
                'name' => 'Bumi',
                'description' => 'Satu-satunya planet yang diketahui memiliki kehidupan. Permukaannya sebagian besar tertutup oleh lautan air cair.',
                'mass' => '5.97 × 10^24 kg',
                'characteristics' => 'Memiliki atmosfer yang kaya nitrogen dan oksigen, suhu yang stabil, serta medan magnet yang kuat untuk melindungi dari radiasi matahari.',
                'satellites' => ['Bulan'],
                'distance_to_sun' => '149.6 juta km',
                'distance_to_earth' => '0 km',
                'image_url' => 'images/planets/bumipl.png',
            ],
            [
                'name' => 'Mars',
                'description' => 'Sering disebut sebagai Planet Merah karena kandungan debu besi oksida (karat) di permukaannya.',
                'mass' => '6.39 × 10^23 kg',
                'characteristics' => 'Memiliki gunung berapi terbesar di tata surya (Olympus Mons), lembah yang sangat dalam (Valles Marineris), dan es di kutubnya. Atmosfernya sangat tipis.',
                'satellites' => ['Phobos', 'Deimos'],
                'distance_to_sun' => '227.9 juta km',
                'distance_to_earth' => '78.3 juta km (rata-rata)',
                'image_url' => 'images/planets/marspl.png',
            ],
            [
                'name' => 'Jupiter',
                'description' => 'Planet terbesar di Tata Surya, sebuah raksasa gas yang ukurannya bisa menampung lebih dari 1.300 Bumi.',
                'mass' => '1.898 × 10^27 kg',
                'characteristics' => 'Terdiri dari hidrogen dan helium. Memiliki badai raksasa yang sudah berlangsung ratusan tahun yang dikenal sebagai "Bintik Merah Raksasa".',
                'satellites' => ['Io', 'Europa', 'Ganymede', 'Callisto', '+ 91 lainnya'],
                'distance_to_sun' => '778.5 juta km',
                'distance_to_earth' => '628.7 juta km',
                'image_url' => 'images/planets/jupiterpl.png',
            ],
            [
                'name' => 'Saturnus',
                'description' => 'Raksasa gas kedua terbesar, terkenal karena sistem cincinnya yang terang, luas, dan indah.',
                'mass' => '5.68 × 10^26 kg',
                'characteristics' => 'Kepadatannya sangat rendah; ini adalah satu-satunya planet yang kepadatannya lebih ringan dari air. Cincinnya terbuat dari bongkahan es dan batu.',
                'satellites' => ['Titan', 'Enceladus', 'Mimas', '+ 143 lainnya'],
                'distance_to_sun' => '1.43 miliar km',
                'distance_to_earth' => '1.2 miliar km',
                'image_url' => 'images/planets/saturnuspl.png',
            ],
            [
                'name' => 'Uranus',
                'description' => 'Planet raksasa es pertama yang ditemukan menggunakan teleskop. Memiliki warna biru muda yang khas.',
                'mass' => '8.68 × 10^25 kg',
                'characteristics' => 'Berotasi pada sisinya (sumbu putarnya hampir sejajar dengan bidang orbitnya), kemungkinan akibat tabrakan besar di masa lalu. Suhunya sangat dingin.',
                'satellites' => ['Titania', 'Oberon', 'Umbriel', 'Ariel', 'Miranda', '+ 22 lainnya'],
                'distance_to_sun' => '2.87 miliar km',
                'distance_to_earth' => '2.72 miliar km',
                'image_url' => 'images/planets/uranuspl.png',
            ],
            [
                'name' => 'Neptunus',
                'description' => 'Planet terjauh kedelapan dari Matahari, raksasa es yang gelap, dingin, dan memiliki angin supersonik.',
                'mass' => '1.02 × 10^26 kg',
                'characteristics' => 'Memiliki angin terkencang di tata surya (mencapai lebih dari 2.000 km/jam). Berwarna biru tua karena kandungan metana di atmosfernya.',
                'satellites' => ['Triton', 'Proteus', 'Nereid', '+ 11 lainnya'],
                'distance_to_sun' => '4.5 miliar km',
                'distance_to_earth' => '4.3 miliar km',
                'image_url' => 'images/planets/neptunuspl.png',
            ]
        ];

        // Looping untuk memasukkan data ke database
        foreach ($planets as $planet) {
            Planet::create($planet);
        }
    }
}