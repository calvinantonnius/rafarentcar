/* ======================================
   ABOUT SECTION JAVASCRIPT
   ====================================== */

document.addEventListener('DOMContentLoaded', function() {
    // About elements
    const aboutSection = document.getElementById('about');
    const aboutStatItems = document.querySelectorAll('.about-stat-item');
    const aboutFeatureItems = document.querySelectorAll('.about-feature-item');
    const aboutValueItems = document.querySelectorAll('.about-value-item');
    const aboutStatNumbers = document.querySelectorAll('.about-stat-number');
    const aboutBtn = document.querySelector('.about-btn');

    /**
     * About Intersection Observer for animations
     */
    const aboutObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('about-animate-in');
                
                // Trigger about counter animation if it's a stat number
                if (entry.target.classList.contains('about-stat-number')) {
                    aboutAnimateCounter(entry.target);
                }
            }
        });
    }, {
        threshold: 0.3,
        rootMargin: '0px 0px -50px 0px'
    });

    // Observe about elements
    if (aboutSection) {
        aboutObserver.observe(aboutSection);
    }
    
    aboutStatNumbers.forEach(stat => {
        aboutObserver.observe(stat);
    });

    /**
     * About counter animation
     * @param {Element} element - Element containing the number to animate
     */
    function aboutAnimateCounter(element) {
        const finalNumber = element.textContent;
        const numericValue = parseInt(finalNumber.replace(/\D/g, ''));
        const suffix = finalNumber.replace(/[\d.]/g, '');
        const duration = 2000; // 2 seconds
        const steps = 60;
        const increment = numericValue / steps;
        const stepDuration = duration / steps;
        
        let currentNumber = 0;
        element.textContent = '0' + suffix;

        const aboutTimer = setInterval(() => {
            currentNumber += increment;
            if (currentNumber >= numericValue) {
                currentNumber = numericValue;
                clearInterval(aboutTimer);
            }
            
            if (suffix.includes('.')) {
                element.textContent = currentNumber.toFixed(1) + suffix.replace(/[\d.]/g, '');
            } else {
                element.textContent = Math.floor(currentNumber) + suffix;
            }
        }, stepDuration);
    }

    /**
     * About stat items hover effects
     */
    aboutStatItems.forEach((item, index) => {
        item.addEventListener('mouseenter', () => {
            aboutAddHoverEffect(item, 'about-stat-hover');
            
            // Add stagger effect to other items
            aboutStatItems.forEach((otherItem, otherIndex) => {
                if (otherIndex !== index) {
                    otherItem.style.transform = 'scale(0.95)';
                    otherItem.style.opacity = '0.7';
                }
            });
        });

        item.addEventListener('mouseleave', () => {
            aboutRemoveHoverEffect(item, 'about-stat-hover');
            
            // Reset other items
            aboutStatItems.forEach(otherItem => {
                otherItem.style.transform = 'scale(1)';
                otherItem.style.opacity = '1';
            });
        });
    });

    /**
     * About feature items animations
     */
    aboutFeatureItems.forEach((item, index) => {
        // Stagger animation on scroll
        item.style.animationDelay = `${index * 0.1}s`;
        
        item.addEventListener('mouseenter', () => {
            aboutAddPulseEffect(item.querySelector('.about-feature-icon'));
        });

        item.addEventListener('mouseleave', () => {
            aboutRemovePulseEffect(item.querySelector('.about-feature-icon'));
        });
    });

    /**
     * About value items animations
     */
    aboutValueItems.forEach((item, index) => {
        // Stagger animation on scroll
        item.style.animationDelay = `${index * 0.2}s`;
        
        item.addEventListener('mouseenter', () => {
            aboutAddFloatEffect(item);
            aboutAddGlowEffect(item.querySelector('.about-value-icon'));
        });

        item.addEventListener('mouseleave', () => {
            aboutRemoveFloatEffect(item);
            aboutRemoveGlowEffect(item.querySelector('.about-value-icon'));
        });
    });

    /**
     * About button effects
     */
    if (aboutBtn) {
        aboutBtn.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href && href.startsWith('#')) {
                e.preventDefault();
                aboutSmoothScrollTo(href);
            }
            
            // Add about button click effect
            aboutAddClickEffect(this);
        });

        aboutBtn.addEventListener('mouseenter', () => {
            aboutAddButtonHoverEffect(aboutBtn);
        });

        aboutBtn.addEventListener('mouseleave', () => {
            aboutRemoveButtonHoverEffect(aboutBtn);
        });
    }

    /**
     * About utility functions
     */
    function aboutAddHoverEffect(element, className) {
        element.classList.add(className);
        element.style.transform = 'translateY(-10px) scale(1.05)';
        element.style.boxShadow = '0 25px 50px -12px rgba(0, 0, 0, 0.25)';
    }

    function aboutRemoveHoverEffect(element, className) {
        element.classList.remove(className);
        element.style.transform = '';
        element.style.boxShadow = '';
    }

    function aboutAddPulseEffect(element) {
        if (element) {
            element.style.animation = 'aboutIconPulse 0.6s ease-in-out';
        }
    }

    function aboutRemovePulseEffect(element) {
        if (element) {
            element.style.animation = '';
        }
    }

    function aboutAddFloatEffect(element) {
        element.style.transform = 'translateY(-12px) scale(1.02)';
        element.style.transition = 'all 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
    }

    function aboutRemoveFloatEffect(element) {
        element.style.transform = '';
    }

    function aboutAddGlowEffect(element) {
        if (element) {
            element.style.boxShadow = '0 0 30px rgba(59, 130, 246, 0.5)';
            element.style.transform = 'scale(1.1)';
        }
    }

    function aboutRemoveGlowEffect(element) {
        if (element) {
            element.style.boxShadow = '';
            element.style.transform = '';
        }
    }

    function aboutAddButtonHoverEffect(button) {
        button.style.transform = 'translateY(-3px) scale(1.05)';
        button.style.boxShadow = '0 20px 40px rgba(0, 0, 0, 0.15)';
    }

    function aboutRemoveButtonHoverEffect(button) {
        button.style.transform = '';
        button.style.boxShadow = '';
    }

    function aboutAddClickEffect(button) {
        button.style.transform = 'scale(0.95)';
        setTimeout(() => {
            button.style.transform = '';
        }, 150);
    }

    function aboutSmoothScrollTo(target) {
        const element = document.querySelector(target);
        if (element) {
            element.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    }

    /**
     * About parallax effect for decorative elements
     */
    function aboutHandleParallax() {
        const scrolled = window.pageYOffset;
        const aboutDecorations = document.querySelectorAll('.about-decoration-1, .about-decoration-2');
        
        aboutDecorations.forEach((decoration, index) => {
            const speed = (index + 1) * 0.5;
            const yPos = -(scrolled * speed);
            decoration.style.transform = `translateY(${yPos}px) scale(${1 + scrolled * 0.0001})`;
        });
    }

    /**
     * About scroll event with throttling
     */
    let aboutScrollTimeout;
    window.addEventListener('scroll', () => {
        if (!aboutScrollTimeout) {
            aboutScrollTimeout = setTimeout(() => {
                aboutHandleParallax();
                aboutScrollTimeout = null;
            }, 16); // ~60fps
        }
    });

    /**
     * About image lazy loading
     */
    const aboutImages = document.querySelectorAll('.about-main-image');
    const aboutImageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                }
                aboutImageObserver.unobserve(img);
            }
        });
    });

    aboutImages.forEach(img => {
        aboutImageObserver.observe(img);
    });

    /**
     * About resize handler
     */
    let aboutResizeTimeout;
    window.addEventListener('resize', () => {
        clearTimeout(aboutResizeTimeout);
        aboutResizeTimeout = setTimeout(() => {
            aboutHandleResize();
        }, 250);
    });

    function aboutHandleResize() {
        // Reset any fixed positions or calculations on resize
        const isMobile = window.innerWidth < 768;
        
        if (isMobile) {
            // Mobile-specific adjustments
            aboutStatItems.forEach(item => {
                item.style.transform = '';
                item.style.opacity = '';
            });
        }
    }

    // Add about CSS animations
    const aboutAnimationStyles = `
        @keyframes aboutIconPulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }
        
        .about-animate-in {
            animation: aboutSlideInUp 0.8s ease-out forwards;
        }
        
        @keyframes aboutSlideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    `;

    // Inject about animation styles
    const aboutStyleSheet = document.createElement('style');
    aboutStyleSheet.textContent = aboutAnimationStyles;
    document.head.appendChild(aboutStyleSheet);

    /**
     * About performance monitoring
     */
    if ('IntersectionObserver' in window) {
        console.log('About section: IntersectionObserver supported');
    } else {
        console.warn('About section: IntersectionObserver not supported, falling back to scroll events');
        
        // Fallback for older browsers
        window.addEventListener('scroll', aboutHandleScrollFallback);
    }

    function aboutHandleScrollFallback() {
        const aboutSectionTop = aboutSection.offsetTop;
        const aboutSectionHeight = aboutSection.offsetHeight;
        const scrollTop = window.pageYOffset;
        const windowHeight = window.innerHeight;

        if (scrollTop + windowHeight > aboutSectionTop && 
            scrollTop < aboutSectionTop + aboutSectionHeight) {
            aboutSection.classList.add('about-animate-in');
            
            // Animate counters
            aboutStatNumbers.forEach(stat => {
                if (!stat.classList.contains('about-animated')) {
                    stat.classList.add('about-animated');
                    aboutAnimateCounter(stat);
                }
            });
        }
    }

    /**
     * About initialization complete
     */
    console.log('About section initialized successfully');
});

/* ======================================
   END ABOUT SECTION JAVASCRIPT
   ====================================== */