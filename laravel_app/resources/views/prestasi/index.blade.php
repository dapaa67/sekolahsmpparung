@extends('layouts.app')

@section('content')
<div class="container my-5">
    <!-- Header Section -->
    <div class="container mb-5 py-5 px-4">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <div class="position-relative overflow-hidden rounded-4 shadow-lg" style="height: 300px;">
                    <div class="position-absolute w-100 h-100" style="background: #1b5e20 url('{{ asset('images/ekskul-bg.jpg') }}') center/cover;"></div>
                    <div class="position-relative d-flex flex-column align-items-center justify-content-center h-100 text-white px-3">
                        <h1 class="display-5 fw-bold mb-2" style="font-family: 'Merriweather', serif;">DAFTAR PRESTASI </h1>
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

    <div class="row">
        @forelse ($prestasis as $item)
            <div class="col-md-4 mb-4">
                <a href="{{ route('prestasi.show', $item->id) }}" class="text-decoration-none text-dark">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top" alt="{{ $item->judul }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->judul }}</h5>
                            <p class="card-text small text-muted">
                                <i class="fas fa-calendar-alt"></i>
                                {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                            </p>
                            <p class="card-text">{{ Str::limit(strip_tags($item->deskripsi), 100) }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @empty
            <div class="col-12">
                <p class="text-center text-muted">Belum ada prestasi yang ditambahkan.</p>
            </div>
        @endforelse
    </div>

    <div class="d-flex justify-content-center">
        {{ $prestasis->links() }}
    </div>
</div>
@endsection
