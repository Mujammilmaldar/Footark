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
                        <span style="color: #ffffff;">Foot & Ankle Fractures</span>
                    </div>
                    <div class="hero-content">
                        <h1>Foot & Ankle Fracture Treatment</h1>
                        
                        <!-- Mobile Image - Shows after heading on mobile only -->
                        <div class="mobile-hero-image desktop-hidden">
                            <img src="../assets/images/foot-ankle-arthritis-treatment.jpg" alt="Foot Ankle Fractures">
                        </div>
                        
                        <p>Expert care for foot and ankle fractures. Our specialized team provides comprehensive treatment for all types of bone breaks and fractures in the foot and ankle.</p>
                        <div class="hero-buttons">
                            <a href="../contact.php" class="btn-primary">Schedule Consultation</a>
                        </div>
                    </div>
                </div>
                <div class="image-container mobile-hidden">
                    <img src="../assets/images/foot-ankle-arthritis-treatment.jpg" alt="Foot Ankle Fractures">
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
                                    <li><a href="#understanding" class="toc-link">Understanding Fractures</a></li>
                                    <li><a href="#causes" class="toc-link">Common Causes</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="widget widget-dr-kini mobile-hidden">
                        <img src="../assets/images/home-about/Dr.AbhishekKini-Homepage.webp" alt="Foot Ankle Fractures">
                        <h6 style="margin-bottom:0px;margin-top:10px;padding-bottom:0px;">Dr. Abhishek Kini</h6>
                        <p style="font-style: italic;">Foot & Ankle Specialist</p>
                        <a href="../about.php" class="view-all-btn contact-btn">Know More</a>
                    </div>
                </div>
                <div class="main-content">
                    <div class="content-section" id="understanding">
                        <h2>Understanding Foot & Ankle Fractures</h2>
                        <div class="content-with-image">
                            <div class="content-text">
                                <p>A bone fracture is another term for a broken bone. Fractures can range from small cracks in the bone (hairline fractures) to breaks that have separated the bone into three or more pieces (comminuted fractures). Your ankles and feet are made up of some the most commonly injured bones and joints in the body, which makes them some of the most prone for breaks – broken toes are especially common.</p>
                                <p>The ankle is a hinge-type joint that connects the leg to the foot. Three bones fit together snugly here, and are supported by strong ligaments. An ankle fracture is a break of one or more of these bones. These fractures can sometimes be mistaken as sprains, as the symptoms are very similar. The foot (including toes) is very complex – made up of 33 joints, more than 100 muscles, and 26 bones varying in size. The foot is also broken up into 3 parts:</p>
                            </div>
                            <div class="content-image-card">
                                <img src="../assets/images/foot-ankle-arthritis-treatment.jpg" alt="Foot Ankle Fractures">
                            </div>
                        </div>
                        <ul>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Forefoot – toes (phalanges) and the metatarsals</li>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Midfoot – arches and top of foot</li>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Hindfoot – heel to the ankle</li>
                        </ul>
                    </div>

                    <div class="content-section" id="causes">
                        <h3>Some of the most common causes of ankle fractures are:</h3>
                        <ul>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Rolling the ankle (in or out)</li>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Severely twisting the ankle</li>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Over extension</li>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Severe impact & direct force on the ankle</li>
                        </ul>
                    </div>

                </div>
                <div class="widget widget-dr-kini desktop-hidden">
                    <img src="../assets/images/home-about/Dr.AbhishekKini-Homepage.webp" alt="Foot Ankle Fractures">
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
            const scrollPos = window.scrollY + 150;
            
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

        window.addEventListener('scroll', updateActiveTOC);
        document.addEventListener('DOMContentLoaded', updateActiveTOC);

        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.style.boxShadow = '0 2px 15px rgba(0,0,0,0.15)';
            } else {
                header.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
            }
        });
    </script>

