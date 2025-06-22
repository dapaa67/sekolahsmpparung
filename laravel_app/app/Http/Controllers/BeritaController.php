<?php
namespace App\Http\Controllers;

use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $semuaBerita = \App\Models\Berita::latest()->paginate(6); // atau ->get() kalau mau semua langsung
        return view('berita.index', compact('semuaBerita'));
    }

    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        return view('berita.show', compact('berita'));
    }
}
