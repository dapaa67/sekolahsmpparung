<?php $__env->startSection('title', '404 - Halaman Tidak Ditemukan'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex flex-column min-vh-60 bg-light">
    <div class="container my-auto py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 text-center">
                <!-- Modern icon with gradient background -->
                <div class="mb-5">
                    <div class="icon-lg bg-gradient-orange rounded-circle d-inline-flex align-items-center justify-content-center">
                        <i class="fas fa-exclamation-triangle fa-2x text-white"></i>
                    </div>
                </div>
                
                <!-- Error code with gradient text -->
                <h1 class="display-2 fw-bold text-gradient-orange mb-3">404</h1>
                
                <!-- Error title -->
                <h2 class="h3 mb-4">Halaman Tidak Ditemukan</h2>
                
                <!-- Error description -->
                <p class="lead text-muted mb-5">
                    Maaf, halaman yang Anda cari tidak tersedia, sudah dipindahkan, 
                    atau mungkin terjadi kesalahan penulisan alamat.
                </p>
                
                <!-- Action buttons -->
                <div class="d-flex gap-3 justify-content-center">
                    <a href="<?php echo e(url('/')); ?>" class="btn btn-orange btn-lg px-4">
                        <i class="fas fa-home me-2"></i> Kembali ke Beranda
                    </a>
                    <a href="<?php echo e(route('contact')); ?>" class="btn btn-outline-orange btn-lg px-4">
                        <i class="fas fa-headset me-2"></i> Butuh Bantuan?
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom CSS -->
<style>
    .min-vh-60 {
        min-height: 60vh;
    }
    
    .icon-lg {
        width: 80px;
        height: 80px;
    }
    
    .bg-gradient-orange {
        background: #1b5e20;
    }
    
    .text-gradient-orange {
        background: #1b5e20;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    
    .btn-orange {
        background: #1b5e20;
        border: none;
        color: white;
        transition: all 0.3s ease;
    }
    
    .btn-orange:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(253, 126, 20, 0.3);
        color: white;
        background-color: #e67e22;
    }
    
    .btn-outline-orange {
        border: 1px solid #1b5e20;
        color: #1b5e20;
        transition: all 0.3s ease;
    }
    
    .btn-outline-orange:hover {
        background-color: #e67e22;
        color: white;
        border-color: #fd7e14;
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\backup-done\laravel_app\resources\views/errors/404.blade.php ENDPATH**/ ?>