<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('planets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('mass'); // Contoh: "5.97 × 10^24 kg"
            $table->text('characteristics');
            $table->json('satellites')->nullable(); // Format JSON untuk daftar nama satelit
            $table->string('distance_to_sun'); // Jarak ke matahari
            $table->string('distance_to_earth')->nullable(); // Jarak ke bumi
            $table->string('image_url')->nullable(); // Link atau path gambar planet
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('planets');
    }
};