@extends('layouts.app')

@section('title', 'Galeri - SMP Islam Parung')

@section('content')
<!-- Header Section -->
<div class="container mb-5 py-5 px-4">
    <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
            <div class="position-relative overflow-hidden rounded-4 shadow-lg" style="height: 300px;">
                <div class="position-absolute w-100 h-100" style="background: #1b5e20 url('{{ asset('images/ekskul-bg.jpg') }}') center/cover;"></div>
                <div class="position-relative d-flex flex-column align-items-center justify-content-center h-100 text-white px-3">
                    <h1 class="display-5 fw-bold mb-2" style="font-family: 'Merriweather', serif;">GALERI KEGIATAN</h1>
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

<!-- Gallery Section -->
<section class="py-5">
    <div class="container">
        <!-- Filter Buttons -->
        <div class="gallery-filter text-center mb-5">
            <button class="btn btn-filter active" data-filter="all">Semua</button>
            <button class="btn btn-filter" data-filter="kegiatan">Kegiatan</button>
            <button class="btn btn-filter" data-filter="akademik">Akademik</button>
            <button class="btn btn-filter" data-filter="ekskul">Ekstrakurikuler</button>
            <button class="btn btn-filter" data-filter="event">Event</button>
        </div>

        <!-- Gallery Grid -->
        <div class="row g-4 gallery-grid">
            @foreach (\App\Models\Galeri::latest()->get() as $item)
                <div class="col-md-4 gallery-item" data-category="{{ strtolower($item->kategori) }}">
                    <div class="gallery-card">
                        <div class="gallery-image">
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="img-fluid">
                            <div class="gallery-overlay">
                                <div class="gallery-info">
                                    <h5>{{ $item->judul }}</h5>
                                    <p>{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}</p>
                                    <a href="{{ asset('storage/' . $item->gambar) }}" class="gallery-link" data-lightbox="gallery">
                                        <i class="fas fa-search-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<style>
/* Gallery Filter Styles */
.gallery-filter {
    margin-bottom: 2rem;
}

.btn-filter {
    background: transparent;
    border: 2px solid #1b5e20;
    color: #1b5e20;
    padding: 0.5rem 1.5rem;
    margin: 0 0.5rem;
    border-radius: 50px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-filter:hover,
.btn-filter.active {
    background: #1b5e20;
    color: white;
}

/* Gallery Card Styles */
.gallery-card {
    position: relative;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    margin-bottom: 1.5rem;
}

.gallery-image {
    position: relative;
    overflow: hidden;
    aspect-ratio: 4/3;
}

.gallery-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(27, 94, 32, 0.9);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: all 0.3s ease;
}

.gallery-card:hover .gallery-overlay {
    opacity: 1;
}

.gallery-card:hover .gallery-image img {
    transform: scale(1.1);
}

.gallery-info {
    text-align: center;
    color: white;
    padding: 1rem;
}

.gallery-info h5 {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.gallery-info p {
    font-size: 0.9rem;
    margin-bottom: 1rem;
}

.gallery-link {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background: white;
    color: #1b5e20;
    border-radius: 50%;
    text-decoration: none;
    transition: all 0.3s ease;
}

.gallery-link:hover {
    background: #FFD700;
    color: #000;
    transform: scale(1.1);
}

/* Responsive Adjustments */
@media (max-width: 767.98px) {
    .btn-filter {
        margin: 0.25rem;
        padding: 0.4rem 1rem;
        font-size: 0.9rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Filter functionality
    const filterButtons = document.querySelectorAll('.btn-filter');
    const galleryItems = document.querySelectorAll('.gallery-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            button.classList.add('active');

            const filterValue = button.getAttribute('data-filter');

            galleryItems.forEach(item => {
                if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>
@endsection
