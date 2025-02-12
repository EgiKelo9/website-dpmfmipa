document.addEventListener("DOMContentLoaded", function() {
    const elements = document.querySelectorAll(".animate-fade-in");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("animate-show");
            }
        });
    }, {
        threshold: 0.2
    });

    elements.forEach(el => observer.observe(el));
});

// Tambahkan kode ini ke file JavaScript Anda
document.addEventListener('DOMContentLoaded', function() {
    const menuButton = document.querySelectorAll('.menu-button');
    let isOpen = false;

    // Toggle dropdown saat tombol menu diklik
    menuButton.forEach(menubtn => {
        const dropdownMenu = menubtn.nextElementSibling;
        menubtn.addEventListener('click', function(e) {
            e.stopPropagation();
            isOpen = !isOpen;

            dropdownMenu.classList.toggle('hidden');
            if (isOpen) {
                // Tampilkan dropdown
                // Tambahkan animasi
                dropdownMenu.classList.add('transform', 'opacity-100', 'scale-100');
                dropdownMenu.classList.remove('opacity-0', 'scale-95');
                // Update ARIA
                menubtn.setAttribute('aria-expanded', 'true');
            } else {
                // Sembunyikan dropdown
                closeDropdown();
            }
        });
    })

    // Tutup dropdown saat mengklik di luar
    document.addEventListener('click', function(e) {
        if (isOpen && !dropdownMenu.contains(e.target)) {
            closeDropdown();
        }
    });

    // Tutup dropdown saat item menu diklik
    const menuItems = dropdownMenu.querySelectorAll('[role="menuitem"]');
    menuItems.forEach(item => {
        item.addEventListener('click', function() {
            closeDropdown();
        });
    });

    // Fungsi untuk menutup dropdown
    function closeDropdown() {
        isOpen = false;
        // Tambahkan animasi keluar
        dropdownMenu.classList.remove('opacity-100', 'scale-100');
        dropdownMenu.classList.add('opacity-0', 'scale-95');
        // Sembunyikan setelah animasi selesai
        setTimeout(() => {
            dropdownMenu.classList.add('hidden');
        }, 100);
        // Update ARIA
        menuButton.setAttribute('aria-expanded', 'false');
    }
});

document.addEventListener('DOMContentLoaded', function() {
    // Get all carousels on the page
    const carousels = document.querySelectorAll('[data-carousel="slide"]');

    // Initialize each carousel
    carousels.forEach((carousel, carouselIndex) => {
        // Add unique ID to each carousel
        carousel.id = `carousel-${carouselIndex}`;

        const carouselItems = carousel.querySelectorAll('[data-carousel-item]');
        const prevButton = carousel.querySelector('[data-carousel-prev]');
        const nextButton = carousel.querySelector('[data-carousel-next]');
        const indicators = carousel.querySelectorAll('[data-carousel-slide-to]');

        let currentSlide = 0;
        const totalSlides = carouselItems.length;

        // Initialize the carousel
        function initCarousel() {
            carouselItems.forEach((item, index) => {
                if (index === 0) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
            updateIndicators();
        }

        // Update indicators
        function updateIndicators() {
            indicators.forEach((indicator, index) => {
                if (index === currentSlide) {
                    indicator.setAttribute('aria-current', 'true');
                    indicator.classList.add('bg-gray-800');
                } else {
                    indicator.setAttribute('aria-current', 'false');
                    indicator.classList.remove('bg-gray-800');
                }
            });
        }

        // Show specific slide
        function showSlide(index) {
            // Add fade out effect
            carouselItems[currentSlide].classList.add('opacity-0');
            setTimeout(() => {
                carouselItems[currentSlide].classList.add('hidden');

                // Update current slide index
                currentSlide = index;

                // Show new slide with fade in effect
                carouselItems[currentSlide].classList.remove('hidden');
                setTimeout(() => {
                    carouselItems[currentSlide].classList.remove('opacity-0');
                }, 50);

                // Update indicators
                updateIndicators();
            }, 300);
        }

        // Previous slide function
        function previousSlide() {
            const newIndex = currentSlide === 0 ? totalSlides - 1 : currentSlide - 1;
            showSlide(newIndex);
        }

        // Next slide function
        function nextSlide() {
            const newIndex = currentSlide === totalSlides - 1 ? 0 : currentSlide + 1;
            showSlide(newIndex);
        }

        // Add click events
        prevButton.addEventListener('click', previousSlide);
        nextButton.addEventListener('click', nextSlide);

        // Add indicator clicks
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => showSlide(index));
        });

        // Add keyboard navigation when focused
        carousel.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                previousSlide();
            } else if (e.key === 'ArrowRight') {
                nextSlide();
            }
        });

        // Auto-play functionality
        let autoplayInterval;

        function startAutoplay() {
            autoplayInterval = setInterval(nextSlide, 5000);
        }

        function stopAutoplay() {
            clearInterval(autoplayInterval);
        }

        // Start autoplay
        startAutoplay();

        // Pause on hover
        carousel.addEventListener('mouseenter', stopAutoplay);
        carousel.addEventListener('mouseleave', startAutoplay);

        // Initialize
        initCarousel();
    });
});