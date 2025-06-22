<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrganizationController;
use Illuminate\Http\Request;
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\IdentitasSekolahController;
use App\Http\Controllers\SejarahSekolahController;
use App\Http\Controllers\ProfilSekolahController;
use App\Models\Galeri;

Route::get('/', function () {
    return view('home');
});

Route::get('/fasilitas', function () {
    return view('fasilitas');
});

Route::get('/kontak', function () {
    return view('kontak');
})->name('contact');

// Route::get('/profil', function () {
//     return view('profil');
// });

Route::get('/profil/profil', function () {
    return view('profil');
});

Route::get('/profil/visimisi', function () {
    return view('visimisi');
});

Route::get('/profil/struktur', function () {
    return view('struktur');
});

Route::get('/profil/gurustaff', function () {
    return view('gurustaff');
});

Route::get('/profil/principal', function () {
    return view('profil.principal');
});

Route::get('/akademik/kalenderakademik', function () {
    return view('kalenderakademik');
});

Route::get('/akademik/ekstrakurikuler', function () {
    return view('ekstrakurikuler');
});

Route::get('/galeri', function () {
    return view('galeri');
});


Route::get('/kontak', function () {
    return view('kontak');
})->name('contact');

Route::get('/ppdb', [PPDBController::class, 'index'])->name('ppdb.index');

Route::get('/prestasi/{id}', [App\Http\Controllers\PrestasiController::class, 'show'])->name('prestasi.show');
Route::get('/prestasi', [App\Http\Controllers\PrestasiController::class, 'index'])->name('prestasi.index');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/profil', [ProfilSekolahController::class, 'index'])->name('profil');
// Route::get('/profil', [ProfilSekolahController::class, 'index'])->name('profil');



Route::get('/galeri', function () {
    $galeris = Galeri::latest()->get();
    return view('galeri', compact('galeris'));
});
