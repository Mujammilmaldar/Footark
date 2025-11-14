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
                        <span style="color: #ffffff;">Toe Deformity</span>
                    </div>
                    <div class="hero-content">
                        <h1>Toe Deformity Treatment</h1>
                        
                        <!-- Mobile Image - Shows after heading on mobile only -->
                        <div class="mobile-hero-image desktop-hidden">
                            <img src="../assets/images/toedeformity.jpg" alt="Toe Deformity Treatment">
                        </div>
                        
                        <p>Expert treatment for toe deformities including hammertoes and claw toes. Our specialized approach addresses the root causes and provides effective solutions for improved foot function.</p>
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
                                    <li><a href="#understanding" class="toc-link">Understanding Toe Deformity</a></li>
                                    <li><a href="#causes" class="toc-link">Why Do They Become Deformed</a></li>
                                    <li><a href="#problems" class="toc-link">Problems They Cause</a></li>
                                    <li><a href="#diagnosis" class="toc-link">How is it Diagnosed</a></li>
                                    <li><a href="#solutions" class="toc-link">Simple Solutions</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="widget widget-dr-kini mobile-hidden">
                        <img src="../assets/images/home-about/Dr.AbhishekKini-Homepage.webp" alt="Toe Deformity">
                        <h6 style="margin-bottom:0px;margin-top:10px;padding-bottom:0px;">Dr. Abhishek Kini</h6>
                        <p style="font-style: italic;">Foot & Ankle Specialist</p>
                        <a href="../about.php" class="view-all-btn contact-btn">Know More</a>
                    </div>
                </div>
                <div class="main-content">
                    <div class="content-section" id="understanding">
                        <h2>Understanding Toe Deformity</h2>
                        <div class="content-with-image">
                            <div class="content-text">
                                <p>The small toes of the foot play an important role in movement, i.e. walking or running. They share the pressure with the big toe and help in pushing off with the foot.</p>
                            </div>
                            <div class="content-image-card">
                                <img src="../assets/images/toedeformity.jpg" alt="Toe Deformity" style="width: 100%; height: auto; object-fit: contain;">
                            </div>
                        </div>
                    </div>

                    <div class="content-section" id="causes">
                        <h3>Why do they become deformed?</h3>
                        <p>Toes become deformed when the pressures on the toe are stronger than their joints can resist. An injury to the toe may damage the joints, bones or the tendons surrounding the joint, which causes an imbalance in the muscle pull leading to a deformity. Ill fitting shoes, either because the shoe is tight or because it has a high heel, which tends to force the toes into the tip of the shoe can cause them to bend upwards. Any deformity of the adjacent toe, for example a bunion, may cause pressure symptoms in the 2nd toe, leading it to bend upwards to accommodate the big toe. Various other toe deformities can be caused by disorders affecting the neuromuscular system like polio, cerebral palsy, previously affected compartment syndrome of the leg/foot.</p>
                    </div>

                    <div class="content-section" id="problems">
                        <h3>What problems do deformed toes cause?</h3>
                        <p>The main problem with deformed toes is pain on top of the toes because they rub on shoes. This rubbing may simply be uncomfortable, or the skin may be rubbed raw. If the toes are bent upwards, particularly if it is stiff, the toe may press down and cause pain in the ball of the foot ("metatarsalgia"). Bent toes may rub on one another or on the big toe, especially if the big toe is bent towards the second toe (bunion).</p>
                    </div>

                    <div class="content-section" id="diagnosis">
                        <h3>How is it diagnosed?</h3>
                        <p>A clinical examination can diagnose any deformity. A x-ray may be asked to confirm associated problems in the foot like the bunion or a slightly long metatarsal bone.</p>
                    </div>

                    <div class="content-section" id="solutions">
                        <h3>My toes are curled and rub on my shoe. Is there anything simple I can do?</h3>
                        <p>The most important thing is to buy shoes which have enough room in the toe area for your toes to fit comfortably. Avoid high heels, which tend to force the toes down into the tip of the shoe. Small pads on the top or end of the toe may improve the discomfort.</p>
                    </div>

                </div>
                <div class="widget widget-dr-kini desktop-hidden">
                    <img src="../assets/images/home-about/Dr.AbhishekKini-Homepage.webp" alt="Toe Deformity">
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

