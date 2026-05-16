<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    use HasFactory;

    // Menentukan kolom apa saja yang boleh diisi data (Mass Assignment)
    protected $fillable = [
        'name', 
        'description', 
        'mass', 
        'characteristics', 
        'satellites', 
        'distance_to_sun', 
        'distance_to_earth', 
        'image_url'
    ];

    // Mengubah format string JSON dari database menjadi Array di PHP secara otomatis
    protected $casts = [
        'satellites' => 'array',
    ];
}