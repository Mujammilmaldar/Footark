<?php include '../includes/header.php';?>

    <!-- Hero Banner -->
    <section class="hero-banner">
        <div class="container">
            <div class="hero-container">
                <div class="inner-container">
                    <div class="hero-breadcrumb" style="margin-bottom: 15px; font-size: 14px; color: #ffffff;">
                        <a href="../index.php" style="text-decoration: none; color: #ffffff;">Home</a> &gt;
                        <a href="../services.php" style="text-decoration: none; color: #ffffff;">Services</a> &gt;
                        <a href="../conditions.php" style="text-decoration: none; color: #ffffff;">Conditions</a> &gt;
                        <span style="color: #ffffff;">Ankle Impingement</span>
                    </div>
                    <div class="hero-content">
                        <h1>Ankle Impingement Treatment</h1>
                        
                        <!-- Mobile Image - Shows after heading on mobile only -->
                        <div class="mobile-hero-image desktop-hidden">
                            <img src="../assets/images/impegment.jpg" alt="Ankle Impingement">
                        </div>
                        
                        <p>Expert treatment for ankle impingement syndrome. Our specialized approach addresses both anterior and posterior impingement, helping patients return to pain-free movement and activity.</p>
                        <div class="hero-buttons">
                            <a href="../contact.php" class="btn-primary">Schedule Consultation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="main-wrapper">
        <div class="container">
            <div class="content-layout">
                
                <div class="sidebar">
                    <div class="widget">
                        <div class="widget-header">Table of Contents</div>
                        <div class="widget-content">
                            <nav class="toc-nav">
                                <ul class="toc-list">
                                    <li><a href="#understanding" class="toc-link">Understanding Ankle Impingement</a></li>
                                    <li><a href="#anatomy" class="toc-link">Ankle Anatomy</a></li>
                                    <li><a href="#joint-function" class="toc-link">Joint Function</a></li>
                                    <li><a href="#bone-structure" class="toc-link">Bone Structure</a></li>
                                    <li><a href="#os-trigonum" class="toc-link">Os Trigonum</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="widget widget-dr-kini mobile-hidden">
                        <img src="../assets/images/home-about/Dr.AbhishekKini-Homepage.webp" alt="Ankle Impingement">
                        <h6 style="margin-bottom:0px;margin-top:10px;padding-bottom:0px;">Dr. Abhishek Kini</h6>
                        <p style="font-style: italic;">Foot & Ankle Specialist</p>
                        <a href="../about.php" class="view-all-btn contact-btn">Know More</a>
                    </div>
                </div>
                <div class="main-content">
                    <div class="content-section" id="understanding">
                        <h2>Understanding Ankle Impingement</h2>
                        <div class="content-with-image">
                            <div class="content-text">
                                <p>Ankle impingement occurs when soft tissues around the ankle are pinched or nipped. Impingement mainly happens when the ankle is fully bent up or down, leading to pain either in the front or back of the ankle joint. Problems near the front of the joint are usually associated with past ankle sprains. Pinching in the back of the ankle occurs most often in ballet dancers and is usually due to irritation around a bony prominence on the back of the ankle.</p>
                            </div>
                            <div class="content-image-card">
                                <img src="../assets/images/impegment.jpg" alt="Ankle Impingement" style="width: 100%; height: auto; object-fit: contain;">
                            </div>
                        </div>
                    </div>

                    <div class="content-section" id="anatomy">
                        <h3>What parts of the ankle are involved?</h3>
                        <p>The ankle joint is formed where the bones of the lower leg, the tibia and the fibula, connect above the anklebone, called the talus. The tibia is the main bone of the lower leg. The fibula is the small, thin bone along the outer edge of the tibia.</p>
                    </div>

                    <div class="content-section" id="joint-function">
                        <h3>Ankle Joint Function</h3>
                        <div class="content-with-image">
                            <div class="content-text">
                                <p>The ankle joint is a hinge that allows the foot to move up (dorsiflexion) and down (plantarflexion). The ankle is a synovial joint, meaning it is enclosed in a joint capsule that contains a lubricant called synovial fluid.</p>
                            </div>
                        </div>
                    </div>

                    <div class="content-section" id="bone-structure">
                        <h3>Bone Structure and Relationships</h3>
                        <p>The talus rests on the the heelbone (the calcaneus). The joint formed between these two bones is called the subtalar joint. The calcaneus extends backward below the ankle, forming a shelf on which the talus rests.</p>
                    </div>

                    <div class="content-section" id="os-trigonum">
                        <h3>Os Trigonum and Impingement</h3>
                        <p>Two small bony bumps, called tuberosities, project from the back of the talus, one on the inside (medial) edge and one on the outer (lateral) edge. In some people the lateral tuberosity is not united to the talus. The separate piece of bone is called an os trigonum. This separation of the os trigonum from the talus is usually not a fracture. About 15 percent of people have an os trigonum. An os trigonum sometimes causes problems of impingement in the back of the ankle.</p>
                    </div>

                </div>
                <div class="widget widget-dr-kini desktop-hidden">
                    <img src="../assets/images/home-about/Dr.AbhishekKini-Homepage.webp" alt="Ankle Impingement">
                    <h6 style="margin-bottom:0px;margin-top:10px;padding-bottom:0px;">Dr. Abhishek Kini</h6>
                    <p style="font-style: italic;">Foot & Ankle Specialist</p>
                    <a href="../about.php" class="view-all-btn contact-btn">Know More</a>
                </div>

                <div class="widget desktop-hidden">
                    <div class="widget-header">Office Location</div>
                    <div class="widget-content">
                        <p><i class="fas fa-map-marker-alt"></i> <strong>Mumbai Office</strong></p>
                        <p style="margin-left: 20px;">Mumbai, India</p>
                        <p><i class="fas fa-phone"></i> <strong>Phone:</strong> +91 98765 43210</p>
                        <p><i class="fas fa-envelope"></i> <strong>Email:</strong> info@footark.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include '../includes/footer.php'; ?>

    <script>
        // Smooth scrolling for all internal links
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

        // Table of Contents active state
        function updateActiveTOC() {
            const sections = document.querySelectorAll('.content-section');
            const tocLinks = document.querySelectorAll('.toc-link');
            
            let current = '';
            const scrollPos = window.scrollY + 150; // Offset for header
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                
                if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
                    current = section.getAttribute('id');
                }
            });
            
            tocLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        }

        // Update TOC on scroll
        window.addEventListener('scroll', updateActiveTOC);
        
        // Update TOC on load
        document.addEventListener('DOMContentLoaded', updateActiveTOC);

        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.style.boxShadow = '0 2px 15px rgba(0,0,0,0.15)';
            } else {
                header.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
            }
        });
    </script>
</body>
</html>

