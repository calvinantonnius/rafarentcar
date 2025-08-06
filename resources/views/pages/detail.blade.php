@extends('layouts.app')

@section('title', 'Detail Mobil - RafaRentCar')

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<style>
    * {
        font-family: 'Inter', sans-serif;
    }
    
    body {
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        min-height: 100vh;
    }
    
    /* Background Pattern */
    .bg-pattern {
        background-image: 
            radial-gradient(circle at 25% 25%, rgba(59, 130, 246, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 75% 75%, rgba(139, 92, 246, 0.1) 0%, transparent 50%);
        background-size: 400px 400px;
    }
    
    /* Container Enhancement */
    .main-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2.5rem 1rem;
        position: relative;
    }
    
    /* Car Detail Card */
    .car-detail-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 
            0 20px 25px -5px rgba(0, 0, 0, 0.1),
            0 10px 10px -5px rgba(0, 0, 0, 0.04);
        border-radius: 1.5rem;
        overflow: hidden;
        position: relative;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .car-detail-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #3b82f6, #8b5cf6, #ec4899, #3b82f6);
        background-size: 400% 400%;
        animation: gradientFlow 3s ease-in-out infinite;
    }
    
    @keyframes gradientFlow {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }
    
    /* Car Image Enhancement */
    .car-image-container {
        position: relative;
        overflow: hidden;
        border-radius: 1rem;
        group: hover;
    }
    
    .car-image {
        width: 100%;
        height: auto;
        border-radius: 1rem;
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        filter: brightness(1.05) contrast(1.1);
    }
    
    .car-image:hover {
        transform: scale(1.05);
        filter: brightness(1.1) contrast(1.15);
    }
    
    .car-image-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(45deg, rgba(59, 130, 246, 0.1), rgba(139, 92, 246, 0.1));
        opacity: 0;
        transition: opacity 0.3s ease;
        border-radius: 1rem;
    }
    
    .car-image-container:hover .car-image-overlay {
        opacity: 1;
    }
    
    /* Car Info Styling */
    .car-title {
        font-size: 2.25rem;
        font-weight: 800;
        background: linear-gradient(135deg, #1e293b, #3b82f6, #8b5cf6);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 1rem;
        line-height: 1.2;
    }
    
    .car-capacity {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #6b7280;
        margin-bottom: 1rem;
        font-weight: 500;
    }
    
    .car-capacity i {
        color: #3b82f6;
        font-size: 1.1rem;
    }
    
    .car-description {
        color: #4b5563;
        line-height: 1.7;
        margin-bottom: 1.5rem;
        font-size: 1.1rem;
    }
    
    .car-price {
        font-size: 1.75rem;
        font-weight: 800;
        color: #3b82f6;
        margin-bottom: 1rem;
    }
    
    .car-price .unit {
        font-size: 1rem;
        color: #6b7280;
        font-weight: 500;
    }
    
    /* Form Card */
    .form-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 
            0 20px 25px -5px rgba(0, 0, 0, 0.1),
            0 10px 10px -5px rgba(0, 0, 0, 0.04);
        border-radius: 1.5rem;
        padding: 2rem;
        position: relative;
        transition: all 0.4s ease;
    }
    
    .form-title {
        font-size: 1.75rem;
        font-weight: 800;
        color: #1e293b;
        margin-bottom: 2rem;
        text-align: center;
        position: relative;
    }
    
    .form-title::after {
        content: '';
        position: absolute;
        bottom: -0.5rem;
        left: 50%;
        transform: translateX(-50%);
        width: 4rem;
        height: 3px;
        background: linear-gradient(90deg, #3b82f6, #8b5cf6);
        border-radius: 2px;
    }
    
    /* Form Input Styling */
    .form-group {
        margin-bottom: 1.5rem;
    }
    
    .form-label {
        display: block;
        color: #374151;
        font-weight: 600;
        margin-bottom: 0.5rem;
        font-size: 0.95rem;
    }
    
    .form-input {
        width: 100%;
        border: 2px solid #e5e7eb;
        border-radius: 0.75rem;
        padding: 0.875rem 1rem;
        font-size: 1rem;
        transition: all 0.3s ease;
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
    }
    
    .form-input:focus {
        outline: none;
        border-color: #3b82f6;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        background: rgba(255, 255, 255, 0.95);
        transform: translateY(-1px);
    }
    
    .form-input::placeholder {
        color: #9ca3af;
    }
    
    /* File Input Styling */
    .file-input {
        position: relative;
        display: block;
        width: 100%;
    }
    
    .file-input input[type="file"] {
        position: absolute;
        opacity: 0;
        width: 100%;
        height: 100%;
        cursor: pointer;
    }
    
    .file-input-label {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.875rem 1rem;
        border: 2px dashed #d1d5db;
        border-radius: 0.75rem;
        background: rgba(249, 250, 251, 0.8);
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .file-input:hover .file-input-label {
        border-color: #3b82f6;
        background: rgba(59, 130, 246, 0.05);
    }
    
    .file-input-icon {
        color: #6b7280;
        font-size: 1.25rem;
    }
    
    .file-input-text {
        color: #6b7280;
        font-weight: 500;
    }
    
    /* Submit Button */
    .submit-btn {
        background: linear-gradient(135deg, #3b82f6, #8b5cf6);
        color: white;
        font-weight: 700;
        padding: 1rem 2.5rem;
        border-radius: 0.875rem;
        border: none;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 4px 14px rgba(59, 130, 246, 0.3);
        position: relative;
        overflow: hidden;
        font-size: 1.1rem;
    }
    
    .submit-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.5s;
    }
    
    .submit-btn:hover::before {
        left: 100%;
    }
    
    .submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
    }
    
    .submit-btn:active {
        transform: translateY(0);
    }
    
    /* Features Badge */
    .features-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(139, 92, 246, 0.1));
        border: 1px solid rgba(59, 130, 246, 0.2);
        color: #3b82f6;
        padding: 0.5rem 1rem;
        border-radius: 2rem;
        font-size: 0.875rem;
        font-weight: 600;
        margin: 0.25rem;
    }
    
    /* Loading Animation */
    .loading-animation {
        opacity: 0;
        transform: translateY(30px);
        animation: slideUp 0.8s ease-out forwards;
    }
    
    .car-detail-card { animation-delay: 0.2s; }
    .form-card { animation-delay: 0.4s; }
    
    @keyframes slideUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .main-container {
            padding: 1.5rem 1rem;
        }
        
        .car-title {
            font-size: 1.875rem;
        }
        
        .form-card {
            padding: 1.5rem;
        }
        
        .submit-btn {
            width: 100%;
            justify-content: center;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
    }
    
    /* Additional Enhancements */
    .info-badge {
        background: linear-gradient(135deg, #3b82f6, #1e40af);
        color: white;
        padding: 0.25rem 0.75rem;
        border-radius: 1rem;
        font-size: 0.75rem;
        font-weight: 600;
        display: inline-block;
        margin-bottom: 1rem;
    }
    
    .security-note {
        background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(5, 150, 105, 0.1));
        border: 1px solid rgba(16, 185, 129, 0.2);
        border-radius: 0.75rem;
        padding: 1rem;
        margin-top: 1.5rem;
    }
    
    .security-note-text {
        color: #065f46;
        font-size: 0.875rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .security-note-icon {
        color: #10b981;
        font-size: 1.1rem;
    }
</style>
@endpush

@section('content')
<div class="bg-pattern min-h-screen pt-10">
    <div class="main-container">
        
        <!-- Bagian Detail Mobil -->
        <div class="car-detail-card loading-animation mb-10 mt-12">
            <div class="p-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                    
                    <!-- Gambar Mobil -->
                    <div class="car-image-container">
                        <img src="https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjd8fGNhcnxlbnwwfHwwfHx8MA%3D%3D" 
                             alt="Jaguar XE" 
                             class="car-image">
                        <div class="car-image-overlay"></div>
                    </div>

                    <!-- Info Mobil -->
                    <div>
                        <div class="info-badge">
                            <i class="fas fa-star mr-1"></i>Promo Lebaran
                        </div>
                        
                        <h2 class="car-title">Paket Toyota Alphard + Sopir</h2>
                        
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="features-badge">
                                <i class="fas fa-car"></i>Automatic
                            </span>
                            <span class="features-badge">
                                <i class="fas fa-users"></i>7 Penumpang
                            </span>
                            <span class="features-badge">
                                <i class="fas fa-gas-pump"></i>Full Tank
                            </span>
                        </div>
                        
                        <p class="car-description">
                            Mobil MPV ini merupakan pilihan ideal untuk keluarga yang menginginkan kenyamanan dan kelegaan saat bepergian. Dengan kapasitas hingga 7 penumpang, AC yang dingin merata, serta bagasi luas yang mampu menampung banyak barang.</p>
                        
                        <div class="car-price">
                            Rp 1.800.000 <span class="unit">/hari</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bagian Form Penyewaan -->
        <div class="form-card loading-animation">
            <h3 class="form-title">
                <i class="fas fa-file-contract mr-3"></i>Form Penyewaan Mobil
            </h3>
            
            <form action="" method="POST" enctype="multipart/form-data" id="rentalForm">
                @csrf
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                    <!-- Kolom Kiri -->
                    <div class="space-y-6">
                        <div class="form-group">
                            <label class="form-label">
                                <i class="fas fa-user mr-2 text-blue-600"></i>Nama Peminjam
                            </label>
                            <input type="text" 
                                   name="nama" 
                                   class="form-input" 
                                   placeholder="Masukkan nama lengkap"
                                   value="{{ old('nama') }}"
                                   required>
                            @error('nama')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">
                                <i class="fas fa-phone mr-2 text-green-600"></i>No. Telepon
                            </label>
                            <input type="tel" 
                                   name="telp" 
                                   class="form-input" 
                                   placeholder="Contoh: 08123456789"
                                   value="{{ old('telp') }}"
                                   required>
                            @error('telp')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">
                                <i class="fas fa-id-card mr-2 text-purple-600"></i>No. NIK
                            </label>
                            <input type="text" 
                                   name="nik" 
                                   class="form-input" 
                                   placeholder="16 digit NIK"
                                   maxlength="16"
                                   value="{{ old('nik') }}"
                                   required>
                            @error('nik')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">
                                <i class="fas fa-upload mr-2 text-orange-600"></i>Upload KTP
                            </label>
                            <div class="file-input">
                                <input type="file" name="ktp" accept="image/*,.pdf" required>
                                <div class="file-input-label">
                                    <i class="fas fa-cloud-upload-alt file-input-icon"></i>
                                    <span class="file-input-text">Pilih file KTP (JPG, PNG, PDF)</span>
                                </div>
                            </div>
                            @error('ktp')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="space-y-6">
                        <div class="form-group">
                            <label class="form-label">
                                <i class="fas fa-upload mr-2 text-blue-600"></i>Upload SIM
                            </label>
                            <div class="file-input">
                                <input type="file" name="sim" accept="image/*,.pdf" required>
                                <div class="file-input-label">
                                    <i class="fas fa-cloud-upload-alt file-input-icon"></i>
                                    <span class="file-input-text">Pilih file SIM (JPG, PNG, PDF)</span>
                                </div>
                            </div>
                            @error('sim')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">
                                <i class="fas fa-upload mr-2 text-green-600"></i>Upload NPWP
                            </label>
                            <div class="file-input">
                                <input type="file" name="npwp" accept="image/*,.pdf">
                                <div class="file-input-label">
                                    <i class="fas fa-cloud-upload-alt file-input-icon"></i>
                                    <span class="file-input-text">Pilih file NPWP (Opsional)</span>
                                </div>
                            </div>
                            @error('npwp')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">
                                <i class="fas fa-handshake mr-2 text-purple-600"></i>Jaminan
                            </label>
                            <input type="text" 
                                   name="jaminan" 
                                   class="form-input" 
                                   placeholder="Contoh: BPKB Motor / Sertifikat Rumah"
                                   value="{{ old('jaminan') }}"
                                   required>
                            @error('jaminan')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">
                                <i class="fas fa-sticky-note mr-2 text-orange-600"></i>Catatan Tambahan
                            </label>
                            <textarea name="catatan" 
                                      class="form-input" 
                                      rows="3" 
                                      placeholder="Permintaan khusus atau catatan lainnya (opsional)">{{ old('catatan') }}</textarea>
                            @error('catatan')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Button Submit -->
                <div class="mt-8 text-center">
                    <button type="submit" class="submit-btn">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Kirim Permintaan Sewa
                    </button>
                </div>
                
                <div class="security-note">
                    <div class="security-note-text">
                        <i class="fas fa-info-circle security-note-icon"></i>
                        <span>Tim kami akan menghubungi Anda dalam 1x24 jam setelah form ini terkirim</span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // File input enhancement
    document.querySelectorAll('input[type="file"]').forEach(input => {
        input.addEventListener('change', function() {
            const label = this.nextElementSibling.querySelector('.file-input-text');
            if (this.files && this.files[0]) {
                label.textContent = this.files[0].name;
                this.nextElementSibling.style.borderColor = '#10b981';
                this.nextElementSibling.style.backgroundColor = 'rgba(16, 185, 129, 0.05)';
            }
        });
    });

    // Form validation and submission
    document.getElementById('rentalForm').addEventListener('submit', function(e) {
        // Simple validation
        const requiredFields = this.querySelectorAll('[required]');
        let isValid = true;
        
        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                isValid = false;
                field.style.borderColor = '#ef4444';
                if (isValid) field.focus();
                return;
            } else {
                field.style.borderColor = '#10b981';
            }
        });
        
        if (isValid) {
            // Show loading state
            const submitBtn = this.querySelector('.submit-btn');
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Mengirim...';
            submitBtn.disabled = true;
        }
    });

    // Phone number formatting
    document.querySelector('input[name="telp"]').addEventListener('input', function() {
        let value = this.value.replace(/\D/g, '');
        if (value.startsWith('0')) {
            value = value;
        } else if (value.startsWith('62')) {
            value = '0' + value.substring(2);
        }
        this.value = value;
    });

    // NIK validation
    document.querySelector('input[name="nik"]').addEventListener('input', function() {
        this.value = this.value.replace(/\D/g, '');
    });

    // Show success message if redirected with success
    @if(session('success'))
        alert('{{ session('success') }}');
    @endif
</script>
@endpush