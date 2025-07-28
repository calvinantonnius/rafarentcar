<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - RafaRentCar</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            line-height: 1.6;
            color: #334155;
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        /* Header Section */
        .header {
            text-align: center;
            margin-bottom: 60px;
        }

        .badge {
            display: inline-block;
            background: rgba(59, 130, 246, 0.1);
            color: #3b82f6;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin-bottom: 16px;
        }

        .title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 12px;
        }

        .subtitle {
            font-size: 1.1rem;
            color: #64748b;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Contact Info Cards */
        .contact-info {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-bottom: 50px;
        }

        .contact-card {
            background: white;
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            border: 1px solid #e2e8f0;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .contact-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .contact-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6);
        }

        .card-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
        }

        .card-icon {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            flex-shrink: 0;
        }

        .card-icon svg {
            width: 24px;
            height: 24px;
        }

        .card-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 4px;
        }

        .card-subtitle {
            font-size: 0.9rem;
            color: #64748b;
        }

        .card-content {
            color: #1e293b;
            font-weight: 500;
        }

        .contact-link {
            color: #3b82f6;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-link:hover {
            color: #2563eb;
        }

        /* Map Section */
        .map-section {
            margin-bottom: 50px;
        }

        /* Map Container */
        .map-container {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            border: 1px solid #e2e8f0;
            position: relative;
            min-height: 450px;
        }

        .map-header {
            padding: 20px 24px;
            background: #f8fafc;
            border-bottom: 1px solid #e2e8f0;
        }

        .map-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 4px;
        }

        .map-subtitle {
            font-size: 0.9rem;
            color: #64748b;
        }

        .map-iframe {
            width: 100%;
            height: 350px;
            border: none;
            filter: grayscale(0.2) contrast(1.1);
            transition: filter 0.3s ease;
        }

        .map-container:hover .map-iframe {
            filter: grayscale(0) contrast(1.2);
        }

        /* CTA Section */
        .cta-section {
            background: white;
            border-radius: 16px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            border: 1px solid #e2e8f0;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, rgba(59, 130, 246, 0.05), rgba(139, 92, 246, 0.05));
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .cta-content {
            position: relative;
            z-index: 1;
        }

        .cta-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 12px;
        }

        .cta-text {
            color: #64748b;
            margin-bottom: 24px;
        }

        .cta-buttons {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cta-btn {
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .cta-btn.primary {
            background: #3b82f6;
            color: white;
        }

        .cta-btn.primary:hover {
            background: #2563eb;
            transform: translateY(-1px);
        }

        .cta-btn.secondary {
            background: transparent;
            color: #3b82f6;
            border: 1px solid #3b82f6;
        }

        .cta-btn.secondary:hover {
            background: #3b82f6;
            color: white;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                padding: 40px 16px;
            }

            .title {
                font-size: 2rem;
            }

            .contact-info {
                grid-template-columns: 1fr;
                gap: 16px;
                margin-bottom: 32px;
            }

            .contact-card {
                padding: 20px;
            }

            .map-iframe {
                height: 280px;
            }

            .cta-section {
                padding: 24px;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .cta-btn {
                width: 100%;
                max-width: 250px;
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .card-header {
                flex-direction: column;
                text-align: center;
            }

            .card-icon {
                align-self: center;
            }

            .map-iframe {
                height: 250px;
            }
        }

        /* Tablet responsive */
        @media (max-width: 1024px) and (min-width: 769px) {
            .contact-info {
                gap: 20px;
            }
            
            .contact-card {
                padding: 20px;
            }
            
            .card-title {
                font-size: 1rem;
            }
            
            .card-content {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 900px) and (min-width: 769px) {
            .contact-info {
                grid-template-columns: repeat(3, 1fr);
                gap: 16px;
            }
            
            .contact-card {
                padding: 18px;
            }
            
            .card-icon {
                width: 40px;
                height: 40px;
            }
            
            .card-icon svg {
                width: 20px;
                height: 20px;
            }
        }

        /* Loading animation for map */
        .map-loading {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #64748b;
            font-size: 14px;
        }

        /* Accessibility */
        .contact-card:focus-within {
            outline: 2px solid #3b82f6;
            outline-offset: 2px;
        }

        .contact-link:focus {
            outline: 2px solid #3b82f6;
            outline-offset: 2px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div class="badge">Hubungi Kami</div>
            <h1 class="title">Kontak RafaRentCar</h1>
            <p class="subtitle">Siap melayani kebutuhan rental mobil Anda dengan pelayanan terbaik. Hubungi kami kapan saja untuk informasi lebih lanjut.</p>
        </div>

        <!-- Contact Info Cards -->
        <div class="contact-info">
            <!-- Alamat -->
            <div class="contact-card">
                <div class="card-header">
                    <div class="card-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
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
            </div>

            <!-- Email -->
            <div class="contact-card">
                <div class="card-header">
                    <div class="card-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
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
            </div>

            <!-- Telepon -->
            <div class="contact-card">
                <div class="card-header">
                    <div class="card-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="card-title">Telepon</div>
                        <div class="card-subtitle">Hubungi langsung</div>
                    </div>
                </div>
                <div class="card-content">
                    <a href="tel:+62721555123" class="contact-link">+62 721 555 123</a><br>
                    <a href="tel:+628123456789" class="contact-link">+62 812 3456 789</a><br>
                    <small style="color: #64748b;">Buka 24 jam untuk emergency</small>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="map-section">
            <div class="map-container">
                <div class="map-header">
                    <div class="map-title">Lokasi Kami</div>
                    <div class="map-subtitle">Temukan kami di peta</div>
                </div>
                <div class="map-loading">Loading map...</div>
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
                <p class="cta-text">Hubungi kami sekarang untuk reservasi atau konsultasi tentang kebutuhan rental mobil Anda.</p>
                <div class="cta-buttons">
                    <a href="tel:+62721555123" class="cta-btn primary">
                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        Hubungi Sekarang
                    </a>
                    <a href="mailto:info@rafarentcar.com" class="cta-btn secondary">
                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Kirim Email
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Simple interactions
        document.addEventListener('DOMContentLoaded', function() {
            // Add loading effect for map
            const mapIframe = document.querySelector('.map-iframe');
            const mapLoading = document.querySelector('.map-loading');
            
            mapIframe.addEventListener('load', function() {
                mapLoading.style.display = 'none';
            });

            // Add click tracking for contact links
            document.querySelectorAll('.contact-link').forEach(link => {
                link.addEventListener('click', function() {
                    const type = this.href.includes('tel:') ? 'phone' : 'email';
                    console.log(`Contact clicked: ${type} - ${this.textContent}`);
                });
            });

            // Add hover effect for cards
            document.querySelectorAll('.contact-card').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.borderColor = 'rgba(59, 130, 246, 0.2)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.borderColor = '#e2e8f0';
                });
            });

            // CTA button tracking
            document.querySelectorAll('.cta-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const action = this.textContent.trim();
                    console.log(`CTA clicked: ${action}`);
                });
            });
        });
    </script>
</body>
</html>