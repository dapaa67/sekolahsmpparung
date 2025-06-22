<?php
    use App\Models\JadwalPpdb;
    use App\Models\PersyaratanPpdb;
    $persyaratans = PersyaratanPpdb::all();
    $jadwals = JadwalPpdb::orderBy('tanggal')->get();
?>

<?php $__env->startSection('title', 'PPDB SMP ISLAM PARUNG 2025/2026'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-lg py-5">
    <!-- Hero Section -->
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <div class="position-relative overflow-hidden rounded-4 shadow-lg" style="height: 300px;">
                    <div class="position-absolute w-100 h-100" style="background: #1b5e20 url('<?php echo e(asset('images/teachers-bg.jpg')); ?>') center/cover;"></div>
                    <div class="position-relative d-flex flex-column align-items-center justify-content-center h-100 text-white px-3">
                        <h1 class="display-4 fw-bold mb-3" style="font-family: 'Merriweather', serif; font-size:2.2rem;">
                            PENERIMAAN PESERTA DIDIK BARU
                        </h1>
                        <div class="d-flex align-items-center">
                            <div class="border-top" style="width: 60px; border-color: #FFFF00!important;"></div>
                            <img src="<?php echo e(asset('images/logo2.png')); ?>" alt="Logo" class="mx-3" style="width: 100px;">
                            <div class="border-top" style="width: 60px; border-color: #FFFF00!important;"></div>
                        </div>
                        <p class="mt-3 mb-0 fs-5 fw-bold">SMP ISLAM PARUNG 2025/ 2026</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fasilitas -->
    <section class="mb-5">
        <h3 class="text-center mb-5 fw-bold text-primary">
            <i class="fas fa-wrench me-2"></i>Fasilitas Pendidikan
        </h3>
        <div class="row g-4 justify-content-center">
            <?php $__currentLoopData = [
                ['icon' => 'mosque', 'title' => 'Masjid Sekolah'],
                ['icon' => 'microscope', 'title' => 'Lab Sains Modern'],
                ['icon' => 'computer', 'title' => 'Lab Komputer'],
                ['icon' => 'book-open', 'title' => 'Perpustakaan Islami'],
                ['icon' => 'futbol', 'title' => 'Lapangan Olahraga'],
                ['icon' => 'video', 'title' => 'Ruang Multimedia']
            ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xl-3 col-md-4 col-6">
                <div class="facility-card text-center p-4 h-100 rounded-4">
                    <i class="fas fa-<?php echo e($item['icon']); ?> fa-2x mb-3 text-primary"></i>
                    <h5 class="fw-semibold"><?php echo e($item['title']); ?></h5>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <!-- Jadwal & Persyaratan -->
    <div class="row g-4 mb-5">
        <!-- Jadwal -->
        <div class="col-lg-6">
            <div class="card h-100 border-primary border-2 timeline-card shadow-sm">
                <div class="card-header bg-primary text-white py-3">
                    <h4 class="mb-0 fw-semibold">
                        <i class="fas fa-calendar-alt me-2"></i>Jadwal PPDB
                    </h4>
                </div>
                <div class="card-body p-0">
                    <?php $__currentLoopData = $jadwals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="list-group-item d-flex justify-content-between align-items-start py-3 px-4">
                        <div class="me-3">
                            <div class="fw-bold text-primary mb-1"><?php echo e($item->tanggal); ?></div>
                            <span class="text-muted"><?php echo e($item->kegiatan); ?></span>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>

        <!-- Persyaratan -->
        <div class="col-lg-6">
            <div class="card h-100 border-primary border-2 shadow-sm">
                <div class="card-header bg-primary text-white py-3">
                    <h4 class="mb-0 fw-semibold">
                        <i class="fas fa-clipboard-list me-2"></i>Persyaratan
                    </h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled requirement-list">
                        <?php $__currentLoopData = $persyaratans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="d-flex mb-2">
                                <i class="fas fa-check-circle mt-1 me-3 text-primary"></i>
                                <span class="flex-grow-1"><?php echo e($item->syarat); ?></span>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA -->
    <section class="cta-section text-center py-5 rounded-4 mb-4">
        <div class="position-relative z-1">
            <div class="text-white mb-4">
                <h2 class="mb-3 fw-bold display-6">Ayo Daftar Sekarang!</h2>
                <p class="lead">Wujudkan Masa Depan Gemilang dengan Pendidikan Islami</p>
            </div>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfB_Ay7OCmklLAxQXPPflHSOSXLlJi-mWelwLN6E88smn-iYQ/viewform"
               class="btn btn-lg px-5 py-3 fw-bold btn-outline-light hover-scale">
                <i class="fas fa-pencil-alt me-2"></i>DAFTAR ONLINE
            </a>
            <div class="mt-4 text-white">
                <p class="mb-1">Informasi Lebih Lanjut:</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="tel:6281288956718"
                       class="text-white text-decoration-none hover-scale">
                        <i class="fas fa-phone me-2"></i>0251-8611451 / 0812-8895-6718
                    </a>
                    <a href="https://goo.gl/maps/xxx"
                       class="text-white text-decoration-none hover-scale">
                        <i class="fas fa-map-marker-alt me-2"></i>Jl. Raya Parung Bogor No. 648, Parung, Bogor
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
:root {
    --primary-color: #1b5e20;
    --primary-hover: #144d18;
    --accent-color: #f8f9fa;
}
.text-primary {
    color: #1b5e20 !important;
}
/* Fasilitas Card */
.facility-card {
    transition: all 0.3s ease;
    border: 2px solid var(--primary-color);
    background: white;
}

.facility-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 15px rgba(27,94,32,0.15);
}
.card.border-primary,
.card.border-primary .card-header {
    border-color: #1b5e20 !important;
}
.card-header.bg-primary {
    background-color: #1b5e20 !important;
    border-color: #1b5e20 !important;
    color: #fff !important;
}
/* Timeline Jadwal */
.timeline-card .list-group-item {
    margin-left: 1rem;
    transition: all 0.2s ease;
    background: white;
}

.timeline-card .list-group-item:hover {
    background-color: rgba(27,94,32,0.05);
    border-left-width: 5px;
}

/* Persyaratan List */
.requirement-list li {
    padding: 0.8rem 1rem;
    border-radius: 8px;
    transition: background 0.2s ease;
}

.requirement-list li:hover {
    background-color: rgba(27,94,32,0.05);
}

/* CTA Section */
.cta-section {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-hover) 100%);
    position: relative;
    overflow: hidden;
}

.cta-section::before {
    content: '';
    position: absolute;
    top: -50px;
    right: -50px;
    width: 150px;
    height: 150px;
    background: rgba(255,255,255,0.1);
    border-radius: 50%;
}

.cta-section::after {
    content: '';
    position: absolute;
    bottom: -80px;
    left: -30px;
    width: 200px;
    height: 200px;
    background: rgba(255,255,255,0.05);
    border-radius: 50%;
}

/* Hover Effects */
.hover-scale {
    transition: transform 0.3s ease;
}

.hover-scale:hover {
    transform: scale(1.05);
}

/* Responsive */
@media (max-width: 768px) {
    .facility-card {
        margin-bottom: 1.5rem;
    }

    .timeline-card .list-group-item {
        margin-left: 0.5rem;
        padding: 1rem;
    }

    .cta-section::before,
    .cta-section::after {
        display: none;
    }

    .display-5 {
        font-size: 2.2rem;
    }

    .btn-lg {
        padding: 1rem 2rem;
        font-size: 1.1rem;
    }
}

@media (max-width: 576px) {
    .header-bg img {
        height: 70px !important;
    }

    .display-5 {
        font-size: 1.8rem;
    }

    .list-group-item {
        flex-direction: column;
        align-items: start !important;
    }

    .badge {
        margin-top: 0.5rem;
    }
}
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\backup-done\laravel_app\resources\views/ppdb.blade.php ENDPATH**/ ?>