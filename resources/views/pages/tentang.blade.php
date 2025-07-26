@extends('layouts.app')

@section('title', 'Tentang Kami - Rental Mobil')

@section('content')
<div class="about-page">
    {{-- Hero Section --}}
    <section class="hero-about">
        <div class="hero-overlay">
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title fade-in">Tentang Kami</h1>
                    <p class="hero-subtitle fade-in">Kepercayaan dan kenyamanan adalah prioritas utama kami</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Company Info Section --}}
    <section class="company-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="info-content slide-in-left">
                        <h2>Siapa Kami?</h2>
                        <p>Kami adalah perusahaan rental mobil terpercaya yang telah melayani ribuan pelanggan selama lebih dari 10 tahun. Dengan armada lengkap dan pelayanan profesional, kami berkomitmen memberikan pengalaman berkendara yang aman dan nyaman.</p>
                        <p>Didirikan pada tahun 2014 di Bandar Lampung, kami telah berkembang menjadi salah satu penyedia jasa rental mobil terkemuka di Lampung dengan lebih dari 100 unit kendaraan berkualitas.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-image slide-in-right">
                        <img src="{{ asset('images/about-company.jpg') }}" alt="Tentang Perusahaan" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Vision Mission Section --}}
    <section class="vision-mission">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="fade-in">Visi & Misi</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="vm-card vision-card slide-up">
                        <div class="vm-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3>Visi</h3>
                        <p>Menjadi perusahaan rental mobil terdepan yang memberikan layanan berkualitas tinggi dan terpercaya di seluruh Indonesia.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="vm-card mission-card slide-up">
                        <div class="vm-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3>Misi</h3>
                        <ul>
                            <li>Menyediakan armada kendaraan berkualitas dan terawat</li>
                            <li>Memberikan pelayanan yang ramah dan profesional</li>
                            <li>Menjamin keamanan dan kenyamanan pelanggan</li>
                            <li>Mengembangkan inovasi dalam layanan rental</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Services Section --}}
    <section class="services-overview">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="fade-in">Layanan Kami</h2>
                <p class="fade-in">Berbagai pilihan layanan rental yang dapat disesuaikan dengan kebutuhan Anda</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-card slide-up">
                        <div class="service-icon">
                            <i class="fas fa-car"></i>
                        </div>
                        <h4>Rental Harian</h4>
                        <p>Solusi transportasi fleksibel untuk kebutuhan harian Anda dengan berbagai pilihan kendaraan.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card slide-up">
                        <div class="service-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <h4>Rental Bulanan</h4>
                        <p>Paket hemat untuk kebutuhan jangka panjang dengan harga khusus dan pelayanan maksimal.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card slide-up">
                        <div class="service-icon">
                            <i class="fas fa-route"></i>
                        </div>
                        <h4>Antar Jemput</h4>
                        <p>Layanan antar jemput ke lokasi Anda untuk kemudahan dan kenyamanan maksimal.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Team Section --}}
    <section class="team-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="fade-in">Tim Kami</h2>
                <p class="fade-in">Profesional berpengalaman yang siap melayani Anda</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="team-card slide-up">
                        <div class="team-image">
                            <img src="{{ asset('images/team-1.jpg') }}" alt="CEO" class="img-fluid">
                        </div>
                        <div class="team-info">
                            <h4>Ahmad Setiawan</h4>
                            <p class="position">CEO & Founder</p>
                            <p class="description">Berpengalaman 15 tahun di industri otomotif dan transportasi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card slide-up">
                        <div class="team-image">
                            <img src="{{ asset('images/team-2.jpg') }}" alt="Manager" class="img-fluid">
                        </div>
                        <div class="team-info">
                            <h4>Sari Indrawati</h4>
                            <p class="position">Operations Manager</p>
                            <p class="description">Ahli dalam manajemen operasional dan customer service.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card slide-up">
                        <div class="team-image">
                            <img src="{{ asset('images/team-3.jpg') }}" alt="Teknisi" class="img-fluid">
                        </div>
                        <div class="team-info">
                            <h4>Budi Santoso</h4>
                            <p class="position">Head Mechanic</p>
                            <p class="description">Teknisi berpengalaman untuk memastikan kondisi kendaraan prima.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Statistics Section --}}
    <section class="statistics">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-number" data-count="10">0</div>
                        <div class="stat-label">Tahun Pengalaman</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-number" data-count="100">0</div>
                        <div class="stat-label">Unit Kendaraan</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-number" data-count="5000">0</div>
                        <div class="stat-label">Pelanggan Puas</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-number" data-count="24">0</div>
                        <div class="stat-label">Jam Layanan</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact CTA Section
    <section class="contact-cta">
        <div class="container">
            <div class="cta-content text-center">
                <h2 class="fade-in">Siap Memulai Perjalanan Anda?</h2>
                <p class="fade-in">Hubungi kami sekarang untuk mendapatkan penawaran terbaik</p>
                <div class="cta-buttons fade-in">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Hubungi Kami</a>
                    <a href="{{ route('cars') }}" class="btn btn-outline">Lihat Armada</a>
                </div>
            </div>
        </div>
    </section> --}}
</div>
@endsection
@push('about')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@push('about')
<script src="{{ asset('js/about.js') }}"></script>
@endpush