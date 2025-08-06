<header class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md shadow-md border-b border-gray-100">
    <nav class="container mx-auto px-4 lg:px-8">
        <div class="flex items-center justify-between py-4">
            <!-- Logo Elegan -->
            <a href="/" class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-gradient-to-tr from-blue-600 to-cyan-500 rounded-lg flex items-center justify-center shadow text-white">
                    <i class="fas fa-car text-lg"></i>
                </div>
                <div>
                    <h1 class="text-xl font-semibold text-gray-800 tracking-tight">RafaRentCar</h1>
                    <p class="text-xs text-gray-500 uppercase tracking-wider">Car Rental</p>
                </div>
            </a>

            <!-- Menu Desktop -->
            <div class="hidden lg:flex items-center space-x-6 text-sm font-medium text-gray-700">
                <a href="/" class="hover:text-blue-600 transition duration-200">Beranda</a>
                <a href="/tentang" class="hover:text-blue-600 transition duration-200">Tentang</a>
                <a href="/mobil" class="hover:text-blue-600 transition duration-200">Daftar Mobil</a>
                <a href="#syarat" class="hover:text-blue-600 transition duration-200">Syarat</a>
            </div>

            <!-- Aksi -->
            <div class="hidden lg:flex items-center space-x-3">
                <a href="tel:+6281234567890"
                   class="flex items-center px-4 py-2 bg-gradient-to-r from-blue-600 to-cyan-500 text-white text-sm font-medium rounded-md shadow-md hover:shadow-lg transition-all duration-300">
                    <i class="fas fa-phone-alt mr-2"></i> Hubungi Kami
                </a>
                <a href="#booking"
                   class="px-4 py-2 border border-blue-500 text-blue-600 text-sm font-medium rounded-md hover:bg-blue-50 transition-all duration-300">
                    <i class="far fa-calendar-alt mr-2"></i> Booking
                </a>
            </div>

            <!-- Menu Mobile Button -->
            <button id="mobile-menu-btn" class="lg:hidden text-gray-700 focus:outline-none">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden hidden flex flex-col gap-2 pb-4 text-sm font-medium text-gray-700">
            <a href="/" class="block py-2 px-3 rounded hover:bg-blue-50">Beranda</a>
            <a href="/tentang" class="block py-2 px-3 rounded hover:bg-blue-50">Tentang</a>
            <a href="/mobil" class="block py-2 px-3 rounded hover:bg-blue-50">Daftar Mobil</a>
            <a href="#syarat" class="block py-2 px-3 rounded hover:bg-blue-50">Syarat</a>
            <div class="mt-2 flex flex-col gap-2 px-3">
                <a href="tel:+6281234567890"
                   class="block text-center bg-gradient-to-r from-blue-600 to-cyan-500 text-white py-2 rounded-md shadow-md hover:shadow-lg transition">
                    <i class="fas fa-phone-alt mr-1"></i> Hubungi Kami
                </a>
                <a href="#booking"
                   class="block text-center border border-blue-500 text-blue-600 py-2 rounded-md hover:bg-blue-50 transition">
                    <i class="far fa-calendar-alt mr-1"></i> Booking
                </a>
            </div>
        </div>
    </nav>
</header>

<!-- Script Toggle -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    toggleBtn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
});
</script>
