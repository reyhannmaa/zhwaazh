<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    // Menampilkan semua planet di halaman utama
    public function index()
    {
        $planets = Planet::all();
        return view('planets.index', compact('planets'));
    }

    // Menampilkan detail satu planet secara spesifik
    public function show($id)
    {
        $planet = Planet::findOrFail($id);
        return view('planets.show', compact('planet'));
    }
}