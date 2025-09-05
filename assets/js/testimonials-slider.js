/**
 * Lightweight Testimonials Slider - Pure JavaScript (No Dependencies)
 */
document.addEventListener('DOMContentLoaded', function() {
    console.log('Testimonials slider initializing...'); // Debug logging
    
    const slider = {
        track: document.getElementById('sliderTrack'),
        dots: document.getElementById('sliderDots'),
        prevBtn: document.getElementById('prevBtn'),
        nextBtn: document.getElementById('nextBtn'),
        slides: document.querySelectorAll('.testimonial-slide'),
        currentSlide: 0,
        slidesPerView: getSlidesPerView(),
        autoPlayInterval: null,
        isTransitioning: false
    };

    // Calculate how many slides to show based on screen width
    function getSlidesPerView() {
        const width = window.innerWidth;
        // Show 1 card per slide for all screen sizes
        return 1;
    }

    // Initialize slider
    function init() {
        console.log('Initializing slider with', slider.slides.length, 'slides');
        
        if (!slider.track || slider.slides.length === 0) {
            console.error('Slider elements not found!');
            return;
        }
        
        // Set proper width to each slide based on slides per view
        updateSlideWidth();
        
        // Create dot indicators
        createDots();
        
        // Initial update
        updateSlider();
        
        // Auto-play
        startAutoPlay();
        
        // Button event listeners
        if (slider.prevBtn) {
            console.log('Adding click handler to prev button');
            slider.prevBtn.addEventListener('click', prevSlide);
        }
        
        if (slider.nextBtn) {
            console.log('Adding click handler to next button');
            slider.nextBtn.addEventListener('click', nextSlide);
        }
        
        // Pause on hover
        slider.track.addEventListener('mouseenter', stopAutoPlay);
        slider.track.addEventListener('mouseleave', startAutoPlay);
        
        // Handle window resize
        window.addEventListener('resize', handleResize);
        
        console.log('Slider initialized successfully!');
    }

    function updateSlideWidth() {
        // Force single slide on mobile, multiple on desktop
        if (window.innerWidth <= 768) {
            slider.slides.forEach(slide => {
                slide.style.minWidth = '100%';
                slide.style.width = '100%';
            });
        } else {
            // Ensure slides have the correct width with gap consideration for desktop
            const gap = 24; // Match the CSS gap value
            const slideWidth = `calc(${100 / slider.slidesPerView}% - ${gap * (slider.slidesPerView - 1) / slider.slidesPerView}px)`;
            
            slider.slides.forEach(slide => {
                slide.style.minWidth = slideWidth;
            });
        }
    }

    function createDots() {
        if (!slider.dots) return;
        
        slider.dots.innerHTML = '';
        
        // For single slide view, create dot for each slide
        let maxDots;
        if (slider.slidesPerView === 1) {
            maxDots = slider.slides.length;
        } else {
            maxDots = Math.max(1, slider.slides.length - slider.slidesPerView + 1);
        }
        
        console.log('Creating', maxDots, 'dots for navigation');
        
        for (let i = 0; i < maxDots; i++) {
            const dot = document.createElement('button');
            dot.className = i === 0 ? 'dot-control active' : 'dot-control';
            dot.setAttribute('aria-label', `Go to slide ${i+1}`);
            dot.addEventListener('click', () => goToSlide(i));
            slider.dots.appendChild(dot);
        }
    }

    function updateSlider() {
        if (!slider.track) return;
        
        console.log('Updating slider. Current slide:', slider.currentSlide, 'Slides per view:', slider.slidesPerView);
        
        // For mobile (1 slide per view), calculate differently
        let translatePercent;
        if (slider.slidesPerView === 1) {
            // Simple calculation for single slide display
            translatePercent = -slider.currentSlide * 100;
        } else {
            // Calculate exact percentage to move for multiple slides
            const slideWidth = 100 / slider.slidesPerView;
            translatePercent = -slider.currentSlide * slideWidth;
        }
        
        console.log('Transform percentage:', translatePercent);
        
        // Apply transform with hardware acceleration
        slider.track.style.transform = `translate3d(${translatePercent}%, 0, 0)`;
        
        // Update dots
        if (slider.dots) {
            const dots = slider.dots.querySelectorAll('.dot-control');
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === slider.currentSlide);
            });
        }
        
        // Update button states
        updateButtonStates();
    }

    function updateButtonStates() {
        if (!slider.prevBtn || !slider.nextBtn) return;
        
        // Calculate max slide position based on slides per view
        let maxSlide;
        if (slider.slidesPerView === 1) {
            maxSlide = slider.slides.length - 1;
        } else {
            maxSlide = Math.max(0, slider.slides.length - slider.slidesPerView);
        }
        
        // Disable previous button at first slide
        slider.prevBtn.disabled = slider.currentSlide <= 0;
        
        // Disable next button at last slide
        slider.nextBtn.disabled = slider.currentSlide >= maxSlide;
    }

    function nextSlide() {
        console.log('Next slide clicked');
        
        if (slider.isTransitioning) return;
        
        // Calculate max slide position based on slides per view
        let maxSlide;
        if (slider.slidesPerView === 1) {
            maxSlide = slider.slides.length - 1;
        } else {
            maxSlide = Math.max(0, slider.slides.length - slider.slidesPerView);
        }
        
        if (slider.currentSlide < maxSlide) {
            slider.currentSlide++;
            slideTransition();
        }
    }

    function prevSlide() {
        console.log('Previous slide clicked');
        
        if (slider.isTransitioning) return;
        
        if (slider.currentSlide > 0) {
            slider.currentSlide--;
            slideTransition();
        }
    }

    function goToSlide(index) {
        console.log('Going to slide', index);
        
        if (slider.isTransitioning || index === slider.currentSlide) return;
        
        // Keep index in bounds based on slides per view
        let maxSlide;
        if (slider.slidesPerView === 1) {
            maxSlide = slider.slides.length - 1;
        } else {
            maxSlide = Math.max(0, slider.slides.length - slider.slidesPerView);
        }
        
        slider.currentSlide = Math.min(Math.max(0, index), maxSlide);
        slideTransition();
    }

    function slideTransition() {
        slider.isTransitioning = true;
        updateSlider();
        
        // Reset transition flag
        setTimeout(() => {
            slider.isTransitioning = false;
        }, 400);
    }

    function startAutoPlay() {
        stopAutoPlay(); // Clear any existing interval
        
        // Only autoplay if we have more slides than viewable
        if (slider.slides.length > slider.slidesPerView) {
            slider.autoPlayInterval = setInterval(() => {
                // Loop back to start if we reach the end
                const maxSlide = Math.max(0, slider.slides.length - slider.slidesPerView);
                if (slider.currentSlide >= maxSlide) {
                    slider.currentSlide = 0;
                } else {
                    slider.currentSlide++;
                }
                updateSlider();
            }, 5000); // 5 seconds interval
        }
    }

    function stopAutoPlay() {
        if (slider.autoPlayInterval) {
            clearInterval(slider.autoPlayInterval);
            slider.autoPlayInterval = null;
        }
    }

    function handleResize() {
        // Debounce resize events
        clearTimeout(window.resizeTimeout);
        window.resizeTimeout = setTimeout(() => {
            const newSlidesPerView = getSlidesPerView();
            console.log('Resize detected. New slides per view:', newSlidesPerView);
            
            if (newSlidesPerView !== slider.slidesPerView) {
                slider.slidesPerView = newSlidesPerView;
                console.log('Updating slider for new slides per view');
                
                // Update slide widths
                updateSlideWidth();
                
                // Make sure current slide is still valid
                let maxSlide;
                if (slider.slidesPerView === 1) {
                    maxSlide = slider.slides.length - 1;
                } else {
                    maxSlide = Math.max(0, slider.slides.length - slider.slidesPerView);
                }
                
                if (slider.currentSlide > maxSlide) {
                    slider.currentSlide = maxSlide;
                }
                
                // Recreate dots and update display
                createDots();
                updateSlider();
            }
        }, 250);
    }

    // Start the slider
    init();
    
    // Export API for potential external use
    window.testimonialSlider = {
        next: nextSlide,
        prev: prevSlide,
        goTo: goToSlide
    };
});
