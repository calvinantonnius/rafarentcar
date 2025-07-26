@extends('layouts.app')

@section('title', 'RafaRentCar')
@section('content')


    <section id="beranda" class="relative min-h-screen bg-cover bg-center bg-no-repeat pt-20" style="background-image: url('https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Y2FyfGVufDB8fDB8fHww');">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <!-- Content -->
    <div class="relative z-10 container mx-auto px-4 lg:px-8 h-full flex items-center justify-center min-h-screen text-center">
        <div class="max-w-3xl">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight drop-shadow-md">
                Rental Mobil <span class="text-blue-300">Terpercaya</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-200 mb-10 leading-relaxed drop-shadow-md">
                Nikmati perjalanan nyaman dengan berbagai pilihan mobil berkualitas dan pelayanan terbaik dari RafaRentCar.
            </p>
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
                        <div class="text-center p-4 bg-blue-50 rounded-lg">
                            <div class="text-2xl font-bold text-blue-600 mb-1">500+</div>
                            <div class="text-gray-600 text-sm">Pelanggan Puas</div>
                        </div>
                        <div class="text-center p-4 bg-blue-50 rounded-lg">
                            <div class="text-2xl font-bold text-blue-600 mb-1">50+</div>
                            <div class="text-gray-600 text-sm">Armada Kendaraan</div>
                        </div>
                        <div class="text-center p-4 bg-blue-50 rounded-lg">
                            <div class="text-2xl font-bold text-blue-600 mb-1">4.8</div>
                            <div class="text-gray-600 text-sm">Rating Pelayanan</div>
                        </div>
                        <div class="text-center p-4 bg-blue-50 rounded-lg">
                            <div class="text-2xl font-bold text-blue-600 mb-1">24/7</div>
                            <div class="text-gray-600 text-sm">Customer Service</div>
                        </div>
                    </div>
                    <a href="#kontak" class="inline-flex items-center bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300 font-medium">
                        <i class="fas fa-info-circle mr-2"></i>Pelajari Lebih Lanjut
                    </a>
                </div>
                <div class="order-1 lg:order-2">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                             alt="RafaRentCar Office" 
                             class="rounded-2xl shadow-xl w-full">
                        <div class="absolute -bottom-6 -left-6 bg-blue-600 text-white p-6 rounded-xl shadow-lg">
                            <div class="text-2xl font-bold">4+ Tahun</div>
                            <div class="text-blue-100 text-sm">Pengalaman Terpercaya</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Car Grid Section -->
    <section id="mobil" class="py-16 bg-gray-50">
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
                <!-- Car Card 1 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Toyota Avanza" 
                             class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                        <div class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                            Populer
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Toyota Avanza</h3>
                        <div class="flex items-center text-gray-600 mb-3">
                            <i class="fas fa-users mr-2 text-blue-600"></i>
                            <span>7 Penumpang</span>
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
                
                <!-- Car Card 2 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1583121274602-3e2820c69888?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Honda Brio" 
                             class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                        <div class="absolute top-4 right-4 bg-green-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                            Hemat
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Honda Brio</h3>
                        <div class="flex items-center text-gray-600 mb-3">
                            <i class="fas fa-users mr-2 text-blue-600"></i>
                            <span>5 Penumpang</span>
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
                
                <!-- Car Card 3 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Toyota Innova" 
                             class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                        <div class="absolute top-4 right-4 bg-purple-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                            Premium
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Toyota Innova</h3>
                        <div class="flex items-center text-gray-600 mb-3">
                            <i class="fas fa-users mr-2 text-blue-600"></i>
                            <span>8 Penumpang</span>
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
                
                <!-- Car Card 4 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1494976688321-89d14842585f?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Suzuki Ertiga" 
                             class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Suzuki Ertiga</h3>
                        <div class="flex items-center text-gray-600 mb-3">
                            <i class="fas fa-users mr-2 text-blue-600"></i>
                            <span>7 Penumpang</span>
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
                
                <!-- Car Card 5 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1550355291-bbee04a92027?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Daihatsu Xenia" 
                             class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Daihatsu Xenia</h3>
                        <div class="flex items-center text-gray-600 mb-3">
                            <i class="fas fa-users mr-2 text-blue-600"></i>
                            <span>7 Penumpang</span>
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
                
                <!-- Car Card 6 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Honda Jazz" 
                             class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Honda Jazz</h3>
                        <div class="flex items-center text-gray-600 mb-3">
                            <i class="fas fa-users mr-2 text-blue-600"></i>
                            <span>5 Penumpang</span>
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
@endsection