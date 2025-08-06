@extends('layouts.app')

@section('title', 'Detail Mobil - RafaRentCar')

@section('content')
<style>
    * {
        font-family: 'Inter', sans-serif;
    }
    
    .bg-dots-pattern {
        background-image: radial-gradient(circle, #d1d5db 1px, transparent 1px);
        background-size: 20px 20px;
    }
    
    .car-card {
        position: relative;
        transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        opacity: 0;
        transform: translateY(20px);
        animation: slideUp 0.6s ease-out forwards;
    }
    
    .car-card:hover {
        transform: translateY(-4px);
    }
    
    .car-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(59, 130, 246, 0.05) 0%, rgba(147, 51, 234, 0.05) 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
        border-radius: 1rem;
        z-index: 1;
    }
    
    .car-card:hover::before {
        opacity: 1;
    }
    
    .car-card > * {
        position: relative;
        z-index: 2;
    }
    
    .floating-icon {
        animation: float 3s ease-in-out infinite;
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-6px); }
    }
    
    .gradient-text {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    
    .car-image {
        transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }
    
    .car-card:hover .car-image {
        transform: scale(1.05);
    }
    
    .feature-icon {
        transition: all 0.3s ease;
    }
    
    .car-card:hover .feature-icon {
        transform: scale(1.1);
    }
    
    .btn-shimmer {
        position: relative;
        overflow: hidden;
    }
    
    .btn-shimmer::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s;
    }
    
    .btn-shimmer:hover::after {
        left: 100%;
    }
    
    @keyframes slideUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .car-card:nth-child(1) { animation-delay: 0.1s; }
    .car-card:nth-child(2) { animation-delay: 0.2s; }
    .car-card:nth-child(3) { animation-delay: 0.3s; }
    .car-card:nth-child(4) { animation-delay: 0.4s; }
    .car-card:nth-child(5) { animation-delay: 0.5s; }
    .car-card:nth-child(6) { animation-delay: 0.6s; }
    
    /* Responsive improvements */
    @media (max-width: 768px) {
        .car-card {
            margin-bottom: 1.5rem;
        }
    }
</style>

<!-- Promo Section -->
<section id="promo" class="py-12 bg-white relative overflow-hidden">
    <div class="absolute inset-0 bg-dots-pattern opacity-5"></div>
    
    <!-- Floating decoration elements -->
    <div class="absolute top-16 left-8 w-12 h-12 bg-blue-200 rounded-full opacity-20 floating-icon"></div>
    <div class="absolute bottom-16 right-8 w-16 h-16 bg-purple-200 rounded-full opacity-20 floating-icon" style="animation-delay: 1s;"></div>
    <div class="absolute top-32 right-16 w-10 h-10 bg-indigo-200 rounded-full opacity-20 floating-icon" style="animation-delay: 2s;"></div>
    
    <div class="container mx-auto px-4 relative z-10 max-w-7xl pt-10">
        <div class="text-center mb-12">
            <span class="inline-block bg-gradient-to-r from-blue-600 to-purple-600 text-white font-medium text-xs uppercase tracking-wide px-4 py-2 rounded-full mb-4 shadow-md">
                <i class="fas fa-car mr-1"></i>Promo Kami
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 leading-tight">
                Pilihan Promo <span class="gradient-text">Menarik</span>
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto leading-relaxed">
                Berbagai promo mobil terawat dengan kondisi prima untuk memenuhi kebutuhan perjalanan Anda
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Promo Card 1 -->
            <div class="car-card bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition-all duration-300 group border border-gray-100">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjd8fGNhcnxlbnwwfHwwfHx8MA%3D%3D" 
                         alt="Toyota Alphard" 
                         class="car-image w-full h-48 object-cover">
                    <div class="absolute top-3 right-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white px-3 py-1 rounded-full text-xs font-medium shadow-md">
                        <i class="fas fa-star mr-1"></i>Promo Lebaran
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Paket Toyota Alphard + Sopir</h3>
                    <div class="flex items-center text-gray-600 mb-3">
                        <i class="fas fa-users feature-icon mr-2 text-blue-600"></i>
                        <span class="font-medium text-sm">7 Penumpang</span>
                    </div>
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                        MPV nyaman untuk keluarga dengan kapasitas 7 penumpang, AC dingin, dan bagasi luas untuk perjalanan jauh.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="text-blue-600 font-bold text-xl">
                            Rp 300.000<span class="text-xs text-gray-500 font-normal">/hari</span>
                        </div>
                        <a href="/detail" 
                            class="bg-gradient-to-r from-indigo-600 to-indigo-700 text-white px-4 py-2 rounded-lg hover:from-indigo-700 hover:to-indigo-800 transition-all duration-300 font-medium shadow-md hover:shadow-lg transform hover:-translate-y-1 btn-shimmer text-sm inline-block text-center no-underline">
                                <i class="fas fa-calendar-check mr-1"></i>Sewa Sekarang
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Promo Card 2 -->
            <div class="car-card bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition-all duration-300 group border border-gray-100">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8Y2FyfGVufDB8fDB8fHww" 
                         alt="Innova Reborn" 
                         class="car-image w-full h-48 object-cover">
                    <div class="absolute top-3 right-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white px-3 py-1 rounded-full text-xs font-medium shadow-md">
                        <i class="fas fa-star mr-1"></i>Promo Keluarga
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Paket Innova Reborn 4 Hari</h3>
                    <div class="flex items-center text-gray-600 mb-3">
                        <i class="fas fa-users feature-icon mr-2 text-blue-600"></i>
                        <span class="font-medium text-sm">6 Penumpang</span>
                    </div>
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                        MPV nyaman untuk keluarga dengan kapasitas 6 penumpang, AC dingin, dan bagasi luas untuk perjalanan jauh.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="text-blue-600 font-bold text-xl">
                            Rp 300.000<span class="text-xs text-gray-500 font-normal">/hari</span>
                        </div>
                        <button class="bg-gradient-to-r from-indigo-600 to-indigo-700 text-white px-4 py-2 rounded-lg hover:from-indigo-700 hover:to-indigo-800 transition-all duration-300 font-medium shadow-md hover:shadow-lg transform hover:-translate-y-1 btn-shimmer text-sm">
                            <i class="fas fa-calendar-check mr-1"></i>Sewa Sekarang
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Promo Card 3 -->
            <div class="car-card bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition-all duration-300 group border border-gray-100">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1519641471654-76ce0107ad1b?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzN8fGNhcnxlbnwwfHwwfHx8MA%3D%3D" 
                         alt="Toyota Hiace" 
                         class="car-image w-full h-48 object-cover">
                    <div class="absolute top-3 right-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white px-3 py-1 rounded-full text-xs font-medium shadow-md">
                        <i class="fas fa-star mr-1"></i>Promo Bus
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Paket Toyota Hiace + Sopir</h3>
                    <div class="flex items-center text-gray-600 mb-3">
                        <i class="fas fa-users feature-icon mr-2 text-blue-600"></i>
                        <span class="font-medium text-sm">12 Penumpang</span>
                    </div>
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                        Bus mini nyaman untuk rombongan dengan kapasitas 12 penumpang, AC dingin, dan bagasi luas untuk perjalanan jauh.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="text-blue-600 font-bold text-xl">
                            Rp 1.200.000<span class="text-xs text-gray-500 font-normal">/hari</span>
                        </div>
                        <button class="bg-gradient-to-r from-indigo-600 to-indigo-700 text-white px-4 py-2 rounded-lg hover:from-indigo-700 hover:to-indigo-800 transition-all duration-300 font-medium shadow-md hover:shadow-lg transform hover:-translate-y-1 btn-shimmer text-sm">
                            <i class="fas fa-calendar-check mr-1"></i>Sewa Sekarang
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fleet Section -->
<section id="mobil" class="py-12 bg-white relative overflow-hidden">
    <div class="absolute inset-0 bg-dots-pattern opacity-5"></div>
    
    <!-- Floating decoration elements -->
    <div class="absolute top-16 left-8 w-12 h-12 bg-blue-200 rounded-full opacity-20 floating-icon"></div>
    <div class="absolute bottom-16 right-8 w-16 h-16 bg-purple-200 rounded-full opacity-20 floating-icon" style="animation-delay: 1s;"></div>
    <div class="absolute top-32 right-16 w-10 h-10 bg-indigo-200 rounded-full opacity-20 floating-icon" style="animation-delay: 2s;"></div>
    
    <div class="container mx-auto px-4 relative z-10 max-w-7xl">
        <div class="text-center mb-12">
            <span class="inline-block bg-gradient-to-r from-blue-600 to-purple-600 text-white font-medium text-xs uppercase tracking-wide px-4 py-2 rounded-full mb-4 shadow-md">
                <i class="fas fa-car mr-1"></i>Armada Kami
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 leading-tight">
                Pilihan Kendaraan <span class="gradient-text">Berkualitas</span>
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto leading-relaxed">
                Berbagai daftar mobil terawat dengan kondisi prima untuk memenuhi kebutuhan perjalanan Anda
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Car Card 1 - Toyota Avanza -->
            <div class="car-card bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition-all duration-300 group border border-gray-100">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Toyota Avanza" 
                         class="car-image w-full h-48 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Toyota Avanza</h3>
                    <div class="flex items-center text-gray-600 mb-3">
                        <i class="fas fa-users feature-icon mr-2 text-blue-600"></i>
                        <span class="font-medium text-sm mr-3">7 Penumpang</span>
                    </div>
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                        MPV nyaman untuk keluarga dengan kapasitas 7 penumpang, AC dingin, dan bagasi luas untuk perjalanan jauh.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="text-blue-600 font-bold text-xl">
                            Rp 300.000<span class="text-xs text-gray-500 font-normal">/hari</span>
                        </div>
                        <button class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-4 py-2 rounded-lg hover:from-blue-700 hover:to-blue-800 transition-all duration-300 font-medium shadow-md hover:shadow-lg transform hover:-translate-y-1 btn-shimmer text-sm">
                            <i class="fas fa-calendar-check mr-1"></i>Sewa Sekarang
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Car Card 2 - Honda Brio -->
            <div class="car-card bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition-all duration-300 group border border-gray-100">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1583121274602-3e2820c69888?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Honda Brio" 
                         class="car-image w-full h-48 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Honda Brio</h3>
                    <div class="flex items-center text-gray-600 mb-3">
                        <i class="fas fa-users feature-icon mr-2 text-blue-600"></i>
                        <span class="font-medium text-sm mr-3">5 Penumpang</span>
                    </div>
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                        City car irit bahan bakar, cocok untuk perjalanan dalam kota dengan handling yang responsif dan parkir mudah.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="text-blue-600 font-bold text-xl">
                            Rp 200.000<span class="text-xs text-gray-500 font-normal">/hari</span>
                        </div>
                        <button class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-4 py-2 rounded-lg hover:from-blue-700 hover:to-blue-800 transition-all duration-300 font-medium shadow-md hover:shadow-lg transform hover:-translate-y-1 btn-shimmer text-sm">
                            <i class="fas fa-calendar-check mr-1"></i>Sewa Sekarang
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Car Card 3 - Toyota Innova -->
            <div class="car-card bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition-all duration-300 group border border-gray-100">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Toyota Innova" 
                         class="car-image w-full h-48 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Toyota Innova</h3>
                    <div class="flex items-center text-gray-600 mb-3">
                        <i class="fas fa-users feature-icon mr-2 text-blue-600"></i>
                        <span class="font-medium text-sm mr-3">8 Penumpang</span>
                    </div>
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                        MPV premium dengan kapasitas 8 penumpang, interior mewah, dan kenyamanan berkelas untuk perjalanan bisnis.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="text-blue-600 font-bold text-xl">
                            Rp 450.000<span class="text-xs text-gray-500 font-normal">/hari</span>
                        </div>
                        <button class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-4 py-2 rounded-lg hover:from-blue-700 hover:to-blue-800 transition-all duration-300 font-medium shadow-md hover:shadow-lg transform hover:-translate-y-1 btn-shimmer text-sm">
                            <i class="fas fa-calendar-check mr-1"></i>Sewa Sekarang
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Car Card 4 - Suzuki Ertiga -->
            <div class="car-card bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition-all duration-300 group border border-gray-100">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Suzuki Ertiga" 
                         class="car-image w-full h-48 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Suzuki Ertiga</h3>
                    <div class="flex items-center text-gray-600 mb-3">
                        <i class="fas fa-users feature-icon mr-2 text-blue-600"></i>
                        <span class="font-medium text-sm mr-3">7 Penumpang</span>
                    </div>
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                        MPV kompak dengan desain modern, konsumsi bahan bakar irit, dan fitur keselamatan lengkap untuk keluarga.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="text-blue-600 font-bold text-xl">
                            Rp 280.000<span class="text-xs text-gray-500 font-normal">/hari</span>
                        </div>
                        <button class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-4 py-2 rounded-lg hover:from-blue-700 hover:to-blue-800 transition-all duration-300 font-medium shadow-md hover:shadow-lg transform hover:-translate-y-1 btn-shimmer text-sm">
                            <i class="fas fa-calendar-check mr-1"></i>Sewa Sekarang
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Car Card 5 - Daihatsu Xenia -->
            <div class="car-card bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition-all duration-300 group border border-gray-100">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1550355291-bbee04a92027?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Daihatsu Xenia" 
                         class="car-image w-full h-48 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Daihatsu Xenia</h3>
                    <div class="flex items-center text-gray-600 mb-3">
                        <i class="fas fa-users feature-icon mr-2 text-blue-600"></i>
                        <span class="font-medium text-sm mr-3">7 Penumpang</span>
                    </div>
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                        MPV ekonomis dengan ruang kabin luas, cocok untuk liburan keluarga dengan budget terjangkau namun tetap nyaman.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="text-blue-600 font-bold text-xl">
                            Rp 270.000<span class="text-xs text-gray-500 font-normal">/hari</span>
                        </div>
                        <button class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-4 py-2 rounded-lg hover:from-blue-700 hover:to-blue-800 transition-all duration-300 font-medium shadow-md hover:shadow-lg transform hover:-translate-y-1 btn-shimmer text-sm">
                            <i class="fas fa-calendar-check mr-1"></i>Sewa Sekarang
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Car Card 6 - Honda Jazz -->
            <div class="car-card bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition-all duration-300 group border border-gray-100">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                         alt="Honda Jazz" 
                         class="car-image w-full h-48 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Honda Jazz</h3>
                    <div class="flex items-center text-gray-600 mb-3">
                        <i class="fas fa-users feature-icon mr-2 text-blue-600"></i>
                        <span class="font-medium text-sm mr-3">5 Penumpang</span>
                    </div>
                    <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                        Hatchback stylish dengan interior fleksibel, performa mesin responsif, dan teknologi modern untuk gaya hidup aktif.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="text-blue-600 font-bold text-xl">
                            Rp 250.000<span class="text-xs text-gray-500 font-normal">/hari</span>
                        </div>
                        <button class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-4 py-2 rounded-lg hover:from-blue-700 hover:to-blue-800 transition-all duration-300 font-medium shadow-md hover:shadow-lg transform hover:-translate-y-1 btn-shimmer text-sm">
                            <i class="fas fa-calendar-check mr-1"></i>Sewa Sekarang
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection