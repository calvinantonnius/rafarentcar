<!-- Premium Header -->
<header class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md shadow-lg border-b border-gray-100">
    <nav class="container mx-auto px-4 lg:px-8">
        <!-- Top Bar -->
        <div class="flex items-center justify-between py-3">
            <!-- Logo with Luxurious Effect -->
            <div class="flex items-center space-x-3 group">
                <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-cyan-500 rounded-xl flex items-center justify-center shadow-lg transform group-hover:rotate-[15deg] transition duration-500">
                    <i class="fas fa-car text-white text-2xl"></i>
                </div>
                <div>
                    <h1 class="text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500 tracking-tight">
                        RafaRentCar
                    </h1>
                    <p class="text-xs font-medium text-gray-500 tracking-wider">PREMIUM CAR RENTAL</p>
                </div>
            </div>
            
            <!-- Navigation Menu - Luxury Style -->
            <div class="hidden lg:flex items-center space-x-1 bg-white/80 rounded-full px-2 py-1 shadow-inner border border-gray-100">
                <a href="/" class="relative px-6 py-2 text-gray-700 font-medium rounded-full group transition-all duration-300">
                    <span class="relative z-10 flex items-center">
                        <i class="fas fa-home mr-2 text-blue-500"></i>
                        Beranda
                    </span>
                    <span class="absolute inset-0 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-full scale-0 group-hover:scale-100 opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
                </a>
                
                <a href="/tentang" class="relative px-6 py-2 text-gray-700 font-medium rounded-full group transition-all duration-300">
                    <span class="relative z-10 flex items-center">
                        <i class="fas fa-info-circle mr-2 text-cyan-500"></i>
                        Tentang
                    </span>
                    <span class="absolute inset-0 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-full scale-0 group-hover:scale-100 opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
                </a>
                
                <a href="/mobil" class="relative px-6 py-2 text-gray-700 font-medium rounded-full group transition-all duration-300 hover:text-blue-600">
                    <span class="relative z-10 flex items-center">
                        <i class="fas fa-car mr-2 text-blue-400"></i>
                        Daftar Mobil
                    </span>
                    <span class="absolute inset-0 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-full scale-0 group-hover:scale-100 opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
                </a>
                
                <a href="#syarat" class="relative px-6 py-2 text-gray-700 font-medium rounded-full group transition-all duration-300">
                    <span class="relative z-10 flex items-center">
                        <i class="fas fa-file-contract mr-2 text-cyan-400"></i>
                        Syarat
                    </span>
                    <span class="absolute inset-0 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-full scale-0 group-hover:scale-100 opacity-0 group-hover:opacity-100 transition-all duration-300"></span>
                </a>
            </div>
            
            <!-- Premium CTA Buttons -->
            <div class="hidden lg:flex items-center space-x-3">
                <a href="tel:+6281234567890" class="flex items-center px-5 py-2.5 bg-gradient-to-r from-blue-600 to-cyan-500 text-white font-medium rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-0.5 group">
                    <i class="fas fa-phone-alt mr-2 transform group-hover:scale-110 transition-transform"></i>
                    <span>Hubungi Kami</span>
                    <span class="ml-2 px-2 py-0.5 bg-white/20 rounded-full text-xs">24/7</span>
                </a>
                
                <a href="#booking" class="px-5 py-2.5 bg-white border-2 border-blue-500 text-blue-600 font-medium rounded-full shadow-md hover:bg-blue-50 transition-all duration-300 transform hover:-translate-y-0.5">
                    <i class="far fa-calendar-alt mr-2"></i>
                    Booking Now
                </a>
            </div>
            
            <!-- Mobile Menu Button - Premium -->
            <button class="lg:hidden relative w-10 h-10 focus:outline-none group" id="mobile-menu-btn">
                <span class="absolute top-1/2 left-1/2 w-6 h-0.5 bg-gray-700 transform -translate-x-1/2 -translate-y-1/2 group-hover:bg-blue-600 transition duration-300"></span>
                <span class="absolute top-1/2 left-1/2 w-6 h-0.5 bg-gray-700 transform -translate-x-1/2 -translate-y-1/2 group-hover:bg-blue-600 transition duration-300" 
                      id="menu-line-2"></span>
                <span class="absolute top-1/2 left-1/2 w-6 h-0.5 bg-gray-700 transform -translate-x-1/2 -translate-y-1/2 group-hover:bg-blue-600 transition duration-300"></span>
            </button>
        </div>
        
        <!-- Premium Mobile Menu -->
        <div class="lg:hidden hidden bg-white rounded-xl shadow-2xl mx-2 mt-2 overflow-hidden" id="mobile-menu">
            <div class="py-2 px-3 space-y-1">
                <a href="#beranda" class="flex items-center px-4 py-3 bg-gradient-to-r from-blue-50 to-cyan-50 text-blue-600 rounded-lg font-medium">
                    <i class="fas fa-home mr-3 text-blue-500"></i>
                    Beranda
                    <i class="fas fa-chevron-right ml-auto text-blue-400"></i>
                </a>
                
                <a href="#tentang" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition duration-300 rounded-lg">
                    <i class="fas fa-info-circle mr-3 text-cyan-500"></i>
                    Tentang Kami
                    <i class="fas fa-chevron-right ml-auto text-gray-400"></i>
                </a>
                
                <a href="#mobil" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition duration-300 rounded-lg">
                    <i class="fas fa-car mr-3 text-blue-400"></i>
                    Daftar Mobil
                    <i class="fas fa-chevron-right ml-auto text-gray-400"></i>
                </a>
                
                <a href="#syarat" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition duration-300 rounded-lg">
                    <i class="fas fa-file-contract mr-3 text-cyan-400"></i>
                    Syarat & Ketentuan
                    <i class="fas fa-chevron-right ml-auto text-gray-400"></i>
                </a>
                
                <div class="grid grid-cols-2 gap-3 pt-2">
                    <a href="tel:+6281234567890" class="col-span-2 md:col-span-1 bg-gradient-to-r from-blue-600 to-cyan-500 text-white text-center px-4 py-3 rounded-lg font-medium shadow hover:shadow-md transition duration-300">
                        <i class="fas fa-phone-alt mr-2"></i>
                        Hubungi Kami
                    </a>
                    
                    <a href="#booking" class="col-span-2 md:col-span-1 bg-white border border-blue-400 text-blue-600 text-center px-4 py-3 rounded-lg font-medium shadow hover:bg-blue-50 transition duration-300">
                        <i class="far fa-calendar-alt mr-2"></i>
                        Booking Now
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- Premium Mobile Menu JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuLine2 = document.getElementById('menu-line-2');
    let menuOpen = false;

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            menuOpen = !menuOpen;
            
            // Toggle menu visibility
            mobileMenu.classList.toggle('hidden');
            
            // Animate hamburger to X
            if (menuOpen) {
                this.classList.add('rotate-90');
                menuLine2.classList.add('opacity-0');
            } else {
                this.classList.remove('rotate-90');
                menuLine2.classList.remove('opacity-0');
            }
        });
    }
});
</script>