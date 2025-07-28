<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - RafaRentCar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            line-height: 1.6;
            color: #334155;
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        /* Background decoration */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 80%, rgba(59, 130, 246, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(139, 92, 246, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(236, 72, 153, 0.05) 0%, transparent 50%);
            z-index: -1;
            animation: backgroundFloat 20s ease-in-out infinite;
        }

        @keyframes backgroundFloat {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
            position: relative;
            z-index: 1;
        }

        /* Header Section */
        .header {
            text-align: center;
            margin-bottom: 60px;
            opacity: 0;
            transform: translateY(30px);
            animation: slideUp 0.8s ease-out 0.2s forwards;
        }

        @keyframes slideUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .badge {
            display: inline-block;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(139, 92, 246, 0.1));
            color: #3b82f6;
            padding: 10px 24px;
            border-radius: 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin-bottom: 20px;
            border: 1px solid rgba(59, 130, 246, 0.2);
            backdrop-filter: blur(10px);
            position: relative;
            overflow: hidden;
        }

        .badge::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s;
        }

        .badge:hover::before {
            left: 100%;
        }

        .badge i {
            margin-right: 8px;
        }

        .title {
            font-size: 2.8rem;
            font-weight: 800;
            background: linear-gradient(135deg, #1e293b, #3b82f6, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 16px;
            position: relative;
        }

        .subtitle {
            font-size: 1.2rem;
            color: #64748b;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.7;
        }

        /* Contact Info Cards */
        .contact-info {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
            margin-bottom: 60px;
        }

        .contact-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 32px;
            box-shadow: 
                0 4px 6px -1px rgba(0, 0, 0, 0.1),
                0 2px 4px -1px rgba(0, 0, 0, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            opacity: 0;
            transform: translateY(40px);
            animation: slideUp 0.8s ease-out forwards;
        }

        .contact-card:nth-child(1) { animation-delay: 0.3s; }
        .contact-card:nth-child(2) { animation-delay: 0.4s; }
        .contact-card:nth-child(3) { animation-delay: 0.5s; }

        .contact-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6, #ec4899);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }

        .contact-card:hover::before {
            transform: scaleX(1);
        }

        .contact-card:hover {
            transform: translateY(-8px);
            box-shadow: 
                0 20px 25px -5px rgba(0, 0, 0, 0.1),
                0 10px 10px -5px rgba(0, 0, 0, 0.04);
            border-color: rgba(59, 130, 246, 0.3);
        }

        .contact-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.05), rgba(139, 92, 246, 0.05));
            opacity: 0;
            transition: opacity 0.3s ease;
            border-radius: 20px;
        }

        .contact-card:hover::after {
            opacity: 1;
        }

        .card-header {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
        }

        .card-icon {
            width: 52px;
            height: 52px;
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            flex-shrink: 0;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .card-icon::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(255,255,255,0.2), transparent);
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }

        .contact-card:hover .card-icon::before {
            transform: translateX(100%);
        }

        .contact-card:hover .card-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .card-icon i {
            font-size: 20px;
            z-index: 1;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 4px;
        }

        .card-subtitle {
            font-size: 0.9rem;
            color: #64748b;
            font-weight: 500;
        }

        .card-content {
            color: #1e293b;
            font-weight: 500;
            position: relative;
            z-index: 2;
            line-height: 1.6;
        }

        .contact-link {
            color: #3b82f6;
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
            font-weight: 600;
        }

        .contact-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6);
            transition: width 0.3s ease;
        }

        .contact-link:hover::after {
            width: 100%;
        }

        .contact-link:hover {
            color: #2563eb;
            transform: translateY(-1px);
        }

        /* Map Section */
        .map-section {
            margin-bottom: 60px;
            opacity: 0;
            transform: translateY(40px);
            animation: slideUp 0.8s ease-out 0.6s forwards;
        }

        .map-container {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 
                0 4px 6px -1px rgba(0, 0, 0, 0.1),
                0 2px 4px -1px rgba(0, 0, 0, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            min-height: 450px;
            transition: all 0.4s ease;
        }

        .map-container:hover {
            transform: translateY(-4px);
            box-shadow: 
                0 20px 25px -5px rgba(0, 0, 0, 0.1),
                0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .map-header {
            padding: 24px 28px;
            background: linear-gradient(135deg, #f8fafc, #f1f5f9);
            border-bottom: 1px solid rgba(226, 232, 240, 0.5);
            position: relative;
        }

        .map-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6, #ec4899, #3b82f6);
            background-size: 400% 400%;
            animation: gradientFlow 3s ease-in-out infinite;
        }

        @keyframes gradientFlow {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .map-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 4px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .map-title i {
            color: #3b82f6;
        }

        .map-subtitle {
            font-size: 0.95rem;
            color: #64748b;
            font-weight: 500;
        }

        .map-iframe {
            width: 100%;
            height: 380px;
            border: none;
            filter: grayscale(0.3) contrast(1.1);
            transition: all 0.4s ease;
        }

        .map-container:hover .map-iframe {
            filter: grayscale(0) contrast(1.2);
        }

        .map-loading {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #64748b;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .loading-spinner {
            width: 20px;
            height: 20px;
            border: 2px solid #e2e8f0;
            border-top: 2px solid #3b82f6;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* CTA Section */
        .cta-section {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 48px;
            text-align: center;
            box-shadow: 
                0 4px 6px -1px rgba(0, 0, 0, 0.1),
                0 2px 4px -1px rgba(0, 0, 0, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
            opacity: 0;
            transform: translateY(40px);
            animation: slideUp 0.8s ease-out 0.7s forwards;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, 
                rgba(59, 130, 246, 0.05), 
                rgba(139, 92, 246, 0.05), 
                rgba(236, 72, 153, 0.05),
                rgba(59, 130, 246, 0.05)
            );
            animation: rotateGradient 20s linear infinite;
        }

        @keyframes rotateGradient {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .cta-content {
            position: relative;
            z-index: 1;
        }

        .cta-title {
            font-size: 2rem;
            font-weight: 800;
            background: linear-gradient(135deg, #1e293b, #3b82f6, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 16px;
        }

        .cta-text {
            color: #64748b;
            margin-bottom: 32px;
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .cta-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cta-btn {
            padding: 16px 32px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 15px;
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: inline-flex;
            align-items: center;
            gap: 10px;
            position: relative;
            overflow: hidden;
            min-width: 180px;
            justify-content: center;
        }

        .cta-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.2), transparent);
            transform: translateX(-100%);
            transition: transform 0.5s ease;
        }

        .cta-btn:hover::before {
            transform: translateX(100%);
        }

        .cta-btn.primary {
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
            color: white;
            box-shadow: 0 4px 14px rgba(59, 130, 246, 0.3);
        }

        .cta-btn.primary:hover {
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
        }

        .cta-btn.secondary {
            background: transparent;
            color: #3b82f6;
            border: 2px solid #3b82f6;
        }

        .cta-btn.secondary:hover {
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
            color: white;
            border-color: transparent;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.3);
        }

        /* Additional Features */
        .contact-hours {
            background: linear-gradient(135deg, rgba(34, 197, 94, 0.1), rgba(59, 130, 246, 0.1));
            border: 1px solid rgba(34, 197, 94, 0.2);
            border-radius: 12px;
            padding: 16px;
            margin-top: 16px;
            font-size: 0.9rem;
        }

        .contact-hours i {
            color: #22c55e;
            margin-right: 8px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                padding: 40px 16px;
            }

            .title {
                font-size: 2.2rem;
            }

            .contact-info {
                grid-template-columns: 1fr;
                gap: 20px;
                margin-bottom: 40px;
            }

            .contact-card {
                padding: 24px;
            }

            .map-iframe {
                height: 300px;
            }

            .cta-section {
                padding: 32px 20px;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .cta-btn {
                width: 100%;
                max-width: 280px;
            }
        }

        @media (max-width: 480px) {
            .card-header {
                flex-direction: column;
                text-align: center;
                gap: 12px;
            }

            .map-iframe {
                height: 250px;
            }

            .title {
                font-size: 1.8rem;
            }

            .cta-title {
                font-size: 1.6rem;
            }
        }

        /* Tablet responsive */
        @media (max-width: 1024px) and (min-width: 769px) {
            .contact-info {
                gap: 24px;
            }
            
            .contact-card {
                padding: 28px;
            }
        }

        /* Accessibility */
        .contact-card:focus-within {
            outline: 3px solid rgba(59, 130, 246, 0.5);
            outline-offset: 2px;
        }

        .contact-link:focus {
            outline: 2px solid #3b82f6;
            outline-offset: 2px;
            border-radius: 4px;
        }

        .cta-btn:focus {
            outline: 3px solid rgba(59, 130, 246, 0.5);
            outline-offset: 2px;
        }

        /* Loading states */
        .content-loading {
            opacity: 0.6;
            pointer-events: none;
        }

        /* Success animation */
        @keyframes success {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .success-feedback {
            animation: success 0.3s ease;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div class="badge">
                <i class="fas fa-phone"></i>
                Hubungi Kami
            </div>
            <h1 class="title">Kontak RafaRentCar</h1>
            <p class="subtitle">Siap melayani kebutuhan rental mobil Anda dengan pelayanan terbaik. Hubungi kami kapan saja untuk informasi lebih lanjut dan konsultasi gratis.</p>
        </div>

        <!-- Contact Info Cards -->
        <div class="contact-info">
            <!-- Alamat -->
            <div class="contact-card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <div class="card-title">Alamat Kantor</div>
                        <div class="card-subtitle">Lokasi utama kami</div>
                    </div>
                </div>
                <div class="card-content">
                    Jl. Zainal Abidin Pagar Alam No. 123<br>
                    Kedaton, Bandar Lampung<br>
                    Lampung 35142, Indonesia
                </div>
                <div class="contact-hours">
                    <i class="fas fa-clock"></i>
                    <strong>Jam Operasional:</strong> Senin - Minggu, 08:00 - 22:00 WIB
                </div>
            </div>

            <!-- Email -->
            <div class="contact-card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <div class="card-title">Email</div>
                        <div class="card-subtitle">Kirim pesan ke kami</div>
                    </div>
                </div>
                <div class="card-content">
                    <a href="mailto:info@rafarentcar.com" class="contact-link">info@rafarentcar.com</a><br>
                    <a href="mailto:booking@rafarentcar.com" class="contact-link">booking@rafarentcar.com</a>
                </div>
                <div class="contact-hours">
                    <i class="fas fa-reply"></i>
                    <strong>Respon Email:</strong> Maksimal 2 jam pada jam kerja
                </div>
            </div>

            <!-- Telepon -->
            <div class="contact-card">
                <div class="card-header">
                    <div class="card-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div>
                        <div class="card-title">Telepon</div>
                        <div class="card-subtitle">Hubungi langsung</div>
                    </div>
                </div>
                <div class="card-content">
                    <a href="tel:+62721555123" class="contact-link">+62 721 555 123</a><br>
                    <a href="tel:+628123456789" class="contact-link">+62 812 3456 789</a><br>
                </div>
                <div class="contact-hours">
                    <i class="fas fa-headset"></i>
                    <strong>Customer Service:</strong> 24/7 untuk emergency
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="map-section">
            <div class="map-container">
                <div class="map-header">
                    <div class="map-title">
                        <i class="fas fa-map-marked-alt"></i>
                        Lokasi Kami
                    </div>
                    <div class="map-subtitle">Temukan kami di peta - Mudah diakses dari berbagai lokasi di Bandar Lampung</div>
                </div>
                <div class="map-loading">
                    <div class="loading-spinner"></div>
                    Loading map...
                </div>
                <iframe 
                    class="map-iframe"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.068076073469!2d105.26194797476734!3d-5.395563294613889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40c5b8b8b8b8b8%3A0x1234567890abcdef!2sJl.%20Zainal%20Abidin%20Pagar%20Alam%2C%20Kedaton%2C%20Bandar%20Lampung%2C%20Lampung!5e0!3m2!1sen!2sid!4v1234567890123"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="cta-section">
            <div class="cta-content">
                <h2 class="cta-title">Siap Memulai Perjalanan?</h2>
                <p class="cta-text">Hubungi kami sekarang untuk reservasi atau konsultasi tentang kebutuhan rental mobil Anda. Tim profesional kami siap memberikan solusi terbaik untuk perjalanan Anda.</p>
                <div class="cta-buttons">
                    <a href="tel:+62721555123" class="cta-btn primary">
                        <i class="fas fa-phone"></i>
                        Hubungi Sekarang
                    </a>
                    <a href="mailto:info@rafarentcar.com" class="cta-btn secondary">
                        <i class="fas fa-envelope"></i>
                        Kirim Email
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Enhanced loading effect for map
            const mapIframe = document.querySelector('.map-iframe');
            const mapLoading = document.querySelector('.map-loading');
            
            mapIframe.addEventListener('load', function() {
                mapLoading.style.opacity = '0';
                setTimeout(() => {
                    mapLoading.style.display = 'none';
                }, 300);
            });

            // Enhanced click tracking for contact links
            document.querySelectorAll('.contact-link').forEach(link => {
                link.addEventListener('click', function(e) {
                    const type = this.href.includes('tel:') ? 'phone' : 'email';
                    console.log(`Contact clicked: ${type} - ${this.textContent}`);
                    
                    // Add success feedback
                    this.closest('.contact-card').classList.add('success-feedback');
                    setTimeout(() => {
                        this.closest('.contact-card').classList.remove('success-feedback');
                    }, 300);
                });
            });

            // Enhanced hover effect for cards
            document.querySelectorAll('.contact-card').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.borderColor = 'rgba(59, 130, 246, 0.3)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.borderColor = 'rgba(255, 255, 255, 0.2)';
                });
            });

            // Enhanced CTA button tracking
            document.querySelectorAll('.cta-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const action = this.textContent.trim();
                    console.log(`CTA clicked: ${action}`);
                    
                    // Add loading state
                    this.classList.add('content-loading');
                    setTimeout(() => {
                        this.classList.remove('content-loading');
                    }, 1000);
                });
            });

            // Intersection Observer for scroll animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Add smooth scroll behavior
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            // Add keyboard navigation support
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Tab') {
                    document.body.classList.add('keyboard-navigation');
                }
            });

            document.addEventListener('click', function() {
                document.body.classList.remove('keyboard-navigation');
            });
        });
    </script>
</body>
</html>