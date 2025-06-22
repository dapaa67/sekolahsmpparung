<?php
    use App\Models\Prestasi;
    $prestasi = Prestasi::latest()->take(3)->get(); // hasil: Collection (banyak data)
    $images = \App\Models\HeroImage::all();
    $kepsek = \App\Models\PrincipalSection::first();
?>

<?php $__env->startSection('content'); ?>
<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-backgrounds">
        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="hero-bg <?php echo e($loop->first ? 'active' : ''); ?>"
                 style="background-image: url('<?php echo e(asset('storage/' . $img->image)); ?>')">
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content animate">
                    <h1 class="hero-title">Membangun Generasi <span class="text-warning">Islami</span> yang Cerdas dan Berakhlak Mulia</h1>
                    <p class="hero-subtitle">SMP Islam Parung hadir sebagai lembaga pendidikan unggulan yang mengintegrasikan ilmu pengetahuan dengan nilai-nilai keislaman.</p>
                    <div class="d-flex gap-3">
                        <a href="/ppdb" class="btn btn-warning">Daftar Sekarang</a>
                        <a href="#about" class="btn btn-outline-light">Tentang Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="section px-5">
    <div class="container"> 
        <div class="row align-items-center"> 
            <div class="col-lg-5 mb-4 mb-lg-0 text-center animate">
                <img src="<?php echo e(asset('images/logo1.png')); ?>" alt="Tentang SMP Islam Parung" class="img-fluid about-img" style="max-width: 100%; height: auto;">
            </div>
            <div class="col-lg-7 animate" style="animation-delay: 0.2s">
                <h2 class="section-title">Tentang Kami</h2>
                <p class="lead text-muted">SMP Islam Parung - Sekolah Unggulan Berbasis Nilai Islami</p>
                <p>SMP Islam Parung berkomitmen dalam membentuk peserta didik yang tidak hanya unggul secara akademik, namun juga memiliki karakter yang kuat dan berlandaskan nilai-nilai keislaman. Dengan fasilitas yang representatif dan tenaga pengajar profesional, kami menghadirkan pembelajaran yang adaptif, kreatif, dan menyenangkan.</p>
                <p>Kami percaya bahwa pendidikan adalah investasi terbaik untuk masa depan. Dengan pendekatan holistik, kami membekali siswa dengan pengetahuan, keterampilan, dan akhlak yang akan menjadi bekal mereka dalam menghadapi tantangan global.</p>
                <a href="/profil/profil" class="btn btn-primary mt-3">Pelajari Lebih Lanjut</a>
            </div>
        </div>
    </div>
</section>

<!-- Principal Section -->
<section class="section principal-section px-5">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-4 text-center mb-5 mb-md-0 animate">
                <img src="<?php echo e(asset('storage/' . $kepsek->image)); ?>" alt="<?php echo e($kepsek->name); ?>" class="img-fluid principal-img">
                <h5 class="mt-3 fw-bold"><?php echo e($kepsek->name); ?></h5>
                <p class="text-light"><?php echo e($kepsek->position); ?></p>
            </div>
            <div class="col-md-8 animate" style="animation-delay: 0.2s">
                <div class="ps-md-4">
                    <h2 class="section-title text-white mb-4">Sambutan Kepala Sekolah</h2>
                    <div class="sambutan-text">
                        <?php echo nl2br(e($kepsek->greeting)); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="section bg-light">
    <div class="container">
        <div class="text-center mb-5 animate">
            <h2 class="section-title text-center">Keunggulan Sekolah Kami</h2>
            <p class="lead text-muted">Alasan kuat memilih SMP Islam Parung untuk pendidikan putra/putri Anda</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4 animate">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h4>Kurikulum Terpadu</h4>
                    <p class="mb-0">Menggabungkan kurikulum nasional dengan nilai-nilai Islami untuk membentuk karakter unggul dan kompetensi global.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 animate" style="animation-delay: 0.1s">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <h4>Guru Berkompeten</h4>
                    <p class="mb-0">Didukung oleh guru profesional yang memiliki kompetensi akademik dan integritas moral yang tinggi.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 animate" style="animation-delay: 0.2s">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-laptop-house"></i>
                    </div>
                    <h4>Fasilitas Modern</h4>
                    <p class="mb-0">Dilengkapi dengan sarana belajar terkini yang menunjang perkembangan akademik dan non-akademik siswa.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 animate" style="animation-delay: 0.3s">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-mosque"></i>
                    </div>
                    <h4>Pendidikan Karakter</h4>
                    <p class="mb-0">Program pembentukan karakter islami melalui pembiasaan ibadah dan akhlak mulia sehari-hari.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 animate" style="animation-delay: 0.4s">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-globe-asia"></i>
                    </div>
                    <h4>Bahasa Asing</h4>
                    <p class="mb-0">Penguasaan bahasa Arab dan Inggris sebagai bekal komunikasi global dengan pendekatan fungsional.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 animate" style="animation-delay: 0.5s">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h4>Prestasi Siswa</h4>
                    <p class="mb-0">Banyak siswa berprestasi di berbagai bidang baik akademik maupun non-akademik di tingkat regional dan nasional.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Prestasi Section -->
<section id="prestasi" class="event-area default-padding">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title">Prestasi Sekolah</h2>
                <p class="lead text-muted">Alasan kuat memilih SMP Islam Parung untuk pendidikan putra/putri Anda</p>
            </div>
        </div>

        <?php $__empty_1 = true; $__currentLoopData = $prestasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <a href="<?php echo e(route('prestasi.show', $item->id)); ?>" class="text-decoration-none text-dark">
                <div class="card p-3 mb-4 shadow-sm" style="cursor: pointer;">
                    <div class="row align-items-center">
                        <!-- Gambar kiri -->
                        <div class="col-md-5 mb-4 mb-md-0">
                            <img src="<?php echo e(asset('storage/' . $item->gambar)); ?>" alt="Prestasi"
                                class="img-fluid rounded prestasi-img">
                        </div>

                        <!-- Teks kanan -->
                        <div class="col-md-7">
                            <div class="card-body p-0">
                                <h4 class="mb-3" style="font-size: 22px;">
                                    <?php echo e($item->judul); ?>

                                </h4>

                                <div class="meta mb-3">
                                    <ul class="list-inline mb-0 small">
                                        <li class="list-inline-item">
                                            <i class="fas fa-calendar-alt"></i>
                                            <?php echo e(\Carbon\Carbon::parse($item->tanggal)->format('d M Y')); ?>

                                        </li>
                                        <li class="list-inline-item"><i class="fas fa-map"></i> - </li>
                                    </ul>
                                </div>

                                <hr>

                                <p class="mb-3 small" style="line-height: 1.6;">
                                    <strong><?php echo e($item->skala); ?></strong>
                                </p>
                                <p class="mb-0 small" style="line-height: 1.6;">
                                    <strong><i class="fas fa-user"></i> : <?php echo e($item->siswa); ?> / <?php echo e($item->kelas); ?></strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p class="text-center text-muted">Belum ada data prestasi.</p>
        <?php endif; ?>
        <div class="text-center mt-4">
            <a href="<?php echo e(route('prestasi.index')); ?>" class="btn btn-primary px-4 py-2">
                Lihat Semua Prestasi
            </a>
        </div>


    </div>
</section>

<!-- Galeri Section -->
<section class="py-5" id="galeri">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title text-center">Galeri Sekolah</h2>
            <p class="lead text-muted">Momen berharga dalam kegiatan Sekolah</p>
        </div>

        <div class="gallery-container">
            <button class="gallery-control prev" onclick="scrollGallery('left')">
                <i class="fas fa-chevron-left"></i>
            </button>

            <div class="gallery-wrapper">
                <?php $__currentLoopData = \App\Models\Galeri::latest()->take(6)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="gallery-item">
                        <img src="<?php echo e(asset('storage/' . $item->gambar)); ?>" alt="<?php echo e($item->judul); ?>">
                        <div class="gallery-overlay">
                            <h5><?php echo e($item->judul); ?></h5>
                            <p><?php echo e($item->deskripsi); ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <button class="gallery-control next" onclick="scrollGallery('right')">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>

        <div class="text-center mt-5">
            <a href="/galeri" class="btn btn-primary px-4 py-2 rounded-pill">
                <i class="fas fa-images me-2"></i>Lihat Galeri Lengkap
            </a>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="py-5 bg-light" id="berita">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title text-center">Berita Terkini</h2>
            <p class="lead text-muted">Update terbaru SMP Islam Parung</p>
        </div>

         <div class="row g-4">
            <?php $__currentLoopData = \App\Models\Berita::latest()->take(6)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12 col-sm-6 col-md-4"> 
                    <a href="<?php echo e(route('berita.show', $item->slug)); ?>" class="text-decoration-none">
                        <article class="news-card h-100 shadow-sm rounded overflow-hidden">
                            <div class="news-image">
                                <img src="<?php echo e(asset('storage/' . $item->gambar)); ?>" alt="<?php echo e($item->judul); ?>" class="img-fluid w-100" style="height:200px; object-fit:cover;">
                            </div>
                            <div class="news-content p-3">
                                <div class="news-date text-muted mb-1" style="font-size: 0.875rem;">
                                    <i class="far fa-calendar me-2"></i><?php echo e(\Carbon\Carbon::parse($item->tanggal)->format('d M Y')); ?>

                                </div>
                                <h5 class="text-dark fw-bold"><?php echo e($item->judul); ?></h5>
                                <p class="text-muted" style="font-size: 0.9rem;"><?php echo e(Str::limit(strip_tags($item->excerpt), 100)); ?></p>
                            </div>
                        </article>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="text-center mt-5">
            <a href="<?php echo e(route('berita.index')); ?>" class="btn btn-primary px-4 py-2 rounded-pill">
                <i class="fas fa-newspaper me-2"></i>Lihat Semua Berita
            </a>

        </div>
    </div>
</section>

<style>
    /* Design System */
    :root {
        --primary: #1b5e20;
        --primary-dark: #0d3b13;
        --secondary: #FFFF00;
        --light: #f8f9fa;
        --dark: #212529;
        --white: #ffffff;
        --gray: #6c757d;
        --border-radius: 12px;
        --box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    }


    /* Global Styles */
    body {
        font-family: 'Poppins', sans-serif;
        overflow-x: hidden;
        color: var(--dark);
        line-height: 1.7;
    }

    /* Typography */
    h1, h2, h3, h4, h5, h6 {
        font-weight: 700;
        line-height: 1.3;
        margin-bottom: 1rem;
    }

    .lead {
        font-size: 1.2rem;
        font-weight: 300;
        color: var(--gray);
    }

    /* Buttons */
    .btn {
        padding: 12px 28px;
        border-radius: 50px;
        font-weight: 600;
        transition: var(--transition);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 0.9rem;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .btn:focus {
        box-shadow: none !important;
        outline: none !important;
    }

    .btn-primary {
        background-color: #1b5e20;
        border-color: #1b5e20;
        color: white;
    }

    .btn-primary:hover,
    .btn-primary:focus,
    .btn-primary:active {
        background-color: #FFD700 !important;
        border-color: #FFD700 !important;
        color: #1b5e20 !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .btn-warning {
        background-color: var(--primary);
        border-color: var(--primary);
        color: var(--white);
    }

    .btn-warning:hover,
    .btn-warning:focus,
    .btn-warning:active {
        background-color: var(--secondary-dark) !important;
        border-color: var(--secondary-dark) !important;
        color: var(--black) !important;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(255, 255, 0, 0.2);
    }

    /* Hero Section */
    .hero-section {
        position: relative;
        min-height: 90vh; /* tinggi di desktop */
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #000;
        color: #fff;
        padding: 2rem 1rem; /* kasih padding lebih lega */
        text-align: left;
    }

    .hero-backgrounds {
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        z-index: 0;
    }
    .hero-backgrounds::after {
        content: "";
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: rgba(0, 0, 0, 0.7); /* transparan hitam */
        z-index: 1;
    }

    .hero-bg {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        position: absolute;
        width: 100%; height: 100%;
        opacity: 0;
        transition: opacity 1s ease-in-out;
    }

    .hero-bg.active {
        opacity: 1;
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        max-width: 700px;
        margin: 0 auto;
        padding: 0 1rem;
    }

    .hero-title {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        text-shadow: 2px 2px 5px rgba(0,0,0,0.7);
    }

    .hero-subtitle {
        font-size: 1.1rem;
        margin-bottom: 1.5rem;
        font-weight: 400;
        text-shadow: 2px 2px 5px rgba(0,0,0,0.7);
    }

    .d-flex.gap-3 {
        gap: 1rem;
    }

    .d-flex.gap-3 a.btn {
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
    }

    /* Responsive untuk layar kecil */
    @media (max-width: 768px) {
        .hero-section {
            min-height: 50vh; /* cukup tinggi agar tulisan dan foto masih balance */
            padding: 0.2rem 0.2rem;
        }

        .hero-content {
            text-align: left;
        }

        .hero-title {
            font-size: 10px; /* lebih kecil dari desktop tapi masih jelas */
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 10px;
            margin-bottom: 1rem;
        }

        .hero-bg {
            background-size: contain; /* supaya gambar tidak terpotong */
            background-repeat: no-repeat;
            background-position: center center;
        }

        /* tombol jadi vertikal dan full lebar */
        .d-flex.gap-3 {
            justify-content: left; /* biar tombol tetap di tengah */
            gap: 0.5rem;
        }

        .d-flex.gap-3 a.btn {
            width: 50%; /* biar nggak full width */
            max-width: 50%;
            font-size: 0.8rem;
            padding: 0.6rem 1.2rem;
        }

        .container, .row, .col-lg-6 {
            padding: 0;
            max-width: 100%;
            width: 100%;
        }
    }

    /* Section Styling */
    .section {
        padding: 4rem 0;
        position: relative;
    }

    .section-title {
        position: relative;
        display: inline-block;
        font-weight: 700;
        color: var(--primary);
        margin-bottom: 0.3rem;
        font-size: 2.5rem;
    }
    .section-title.text-center:after {
        left: 50%;
        transform: translateX(-50%);
    }

    /* Principal Section */
    .principal-section {
        background: linear-gradient(135deg, #1b5e20 0%, #0d3b13 100%);
        color: var(--white);
        padding: 6rem 0;
    }

    .principal-img {
        width: 250px;
        height: 250px;
        object-fit: cover;
        border-radius: 50%;
        border: 5px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        transition: var(--transition);
    }

    .principal-img:hover {
        transform: scale(1.05);
        border-color: rgba(255, 255, 255, 0.4);
    }

    .sambutan-text {
        font-size: 1.1rem;
        line-height: 1.8;
    }

    .sambutan-text p {
        margin-bottom: 1.5rem;
    }

    .sambutan-text .lead {
        font-size: 1.3rem;
        font-weight: 500;
    }

    @media (max-width: 767.98px) {
        .principal-section {
            padding: 4rem 0;
        }

        .principal-img {
            width: 200px;
            height: 200px;
        }

        .sambutan-text {
            font-size: 1rem;
        }
    }

    /* Features Section */
    .feature-card {
        background: var(--white);
        border-radius: var(--border-radius);
        padding: 2.5rem;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: var(--transition);
        height: 100%;
        border: 1px solid rgba(0, 0, 0, 0.05);
        position: relative;
        overflow: hidden;
    }

    .feature-card:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, var(--primary) 0%, var(--primary-dark) 100%);
        opacity: 0;
        transition: var(--transition);
        z-index: 0;
    }

    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--box-shadow);
    }

    .feature-card:hover:before {
        opacity: 0.05;
    }

    .feature-icon {
        font-size: 2.5rem;
        color: var(--primary);
        margin-bottom: 1.5rem;
        transition: var(--transition);
    }

    .feature-card:hover .feature-icon {
        transform: scale(1.1);
        color: var(--primary-dark);
    }

    /* prestasi section */
    .prestasi-img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border-radius: 0.25rem; /* buat rounded */
    }


    /* Gallery Section Updated Styles */
    .gallery-container {
        position: relative;
        width: 100%;
        padding: 1rem 0;
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .gallery-wrapper {
        flex: 1;
        display: flex;
        gap: 1.5rem;
        overflow-x: auto;
        scroll-behavior: smooth;
        padding: 1rem;
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .gallery-wrapper::-webkit-scrollbar {
        display: none;
    }

    .gallery-control {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background: var(--primary);
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        transition: all 0.3s ease;
        flex-shrink: 0;
        z-index: 2;
    }

    .gallery-control:hover {
        background: var(--primary-dark);
        transform: scale(1.1);
    }

    .gallery-control i {
        color: white;
        font-size: 1.2rem;
    }

    .gallery-item {
        flex: 0 0 300px;
        height: 250px;
        position: relative;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }

    .gallery-item:hover {
        transform: translateY(-5px);
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.1);
    }

    .gallery-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
        padding: 1.5rem;
        color: white;
    }

    .gallery-overlay h5 {
        margin: 0;
        font-size: 1.2rem;
        font-weight: 600;
    }

    .gallery-overlay p {
        margin: 0.5rem 0 0;
        font-size: 0.9rem;
        opacity: 0.9;
    }

    @media (max-width: 768px) {
        .gallery-container {
            gap: 0.5rem;
        }

        .gallery-item {
            flex: 0 0 250px;
            height: 200px;
        }

        .gallery-control {
            width: 35px;
            height: 35px;
        }

        .gallery-control i {
            font-size: 1rem;
        }
    }

    /* News Section Styles */
    .news-card {
        background: var(--white);
        border-radius: var(--border-radius);
        overflow: hidden;
        transition: var(--transition);
        height: 100%;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        cursor: pointer;
    }

    .news-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--box-shadow);
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
        color: var(--gray);
        margin-bottom: 0.5rem;
    }

    .news-title {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 1rem;
        line-height: 1.4;
        transition: var(--transition);
    }

    .news-card:hover .news-title {
        color: var(--primary) !important;
    }

    .news-excerpt {
        color: var(--gray);
        margin-bottom: 1rem;
        line-height: 1.6;
    }

    .btn-link {
        text-decoration: none;
        font-weight: 600;
        transition: var(--transition);
    }

    .btn-link:hover {
        color: var(--primary-dark) !important;
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

    /* Responsive Adjustments */
    @media (max-width: 1199.98px) {
        .hero-title {
            font-size: 3rem;
        }
    }

    @media (max-width: 991.98px) {
        .section {
            padding: 4rem 0;
        }

        .hero-title {
            font-size: 2.5rem;
        }

        .section-title {
            font-size: 2rem;
        }
    }

    @media (max-width: 767.98px) {
        .hero-title {
            font-size: 2rem;
        }

        .hero-section {
            text-align: center;
        }

        .section-title:after {
            left: 50%;
            transform: translateX(-50%);
        }
    }

    @media (max-width: 575.98px) {
        .hero-title {
            font-size: 1.8rem;
        }

        .hero-subtitle {
            font-size: 1rem;
        }
    }

    /

    .text-line {
        position: relative;
        padding-bottom: 10px;
    }

    .text-line:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 2px;
        background-color: var(--bs-primary);
    }

    .overlay {
        position: relative;
        overflow: hidden;
    }

    .overlay .bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(27, 94, 32, 0.8);
        opacity: 0;
        transition: all 0.3s ease;
    }

    .overlay:hover .bg {
        opacity: 1;
    }

    .overlay figcaption {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        text-align: center;
        opacity: 0;
        transition: all 0.3s ease;
    }

    .overlay:hover figcaption {
        opacity: 1;
    }

    .hover-scale img {
        transition: transform 0.3s ease;
    }

    .hover-scale:hover img {
        transform: scale(1.1);
    }

    .post-meta {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        gap: 1rem;
        color: #6c757d;
        font-size: 0.875rem;
    }

    .post-meta i {
        margin-right: 0.25rem;
    }

    .link-dark {
        color: #212529;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .link-dark:hover {
        color: var(--bs-primary);
    }

    .hover-lift {
        transition: all 0.3s ease;
        border-radius: 0.5rem;
        overflow: hidden;
    }

    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.05);
    }

    .img-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transition: opacity 0.3s ease;
    }

    .card-img-top {
        height: 240px;
        object-fit: cover;
    }

    .badge {
        font-size: 0.75rem;
        padding: 0.35rem 0.75rem;
        letter-spacing: 0.5px;
    }

    .divider-primary {
        height: 2px;
        background: linear-gradient(90deg, #1b5e20 0%, #0d3b13 100%);
    }

    /* Button Hover Effect */
    .btn-hover-yellow {
        transition: all 0.3s ease;
        background-color: #1b5e20;
        color: white;
        border: 2px solid #1b5e20;
    }

    .btn-hover-yellow:hover {
        background-color: #FFD700;
        color: #1b5e20;
        border-color: #FFD700;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    /* About Section Text Styles */
    #about .lead {
        font-size: 1rem;
    }

    #about p {
        font-size: 0.95rem;
        line-height: 1.6;
    }

    #about .section-title {
        font-size: 2rem;
    }

    /* Principal Section Text Styles */
    .principal-section .section-title {
        font-size: 2rem;
    }

    .principal-section .sambutan-text {
        font-size: 0.95rem;
        line-height: 1.7;
    }

    .principal-section .sambutan-text .lead {
        font-size: 1.1rem;
    }

    .principal-section h5 {
        font-size: 1.1rem;
    }

    .principal-section p.text-light {
        font-size: 0.9rem;
    }

    /* About Section Additional Styles */
    #about .about-text {
        max-width: 800px;
        margin: 0 auto;
    }

    #about .about-text p {
        margin-bottom: 1.2rem;
        text-align: justify;
    }

    #about .about-img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
    }

    #about .section-title {
        margin-bottom: 1rem;
    }

    #about .lead {
        margin-bottom: 2rem;
    }

    /* News Section Additional Styles */
    .news-card {
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .news-content {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .news-excerpt {
        flex: 1;
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

    /* Galeri Section Styles */
.gallery-container {
    position: relative;
    width: 100%;
    padding: 1rem 0;
    display: flex;
    align-items: center;
    gap: 1rem;
}

.gallery-wrapper {
    flex: 1;
    display: flex;
    gap: 1.5rem;
    overflow-x: auto;
    scroll-behavior: smooth;
    padding: 1rem;
    -ms-overflow-style: none;  /* IE and Edge */
    scrollbar-width: none;  /* Firefox */
}

.gallery-wrapper::-webkit-scrollbar {
    display: none; /* Chrome, Safari, Opera */
}

.gallery-control {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    background: var(--primary, #1b5e20);
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    transition: all 0.3s ease;
    flex-shrink: 0;
    z-index: 2;
}

.gallery-control:hover {
    background: var(--primary-dark, #0d3b13);
    transform: scale(1.1);
}

.gallery-control i {
    color: white;
    font-size: 1.2rem;
}

.gallery-item {
    flex: 0 0 300px;
    height: 250px;
    position: relative;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.gallery-item:hover {
    transform: translateY(-5px);
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.gallery-item:hover img {
    transform: scale(1.1);
}

.gallery-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
    padding: 1.5rem;
    color: white;
}

.gallery-overlay h5 {
    margin: 0;
    font-size: 1.2rem;
    font-weight: 600;
}

.gallery-overlay p {
    margin: 0.5rem 0 0;
    font-size: 0.9rem;
    opacity: 0.9;
}

/* Responsive */
@media (max-width: 768px) {
    .gallery-container {
        gap: 0.5rem;
    }

    .gallery-item {
        flex: 0 0 250px;
        height: 200px;
    }

    .gallery-control {
        width: 35px;
        height: 35px;
    }

    .gallery-control i {
        font-size: 1rem;
    }
}

</style>

<!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<script>
    // Animation on scroll
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

<?php $__env->startPush('scripts'); ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Owl Carousel
        $('.owl-carousel').owlCarousel({
            margin: 30,
            dots: true,
            autoplay: false,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        });
    });
</script>
<?php $__env->stopPush(); ?>

<script>
    function scrollGallery(direction) {
        const wrapper = document.querySelector('.gallery-wrapper');
        const scrollAmount = 350; // Jarak scroll
        const maxScroll = wrapper.scrollWidth - wrapper.clientWidth;
        const tolerance = 10; // Toleransi untuk pembulatan scroll

        if (direction === 'left') {
            if (wrapper.scrollLeft <= 0) {
                // Jika sudah mentok di kiri, pindah ke kanan (akhir galeri)
                wrapper.scrollTo({
                    left: maxScroll,
                    behavior: 'smooth'
                });
            } else {
                wrapper.scrollBy({
                    left: -scrollAmount,
                    behavior: 'smooth'
                });
            }
        } else {
            if (wrapper.scrollLeft >= maxScroll - tolerance) {
                // Jika sudah mentok di kanan, kembali ke awal (kiri)
                wrapper.scrollTo({
                    left: 0,
                    behavior: 'smooth'
                });
            } else {
                wrapper.scrollBy({
                    left: scrollAmount,
                    behavior: 'smooth'
                });
            }
        }
    }
</script>

<?php $__env->startPush('scripts'); ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Owl Carousel
        $('.owl-carousel').owlCarousel({
            margin: 30,
            dots: true,
            autoplay: true, // aktifkan autoplay
            autoplayTimeout: 5000, // waktu antar slide
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        });
    });
</script>
<?php $__env->stopPush(); ?>

<script>
    // Hero Slider
    document.addEventListener('DOMContentLoaded', function() {
        // Hero Background Rotation
        const backgrounds = document.querySelectorAll('.hero-bg');
        let currentBg = 0;

        function nextBackground() {
            backgrounds[currentBg].classList.remove('active');
            currentBg = (currentBg + 1) % backgrounds.length;
            backgrounds[currentBg].classList.add('active');
        }

        // Gallery Slider
        const galleryWrapper = document.querySelector('.gallery-wrapper');
        const galleryItems = document.querySelectorAll('.gallery-item');
        let currentItem = 0;

        document.querySelector('.gallery-control.next').addEventListener('click', () => {
            currentItem = (currentItem + 1) % galleryItems.length;
            scrollGallery();
        });

        document.querySelector('.gallery-control.prev').addEventListener('click', () => {
            currentItem = (currentItem - 1 + galleryItems.length) % galleryItems.length;
            scrollGallery();
        });

        function scrollGallery() {
            const itemWidth = galleryItems[0].offsetWidth + 24; // Include gap
            galleryWrapper.scrollTo({
                left: itemWidth * currentItem,
                behavior: 'smooth'
            });
        }

        // Start hero slider
        setInterval(nextBackground, 5000);

        // Animation on scroll
        const animateElements = document.querySelectorAll('.animate');
        window.addEventListener('scroll', () => {
            animateElements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                if (elementTop < window.innerHeight - 100) {
                    element.classList.add('show');
                }
            });
        });
    });
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\backup-done\laravel_app\resources\views/home.blade.php ENDPATH**/ ?>