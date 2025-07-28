<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armada Mobil Rental</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .bg-dots-pattern {
            background-image: radial-gradient(circle, #d1d5db 1px, transparent 1px);
            background-size: 20px 20px;
        }
        
        .car-card {
            position: relative;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        
        .car-card:hover {
            transform: translateY(-8px);
        }
        
        .car-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.1) 0%, rgba(147, 51, 234, 0.1) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
            border-radius: 1.5rem;
            z-index: 1;
        }
        
        .car-card:hover::before {
            opacity: 1;
        }
        
        .car-card > * {
            position: relative;
            z-index: 2;
        }
        
        .price-badge {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .btn-primary:hover::before {
            left: 100%;
        }
        
        .floating-icon {
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .car-image {
            transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        
        .car-card:hover .car-image {
            transform: scale(1.1) rotate(2deg);
        }
        
        .feature-icon {
            transition: all 0.3s ease;
        }
        
        .car-card:hover .feature-icon {
            transform: scale(1.2);
            color: #667eea;
        }
        
        .promo-badge {
            animation: bounce 1s infinite;
        }
        
        @keyframes bounce {
            0%, 20%, 53%, 80%, 100% { transform: translateY(0); }
            40%, 43% { transform: translateY(-8px); }
            70% { transform: translateY(-4px); }
        }
        
        /* Responsive improvements */
        @media (max-width: 768px) {
            .car-card {
                margin-bottom: 2rem;
            }
        }
        
        /* Loading animation */
        .car-card {
            opacity: 0;
            transform: translateY(30px);
            animation: slideUp 0.6s ease-out forwards;
        }
        
        .car-card:nth-child(1) { animation-delay: 0.1s; }
        .car-card:nth-child(2) { animation-delay: 0.2s; }
        .car-card:nth-child(3) { animation-delay: 0.3s; }
        .car-card:nth-child(4) { animation-delay: 0.4s; }
        .car-card:nth-child(5) { animation-delay: 0.5s; }
        .car-card:nth-child(6) { animation-delay: 0.6s; }
        
        @keyframes slideUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body class="bg-gray-50">
    <section id="mobil" class="py-20 bg-gradient-to-br from-gray-100 to-gray-50 relative overflow-hidden px-4 lg:px-8">
        <div class="absolute inset-0 bg-dots-pattern opacity-10"></div>
        
        <!-- Floating decoration elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-blue-200 rounded-full opacity-20 floating-icon"></div>
        <div class="absolute bottom-20 right-10 w-32 h-32 bg-purple-200 rounded-full opacity-20 floating-icon" style="animation-delay: 1s;"></div>
        <div class="absolute top-40 right-20 w-16 h-16 bg-indigo-200 rounded-full opacity-20 floating-icon" style="animation-delay: 2s;"></div>
        
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <span class="inline-block bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold text-sm uppercase tracking-wide px-6 py-3 rounded-full mb-6 shadow-lg promo-badge">
                    <i class="fas fa-car mr-2"></i>Promo Kami
                </span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                    Pilihan Promo <span class="gradient-text">Menarik</span>
                </h2>
                <p class="text-gray-600 text-xl max-w-3xl mx-auto leading-relaxed">
                    Berbagai promo mobil terawat dengan kondisi prima untuk memenuhi kebutuhan perjalanan Anda
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Car Card 1 - Toyota Avanza -->
                <div class="car-card bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 group border border-gray-100">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Toyota Avanza" 
                             class="car-image w-full h-56 object-cover">
                        <div class="absolute top-4 right-4 bg-gradient-to-r from-blue-500 to-blue-600 text-white px-4 py-2 rounded-full text-sm font-medium shadow-lg">
                            <i class="fas fa-star mr-1"></i>Populer
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Toyota Avanza</h3>
                        <div class="flex items-center text-gray-600 mb-4">
                            <i class="fas fa-users feature-icon mr-3 text-blue-600 text-lg"></i>
                            <span class="font-medium">7 Penumpang</span>
                            <i class="fas fa-gas-pump feature-icon ml-4 mr-2 text-green-600"></i>
                            <span class="font-medium text-sm">Irit</span>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            MPV nyaman untuk keluarga dengan kapasitas 7 penumpang, AC dingin, dan bagasi luas untuk perjalanan jauh.
                        </p>
                        <div class="flex items-center justify-between mb-4">
                            <div class="text-blue-600 font-bold text-2xl">
                                Rp 300.000<span class="text-sm text-gray-500 font-normal">/hari</span>
                            </div>
                            <button class="btn-primary text-white px-6 py-3 rounded-xl font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                <i class="fas fa-calendar-check mr-2"></i>Sewa Sekarang
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Car Card 2 - Honda Brio -->
                <div class="car-card bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 group border border-gray-100">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1583121274602-3e2820c69888?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Honda Brio" 
                             class="car-image w-full h-56 object-cover">
                        <div class="absolute top-4 right-4 bg-gradient-to-r from-green-500 to-green-600 text-white px-4 py-2 rounded-full text-sm font-medium shadow-lg">
                            <i class="fas fa-leaf mr-1"></i>Hemat
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Honda Brio</h3>
                        <div class="flex items-center text-gray-600 mb-4">
                            <i class="fas fa-users feature-icon mr-3 text-green-600 text-lg"></i>
                            <span class="font-medium">5 Penumpang</span>
                            <i class="fas fa-city feature-icon ml-4 mr-2 text-blue-600"></i>
                            <span class="font-medium text-sm">City Car</span>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            City car irit bahan bakar, cocok untuk perjalanan dalam kota dengan handling yang responsif dan parkir mudah.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="text-green-600 font-bold text-2xl">
                                Rp 200.000<span class="text-sm text-gray-500 font-normal">/hari</span>
                            </div>
                            <button class="bg-gradient-to-r from-green-600 to-green-700 text-white px-6 py-3 rounded-xl hover:from-green-700 hover:to-green-800 transition-all duration-300 font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                <i class="fas fa-calendar-check mr-2"></i>Sewa Sekarang
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Car Card 3 - Toyota Innova -->
                <div class="car-card bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 group border border-gray-100">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Toyota Innova" 
                             class="car-image w-full h-56 object-cover">
                        <div class="absolute top-4 right-4 bg-gradient-to-r from-purple-500 to-purple-600 text-white px-4 py-2 rounded-full text-sm font-medium shadow-lg">
                            <i class="fas fa-crown mr-1"></i>Premium
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Toyota Innova</h3>
                        <div class="flex items-center text-gray-600 mb-4">
                            <i class="fas fa-users feature-icon mr-3 text-purple-600 text-lg"></i>
                            <span class="font-medium">8 Penumpang</span>
                            <i class="fas fa-briefcase feature-icon ml-4 mr-2 text-indigo-600"></i>
                            <span class="font-medium text-sm">Bisnis</span>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            MPV premium dengan kapasitas 8 penumpang, interior mewah, dan kenyamanan berkelas untuk perjalanan bisnis.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="text-purple-600 font-bold text-2xl">
                                Rp 450.000<span class="text-sm text-gray-500 font-normal">/hari</span>
                            </div>
                            <button class="bg-gradient-to-r from-purple-600 to-purple-700 text-white px-6 py-3 rounded-xl hover:from-purple-700 hover:to-purple-800 transition-all duration-300 font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                <i class="fas fa-calendar-check mr-2"></i>Sewa Sekarang
                            </button>
                        </div>
                    </div>
                </div>
    </section>

    <section id="mobil" class="py-20 bg-gradient-to-br from-gray-100 to-gray-50 relative overflow-hidden px-4 lg:px-8">
        <div class="absolute inset-0 bg-dots-pattern opacity-10"></div>
        
        <!-- Floating decoration elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-blue-200 rounded-full opacity-20 floating-icon"></div>
        <div class="absolute bottom-20 right-10 w-32 h-32 bg-purple-200 rounded-full opacity-20 floating-icon" style="animation-delay: 1s;"></div>
        <div class="absolute top-40 right-20 w-16 h-16 bg-indigo-200 rounded-full opacity-20 floating-icon" style="animation-delay: 2s;"></div>
        
        <div class="container mx-auto px-4 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <span class="inline-block bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold text-sm uppercase tracking-wide px-6 py-3 rounded-full mb-6 shadow-lg promo-badge">
                    <i class="fas fa-car mr-2"></i>Armada Kami
                </span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                    Pilihan Kendaraan <span class="gradient-text">Berkualitas</span>
                </h2>
                <p class="text-gray-600 text-xl max-w-3xl mx-auto leading-relaxed">
                    Berbagai daftar mobil terawat dengan kondisi prima untuk memenuhi kebutuhan perjalanan Anda
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Car Card 1 - Toyota Avanza -->
                <div class="car-card bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 group border border-gray-100">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Toyota Avanza" 
                             class="car-image w-full h-56 object-cover">
                        <div class="absolute top-4 right-4 bg-gradient-to-r from-blue-500 to-blue-600 text-white px-4 py-2 rounded-full text-sm font-medium shadow-lg">
                            <i class="fas fa-star mr-1"></i>Populer
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Toyota Avanza</h3>
                        <div class="flex items-center text-gray-600 mb-4">
                            <i class="fas fa-users feature-icon mr-3 text-blue-600 text-lg"></i>
                            <span class="font-medium">7 Penumpang</span>
                            <i class="fas fa-gas-pump feature-icon ml-4 mr-2 text-green-600"></i>
                            <span class="font-medium text-sm">Irit</span>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            MPV nyaman untuk keluarga dengan kapasitas 7 penumpang, AC dingin, dan bagasi luas untuk perjalanan jauh.
                        </p>
                        <div class="flex items-center justify-between mb-4">
                            <div class="text-blue-600 font-bold text-2xl">
                                Rp 300.000<span class="text-sm text-gray-500 font-normal">/hari</span>
                            </div>
                            <button class="btn-primary text-white px-6 py-3 rounded-xl font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                <i class="fas fa-calendar-check mr-2"></i>Sewa Sekarang
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Car Card 2 - Honda Brio -->
                <div class="car-card bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 group border border-gray-100">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1583121274602-3e2820c69888?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Honda Brio" 
                             class="car-image w-full h-56 object-cover">
                        <div class="absolute top-4 right-4 bg-gradient-to-r from-green-500 to-green-600 text-white px-4 py-2 rounded-full text-sm font-medium shadow-lg">
                            <i class="fas fa-leaf mr-1"></i>Hemat
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Honda Brio</h3>
                        <div class="flex items-center text-gray-600 mb-4">
                            <i class="fas fa-users feature-icon mr-3 text-green-600 text-lg"></i>
                            <span class="font-medium">5 Penumpang</span>
                            <i class="fas fa-city feature-icon ml-4 mr-2 text-blue-600"></i>
                            <span class="font-medium text-sm">City Car</span>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            City car irit bahan bakar, cocok untuk perjalanan dalam kota dengan handling yang responsif dan parkir mudah.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="text-green-600 font-bold text-2xl">
                                Rp 200.000<span class="text-sm text-gray-500 font-normal">/hari</span>
                            </div>
                            <button class="bg-gradient-to-r from-green-600 to-green-700 text-white px-6 py-3 rounded-xl hover:from-green-700 hover:to-green-800 transition-all duration-300 font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                <i class="fas fa-calendar-check mr-2"></i>Sewa Sekarang
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Car Card 3 - Toyota Innova -->
                <div class="car-card bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 group border border-gray-100">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Toyota Innova" 
                             class="car-image w-full h-56 object-cover">
                        <div class="absolute top-4 right-4 bg-gradient-to-r from-purple-500 to-purple-600 text-white px-4 py-2 rounded-full text-sm font-medium shadow-lg">
                            <i class="fas fa-crown mr-1"></i>Premium
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Toyota Innova</h3>
                        <div class="flex items-center text-gray-600 mb-4">
                            <i class="fas fa-users feature-icon mr-3 text-purple-600 text-lg"></i>
                            <span class="font-medium">8 Penumpang</span>
                            <i class="fas fa-briefcase feature-icon ml-4 mr-2 text-indigo-600"></i>
                            <span class="font-medium text-sm">Bisnis</span>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            MPV premium dengan kapasitas 8 penumpang, interior mewah, dan kenyamanan berkelas untuk perjalanan bisnis.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="text-purple-600 font-bold text-2xl">
                                Rp 450.000<span class="text-sm text-gray-500 font-normal">/hari</span>
                            </div>
                            <button class="bg-gradient-to-r from-purple-600 to-purple-700 text-white px-6 py-3 rounded-xl hover:from-purple-700 hover:to-purple-800 transition-all duration-300 font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                <i class="fas fa-calendar-check mr-2"></i>Sewa Sekarang
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Car Card 4 - Suzuki Ertiga -->
                <div class="car-card bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 group border border-gray-100">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Suzuki Ertiga" 
                             class="car-image w-full h-56 object-cover">
                        <div class="absolute top-4 right-4 bg-gradient-to-r from-orange-500 to-orange-600 text-white px-4 py-2 rounded-full text-sm font-medium shadow-lg">
                            <i class="fas fa-thumbs-up mr-1"></i>Favorit
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Suzuki Ertiga</h3>
                        <div class="flex items-center text-gray-600 mb-4">
                            <i class="fas fa-users feature-icon mr-3 text-orange-600 text-lg"></i>
                            <span class="font-medium">7 Penumpang</span>
                            <i class="fas fa-shield-alt feature-icon ml-4 mr-2 text-green-600"></i>
                            <span class="font-medium text-sm">Aman</span>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            MPV kompak dengan desain modern, konsumsi bahan bakar irit, dan fitur keselamatan lengkap untuk keluarga.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="text-orange-600 font-bold text-2xl">
                                Rp 280.000<span class="text-sm text-gray-500 font-normal">/hari</span>
                            </div>
                            <button class="bg-gradient-to-r from-orange-600 to-orange-700 text-white px-6 py-3 rounded-xl hover:from-orange-700 hover:to-orange-800 transition-all duration-300 font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                <i class="fas fa-calendar-check mr-2"></i>Sewa Sekarang
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Car Card 5 - Daihatsu Xenia -->
                <div class="car-card bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 group border border-gray-100">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1550355291-bbee04a92027?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Daihatsu Xenia" 
                             class="car-image w-full h-56 object-cover">
                        <div class="absolute top-4 right-4 bg-gradient-to-r from-teal-500 to-teal-600 text-white px-4 py-2 rounded-full text-sm font-medium shadow-lg">
                            <i class="fas fa-dollar-sign mr-1"></i>Ekonomis
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Daihatsu Xenia</h3>
                        <div class="flex items-center text-gray-600 mb-4">
                            <i class="fas fa-users feature-icon mr-3 text-teal-600 text-lg"></i>
                            <span class="font-medium">7 Penumpang</span>
                            <i class="fas fa-heart feature-icon ml-4 mr-2 text-red-600"></i>
                            <span class="font-medium text-sm">Keluarga</span>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            MPV ekonomis dengan ruang kabin luas, cocok untuk liburan keluarga dengan budget terjangkau namun tetap nyaman.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="text-teal-600 font-bold text-2xl">
                                Rp 270.000<span class="text-sm text-gray-500 font-normal">/hari</span>
                            </div>
                            <button class="bg-gradient-to-r from-teal-600 to-teal-700 text-white px-6 py-3 rounded-xl hover:from-teal-700 hover:to-teal-800 transition-all duration-300 font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                <i class="fas fa-calendar-check mr-2"></i>Sewa Sekarang
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Car Card 6 - Honda Jazz -->
                <div class="car-card bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 group border border-gray-100">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                             alt="Honda Jazz" 
                             class="car-image w-full h-56 object-cover">
                        <div class="absolute top-4 right-4 bg-gradient-to-r from-indigo-500 to-indigo-600 text-white px-4 py-2 rounded-full text-sm font-medium shadow-lg">
                            <i class="fas fa-bolt mr-1"></i>Stylish
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Honda Jazz</h3>
                        <div class="flex items-center text-gray-600 mb-4">
                            <i class="fas fa-users feature-icon mr-3 text-indigo-600 text-lg"></i>
                            <span class="font-medium">5 Penumpang</span>
                            <i class="fas fa-mobile-alt feature-icon ml-4 mr-2 text-purple-600"></i>
                            <span class="font-medium text-sm">Modern</span>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Hatchback stylish dengan interior fleksibel, performa mesin responsif, dan teknologi modern untuk gaya hidup aktif.
                        </p>
                        <div class="flex items-center justify-between mb-4">
                            <div class="text-indigo-600 font-bold text-2xl">
                                Rp 250.000<span class="text-sm text-gray-500 font-normal">/hari</span>
                            </div>
                            <button class="bg-gradient-to-r from-indigo-600 to-indigo-700 text-white px-6 py-3 rounded-xl hover:from-indigo-700 hover:to-indigo-800 transition-all duration-300 font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                <i class="fas fa-calendar-check mr-2"></i>Sewa Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>