<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Car Rental - RafaRentCar</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
            min-height: 100vh;
            color: #1e293b;
            padding: 20px 0;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        /* Header Section */
        .header {
            text-align: center;
            margin-bottom: 50px;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, #3b82f6, #6366f1);
            color: white;
            padding: 10px 20px;
            border-radius: 50px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin-bottom: 20px;
            box-shadow: 0 4px 20px rgba(59, 130, 246, 0.3);
        }

        .badge::before {
            content: '🔥';
            font-size: 14px;
        }

        .title {
            font-size: 3rem;
            font-weight: 800;
            background: linear-gradient(135deg, #1e293b, #475569);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 12px;
            letter-spacing: -1px;
        }

        .subtitle {
            font-size: 1.1rem;
            color: #64748b;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Cards Grid */
        .cars-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 40px;
        }

        .car-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(226, 232, 240, 0.8);
            position: relative;
        }

        .car-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6, #ec4899);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .car-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            border-color: rgba(59, 130, 246, 0.2);
        }

        .car-card:hover::before {
            opacity: 1;
        }

        /* Image Section */
        .image-section {
            padding: 24px 24px 16px;
            text-align: center;
            background: linear-gradient(135deg, #f8fafc, #f1f5f9);
        }

        .car-image {
            width: 100%;
            height: 160px;
            object-fit: contain;
            transition: transform 0.3s ease;
            filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.1));
        }

        .car-card:hover .car-image {
            transform: scale(1.05);
        }

        /* Card Content */
        .card-content {
            padding: 24px;
            padding-top: 8px;
        }

        .car-name {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 12px;
            line-height: 1.2;
        }

        /* Rating */
        .rating {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 16px;
        }

        .stars {
            display: flex;
            align-items: center;
            gap: 4px;
            background: linear-gradient(135deg, #fbbf24, #f59e0b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .star {
            font-size: 16px;
        }

        .rating-text {
            font-size: 14px;
            font-weight: 700;
            color: #1e293b;
        }

        .reviews {
            font-size: 13px;
            color: #64748b;
            margin-left: 4px;
        }

        /* Specs */
        .specs {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
            padding: 16px;
            background: #f8fafc;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
        }

        .spec {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 14px;
            color: #475569;
            font-weight: 500;
        }

        .spec-icon {
            width: 16px;
            height: 16px;
            color: #6366f1;
        }

        /* Price Section */
        .price-section {
            margin-bottom: 20px;
            text-align: center;
            padding: 16px;
            background: linear-gradient(135deg, #f0f9ff, #e0f2fe);
            border-radius: 12px;
            border: 1px solid #bae6fd;
        }

        .price-label {
            font-size: 12px;
            color: #0369a1;
            margin-bottom: 4px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .price {
            font-size: 1.75rem;
            font-weight: 800;
            color: #1e293b;
            line-height: 1;
        }

        .price-period {
            font-size: 14px;
            color: #64748b;
            font-weight: 500;
        }

        /* Button */
        .rent-btn {
            width: 100%;
            background: linear-gradient(135deg, #3b82f6, #6366f1);
            color: white;
            border: none;
            padding: 14px 24px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            box-shadow: 0 4px 14px 0 rgba(59, 130, 246, 0.3);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .rent-btn:hover {
            background: linear-gradient(135deg, #2563eb, #4f46e5);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px 0 rgba(59, 130, 246, 0.4);
        }

        .btn-arrow {
            width: 16px;
            height: 16px;
            transition: transform 0.3s ease;
        }

        .rent-btn:hover .btn-arrow {
            transform: translateX(4px);
        }

        /* Show More Section */
        .show-more {
            text-align: center;
            margin-top: 50px;
        }

        .show-more-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: white;
            color: #475569;
            border: 2px solid #e2e8f0;
            padding: 12px 28px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .show-more-btn:hover {
            border-color: #3b82f6;
            color: #3b82f6;
            background: #f0f9ff;
            transform: translateY(-2px);
        }

        /* Responsive */
        @media (max-width: 1400px) {
            .container {
                padding: 40px 16px;
            }
        }

        @media (max-width: 1200px) {
            .cars-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 18px;
            }
        }

        @media (max-width: 900px) {
            .cars-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 16px;
            }
            
            .title {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 600px) {
            .container {
                padding: 20px 16px;
            }

            .title {
                font-size: 2rem;
            }

            .cars-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }

            .car-card {
                border-radius: 16px;
            }

            .card-content {
                padding: 20px;
            }

            .specs {
                flex-direction: column;
                gap: 12px;
            }
        }

        /* Loading States */
        .car-card.loading {
            opacity: 0.7;
            pointer-events: none;
        }

        .car-card.loading .car-image {
            filter: blur(2px);
        }

        /* Success State */
        .rent-btn.success {
            background: linear-gradient(135deg, #10b981, #059669) !important;
        }

        /* Accessibility */
        @media (prefers-reduced-motion: reduce) {
            .car-card,
            .car-image,
            .rent-btn,
            .btn-arrow {
                transition: none;
            }
            
            .car-card:hover {
                transform: none;
            }
        }

        /* Dark mode support */
        @media (prefers-color-scheme: dark) {
            body {
                background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
                color: #f1f5f9;
            }
            
            .car-card {
                background: #334155;
                border-color: #475569;
            }
            
            .specs {
                background: #1e293b;
                border-color: #475569;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div class="badge">Popular Rental Deals</div>
            <h1 class="title">Premium Car Collection</h1>
            <p class="subtitle">Discover our handpicked selection of luxury vehicles for your perfect journey</p>
        </div>

        <!-- Cars Grid -->
        <div class="cars-grid">
            <!-- Car 1: Jaguar XE L P250 -->
            <div class="car-card">
                <div class="image-section">
                    <img src="https://images.unsplash.com/photo-1556075798-4825dfaaf498?w=400&h=200&fit=crop&crop=center" alt="Jaguar XE L P250" class="car-image">
                </div>
                <div class="card-content">
                    <h3 class="car-name">Jaguar XE L P250</h3>

                    <div class="specs">
                        <div class="spec">
                            <svg class="spec-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            4 Passengers
                        </div>
                        <div class="spec">
                            <svg class="spec-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                            Auto
                        </div>
                    </div>

                    <div class="price-section">
                        <div class="price-label">Price</div>
                        <div class="price">$1,800 <span class="price-period">/day</span></div>
                    </div>

                    <button class="rent-btn">
                        Rent Now
                        <svg class="btn-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Car 2: Audi R8 -->
            <div class="car-card">
                <div class="image-section">
                    <img src="https://images.unsplash.com/photo-1544636331-e26879cd4d9b?w=400&h=200&fit=crop&crop=center" alt="Audi R8" class="car-image">
                </div>
                <div class="card-content">
                    <h3 class="car-name">Audi R8</h3>

                    <div class="specs">
                        <div class="spec">
                            <svg class="spec-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            2 Passengers
                        </div>
                        <div class="spec">
                            <svg class="spec-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                            Auto
                        </div>
                    </div>

                    <div class="price-section">
                        <div class="price-label">Price</div>
                        <div class="price">$2,100 <span class="price-period">/day</span></div>
                    </div>

                    <button class="rent-btn">
                        Rent Now
                        <svg class="btn-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Car 3: BMW M3 -->
            <div class="car-card">
                <div class="image-section">
                    <img src="https://images.unsplash.com/photo-1555215695-3004980ad54e?w=400&h=200&fit=crop&crop=center" alt="BMW M3" class="car-image">
                </div>
                <div class="card-content">
                    <h3 class="car-name">BMW M3</h3>

                    <div class="specs">
                        <div class="spec">
                            <svg class="spec-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            4 Passengers
                        </div>
                        <div class="spec">
                            <svg class="spec-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                            Auto
                        </div>
                    </div>

                    <div class="price-section">
                        <div class="price-label">Price</div>
                        <div class="price">$1,600 <span class="price-period">/day</span></div>
                    </div>

                    <button class="rent-btn">
                        Rent Now
                        <svg class="btn-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Car 4: Lamborghini Huracan -->
            <div class="car-card">
                <div class="image-section">
                    <img src="https://images.unsplash.com/photo-1555215695-3004980ad54e?w=400&h=200&fit=crop&crop=center" alt="Lamborghini Huracan" class="car-image">
                </div>
                <div class="card-content">
                    <h3 class="car-name">Lamborghini Huracan</h3>
                    
                    <div class="specs">
                        <div class="spec">
                            <svg class="spec-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            2 Passengers
                        </div>
                        <div class="spec">
                            <svg class="spec-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                            Auto
                        </div>
                    </div>

                    <div class="price-section">
                        <div class="price-label">Price</div>
                        <div class="price">$2,300 <span class="price-period">/day</span></div>
                    </div>

                    <button class="rent-btn">
                        Rent Now
                        <svg class="btn-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Show More -->
        <div class="show-more">
            <a href="#" class="show-more-btn">
                Show all vehicles
                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>

    <script>
        // Enhanced interactions
        document.addEventListener('DOMContentLoaded', function() {
            // Rent button interactions
            document.querySelectorAll('.rent-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const carName = this.closest('.car-card').querySelector('.car-name').textContent;
                    
                    // Add loading state
                    this.classList.add('success');
                    this.innerHTML = `
                        <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Booked Successfully!
                    `;
                    
                    // Reset after delay
                    setTimeout(() => {
                        this.classList.remove('success');
                        this.innerHTML = `
                            Rent Now
                            <svg class="btn-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        `;
                    }, 3000);
                    
                    console.log(`Car booked: ${carName}`);
                });
            });

            // Image loading
            document.querySelectorAll('.car-image').forEach(img => {
                img.addEventListener('load', function() {
                    this.closest('.car-card').classList.remove('loading');
                });
                
                img.addEventListener('error', function() {
                    this.style.opacity = '0.5';
                    this.alt = 'Image not available';
                });
            });

            // Show more button
            document.querySelector('.show-more-btn').addEventListener('click', function(e) {
                e.preventDefault();
                console.log('Show more vehicles clicked');
                // Add your navigation logic here
            });
        });

        // Performance optimization
        const observerOptions = {
            root: null,
            rootMargin: '50px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe cards for loading animation
        document.querySelectorAll('.car-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });
    </script>
</body>
</html>