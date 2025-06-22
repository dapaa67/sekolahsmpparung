@extends('layouts.app')

@section('title', 'Kontak - SMP Islam Parung')

@section('content')
<!-- Header Section -->
<div class="container mb-5 py-5 px-4">
    <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
            <div class="position-relative overflow-hidden rounded-4 shadow-lg" style="height: 300px;">
                <div class="position-absolute w-100 h-100" style="background: #1b5e20 url('{{ asset('images/ekskul-bg.jpg') }}') center/cover;"></div>
                <div class="position-relative d-flex flex-column align-items-center justify-content-center h-100 text-white px-3">
                    <h1 class="display-5 fw-bold mb-2" style="font-family: 'Merriweather', serif;">HUBUNGI KAMI</h1>
                    <div class="d-flex align-items-center">
                        <div class="border-top" style="width: 60px; border-color: #FFFF00!important;"></div>
                        <img src="{{ asset('images/logo2.png') }}" alt="Logo" class="mx-3" style="width: 100px;">
                        <div class="border-top" style="width: 60px; border-color: #FFFF00!important;"></div>
                    </div>
                    <p class="mt-3 mb-0 fs-5 fw-bold">Kami siap membantu Anda</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="contact-form-wrapper">
                    <h3 class="section-title mb-4">Kirim Pesan</h3>
                    <form class="contact-form">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Nama Lengkap">
                                    <label for="name">Nama Lengkap</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Email">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subjek">
                                    <label for="subject">Subjek</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" placeholder="Pesan" style="height: 150px"></textarea>
                                    <label for="message">Pesan</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="button" onclick="sendToWhatsApp()" class="btn btn-warning btn-lg w-100">
                                    <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-5">
                <div class="contact-info-wrapper">
                    <h3 class="section-title mb-4">Informasi Kontak</h3>

                    <!-- Contact Info Cards -->
                    <div class="contact-info-cards">
                        <div class="contact-info-card">
                            <div class="icon-wrapper">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="content">
                                <h5>Alamat</h5>
                                <p>Jl. Raya Parung Bogor No. 648, Parung, Bogor</p>
                            </div>
                        </div>

                        <div class="contact-info-card">
                            <div class="icon-wrapper">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="content">
                                <h5>Telepon</h5>
                                <p>0251-8611451 / 0812-8895-6718</p>
                            </div>
                        </div>

                        <div class="contact-info-card">
                            <div class="icon-wrapper">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="content">
                                <h5>Email</h5>
                                <p>smpiparung.sch.id</p>
                            </div>
                        </div>

                        <div class="contact-info-card">
                            <div class="icon-wrapper">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="content">
                                <h5>Jam Operasional</h5>
                                <p>Senin - Sabtu: 07:00 - 14:00</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media Links -->
                    <div class="social-links mt-4">
                        <h5 class="mb-3">Ikuti Kami</h5>
                        <div class="d-flex gap-3">
                            <a href="https://www.instagram.com/smpislamparung?utm_source=ig_web_button_share_sheet&igsh=MTJ0aDJ6NDgzamVvZQ==" class="social-link" target="_blank" rel="noopener">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://youtube.com/@smpislamparung?si=6YbA0XXQAvAF980i" class="social-link" target="_blank" rel="noopener">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="https://wa.me/62081288956718" class="social-link" target="_blank" rel="noopener">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="map-wrapper rounded-4 overflow-hidden shadow-lg">
            <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.519557979712!2d106.73123181423845!3d-6.419938795362709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e88675e2ac3d%3A0x1c238778e11e469e!2sSMP%20Islam%20Parung!5e0!3m2!1sen!2sid!4v1685869479584!5m2!1sen!2sid"
                width="100%"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>
    </div>
</section>

<style>
/* Contact Form Styles */
.contact-form-wrapper {
    background: white;
    border-radius: 15px;
    padding: 2rem;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    height: 100%;
}

.form-floating > .form-control {
    border: 1px solid #e0e0e0;
    border-radius: 10px;
    padding: 1rem 0.75rem;
}

.form-floating > .form-control:focus {
    border-color: #1b5e20;
    box-shadow: 0 0 0 0.25rem rgba(27, 94, 32, 0.1);
}

.form-floating > label {
    padding: 1rem 0.75rem;
}

/* Contact Info Styles */
.contact-info-wrapper {
    background: white;
    border-radius: 15px;
    padding: 2rem;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    height: 100%;
}

.contact-info-cards {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.contact-info-card {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    padding-bottom: 1.5rem;
    border-bottom: 1px solid #eee;
}

.contact-info-card:last-child {
    border-bottom: none;
    padding-bottom: 0;
}

.icon-wrapper {
    width: 50px;
    height: 50px;
    background: rgba(27, 94, 32, 0.1);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #1b5e20;
    font-size: 1.25rem;
    flex-shrink: 0;
}

.contact-info-card .content h5 {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
    color: #1b5e20;
}

.contact-info-card .content p {
    margin-bottom: 0;
    color: #666;
    font-size: 0.95rem;
}

/* Social Links Styles */
.social-links h5 {
    color: #1b5e20;
    font-weight: 600;
}

.social-link {
    width: 40px;
    height: 40px;
    background: rgba(27, 94, 32, 0.1);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #1b5e20;
    text-decoration: none;
    transition: all 0.3s ease;
}

.social-link:hover {
    background: #1b5e20;
    color: white;
    transform: translateY(-3px);
}

/* Map Styles */
.map-wrapper {
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

/* Responsive Adjustments */
@media (max-width: 991.98px) {
    .contact-form-wrapper,
    .contact-info-wrapper {
        margin-bottom: 2rem;
    }
}

@media (max-width: 767.98px) {
    .contact-info-card {
        flex-direction: column;
        text-align: center;
    }

    .icon-wrapper {
        margin: 0 auto;
    }
}

/* Button Styles */
.btn-warning {
    background-color: #FFD700;
    border-color: #FFD700;
    color: #000;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-warning:hover {
    background-color: #1b5e20;
    border-color: #1b5e20;
    color: #fff;
    transform: translateY(-2px);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Form validation
    const form = document.querySelector('.contact-form');
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        // Add your form submission logic here
    });
});
</script>

<script>
    function sendToWhatsApp() {
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const subject = document.getElementById("subject").value.trim();
        const message = document.getElementById("message").value.trim();

        if (!name || !email || !subject || !message) {
            alert("Mohon lengkapi semua kolom sebelum mengirim pesan.");
            return;
        }

        const phone = "628986236509"; // Ganti dengan nomor WA tujuan (format: 62xxx)

        const fullMessage = `Halo, saya ${name} (${email}) ingin menghubungi Anda.\n\n*Subjek:* ${subject}\n\n*Pesan:*\n${message}`;

        const encodedMessage = encodeURIComponent(fullMessage);

        const whatsappURL = `https://wa.me/${phone}?text=${encodedMessage}`;
        window.open(whatsappURL, '_blank');
    }
</script>

@endsection
