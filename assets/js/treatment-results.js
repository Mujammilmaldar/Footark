/**
 * Treatment Results Slider - Mobile Responsive
 * Desktop: 3 cards | Tablet: 2 cards | Mobile: 1 card
 */

class TreatmentResultsSlider {
    constructor() {
        this.slider = document.getElementById('resultsSliderTrack');
        this.dotsContainer = document.getElementById('resultsSliderDots');
        this.prevBtn = document.getElementById('resultsPrevBtn');
        this.nextBtn = document.getElementById('resultsNextBtn');
        
        this.cards = Array.from(this.slider.children);
        this.currentIndex = 0;
        this.cardsPerView = this.getCardsPerView();
        this.totalSlides = Math.ceil(this.cards.length / this.cardsPerView);
        
        this.autoplayInterval = null;
        this.autoplayDelay = 5000; // 5 seconds
        this.isAutoplayPaused = false;
        
        this.init();
    }
    
    init() {
        this.createDots();
        this.bindEvents();
        this.updateSlider();
        this.startAutoplay();
        
        // Handle resize
        window.addEventListener('resize', this.handleResize.bind(this));
    }
    
    getCardsPerView() {
        const screenWidth = window.innerWidth;
        if (screenWidth >= 1025) return 3; // Desktop
        if (screenWidth >= 769) return 2;  // Tablet
        return 1; // Mobile
    }
    
    createDots() {
        this.dotsContainer.innerHTML = '';
        
        for (let i = 0; i < this.totalSlides; i++) {
            const dot = document.createElement('button');
            dot.className = `results-dot ${i === 0 ? 'active' : ''}`;
            dot.setAttribute('aria-label', `Go to slide ${i + 1}`);
            dot.addEventListener('click', () => this.goToSlide(i));
            this.dotsContainer.appendChild(dot);
        }
    }
    
    bindEvents() {
        // Arrow buttons
        this.prevBtn.addEventListener('click', () => this.prevSlide());
        this.nextBtn.addEventListener('click', () => this.nextSlide());
        
        // Touch/swipe support
        let startX = 0;
        let endX = 0;
        
        this.slider.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
            this.pauseAutoplay();
        });
        
        this.slider.addEventListener('touchend', (e) => {
            endX = e.changedTouches[0].clientX;
            this.handleSwipe(startX, endX);
            this.resumeAutoplay();
        });
        
        // Mouse events for desktop
        this.slider.addEventListener('mouseenter', () => this.pauseAutoplay());
        this.slider.addEventListener('mouseleave', () => this.resumeAutoplay());
        
        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') this.prevSlide();
            if (e.key === 'ArrowRight') this.nextSlide();
        });
    }
    
    handleSwipe(startX, endX) {
        const threshold = 50; // Minimum swipe distance
        const diff = startX - endX;
        
        if (Math.abs(diff) > threshold) {
            if (diff > 0) {
                this.nextSlide(); // Swipe left
            } else {
                this.prevSlide(); // Swipe right
            }
        }
    }
    
    goToSlide(index) {
        this.currentIndex = Math.max(0, Math.min(index, this.totalSlides - 1));
        this.updateSlider();
        this.resetAutoplay();
    }
    
    nextSlide() {
        this.currentIndex = (this.currentIndex + 1) % this.totalSlides;
        this.updateSlider();
        this.resetAutoplay();
    }
    
    prevSlide() {
        this.currentIndex = this.currentIndex === 0 ? this.totalSlides - 1 : this.currentIndex - 1;
        this.updateSlider();
        this.resetAutoplay();
    }
    
    updateSlider() {
        if (!this.slider) return;
        
        // Get container and card dimensions
        const containerWidth = this.slider.parentElement.offsetWidth;
        const gap = window.innerWidth <= 768 ? 16 : (window.innerWidth <= 1024 ? 20 : 24);
        
        // Calculate card width based on viewport
        let cardWidth;
        if (this.cardsPerView === 1) {
            cardWidth = containerWidth;
        } else if (this.cardsPerView === 2) {
            cardWidth = (containerWidth - gap) / 2;
        } else {
            cardWidth = (containerWidth - (gap * 2)) / 3;
        }
        
        // Calculate slide distance (card width + gap)
        const slideDistance = cardWidth + gap;
        
        // Calculate maximum possible slides
        const maxSlides = this.cards.length - this.cardsPerView;
        
        // Ensure current index is within bounds
        this.currentIndex = Math.max(0, Math.min(this.currentIndex, maxSlides));
        
        // Calculate transform value in pixels
        const translateX = this.currentIndex * slideDistance;
        
        // Apply transform
        this.slider.style.transform = `translateX(-${translateX}px)`;
        
        // Update dots
        const dots = this.dotsContainer.querySelectorAll('.results-dot');
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === this.currentIndex);
        });
        
        // Update arrow states
        this.updateArrowStates();
        
        // Update card sizes
        this.updateCardSizes();
    }
    
    updateCardSizes() {
        const gap = window.innerWidth <= 768 ? 16 : (window.innerWidth <= 1024 ? 20 : 24);
        
        this.cards.forEach(card => {
            if (this.cardsPerView === 1) {
                card.style.flex = `0 0 100%`;
                card.style.marginRight = '0';
            } else if (this.cardsPerView === 2) {
                card.style.flex = `0 0 calc(50% - ${gap/2}px)`;
                card.style.marginRight = `${gap}px`;
            } else {
                card.style.flex = `0 0 calc(33.333% - ${gap*2/3}px)`;
                card.style.marginRight = `${gap}px`;
            }
        });
        
        // Remove margin from last visible cards
        this.cards.forEach((card, index) => {
            if ((index + 1) % this.cardsPerView === 0) {
                card.style.marginRight = '0';
            }
        });
    }
    
    updateArrowStates() {
        const maxSlides = this.cards.length - this.cardsPerView;
        this.prevBtn.disabled = this.currentIndex === 0;
        this.nextBtn.disabled = this.currentIndex >= maxSlides;
    }
    
    handleResize() {
        const newCardsPerView = this.getCardsPerView();
        
        if (newCardsPerView !== this.cardsPerView) {
            this.cardsPerView = newCardsPerView;
            this.totalSlides = Math.ceil(this.cards.length / this.cardsPerView);
            
            // Adjust current index if needed
            if (this.currentIndex >= this.totalSlides) {
                this.currentIndex = this.totalSlides - 1;
            }
            
            this.createDots();
            this.updateSlider();
        }
    }
    
    startAutoplay() {
        if (this.autoplayInterval) {
            clearInterval(this.autoplayInterval);
        }
        
        this.autoplayInterval = setInterval(() => {
            if (!this.isAutoplayPaused) {
                this.nextSlide();
            }
        }, this.autoplayDelay);
    }
    
    pauseAutoplay() {
        this.isAutoplayPaused = true;
    }
    
    resumeAutoplay() {
        this.isAutoplayPaused = false;
    }
    
    resetAutoplay() {
        this.startAutoplay();
    }
    
    destroy() {
        if (this.autoplayInterval) {
            clearInterval(this.autoplayInterval);
        }
        window.removeEventListener('resize', this.handleResize.bind(this));
    }
}

// Initialize slider when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    // Check if the slider elements exist
    const sliderTrack = document.getElementById('resultsSliderTrack');
    if (sliderTrack) {
        window.treatmentResultsSlider = new TreatmentResultsSlider();
    }
});

// Cleanup on page unload
window.addEventListener('beforeunload', () => {
    if (window.treatmentResultsSlider) {
        window.treatmentResultsSlider.destroy();
    }
});

// Additional utility functions
const TreatmentResultsUtils = {
    // Lazy load images
    initLazyLoading() {
        const images = document.querySelectorAll('.result-image');
        
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        if (img.dataset.src) {
                            img.src = img.dataset.src;
                            img.removeAttribute('data-src');
                            imageObserver.unobserve(img);
                        }
                    }
                });
            });
            
            images.forEach(img => imageObserver.observe(img));
        }
    },
    
    // Add loading animation
    showLoading() {
        const container = document.querySelector('.results-slider-container');
        if (container) {
            container.classList.add('loading');
        }
    },
    
    hideLoading() {
        const container = document.querySelector('.results-slider-container');
        if (container) {
            container.classList.remove('loading');
        }
    },
    
    // Smooth scroll to section
    scrollToSection() {
        const section = document.querySelector('.treatment-results-section');
        if (section) {
            section.scrollIntoView({ 
                behavior: 'smooth',
                block: 'start'
            });
        }
    }
};

// Export for use in other scripts
if (typeof module !== 'undefined' && module.exports) {
    module.exports = { TreatmentResultsSlider, TreatmentResultsUtils };
}
