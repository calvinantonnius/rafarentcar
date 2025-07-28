<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarat & Ketentuan - RafaRentCar</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #fafbfc;
            color: #1a1a1a;
            line-height: 1.6;
            font-size: 16px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            min-height: 100vh;
            box-shadow: 0 0 60px rgba(0, 0, 0, 0.08);
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 60px 60px;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .header::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -10%;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
        }

        .header-content {
            position: relative;
            z-index: 2;
        }

        .company-logo {
            font-size: 24px;
            font-weight: 800;
            margin-bottom: 20px;
            opacity: 0.9;
        }

        .header-title {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 16px;
            letter-spacing: -1px;
        }

        .header-subtitle {
            font-size: 18px;
            opacity: 0.85;
            font-weight: 400;
            margin-bottom: 30px;
            max-width: 500px;
        }

        .last-updated {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
        }

        /* Navigation */
        .nav {
            background: #f8f9fa;
            border-bottom: 1px solid #e9ecef;
            padding: 0 60px;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-list {
            display: flex;
            list-style: none;
            overflow-x: auto;
            padding: 0;
            margin: 0;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .nav-list::-webkit-scrollbar {
            display: none;
        }

        .nav-item {
            white-space: nowrap;
        }

        .nav-link {
            display: block;
            padding: 20px 24px;
            color: #6c757d;
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            border-bottom: 3px solid transparent;
            transition: all 0.3s ease;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #667eea;
            border-bottom-color: #667eea;
            background: rgba(102, 126, 234, 0.05);
        }

        /* Content */
        .content {
            padding: 60px;
        }

        .section {
            margin-bottom: 80px;
            scroll-margin-top: 80px;
        }

        .section:last-child {
            margin-bottom: 40px;
        }

        .section-header {
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 2px solid #f1f3f4;
        }

        .section-number {
            display: inline-block;
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border-radius: 12px;
            font-weight: 700;
            font-size: 18px;
            text-align: center;
            line-height: 40px;
            margin-bottom: 16px;
        }

        .section-title {
            font-size: 32px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 12px;
            letter-spacing: -0.5px;
        }

        .section-description {
            font-size: 18px;
            color: #6c757d;
            font-weight: 400;
        }

        .subsection {
            margin-bottom: 40px;
        }

        .subsection-title {
            font-size: 20px;
            font-weight: 600;
            color: #343a40;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .subsection-number {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 28px;
            height: 28px;
            background: #f8f9fa;
            border: 2px solid #dee2e6;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 700;
            color: #6c757d;
        }

        .content-text {
            font-size: 16px;
            color: #495057;
            margin-bottom: 20px;
            text-align: justify;
        }

        .content-list {
            list-style: none;
            margin: 20px 0;
            padding: 0;
        }

        .content-list li {
            position: relative;
            padding: 12px 0 12px 40px;
            font-size: 16px;
            color: #495057;
            border-left: 4px solid #f8f9fa;
            margin-bottom: 8px;
            background: #fcfcfd;
            border-radius: 0 8px 8px 0;
            transition: all 0.3s ease;
        }

        .content-list li:hover {
            border-left-color: #667eea;
            background: #f8f9ff;
        }

        .content-list li::before {
            content: '→';
            position: absolute;
            left: 16px;
            top: 12px;
            color: #667eea;
            font-weight: 700;
        }

        .content-list li strong {
            color: #1a1a1a;
            font-weight: 600;
        }

        /* Highlight boxes */
        .highlight-box {
            background: linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%);
            border: 1px solid #ffc107;
            border-radius: 16px;
            padding: 30px;
            margin: 40px 0;
            position: relative;
        }

        .highlight-box::before {
            content: '⚠️';
            position: absolute;
            top: -15px;
            left: 30px;
            background: #ffc107;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }

        .highlight-title {
            font-size: 18px;
            font-weight: 700;
            color: #856404;
            margin-bottom: 12px;
        }

        .highlight-text {
            font-size: 16px;
            color: #856404;
        }

        /* Info boxes */
        .info-box {
            background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
            border: 1px solid #2196f3;
            border-radius: 16px;
            padding: 30px;
            margin: 40px 0;
            position: relative;
        }

        .info-box::before {
            content: 'ℹ️';
            position: absolute;
            top: -15px;
            left: 30px;
            background: #2196f3;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }

        .info-title {
            font-size: 18px;
            font-weight: 700;
            color: #0d47a1;
            margin-bottom: 12px;
        }

        .info-text {
            font-size: 16px;
            color: #1565c0;
        }

        /* Footer */
        .footer {
            background: #1a1a1a;
            color: white;
            padding: 60px;
            text-align: center;
        }

        .footer-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 16px;
        }

        .footer-text {
            font-size: 16px;
            opacity: 0.8;
            margin-bottom: 30px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .footer-contacts {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .footer-contact {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 255, 255, 0.1);
            padding: 12px 20px;
            border-radius: 12px;
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .footer-contact:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header {
                padding: 40px 24px 30px;
            }

            .header-title {
                font-size: 32px;
            }

            .nav {
                padding: 0 24px;
            }

            .nav-link {
                padding: 16px 20px;
                font-size: 13px;
            }

            .content {
                padding: 40px 24px;
            }

            .section-title {
                font-size: 24px;
            }

            .section-description {
                font-size: 16px;
            }

            .footer {
                padding: 40px 24px;
            }

            .footer-contacts {
                flex-direction: column;
                align-items: center;
            }

            .footer-contact {
                width: 100%;
                max-width: 250px;
                justify-content: center;
            }
        }

        /* Smooth scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Loading animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section {
            animation: fadeInUp 0.6s ease-out;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <header class="header">
            <div class="header-content">
                <div class="company-logo">RafaRentCar</div>
                <h1 class="header-title">Syarat & Ketentuan</h1>
                <p class="header-subtitle">Panduan lengkap mengenai hak dan kewajiban dalam penggunaan layanan rental mobil RafaRentCar.</p>
                <div class="last-updated">
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                    </svg>
                    Diperbarui: 28 Juli 2025
                </div>
            </div>
        </header>

        <!-- Navigation -->
        <nav class="nav">
            <ul class="nav-list">
                <li class="nav-item"><a href="#section-1" class="nav-link">Ketentuan Umum</a></li>
                <li class="nav-item"><a href="#section-2" class="nav-link">Persyaratan</a></li>
                <li class="nav-item"><a href="#section-3" class="nav-link">Ketentuan Sewa</a></li>
                <li class="nav-item"><a href="#section-4" class="nav-link">Kewajiban Penyewa</a></li>
                <li class="nav-item"><a href="#section-5" class="nav-link">Kewajiban Pemilik</a></li>
                <li class="nav-item"><a href="#section-6" class="nav-link">Pembayaran</a></li>
                <li class="nav-item"><a href="#section-7" class="nav-link">Asuransi</a></li>
                <li class="nav-item"><a href="#section-8" class="nav-link">Pembatalan</a></li>
                <li class="nav-item"><a href="#section-9" class="nav-link">Force Majeure</a></li>
                <li class="nav-item"><a href="#section-10" class="nav-link">Lain-lain</a></li>
            </ul>
        </nav>

        <!-- Content -->
        <main class="content">
            <!-- Section 1 -->
            <section class="section" id="section-1">
                <div class="section-header">
                    <div class="section-number">1</div>
                    <h2 class="section-title">Ketentuan Umum</h2>
                    <p class="section-description">Definisi dan ruang lingkup syarat ketentuan layanan RafaRentCar</p>
                </div>

                <div class="subsection">
                    <h3 class="subsection-title">
                        <span class="subsection-number">1.1</span>
                        Definisi
                    </h3>
                    <p class="content-text">Dalam syarat dan ketentuan ini, yang dimaksud dengan:</p>
                    <ul class="content-list">
                        <li><strong>RafaRentCar</strong> adalah perusahaan penyedia layanan rental mobil yang berkedudukan di Bandar Lampung, Lampung</li>
                        <li><strong>Penyewa</strong> adalah pihak yang menyewa kendaraan dari RafaRentCar</li>
                        <li><strong>Kendaraan</strong> adalah mobil yang disewakan beserta perlengkapan dan aksesorisnya</li>
                        <li><strong>Masa Sewa</strong> adalah periode waktu yang disepakati untuk penggunaan kendaraan</li>
                        <li><strong>Layanan</strong> mencakup rental harian, mingguan, bulanan, dan paket wisata</li>
                    </ul>
                </div>

                <div class="subsection">
                    <h3 class="subsection-title">
                        <span class="subsection-number">1.2</span>
                        Ruang Lingkup
                    </h3>
                    <p class="content-text">Syarat dan ketentuan ini berlaku untuk semua layanan rental mobil yang disediakan oleh RafaRentCar dan mengikat secara hukum bagi kedua belah pihak sejak ditandatanganinya kontrak sewa.</p>
                </div>
            </section>

            <!-- Section 2 -->
            <section class="section" id="section-2">
                <div class="section-header">
                    <div class="section-number">2</div>
                    <h2 class="section-title">Persyaratan Penyewa</h2>
                    <p class="section-description">Dokumen dan kriteria yang harus dipenuhi untuk menyewa kendaraan</p>
                </div>

                <div class="subsection">
                    <h3 class="subsection-title">
                        <span class="subsection-number">2.1</span>
                        Persyaratan Umum
                    </h3>
                    <ul class="content-list">
                        <li>Berusia minimal <strong>21 tahun</strong> dan maksimal <strong>65 tahun</strong></li>
                        <li>Memiliki SIM A yang masih berlaku minimal <strong>1 tahun</strong></li>
                        <li>Menyerahkan fotokopi <strong>KTP</strong> yang masih berlaku</li>
                        <li>Menyerahkan fotokopi <strong>Kartu Keluarga (KK)</strong></li>
                        <li>Menyerahkan jaminan berupa <strong>BPKB motor</strong> atau dokumen berharga</li>
                    </ul>
                </div>

                <div class="subsection">
                    <h3 class="subsection-title">
                        <span class="subsection-number">2.2</span>
                        Persyaratan Khusus
                    </h3>
                    <p class="content-text">Untuk penyewa dari luar kota Bandar Lampung:</p>
                    <ul class="content-list">
                        <li>Surat keterangan domisili dari kelurahan setempat</li>
                        <li>Deposit tambahan sesuai ketentuan yang berlaku</li>
                        <li>Referensi penjamin yang dapat dihubungi</li>
                        <li>Bukti penghasilan atau slip gaji terbaru</li>
                    </ul>
                </div>

                <div class="info-box">
                    <div class="info-title">Informasi Penting</div>
                    <div class="info-text">Semua dokumen akan dikembalikan setelah masa sewa berakhir dan kendaraan dikembalikan dalam kondisi baik.</div>
                </div>
            </section>

            <!-- Section 3 -->
            <section class="section" id="section-3">
                <div class="section-header">
                    <div class="section-number">3</div>
                    <h2 class="section-title">Ketentuan Sewa</h2>
                    <p class="section-description">Prosedur pemesanan, pengambilan, dan pengembalian kendaraan</p>
                </div>

                <div class="subsection">
                    <h3 class="subsection-title">
                        <span class="subsection-number">3.1</span>
                        Pemesanan
                    </h3>
                    <p class="content-text">Pemesanan dapat dilakukan melalui berbagai channel komunikasi:</p>
                    <ul class="content-list">
                        <li>Telepon langsung ke customer service</li>
                        <li>Email ke alamat resmi RafaRentCar</li>
                        <li>Kunjungan langsung ke kantor</li>
                        <li>Melalui website atau aplikasi mobile</li>
                        <li>WhatsApp Business untuk respon cepat</li>
                    </ul>
                </div>

                <div class="subsection">
                    <h3 class="subsection-title">
                        <span class="subsection-number">3.2</span>
                        Pengambilan Kendaraan
                    </h3>
                    <ul class="content-list">
                        <li>Waktu pengambilan standar: <strong>08.00 WIB</strong></li>
                        <li>Keterlambatan pengambilan: <strong>Rp 25.000/jam</strong></li>
                        <li>Pengecekan kondisi kendaraan bersama petugas wajib dilakukan</li>
                        <li>Dokumentasi foto kondisi kendaraan untuk referensi</li>
                        <li>Briefing penggunaan kendaraan dan emergency contact</li>
                    </ul>
                </div>

                <div class="subsection">
                    <h3 class="subsection-title">
                        <span class="subsection-number">3.3</span>
                        Pengembalian Kendaraan
                    </h3>
                    <ul class="content-list">
                        <li>Pengembalian sesuai waktu yang disepakati dalam kontrak</li>
                        <li>Denda keterlambatan: <strong>Rp 50.000/jam</strong></li>
                        <li>Kendaraan harus bersih dan bahan bakar penuh</li>
                        <li>Pemeriksaan kondisi kendaraan oleh teknisi</li>
                        <li>Pengembalian deposit jika tidak ada kerusakan</li>
                    </ul>
                </div>
            </section>

            <!-- Section 4 -->
            <section class="section" id="section-4">
                <div class="section-header">
                    <div class="section-number">4</div>
                    <h2 class="section-title">Kewajiban Penyewa</h2>
                    <p class="section-description">Tanggung jawab dan kewajiban yang harus dipenuhi selama masa sewa</p>
                </div>

                <div class="subsection">
                    <h3 class="subsection-title">
                        <span class="subsection-number">4.1</span>
                        Penggunaan Kendaraan
                    </h3>
                    <ul class="content-list">
                        <li>Menggunakan kendaraan sesuai peruntukannya dan tidak menyalahgunakan</li>
                        <li>Mematuhi semua peraturan lalu lintas yang berlaku</li>
                        <li>Tidak menggunakan untuk kegiatan illegal atau melanggar hukum</li>
                        <li>Tidak merokok, makan, atau minum di dalam kendaraan</li>
                        <li>Tidak membawa hewan peliharaan tanpa seizin tertulis</li>
                        <li>Tidak meminjamkan kendaraan kepada pihak lain</li>
                    </ul>
                </div>

                <div class="subsection">
                    <h3 class="subsection-title">
                        <span class="subsection-number">4.2</span>
                        Pemeliharaan & Perawatan
                    </h3>
                    <ul class="content-list">
                        <li>Melakukan pengecekan rutin kondisi kendaraan</li>
                        <li>Segera melaporkan kerusakan atau masalah teknis</li>
                        <li>Tidak melakukan modifikasi apapun terhadap kendaraan</li>
                        <li>Menjaga kebersihan interior dan eksterior</li>
                        <li>Menggunakan bahan bakar sesuai spesifikasi kendaraan</li>
                    </ul>
                </div>

                <div class="highlight-box">
                    <div class="highlight-title">Larangan Khusus</div>
                    <div class="highlight-text">Penyewa dilarang keras menggunakan kendaraan untuk balapan liar, ngebut di jalan umum, atau aktivitas berbahaya lainnya. Pelanggaran akan dikenakan denda dan pemutusan kontrak sepihak.</div>
                </div>
            </section>

            <!-- Section 5 -->
            <section class="section" id="section-5">
                <div class="section-header">
                    <div class="section-number">5</div>
                    <h2 class="section-title">Kewajiban Pemilik</h2>
                    <p class="section-description">Layanan dan tanggung jawab RafaRentCar kepada penyewa</p>
                </div>

                <div class="subsection">
                    <h3 class="subsection-title">
                        <span class="subsection-number">5.1</span>
                        Penyediaan Kendaraan
                    </h3>
                    <ul class="content-list">
                        <li>Menyediakan kendaraan dalam kondisi prima dan layak jalan</li>
                        <li>Memastikan semua dokumen kendaraan lengkap dan berlaku</li>
                        <li>Menyediakan kendaraan pengganti jika terjadi kerusakan mayor</li>
                        <li>Memberikan briefing penggunaan dan fitur kendaraan</li>
                        <li>Menjamin kendaraan telah melalui inspeksi keselamatan</li>
                    </ul>
                </div>

                <div class="subsection">
                    <h3 class="subsection-title">
                        <span class="subsection-number">5.2</span>
                        Layanan Pelanggan
                    </h3>
                    <ul class="content-list">
                        <li>Customer service <strong>24 jam</strong> untuk bantuan</li>
                        <li>Emergency roadside assistance</li>
                        <li>Respon cepat untuk keluhan dan masalah</li>
                        <li>Menjaga kerahasiaan data pribadi penyewa</li>
                        <li>Memberikan panduan dan rekomendasi perjalanan</li>
                    </ul>
                </div>
            </section>

            <!-- Section 6 -->
            <section class="section" id="section-6">
                <div class="section-header">
                    <div class="section-number">6</div>
                    <h2 class="section-title">Pembayaran & Tarif</h2>
                    <p class="section-description">Sistem pembayaran, tarif, dan biaya tambahan</p>
                </div>

                <div class="subsection">
                    <h3 class="subsection-title">
                        <span class="subsection-number">6.1</span>
                        Sistem Pembayaran
                    </h3>
                    <ul class="content-list">
                        <li>Metode pembayaran: Tunai, Transfer Bank, E-wallet</li>
                        <li>DP minimal <strong>30%</strong> untuk konfirmasi booking</li>
                        <li>Pelunasan maksimal saat pengambilan kendaraan</li>
                        <li>Deposit keamanan sesuai kategori kendaraan</li>
                        <li>Bukti pembayaran harus disimpan hingga selesai sewa</li>
                    </ul>
                </div>

                <div class="subsection">
                    <h3 class="subsection-title">
                        <span class="subsection-number">6.2</span>
                        Biaya Tambahan
                    </h3>
                    <ul class="content-list">
                        <li>Overtime pengembalian: <strong>Rp 50.000/jam</strong></li>
                        <li>Cuci mobil (jika kotor): <strong>Rp 25.000</strong></li>
                        <li>BBM sesuai pemakaian jika tidak penuh</li>
                        <li>Biaya parkir dan tol ditanggung penyewa</li>
                        <li>Denda tilang dan pelanggaran lalu lintas</li>
                        <li>Biaya derek jika kendaraan mogok karena kelalaian</li>
                    </ul>
                </div>

                <div class="info-box">
                    <div class="info-title">Kebijakan Harga</div>
                    <div class="info-text">Harga dapat berubah sewaktu-waktu terutama pada masa peak season (Lebaran, Natal, Tahun Baru). Konfirmasi harga terbaru saat melakukan pemesanan.</div>
                </div>
            </section>

            <!-- Section 7 -->
            <section class="section" id="section-7">
                <div class="section-header">
                    <div class="section-number">7</div>
                    <h2 class="section-title">Asuransi & Tanggung Jawab</h2>
                    <p class="section-description">Coverage asuransi dan pembagian tanggung jawab</p>
                </div>

                <div class="subsection">
                    <h3 class="subsection-title">
                        <span class="subsection-number">7.1</span>
                        Asuransi Kendaraan
                    </h3>
                    <p class="content-text">Semua kendaraan RafaRentCar telah diasuransikan dengan asuransi All Risk, namun penyewa tetap bertanggung jawab atas:</p>
                    <ul class="content-list">
                        <li>Own Risk (OR) sesuai ketentuan polis asuransi</li>
                        <li>Kerusakan akibat kelalaian atau kesengajaan penyewa</li>
                        <li>Kehilangan kendaraan atau parts/aksesoris</li>
                        <li>Kerusakan yang tidak tercakup dalam polis</li>
                        <li>Biaya administrasi klaim asuransi</li>
                    </ul>
                </div>

                <div class="subsection">
                    <h3 class="subsection-title">
                        <span class="subsection-number">7.2</span>
                        Tanggung Jawab Penyewa
                    </h3>
                    <ul class="content-list">
                        <li>Bertanggung jawab penuh atas kecelakaan melibatkan pihak ketiga</li>
                        <li>Menanggung biaya perbaikan jika kerusakan karena kelalaian</li>
                        <li>Mengganti rugi kehilangan kendaraan sesuai harga pasar</li>
                        <li>Membayar seluruh denda tilang dan pelanggaran</li>
                        <li>Biaya legal jika terlibat kasus hukum</li>
                    </ul>
                </div>

                <div class="highlight-box">
                    <div class="highlight-title">Klaim Asuransi</div>
                    <div class="highlight-text">Dalam kasus kecelakaan, segera hubungi RafaRentCar dan pihak kepolisian. Jangan mengakui kesalahan atau menandatangani dokumen apapun tanpa koordinasi dengan kami.</div>
                </div>
            </section>

            <!-- Section 8 -->
            <section class="section" id="section-8">
                <div class="section-header">
                    <div class="section-number">8</div>
                    <h2 class="section-title">Pembatalan & Pengembalian</h2>
                    <p class="section-description">Kebijakan pembatalan dan pengembalian dana</p>
                </div>

                <div class="subsection">
                    <h3 class="subsection-title">
                        <span class="subsection-number">8.1</span>
                        Pembatalan oleh Penyewa
                    </h3>
                    <ul class="content-list">
                        <li>Pembatalan H-7 atau lebih: DP dikembalikan <strong>100%</strong></li>
                        <li>Pembatalan H-3 sampai H-6: DP dikembalikan <strong>50%</strong></li>
                        <li>Pembatalan H-1 sampai H-2: DP dikembalikan <strong>25%</strong></li>
                        <li>Pembatalan H+0 (hari H): DP <strong>tidak dikembalikan</strong></li>
                        <li>Proses refund maksimal 7 hari kerja</li>
                    </ul>
                </div>

                <div class="subsection">
                    <h3 class="subsection-title">
                        <span class="subsection-number">8.2</span>
                        Pembatalan oleh RafaRentCar
                    </h3>
                    <p class="content-text">RafaRentCar berhak membatalkan kontrak dalam kondisi:</p>
                    <ul class="content-list">
                        <li>Penyewa tidak memenuhi persyaratan yang ditetapkan</li>
                        <li>Terjadi Force Majeure yang tidak dapat diatasi</li>
                        <li>Kendaraan mengalami kerusakan mayor mendadak</li>
                        <li>Ditemukan data palsu atau informasi tidak benar</li>
                        <li>Dalam hal ini, seluruh pembayaran dikembalikan 100%</li>
                    </ul>
                </div>
            </section>

            <!-- Section 9 -->
            <section class="section" id="section-9">
                <div class="section-header">
                    <div class="section-number">9</div>
                    <h2 class="section-title">Force Majeure</h2>
                    <p class="section-description">Kondisi darurat dan keadaan kahar</p>
                </div>

                <div class="subsection">
                    <p class="content-text">Force Majeure adalah kejadian di luar kemampuan dan kekuasaan para pihak yang tidak dapat diprediksi sebelumnya, meliputi:</p>
                    <ul class="content-list">
                        <li>Bencana alam (gempa, banjir, tsunami, erupsi gunung berapi)</li>
                        <li>Kerusuhan, huru-hara, perang, atau konflik bersenjata</li>
                        <li>Kebijakan pemerintah yang membatasi mobilitas</li>
                        <li>Pandemi atau wabah penyakit menular</li>
                        <li>Gangguan infrastruktur dalam skala besar</li>
                        <li>Keadaan darurat negara atau daerah</li>
                    </ul>
                    <p class="content-text">Dalam kondisi Force Majeure, kedua belah pihak dapat melakukan renegoisasi kontrak atau pembatalan tanpa sanksi.</p>
                </div>
            </section>

            <!-- Section 10 -->
            <section class="section" id="section-10">
                <div class="section-header">
                    <div class="section-number">10</div>
                    <h2 class="section-title">Ketentuan Lain-lain</h2>
                    <p class="section-description">Ketentuan tambahan dan penutup</p>
                </div>

                <div class="subsection">
                    <h3 class="subsection-title">
                        <span class="subsection-number">10.1</span>
                        Penyelesaian Sengketa
                    </h3>
                    <p class="content-text">Penyelesaian perselisihan akan dilakukan secara bertahap:</p>
                    <ul class="content-list">
                        <li>Musyawarah dan negosiasi langsung antar pihak</li>
                        <li>Mediasi melalui pihak ketiga yang netral</li>
                        <li>Arbitrase sesuai aturan BANI (Badan Arbitrase Nasional)</li>
                        <li>Pengadilan Negeri Tanjung Karang sebagai upaya terakhir</li>
                    </ul>
                </div>

                <div class="subsection">
                    <h3 class="subsection-title">
                        <span class="subsection-number">10.2</span>
                        Perubahan Ketentuan
                    </h3>
                    <p class="content-text">RafaRentCar berhak mengubah syarat dan ketentuan ini dengan pemberitahuan melalui website resmi, email, atau media komunikasi lainnya. Perubahan berlaku efektif 30 hari setelah publikasi.</p>
                </div>

                <div class="subsection">
                    <h3 class="subsection-title">
                        <span class="subsection-number">10.3</span>
                        Hukum yang Berlaku
                    </h3>
                    <p class="content-text">Syarat dan ketentuan ini tunduk pada hukum Republik Indonesia dan segala interpretasinya merujuk pada peraturan perundang-undangan yang berlaku.</p>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="footer">
            <h3 class="footer-title">Butuh Bantuan?</h3>
            <p class="footer-text">Tim customer service kami siap membantu Anda 24/7 untuk menjawab pertanyaan tentang syarat ketentuan ini.</p>
            <div class="footer-contacts">
                <a href="tel:+62721555123" class="footer-contact">
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122L9.98 10.94a6.678 6.678 0 0 1-1.962-.835 6.676 6.676 0 0 1-1.538-1.538 6.678 6.678 0 0 1-.835-1.962l.342-1.805a.678.678 0 0 0-.122-.58L3.654 1.328z"/>
                    </svg>
                    +62 721 555 123
                </a>
                <a href="mailto:info@rafarentcar.com" class="footer-contact">
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                    </svg>
                    info@rafarentcar.com
                </a>
                <a href="https://wa.me/628123456789" class="footer-contact">
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.777-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.480 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                    </svg>
                    WhatsApp
                </a>
            </div>
        </footer>
    </div>

    <script>
        // Smooth navigation
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    const headerOffset = 80;
                    const elementPosition = targetElement.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Active navigation highlighting
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('.section');
            const navLinks = document.querySelectorAll('.nav-link');
            
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                const sectionHeight = section.offsetHeight;
                
                if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                    current = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });

        // Loading animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.section').forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(30px)';
            section.style.transition = 'all 0.6s ease-out';
            observer.observe(section);
        });
    </script>
</body>
</html>