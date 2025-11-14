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
                        <span style="color: #ffffff;">Ankle Ligament Reconstruction</span>
                    </div>
                    <div class="hero-content">
                        <h1>Ankle Ligament Reconstruction Surgery</h1>
                        <p>Advanced ankle ligament reconstruction surgery to restore stability and function. Our specialized techniques address chronic ankle instability and recurrent sprains.</p>
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
                                    <li><a href="#understanding" class="toc-link">Understanding the Procedure</a></li>
                                    <li><a href="#preparation" class="toc-link">Preparing for Surgery</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="widget widget-dr-kini mobile-hidden">
                        <img src="../assets/images/home-about/Dr.AbhishekKini-Homepage.webp" alt="Ankle Ligament Reconstruction">
                        <h6 style="margin-bottom:0px;margin-top:10px;padding-bottom:0px;">Dr. Abhishek Kini</h6>
                        <p style="font-style: italic;">Foot & Ankle Specialist</p>
                        <a href="../about.php" class="view-all-btn contact-btn">Know More</a>
                    </div>
                </div>
                <div class="main-content">
                    <div class="content-section" id="understanding">
                        <h2>Understanding Ankle Ligament Reconstruction</h2>
                        <div class="content-with-image">
                            <div class="content-text">
                                <p>Ankle ligament reconstruction is a surgical procedure that tightens the outside or lateral ligaments of the ankle. There are two major ankle ligaments that stabilize the lateral ankle, the anterior talofibular ligament and the calcaneofibular ligament. This surgery is intended for active, healthy patients who have experienced frequent ankle sprains which has led to chronic ankle instability and pain. Non-operative treatments include physical therapy and supportive ankle braces. For some patients with mild or moderate ankle instability, these non-operative treatments are sufficient to resume activities, and an operation is not necessary. However, for patients who remain symptomatic after trying conservative therapies, surgery may be considered. At the time of the operation, the quality of the lateral ligaments is evaluated to determine whether your own ligaments can be used for the reconstruction by tightening them (detaching them and reattaching them in a tightened position). If the ligaments are severely damaged, an allograft (cadaver) tendon is used to reinforce the damaged ligaments. Depending on the severity of your ankle instability, either one or both of the major ligaments are tightened (reconstructed). This is an extremely effective procedure which allows patients to resume activity that was previously limited by ankle instability.</p>
                            </div>
                            <div class="content-image-card">
                                <img src="../assets/images/ankleligament1.jpg" alt="Ankle Ligament Reconstruction" style="width: 100%; height: auto; object-fit: contain;">
                            </div>
                        </div>
                    </div>

                    <div class="content-section" id="preparation">
                        <h3>Preparing for the surgery</h3>
                        <p>When your surgery has been scheduled, you will be given a pre-surgery packet including information on location of the surgery. This procedure is performed at an outpatient surgery center. Patients over the age of 50 and with certain health conditions will require a blood work-up and EKG. Blood thinners should be discontinued prior to the surgery. This includes Coumadin, Plavix, aspirin, anti-inflammatory medicines (ibuprofen, naproxen, Aleve, Motrin, diclofenac, etc.), glucosamine, and herbs that may cause thinning of the blood. If you are on prescribed medicines such as Coumadin or Plavix, meet with your primary care doctor prior to discontinuation.</p>
                    </div>

                </div>
                <div class="widget widget-dr-kini desktop-hidden">
                    <img src="../assets/images/home-about/Dr.AbhishekKini-Homepage.webp" alt="Ankle Ligament Reconstruction">
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
