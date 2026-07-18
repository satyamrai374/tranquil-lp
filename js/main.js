document.addEventListener('DOMContentLoaded', () => {
    // ----------------------------------------------------
    // 1. Sticky Header Scroll Effect & Section Active State
    // ----------------------------------------------------
    const header = document.getElementById('main-header');
    const brandIcon = document.getElementById('brand-icon');
    const brandText = document.getElementById('brand-text');
    const desktopLinks = document.querySelectorAll('.desktop-nav-link');
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');

    const updateHeaderStyle = () => {
        if (window.scrollY > 50) {
            header.classList.remove('bg-transparent');
            header.classList.add('bg-white/95', 'shadow-md', 'backdrop-blur-sm');
            
            // Wind icon & text brand color transitions
            brandIcon.classList.remove('text-white');
            brandIcon.classList.add('text-emerald-600');
            brandText.classList.remove('text-white');
            brandText.classList.add('text-gray-900');
            
            // Mobile toggle button
            mobileMenuBtn.classList.remove('text-white/80', 'hover:bg-white/10');
            mobileMenuBtn.classList.add('text-gray-600', 'hover:bg-gray-100');

            // Desktop links
            desktopLinks.forEach(link => {
                link.classList.remove('text-white/80', 'hover:text-white');
                link.classList.add('text-gray-600', 'hover:text-emerald-600');
            });
        } else {
            header.classList.remove('bg-white/95', 'shadow-md', 'backdrop-blur-sm');
            header.classList.add('bg-transparent');
            
            brandIcon.classList.remove('text-emerald-600');
            brandIcon.classList.add('text-white');
            brandText.classList.remove('text-gray-900');
            brandText.classList.add('text-white');

            mobileMenuBtn.classList.remove('text-gray-600', 'hover:bg-gray-100');
            mobileMenuBtn.classList.add('text-white/80', 'hover:bg-white/10');

            desktopLinks.forEach(link => {
                link.classList.remove('text-gray-600', 'hover:text-emerald-600');
                link.classList.add('text-white/80', 'hover:text-white');
            });
        }
    };

    window.addEventListener('scroll', updateHeaderStyle);
    updateHeaderStyle(); // Run once initially

    // ----------------------------------------------------
    // 2. Mobile Menu Drawer Toggle
    // ----------------------------------------------------
    const mobileDrawer = document.getElementById('mobile-drawer');
    const openMenuIcon = document.getElementById('open-menu-icon');
    const closeMenuIcon = document.getElementById('close-menu-icon');

    const toggleMobileMenu = () => {
        const isOpen = mobileDrawer.classList.contains('translate-y-0');
        if (isOpen) {
            // Close drawer
            mobileDrawer.classList.remove('translate-y-0', 'opacity-100');
            mobileDrawer.classList.add('-translate-y-full', 'opacity-0', 'pointer-events-none');
            openMenuIcon.classList.remove('hidden');
            closeMenuIcon.classList.add('hidden');
        } else {
            // Open drawer
            mobileDrawer.classList.remove('-translate-y-full', 'opacity-0', 'pointer-events-none');
            mobileDrawer.classList.add('translate-y-0', 'opacity-100');
            openMenuIcon.classList.add('hidden');
            closeMenuIcon.classList.remove('hidden');
        }
    };

    mobileMenuBtn.addEventListener('click', toggleMobileMenu);

    // Close menu when clicking a link inside it
    const mobileLinks = document.querySelectorAll('.mobile-nav-link');
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (mobileDrawer.classList.contains('translate-y-0')) {
                toggleMobileMenu();
            }
        });
    });

    // ----------------------------------------------------
    // 3. Smooth Scrolling for Navigation Link Elements
    // ----------------------------------------------------
    const smoothScrollTo = (targetId) => {
        const element = document.getElementById(targetId);
        if (element) {
            const headerOffset = 80; // height of fixed header
            const elementPosition = element.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });
        }
    };

    const scrollTriggers = document.querySelectorAll('[data-scroll-to]');
    scrollTriggers.forEach(trigger => {
        trigger.addEventListener('click', (e) => {
            e.preventDefault();
            const targetId = trigger.getAttribute('data-scroll-to');
            smoothScrollTo(targetId);
        });
    });

    // ----------------------------------------------------
    // 4. Practice Carousel functionality
    // ----------------------------------------------------
    const carouselItems = document.querySelectorAll('.carousel-item');
    const carouselDots = document.querySelectorAll('.carousel-dot');
    const prevBtn = document.getElementById('carousel-prev');
    const nextBtn = document.getElementById('carousel-next');
    let currentIndex = 0;
    const totalItems = carouselItems.length;
    let autoplayTimer = null;

    const showSlide = (index) => {
        // Ensure index wraps around bounds
        if (index < 0) {
            currentIndex = totalItems - 1;
        } else if (index >= totalItems) {
            currentIndex = 0;
        } else {
            currentIndex = index;
        }

        // Show/hide slides with active classes
        carouselItems.forEach((item, idx) => {
            if (idx === currentIndex) {
                item.classList.remove('opacity-0', 'pointer-events-none');
                item.classList.add('opacity-100');
                
                // Animate text inside active slide
                const title = item.querySelector('.carousel-title');
                const desc = item.querySelector('.carousel-desc');
                if (title) {
                    title.classList.remove('translate-y-5', 'opacity-0');
                    title.classList.add('translate-y-0', 'opacity-100');
                }
                if (desc) {
                    desc.classList.remove('translate-y-5', 'opacity-0');
                    desc.classList.add('translate-y-0', 'opacity-100');
                }
            } else {
                item.classList.remove('opacity-100');
                item.classList.add('opacity-0', 'pointer-events-none');
                
                const title = item.querySelector('.carousel-title');
                const desc = item.querySelector('.carousel-desc');
                if (title) {
                    title.classList.remove('translate-y-0', 'opacity-100');
                    title.classList.add('translate-y-5', 'opacity-0');
                }
                if (desc) {
                    desc.classList.remove('translate-y-0', 'opacity-100');
                    desc.classList.add('translate-y-5', 'opacity-0');
                }
            }
        });

        // Update dot states
        carouselDots.forEach((dot, idx) => {
            if (idx === currentIndex) {
                dot.classList.remove('bg-gray-300', 'w-3');
                dot.classList.add('bg-emerald-600', 'w-8');
            } else {
                dot.classList.remove('bg-emerald-600', 'w-8');
                dot.classList.add('bg-gray-300', 'w-3');
            }
        });
    };

    const startAutoplay = () => {
        stopAutoplay();
        autoplayTimer = setInterval(() => {
            showSlide(currentIndex + 1);
        }, 5000);
    };

    const stopAutoplay = () => {
        if (autoplayTimer) {
            clearInterval(autoplayTimer);
        }
    };

    if (prevBtn && nextBtn && totalItems > 0) {
        prevBtn.addEventListener('click', () => {
            showSlide(currentIndex - 1);
            startAutoplay(); // Reset autoplay timer on click
        });

        nextBtn.addEventListener('click', () => {
            showSlide(currentIndex + 1);
            startAutoplay();
        });

        carouselDots.forEach((dot, idx) => {
            dot.addEventListener('click', () => {
                showSlide(idx);
                startAutoplay();
            });
        });

        // Autoplay setup
        const carouselContainer = document.querySelector('.carousel-item').parentElement;
        carouselContainer.addEventListener('mouseenter', stopAutoplay);
        carouselContainer.addEventListener('mouseleave', startAutoplay);
        
        // Initialize
        showSlide(0);
        startAutoplay();
    }

    // ----------------------------------------------------
    // 5. Back to Top Button
    // ----------------------------------------------------
    const backToTopBtn = document.getElementById('back-to-top');

    const toggleBackToTop = () => {
        if (window.pageYOffset > 300) {
            backToTopBtn.classList.remove('opacity-0', 'translate-y-5', 'pointer-events-none');
            backToTopBtn.classList.add('opacity-100', 'translate-y-0');
        } else {
            backToTopBtn.classList.remove('opacity-100', 'translate-y-0');
            backToTopBtn.classList.add('opacity-0', 'translate-y-5', 'pointer-events-none');
        }
    };

    if (backToTopBtn) {
        window.addEventListener('scroll', toggleBackToTop);
        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        toggleBackToTop(); // Initial check
    }
});
