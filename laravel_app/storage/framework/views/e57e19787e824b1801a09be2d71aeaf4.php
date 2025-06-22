<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'SMP Islam Parung'); ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        .navbar {
            background: linear-gradient(135deg, #1b5e20 0%, #0d3b13 100%);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 1rem 0;
            transition: all 0.3s ease-in-out;
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: white !important;
            display: flex;
            align-items: center;
        }
        .navbar-brand img {
            width: 40px;
            height: 40px;
        }
        .nav-link {
            color: rgba(255,255,255,0.9) !important;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            margin: 0 0.2rem;
            border-radius: 5px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            font-size: 0.9rem;
        }
        .nav-link:hover {
            color: black !important;
            background-color: #FFFF00;
            transform: translateY(-2px);
        }

        @keyframes glow {
            from {
                box-shadow: 0 0 10px rgba(255, 255, 0, 0.5);
            }
            to {
                box-shadow: 0 0 20px rgba(255, 255, 0, 0.8);
            }
        }
        .dropdown-menu {
            background: linear-gradient(135deg, #1b5e20 0%, #0d3b13 100%);
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .dropdown-item {
            color: rgba(255,255,255,0.9);
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
        }
        .dropdown-item:hover {
            background-color: #FFFF00;
            color: black;
        }
        .navbar-toggler {
            border: none;
            padding: 0.5rem;
            color: white;
            font-size: 1.5rem;
        }
        .navbar-toggler:focus {
            box-shadow: none;
        }
        .navbar-toggler-icon {
            display: none;
        }
        @media (max-width: 991.98px) {
            .navbar-collapse {
                background: linear-gradient(135deg, #1b5e20 0%, #0d3b13 100%);
                padding: 1rem;
                border-radius: 8px;
                margin-top: 1rem;
            }
            .nav-link {
                margin: 0.5rem 0;
            }
        }
    </style>
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="<?php echo e(asset('images/logo2.png')); ?>" alt="Logo SMP Islam Parung" class="me-2">
                SMP ISLAM PARUNG
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->is('/') ? : ''); ?>" href="/">BERANDA</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo e(request()->is('profil*') ? 'active' : ''); ?>" href="#" role="button" data-bs-toggle="dropdown">PROFIL</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/profil/profil">PROFIL SEKOLAH</a></li>
                            <li><a class="dropdown-item" href="/profil/gurustaff">DATA GURU & STAFF</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo e(request()->is('akademik*') ? 'active' : ''); ?>" href="#" role="button" data-bs-toggle="dropdown">AKADEMIK</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/akademik/kalenderakademik">KALENDER AKADEMIK</a></li>
                            <li><a class="dropdown-item" href="/akademik/ekstrakurikuler">EKSTRAKURIKULER</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->is('berita*') ? 'active' : ''); ?>" href="<?php echo e(route('berita.index')); ?>">BERITA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->is('ppdb') ? 'active' : ''); ?>" href="/ppdb">PPDB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->is('galeri') ? 'active' : ''); ?>" href="/galeri">GALERI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->is('kontak') ? 'active' : ''); ?>" href="/kontak">KONTAK</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow-1">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Footer -->
    <?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Bootstrap JS dan Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH /home/u972015595/domains/lavenderblush-cod-866989.hostingersite.com/public_html/resources/views/layouts/app.blade.php ENDPATH**/ ?>