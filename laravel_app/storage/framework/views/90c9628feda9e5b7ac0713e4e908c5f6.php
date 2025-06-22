<!-- Footer -->
<footer class="footer mt-auto py-4">
    <div class="container">
        <div class="row">
            <!-- Info Sekolah -->
            <div class="col-lg-4 mb-4">
                <h3 class="footer-title" style="font-size: 26px;">SMP Islam Parung</h3>
                <p>Membangun generasi Islami yang cerdas, kreatif, dan berakhlak mulia untuk masa depan yang gemilang.</p>
                <div class="social-icons mt-4">
                    <a href="https://www.instagram.com/smpislamparung?utm_source=ig_web_button_share_sheet&igsh=MTJ0aDJ6NDgzamVvZQ==" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a>
                    <a href="https://youtube.com/@smpislamparung?si=6YbA0XXQAvAF980i" target="_blank" rel="noopener"><i class="fab fa-youtube"></i></a>
                    <a href="https://wa.me/62081288956718" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            <!-- Tautan Cepat -->
            <div class="col-lg-2 col-md-4 mb-4">
                <h3 class="footer-title" style="font-size: 22px;">Tautan Cepat</h3>
                <div class="footer-links d-flex flex-column">
                    <a href="<?php echo e(url('/')); ?>">Beranda</a>
                    <a href="<?php echo e(route('berita.index')); ?>" class="<?php echo e(request()->is('berita*') ? 'active' : ''); ?>">Berita</a>
                    <a href="<?php echo e(url('/profil')); ?>">Profil Sekolah</a>
                    <a href="<?php echo e(url('/ppdb')); ?>">PPDB</a>
                    <a href="<?php echo e(url('/galeri')); ?>">Galeri Kegiatan</a>
                </div>
            </div>
            <!-- Kontak Kami -->
            <div class="col-lg-3 col-md-4 mb-4">
                <h3 class="footer-title" style="font-size: 22px;">Kontak Kami</h3>
                <div class="footer-links">
                    <p><i class="fas fa-map-marker-alt me-1" style="font-size: 18px;"></i> Jl. Raya Parung Bogor No. 648, Parung, Bogor</p>
                    <p><i class="fas fa-phone-alt me-1" style="font-size: 18px;"></i> 0251-8611451 / 0812-8895-6718</p>
                    <p><i class="fas fa-envelope me-1" style="font-size: 18px;"></i> smpiparung.sch.id</p>
                    <p><i class="fas fa-clock me-1" style="font-size: 18px;"></i> Senin-Sabtu: 07.00 - 14.00</p>
                </div>
            </div>
            <!-- Peta Lokasi -->
            <div class="col-lg-3 mb-4">
                <h3 class="footer-title" style="font-size: 22px;">Peta Lokasi</h3>
                <div class="ratio ratio-16x9">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.519557979712!2d106.73123181423845!3d-6.419938795362709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e88675e2ac3d%3A0x1c238778e11e469e!2sSMP%20Islam%20Parung!5e0!3m2!1sen!2sid!4v1685869479584!5m2!1sen!2sid"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
        <div class="copyright text-center mt-3">
            <p class="mb-0">&copy; <?php echo e(date('Y')); ?> SMP Islam Parung. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<style>
    .footer {
        background: linear-gradient(135deg, #1b5e20 0%, #0d3b13 100%);
        color: white;
    }
    .footer-title {
        color: #fff;
        font-weight: 600;
    }
    .footer-links a, .footer a {
        color: #fff;
        text-decoration: none;
        transition: all 0.3s;
        padding: 2px 0;
        border-radius: 4px;
    }
    .footer-links a:hover, .footer a:hover, .social-icons a:hover {
        background: #FFFF00; /* secondary-dark */
        color: black !important;
        transform: translateY(-2px) scale(1.05);
    }
    .social-icons a {
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        background: rgba(255,255,255,0.1);
        border-radius: 50%;
        margin-right: 10px;
        color: #fff;
        font-size: 18px;
        transition: all 0.3s;
    }
    .footer p {
        color: rgba(255,255,255,0.9);
    }
</style>
<?php /**PATH /home/u972015595/domains/lavenderblush-cod-866989.hostingersite.com/public_html/laravel_app/resources/views/layouts/footer.blade.php ENDPATH**/ ?>