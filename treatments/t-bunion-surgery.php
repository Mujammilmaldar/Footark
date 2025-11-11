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
                        <span style="color: #ffffff;">Bunion Surgery</span>
                    </div>
                    <div class="hero-content">
                        <h1>Bunion Surgery (Hallux Valgus Correction)</h1>
                        
                        <!-- Mobile Image - Shows after heading on mobile only -->
                        <!-- <div class="mobile-hero-image desktop-hidden">
                            <img src="../assets/images/Bunion-Surgery1.jpg" alt="Bunion Surgery">
                        </div> -->
                        
                        <p>Advanced bunion surgery techniques to correct hallux valgus deformity. Our specialized minimally invasive procedures provide lasting relief and improved foot function.</p>
                        <div class="hero-buttons">
                            <a href="../contact.php" class="btn-primary">Schedule Consultation</a>
                        </div>
                    </div>
                </div>
                <div class="image-container mobile-hidden">
                    <img src="../assets/images/Bunion-Surgery1.jpg" alt="Bunion Surgery">
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
                                    <li><a href="#understanding" class="toc-link">Understanding Bunion Surgery</a></li>
                                    <li><a href="#procedure" class="toc-link">What Happens During Surgery</a></li>
                                    <li><a href="#complications" class="toc-link">Complications</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="widget widget-dr-kini mobile-hidden">
                        <img src="../assets/images/home-about/Dr.AbhishekKini-Homepage.webp" alt="Bunion Surgery">
                        <h6 style="margin-bottom:0px;margin-top:10px;padding-bottom:0px;">Dr. Abhishek Kini</h6>
                        <p style="font-style: italic;">Foot & Ankle Specialist</p>
                        <a href="../about.php" class="view-all-btn contact-btn">Know More</a>
                    </div>
                </div>
                <div class="main-content">
                    <div class="content-section" id="understanding">
                        <h2>Understanding Bunion Surgery</h2>
                        <div class="content-with-image">
                            <div class="content-text">
                                <p>Bunion surgery is an operation to remove or realign the bone that sticks out on your big toe when you have a bunion. This will set your toe joint into a better position and relieve pain. The treatment and care you receive may differ from what's described here as it will be designed to meet your individual needs.</p>
                            </div>
                            <div class="content-image-card">
                                <img src="../assets/images/Bunion-Surgery1.jpg" alt="Bunion Surgery">
                            </div>
                        </div>
                    </div>

                    <div class="content-section" id="procedure">
                        <h3>What happens during bunion surgery?</h3>
                        <p>Surgery to remove a bunion usually takes less than an hour, but it will depend on the type of operation you have. Ask your surgeon how long your operation will take. There are lots of different types of operations to treat bunions. The exact procedure you have will depend on things like the size of your bunion, and the shape of your foot. If you have arthritis in the joint of your big toe, this may also influence which procedure you have.</p>
                        <p>Usually, the operations will involve your surgeon removing some bone and re-aligning it to make the side of your foot look straighter. The exact shape of the cut will depend on your specific needs. Your surgeon might repair ligaments and tendons in your foot too. They may use screws or wires to keep everything in place. These are usually permanent, but sometimes your surgeon will remove them later. To access your bunion, your surgeon may first make a cut on the inner side of your foot, over your big toe joint. Or they might do keyhole surgery and get to the bone through several small cuts.</p>
                    </div>

                    <div class="content-section" id="complications">
                        <h3>Complications of bunion surgery</h3>
                        <p>Complications are when problems occur during or after the operation. Complications of bunion surgery can include:</p>
                        <ul>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;a stiff toe – the tendons in your big toe may be damaged during the operation, which can affect how well your toe moves</li>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;a numb toe – the nerves in your toe may be injured</li>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;an abnormal toe position – your big toe may heal out of line and bend outwards or upwards, or be slightly shorter</li>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;slow healing – this can cause ongoing pain and swelling</li>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;an infection – you may need antibiotics to treat it</li>
                        </ul>
                    </div>

                </div>
                <div class="widget widget-dr-kini desktop-hidden">
                    <img src="../assets/images/home-about/Dr.AbhishekKini-Homepage.webp" alt="Bunion Surgery">
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
