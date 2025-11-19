<?php include '../includes/header.php';?>

    <!-- Hero Banner -->
    <section class="hero-banner">
        <div class="container">
            <div class="hero-container">
                <div class="inner-container">
                    <div class="hero-breadcrumb" style="margin-bottom: 15px; font-size: 14px; color: #ffffff;">
                        <a href="../index.php" style="text-decoration: none; color: #ffffff;">Home</a> &gt;
                        <a href="../services.php" style="text-decoration: none; color: #ffffff;">Services</a> &gt;
                        <a href="../treatments.php" style="text-decoration: none; color: #ffffff;">Treatments</a> &gt;
                        <span style="color: #ffffff;">Foot Fusion</span>
                    </div>
                    <div class="hero-content">
                        <h1>Foot Fusion Surgery (Arthrodesis)</h1>
                        <p>Expert foot fusion surgery for midfoot and hindfoot arthritis. Our specialized arthrodesis techniques restore stability and eliminate pain in affected foot joints.</p>
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
                                    <li><a href="#understanding" class="toc-link">Understanding Foot Fusion</a></li>
                                    <li><a href="#procedure" class="toc-link">How is it Carried Out</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="widget widget-dr-kini mobile-hidden">
                        <img src="../assets/images/home-about/Dr.AbhishekKini-Homepage.webp" alt="Foot Fusion">
                        <h6 style="margin-bottom:0px;margin-top:10px;padding-bottom:0px;">Dr. Abhishek Kini</h6>
                        <p style="font-style: italic;">Foot & Ankle Specialist</p>
                        <a href="../about.php" class="view-all-btn contact-btn">Know More</a>
                    </div>
                </div>
                <div class="main-content">
                    <div class="content-section" id="understanding">
                        <h2>Understanding Foot Fusion</h2>
                        <div class="content-with-image">
                            <div class="content-text">
                                <p>Foot fusion surgery is carried out to permanently join or stiffen the joint between arthritic bones. It is used to treat a wide range of conditions including arthritis, flat feet, rheumatoid arthritis and previous injuries such as fractures caused by wear and tear to bones and cartilage.</p>
                            </div>
                            <div class="content-image-card">
                                <img src="../assets/images/Footfusiontr1.webp" alt="Foot Fusion" style="width: 100%; height: auto; object-fit: contain;">
                            </div>
                        </div>
                    </div>

                    <div class="content-section" id="procedure">
                        <h3>How is it carried out?</h3>
                        <p>The operation, which usually involves staying overnight in hospital, is performed under a general anaesthetic with an added injection in the leg to numb the foot after surgery and reduce pain.</p>
                        <p>In most cases the surgeon makes one or two incisions (cuts) in the foot, depending on which joints are being fused together. The painful damaged joint is removed and the bones are stiffened with plates and screws that remain in the foot to increase stability and allow the bones to fuse (join) as they heal. If extra bone is needed to help the bones join, this can be taken from another area of your body or from donor bone; however, you will be able to discuss this with the surgeon before the procedure.</p>
                    </div>

                </div>
                <div class="widget widget-dr-kini desktop-hidden">
                    <img src="../assets/images/home-about/Dr.AbhishekKini-Homepage.webp" alt="Foot Fusion">
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
