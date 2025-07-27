<!-- Header - SINGLE HEADER ONLY -->
<header class="bg-white shadow-lg fixed top-0 left-0 right-0 z-50">
    <nav class="container mx-auto px-4 lg:px-8">
        <div class="flex items-center justify-between py-4">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                    <i class="fas fa-car text-white text-xl"></i>
                </div>
                <div>
                    <h1 class="text-2xl font-bold text-blue-600">RafaRentCar</h1>
                    <p class="text-xs text-gray-500">Rental Mobil Terpercaya</p>
                </div>
            </div>
            
            <!-- Navigation Menu (Desktop) -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="text-blue-600 font-medium border-b-2 border-blue-600 pb-1">Beranda</a>
                <a href="/tentang" class="text-gray-700 hover:text-blue-600 transition duration-300">Tentang</a>
                <a href="#mobil" class="text-gray-700 hover:text-blue-600 transition duration-300">Daftar Mobil</a>
                <a href="#syarat" class="text-gray-700 hover:text-blue-600 transition duration-300">Syarat & Ketentuan</a>
                <a href="#kontak" class="text-gray-700 hover:text-blue-600 transition duration-300">Kontak</a>
            </div>
            
            <!-- CTA Button -->
            <div class="hidden md:block">
                <a href="#kontak" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300 font-medium">
                    <i class="fas fa-phone mr-2"></i>Hubungi Kami
                </a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button class="md:hidden text-gray-700 hover:text-blue-600 focus:outline-none" id="mobile-menu-btn">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div class="md:hidden hidden border-t border-gray-200" id="mobile-menu">
            <div class="py-4 space-y-4">
                <a href="#beranda" class="block text-blue-600 font-medium">Beranda</a>
                <a href="#tentang" class="block text-gray-700 hover:text-blue-600 transition duration-300">Tentang</a>
                <a href="#mobil" class="block text-gray-700 hover:text-blue-600 transition duration-300">Daftar Mobil</a>
                <a href="#syarat" class="block text-gray-700 hover:text-blue-600 transition duration-300">Syarat & Ketentuan</a>
                <a href="#kontak" class="block text-gray-700 hover:text-blue-600 transition duration-300">Kontak</a>
                <a href="#kontak" class="inline-block bg-blue-600 text-white px-4 py-2 rounded-lg mt-4">
                    <i class="fas fa-phone mr-2"></i>Hubungi Kami
                </a>
            </div>
        </div>
    </nav>
</header>

<!-- Mobile Menu JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    }
});
</script>