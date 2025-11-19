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
                        <span style="color: #ffffff;">Sesamoiditis</span>
                    </div>
                    <div class="hero-content">
                        <h1>Sesamoiditis Treatment</h1>
                        
                        <!-- Mobile Image - Shows after heading on mobile only -->
                        <div class="mobile-hero-image desktop-hidden">
                            <img src="../assets/images/sesamoiditis.webp" alt="Sesamoiditis Treatment">
                        </div>
                        
                        <p>Expert treatment for sesamoiditis and sesamoid bone injuries. Our specialized approach provides effective relief from pain under the great toe and helps restore normal function.</p>
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
                                    <li><a href="#understanding" class="toc-link">Understanding Sesamoiditis</a></li>
                                    <li><a href="#symptoms" class="toc-link">Symptoms</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="widget widget-dr-kini mobile-hidden">
                        <img src="../assets/images/home-about/Dr.AbhishekKini-Homepage.webp" alt="Sesamoiditis">
                        <h6 style="margin-bottom:0px;margin-top:10px;padding-bottom:0px;">Dr. Abhishek Kini</h6>
                        <p style="font-style: italic;">Foot & Ankle Specialist</p>
                        <a href="../about.php" class="view-all-btn contact-btn">Know More</a>
                    </div>
                </div>
                <div class="main-content">
                    <div class="content-section" id="understanding">
                        <h2>Understanding Sesamoiditis</h2>
                        <div class="content-with-image">
                            <div class="content-text">
                                <p>Most bones in the human body are connected to each other at joints. But there are a few bones that are not connected to any other bone. Instead, they are connected only to tendons or are embedded in muscle. These are the sesamoids. The kneecap (patella) is the largest sesamoid. Two other very small sesamoids (about the size of a kernel of corn) are found in the underside of the forefoot near the great toe, one on the outer side of the foot and the other closer to the middle of the foot.</p>
                                <p>Sesamoids act like pulleys. They provide a smooth surface over which the tendons slide, thus increasing the ability of the tendons to transmit muscle forces. The sesamoids in the forefoot also assist with weightbearing and help elevate the bones of the great toe. Like other bones, sesamoids can break (fracture). Additionally, the tendons surrounding the sesamoids can become irritated or inflamed. This is called sesamoiditis and is a form of tendinitis. It is common among ballet dancers, runners and baseball catchers.</p>
                            </div>
                            <div class="content-image-card">
                                <img src="../assets/images/sesamoiditis.webp" alt="Sesamoiditis" style="width: 100%; height: auto; object-fit: contain;">
                            </div>
                        </div>
                    </div>

                    <div class="content-section" id="symptoms">
                        <h3>Symptoms</h3>
                        <ul>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Pain is focused under the great toe on the ball of the foot. With sesamoiditis, pain may develop gradually; with a fracture, pain will be immediate.</li>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Swelling and bruising may or may not be present.</li>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;You may experience difficulty and pain in bending and straightening the great toe.</li>
                        </ul>
                    </div>

                </div>
                <div class="widget widget-dr-kini desktop-hidden">
                    <img src="../assets/images/home-about/Dr.AbhishekKini-Homepage.webp" alt="Sesamoiditis">
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

