// Modern Hero Banner Auto Slider
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.slider-dot');
    const heroSection = document.getElementById('beranda');
    
    let currentSlide = 0;
    let slideInterval;
    let isTransitioning = false;

    // Configuration
    const config = {
        autoSlideInterval: 6000, // 6 seconds for modern feel
        transitionDuration: 1200, // 1.2 seconds
        pauseOnHover: true
    };

    // Show specific slide with modern transition
    function showSlide(index) {
        if (isTransitioning || index === currentSlide) return;
        
        isTransitioning = true;
        
        // Add loading state
        slides[currentSlide].classList.add('loading');
        
        // Transition slides
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            if (i === index) {
                setTimeout(() => {
                    slide.classList.add('active');
                    slide.style.opacity = '1';
                }, 50);
            } else {
                slide.style.opacity = '0';
            }
        });

        // Update dots with modern animation
        updateDots(index);
        
        // Update current slide
        currentSlide = index;
        
        // Reset transition state
        setTimeout(() => {
            isTransitioning = false;
            slides.forEach(slide => slide.classList.remove('loading'));
        }, config.transitionDuration);
    }

    // Update navigation dots with smooth animation
    function updateDots(activeIndex) {
        dots.forEach((dot, i) => {
            dot.classList.remove('active');
            if (i === activeIndex) {
                dot.classList.add('active');
                // Add ripple effect
                createRipple(dot);
            }
        });
    }

    // Create ripple effect for dots
    function createRipple(element) {
        const ripple = document.createElement('div');
        ripple.style.position = 'absolute';
        ripple.style.borderRadius = '50%';
        ripple.style.background = 'rgba(255, 255, 255, 0.6)';
        ripple.style.transform = 'scale(0)';
        ripple.style.animation = 'ripple 0.6s linear';
        ripple.style.left = '50%';
        ripple.style.top = '50%';
        ripple.style.marginLeft = '-10px';
        ripple.style.marginTop = '-10px';
        ripple.style.width = '20px';
        ripple.style.height = '20px';
        
        element.style.position = 'relative';
        element.appendChild(ripple);
        
        setTimeout(() => {
            if (ripple.parentNode) {
                ripple.parentNode.removeChild(ripple);
            }
        }, 600);
    }

    // Next slide with smooth transition
    function nextSlide() {
        const nextIndex = (currentSlide + 1) % slides.length;
        showSlide(nextIndex);
    }

    // Auto slide functionality
    function startAutoSlide() {
        if (slideInterval) return;
        slideInterval = setInterval(nextSlide, config.autoSlideInterval);
    }

    function stopAutoSlide() {
        if (slideInterval) {
            clearInterval(slideInterval);
            slideInterval = null;
        }
    }

    function restartAutoSlide() {
        stopAutoSlide();
        startAutoSlide();
    }

    // Enhanced dot navigation with smooth transitions
    dots.forEach((dot, index) => {
        dot.addEventListener('click', (e) => {
            e.preventDefault();
            if (index !== currentSlide && !isTransitioning) {
                restartAutoSlide();
                showSlide(index);
            }
        });
        
        // Enhanced hover effects
        dot.addEventListener('mouseenter', () => {
            if (!dot.classList.contains('active')) {
                dot.style.transform = 'scale(1.2)';
                dot.style.backgroundColor = 'rgba(255, 255, 255, 0.8)';
            }
        });
        
        dot.addEventListener('mouseleave', () => {
            if (!dot.classList.contains('active')) {
                dot.style.transform = 'scale(1)';
                dot.style.backgroundColor = 'rgba(255, 255, 255, 0.3)';
            }
        });
    });

    // Pause on hover with smooth transition
    if (config.pauseOnHover && heroSection) {
        heroSection.addEventListener('mouseenter', () => {
            stopAutoSlide();
            heroSection.style.animationPlayState = 'paused';
        });
        
        heroSection.addEventListener('mouseleave', () => {
            startAutoSlide();
            heroSection.style.animationPlayState = 'running';
        });
    }

    // Intersection Observer for performance
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                startAutoSlide();
            } else {
                stopAutoSlide();
            }
        });
    }, {
        threshold: 0.5
    });

    if (heroSection) {
        observer.observe(heroSection);
    }

    // Page visibility API - pause when tab is not active
    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            stopAutoSlide();
        } else if (heroSection && isElementInViewport(heroSection)) {
            startAutoSlide();
        }
    });

    // Check if element is in viewport
    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Enhanced car card animations
    const carCards = document.querySelectorAll('.car-card');
    carCards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.transform = 'translateY(-12px) scale(1.03)';
            card.style.boxShadow = '0 25px 50px -12px rgba(0, 0, 0, 0.25)';
        });
        
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(0) scale(1)';
            card.style.boxShadow = '0 10px 15px -3px rgba(0, 0, 0, 0.1)';
        });
    });

    // Smooth scroll for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add CSS keyframes for ripple effect
    const style = document.createElement('style');
    style.textContent = `
        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);

    // Initialize slider
    function initializeSlider() {
        if (slides.length === 0) return;
        
        // Show first slide
        showSlide(0);
        
        // Start auto slide if element is in viewport
        if (isElementInViewport(heroSection)) {
            startAutoSlide();
        }
    }

    // Start the enhanced slider
    initializeSlider();

    // Preload images for better performance
    slides.forEach(slide => {
        const img = slide.querySelector('[style*="background-image"]');
        if (img) {
            const bgImage = img.style.backgroundImage;
            const imageUrl = bgImage.slice(4, -1).replace(/"/g, "");
            const preloadImg = new Image();
            preloadImg.src = imageUrl;
        }
    });
});