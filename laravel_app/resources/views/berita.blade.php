@extends('layouts.app')

@section('title', 'Berita - SMP Islam Parung')

@section('content')
<!-- Header Section -->
<div class="container mb-5 py-5 px-4">
    <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
            <div class="position-relative overflow-hidden rounded-4 shadow-lg" style="height: 300px;">
                <div class="position-absolute w-100 h-100" style="background: #1b5e20 url('{{ asset('images/ekskul-bg.jpg') }}') center/cover;"></div>
                <div class="position-relative d-flex flex-column align-items-center justify-content-center h-100 text-white px-3">
                    <h1 class="display-5 fw-bold mb-2" style="font-family: 'Merriweather', serif;">BERITA SEKOLAH</h1>
                    <div class="d-flex align-items-center">
                        <div class="border-top" style="width: 60px; border-color: #FFFF00!important;"></div>
                        <img src="{{ asset('images/logo2.png') }}" alt="Logo" class="mx-3" style="width: 100px;">
                        <div class="border-top" style="width: 60px; border-color: #FFFF00!important;"></div>
                    </div>
                    <p class="mt-3 mb-0 fs-5 fw-bold">Update Terbaru SMP Islam Parung</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- News Section with Sidebar -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="row g-4">
                    <!-- News Item 1 -->
                    <div class="col-md-6 animate">
                        <article class="news-card">
                            <div class="news-image">
                                <img src="{{ asset('images/logo2.png') }}" alt="Workshop PKDK" class="img-fluid">
                                <div class="news-category bg-primary bg-opacity-10 text-primary">Event</div>
                            </div>
                            <div class="news-content">
                                <div class="news-date">
                                    <i class="far fa-calendar me-2"></i>20 Mar 2024
                                </div>
                                <h4 class="news-title">
                                    <a href="#" class="text-dark text-decoration-none">Workshop PKDK</a>
                                </h4>
                                <p class="news-excerpt">Pengembangan kompetensi guru dalam pembelajaran digital</p>
                                <a href="#" class="btn btn-link text-primary p-0">Baca Selengkapnya <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </article>
                    </div>

                    <!-- News Item 2 -->
                    <div class="col-md-6 animate" style="animation-delay: 0.1s">
                        <article class="news-card">
                            <div class="news-image">
                                <img src="{{ asset('images/logo2.png') }}" alt="Rapat Luring" class="img-fluid">
                                <div class="news-category bg-success bg-opacity-10 text-success">Kegiatan</div>
                            </div>
                            <div class="news-content">
                                <div class="news-date">
                                    <i class="far fa-calendar me-2"></i>19 Mar 2024
                                </div>
                                <h4 class="news-title">
                                    <a href="#" class="text-dark text-decoration-none">Rapat Luring dalam Kantor</a>
                                </h4>
                                <p class="news-excerpt">Koordinasi tim dalam persiapan ujian akhir semester</p>
                                <a href="#" class="btn btn-link text-primary p-0">Baca Selengkapnya <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </article>
                    </div>

                    <!-- News Item 3 -->
                    <div class="col-md-6 animate" style="animation-delay: 0.2s">
                        <article class="news-card">
                            <div class="news-image">
                                <img src="{{ asset('images/logo2.png') }}" alt="Pelatihan Budaya Kerja" class="img-fluid">
                                <div class="news-category bg-warning bg-opacity-10 text-warning">Pengembangan</div>
                            </div>
                            <div class="news-content">
                                <div class="news-date">
                                    <i class="far fa-calendar me-2"></i>18 Mar 2024
                                </div>
                                <h4 class="news-title">
                                    <a href="#" class="text-dark text-decoration-none">Pelatihan Penerapan Budaya Kerja</a>
                                </h4>
                                <p class="news-excerpt">Meningkatkan profesionalisme tenaga pendidik di SMP Islam Parung</p>
                                <a href="#" class="btn btn-link text-primary p-0">Baca Selengkapnya <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </article>
                    </div>

                                        <!-- News Item 3 -->
                                        <div class="col-md-6 animate" style="animation-delay: 0.2s">
                        <article class="news-card">
                            <div class="news-image">
                                <img src="{{ asset('images/logo2.png') }}" alt="Pelatihan Budaya Kerja" class="img-fluid">
                                <div class="news-category bg-warning bg-opacity-10 text-warning">Pengembangan</div>
                            </div>
                            <div class="news-content">
                                <div class="news-date">
                                    <i class="far fa-calendar me-2"></i>18 Mar 2024
                                </div>
                                <h4 class="news-title">
                                    <a href="#" class="text-dark text-decoration-none">Pelatihan Penerapan Budaya Kerja</a>
                                </h4>
                                <p class="news-excerpt">Meningkatkan profesionalisme tenaga pendidik di SMP Islam Parung</p>
                                <a href="#" class="btn btn-link text-primary p-0">Baca Selengkapnya <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </article>
                    </div>

                                        <!-- News Item 3 -->
                                        <div class="col-md-6 animate" style="animation-delay: 0.2s">
                        <article class="news-card">
                            <div class="news-image">
                                <img src="{{ asset('images/logo2.png') }}" alt="Pelatihan Budaya Kerja" class="img-fluid">
                                <div class="news-category bg-warning bg-opacity-10 text-warning">Pengembangan</div>
                            </div>
                            <div class="news-content">
                                <div class="news-date">
                                    <i class="far fa-calendar me-2"></i>18 Mar 2024
                                </div>
                                <h4 class="news-title">
                                    <a href="#" class="text-dark text-decoration-none">Pelatihan Penerapan Budaya Kerja</a>
                                </h4>
                                <p class="news-excerpt">Meningkatkan profesionalisme tenaga pendidik di SMP Islam Parung</p>
                                <a href="#" class="btn btn-link text-primary p-0">Baca Selengkapnya <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </article>
                    </div>

                                        <!-- News Item 3 -->
                                        <div class="col-md-6 animate" style="animation-delay: 0.2s">
                        <article class="news-card">
                            <div class="news-image">
                                <img src="{{ asset('images/logo2.png') }}" alt="Pelatihan Budaya Kerja" class="img-fluid">
                                <div class="news-category bg-warning bg-opacity-10 text-warning">Pengembangan</div>
                            </div>
                            <div class="news-content">
                                <div class="news-date">
                                    <i class="far fa-calendar me-2"></i>18 Mar 2024
                                </div>
                                <h4 class="news-title">
                                    <a href="#" class="text-dark text-decoration-none">Pelatihan Penerapan Budaya Kerja</a>
                                </h4>
                                <p class="news-excerpt">Meningkatkan profesionalisme tenaga pendidik di SMP Islam Parung</p>
                                <a href="#" class="btn btn-link text-primary p-0">Baca Selengkapnya <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </article>
                    </div>

                                        <!-- News Item 3 -->
                                        <div class="col-md-6 animate" style="animation-delay: 0.2s">
                        <article class="news-card">
                            <div class="news-image">
                                <img src="{{ asset('images/logo2.png') }}" alt="Pelatihan Budaya Kerja" class="img-fluid">
                                <div class="news-category bg-warning bg-opacity-10 text-warning">Pengembangan</div>
                            </div>
                            <div class="news-content">
                                <div class="news-date">
                                    <i class="far fa-calendar me-2"></i>18 Mar 2024
                                </div>
                                <h4 class="news-title">
                                    <a href="#" class="text-dark text-decoration-none">Pelatihan Penerapan Budaya Kerja</a>
                                </h4>
                                <p class="news-excerpt">Meningkatkan profesionalisme tenaga pendidik di SMP Islam Parung</p>
                                <a href="#" class="btn btn-link text-primary p-0">Baca Selengkapnya <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </article>
                    </div>

                                        <!-- News Item 3 -->
                                        <div class="col-md-6 animate" style="animation-delay: 0.2s">
                        <article class="news-card">
                            <div class="news-image">
                                <img src="{{ asset('images/logo2.png') }}" alt="Pelatihan Budaya Kerja" class="img-fluid">
                                <div class="news-category bg-warning bg-opacity-10 text-warning">Pengembangan</div>
                            </div>
                            <div class="news-content">
                                <div class="news-date">
                                    <i class="far fa-calendar me-2"></i>18 Mar 2024
                                </div>
                                <h4 class="news-title">
                                    <a href="#" class="text-dark text-decoration-none">Pelatihan Penerapan Budaya Kerja</a>
                                </h4>
                                <p class="news-excerpt">Meningkatkan profesionalisme tenaga pendidik di SMP Islam Parung</p>
                                <a href="#" class="btn btn-link text-primary p-0">Baca Selengkapnya <i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar">
                    <!-- Latest News Widget -->
                    <div class="widget latest-news-widget">
                        <h4 class="widget-title">Berita Terbaru</h4>
                        <div class="latest-news-list">
                            <!-- Latest News Item 1 -->
                            <div class="latest-news-item">
                                <div class="latest-news-image">
                                    <img src="{{ asset('images/logo2.png') }}" alt="Latest News" class="img-fluid">
                                </div>
                                <div class="latest-news-content">
                                    <h6 class="latest-news-title">
                                        <a href="#" class="text-dark text-decoration-none">Workshop PKDK</a>
                                    </h6>
                                    <div class="latest-news-date">
                                        <i class="far fa-calendar me-1"></i>20 Mar 2024
                                    </div>
                                </div>
                            </div>

                            <!-- Latest News Item 2 -->
                            <div class="latest-news-item">
                                <div class="latest-news-image">
                                    <img src="{{ asset('images/logo2.png') }}" alt="Latest News" class="img-fluid">
                                </div>
                                <div class="latest-news-content">
                                    <h6 class="latest-news-title">
                                        <a href="#" class="text-dark text-decoration-none">Rapat Luring dalam Kantor</a>
                                    </h6>
                                    <div class="latest-news-date">
                                        <i class="far fa-calendar me-1"></i>19 Mar 2024
                                    </div>
                                </div>
                            </div>

                            <!-- Latest News Item 3 -->
                            <div class="latest-news-item">
                                <div class="latest-news-image">
                                    <img src="{{ asset('images/logo2.png') }}" alt="Latest News" class="img-fluid">
                                </div>
                                <div class="latest-news-content">
                                    <h6 class="latest-news-title">
                                        <a href="#" class="text-dark text-decoration-none">Pelatihan Budaya Kerja</a>
                                    </h6>
                                    <div class="latest-news-date">
                                        <i class="far fa-calendar me-1"></i>18 Mar 2024
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* News Card Styles */
.news-card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    transition: all 0.3s ease;
    height: 100%;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.news-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.news-image {
    height: 240px;
    overflow: hidden;
    position: relative;
}

.news-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.news-card:hover .news-image img {
    transform: scale(1.1);
}

.news-category {
    position: absolute;
    top: 1rem;
    left: 1rem;
    padding: 0.35rem 0.75rem;
    border-radius: 50px;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    z-index: 1;
}

.news-content {
    padding: 1.5rem;
}

.news-date {
    font-size: 0.875rem;
    color: #6c757d;
    margin-bottom: 0.5rem;
}

.news-title {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 1rem;
    line-height: 1.4;
}

.news-title a {
    transition: all 0.3s ease;
}

.news-title a:hover {
    color: #1b5e20 !important;
}

.news-excerpt {
    color: #6c757d;
    margin-bottom: 1rem;
    line-height: 1.6;
}

.btn-link {
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-link:hover {
    color: #1b5e20 !important;
}

.btn-link i {
    transition: transform 0.3s ease;
}

.btn-link:hover i {
    transform: translateX(5px);
}

/* Animation */
.animate {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s ease;
}

.animate.show {
    opacity: 1;
    transform: translateY(0);
}

/* Sidebar Styles */
.sidebar {
    position: sticky;
    top: 2rem;
}

.widget {
    background: white;
    border-radius: 15px;
    padding: 1.5rem;
    margin-bottom: 2rem;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.widget-title {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 1.5rem;
    padding-bottom: 0.75rem;
    border-bottom: 2px solid #1b5e20;
    color: #1b5e20;
}

.latest-news-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.latest-news-item {
    display: flex;
    gap: 1rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid #eee;
}

.latest-news-item:last-child {
    border-bottom: none;
    padding-bottom: 0;
}

.latest-news-image {
    width: 80px;
    height: 80px;
    border-radius: 10px;
    overflow: hidden;
    flex-shrink: 0;
}

.latest-news-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.latest-news-content {
    flex-grow: 1;
}

.latest-news-title {
    font-size: 0.95rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
    line-height: 1.4;
}

.latest-news-title a {
    transition: all 0.3s ease;
}

.latest-news-title a:hover {
    color: #1b5e20 !important;
}

.latest-news-date {
    font-size: 0.8rem;
    color: #6c757d;
}

/* Responsive Adjustments */
@media (max-width: 991.98px) {
    .sidebar {
        margin-top: 2rem;
    }
}

@media (max-width: 767.98px) {
    .latest-news-item {
        flex-direction: column;
        gap: 0.5rem;
    }

    .latest-news-image {
        width: 100%;
        height: 160px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const animateElements = document.querySelectorAll('.animate');
    
    const animateOnScroll = function() {
        animateElements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.3;
            
            if(elementPosition < screenPosition) {
                element.classList.add('show');
            }
        });
    };
    
    // Trigger on load
    animateOnScroll();
    
    // Trigger on scroll
    window.addEventListener('scroll', animateOnScroll);
});
</script>
@endsection