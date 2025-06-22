@extends('layouts.app')
@php
    use App\Models\VisiMisi;
    use Carbon\Carbon;
    use Illuminate\Support\Facades\Storage;
    use App\Models\LingkunganSekolah;
    use App\Models\AsetSekolah;

    $info = \App\Models\IdentitasSekolah::first();
    $sejarah = \App\Models\SejarahSekolah::first();
    $kepalaSekolahs = \App\Models\KepalaSekolah::orderBy('periode', 'desc')->get();
    $struktur = \App\Models\StrukturOrganisasi::first();
    $visimisi = VisiMisi::first();
    $lingkungans = LingkunganSekolah::orderBy('created_at', 'asc')->get();
    $aset = AsetSekolah::first();
@endphp

@section('title', 'Sejarah - SMP Islam Parung')


@section('content')
<div class="container-fluid py-5 px-4">
    <!-- Hero Header -->
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <div class="position-relative overflow-hidden rounded-4 shadow-lg" style="height: 300px;">
                    <div class="position-absolute w-100 h-100" style="background: #1b5e20 url('{{ asset('images/ekskul-bg.jpg') }}') center/cover;"></div>
                    <div class="position-relative d-flex flex-column align-items-center justify-content-center h-100 text-white px-3">
                        <h1 class="display-5 fw-bold mb-2" style="font-family: 'Merriweather', serif;">PROFIL SEKOLAH</h1>
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


<!-- School Identity Section -->
<div class="container mb-5">
    <div class="school-info-card">
        <div class="row g-0">
            <!-- Info Sekolah -->
            <div class="col-md-8 p-4" style="background-color: #1b5e20;">
                <div class="pe-3">
                    <h2 class="text-white mb-4 fw-bold">{{ $info->nama ?? 'Nama Sekolah' }}</h2>

                    <ul class="list-unstyled text-white">
                        <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-map-marker-alt me-3 mt-1"></i>
                            <div>
                                <p class="mb-1">{{ $info->alamat }}</p>
                            </div>
                        </li>

                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-phone me-3"></i>
                            <p class="mb-0">{{ $info->telepon }}</p>
                        </li>

                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-mobile-alt me-3"></i>
                            <p class="mb-0">{{ $info->hp ?? '-' }}</p> {{-- Tambahkan field di DB jika perlu --}}
                        </li>

                        <li class="d-flex align-items-center">
                            <i class="fas fa-envelope me-3"></i>
                            <p class="mb-0">{{ $info->email ?? 'info@smpislamparung.sch.id' }}</p> {{-- Opsional --}}
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Logo Sekolah -->
            <div class="col-md-4 bg-white d-flex align-items-center justify-content-center p-4">
                <div class="text-center">
                    <img src="{{ asset('storage/' . $info->logo) }}"
                        alt="Logo {{ $info->nama }}"
                        class="img-fluid logo-besar"
                        style="max-height: 300px; width: 100%; max-width: 300px;">
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Main Content Section -->
<div class="row g-5">
    <!-- Sejarah Sekolah -->
<div class="col-lg-7">
    <div class="section-header">
        <h2 class="display-5 fw-bold text-success mb-4">Sejarah Sekolah</h2>
    </div>
    <div class="history-details">
        <div class="detail-item bg-light-hover p-4 rounded-3 mb-3">
            <dl class="row">
                <dt class="col-sm-4"><i class="fas fa-calendar-check me-2 text-success"></i>Tahun Berdiri</dt>
                <dd class="col-sm-8">{{ $sejarah?->tahun_berdiri ?? '-' }}</dd>

                <dt class="col-sm-4"><i class="fas fa-school me-2 text-success"></i>Bentuk Sekolah</dt>
                <dd class="col-sm-8">{{ $sejarah?->bentuk_sekolah ?? '-' }}</dd>

                <dt class="col-sm-4"><i class="fas fa-star me-2 text-success"></i>Status Sekolah</dt>
                <dd class="col-sm-8">{{ $sejarah?->status_sekolah ?? '-' }}</dd>

                <dt class="col-sm-4"><i class="fas fa-file-alt me-2 text-success"></i>SK BAN Kab. Bogor</dt>
                <dd class="col-sm-8">
                    {{ $sejarah?->sk_ban ?? '-' }}<br>
                    @if($sejarah?->tgl_sk_ban)
                        <small class="text-muted">
                            Tanggal {{ Carbon::parse($sejarah->tgl_sk_ban)->translatedFormat('d F Y') }}
                        </small>
                    @endif
                </dd>

                <dt class="col-sm-4"><i class="fas fa-clock me-2 text-success"></i>Waktu Penyelenggaraan</dt>
                <dd class="col-sm-8">{{ $sejarah?->waktu_penyelenggaraan ?? '-' }}</dd>

                <dt class="col-sm-4"><i class="fas fa-file-signature me-2 text-success"></i>Dokumen Legal</dt>
                <dd class="col-sm-8">
                    <div>
                        SK Izin: {{ $sejarah?->sk_izin ?? '-' }}
                        @if($sejarah?->tgl_sk_izin)
                            ({{ Carbon::parse($sejarah->tgl_sk_izin)->translatedFormat('d F Y') }})
                        @endif
                    </div>
                    <div>
                        Surat Pengukuhan: {{ $sejarah?->surat_pengukuhan ?? '-' }}
                        @if($sejarah?->tgl_surat_pengukuhan)
                            ({{ Carbon::parse($sejarah->tgl_surat_pengukuhan)->translatedFormat('d F Y') }})
                        @endif
                    </div>
                </dd>

                <dt class="col-sm-4"><i class="fas fa-hashtag me-2 text-success"></i>Nomor Pokok</dt>
                <dd class="col-sm-8">
                    <div>NSS: {{ $sejarah?->nss ?? '-' }}</div>
                    <div>NDS: {{ $sejarah?->nds ?? '-' }}</div>
                    <div>NPSN: {{ $sejarah?->npsn ?? '-' }}</div>
                </dd>
            </dl>
        </div>
    </div>
</div>


    <!-- Kanan: Kepala Sekolah & Aset Sekolah -->
    <div class="col-lg-5 d-flex flex-column">
        <!-- Kepala Sekolah -->
        <div class="leadership-section mb-5">
            <div class="section-header">
                <h2 class="display-5 fw-bold text-success mb-4">Kepala Sekolah</h2>
            </div>
            <div class="leadership-list" style="max-height: 400px; overflow-y: auto;">
                @forelse ($kepalaSekolahs as $leader)
                    <div class="leader-item bg-light-hover p-3 rounded-3 mb-2">
                        <div class="d-flex align-items-center gap-3">
                            <div class="leader-icon text-success">
                                <i class="fas fa-user-tie fa-lg"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-1 fw-semibold">{{ $leader->nama }}</h5>
                                <span class="badge bg-success">{{ $leader->periode }}</span>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-muted">Belum ada data kepala sekolah.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>



<!-- Aset Sekolah -->
<div class="section-header mt-5">
    <h2 class="display-5 fw-bold text-success mb-4">Aset Sekolah</h2>
</div>
<div class="row">
    <!-- Tanah dan Halaman -->
    <div class="col-md-6">
        <div class="asset-section mb-4">
            <h4 class="text-success fw-semibold mb-3">
                <i class="fas fa-map-marked-alt me-2"></i>
                Tanah dan Halaman
            </h4>
            <div class="asset-list">
                <div class="asset-item bg-light-hover p-3 rounded-3 mb-2 d-flex justify-content-between">
                    <span>Status Kepemilikan</span>
                    <span class="fw-semibold">{{ $aset?->status_kepemilikan_tanah ?? '-' }}</span>
                </div>
                <div class="asset-item bg-light-hover p-3 rounded-3 mb-2 d-flex justify-content-between">
                    <span>Total Luas Tanah</span>
                    <span class="fw-semibold">{{ $aset?->luas_tanah ?? '-' }} m²</span>
                </div>
                <div class="asset-details row g-2">
                    <div class="col-6">
                        <div class="bg-light-hover p-3 rounded-3 h-100">
                            <small class="text-muted d-block">Bangunan</small>
                            <div class="fw-semibold">{{ $aset?->luas_bangunan ?? '-' }} m²</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bg-light-hover p-3 rounded-3 h-100">
                            <small class="text-muted d-block">Parkir</small>
                            <div class="fw-semibold">{{ $aset?->luas_parkir ?? '-' }} m²</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bg-light-hover p-3 rounded-3 h-100">
                            <small class="text-muted d-block">Lapangan</small>
                            <div class="fw-semibold">{{ $aset?->luas_lapangan ?? '-' }} m²</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="bg-light-hover p-3 rounded-3 h-100">
                            <small class="text-muted d-block">Lainnya</small>
                            <div class="fw-semibold">{{ $aset?->luas_lainnya ?? '-' }} m²</div>
                        </div>
                    </div>
                </div>
                <div class="asset-item bg-light-hover p-3 rounded-3 mt-2 d-flex justify-content-between align-items-center">
                    <span>No. Sertifikat Tanah</span>
                    <code class="text-success">{{ $aset?->sertifikat_tanah ?? '-' }}</code>
                </div>
            </div>
        </div>
    </div>

    <!-- Gedung dan Bangunan -->
    <div class="col-md-6">
        <div class="asset-section mb-4">
            <h4 class="text-success fw-semibold mb-3">
                <i class="fas fa-building me-2"></i>
                Gedung dan Bangunan
            </h4>
            <div class="asset-list">
                <div class="asset-item bg-light-hover p-3 rounded-3 mb-2 d-flex justify-content-between">
                    <span>Status Kepemilikan</span>
                    <span class="fw-semibold">{{ $aset?->status_kepemilikan_gedung ?? '-' }}</span>
                </div>
                <div class="asset-item bg-light-hover p-3 rounded-3 d-flex justify-content-between">
                    <span>Total Luas Bangunan</span>
                    <span class="fw-semibold">{{ $aset?->total_luas_gedung ?? '-' }} m²</span>
                </div>
            </div>
        </div>
    </div>
</div>



@if($visimisi)
<div class="container my-5">
    <!-- Visi Section -->
    <div class="row g-5 align-items-center mb-5">
        <!-- Text Visi -->
        <div class="col-lg-6">
            <div class="pe-lg-5">
                <h2 class="display-5 fw-bold text-success mb-4">Visi Sekolah</h2>
                <blockquote class="blockquote bg-light-hover p-4 rounded-3 border-start border-4 border-success">
                    <p class="fs-4 fst-italic text-dark mb-0">
                        "{{ $visimisi->visi }}"
                    </p>
                </blockquote>

                <div class="mt-4">
                    <h3 class="h4 fw-bold text-success mb-3">Indikator Visi</h3>
                    <div class="list-group">
                        @foreach ($visimisi->indikator_visi as $i => $item)
                            <div class="list-group-item border-0 bg-transparent px-0">
                                <div class="d-flex align-items-start">
                                    <span class="badge bg-success text-white me-3">{{ $i + 1 }}</span>
                                    <div class="flex-grow-1">
                                        {{ $item['poin'] }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Gambar Visi -->
        <div class="col-lg-6">
            <img src="{{ asset('storage/' . $visimisi->gambar_visi) }}"
                 alt="Gambar Visi"
                 class="img-fluid rounded-4 shadow-lg">
        </div>
    </div>

    <!-- Misi Section -->
    <div class="row g-5 align-items-center mt-5">
        <!-- Gambar Misi -->
        <div class="col-lg-6">
            <img src="{{ asset('storage/' . $visimisi->gambar_misi) }}"
                 alt="Gambar Misi"
                 class="img-fluid rounded-4 shadow-lg">
        </div>

        <!-- Text Misi -->
        <div class="col-lg-6">
            <div class="ps-lg-5">
                <h2 class="display-5 fw-bold text-success mb-4">Misi Sekolah</h2>
                <div class="list-group">
                    @foreach ($visimisi->daftar_misi as $i => $item)
                        <div class="list-group-item border-0 bg-transparent px-0">
                            <div class="d-flex align-items-start">
                                <span class="badge bg-success text-white me-3">{{ $i + 1 }}</span>
                                <div class="flex-grow-1">
                                    {{ $item['poin'] }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@else
    <div class="container my-5">
        <p class="text-muted">Data visi dan misi belum tersedia.</p>
    </div>
@endif


{{-- tujuan sekolah --}}
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <!-- Header -->
            <div class="text-center mb-6">
                <h2 class="display-5 fw-bold text-success mb-4">Tujuan Sekolah</h2>
                <p class="text-muted fs-5 mb-5">
                    Tujuan pendidikan pada SMP Islam Parung adalah langkah untuk mewujudkan visi sekolah dalam jangka waktu tertentu. Pada tahun pelajaran 2024/2025 SMP Islam Parung mencanangkan tujuan pendidikan yang diharapkan yaitu:
                </p>
            </div>

            <!-- Two Column Goals -->
            <div class="row g-5">
                <!-- Left Column -->
                <div class="col-md-6">
                    <div class="goal-item h-100 p-4 bg-light rounded-3">
                        <div class="d-flex align-items-center mb-4">
                            <i class="fas fa-bullseye text-success fs-2 me-3"></i>
                            <h4 class="mb-0 fs-4 fw-semibold">
                                Lulusan Unggul Akademik & Non-Akademik Berkarakter Pancasila
                            </h4>
                        </div>

                        <ul class="list-unstyled">
                            <li class="mb-3 ps-4 position-relative">
                                <i class="fas fa-check-circle text-success position-absolute" style="left: 0;"></i>
                                <span class="text-secondary">Tercapainya hasil belajar peserta didik mencapai ketuntasan untuk seluruh mata pelajaran</span>
                            </li>
                            <li class="mb-3 ps-4 position-relative">
                                <i class="fas fa-check-circle text-success position-absolute" style="left: 0;"></i>
                                <span class="text-secondary">Tercapaian kelulusan peserta didik 100% dengan rata-rata nilai ujian sekolah minimal 75</span>
                            </li>
                            <li class="mb-3 ps-4 position-relative">
                                <i class="fas fa-check-circle text-success position-absolute" style="left: 0;"></i>
                                <span class="text-secondary">Peserta didik mengikuti lomba minimal tingkat kecamatan hingga internasional dengan prestasi minimal tingkat kecamatan</span>
                            </li>
                            <li class="mb-3 ps-4 position-relative">
                                <i class="fas fa-check-circle text-success position-absolute" style="left: 0;"></i>
                                <span class="text-secondary">Pembentukan karakter keimanan, ketaqwaan, dan akhlak mulia dalam pembelajaran sehari-hari</span>
                            </li>
                            <li class="mb-3 ps-4 position-relative">
                                <i class="fas fa-check-circle text-success position-absolute" style="left: 0;"></i>
                                <span class="text-secondary">Pengembangan karakter cinta tanah air, kebinekaan, dan budaya lokal/global</span>
                            </li>
                            <li class="mb-3 ps-4 position-relative">
                                <i class="fas fa-check-circle text-success position-absolute" style="left: 0;"></i>
                                <span class="text-secondary">Pembentukan karakter mandiri, bernalar kritis, kreatif, dan gotong royong</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-md-6">
                    <div class="goal-item h-100 p-4 bg-light rounded-3">
                        <div class="d-flex align-items-center mb-4">
                            <i class="fas fa-users text-success fs-2 me-3"></i>
                            <h4 class="mb-0 fs-4 fw-semibold">
                                Komunitas Belajar Sepanjang Hayat
                            </h4>
                        </div>

                        <ul class="list-unstyled">
                            <li class="mb-3 ps-4 position-relative">
                                <i class="fas fa-check-circle text-success position-absolute" style="left: 0;"></i>
                                <span class="text-secondary">Terlaksananya kegiatan MGMP sekolah untuk diskusi perencanaan dan evaluasi pembelajaran</span>
                            </li>
                            <li class="mb-3 ps-4 position-relative">
                                <i class="fas fa-check-circle text-success position-absolute" style="left: 0;"></i>
                                <span class="text-secondary">90% guru mengikuti pelatihan peningkatan kompetensi sesuai mata pelajaran</span>
                            </li>
                            <li class="mb-3 ps-4 position-relative">
                                <i class="fas fa-check-circle text-success position-absolute" style="left: 0;"></i>
                                <span class="text-secondary">Seluruh peserta didik mengikuti ekstrakurikuler sesuai minat dengan nilai minimal baik</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Struktur Organisasi Section -->
<div class="container mb-5">
    <!-- Header Section -->
    <div class="text-center mb-5">
        <h2 class="display-5 fw-bold text-success mb-4">Struktur Organisasi</h2>
        <p class="text-muted mt-3">Bagian ini menunjukkan hierarki organisasi SMP Islam Parung</p>
    </div>

    <!-- Image Container -->
    @if($struktur?->gambar)
        <div class="structure-container position-relative rounded-4 overflow-hidden shadow-lg"
             data-bs-toggle="modal"
             data-bs-target="#structureModal"
             style="max-width: 1200px; margin: 0 auto;">
            <div class="hover-overlay"></div>
            <img src="{{ Storage::url($struktur->gambar) }}"
                 alt="Struktur Organisasi"
                 class="img-fluid structure-image"
                 loading="lazy">
            <div class="zoom-indicator">
                <i class="fas fa-search-plus text-white"></i>
            </div>
        </div>
    @else
        <p class="text-center text-muted">Belum ada gambar struktur organisasi.</p>
    @endif

    <!-- Caption -->
    <p class="text-center text-muted mt-3 small">
        <i class="fas fa-info-circle me-2"></i>Klik gambar untuk melihat versi lebih besar
    </p>
</div>

<!-- Modal -->
<div class="modal fade" id="structureModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-0">
                @if($struktur?->gambar)
                    <img src="{{ Storage::url($struktur->gambar) }}"
                         class="img-fluid"
                         alt="Struktur Organisasi Detail">
                @else
                    <div class="text-center p-5 text-muted">Tidak ada gambar tersedia.</div>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Lingkungan Sekolah -->

<section class="py-5" id="galeri">
    <div class="container">
        <div class="text-center mb-6">
            <h2 class="display-5 fw-bold text-success mb-4">Lingkungan Sekolah</h2>
        </div>

        <div class="gallery-container position-relative">
            <button class="gallery-control prev" aria-label="Previous" onclick="scrollGallery('left')">
                <i class="fas fa-chevron-left"></i>
            </button>

            <div class="gallery-wrapper">
                @foreach($lingkungans as $item)
                    <div class="gallery-item">
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}">
                        <div class="gallery-overlay">
                            <h5>{{ $item->judul }}</h5>
                        </div>
                    </div>
                @endforeach

            </div>

            <button class="gallery-control next" aria-label="Next" onclick="scrollGallery('right')">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</section>

</div>

<style>
        /* General Styles */
        .section-title {
            color: #1b5e20;
            font-weight: 600;
            position: relative;
            padding-bottom: 0.5rem;
            font-size: 1.3rem;
        }

        .section-title.small-title {
            font-size: 1rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 3px;
            background: #1b5e20;
        }

        /* Timeline Container Styles */
                .section-header {
            border-bottom: 3px solid #1b5e20;
            padding-bottom: 0.5rem;
            margin-bottom: 2rem;
        }

        .detail-item dt {
            font-weight: 500;
            color: #1b5e20;
        }

        .detail-item dd {
            color: #4a4a4a;
        }

        .asset-item {
            transition: all 0.2s ease;
            border: 1px solid rgba(0,0,0,0.05);
        }

        .asset-item:hover {
            background: #fff !important;
            box-shadow: 0 2px 8px rgba(0,0,0,0.03);
            transform: translateY(-2px);
        }

        .bg-light-hover {
            background-color: #f8f9fa;
        }

        code {
            background-color: rgba(27,94,32,0.1);
            padding: 2px 6px;
            border-radius: 4px;
            font-family: monospace;
        }

        .leader-item {
            transition: all 0.2s ease;
            border: 1px solid rgba(0,0,0,0.05);
        }

        .leader-item:hover {
            background: #fff !important;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            transform: translateX(5px);
        }

        .leader-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .badge.bg-success {
            background-color: #1b5e20 !important;
            padding: 0.35em 0.65em;
            font-weight: 500;
        }

        /* Vision & Mission Cards */
        .visi-img {
            max-width: 1200px;      /* perbesar gambar, bisa diubah sesuai kebutuhan */
            width: 90%;            /* responsif */
            margin-top: -60px;     /* naikkan posisi gambar */
        }
        .vision-mission-card {
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 1rem;
            height: 100%;
            transition: all 0.3s ease;
        }

        .vision-mission-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .icon-wrapper {
            width: 50px;
            height: 50px;
            background: rgba(27, 94, 32, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }

        .icon-wrapper i {
            color: #1b5e20;
            font-size: 1.5rem;
        }

        /* Stats Section */
        .stats-container {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .stat-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }

        .stat-item:hover {
            transform: translateX(5px);
            background: #e9ecef;
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            background: #1b5e20;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .stat-content {
            flex: 1;
        }

        .stat-number {
            font-size: 1.5rem;
            font-weight: 600;
            color: #1b5e20;
            line-height: 1;
        }

        .stat-label {
            font-size: 0.9rem;
            color: #6c757d;
        }

        /* Gallery Section */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 0.5rem;
        }

        .gallery-item img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            transition: all 0.3s ease;
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(27, 94, 32, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .gallery-overlay i {
            color: white;
            font-size: 1.5rem;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        /* Identity Section */
        .school-info-card {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        h2 {
            font-size: 1.8rem;
            letter-spacing: 0.5px;
        }

        ul li {
            line-height: 1.6;
            font-size: 1rem;
        }

        .bg-white {
            background: #fff !important;
        }

        .logo-besar {
            max-width: 350px;
            width: 300%;
            max-height: 350px;
        }
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .container-fluid {
                padding: 1rem !important;
            }

            .card-body {
                padding: 1.5rem !important;
            }

            .section-title {
                font-size: 1.1rem;
            }

            .timeline-container {
                padding-right: 0.5rem;
            }

            .timeline-item {
                padding: 1rem;
                margin-bottom: 20px;
            }

            .timeline-content h3 {
                font-size: 1rem;
            }

            .timeline-content p {
                font-size: 0.9rem;
            }

            .achievement-list {
                max-height: 400px !important;
            }

            .achievement-item {
                padding: 0.5rem 0.75rem;
                margin-bottom: 0.35rem;
            }

            .achievement-icon {
                width: 30px;
                height: 30px;
                min-width: 30px;
                font-size: 0.9rem;
            }

            .achievement-content h5 {
                font-size: 0.9rem;
            }

            .achievement-content p {
                font-size: 0.8rem;
            }

            .icon-box {
                width: 35px;
                height: 35px;
                font-size: 1rem;
            }

            .identity-item h6 {
                font-size: 0.9rem;
            }

            .identity-item p {
                font-size: 0.85rem;
            }

            .card {
                margin-bottom: 1.5rem !important;
            }

            .row.g-5 {
                --bs-gutter-y: 1.5rem !important;
            }
        }

        @media (max-width: 576px) {
            .container-fluid {
                padding: 0.75rem !important;
            }

            .card-body {
                padding: 1.25rem !important;
            }

            .achievement-list {
                max-height: 350px !important;
            }

            .timeline {
                padding-left: 30px;
            }

            .timeline-marker {
                left: -14px;
                width: 10px;
                height: 10px;
            }
        }

        /* Custom Scrollbar for Sidebar */
        .achievement-list::-webkit-scrollbar,
        .facility-list::-webkit-scrollbar {
            width: 8px;
        }

        .achievement-list::-webkit-scrollbar-track,
        .facility-list::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .achievement-list::-webkit-scrollbar-thumb,
        .facility-list::-webkit-scrollbar-thumb {
            background: #1b5e20;
            border-radius: 10px;
        }

        .achievement-list::-webkit-scrollbar-thumb:hover,
        .facility-list::-webkit-scrollbar-thumb:hover {
            background: #134718;
        }

        /* Achievement List Styles */
        .achievement-list {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            padding-right: 0.5rem;
        }

        .achievement-item {
            padding: 0.75rem 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 0.5rem;
        }

        .achievement-item:last-child {
            margin-bottom: 0;
        }

        .achievement-item:hover {
            background-color: rgba(27, 94, 32, 0.05);
        }

        .achievement-icon {
            width: 35px;
            height: 35px;
            min-width: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(27, 94, 32, 0.1);
            border-radius: 8px;
            font-size: 1rem;
        }

        .achievement-content {
            flex: 1;
            min-width: 0;
            padding-right: 0.25rem;
        }

        .achievement-content h5 {
            font-size: 0.95rem;
            color: #1b5e20;
            margin-bottom: 0.15rem;
            font-weight: 600;
            line-height: 1.2;
            white-space: nowrap;
        }

        .achievement-content p {
            font-size: 0.85rem;
            color: #666;
            margin: 0;
            line-height: 1.2;
        }

        /* Facility List Styles */
        .facility-list {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .facility-item {
            display: flex;
            align-items: center;
            padding: 0.75rem;
            background: #f8f9fa;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }

        .facility-item:hover {
            transform: translateX(5px);
            background: #e9ecef;
        }

        .facility-item i {
            font-size: 1.1rem;
            width: 24px;
        }

        .facility-item span {
            color: #333;
            font-weight: 500;
        }
        .goal-item {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(0,0,0,0.05);
        }

        .goal-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        }

        h3 span.position-relative:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: #198754;
            transition: width 0.3s ease;
        }



        .text-secondary {
            color: #6c757d !important;
        }

        .section-subtitle {
        font-size: 1.5rem;         /* Ukuran yang proporsional */
        font-weight: 700;          /* Bold */
        color: #1b5e20;            /* Hijau gelap */
        margin-bottom: 1.25rem;    /* Jarak bawah yang nyaman */
        text-align: center;        /* Kalau header card biasanya center */
        line-height: 1.2;
        }

        .card-header h3 {
        font-size: 1.5rem;
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
            background: #1b5e20;
            border: none;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
            flex-shrink: 0;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
        }

        .gallery-control:hover {
            background: #134718;
            transform: translateY(-50%) scale(1.1);
        }

        .gallery-control.prev {
            left: -60px; /* geser tombol kiri keluar 60px ke kiri */
        }

        .gallery-control.next {
            right: -60px; /* geser tombol kanan keluar 60px ke kanan */
        }


        .gallery-control i {
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
            background: #fff;
        }


        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }


        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.2); /* Kurangi opasitas jika perlu */
            padding: 1rem; /* Kurangi padding agar lebih ramping */
            color: white;
            opacity: 1; /* Tetap tampil */
            transition: none; /* Hapus efek transisi */
            display: flex;
            flex-direction: column;
            justify-content: flex-end; /* Pastikan konten berada di bawah */
        }

        .gallery-overlay h5 {
            margin: 0;
            font-size: 1rem; /* Kurangi ukuran font agar lebih proporsional */
            font-weight: 600;
            margin-top: 0.5rem; /* Tambahkan jarak ke bawah */
            padding-top: 0.5rem; /* Tambahkan padding atas jika diperlukan */
        }

        .gallery-overlay p {
            margin: 0.25rem 0 0; /* Kurangi margin atas */
            font-size: 0.85rem; /* Kurangi ukuran font */
            opacity: 0.9;
        }

        /* Responsive */
        @media (max-width: 768px) {
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

        /* visi-misi */
        .accordion-button:not(.collapsed) i {
                transform: rotate(180deg);
            }

            .accordion-button i {
                transition: transform 0.3s ease;
            }

            .accordion-button::after {
                display: none;
            }

        /* struktur organisasi */
        .structure-container {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 2px solid #e9ecef;
            cursor: pointer;
        }

        .structure-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .hover-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.3);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .structure-container:hover .hover-overlay {
            opacity: 1;
        }

        .zoom-indicator {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .structure-container:hover .zoom-indicator {
            opacity: 1;
        }

        .structure-image {
            transition: transform 0.3s ease;
        }

        .structure-container:hover .structure-image {
            transform: scale(1.02);
        }
</style>

<script>
const lightbox = GLightbox({
    selector: '.glightbox',
    touchNavigation: true,
    loop: true,
});
</script>
@endsection

<script>
    function scrollGallery(direction) {
    const wrapper = document.querySelector('.gallery-wrapper');
    const scrollAmount = 350;
    const maxScroll = wrapper.scrollWidth - wrapper.clientWidth;

    if (direction === 'left') {
        if (wrapper.scrollLeft <= 0) {
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
        if (wrapper.scrollLeft >= maxScroll) {
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

@push('scripts')
<script>
function scrollGallery(direction) {
    const wrapper = document.querySelector('.gallery-wrapper');
    const scrollAmount = 350;
    const maxScroll = wrapper.scrollWidth - wrapper.clientWidth;

    if (direction === 'left') {
        if (wrapper.scrollLeft <= 0) {
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
        if (wrapper.scrollLeft >= maxScroll) {
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

@endpush

