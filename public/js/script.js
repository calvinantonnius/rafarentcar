// ===== CUSTOM JAVASCRIPT FOR RAFARENTCAR =====

document.addEventListener('DOMContentLoaded', function() {
    
    // ===== MOBILE MENU TOGGLE =====
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            
            // Toggle icon
            const icon = this.querySelector('i');
            if (mobileMenu.classList.contains('hidden')) {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            } else {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            }
        });
        
        // Close mobile menu when clicking on links
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
                const icon = mobileMenuBtn.querySelector('i');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            });
        });
    }
    
    // ===== SLIDER FUNCTIONALITY =====
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.slider-dot');
    const prevBtn = document.querySelector('.slider-prev');
    const nextBtn = document.querySelector('.slider-next');
    const totalSlides = slides.length;
    
    // Show specific slide
    function showSlide(n) {
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));
        
        if (n >= totalSlides) currentSlide = 0;
        if (n < 0) currentSlide = totalSlides - 1;
        
        slides[currentSlide].classList.add('active');
        dots[currentSlide].classList.add('active');
    }
    
    // Next slide
    function nextSlide() {
        currentSlide++;
        showSlide(currentSlide);
    }
    
    // Previous slide
    function prevSlide() {
        currentSlide--;
        showSlide(currentSlide);
    }
    
    // Event listeners for slider controls
    if (nextBtn) {
        nextBtn.addEventListener('click', nextSlide);
    }
    
    if (prevBtn) {
        prevBtn.addEventListener('click', prevSlide);
    }
    
    // Dot navigation
    dots.forEach((dot, index) => {
        dot.addEventListener('click', function() {
            currentSlide = index;
            showSlide(currentSlide);
        });
    });
    
    // Auto-play slider
    let slideInterval = setInterval(nextSlide, 5000);
    
    // Pause auto-play on hover
    const sliderContainer = document.querySelector('.slider-container');
    if (sliderContainer) {
        sliderContainer.addEventListener('mouseenter', function() {
            clearInterval(slideInterval);
        });
        
        sliderContainer.addEventListener('mouseleave', function() {
            slideInterval = setInterval(nextSlide, 5000);
        });
    }
    
    // ===== SMOOTH SCROLLING FOR NAVIGATION LINKS =====
    const navLinks = document.querySelectorAll('a[href^="#"]');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                const headerHeight = document.querySelector('header').offsetHeight;
                const targetPosition = targetSection.offsetTop - headerHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // ===== ACTIVE NAVIGATION HIGHLIGHTING =====
    function updateActiveNav() {
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link, .nav-link-mobile');
        
        let currentSection = '';
        const scrollPosition = window.scrollY + 100;
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                currentSection = section.getAttribute('id');
            }
        });
        
        navLinks.forEach(link => {
            link.classList.remove('text-blue-600', 'border-b-2', 'border-blue-600', 'font-medium');
            link.classList.add('text-gray-700');
            
            if (link.getAttribute('href') === '#' + currentSection) {
                link.classList.remove('text-gray-700');
                link.classList.add('text-blue-600', 'font-medium');
                
                if (!link.classList.contains('nav-link-mobile')) {
                    link.classList.add('border-b-2', 'border-blue-600');
                }
            }
        });
    }
    
    // ===== SCROLL ANIMATIONS =====
    function animateOnScroll() {
        const elements = document.querySelectorAll('.animate-on-scroll');
        
        elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementVisible = 150;
            
            if (elementTop < window.innerHeight - elementVisible) {
                element.classList.add('animate-fade-in-up');
            }
        });
    }
    
    // ===== HEADER BACKGROUND ON SCROLL =====
    function updateHeaderBackground() {
        const header = document.querySelector('header');
        
        if (window.scrollY > 50) {
            header.classList.add('bg-white', 'shadow-lg');
            header.classList.remove('bg-transparent');
        } else {
            header.classList.remove('bg-white', 'shadow-lg');
            header.classList.add('bg-transparent');
        }
    }
    
    // ===== SCROLL EVENT LISTENERS =====
    window.addEventListener('scroll', function() {
        updateActiveNav();
        animateOnScroll();
    });
    
    // ===== CAR BOOKING FUNCTIONALITY =====
    const bookingButtons = document.querySelectorAll('button:contains("Sewa Sekarang")');
    bookingButtons.forEach(button => {
        button.addEventListener('click', function() {
            const carCard = this.closest('.bg-white');
            const carName = carCard.querySelector('h3').textContent;
            const carPrice = carCard.querySelector('.text-blue-600').textContent;
            
            // Show booking modal or redirect to booking page
            showBookingModal(carName, carPrice);
        });
    });
    
    // ===== BOOKING MODAL =====
    function showBookingModal(carName, carPrice) {
        // Create modal HTML
        const modalHTML = `
            <div id="booking-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
                <div class="bg-white rounded-2xl max-w-md w-full p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold text-gray-900">Booking ${carName}</h3>
                        <button id="close-modal" class="text-gray-400 hover:text-gray-600">
                            <i class="fas fa-times text-xl"></i>
                        </button>
                    </div>
                    <div class="mb-4">
                        <p class="text-gray-600">Harga: <span class="font-semibold text-blue-600">${carPrice}</span></p>
                    </div>
                    <form id="booking-form" class="space-y-4">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                            <input type="text" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Nomor WhatsApp</label>
                            <input type="tel" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 font-medium mb-2">Tanggal Mulai</label>
                                <input type="date" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2">Tanggal Selesai</label>
                                <input type="date" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>
                        <div class="flex gap-4 pt-4">
                            <button type="button" id="cancel-booking" class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition duration-300">
                                Batal
                            </button>
                            <button type="submit" class="flex-1 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300">
                                Kirim Booking
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        `;
        
        // Add modal to page
        document.body.insertAdjacentHTML('beforeend', modalHTML);
        
        // Modal event listeners
        const modal = document.getElementById('booking-modal');
        const closeBtn = document.getElementById('close-modal');
        const cancelBtn = document.getElementById('cancel-booking');
        const bookingForm = document.getElementById('booking-form');
        
        // Close modal functions
        function closeModal() {
            modal.remove();
        }
        
        closeBtn.addEventListener('click', closeModal);
        cancelBtn.addEventListener('click', closeModal);
        
        // Close modal when clicking outside
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeModal();
            }
        });
        
        // Handle form submission
        bookingForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const nama = this.querySelector('input[type="text"]').value;
            const whatsapp = this.querySelector('input[type="tel"]').value;
            const tanggalMulai = this.querySelectorAll('input[type="date"]')[0].value;
            const tanggalSelesai = this.querySelectorAll('input[type="date"]')[1].value;
            
            // Create WhatsApp message
            const message = `Halo RafaRentCar!

Saya ingin booking mobil dengan detail:
- Mobil: ${carName}
- Harga: ${carPrice}
- Nama: ${nama}
- Tanggal: ${tanggalMulai} - ${tanggalSelesai}

Mohon konfirmasi ketersediaan. Terima kasih!`;
            
            // Open WhatsApp
            const whatsappURL = `https://wa.me/6281234567890?text=${encodeURIComponent(message)}`;
            window.open(whatsappURL, '_blank');
            
            closeModal();
        });
    }
    
    // ===== TESTIMONIAL FORM =====
    const testimonialBtn = document.querySelector('button:contains("Tulis Testimoni")');
    if (testimonialBtn) {
        testimonialBtn.addEventListener('click', function() {
            showTestimonialForm();
        });
    }
    
    function showTestimonialForm() {
        const modalHTML = `
            <div id="testimonial-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
                <div class="bg-white rounded-2xl max-w-lg w-full p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold text-gray-900">Tulis Testimoni</h3>
                        <button id="close-testimonial-modal" class="text-gray-400 hover:text-gray-600">
                            <i class="fas fa-times text-xl"></i>
                        </button>
                    </div>
                    <form id="testimonial-form" class="space-y-4">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                            <input type="text" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Kota</label>
                            <input type="text" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Rating</label>
                            <div class="flex gap-2">
                                <button type="button" class="star-btn text-2xl text-gray-300 hover:text-yellow-400" data-rating="1">⭐</button>
                                <button type="button" class="star-btn text-2xl text-gray-300 hover:text-yellow-400" data-rating="2">⭐</button>
                                <button type="button" class="star-btn text-2xl text-gray-300 hover:text-yellow-400" data-rating="3">⭐</button>
                                <button type="button" class="star-btn text-2xl text-gray-300 hover:text-yellow-400" data-rating="4">⭐</button>
                                <button type="button" class="star-btn text-2xl text-gray-300 hover:text-yellow-400" data-rating="5">⭐</button>
                            </div>
                            <input type="hidden" id="rating-input" name="rating" required>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Testimoni</label>
                            <textarea required rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Ceritakan pengalaman Anda menggunakan layanan RafaRentCar..."></textarea>
                        </div>
                        <div class="flex gap-4 pt-4">
                            <button type="button" id="cancel-testimonial" class="flex-1 px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition duration-300">
                                Batal
                            </button>
                            <button type="submit" class="flex-1 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300">
                                Kirim Testimoni
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        `;
        
        document.body.insertAdjacentHTML('beforeend', modalHTML);
        
        // Handle star rating
        const starBtns = document.querySelectorAll('.star-btn');
        const ratingInput = document.getElementById('rating-input');
        
        starBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const rating = parseInt(this.getAttribute('data-rating'));
                ratingInput.value = rating;
                
                starBtns.forEach((star, index) => {
                    if (index < rating) {
                        star.classList.remove('text-gray-300');
                        star.classList.add('text-yellow-400');
                    } else {
                        star.classList.remove('text-yellow-400');
                        star.classList.add('text-gray-300');
                    }
                });
            });
        });
        
        // Modal close functionality
        const modal = document.getElementById('testimonial-modal');
        const closeBtn = document.getElementById('close-testimonial-modal');
        const cancelBtn = document.getElementById('cancel-testimonial');
        
        function closeModal() {
            modal.remove();
        }
        
        closeBtn.addEventListener('click', closeModal);
        cancelBtn.addEventListener('click', closeModal);
        
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeModal();
            }
        });
        
        // Handle form submission
        document.getElementById('testimonial-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const nama = this.querySelector('input[type="text"]').value;
            const kota = this.querySelectorAll('input[type="text"]')[1].value;
            const rating = ratingInput.value;
            const testimoni = this.querySelector('textarea').value;
            
            // Simulate sending to server
            const loadingBtn = this.querySelector('button[type="submit"]');
            const originalText = loadingBtn.textContent;
            loadingBtn.innerHTML = '<div class="loading"></div> Mengirim...';
            loadingBtn.disabled = true;
            
            setTimeout(() => {
                alert('Terima kasih! Testimoni Anda telah berhasil dikirim.');
                closeModal();
            }, 2000);
        });
    }
    
    // ===== FLOATING WHATSAPP BUTTON =====
    const floatingWhatsApp = `
        <div class="floating-btn no-print" id="floating-whatsapp">
            <i class="fab fa-whatsapp text-2xl"></i>
        </div>
    `;
    
    document.body.insertAdjacentHTML('beforeend', floatingWhatsApp);
    
    document.getElementById('floating-whatsapp').addEventListener('click', function() {
        const message = 'Halo RafaRentCar! Saya ingin mengetahui informasi lebih lanjut tentang layanan rental mobil.';
        const whatsappURL = `https://wa.me/6281234567890?text=${encodeURIComponent(message)}`;
        window.open(whatsappURL, '_blank');
    });
    
    // ===== LAZY LOADING IMAGES =====
    const images = document.querySelectorAll('img[data-src]');
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
    
    // ===== PERFORMANCE OPTIMIZATIONS =====
    
    // Debounce scroll events
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }
    
    // Apply debouncing to scroll events
    window.addEventListener('scroll', debounce(function() {
        updateActiveNav();
        animateOnScroll();
    }, 10));
    
    // ===== KEYBOARD ACCESSIBILITY =====
    document.addEventListener('keydown', function(e) {
        // Close modals with Escape key
        if (e.key === 'Escape') {
            const modals = document.querySelectorAll('#booking-modal, #testimonial-modal');
            modals.forEach(modal => {
                if (modal) {
                    modal.remove();
                }
            });
            
            // Close mobile menu
            if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
                const icon = mobileMenuBtn.querySelector('i');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        }
        
        // Navigate slides with arrow keys
        if (e.key === 'ArrowLeft') {
            prevSlide();
        }
        if (e.key === 'ArrowRight') {
            nextSlide();
        }
    });
    
    // ===== FORM VALIDATION =====
    function validatePhoneNumber(phone) {
        const phoneRegex = /^(\+62|62|0)[0-9]{9,13}$/;
        return phoneRegex.test(phone);
    }
    
    function validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
    // ===== PRICE CALCULATOR =====
    function calculateRentalPrice(basePrice, startDate, endDate) {
        const start = new Date(startDate);
        const end = new Date(endDate);
        const timeDiff = end.getTime() - start.getTime();
        const daysDiff = Math.ceil(timeDiff / (1000 * 3600 * 24));
        
        if (daysDiff <= 0) {
            return { days: 0, total: 0, error: 'Tanggal tidak valid' };
        }
        
        let total = basePrice * daysDiff;
        
        // Apply discounts
        if (daysDiff >= 7) {
            total *= 0.9; // 10% discount for weekly rental
        } else if (daysDiff >= 3) {
            total *= 0.95; // 5% discount for 3+ days
        }
        
        return {
            days: daysDiff,
            total: Math.round(total),
            discount: daysDiff >= 7 ? 10 : daysDiff >= 3 ? 5 : 0
        };
    }
    
    // ===== SEARCH FUNCTIONALITY =====
    function initializeSearch() {
        const searchInput = document.getElementById('car-search');
        const carCards = document.querySelectorAll('.car-card');
        
        if (searchInput) {
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                
                carCards.forEach(card => {
                    const carName = card.querySelector('h3').textContent.toLowerCase();
                    const carDescription = card.querySelector('p').textContent.toLowerCase();
                    
                    if (carName.includes(searchTerm) || carDescription.includes(searchTerm)) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        }
    }
    
    // ===== LOADING STATES =====
    function showLoading(element) {
        const originalContent = element.innerHTML;
        element.innerHTML = '<div class="loading"></div>';
        element.disabled = true;
        return originalContent;
    }
    
    function hideLoading(element, originalContent) {
        element.innerHTML = originalContent;
        element.disabled = false;
    }
    
    // ===== LOCAL STORAGE HELPERS =====
    function saveToLocalStorage(key, data) {
        try {
            localStorage.setItem(key, JSON.stringify(data));
        } catch (e) {
            console.warn('Local storage not available');
        }
    }
    
    function getFromLocalStorage(key) {
        try {
            const data = localStorage.getItem(key);
            return data ? JSON.parse(data) : null;
        } catch (e) {
            console.warn('Local storage not available');
            return null;
        }
    }
    
    // ===== ANALYTICS TRACKING =====
    function trackEvent(action, category, label) {
        // Google Analytics 4 event tracking
        if (typeof gtag !== 'undefined') {
            gtag('event', action, {
                event_category: category,
                event_label: label
            });
        }
        
        // Facebook Pixel tracking
        if (typeof fbq !== 'undefined') {
            fbq('track', action, {
                content_category: category,
                content_name: label
            });
        }
    }
    
    // Track car views
    const carCards = document.querySelectorAll('.car-card');
    carCards.forEach(card => {
        card.addEventListener('click', function() {
            const carName = this.querySelector('h3').textContent;
            trackEvent('view_car', 'Cars', carName);
        });
    });
    
    // ===== ERROR HANDLING =====
    window.addEventListener('error', function(e) {
        console.error('JavaScript Error:', e.error);
        
        // Show user-friendly error message for critical errors
        if (e.error && e.error.message) {
            showNotification('Terjadi kesalahan. Silakan refresh halaman.', 'error');
        }
    });
    
    // ===== NOTIFICATION SYSTEM =====
    function showNotification(message, type = 'info') {
        const notificationHTML = `
            <div class="fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg text-white notification-${type}" id="notification">
                <div class="flex items-center">
                    <i class="fas ${type === 'success' ? 'fa-check-circle' : type === 'error' ? 'fa-exclamation-circle' : 'fa-info-circle'} mr-2"></i>
                    <span>${message}</span>
                    <button class="ml-4 text-white hover:text-gray-200" onclick="this.parentElement.parentElement.remove()">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        `;
        
        document.body.insertAdjacentHTML('beforeend', notificationHTML);
        
        // Auto remove after 5 seconds
        setTimeout(() => {
            const notification = document.getElementById('notification');
            if (notification) {
                notification.remove();
            }
        }, 5000);
    }
    
    // ===== RESPONSIVE UTILITIES =====
    function isMobile() {
        return window.innerWidth <= 768;
    }
    
    function isTablet() {
        return window.innerWidth > 768 && window.innerWidth <= 1024;
    }
    
    function isDesktop() {
        return window.innerWidth > 1024;
    }
    
    // ===== INTERSECTION OBSERVER FOR ANIMATIONS =====
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in-up');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    // Observe elements for animation
    const animateElements = document.querySelectorAll('.animate-on-scroll');
    animateElements.forEach(el => observer.observe(el));
    
    // ===== BACK TO TOP BUTTON =====
    const backToTopBtn = `
        <button id="back-to-top" class="fixed bottom-4 left-4 w-12 h-12 bg-blue-600 text-white rounded-full shadow-lg hover:bg-blue-700 transition-all duration-300 opacity-0 pointer-events-none z-40">
            <i class="fas fa-arrow-up"></i>
        </button>
    `;
    
    document.body.insertAdjacentHTML('beforeend', backToTopBtn);
    
    const backToTopButton = document.getElementById('back-to-top');
    
    window.addEventListener('scroll', debounce(() => {
        if (window.scrollY > 500) {
            backToTopButton.classList.remove('opacity-0', 'pointer-events-none');
            backToTopButton.classList.add('opacity-100');
        } else {
            backToTopButton.classList.add('opacity-0', 'pointer-events-none');
            backToTopButton.classList.remove('opacity-100');
        }
    }, 100));
    
    backToTopButton.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    // ===== PAGE PERFORMANCE MONITORING =====
    window.addEventListener('load', function() {
        // Measure page load time
        const loadTime = window.performance.timing.loadEventEnd - window.performance.timing.navigationStart;
        console.log(`Page loaded in ${loadTime}ms`);
        
        // Track performance if analytics is available
        if (typeof gtag !== 'undefined') {
            gtag('event', 'timing_complete', {
                name: 'load',
                value: loadTime
            });
        }
    });
    
    // ===== INITIALIZE ALL FEATURES =====
    function initializeWebsite() {
        console.log('RafaRentCar website initialized successfully!');
        
        // Add any initialization code here
        initializeSearch();
        
        // Show welcome message for first-time visitors
        const isFirstVisit = !getFromLocalStorage('visited');
        if (isFirstVisit) {
            setTimeout(() => {
                showNotification('Selamat datang di RafaRentCar! 🚗', 'success');
                saveToLocalStorage('visited', true);
            }, 2000);
        }
    }
    
    // Initialize everything
    initializeWebsite();
    
    // ===== SERVICE WORKER REGISTRATION =====
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', function() {
            navigator.serviceWorker.register('/sw.js')
                .then(function(registration) {
                    console.log('ServiceWorker registration successful');
                })
                .catch(function(err) {
                    console.log('ServiceWorker registration failed');
                });
        });
    }
});

// ===== UTILITY FUNCTIONS (Available globally) =====

// Format currency
function formatCurrency(amount) {
    return new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0
    }).format(amount);
}

// Format date
function formatDate(dateString) {
    const options = { 
        year: 'numeric', 
        month: 'long', 
        day: 'numeric',
        timeZone: 'Asia/Jakarta'
    };
    return new Date(dateString).toLocaleDateString('id-ID', options);
}

// Copy to clipboard
function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(function() {
        showNotification('Teks berhasil disalin!', 'success');
    }).catch(function() {
        showNotification('Gagal menyalin teks', 'error');
    });
}

// Share functionality
function shareContent(title, text, url) {
    if (navigator.share) {
        navigator.share({
            title: title,
            text: text,
            url: url
        });
    } else {
        // Fallback for browsers that don't support Web Share API
        copyToClipboard(url);
    }
}

// Print page
function printPage() {
    window.print();
}