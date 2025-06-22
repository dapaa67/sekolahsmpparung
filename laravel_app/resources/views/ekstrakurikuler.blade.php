@extends('layouts.app')

@php
    use App\Models\Ekstrakurikuler;
    $ekskul = Ekstrakurikuler::all();
@endphp

@section('title', 'Ekstrakurikuler - SMP Islam Parung')

@section('content')
<section class="py-5" style="background-color: #f8f9fa;">
    <!-- Hero Header -->
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <div class="position-relative overflow-hidden rounded-4 shadow-lg" style="height: 300px;">
                    <div class="position-absolute w-100 h-100" style="background: #1b5e20 url('{{ asset('images/ekskul-bg.jpg') }}') center/cover;"></div>
                    <div class="position-relative d-flex flex-column align-items-center justify-content-center h-100 text-white px-3">
                        <h1 class="display-5 fw-bold mb-2" style="font-family: 'Merriweather', serif;">EKSTRAKURIKULER</h1>
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

    <div class="container">
        <!-- Category Filter -->


        <!-- Extracurricular Activities -->
        <div class="row g-4">
            @foreach ($ekskul as $item)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow rounded-4 overflow-hidden">
                    <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top" alt="{{ $item->nama }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->nama }}</h5>
                        <p class="card-text">{{ $item->deskripsi }}</p>
                        <div class="text-muted">
                            <i class="fas fa-clock me-1"></i> {{ $item->jadwal }}<br>
                            <i class="fas fa-map-marker-alt me-1"></i> {{ $item->lokasi }}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

@push('styles')
<style>
    .ekskul-filter {
        transition: all 0.3s ease;
        min-width: 180px;
    }

    .hover-top {
        transition: all 0.3s ease;
    }

    .hover-top:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .card-img-top {
        transition: transform 0.3s ease;
    }

    .hover-top:hover .card-img-top {
        transform: scale(1.05);
    }

    .badge {
        font-size: 0.8rem;
        padding: 0.5rem 1rem;
    }

    .icon-box-lg {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Category filter functionality
        const filters = document.querySelectorAll('.ekskul-filter');
        const ekskulItems = document.querySelectorAll('[data-category]');

        filters.forEach(btn => {
            btn.addEventListener('click', function() {
                // Remove active class from all buttons
                filters.forEach(b => b.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');

                const category = this.dataset.category;

                // Show/hide items based on category
                ekskulItems.forEach(item => {
                    if (category === 'all' || item.dataset.category === category) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
@endpush
@endsection
