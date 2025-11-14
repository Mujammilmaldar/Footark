
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
                        <span style="color: #ffffff;">Ankle Synovitis</span>
                    </div>
                    <div class="hero-content">
                        <h1>Ankle Synovitis Treatment</h1>
                        
                        <!-- Mobile Image - Shows after heading on mobile only -->
                        <div class="mobile-hero-image desktop-hidden">
                            <img src="../assets/images/ankle-synovitis.jpg" alt="Ankle Synovitis">
                        </div>
                        
                        <p>Expert treatment for ankle synovitis and inflammation. Our specialized approach addresses the underlying causes and provides effective relief from joint swelling and pain.</p>
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
                                    <li><a href="#understanding" class="toc-link">What is Ankle Synovitis</a></li>
                                    <li><a href="#causes" class="toc-link">Causes</a></li>
                                    <li><a href="#diagnosis" class="toc-link">Diagnosis</a></li>
                                    <li><a href="#treatment" class="toc-link">Treatment</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="widget widget-dr-kini mobile-hidden">
                        <img src="../assets/images/home-about/Dr.AbhishekKini-Homepage.webp" alt="Ankle Synovitis">
                        <h6 style="margin-bottom:0px;margin-top:10px;padding-bottom:0px;">Dr. Abhishek Kini</h6>
                        <p style="font-style: italic;">Foot & Ankle Specialist</p>
                        <a href="../about.php" class="view-all-btn contact-btn">Know More</a>
                    </div>
                </div>
                <div class="main-content">
                    <div class="content-section" id="understanding">
                        <h2>What is ankle synovitis?</h2>
                        <div class="content-with-image">
                            <div class="content-text">
                                <p>A protective coating called synovium covers ankle joint. Ankle synovitis is the inflammation of this synovium. Synovitis of the ankle can be the resultant of autoimmune disorders like gout and rheumatoid arthritis or an injury.</p>
                            </div>
                            <div class="content-image-card">
                                <img src="../assets/images/ankle-synovitis.jpg" alt="Ankle Synovitis" style="width: 100%; height: auto; object-fit: contain;">
                            </div>
                        </div>
                    </div>

                    <div class="content-section" id="causes">
                        <h3>What causes ankle synovitis?</h3>
                        <p>Ankle injury or affection by an infection or an inflammatory disease, the synovial membrane gets inflamed and thus, allowing the synovial fluid contained within to leak into the joint. This leakage of the fluid would lead to cartilage degradation, joint instability and can potentially block the supply of nutrients to the surrounding regions.</p>
                        
                        <p>Most common causes are inflammatory conditions like rheumatoid arthritis, gout, infective affections like bacterial or tuberculous infections or chronic instability predisposing to synovitis.</p>
                    </div>

                    <div class="content-section" id="diagnosis">
                        <h3>How is it diagnosed?</h3>
                        <p>Patient comes with complaints of swelling of the ankle. A complete clinical examination with the help of specific investigations (blood & radiological), we can diagnose the most probable cause of this synovitis.</p>
                    </div>

                    <div class="content-section" id="treatment">
                        <h3>How is it treated?</h3>
                        <p>Once the causative agent is diagnosed, most often, the treatment lies in well-directed medications, which control the inflammation & prevent its adverse effects. In some of the cases, a key hole surgery (arthroscopy) may be advised to get the tissue (synovium) for diagnosis and to reduce the disease load.</p>
                    </div>

                </div>
                <div class="widget widget-dr-kini desktop-hidden">
                    <img src="../assets/images/home-about/Dr.AbhishekKini-Homepage.webp" alt="Ankle Synovitis">
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

