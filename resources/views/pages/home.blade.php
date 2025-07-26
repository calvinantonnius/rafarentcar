@extends('layouts.app')

@section('title', 'RafaRentCar')
@section('content')

    <!-- Hero Section with Auto Slide Banner -->
    <section id="beranda" class="relative min-h-screen overflow-hidden">
        <!-- Banner Slider Container -->
        <div class="hero-slider relative min-h-screen">
            <!-- Slide 1 -->
            <div class="slide active absolute inset-0 min-h-screen">
                <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('https://images.unsplash.com/photo-1449824913935-59a10b8d2000?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/50 to-transparent"></div>
                <div class="relative z-10 container mx-auto px-4 lg:px-8 h-full flex items-center min-h-screen">
                    <div class="max-w-4xl hero-text">
                        <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                            Rental Mobil <span class="bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">Terpercaya</span>
                        </h1>
                        <p class="text-xl md:text-2xl text-gray-200 mb-8 leading-relaxed font-light">
                            Nikmati perjalanan nyaman dengan berbagai pilihan mobil berkualitas dan pelayanan terbaik dari RafaRentCar.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="#mobil" class="group relative bg-gradient-to-r from-blue-600 to-blue-700 text-white px-8 py-4 rounded-xl font-semibold hover:from-blue-700 hover:to-blue-800 transition-all duration-300 text-center shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                <i class="fas fa-car mr-2"></i>Lihat Mobil
                                <div class="absolute inset-0 bg-white/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </a>
                            <a href="#kontak" class="group relative border-2 border-white text-white px-8 py-4 rounded-xl font-semibold hover:bg-white hover:text-gray-900 transition-all duration-300 text-center backdrop-blur-sm">
                                <i class="fas fa-phone mr-2"></i>Hubungi Kami
                            </a>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-0 bg-noise opacity-10"></div>
            </div>

            <!-- Slide 2 -->
            <div class="slide absolute inset-0 min-h-screen opacity-0">
                <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/50 to-transparent"></div>
                <div class="relative z-10 container mx-auto px-4 lg:px-8 h-full flex items-center min-h-screen">
                    <div class="max-w-4xl hero-text">
                        <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                            Armada <span class="bg-gradient-to-r from-green-400 to-blue-400 bg-clip-text text-transparent">Terlengkap</span>
                        </h1>
                        <p class="text-xl md:text-2xl text-gray-200 mb-8 leading-relaxed font-light">
                            Dari city car hingga MPV premium, kami menyediakan kendaraan untuk segala kebutuhan perjalanan Anda.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="#mobil" class="group relative bg-gradient-to-r from-green-600 to-blue-600 text-white px-8 py-4 rounded-xl font-semibold hover:from-green-700 hover:to-blue-700 transition-all duration-300 text-center shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                <i class="fas fa-car mr-2"></i>Lihat Mobil
                                <div class="absolute inset-0 bg-white/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </a>
                            <a href="#kontak" class="group relative border-2 border-white text-white px-8 py-4 rounded-xl font-semibold hover:bg-white hover:text-gray-900 transition-all duration-300 text-center backdrop-blur-sm">
                                <i class="fas fa-phone mr-2"></i>Hubungi Kami
                            </a>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-0 bg-noise opacity-10"></div>
            </div>

            <!-- Slide 3 -->
            <div class="slide absolute inset-0 min-h-screen opacity-0">
                <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('https://images.unsplash.com/photo-1552519507-da3b142c6e3d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/50 to-transparent"></div>
                <div class="relative z-10 container mx-auto px-4 lg:px-8 h-full flex items-center min-h-screen">
                    <div class="max-w-4xl hero-text">
                        <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                            Pelayanan <span class="bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">24/7</span>
                        </h1>
                        <p class="text-xl md:text-2xl text-gray-200 mb-8 leading-relaxed font-light">
                            Customer service siap membantu Anda kapan saja dengan layanan profesional dan responsif.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="#mobil" class="group relative bg-gradient-to-r from-purple-600 to-pink-600 text-white px-8 py-4 rounded-xl font-semibold hover:from-purple-700 hover:to-pink-700 transition-all duration-300 text-center shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                <i class="fas fa-car mr-2"></i>Lihat Mobil
                                <div class="absolute inset-0 bg-white/20 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </a>
                            <a href="#kontak" class="group relative border-2 border-white text-white px-8 py-4 rounded-xl font-semibold hover:bg-white hover:text-gray-900 transition-all duration-300 text-center backdrop-blur-sm">
                                <i class="fas fa-phone mr-2"></i>Hubungi Kami
                            </a>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-0 bg-noise opacity-10"></div>
            </div>
        </div>

        <!-- Slider Navigation Dots -->
        <div class="absolute bottom-20 left-1/2 transform -translate-x-1/2 z-20">
            <div class="flex space-x-4">
                <button class="slider-dot active w-4 h-4 rounded-full bg-white/80 backdrop-blur-sm border border-white/20 transition-all duration-300 hover:bg-white" data-slide="0"></button>
                <button class="slider-dot w-4 h-4 rounded-full bg-white/30 backdrop-blur-sm border border-white/20 transition-all duration-300 hover:bg-white/60" data-slide="1"></button>
                <button class="slider-dot w-4 h-4 rounded-full bg-white/30 backdrop-blur-sm border border-white/20 transition-all duration-300 hover:bg-white/60" data-slide="2"></button>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce z-20">
            <div class="w-6 h-10 border-2 border-white/50 rounded-full flex justify-center">
                <div class="w-1 h-3 bg-white rounded-full mt-2 animate-pulse"></div>
            </div>
        </div>
    </section>

    <!-- Company Profile Section -->
    <section id="tentang" class="py-20 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
        <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="order-2 lg:order-1">
                    <div class="mb-8">
                        <span class="inline-block bg-blue-100 text-blue-600 font-semibold text-sm uppercase tracking-wide px-4 py-2 rounded-full mb-4">Tentang Kami</span>
                        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                            RafaRentCar - Partner Perjalanan <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Terpercaya</span>
                        </h2>
                    </div>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                        Sejak tahun 2020, RafaRentCar telah menjadi pilihan utama untuk layanan rental mobil di Indonesia. Kami berkomitmen memberikan pengalaman berkendara yang aman, nyaman, dan terpercaya dengan armada kendaraan terawat dan pelayanan prima.
                    </p>
                    <div class="grid grid-cols-2 gap-6 mb-10">
                        <div class="text-center p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                            <div class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-2">500+</div>
                            <div class="text-gray-600 text-sm font-medium">Pelanggan Puas</div>
                        </div>
                        <div class="text-center p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                            <div class="text-3xl font-bold bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent mb-2">50+</div>
                            <div class="text-gray-600 text-sm font-medium">Armada Kendaraan</div>
                        </div>
                        <div class="text-center p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                            <div class="text-3xl font-bold bg-gradient-to-r from-yellow-500 to-orange-500 bg-clip-text text-transparent mb-2">4.8</div>
                            <div class="text-gray-600 text-sm font-medium">Rating Pelayanan</div>
                        </div>
                        <div class="text-center p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100">
                            <div class="text-3xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent mb-2">24/7</div>
                            <div class="text-gray-600 text-sm font-medium">Customer Service</div>
                        </div>
                    </div>
                    <a href="#kontak" class="inline-flex items-center bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-4 rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        <i class="fas fa-info-circle mr-3"></i>Pelajari Lebih Lanjut
                    </a>
                </div>
                <div class="order-1 lg:order-2">
                    <div class="relative group">
                        <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                             alt="RafaRentCar Office" 
                             class="rounded-3xl shadow-2xl w-full transform group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute -bottom-8 -left-8 bg-gradient-to-r from-blue-600 to-purple-600 text-white p-8 rounded-2xl shadow-xl">
                            <div class="text-3xl font-bold">4+ Tahun</div>
                            <div class="text-blue-100 text-sm font-medium">Pengalaman Terpercaya</div>
                        </div>
                        <div class="absolute top-4 right-4 w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                            <i class="fas fa-award text-white text-2xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Car Grid Section -->
    <section id="mobil" class="py-20 bg-gradient-to-br from-gray-100 to-gray-50 relative overflow-hidden">
        <div class="absolute inset-0 bg-dots-pattern opacity-10"></div>
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <span class="inline-block bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold text-sm uppercase tracking-wide px-6 py-3 rounded-full mb-6 shadow-lg">Armada Kami</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                    Pilihan Kendaraan <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Berkualitas</span>
                </h2>
                <p class="text-gray-600 text-xl max-w-3xl mx-auto leading-relaxed">
                    Berbagai pilihan mobil terawat dengan kondisi prima untuk memenuhi kebutuhan perjalanan Anda
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Car Card 1 -->
                <div class="car-card bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 group border border-gray-100">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Toyota Avanza" 
                             class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-gradient-to-r from-blue-500 to-blue-600 text-white px-4 py-2 rounded-full text-sm font-medium shadow-lg">
                            Populer
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Toyota Avanza</h3>
                        <div class="flex items-center text-gray-600 mb-4">
                            <i class="fas fa-users mr-3 text-blue-600 text-lg"></i>
                            <span class="font-medium">7 Penumpang</span>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            MPV nyaman untuk keluarga dengan kapasitas 7 penumpang, AC dingin, dan bagasi luas untuk perjalanan jauh.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="text-blue-600 font-bold text-2xl">Rp 300.000<span class="text-sm text-gray-500 font-normal">/hari</span></div>
                            <button class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-6 py-3 rounded-xl hover:from-blue-700 hover:to-blue-800 transition-all duration-300 font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                Sewa Sekarang
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Car Card 2 -->
                <div class="car-card bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 group border border-gray-100">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1583121274602-3e2820c69888?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Honda Brio" 
                             class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-gradient-to-r from-green-500 to-green-600 text-white px-4 py-2 rounded-full text-sm font-medium shadow-lg">
                            Hemat
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Honda Brio</h3>
                        <div class="flex items-center text-gray-600 mb-4">
                            <i class="fas fa-users mr-3 text-green-600 text-lg"></i>
                            <span class="font-medium">5 Penumpang</span>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            City car irit bahan bakar, cocok untuk perjalanan dalam kota dengan handling yang responsif dan parkir mudah.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="text-green-600 font-bold text-2xl">Rp 200.000<span class="text-sm text-gray-500 font-normal">/hari</span></div>
                            <button class="bg-gradient-to-r from-green-600 to-green-700 text-white px-6 py-3 rounded-xl hover:from-green-700 hover:to-green-800 transition-all duration-300 font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                Sewa Sekarang
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Car Card 3 -->
                <div class="car-card bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 group border border-gray-100">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Toyota Innova" 
                             class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-gradient-to-r from-purple-500 to-purple-600 text-white px-4 py-2 rounded-full text-sm font-medium shadow-lg">
                            Premium
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Toyota Innova</h3>
                        <div class="flex items-center text-gray-600 mb-4">
                            <i class="fas fa-users mr-3 text-purple-600 text-lg"></i>
                            <span class="font-medium">8 Penumpang</span>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            MPV premium dengan kapasitas 8 penumpang, interior mewah, dan kenyamanan berkelas untuk perjalanan bisnis.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="text-purple-600 font-bold text-2xl">Rp 450.000<span class="text-sm text-gray-500 font-normal">/hari</span></div>
                            <button class="bg-gradient-to-r from-purple-600 to-purple-700 text-white px-6 py-3 rounded-xl hover:from-purple-700 hover:to-purple-800 transition-all duration-300 font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                Sewa Sekarang
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Car Card 4 -->
                <div class="car-card bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 group border border-gray-100">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1494976688321-89d14842585f?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Suzuki Ertiga" 
                             class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Suzuki Ertiga</h3>
                        <div class="flex items-center text-gray-600 mb-4">
                            <i class="fas fa-users mr-3 text-orange-600 text-lg"></i>
                            <span class="font-medium">7 Penumpang</span>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            MPV kompak dengan desain modern, konsumsi bahan bakar irit, dan fitur keselamatan lengkap untuk keluarga.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="text-orange-600 font-bold text-2xl">Rp 280.000<span class="text-sm text-gray-500 font-normal">/hari</span></div>
                            <button class="bg-gradient-to-r from-orange-600 to-orange-700 text-white px-6 py-3 rounded-xl hover:from-orange-700 hover:to-orange-800 transition-all duration-300 font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                Sewa Sekarang
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Car Card 5 -->
                <div class="car-card bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 group border border-gray-100">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1550355291-bbee04a92027?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Daihatsu Xenia" 
                             class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Daihatsu Xenia</h3>
                        <div class="flex items-center text-gray-600 mb-4">
                            <i class="fas fa-users mr-3 text-teal-600 text-lg"></i>
                            <span class="font-medium">7 Penumpang</span>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            MPV ekonomis dengan ruang kabin luas, cocok untuk liburan keluarga dengan budget terjangkau namun tetap nyaman.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="text-teal-600 font-bold text-2xl">Rp 270.000<span class="text-sm text-gray-500 font-normal">/hari</span></div>
                            <button class="bg-gradient-to-r from-teal-600 to-teal-700 text-white px-6 py-3 rounded-xl hover:from-teal-700 hover:to-teal-800 transition-all duration-300 font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                Sewa Sekarang
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Car Card 6 -->
                <div class="car-card bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 group border border-gray-100">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Honda Jazz" 
                             class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Honda Jazz</h3>
                        <div class="flex items-center text-gray-600 mb-4">
                            <i class="fas fa-users mr-3 text-indigo-600 text-lg"></i>
                            <span class="font-medium">5 Penumpang</span>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Hatchback stylish dengan interior fleksibel, performa mesin responsif, dan teknologi modern untuk gaya hidup aktif.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="text-indigo-600 font-bold text-2xl">Rp 250.000<span class="text-sm text-gray-500 font-normal">/hari</span></div>
                            <button class="bg-gradient-to-r from-indigo-600 to-indigo-700 text-white px-6 py-3 rounded-xl hover:from-indigo-700 hover:to-indigo-800 transition-all duration-300 font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                Sewa Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-16">
                <a href="#" class="inline-flex items-center bg-gradient-to-r from-blue-600 to-purple-600 text-white px-10 py-4 rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    <i class="fas fa-th-large mr-3"></i>Lihat Semua Mobil
                </a>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/modern-hero.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('js/modern-hero.js') }}"></script>
@endpush