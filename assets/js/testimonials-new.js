/* ========================================
   SIMPLE 2-CARD TESTIMONIALS SLIDER
   ======================================== */

document.addEventListener('DOMContentLoaded', function() {
    const slider = {
        container: document.getElementById('testimonialsSlider'),
        track: document.getElementById('sliderTrack'),
        slides: [],
        currentSlide: 0,
        slidesPerView: 3, // Show 3 cards by default, min 2
        prevBtn: document.getElementById('prevBtn'),
        nextBtn: document.getElementById('nextBtn'),
        dots: document.getElementById('sliderDots'),
        isTransitioning: false
    };

    // Initialize slider
    if (slider.container && slider.track) {
        init();
    }

    function init() {
        // Get all slides
        slider.slides = Array.from(slider.track.querySelectorAll('.testimonial-slide'));
        
        if (slider.slides.length === 0) {
            console.warn('No testimonial slides found');
            return;
        }

        console.log(`Found ${slider.slides.length} testimonial slides`);

        // Check if mobile
        updateSlidesPerView();

        // Create dots
        createDots();

        // Set initial position
        updateSlider();

        // Add event listeners
        if (slider.prevBtn) {
            slider.prevBtn.addEventListener('click', prevSlide);
        }

        if (slider.nextBtn) {
            slider.nextBtn.addEventListener('click', nextSlide);
        }

        // Handle window resize
        window.addEventListener('resize', handleResize);

        console.log('Testimonials slider initialized successfully!');
    }

    function updateSlidesPerView() {
        if (window.innerWidth <= 768) {
            slider.slidesPerView = 1; // Mobile: 1 card
        } else if (window.innerWidth <= 1200) {
            slider.slidesPerView = 2; // Tablet: 2 cards minimum
        } else {
            slider.slidesPerView = 3; // Desktop: 3 cards
        }
        console.log(`Slides per view: ${slider.slidesPerView} (window width: ${window.innerWidth}px)`);
    }

    function createDots() {
        if (!slider.dots) return;

        const totalDots = Math.max(1, slider.slides.length - slider.slidesPerView + 1);

        slider.dots.innerHTML = '';
        
        for (let i = 0; i < totalDots; i++) {
            const dot = document.createElement('button');
            dot.className = 'dot-control';
            if (i === 0) dot.classList.add('active');
            
            dot.addEventListener('click', () => goToSlide(i));
            slider.dots.appendChild(dot);
        }
        
        console.log(`Created ${totalDots} dots for ${slider.slides.length} slides showing ${slider.slidesPerView} at a time`);
    }

    function updateSlider() {
        if (!slider.track || slider.slides.length === 0) return;

        // Calculate translateX with minimal gap
        const slideWidth = slider.slides[0].offsetWidth;
        const gap = 2; // Minimal gap to match CSS
        const moveDistance = slideWidth + gap;
        
        let translateX = -slider.currentSlide * moveDistance;
        
        // Apply transform
        slider.track.style.transform = `translateX(${translateX}px)`;
        
        console.log(`Moving to slide ${slider.currentSlide}, translateX: ${translateX}px, slideWidth: ${slideWidth}px`);

        // Update dots
        updateDots();
        
        // Update button states
        updateButtons();
    }

    function updateDots() {
        if (!slider.dots) return;

        const dots = slider.dots.querySelectorAll('.dot-control');
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === slider.currentSlide);
        });
    }

    function updateButtons() {
        if (!slider.prevBtn || !slider.nextBtn) return;

        const maxSlide = Math.max(0, slider.slides.length - slider.slidesPerView);

        slider.prevBtn.disabled = slider.currentSlide <= 0;
        slider.nextBtn.disabled = slider.currentSlide >= maxSlide;

        console.log(`Current slide: ${slider.currentSlide}, Max slide: ${maxSlide}, Showing ${slider.slidesPerView} cards`);
    }

    function nextSlide() {
        if (slider.isTransitioning) return;

        const maxSlide = Math.max(0, slider.slides.length - slider.slidesPerView);

        if (slider.currentSlide < maxSlide) {
            slider.currentSlide++;
            slideTransition();
        }
    }

    function prevSlide() {
        if (slider.isTransitioning) return;

        if (slider.currentSlide > 0) {
            slider.currentSlide--;
            slideTransition();
        }
    }

    function goToSlide(index) {
        if (slider.isTransitioning) return;

        const maxSlide = Math.max(0, slider.slides.length - slider.slidesPerView);

        slider.currentSlide = Math.max(0, Math.min(index, maxSlide));
        slideTransition();
    }

    function slideTransition() {
        slider.isTransitioning = true;
        updateSlider();
        
        setTimeout(() => {
            slider.isTransitioning = false;
        }, 600); // Match CSS transition duration
    }

    function handleResize() {
        const oldSlidesPerView = slider.slidesPerView;
        updateSlidesPerView();
        
        if (oldSlidesPerView !== slider.slidesPerView) {
            // Reset to first slide on layout change
            slider.currentSlide = 0;
            createDots();
            updateSlider();
        }
    }
});
