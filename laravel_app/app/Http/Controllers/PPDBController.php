<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PPDBController extends Controller
{
public function index()
{
    $sliderItems = [
        [
            'image' => asset('images/image.png'), // path gambar
            'thumb' => asset('images/image.png'), // thumbnail (boleh sama)
            'full'  => asset('images/image.png'), // gambar ukuran penuh
            'alt'   => 'Gambar 1 Deskripsi' // deskripsi alt
        ],
        [
            'image' => asset('images/image.png'),
            'thumb' => asset('images/image.png'),
            'full'  => asset('images/image.png'),
            'alt'   => 'Gambar 2 Deskripsi'
        ],
        // Tambahkan lagi sesuai kebutuhan
    ];

    return view('ppdb', compact('sliderItems'));
}

}