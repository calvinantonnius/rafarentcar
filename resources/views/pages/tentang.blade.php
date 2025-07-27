@extends('layouts.app')

@section('title', 'Tentang Kami | RafaRentCar')
@section('description', 'RafaRentCar - Partner Perjalanan Terpercaya dengan pelayanan terbaik dan armada berkualitas.')

@section('content')
<section id="about" class="py-20 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
    <div class="absolute inset-0 about-bg-pattern opacity-5"></div>
    <div class="container mx-auto px-4 lg:px-8 relative z-10 space-y-24">

        <!-- ROW 1: About Text & Image -->
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Text -->
            <div class="space-y-6">
                <span class="inline-block bg-blue-100 text-blue-600 font-semibold text-sm uppercase tracking-wide px-4 py-2 rounded-full">Tentang Kami</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight">
                    RafaRentCar - Partner Perjalanan 
                    <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Terpercaya</span>
                </h2>
                <p class="text-gray-600 text-lg leading-relaxed">
                    Sejak tahun 2020, RafaRentCar telah menjadi pilihan utama untuk layanan rental mobil di Indonesia. Kami berkomitmen memberikan pengalaman berkendara yang aman, nyaman, dan terpercaya dengan armada kendaraan terawat dan pelayanan prima.
                </p>
            </div>

            <!-- Image -->
            <div class="relative group">
                <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&w=1000&q=80" alt="RafaRentCar Office" class="rounded-3xl shadow-2xl w-full group-hover:scale-105 transition-transform duration-500">
                <div class="absolute -bottom-8 -left-8 bg-gradient-to-r from-blue-600 to-purple-600 text-white p-6 rounded-2xl shadow-xl">
                    <div class="text-3xl font-bold">4+ Tahun</div>
                    <div class="text-blue-100 text-sm">Pengalaman Terpercaya</div>
                </div>
                <div class="absolute top-4 right-4 w-20 h-20 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                    <i class="fas fa-award text-white text-2xl"></i>
                </div>
                <div class="absolute -top-4 -right-4 w-24 h-24 bg-gradient-to-r from-blue-400 to-purple-400 rounded-full opacity-20 blur-xl"></div>
                <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full opacity-15 blur-2xl"></div>
            </div>
        </div>

        <!-- ROW 2: Stats & Features -->
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Statistik -->
            <div class="grid grid-cols-2 gap-6">
                <div class="text-center p-6 bg-white rounded-2xl shadow border border-gray-100">
                    <div class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-2">500+</div>
                    <div class="text-gray-600 text-sm font-medium">Pelanggan Puas</div>
                </div>
                <div class="text-center p-6 bg-white rounded-2xl shadow border border-gray-100">
                    <div class="text-3xl font-bold bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent mb-2">50+</div>
                    <div class="text-gray-600 text-sm font-medium">Armada Kendaraan</div>
                </div>
                <div class="text-center p-6 bg-white rounded-2xl shadow border border-gray-100">
                    <div class="text-3xl font-bold bg-gradient-to-r from-yellow-500 to-orange-500 bg-clip-text text-transparent mb-2">4.8</div>
                    <div class="text-gray-600 text-sm font-medium">Rating Pelayanan</div>
                </div>
                <div class="text-center p-6 bg-white rounded-2xl shadow border border-gray-100">
                    <div class="text-3xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent mb-2">24/7</div>
                    <div class="text-gray-600 text-sm font-medium">Customer Service</div>
                </div>
            </div>

            <!-- Fitur -->
            <div class="space-y-4">
                <h3 class="text-2xl font-bold text-gray-900">Mengapa Memilih RafaRentCar?</h3>
                <div class="flex items-start space-x-4 p-4 bg-white rounded-xl shadow">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-shield-alt text-white"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900">Kendaraan Terawat</h4>
                        <p class="text-gray-600 text-sm">Semua mobil dalam kondisi prima dan terawat dengan baik</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4 p-4 bg-white rounded-xl shadow">
                    <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-headset text-white"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900">Pelayanan 24/7</h4>
                        <p class="text-gray-600 text-sm">Customer service siap membantu kapan saja Anda membutuhkan</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4 p-4 bg-white rounded-xl shadow">
                    <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-dollar-sign text-white"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900">Harga Terjangkau</h4>
                        <p class="text-gray-600 text-sm">Tarif kompetitif dengan kualitas layanan terbaik</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ROW 3: Nilai-Nilai Kami -->
        <div class="pt-16 border-t border-gray-200">
            <div class="text-center mb-12">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Nilai-Nilai Kami</h3>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">Komitmen kami dalam memberikan pelayanan terbaik untuk setiap pelanggan</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-8 bg-white rounded-2xl shadow border border-gray-100">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-heart text-white text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-4">Kepuasan Pelanggan</h4>
                    <p class="text-gray-600">Kepuasan dan kenyamanan pelanggan adalah prioritas utama dalam setiap layanan yang kami berikan.</p>
                </div>
                <div class="text-center p-8 bg-white rounded-2xl shadow border border-gray-100">
                    <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-leaf text-white text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-4">Ramah Lingkungan</h4>
                    <p class="text-gray-600">Kami berkomitmen menggunakan kendaraan yang ramah lingkungan dan mendukung keberlanjutan.</p>
                </div>
                <div class="text-center p-8 bg-white rounded-2xl shadow border border-gray-100">
                    <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-star text-white text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-4">Kualitas Terbaik</h4>
                    <p class="text-gray-600">Standar kualitas tinggi dalam pemeliharaan kendaraan dan pelayanan yang profesional.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/about.js') }}"></script>
@endpush
