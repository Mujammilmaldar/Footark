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
                        <span style="color: #ffffff;">Arthritis – Great Toe</span>
                    </div>
                    <div class="hero-content">
                        <h1>Great Toe Arthritis Treatment</h1>
                        
                        <!-- Mobile Image - Shows after heading on mobile only -->
                        <div class="mobile-hero-image desktop-hidden">
                            <img src="../assets/images/Arthritisgreat toe.jpg" alt="Great Toe Arthritis">
                        </div>
                        
                        <p>Expert treatment for hallux rigidus and big toe arthritis. Our specialized approach helps restore function and reduce pain in the most common site of foot arthritis.</p>
                        <div class="hero-buttons">
                            <a href="../contact.php" class="btn-primary">Schedule Consultation</a>
                        </div>
                    </div>
                </div>
                <div class="image-container mobile-hidden">
                    <img src="../assets/images/Arthritisgreat toe.jpg" alt="Great Toe Arthritis">
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
                                    <li><a href="#understanding" class="toc-link">Understanding Hallux Rigidus</a></li>
                                    <li><a href="#symptoms" class="toc-link">Symptoms</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="widget widget-dr-kini mobile-hidden">
                        <img src="../assets/images/home-about/Dr.AbhishekKini-Homepage.webp" alt="Great Toe Arthritis">
                        <h6 style="margin-bottom:0px;margin-top:10px;padding-bottom:0px;">Dr. Abhishek Kini</h6>
                        <p style="font-style: italic;">Foot & Ankle Specialist</p>
                        <a href="../about.php" class="view-all-btn contact-btn">Know More</a>
                    </div>
                </div>
                <div class="main-content">
                    <div class="content-section" id="understanding">
                        <h2>Understanding Great Toe Arthritis</h2>
                        <div class="content-with-image">
                            <div class="content-text">
                                <p>Hallux rigidus is the medical name for arthritis that occurs at the base of the big toe. The joint at the base of the big toe is called the first metatarsophalangeal joint, or MTP joint. This is the junction of the long bone of the forefoot and the small bone of the big toe. Because of the mechanics of our feet, this joint is especially prone to developing arthritis. In fact, hallux rigidus, or big toe arthritis, is the most common site of arthritis in the foot.</p>
                            </div>
                            <div class="content-image-card">
                                <img src="../assets/images/Arthritisgreat toe.jpg" alt="Great Toe Arthritis">
                            </div>
                        </div>
                    </div>

                    <div class="content-section" id="symptoms">
                        <h3>Symptoms</h3>
                        <p>The most common symptom and the most common reason to seek medical attention for this problem is pain around the base of the big toe. This pain is accentuated with activity, especially running or jumping. Wearing firm-soled shoes that prevent motion at the base of the big toe will help relieve symptoms. Other common symptoms include swelling at the base of the big toe, a lump next to this joint due to bone spur formation, and calluses from the abnormal shape of the toe.</p>
                        <p>The common signs people with hallux rigidus notice include:</p>
                        <ul>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Pain at the base of the big toe</li>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Swelling of the toe</li>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Difficulty with activities including running, waling up hills</li>
                        </ul>
                    </div>

                </div>
                <div class="widget widget-dr-kini desktop-hidden">
                    <img src="../assets/images/home-about/Dr.AbhishekKini-Homepage.webp" alt="Great Toe Arthritis">
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

