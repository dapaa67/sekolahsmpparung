@extends('layouts.app') 

@section('content')
<!-- Header Section -->
<div class="container mb-5 py-5 px-4">
    <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
            <div class="position-relative overflow-hidden rounded-4 shadow-lg" style="height: 300px;">
                <div class="position-absolute w-100 h-100" style="background: #1b5e20 url('{{ asset('images/ekskul-bg.jpg') }}') center/cover;"></div>
                <div class="position-relative d-flex flex-column align-items-center justify-content-center h-100 text-white px-3">
                    <h1 class="display-5 fw-bold mb-2" style="font-family: 'Merriweather', serif;">PRESTASI</h1>
                    <div class="d-flex align-items-center">
                        <div class="border-top" style="width: 60px; border-color: #FFFF00!important;"></div>
                        <img src="{{ asset('images/logo2.png') }}" alt="Logo" class="mx-3" style="width: 100px;">
                        <div class="border-top" style="width: 60px; border-color: #FFFF00!important;"></div>
                    </div>
                    <p class="mt-3 mb-0 fs-5 fw-bold">Dokumentasi Kegiatan Sekolah</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Konten Detail Prestasi --}}
<div class="container my-5">
     <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="img-fluid rounded mb-4" style="max-width:700px; display:block; margin:0 auto;">
    <h2 class="mb-3">{{ $item->judul }}</h2>
    <p class="text-muted mb-2">
        <i class="fas fa-calendar-alt"></i>
        {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
    </p>

    <div class="mb-3">
        <strong>Skala:</strong> {{ $item->skala }}<br>
        <strong>Peserta:</strong> {{ $item->siswa }} / {{ $item->kelas }}
    </div>

    <hr>

    <div class="article-content">
        {!! nl2br(e($item->deskripsi)) !!}
    </div>
</div>

<style>
    .article-content img {
        max-width: 100px;   /* Lebar maksimal gambar */
        width: 100%;        /* Lebar gambar mengikuti parent */
        height: auto;       /* Tinggi otomatis */
        display: block;
        margin: 20px auto;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
</style>

@endsection
