@extends('layouts.app')

@section('content')
<!-- Header Section -->
<div class="container mb-5 py-5 px-4">
    <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
            <div class="position-relative overflow-hidden rounded-4 shadow-lg" style="height: 300px;">
                <div class="position-absolute w-100 h-100" style="background: #1b5e20 url('{{ asset('images/ekskul-bg.jpg') }}') center/cover;"></div>
                <div class="position-relative d-flex flex-column align-items-center justify-content-center h-100 text-white px-3">
                    <h1 class="display-5 fw-bold mb-2" style="font-family: 'Merriweather', serif;">BERITA</h1>
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

{{-- Konten Detail Berita --}}
<div class="container py-5">
    <img src="{{ asset('storage/' . $berita->gambar) }}" class="img-fluid rounded mb-4" style="max-width:700px; display:block; margin:0 auto;" alt="{{ $berita->judul }}">
    <h1 class="mb-3">{{ $berita->judul }}</h1>
    <p class="text-muted">
        <i class="far fa-calendar me-2"></i>
        {{ \Carbon\Carbon::parse($berita->tanggal)->translatedFormat('d F Y') }}
    </p>
    <div>{!! $berita->isi !!}</div>
</div>

@endsection
