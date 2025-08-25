/* ==========================================================================
   PROCEDURES PAGE JAVASCRIPT
   ========================================================================== */

document.addEventListener('DOMContentLoaded', function() {
    
    // Smooth scrolling for procedure links
    const procedureLinks = document.querySelectorAll('a[href^="#"]');
    
    procedureLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                
                // Add highlight effect
                targetElement.style.transition = 'all 0.3s ease';
                targetElement.style.transform = 'scale(1.02)';
                targetElement.style.boxShadow = '0 10px 30px rgba(232, 90, 79, 0.2)';
                
                setTimeout(() => {
                    targetElement.style.transform = 'scale(1)';
                    targetElement.style.boxShadow = '';
                }, 1000);
            }
        });
    });
    
    // Intersection Observer for scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
            }
        });
    }, observerOptions);
    
    // Observe all procedure items
    const procedureItems = document.querySelectorAll('.procedure-item');
    procedureItems.forEach(item => {
        item.style.animationPlayState = 'paused';
        observer.observe(item);
    });
    
    // Add loading state to CTA buttons
    const ctaButtons = document.querySelectorAll('.cta-btn');
    
    ctaButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            if (this.getAttribute('href') === 'contact.php') {
                // Add loading state for contact page navigation
                this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Loading...';
                this.style.pointerEvents = 'none';
            }
        });
    });
    
    // Enhanced hover effects for procedure items
    const items = document.querySelectorAll('.procedure-item');
    
    items.forEach(item => {
        item.addEventListener('mouseenter', function() {
            // Add subtle animation to nearby items
            const allItems = document.querySelectorAll('.procedure-item');
            allItems.forEach(otherItem => {
                if (otherItem !== this) {
                    otherItem.style.opacity = '0.7';
                    otherItem.style.transform = 'scale(0.98)';
                }
            });
        });
        
        item.addEventListener('mouseleave', function() {
            // Reset all items
            const allItems = document.querySelectorAll('.procedure-item');
            allItems.forEach(otherItem => {
                otherItem.style.opacity = '';
                otherItem.style.transform = '';
            });
        });
    });
    
    // Parallax effect for header section
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const header = document.querySelector('.page-header-section');
        
        if (header) {
            const speed = scrolled * 0.5;
            header.style.transform = `translateY(${speed}px)`;
        }
    });
    
    // Search functionality (if needed in future)
    function initSearchFilter() {
        const searchInput = document.getElementById('procedureSearch');
        
        if (searchInput) {
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                const procedures = document.querySelectorAll('.procedure-item');
                
                procedures.forEach(procedure => {
                    const title = procedure.querySelector('.procedure-title').textContent.toLowerCase();
                    const description = procedure.querySelector('.procedure-description').textContent.toLowerCase();
                    
                    if (title.includes(searchTerm) || description.includes(searchTerm)) {
                        procedure.style.display = 'block';
                        procedure.style.animation = 'fadeInUp 0.5s ease-out';
                    } else {
                        procedure.style.display = 'none';
                    }
                });
            });
        }
    }
    
    // Initialize search if element exists
    initSearchFilter();
    
    // Console log for development
    console.log('Procedures page JavaScript loaded successfully');
});
