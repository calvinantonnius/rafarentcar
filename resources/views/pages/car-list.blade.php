@extends('layouts.app')

@section('title', 'Daftar Rental Mobil - AutoRental')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">Rental Mobil Terpercaya</h1>
            <p class="hero-subtitle">Pilihan kendaraan berkualitas dengan harga terjangkau untuk perjalanan Anda</p>
        </div>
    </div>
</section>

<!-- Promo Section -->
<section class="promo-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Promo Spesial Hari Ini</h2>
            <p class="section-subtitle">Dapatkan penawaran terbaik untuk rental mobil Anda!</p>
        </div>
        
        <div class="promo-grid">
            <!-- Promo Card 1 -->
            <div class="promo-card">
                <div class="promo-badge">
                    <span class="badge-text">DISKON 25%</span>
                </div>
                <div class="promo-image">
                    <img src="/images/cars/avanza-promo.jpg" alt="Toyota Avanza" loading="lazy">
                </div>
                <div class="promo-content">
                    <div class="promo-price">
                        <span class="original-price">Rp 400.000</span>
                        <span class="promo-price-value">Rp 300.000</span>
                        <span class="price-unit">/hari</span>
                    </div>
                    <div class="promo-capacity">
                        <i class="fas fa-users"></i>
                        <span>7 Penumpang</span>
                    </div>
                    <p class="promo-description">
                        Toyota Avanza terbaru dengan AC dingin, audio system, dan interior yang nyaman. Cocok untuk keluarga atau group kecil.
                    </p>
                    <div class="promo-type">
                        <span class="promo-label">Promo Weekend</span>
                    </div>
                    <button class="promo-btn">Lihat Detail</button>
                </div>
            </div>

            <!-- Promo Card 2 -->
            <div class="promo-card">
                <div class="promo-badge">
                    <span class="badge-text">GRATIS DRIVER</span>
                </div>
                <div class="promo-image">
                    <img src="/images/cars/innova-promo.jpg" alt="Toyota Innova" loading="lazy">
                </div>
                <div class="promo-content">
                    <div class="promo-price">
                        <span class="original-price">Rp 600.000</span>
                        <span class="promo-price-value">Rp 500.000</span>
                        <span class="price-unit">/hari</span>
                    </div>
                    <div class="promo-capacity">
                        <i class="fas fa-users"></i>
                        <span>8 Penumpang</span>
                    </div>
                    <p class="promo-description">
                        Toyota Innova Reborn dengan captain seat yang nyaman, bagasi luas, dan performa mesin yang handal untuk perjalanan jauh.
                    </p>
                    <div class="promo-type">
                        <span class="promo-label">Promo Mingguan</span>
                    </div>
                    <button class="promo-btn">Lihat Detail</button>
                </div>
            </div>

            <!-- Promo Card 3 -->
            <div class="promo-card">
                <div class="promo-badge">
                    <span class="badge-text">PAKET HEMAT</span>
                </div>
                <div class="promo-image">
                    <img src="/images/cars/hiace-promo.jpg" alt="Toyota Hiace" loading="lazy">
                </div>
                <div class="promo-content">
                    <div class="promo-price">
                        <span class="original-price">Rp 1.200.000</span>
                        <span class="promo-price-value">Rp 900.000</span>
                        <span class="price-unit">/hari</span>
                    </div>
                    <div class="promo-capacity">
                        <i class="fas fa-users"></i>
                        <span>16 Penumpang</span>
                    </div>
                    <p class="promo-description">
                        Toyota Hiace untuk rombongan besar, dilengkapi AC central, sound system, dan tempat duduk yang ergonomis.
                    </p>
                    <div class="promo-type">
                        <span class="promo-label">Promo Bulanan</span>
                    </div>
                    <button class="promo-btn">Lihat Detail</button>
                </div>
            </div>

            <!-- Promo Card 4 -->
            <div class="promo-card">
                <div class="promo-badge">
                    <span class="badge-text">LUXURY DEAL</span>
                </div>
                <div class="promo-image">
                    <img src="/images/cars/fortuner-promo.jpg" alt="Toyota Fortuner" loading="lazy">
                </div>
                <div class="promo-content">
                    <div class="promo-price">
                        <span class="original-price">Rp 800.000</span>
                        <span class="promo-price-value">Rp 650.000</span>
                        <span class="price-unit">/hari</span>
                    </div>
                    <div class="promo-capacity">
                        <i class="fas fa-users"></i>
                        <span>7 Penumpang</span>
                    </div>
                    <p class="promo-description">
                        Toyota Fortuner VRZ dengan fitur premium, interior leather, dan performa 4WD untuk segala medan perjalanan.
                    </p>
                    <div class="promo-type">
                        <span class="promo-label">Promo VIP</span>
                    </div>
                    <button class="promo-btn">Lihat Detail</button>
                </div>
            </div>

            <!-- Promo Card 5 -->
            <div class="promo-card">
                <div class="promo-badge">
                    <span class="badge-text">CITY CAR</span>
                </div>
                <div class="promo-image">
                    <img src="/images/cars/agya-promo.jpg" alt="Toyota Agya" loading="lazy">
                </div>
                <div class="promo-content">
                    <div class="promo-price">
                        <span class="original-price">Rp 300.000</span>
                        <span class="promo-price-value">Rp 250.000</span>
                        <span class="price-unit">/hari</span>
                    </div>
                    <div class="promo-capacity">
                        <i class="fas fa-users"></i>
                        <span>5 Penumpang</span>
                    </div>
                    <p class="promo-description">
                        Toyota Agya yang irit BBM dan lincah untuk perjalanan dalam kota. Cocok untuk pasangan atau keluarga kecil.
                    </p>
                    <div class="promo-type">
                        <span class="promo-label">Promo Harian</span>
                    </div>
                    <button class="promo-btn">Lihat Detail</button>
                </div>
            </div>

            <!-- Promo Card 6 -->
            <div class="promo-card">
                <div class="promo-badge">
                    <span class="badge-text">ALL IN ONE</span>
                </div>
                <div class="promo-image">
                    <img src="/images/cars/xpander-promo.jpg" alt="Mitsubishi Xpander" loading="lazy">
                </div>
                <div class="promo-content">
                    <div class="promo-price">
                        <span class="original-price">Rp 550.000</span>
                        <span class="promo-price-value">Rp 450.000</span>
                        <span class="price-unit">/hari</span>
                    </div>
                    <div class="promo-capacity">
                        <i class="fas fa-users"></i>
                        <span>7 Penumpang</span>
                    </div>
                    <p class="promo-description">
                        Mitsubishi Xpander dengan desain modern, kabin luas, dan fitur keselamatan lengkap untuk kenyamanan maksimal.
                    </p>
                    <div class="promo-type">
                        <span class="promo-label">Promo Keluarga</span>
                    </div>
                    <button class="promo-btn">Lihat Detail</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Filter Section -->
<section class="filter-section">
    <div class="container">
        <div class="filter-controls">
            <div class="filter-group">
                <label for="capacity-filter">Kapasitas:</label>
                <select id="capacity-filter" class="filter-select">
                    <option value="">Semua Kapasitas</option>
                    <option value="5">5 Penumpang</option>
                    <option value="7">7 Penumpang</option>
                    <option value="8">8 Penumpang</option>
                    <option value="16">16+ Penumpang</option>
                </select>
            </div>
            <div class="filter-group">
                <label for="price-filter">Harga per Hari:</label>
                <select id="price-filter" class="filter-select">
                    <option value="">Semua Harga</option>
                    <option value="0-300">< Rp 300.000</option>
                    <option value="300-500">Rp 300.000 - 500.000</option>
                    <option value="500-800">Rp 500.000 - 800.000</option>
                    <option value="800+">Rp 800.000+</option>
                </select>
            </div>
            <div class="filter-group">
                <label for="type-filter">Jenis Kendaraan:</label>
                <select id="type-filter" class="filter-select">
                    <option value="">Semua Jenis</option>
                    <option value="city-car">City Car</option>
                    <option value="mpv">MPV</option>
                    <option value="suv">SUV</option>
                    <option value="bus">Bus/Hiace</option>
                </select>
            </div>
        </div>
    </div>
</section>

<!-- Car List Section -->
<section class="car-list-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Semua Kendaraan Rental</h2>
            <p class="section-subtitle">Pilihan lengkap untuk berbagai kebutuhan perjalanan Anda</p>
        </div>
        
        <div class="car-grid" id="car-grid">
            <!-- Car Item 1 -->
            <div class="car-card" data-capacity="7" data-price="350" data-type="mpv">
                <div class="car-image">
                    <img src="/images/cars/toyota-avanza.jpg" alt="Toyota Avanza" loading="lazy">
                    <div class="car-status">Tersedia</div>
                </div>
                <div class="car-info">
                    <h3 class="car-name">Toyota Avanza</h3>
                    <div class="car-capacity">
                        <i class="fas fa-users"></i>
                        <span>7 Penumpang</span>
                    </div>
                    <p class="car-description">
                        Mobil keluarga yang nyaman dengan AC dingin, bagasi luas, dan konsumsi BBM yang irit. Cocok untuk perjalanan keluarga atau grup kecil.
                    </p>
                    <div class="car-price">
                        <span class="price-value">Rp 350.000</span>
                        <span class="price-unit">/hari</span>
                    </div>
                    <div class="car-actions">
                        <button class="btn-detail">Detail</button>
                        <button class="btn-book">Booking Sekarang</button>
                    </div>
                </div>
            </div>

            <!-- Car Item 2 -->
            <div class="car-card" data-capacity="8" data-price="500" data-type="mpv">
                <div class="car-image">
                    <img src="/images/cars/toyota-innova.jpg" alt="Toyota Innova" loading="lazy">
                    <div class="car-status">Tersedia</div>
                </div>
                <div class="car-info">
                    <h3 class="car-name">Toyota Innova Reborn</h3>
                    <div class="car-capacity">
                        <i class="fas fa-users"></i>
                        <span>8 Penumpang</span>
                    </div>
                    <p class="car-description">
                        MPV premium dengan captain seat yang nyaman, fitur keselamatan lengkap, dan performa mesin diesel yang handal untuk perjalanan jauh.
                    </p>
                    <div class="car-price">
                        <span class="price-value">Rp 500.000</span>
                        <span class="price-unit">/hari</span>
                    </div>
                    <div class="car-actions">
                        <button class="btn-detail">Detail</button>
                        <button class="btn-book">Booking Sekarang</button>
                    </div>
                </div>
            </div>

            <!-- Car Item 3 -->
            <div class="car-card" data-capacity="7" data-price="650" data-type="suv">
                <div class="car-image">
                    <img src="/images/cars/toyota-fortuner.jpg" alt="Toyota Fortuner" loading="lazy">
                    <div class="car-status">Tersedia</div>
                </div>
                <div class="car-info">
                    <h3 class="car-name">Toyota Fortuner VRZ</h3>
                    <div class="car-capacity">
                        <i class="fas fa-users"></i>
                        <span>7 Penumpang</span>
                    </div>
                    <p class="car-description">
                        SUV mewah dengan interior leather, fitur 4WD, dan teknologi terdepan. Sempurna untuk perjalanan bisnis atau wisata premium.
                    </p>
                    <div class="car-price">
                        <span class="price-value">Rp 650.000</span>
                        <span class="price-unit">/hari</span>
                    </div>
                    <div class="car-actions">
                        <button class="btn-detail">Detail</button>
                        <button class="btn-book">Booking Sekarang</button>
                    </div>
                </div>
            </div>

            <!-- Car Item 4 -->
            <div class="car-card" data-capacity="5" data-price="250" data-type="city-car">
                <div class="car-image">
                    <img src="/images/cars/toyota-agya.jpg" alt="Toyota Agya" loading="lazy">
                    <div class="car-status">Tersedia</div>
                </div>
                <div class="car-info">
                    <h3 class="car-name">Toyota Agya</h3>
                    <div class="car-capacity">
                        <i class="fas fa-users"></i>
                        <span>5 Penumpang</span>
                    </div>
                    <p class="car-description">
                        City car yang irit BBM dan mudah bermanuver di dalam kota. Ideal untuk pasangan atau keluarga kecil dengan budget terbatas.
                    </p>
                    <div class="car-price">
                        <span class="price-value">Rp 250.000</span>
                        <span class="price-unit">/hari</span>
                    </div>
                    <div class="car-actions">
                        <button class="btn-detail">Detail</button>
                        <button class="btn-book">Booking Sekarang</button>
                    </div>
                </div>
            </div>

            <!-- Car Item 5 -->
            <div class="car-card" data-capacity="16" data-price="900" data-type="bus">
                <div class="car-image">
                    <img src="/images/cars/toyota-hiace.jpg" alt="Toyota Hiace" loading="lazy">
                    <div class="car-status">Tersedia</div>
                </div>
                <div class="car-info">
                    <h3 class="car-name">Toyota Hiace</h3>
                    <div class="car-capacity">
                        <i class="fas fa-users"></i>
                        <span>16 Penumpang</span>
                    </div>
                    <p class="car-description">
                        Bus mini dengan kapasitas besar, AC central, dan sound system. Cocok untuk rombongan, study tour, atau perjalanan grup.
                    </p>
                    <div class="car-price">
                        <span class="price-value">Rp 900.000</span>
                        <span class="price-unit">/hari</span>
                    </div>
                    <div class="car-actions">
                        <button class="btn-detail">Detail</button>
                        <button class="btn-book">Booking Sekarang</button>
                    </div>
                </div>
            </div>

            <!-- Car Item 6 -->
            <div class="car-card" data-capacity="7" data-price="450" data-type="mpv">
                <div class="car-image">
                    <img src="/images/cars/mitsubishi-xpander.jpg" alt="Mitsubishi Xpander" loading="lazy">
                    <div class="car-status">Tersedia</div>
                </div>
                <div class="car-info">
                    <h3 class="car-name">Mitsubishi Xpander</h3>
                    <div class="car-capacity">
                        <i class="fas fa-users"></i>
                        <span>7 Penumpang</span>
                    </div>
                    <p class="car-description">
                        MPV modern dengan desain stylish, kabin luas, dan fitur keselamatan lengkap. Pilihan tepat untuk keluarga masa kini.
                    </p>
                    <div class="car-price">
                        <span class="price-value">Rp 450.000</span>
                        <span class="price-unit">/hari</span>
                    </div>
                    <div class="car-actions">
                        <button class="btn-detail">Detail</button>
                        <button class="btn-book">Booking Sekarang</button>
                    </div>
                </div>
            </div>

            <!-- Car Item 7 -->
            <div class="car-card" data-capacity="5" data-price="300" data-type="city-car">
                <div class="car-image">
                    <img src="/images/cars/honda-brio.jpg" alt="Honda Brio" loading="lazy">
                    <div class="car-status">Tersedia</div>
                </div>
                <div class="car-info">
                    <h3 class="car-name">Honda Brio</h3>
                    <div class="car-capacity">
                        <i class="fas fa-users"></i>
                        <span>5 Penumpang</span>
                    </div>
                    <p class="car-description">
                        Hatchback kompak dengan interior yang lapang, teknologi Honda SENSING, dan efisiensi bahan bakar yang excellent.
                    </p>
                    <div class="car-price">
                        <span class="price-value">Rp 300.000</span>
                        <span class="price-unit">/hari</span>
                    </div>
                    <div class="car-actions">
                        <button class="btn-detail">Detail</button>
                        <button class="btn-book">Booking Sekarang</button>
                    </div>
                </div>
            </div>

            <!-- Car Item 8 -->
            <div class="car-card" data-capacity="7" data-price="550" data-type="suv">
                <div class="car-image">
                    <img src="/images/cars/pajero-sport.jpg" alt="Pajero Sport" loading="lazy">
                    <div class="car-status">Tersedia</div>
                </div>
                <div class="car-info">
                    <h3 class="car-name">Mitsubishi Pajero Sport</h3>
                    <div class="car-capacity">
                        <i class="fas fa-users"></i>
                        <span>7 Penumpang</span>
                    </div>
                    <p class="car-description">
                        SUV tangguh dengan kemampuan off-road yang mumpuni, interior premium, dan fitur keselamatan lengkap untuk petualangan.
                    </p>
                    <div class="car-price">
                        <span class="price-value">Rp 550.000</span>
                        <span class="price-unit">/hari</span>
                    </div>
                    <div class="car-actions">
                        <button class="btn-detail">Detail</button>
                        <button class="btn-book">Booking Sekarang</button>
                    </div>
                </div>
            </div>

            <!-- Car Item 9 -->
            <div class="car-card" data-capacity="7" data-price="400" data-type="mpv">
                <div class="car-image">
                    <img src="/images/cars/suzuki-ertiga.jpg" alt="Suzuki Ertiga" loading="lazy">
                    <div class="car-status">Tersedia</div>
                </div>
                <div class="car-info">
                    <h3 class="car-name">Suzuki Ertiga</h3>
                    <div class="car-capacity">
                        <i class="fas fa-users"></i>
                        <span>7 Penumpang</span>
                    </div>
                    <p class="car-description">
                        MPV dengan desain elegan, kabin nyaman, dan efisiensi bahan bakar yang baik. Solusi transportasi keluarga yang ekonomis.
                    </p>
                    <div class="car-price">
                        <span class="price-value">Rp 400.000</span>
                        <span class="price-unit">/hari</span>
                    </div>
                    <div class="car-actions">
                        <button class="btn-detail">Detail</button>
                        <button class="btn-book">Booking Sekarang</button>
                    </div>
                </div>
            </div>

            <!-- Car Item 10 -->
            <div class="car-card" data-capacity="8" data-price="600" data-type="mpv">
                <div class="car-image">
                    <img src="/images/cars/honda-odyssey.jpg" alt="Honda Odyssey" loading="lazy">
                    <div class="car-status">Tersedia</div>
                </div>
                <div class="car-info">
                    <h3 class="car-name">Honda Odyssey</h3>
                    <div class="car-capacity">
                        <i class="fas fa-users"></i>
                        <span>8 Penumpang</span>
                    </div>
                    <p class="car-description">
                        MPV premium dengan captain seat yang sangat nyaman, entertainment system, dan teknologi terdepan untuk kenyamanan maksimal.
                    </p>
                    <div class="car-price">
                        <span class="price-value">Rp 600.000</span>
                        <span class="price-unit">/hari</span>
                    </div>
                    <div class="car-actions">
                        <button class="btn-detail">Detail</button>
                        <button class="btn-book">Booking Sekarang</button>
                    </div>
                </div>
            </div>

            <!-- Car Item 11 -->
            <div class="car-card" data-capacity="7" data-price="480" data-type="suv">
                <div class="car-image">
                    <img src="/images/cars/honda-crv.jpg" alt="Honda CR-V" loading="lazy">
                    <div class="car-status">Tersedia</div>
                </div>
                <div class="car-info">
                    <h3 class="car-name">Honda CR-V</h3>
                    <div class="car-capacity">
                        <i class="fas fa-users"></i>
                        <span>7 Penumpang</span>
                    </div>
                    <p class="car-description">
                        SUV compact dengan teknologi hybrid, interior spacious, dan fitur keselamatan Honda SENSING untuk perjalanan yang aman.
                    </p>
                    <div class="car-price">
                        <span class="price-value">Rp 480.000</span>
                        <span class="price-unit">/hari</span>
                    </div>
                    <div class="car-actions">
                        <button class="btn-detail">Detail</button>
                        <button class="btn-book">Booking Sekarang</button>
                    </div>
                </div>
            </div>

            <!-- Car Item 12 -->
            <div class="car-card" data-capacity="5" data-price="350" data-type="city-car">
                <div class="car-image">
                    <img src="/images/cars/nissan-march.jpg" alt="Nissan March" loading="lazy">
                    <div class="car-status">Tersedia</div>
                </div>
                <div class="car-info">
                    <h3 class="car-name">Nissan March</h3>
                    <div class="car-capacity">
                        <i class="fas fa-users"></i>
                        <span>5 Penumpang</span>
                    </div>
                    <p class="car-description">
                        City car stylish dengan desain modern, interior colorful, dan teknologi Nissan yang membuat berkendara jadi menyenangkan.
                    </p>
                    <div class="car-price">
                        <span class="price-value">Rp 350.000</span>
                        <span class="price-unit">/hari</span>
                    </div>
                    <div class="car-actions">
                        <button class="btn-detail">Detail</button>
                        <button class="btn-book">Booking Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Butuh Bantuan Memilih Kendaraan?</h2>
            <p class="cta-subtitle">Tim customer service kami siap membantu Anda menemukan kendaraan rental yang sesuai dengan kebutuhan dan budget</p>
            <div class="cta-buttons">
                <button class="btn-primary">Hubungi CS</button>
                <button class="btn-secondary">Lihat Syarat & Ketentuan</button>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/car-list.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@endpush

@push('scripts')
<script src="{{ asset('js/car-list.js') }}"></script>
@endpush