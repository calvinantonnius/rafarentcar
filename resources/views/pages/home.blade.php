@extends('layouts.app')

@section('title', 'RafaRentCar - Rental Mobil Terbaik')
@section('content')

<!-- Hero Banner with Slider -->

        <!-- Slide 2 -->
        <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8Y2FyfGVufDB8fDB8fHww')">
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <div class="relative z-10 container mx-auto px-4 lg:px-8 h-full flex items-center justify-center min-h-screen text-center">
                <div class="max-w-3xl">
                    <div class="bg-blue-600/90 text-white inline-block px-4 py-2 rounded-full text-sm font-medium mb-4">
                        PROMO KHUSUS HARI INI
                    </div>
                    <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight drop-shadow-md">
                        Diskon <span class="text-yellow-300">20%</span> Mobil Keluarga
                    </h1>
                    <p class="text-lg md:text-xl text-gray-200 mb-10 leading-relaxed drop-shadow-md">
                        Hemat lebih banyak untuk perjalanan keluarga Anda dengan promo spesial kami.
                    </p>
                    <a href="#promo" class="bg-yellow-500 hover:bg-yellow-600 text-white px-8 py-3 rounded-lg text-lg font-medium transition-all duration-300 transform hover:scale-105 inline-block">
                        Lihat Promo
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Slider Controls -->
    <div class="absolute bottom-8 left-0 right-0 z-20 flex justify-center space-x-2">
        <button class="slider-dot w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-all duration-300 active"></button>
        <button class="slider-dot w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-all duration-300"></button>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-blue-50 p-6 rounded-xl text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-shield-alt text-blue-600 text-2xl"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Asuransi Lengkap</h3>
                <p class="text-gray-600 text-sm">Proteksi maksimal untuk perjalanan Anda</p>
            </div>
            
            <div class="bg-blue-50 p-6 rounded-xl text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-headset text-blue-600 text-2xl"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">24/7 Support</h3>
                <p class="text-gray-600 text-sm">Tim kami siap membantu kapan saja</p>
            </div>
            
            <div class="bg-blue-50 p-6 rounded-xl text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-car text-blue-600 text-2xl"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Armada Terawat</h3>
                <p class="text-gray-600 text-sm">Kondisi prima dengan perawatan berkala</p>
            </div>
            
            <div class="bg-blue-50 p-6 rounded-xl text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-tag text-blue-600 text-2xl"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">Harga Terjangkau</h3>
                <p class="text-gray-600 text-sm">Tanpa biaya tersembunyi</p>
            </div>
        </div>
    </div>
</section>

<!-- Company Profile Section -->
<section id="tentang" class="py-16 bg-white">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1">
                <div class="mb-6">
                    <span class="text-blue-600 font-semibold text-sm uppercase tracking-wide">Tentang Kami</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">
                        RafaRentCar - Partner Perjalanan Terpercaya
                    </h2>
                </div>
                <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                    Sejak tahun 2020, RafaRentCar telah menjadi pilihan utama untuk layanan rental mobil di Indonesia. Kami berkomitmen memberikan pengalaman berkendara yang aman, nyaman, dan terpercaya dengan armada kendaraan terawat dan pelayanan prima.
                </p>
                <div class="grid grid-cols-2 gap-6 mb-8">
                    <div class="text-center p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                        <div class="text-2xl font-bold text-blue-600 mb-1">500+</div>
                        <div class="text-gray-600 text-sm">Pelanggan Puas</div>
                    </div>
                    <div class="text-center p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                        <div class="text-2xl font-bold text-blue-600 mb-1">50+</div>
                        <div class="text-gray-600 text-sm">Armada Kendaraan</div>
                    </div>
                    <div class="text-center p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                        <div class="text-2xl font-bold text-blue-600 mb-1">4.8</div>
                        <div class="text-gray-600 text-sm">Rating Pelayanan</div>
                    </div>
                    <div class="text-center p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                        <div class="text-2xl font-bold text-blue-600 mb-1">24/7</div>
                        <div class="text-gray-600 text-sm">Customer Service</div>
                    </div>
                </div>
                <div class="flex space-x-4">
                    <a href="#kontak" class="inline-flex items-center bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300 font-medium">
                        <i class="fas fa-info-circle mr-2"></i>Pelajari Lebih Lanjut
                    </a>
                    <a href="#mobil" class="inline-flex items-center bg-white text-blue-600 border border-blue-600 px-6 py-3 rounded-lg hover:bg-blue-50 transition duration-300 font-medium">
                        <i class="fas fa-car mr-2"></i>Lihat Mobil
                    </a>
                </div>
            </div>
            <div class="order-1 lg:order-2">
                <div class="relative group">
                    <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         alt="RafaRentCar Office" 
                         class="rounded-2xl shadow-xl w-full transform group-hover:scale-105 transition duration-500">
                    <div class="absolute -bottom-6 -left-6 bg-blue-600 text-white p-6 rounded-xl shadow-lg hover:-translate-y-2 transition duration-300">
                        <div class="text-2xl font-bold">4+ Tahun</div>
                        <div class="text-blue-100 text-sm">Pengalaman Terpercaya</div>
                    </div>
                    <div class="absolute -top-6 -right-6 bg-yellow-500 text-white p-6 rounded-xl shadow-lg hover:-translate-y-2 transition duration-300">
                        <div class="text-2xl font-bold">100%</div>
                        <div class="text-yellow-100 text-sm">Kepuasan Pelanggan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Promo Section -->
<section id="promo" class="py-16 bg-gradient-to-r from-blue-50 to-indigo-50">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center mb-12">
            <span class="text-blue-600 font-semibold text-sm uppercase tracking-wide">Penawaran Spesial</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">
                Promo Menarik Hari Ini
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Nikmati berbagai penawaran spesial untuk rental mobil Anda
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Promo 1 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group relative">
                <div class="absolute top-4 left-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-medium z-10">
                    -20%
                </div>
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Promo Toyota Avanza" 
                         class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Promo Keluarga</h3>
                    <div class="flex items-center text-gray-600 mb-3">
                        <i class="fas fa-calendar-alt mr-2 text-blue-600"></i>
                        <span>Berlaku hingga 30 Juni 2023</span>
                    </div>
                    <p class="text-gray-600 mb-4 text-sm">
                        Diskon 20% untuk rental Toyota Avanza minimal 3 hari. Cocok untuk liburan keluarga dengan bagasi luas.
                    </p>
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-gray-400 text-sm line-through">Rp 300.000/hari</div>
                            <div class="text-blue-600 font-bold text-xl">Rp 240.000<span class="text-sm text-gray-500">/hari</span></div>
                        </div>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300 text-sm font-medium">
                            Klaim Promo
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Promo 2 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group relative">
                <div class="absolute top-4 left-4 bg-green-600 text-white px-3 py-1 rounded-full text-sm font-medium z-10">
                    Free
                </div>
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1583121274602-3e2820c69888?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Promo Honda Brio" 
                         class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Promo Harian</h3>
                    <div class="flex items-center text-gray-600 mb-3">
                        <i class="fas fa-calendar-alt mr-2 text-blue-600"></i>
                        <span>Berlaku hingga 15 Juli 2023</span>
                    </div>
                    <p class="text-gray-600 mb-4 text-sm">
                        Gratis biaya driver untuk rental Honda Brio minimal 5 hari. Mobil irit bahan bakar untuk perjalanan dalam kota.
                    </p>
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-gray-400 text-sm line-through">+Rp 100.000/hari</div>
                            <div class="text-blue-600 font-bold text-xl">Rp 200.000<span class="text-sm text-gray-500">/hari</span></div>
                        </div>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300 text-sm font-medium">
                            Klaim Promo
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Promo 3 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group relative">
                <div class="absolute top-4 left-4 bg-purple-600 text-white px-3 py-1 rounded-full text-sm font-medium z-10">
                    -15%
                </div>
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Promo Toyota Innova" 
                         class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Promo Bisnis</h3>
                    <div class="flex items-center text-gray-600 mb-3">
                        <i class="fas fa-calendar-alt mr-2 text-blue-600"></i>
                        <span>Berlaku hingga 31 Agustus 2023</span>
                    </div>
                    <p class="text-gray-600 mb-4 text-sm">
                        Diskon 15% untuk rental Toyota Innova minimal 7 hari. Kendaraan premium untuk kebutuhan bisnis Anda.
                    </p>
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-gray-400 text-sm line-through">Rp 450.000/hari</div>
                            <div class="text-blue-600 font-bold text-xl">Rp 382.500<span class="text-sm text-gray-500">/hari</span></div>
                        </div>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300 text-sm font-medium">
                            Klaim Promo
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="#" class="inline-flex items-center bg-white text-blue-600 border border-blue-600 px-8 py-3 rounded-lg hover:bg-blue-50 transition duration-300 font-medium">
                <i class="fas fa-tags mr-2"></i>Lihat Semua Promo
            </a>
        </div>
    </div>
</section>

<!-- Car Grid Section -->
<section id="mobil" class="py-16 bg-white">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center mb-12">
            <span class="text-blue-600 font-semibold text-sm uppercase tracking-wide">Armada Kami</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">
                Pilihan Kendaraan Berkualitas
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Berbagai pilihan mobil terawat dengan kondisi prima untuk memenuhi kebutuhan perjalanan Anda
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Car 1 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group border border-gray-100">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Toyota Avanza" 
                         class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                        Populer
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Toyota Avanza</h3>
                    <div class="flex items-center text-gray-600 mb-3">
                        <i class="fas fa-users mr-2 text-blue-600"></i>
                        <span>7 Penumpang</span>
                        <i class="fas fa-gas-pump ml-4 mr-2 text-blue-600"></i>
                        <span>Bensin</span>
                    </div>
                    <p class="text-gray-600 mb-4 text-sm">
                        MPV nyaman untuk keluarga dengan kapasitas 7 penumpang, AC dingin, dan bagasi luas untuk perjalanan jauh.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="text-blue-600 font-bold text-xl">Rp 300.000<span class="text-sm text-gray-500">/hari</span></div>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300 text-sm font-medium">
                            Sewa Sekarang
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Car 2 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group border border-gray-100">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1583121274602-3e2820c69888?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Honda Brio" 
                         class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Honda Brio</h3>
                    <div class="flex items-center text-gray-600 mb-3">
                        <i class="fas fa-users mr-2 text-blue-600"></i>
                        <span>5 Penumpang</span>
                        <i class="fas fa-gas-pump ml-4 mr-2 text-blue-600"></i>
                        <span>Bensin</span>
                    </div>
                    <p class="text-gray-600 mb-4 text-sm">
                        City car irit bahan bakar, cocok untuk perjalanan dalam kota dengan handling yang responsif dan parkir mudah.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="text-blue-600 font-bold text-xl">Rp 200.000<span class="text-sm text-gray-500">/hari</span></div>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300 text-sm font-medium">
                            Sewa Sekarang
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Car 3 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group border border-gray-100">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Toyota Innova" 
                         class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute top-4 right-4 bg-purple-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                        Premium
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Toyota Innova</h3>
                    <div class="flex items-center text-gray-600 mb-3">
                        <i class="fas fa-users mr-2 text-blue-600"></i>
                        <span>8 Penumpang</span>
                        <i class="fas fa-gas-pump ml-4 mr-2 text-blue-600"></i>
                        <span>Diesel</span>
                    </div>
                    <p class="text-gray-600 mb-4 text-sm">
                        MPV premium dengan kapasitas 8 penumpang, interior mewah, dan kenyamanan berkelas untuk perjalanan bisnis.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="text-blue-600 font-bold text-xl">Rp 450.000<span class="text-sm text-gray-500">/hari</span></div>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300 text-sm font-medium">
                            Sewa Sekarang
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Car 4 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group border border-gray-100">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1494976688321-89d14842585f?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Suzuki Ertiga" 
                         class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Suzuki Ertiga</h3>
                    <div class="flex items-center text-gray-600 mb-3">
                        <i class="fas fa-users mr-2 text-blue-600"></i>
                        <span>7 Penumpang</span>
                        <i class="fas fa-gas-pump ml-4 mr-2 text-blue-600"></i>
                        <span>Bensin</span>
                    </div>
                    <p class="text-gray-600 mb-4 text-sm">
                        MPV kompak dengan desain modern, konsumsi bahan bakar irit, dan fitur keselamatan lengkap untuk keluarga.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="text-blue-600 font-bold text-xl">Rp 280.000<span class="text-sm text-gray-500">/hari</span></div>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300 text-sm font-medium">
                            Sewa Sekarang
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Car 5 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group border border-gray-100">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1550355291-bbee04a92027?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Daihatsu Xenia" 
                         class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Daihatsu Xenia</h3>
                    <div class="flex items-center text-gray-600 mb-3">
                        <i class="fas fa-users mr-2 text-blue-600"></i>
                        <span>7 Penumpang</span>
                        <i class="fas fa-gas-pump ml-4 mr-2 text-blue-600"></i>
                        <span>Bensin</span>
                    </div>
                    <p class="text-gray-600 mb-4 text-sm">
                        MPV ekonomis dengan ruang kabin luas, cocok untuk liburan keluarga dengan budget terjangkau namun tetap nyaman.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="text-blue-600 font-bold text-xl">Rp 270.000<span class="text-sm text-gray-500">/hari</span></div>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300 text-sm font-medium">
                            Sewa Sekarang
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Car 6 -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group border border-gray-100">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Honda Jazz" 
                         class="w-full h-48 object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Honda Jazz</h3>
                    <div class="flex items-center text-gray-600 mb-3">
                        <i class="fas fa-users mr-2 text-blue-600"></i>
                        <span>5 Penumpang</span>
                        <i class="fas fa-gas-pump ml-4 mr-2 text-blue-600"></i>
                        <span>Bensin</span>
                    </div>
                    <p class="text-gray-600 mb-4 text-sm">
                        Hatchback stylish dengan interior fleksibel, performa mesin responsif, dan teknologi modern untuk gaya hidup aktif.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="text-blue-600 font-bold text-xl">Rp 250.000<span class="text-sm text-gray-500">/hari</span></div>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300 text-sm font-medium">
                            Sewa Sekarang
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="#" class="inline-flex items-center bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition duration-300 font-medium">
                <i class="fas fa-th-large mr-2"></i>Lihat Semua Mobil
            </a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="text-center mb-12">
            <span class="text-blue-600 font-semibold text-sm uppercase tracking-wide">Testimonial</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">
                Apa Kata Pelanggan Kami?
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Berbagai pengalaman nyata dari pelanggan yang telah menggunakan layanan kami
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <!-- Testimonial 1 -->
            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="flex items-center mb-4">
                    <div class="text-yellow-400 mr-2 text-lg">
                        ★★★★★
                    </div>
                    <span class="text-sm text-gray-500">(5/5)</span>
                </div>
                <p class="text-gray-600 italic mb-4">"Pelayanan sangat memuaskan! Mobil bersih dan nyaman. Driver juga ramah dan profesional. Pasti akan sewa lagi di RafaRentCar."</p>
                <div class="flex items-center">
                    <div class="bg-purple-100 text-purple-800 w-10 h-10 rounded-full flex items-center justify-center font-bold mr-3">
                        A
                    </div>
                    <div>
                        <h4 class="font-medium text-gray-900">Andi Wijaya</h4>
                        <p class="text-sm text-gray-500">15 Mei 2023</p>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="flex items-center mb-4">
                    <div class="text-yellow-400 mr-2 text-lg">
                        ★★★★☆
                    </div>
                    <span class="text-sm text-gray-500">(4/5)</span>
                </div>
                <p class="text-gray-600 italic mb-4">"Harga kompetitif dan proses sewa mudah. Mobil dalam kondisi sangat baik. Hanya saja agak lama saat pengambilan dokumen."</p>
                <div class="flex items-center">
                    <div class="bg-purple-100 text-purple-800 w-10 h-10 rounded-full flex items-center justify-center font-bold mr-3">
                        B
                    </div>
                    <div>
                        <h4 class="font-medium text-gray-900">Budi Santoso</h4>
                        <p class="text-sm text-gray-500">2 Juni 2023</p>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="flex items-center mb-4">
                    <div class="text-yellow-400 mr-2 text-lg">
                        ★★★★★
                    </div>
                    <span class="text-sm text-gray-500">(5/5)</span>
                </div>
                <p class="text-gray-600 italic mb-4">"Pengalaman pertama menyewa mobil di RafaRentCar sangat menyenangkan. Proses cepat, mobil baru, dan dapat promo menarik. Recommended!"</p>
                <div class="flex items-center">
                    <div class="bg-purple-100 text-purple-800 w-10 h-10 rounded-full flex items-center justify-center font-bold mr-3">
                        C
                    </div>
                    <div>
                        <h4 class="font-medium text-gray-900">Citra Dewi</h4>
                        <p class="text-sm text-gray-500">22 Juni 2023</p>
                    </div>
                </div>
            </div>
        </div>
         <!-- Testimonial Form -->
         <div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-sm">
            <h3 class="text-xl font-semibold text-gray-900 mb-6 text-center">Bagikan Pengalaman Anda</h3>
            <form class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nama Anda</label>
                        <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Rating</label>
                        <div class="flex space-x-1">
                            @for($i = 1; $i <= 5; $i++)
                                <button type="button" class="text-2xl text-gray-300 hover:text-yellow-400 focus:outline-none">
                                    ☆
                                </button>
                            @endfor
                        </div>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Testimonial</label>
                    <textarea rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                </div>
                <div>
                    <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition duration-300 font-medium">
                        Kirim Testimonial
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>





<script>
    // Simple slider functionality
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.hero-slide');
        const dots = document.querySelectorAll('.slider-dot');
        let currentSlide = 0;
        
        function showSlide(n) {
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            
            currentSlide = (n + slides.length) % slides.length;
            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');
        }
        
        // Auto slide change
        setInterval(() => {
            showSlide(currentSlide + 1);
        }, 5000);
        
        // Dot click handlers
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                showSlide(index);
            });
        });
    });
</script>