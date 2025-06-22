@extends('layouts.app')

@section('content')
<div class="container py-5">

    <!-- Header Section -->
    <div class="container mb-5 py-5 px-4">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <div class="position-relative overflow-hidden rounded-4 shadow-lg" style="height: 300px;">
                    <div class="position-absolute w-100 h-100" style="background: #1b5e20 url('{{ asset('images/ekskul-bg.jpg') }}') center/cover;"></div>
                    <div class="position-relative d-flex flex-column align-items-center justify-content-center h-100 text-white px-3">
                        <h1 class="display-5 fw-bold mb-2" style="font-family: 'Merriweather', serif;">BERITA TERKINI</h1>
                        <div class="d-flex align-items-center">
                            <div class="border-top" style="width: 60px; border-color: #FFFF00!important;"></div>
                            <img src="{{ asset('images/logo2.png') }}" alt="Logo" class="mx-3" style="width: 100px;">
                            <div class="border-top" style="width: 60px; border-color: #FFFF00!important;"></div>
                        </div>
                        <p class="mt-3 mb-0 fs-5 fw-bold">SMP ISLAM PARUNG</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Konten Utama + Sidebar --}}
    <div class="row">
        {{-- Konten Berita --}}
        <div class="col-md-8">
            <div class="row g-4">
                @foreach($semuaBerita as $item)
                    <div class="col-12 col-sm-6">
                        <a href="{{ route('berita.show', $item->slug) }}" class="text-decoration-none">
                            <article class="news-card h-100 shadow-sm rounded overflow-hidden">
                                <div class="news-image">
                                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="img-fluid w-100" style="height:200px; object-fit:cover;">
                                </div>
                                <div class="news-content p-3">
                                    <div class="news-date text-muted mb-1" style="font-size: 0.875rem;">
                                        <i class="far fa-calendar me-2"></i>{{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                                    </div>
                                    <h5 class="text-dark fw-bold">{{ $item->judul }}</h5>
                                    <p class="text-muted" style="font-size: 0.9rem;">{{ Str::limit(strip_tags($item->excerpt), 100) }}</p>
                                </div>
                            </article>
                        </a>
                    </div>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="mt-5 d-flex justify-content-center">
                {{ $semuaBerita->links() }}
            </div>
        </div>

        {{-- Sidebar --}}
        <div class="col-md-4">
            <div class="ps-md-3">
                <h4 class="mb-3">Berita Terbaru</h4>
                @foreach(\App\Models\Berita::latest()->take(3)->get() as $berita)
                    <div class="mb-3 border-bottom pb-2">
                        <a href="{{ route('berita.show', $berita->slug) }}" class="text-decoration-none text-dark">
                            <h6 class="mb-1">{{ Str::limit($berita->judul, 60) }}</h6>
                            <small class="text-muted">
                                <i class="far fa-calendar-alt me-1"></i>
                                {{ \Carbon\Carbon::parse($berita->tanggal)->format('d M Y') }}
                            </small>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

{{-- Styling Pagination --}}
<style>
    .pagination .page-item.active .page-link {
        background-color: #1b5e20;
        border-color: #1b5e20;
        color: #fff;
    }
    .pagination .page-link {
        color: #1b5e20;
    }
</style>
@endsection
