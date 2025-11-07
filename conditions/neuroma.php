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
                        <span style="color: #ffffff;">Neuroma</span>
                    </div>
                    <div class="hero-content">
                        <h1>Neuroma Treatment</h1>
                        
                        <!-- Mobile Image - Shows after heading on mobile only -->
                        <div class="mobile-hero-image desktop-hidden">
                            <img src="images/Neuroma.jpg" alt="Neuroma Treatment">
                        </div>
                        
                        <p>Expert treatment for neuromas and nerve pain in the foot. Our specialized approach provides effective relief from pinched nerves and painful nerve conditions.</p>
                        <div class="hero-buttons">
                            <a href="../contact.php" class="btn-primary">Schedule Consultation</a>
                        </div>
                    </div>
                </div>
                <div class="image-container mobile-hidden">
                    <img src="images/Neuroma.jpg" alt="Neuroma Treatment">
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
                                    <li><a href="#understanding" class="toc-link">What is a Neuroma</a></li>
                                    <li><a href="#causes" class="toc-link">Causes</a></li>
                                    <li><a href="#symptoms" class="toc-link">Symptoms</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="widget widget-dr-kini mobile-hidden">
                        <img src="../assets/images/home-about/Dr.AbhishekKini-Homepage.webp" alt="Neuroma">
                        <h6 style="margin-bottom:0px;margin-top:10px;padding-bottom:0px;">Dr. Abhishek Kini</h6>
                        <p style="font-style: italic;">Foot & Ankle Specialist</p>
                        <a href="../about.php" class="view-all-btn contact-btn">Know More</a>
                    </div>
                </div>
                <div class="main-content">
                    <div class="content-section" id="understanding">
                        <h2>What is a Neuroma?</h2>
                        <div class="content-with-image">
                            <div class="content-text">
                                <p>A neuroma is a painful condition, also referred to as a "pinched nerve" or a nerve tumor. It is a benign growth of nerve tissue frequently found between the third and fourth toes. It brings on pain, a burning sensation, tingling, or numbness between the toes and in the ball of the foot.</p>
                                <p>The principal symptom associated with a neuroma is pain between the toes while walking. Those suffering from the condition often find relief by stopping their walk, taking off their shoe, and rubbing the affected area. At times, the patient will describe the pain as similar to having a stone in his or her shoe. The vast majority of people who develop neuromas are women.</p>
                            </div>
                            <div class="content-image-card">
                                <img src="images/Neuroma.jpg" alt="Neuroma">
                            </div>
                        </div>
                    </div>

                    <div class="content-section" id="causes">
                        <h3>Causes</h3>
                        <p>Although the exact cause for this condition is unclear, a number of factors can contribute to the formation of a neuroma:</p>
                        <ul>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Biomechanical deformities, such as a high-arched foot or a flat foot, can lead to the formation of a neuroma. These foot types bring on instability around the toe joints, leading to the development of the condition.</li>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Trauma can cause damage to the nerve, resulting in inflammation or swelling of the nerve.</li>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Improper footwear that causes the toes to be squeezed together is problematic. Avoid high-heeled shoes higher than two inches. Shoes at this height can increase pressure on the forefoot area.</li>
                        </ul>
                    </div>

                    <div class="content-section" id="symptoms">
                        <h3>Symptoms</h3>
                        <ul>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Pain in the forefoot and between the toes</li>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Tingling and numbness in the ball of the foot</li>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Swelling between the toes</li>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Pain in the ball of the foot when weight is placed on it</li>
                        </ul>
                    </div>

                </div>
                <div class="widget widget-dr-kini desktop-hidden">
                    <img src="../assets/images/home-about/Dr.AbhishekKini-Homepage.webp" alt="Neuroma">
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
