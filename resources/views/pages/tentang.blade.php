<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami | RafaRentCar</title>
    <meta name="description" content="RafaRentCar - Partner Perjalanan Terpercaya dengan pelayanan terbaik dan armada berkualitas.">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .about-bg-pattern {
            background-image: 
                radial-gradient(circle at 25% 25%, #3b82f6 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, #8b5cf6 0%, transparent 50%),
                linear-gradient(45deg, transparent 40%, rgba(59, 130, 246, 0.1) 50%, transparent 60%);
            background-size: 200px 200px, 150px 150px, 100px 100px;
            animation: floatingPattern 20s ease-in-out infinite;
        }
        
        @keyframes floatingPattern {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(30px, -30px) rotate(120deg); }
            66% { transform: translate(-20px, 20px) rotate(240deg); }
        }
        
        /* Animated counter */
        .stat-number {
            opacity: 0;
            transform: translateY(20px);
            animation: countUp 0.8s ease-out forwards;
        }
        
        @keyframes countUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Staggered animation delays */
        .stat-card:nth-child(1) .stat-number { animation-delay: 0.2s; }
        .stat-card:nth-child(2) .stat-number { animation-delay: 0.4s; }
        .stat-card:nth-child(3) .stat-number { animation-delay: 0.6s; }
        .stat-card:nth-child(4) .stat-number { animation-delay: 0.8s; }
        
        /* Feature cards hover effects */
        .feature-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .feature-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .feature-icon {
            transition: all 0.3s ease;
        }
        
        .feature-card:hover .feature-icon {
            transform: scale(1.1);
        }
        
        /* Value cards animation */
        .value-card {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }
        
        .value-card.animate {
            opacity: 1;
            transform: translateY(0);
        }
        
        .value-card:nth-child(1) { transition-delay: 0.1s; }
        .value-card:nth-child(2) { transition-delay: 0.2s; }
        .value-card:nth-child(3) { transition-delay: 0.3s; }
        
        /* Floating elements */
        .floating-element {
            animation: float 6s ease-in-out infinite;
        }
        
        .floating-element:nth-child(2) { animation-delay: -2s; }
        .floating-element:nth-child(3) { animation-delay: -4s; }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
        
        /* Gradient text animation */
        .gradient-text {
            background: linear-gradient(-45deg, #3b82f6, #8b5cf6, #ec4899, #3b82f6);
            background-size: 400% 400%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradientShift 3s ease-in-out infinite;
        }
        
        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        /* Image hover effects */
        .about-image {
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .about-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(59, 130, 246, 0.1), rgba(139, 92, 246, 0.1));
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 1;
        }
        
        .about-image:hover::before {
            opacity: 1;
        }
        
        /* Button pulse effect */
        .pulse-badge {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: .8; }
        }
        
        /* Scroll-triggered animations */
        .scroll-reveal {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .scroll-reveal.revealed {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Stats counter animation */
        .counter {
            font-variant-numeric: tabular-nums;
        }
        
        /* Responsive improvements */
        @media (max-width: 768px) {
            .about-bg-pattern {
                background-size: 100px 100px, 75px 75px, 50px 50px;
            }
        }
        
        /* Loading shimmer effect */
        .shimmer {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: shimmer 2s infinite;
        }
        
        @keyframes shimmer {
            0% { background-position: -200% 0; }
            100% { background-position: 200% 0; }
        }
    </style>
</head>
<body class="bg-gray-50">
    
    <section id="about" class="py-20 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
        <div class="absolute inset-0 about-bg-pattern opacity-5"></div>
        
        <!-- Floating decorative elements -->
        <div class="absolute top-20 left-10 w-32 h-32 bg-blue-200 rounded-full opacity-20 floating-element"></div>
        <div class="absolute bottom-32 right-20 w-24 h-24 bg-purple-200 rounded-full opacity-20 floating-element"></div>
        <div class="absolute top-1/2 right-10 w-16 h-16 bg-pink-200 rounded-full opacity-20 floating-element"></div>
        
        <div class="container mx-auto px-4 lg:px-8 relative z-10 space-y-24">

            <!-- ROW 1: About Text & Image -->
            <div class="grid lg:grid-cols-2 gap-16 items-center scroll-reveal">
                <!-- Text -->
                <div class="space-y-6">
                    <span class="inline-block bg-blue-100 text-blue-600 font-semibold text-sm uppercase tracking-wide px-4 py-2 rounded-full pulse-badge">
                        <i class="fas fa-info-circle mr-2"></i>Tentang Kami
                    </span>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight">
                        RafaRentCar - Partner Perjalanan 
                        <span class="gradient-text">Terpercaya</span>
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Sejak tahun 2020, RafaRentCar telah menjadi pilihan utama untuk layanan rental mobil di Indonesia. Kami berkomitmen memberikan pengalaman berkendara yang aman, nyaman, dan terpercaya dengan armada kendaraan terawat dan pelayanan prima.
                    </p>
                    
                    <!-- Additional info badges -->
                    <div class="flex flex-wrap gap-3 pt-4">
                        <div class="flex items-center bg-white px-4 py-2 rounded-full shadow-sm border border-gray-100">
                            <i class="fas fa-certificate text-blue-600 mr-2"></i>
                            <span class="text-sm font-medium text-gray-700">Bersertifikat</span>
                        </div>
                        <div class="flex items-center bg-white px-4 py-2 rounded-full shadow-sm border border-gray-100">
                            <i class="fas fa-shield-alt text-green-600 mr-2"></i>
                            <span class="text-sm font-medium text-gray-700">Asuransi Lengkap</span>
                        </div>
                        <div class="flex items-center bg-white px-4 py-2 rounded-full shadow-sm border border-gray-100">
                            <i class="fas fa-clock text-purple-600 mr-2"></i>
                            <span class="text-sm font-medium text-gray-700">Layanan 24/7</span>
                        </div>
                    </div>
                </div>

                <!-- Image -->
                <div class="relative group">
                    <div class="about-image rounded-3xl overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&w=1000&q=80" 
                             alt="RafaRentCar Office" 
                             class="w-full h-auto group-hover:scale-105 transition-transform duration-500">
                    </div>
                    
                    <!-- Experience badge -->
                    <div class="absolute -bottom-8 -left-8 bg-gradient-to-r from-blue-600 to-purple-600 text-white p-6 rounded-2xl shadow-xl">
                        <div class="text-3xl font-bold counter">4+</div>
                        <div class="text-blue-100 text-sm">Tahun Pengalaman</div>
                    </div>
                    
                    <!-- Award icon -->
                    <div class="absolute top-4 right-4 w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                        <i class="fas fa-award text-white text-2xl"></i>
                    </div>
                    
                    <!-- Decorative blurs -->
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-gradient-to-r from-blue-400 to-purple-400 rounded-full opacity-20 blur-xl"></div>
                    <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full opacity-15 blur-2xl"></div>
                </div>
            </div>

            <!-- ROW 2: Stats & Features -->
            <div class="grid lg:grid-cols-2 gap-12 scroll-reveal">
                <!-- Statistik -->
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center lg:text-left">Pencapaian Kami</h3>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="stat-card text-center p-6 bg-white rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                            <div class="stat-number text-3xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-2 counter">500+</div>
                            <div class="text-gray-600 text-sm font-medium">Pelanggan Puas</div>
                            <div class="mt-2">
                                <i class="fas fa-users text-blue-500 text-lg"></i>
                            </div>
                        </div>
                        <div class="stat-card text-center p-6 bg-white rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                            <div class="stat-number text-3xl font-bold bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent mb-2 counter">50+</div>
                            <div class="text-gray-600 text-sm font-medium">Armada Kendaraan</div>
                            <div class="mt-2">
                                <i class="fas fa-car text-green-500 text-lg"></i>
                            </div>
                        </div>
                        <div class="stat-card text-center p-6 bg-white rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                            <div class="stat-number text-3xl font-bold bg-gradient-to-r from-yellow-500 to-orange-500 bg-clip-text text-transparent mb-2 counter">4.8</div>
                            <div class="text-gray-600 text-sm font-medium">Rating Pelayanan</div>
                            <div class="mt-2">
                                <div class="flex justify-center space-x-1">
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                </div>
                            </div>
                        </div>
                        <div class="stat-card text-center p-6 bg-white rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                            <div class="stat-number text-3xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent mb-2 counter">24/7</div>
                            <div class="text-gray-600 text-sm font-medium">Customer Service</div>
                            <div class="mt-2">
                                <i class="fas fa-headset text-purple-500 text-lg"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fitur -->
                <div class="space-y-6">
                    <h3 class="text-2xl font-bold text-gray-900">Mengapa Memilih RafaRentCar?</h3>
                    
                    <div class="feature-card flex items-start space-x-4 p-6 bg-white rounded-xl shadow-lg border border-gray-100">
                        <div class="feature-icon w-12 h-12 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-shield-alt text-white"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Kendaraan Terawat</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">Semua mobil dalam kondisi prima dan terawat dengan baik, dilengkapi dengan perawatan berkala dan inspeksi menyeluruh.</p>
                        </div>
                    </div>
                    
                    <div class="feature-card flex items-start space-x-4 p-6 bg-white rounded-xl shadow-lg border border-gray-100">
                        <div class="feature-icon w-12 h-12 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-headset text-white"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Pelayanan 24/7</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">Customer service siap membantu kapan saja Anda membutuhkan dengan respon cepat dan solusi terbaik.</p>
                        </div>
                    </div>
                    
                    <div class="feature-card flex items-start space-x-4 p-6 bg-white rounded-xl shadow-lg border border-gray-100">
                        <div class="feature-icon w-12 h-12 bg-gradient-to-r from-purple-500 to-purple-600 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-dollar-sign text-white"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Harga Terjangkau</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">Tarif kompetitif dengan kualitas layanan terbaik, tanpa biaya tersembunyi dan promo menarik.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ROW 3: Nilai-Nilai Kami -->
            <div class="pt-16 border-t border-gray-200 scroll-reveal">
                <div class="text-center mb-12">
                    <span class="inline-block bg-purple-100 text-purple-600 font-semibold text-sm uppercase tracking-wide px-4 py-2 rounded-full mb-4">
                        <i class="fas fa-heart mr-2"></i>Nilai-Nilai Kami
                    </span>
                    <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Komitmen Terbaik Untuk Anda</h3>
                    <p class="text-gray-600 text-lg max-w-2xl mx-auto">Landasan nilai yang menjadi pedoman kami dalam memberikan pelayanan terbaik untuk setiap pelanggan</p>
                </div>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="value-card text-center p-8 bg-white rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-heart text-white text-2xl"></i>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-4">Kepuasan Pelanggan</h4>
                        <p class="text-gray-600 leading-relaxed">Kepuasan dan kenyamanan pelanggan adalah prioritas utama dalam setiap layanan yang kami berikan dengan standar pelayanan terbaik.</p>
                    </div>
                    
                    <div class="value-card text-center p-8 bg-white rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-leaf text-white text-2xl"></i>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-4">Ramah Lingkungan</h4>
                        <p class="text-gray-600 leading-relaxed">Kami berkomitmen menggunakan kendaraan yang ramah lingkungan dan mendukung keberlanjutan untuk masa depan yang lebih baik.</p>
                    </div>
                    
                    <div class="value-card text-center p-8 bg-white rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-star text-white text-2xl"></i>
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-4">Kualitas Terbaik</h4>
                        <p class="text-gray-600 leading-relaxed">Standar kualitas tinggi dalam pemeliharaan kendaraan dan pelayanan yang profesional untuk pengalaman terbaik Anda.</p>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="text-center py-16 scroll-reveal">
                <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl p-12 text-white relative overflow-hidden">
                    <div class="absolute inset-0 bg-black/10"></div>
                    <div class="relative z-10">
                        <h3 class="text-3xl font-bold mb-4">Siap Memulai Perjalanan Anda?</h3>
                        <p class="text-xl mb-8 text-blue-100">Hubungi kami sekarang dan dapatkan penawaran terbaik untuk kebutuhan rental mobil Anda</p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="#" class="inline-flex items-center bg-white text-blue-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                <i class="fas fa-phone mr-3"></i>Hubungi Sekarang
                            </a>
                            <a href="#" class="inline-flex items-center border-2 border-white text-white px-8 py-4 rounded-xl font-semibold hover:bg-white hover:text-blue-600 transition-all duration-300">
                                <i class="fas fa-car mr-3"></i>Lihat Armada
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Scroll reveal animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.scroll-reveal').forEach(el => {
            observer.observe(el);
        });

        // Value cards animation
        const valueObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const cards = entry.target.querySelectorAll('.value-card');
                    cards.forEach((card, index) => {
                        setTimeout(() => {
                            card.classList.add('animate');
                        }, index * 200);
                    });
                }
            });
        }, observerOptions);

        const valuesSection = document.querySelector('.pt-16.border-t');
        if (valuesSection) {
            valueObserver.observe(valuesSection);
        }

        // Animated counter
        function animateCounter(element, target, duration = 2000) {
            let start = 0;
            const increment = target / (duration / 16);
            const timer = setInterval(() => {
                start += increment;
                if (target === '4.8') {
                    element.textContent = Math.min(start, target).toFixed(1);
                } else if (target.includes('+')) {
                    element.textContent = Math.floor(Math.min(start, parseInt(target))) + '+';
                } else if (target === '24/7') {
                    element.textContent = '24/7';
                    clearInterval(timer);
                    return;
                } else {
                    element.textContent = Math.floor(Math.min(start, parseInt(target)));
                }
                
                if (start >= parseInt(target) || start >= parseFloat(target)) {
                    clearInterval(timer);
                    element.textContent = target;
                }
            }, 16);
        }

        // Trigger counter animation when stats come into view
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counters = entry.target.querySelectorAll('.counter');
                    counters.forEach(counter => {
                        const target = counter.textContent;
                        animateCounter(counter, target);
                    });
                    statsObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.stat-card').forEach(card => {
            statsObserver.observe(card);
        });
    </script>
</body>
</html>