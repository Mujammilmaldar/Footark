<?php include '../includes/header.php'; ?>

<!-- Google Analytics Script -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2QML9M8PGF"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-2QML9M8PGF');
</script>

<!-- Reading Progress Bar -->
<div class="blog-progress-bar" id="reading-progress"></div>

<script>
// Add blog-wrapper class to body
document.body.className += ' blog-wrapper';
</script>

<!-- Hero Section - Magazine Style -->
<section class="blog-hero-section">
    <div class="blog-container">
        <div class="blog-hero-content">
            <span class="blog-category-badge">Sports Medicine</span>
            <h1 class="blog-main-title">Injury Prevention Strategies For Athletes & Sportspersons</h1>
            <div class="blog-meta-info">
                <div class="blog-meta-item">
                    <i class="fas fa-user blog-meta-icon"></i>
                    <span>Dr. Sports Medicine Team</span>
                </div>
            </div>
            <p class="blog-intro-text">Discover essential strategies to keep your feet and ankles in peak condition for athletic performance and injury prevention. Learn from expert recommendations and proven techniques.</p>
        </div>
    </div>
</section>

<!-- Main Content Layout -->
<div class="blog-container">
    <div class="blog-layout">
        <!-- Main Content Column -->
        <main class="blog-main-column">
            
            <!-- Table of Contents - Horizontal Format -->
            <div class="blog-toc-horizontal">
                <h3 class="blog-toc-title">
                    <i class="fas fa-list"></i>
                    Table of Contents
                </h3>
                <ul class="blog-toc-horizontal-list">
                    <li class="blog-toc-horizontal-item">
                        <a href="#why-care" class="blog-toc-horizontal-link">Why Athletic Foot Care Matters</a>
                    </li>
                    <li class="blog-toc-horizontal-item">
                        <a href="#injuries" class="blog-toc-horizontal-link">Understanding Sports Injuries</a>
                    </li>
                    <li class="blog-toc-horizontal-item">
                        <a href="#exercises" class="blog-toc-horizontal-link">Essential Exercises & Stretches</a>
                    </li>
                    <li class="blog-toc-horizontal-item">
                        <a href="#prevention" class="blog-toc-horizontal-link">Prevention Guidelines</a>
                    </li>
                    <li class="blog-toc-horizontal-item">
                        <a href="#footwear" class="blog-toc-horizontal-link">Proper Footwear</a>
                    </li>
                    <li class="blog-toc-horizontal-item">
                        <a href="#recovery" class="blog-toc-horizontal-link">Recovery & Rehabilitation</a>
                    </li>
                </ul>
            </div>
            
            <!-- Introduction Section -->
            <article class="blog-content-card" id="why-care">
                <div class="blog-card-header">
                    <h2>Why Athletic Foot Care Matters</h2>
                </div>
                <div class="blog-card-body">
                    <p>All sports require excellent fitness of lower limbs as they support body weight, provide stability, and enable movement. Healthy feet and ankles improve athletic performance, prevent injuries, and enhance recovery.</p>
                    
                    <p>A runner with healthy feet and ankles can run faster and more efficiently. A basketball player can jump higher, change direction quickly, and land safely without risking sprains or fractures.</p>
                </div>
            </article>

            <!-- Common Injuries Section -->
            <article class="blog-content-card" id="injuries">
                <div class="blog-card-header">
                    <h2>Understanding Sports Injuries</h2>
                </div>
                <div class="blog-card-body">
                    <p>Lower limbs are prone to injuries more than any other body part. Knees and feet & ankles are the two most common injury areas among sports personnel.</p>

                    <div class="blog-medical-note">
                        <h4>Medical Disclaimer</h4>
                        <p>Always consult healthcare professionals for proper diagnosis and treatment.</p>
                    </div>

                    <h3>Common Foot Injuries</h3>
                    <div class="blog-data-section">
                        <div class="blog-table-container">
                            <table class="blog-data-table">
                                <thead>
                                    <tr>
                                        <th>Condition</th>
                                        <th>Common Cause</th>
                                        <th>Recovery Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Plantar Fasciitis</td>
                                        <td>Overuse, Poor Footwear</td>
                                        <td>2-6 weeks</td>
                                    </tr>
                                    <tr>
                                        <td>Ankle Sprains</td>
                                        <td>Twisting, Rolling</td>
                                        <td>2-8 weeks</td>
                                    </tr>
                                    <tr>
                                        <td>Stress Fractures</td>
                                        <td>Repetitive Impact</td>
                                        <td>6-12 weeks</td>
                                    </tr>
                                    <tr>
                                        <td>Achilles Tendonitis</td>
                                        <td>Overuse, Tight Muscles</td>
                                        <td>4-8 weeks</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Exercise Section -->
            <article class="blog-content-card" id="exercises">
                <div class="blog-card-header">
                    <h2>Essential Exercises & Stretches</h2>
                </div>
                <div class="blog-card-body">
                    <p>Prevent injuries with exercises that improve flexibility, strength, and stability of feet and ankles:</p>

                    <div class="blog-exercise-gallery">
                        <div class="blog-exercise-card">
                            <div class="blog-exercise-image" style="background: #f8f9fa; display: flex; align-items: center; justify-content: center; color: var(--color-primary); font-size: 2rem;">
                                <i class="fas fa-foot-print"></i>
                            </div>
                            <div class="blog-exercise-content">
                                <h4 class="blog-exercise-title">Toe Raises</h4>
                                <p class="blog-exercise-description">Lift toes while keeping heels down. Hold 3 seconds. Repeat 10 times.</p>
                            </div>
                        </div>

                        <div class="blog-exercise-card">
                            <div class="blog-exercise-image" style="background: #f1f3f4; display: flex; align-items: center; justify-content: center; color: var(--color-secondary); font-size: 2rem;">
                                <i class="fas fa-running"></i>
                            </div>
                            <div class="blog-exercise-content">
                                <h4 class="blog-exercise-title">Heel Raises</h4>
                                <p class="blog-exercise-description">Lift heels while keeping toes down. Hold 3 seconds. Repeat 10 times.</p>
                            </div>
                        </div>

                        <div class="blog-exercise-card">
                            <div class="blog-exercise-image" style="background: #f8f9fa; display: flex; align-items: center; justify-content: center; color: var(--color-primary); font-size: 2rem;">
                                <i class="fas fa-sync-alt"></i>
                            </div>
                            <div class="blog-exercise-content">
                                <h4 class="blog-exercise-title">Ankle Circles</h4>
                                <p class="blog-exercise-description">Rotate ankle clockwise and counterclockwise. 10 circles each direction.</p>
                            </div>
                        </div>

                        <div class="blog-exercise-card">
                            <div class="blog-exercise-image" style="background: #f1f3f4; display: flex; align-items: center; justify-content: center; color: var(--color-secondary); font-size: 2rem;">
                                <i class="fas fa-dumbbell"></i>
                            </div>
                            <div class="blog-exercise-content">
                                <h4 class="blog-exercise-title">Resistance Band</h4>
                                <p class="blog-exercise-description">Use band to flex and point foot. 10 repetitions each direction.</p>
                            </div>
                        </div>
                    </div>

                    <div class="blog-medical-note">
                        <h4>Exercise Safety</h4>
                        <p>Perform 3 times weekly. Stop if you feel pain and consult a healthcare professional.</p>
                    </div>
                </div>
            </article>

            <!-- Prevention Guidelines -->
            <article class="blog-content-card" id="prevention">
                <div class="blog-card-header">
                    <h2>Prevention Guidelines</h2>
                </div>
                <div class="blog-card-body">
                    <p>Follow these evidence-based recommendations to prevent foot and ankle injuries:</p>

                    <h3 id="footwear">Proper Footwear Selection</h3>
                    <p>Wear supportive shoes that fit well and are appropriate for your activity. Quality footwear with good cushioning, arch support, and stability protects feet and ankles from impact and twisting forces.</p>

                    <h3>Warm-up Protocols</h3>
                    <p>Always warm up before physical activity. Include light cardio, dynamic stretches, and sport-specific drills to prepare muscles, tendons, and ligaments.</p>

                    <h3>Listen to Your Body</h3>
                    <p>Do not ignore pain or discomfort in your feet or ankles. Avoid pushing beyond your fitness level to prevent fatigue-related accidents.</p>

                    <h3 id="recovery">Recovery and Rehabilitation</h3>
                    <p>If you have had previous foot or ankle injuries, consult healthcare professionals for proper recovery programs including rest, therapy, and gradual return to activity.</p>

                    <div class="blog-quote-modern">
                        <p class="blog-quote-text">Prevention is always better than treatment. Consistent care and attention to your feet and ankles will keep you performing at your best.</p>
                        <div class="blog-quote-author">- Sports Medicine Guidelines</div>
                    </div>
                </div>
            </article>

            <div class="blog-divider-fancy"></div>

        </main>

        <!-- Sidebar Column -->
        <aside class="blog-sidebar-column">
            <!-- Related Articles Widget -->
            <!-- <div class="blog-sidebar-widget">
                <div class="blog-widget-header">
                    <h3 class="blog-widget-title">
                        <i class="fas fa-newspaper"></i>
                        Related Articles
                    </h3>
                </div>
                <div class="blog-widget-body">
                    <div class="blog-related-article">
                        <div class="blog-related-thumbnail"></div>
                        <div class="blog-related-content">
                            <h4>Ankle Sprain Recovery Guide</h4>
                            <p>Complete rehabilitation protocol for ankle sprains</p>
                        </div>
                    </div>
                    <div class="blog-related-article">
                        <div class="blog-related-thumbnail"></div>
                        <div class="blog-related-content">
                            <h4>Sports Footwear Selection</h4>
                            <p>How to choose the right shoes for your sport</p>
                        </div>
                    </div>
                    <div class="blog-related-article">
                        <div class="blog-related-thumbnail"></div>
                        <div class="blog-related-content">
                            <h4>Plantar Fasciitis Prevention</h4>
                            <p>Strategies to avoid heel pain in athletes</p>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Quick Contact Widget -->
            <div class="blog-sidebar-widget">
                <div class="blog-widget-header">
                    <h3 class="blog-widget-title">
                        <i class="fas fa-newspaper"></i>
                        Related Articles
                    </h3>
                </div>
                <div class="blog-widget-body">
                    <div class="blog-related-article">
                        <div class="blog-related-thumbnail"></div>
                        <div class="blog-related-content">
                            <h4>Ankle Sprain Recovery Guide</h4>
                            <p>Complete rehabilitation protocol for ankle sprains</p>
                        </div>
                    </div>
                    <div class="blog-related-article">
                        <div class="blog-related-thumbnail"></div>
                        <div class="blog-related-content">
                            <h4>Sports Footwear Selection</h4>
                            <p>How to choose the right shoes for your sport</p>
                        </div>
                    </div>
                    <div class="blog-related-article">
                        <div class="blog-related-thumbnail"></div>
                        <div class="blog-related-content">
                            <h4>Plantar Fasciitis Prevention</h4>
                            <p>Strategies to avoid heel pain in athletes</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Contact Widget -->
            <div class="blog-sidebar-widget" style="margin-top: 2rem;">
                <div class="blog-widget-header">
                    <h3 class="blog-widget-title">
                        <i class="fas fa-phone"></i>
                        Quick Contact
                    </h3>
                </div>
                <div class="blog-widget-body">
                    <p style="font-size: var(--font-size-body-small); color: var(--color-text-secondary); margin-bottom: var(--spacing-md);">
                        Need immediate advice? Contact our specialists.
                    </p>
                    <a href="../contact.php" class="blog-cta-button" style="display: block; text-align: center; padding: var(--spacing-sm) var(--spacing-md); font-size: var(--font-size-body-small);">
                        Contact Us
                    </a>
                </div>
            </div>
        </aside>
    </div>
</div>

<?php include "../includes/footer.php"; ?>

<script>
// Reading progress bar functionality
window.addEventListener('scroll', function() {
    const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const scrolled = (winScroll / height) * 100;
    document.getElementById("reading-progress").style.width = scrolled + "%";
});

// Active section highlighting for table of contents
function updateActiveSection() {
    const sections = document.querySelectorAll('article[id], h3[id]');
    const tocLinks = document.querySelectorAll('.blog-toc-horizontal-link');
    const tocItems = document.querySelectorAll('.blog-toc-horizontal-item');
    
    let currentSection = '';
    const scrollPosition = window.scrollY + 100;
    
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.offsetHeight;
        
        if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
            currentSection = section.id;
        }
    });
    
    // Remove active class from all items
    tocItems.forEach(item => item.classList.remove('active'));
    
    // Add active class to current section
    if (currentSection) {
        const activeLink = document.querySelector(`.blog-toc-horizontal-link[href="#${currentSection}"]`);
        if (activeLink) {
            activeLink.closest('.blog-toc-horizontal-item').classList.add('active');
        }
    }
}

// Update active section on scroll
window.addEventListener('scroll', updateActiveSection);
window.addEventListener('load', updateActiveSection);

// Smooth scrolling for table of contents
document.querySelectorAll('.blog-toc-horizontal-link').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);
        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Add smooth animations on scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe all content cards for animation
document.querySelectorAll('.blog-content-card, .blog-exercise-card').forEach(card => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(20px)';
    card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(card);
});
</script>

</body>
</html>

