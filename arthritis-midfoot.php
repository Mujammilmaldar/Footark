<?php include 'includes/header.php';?>
<link rel="stylesheet" href="assets/css/inner-pages.css">

    <!-- Hero Banner -->
    <section class="hero-banner">
        <div class="container">
            <div class="hero-breadcrumb" style="margin-bottom: 15px; font-size: 14px; color: #ffffff;">
                <a href="index.php" style="text-decoration: none; color: #ffffff;">Home</a> &gt;
                <a href="services.php" style="text-decoration: none; color: #ffffff;">Services</a> &gt;
                <a href="conditions.php" style="text-decoration: none; color: #ffffff;">Conditions</a> &gt;
                <span style="color: #ffffff;">Midfoot Arthritis</span>
            </div>
            <div class="hero-content">
                <h1>Midfoot Arthritis Treatment</h1>
                <p>Comprehensive care for midfoot arthritis affecting the small joints of the midfoot. Our specialists provide both conservative and surgical treatment options for pain relief and improved mobility.</p>
                <div class="hero-buttons">
                    <a href="appointment.php" class="btn-primary">Schedule Consultation</a>
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
                        <div class="widget-header">Schedule an Appointment</div>
                        <div class="widget-content  flex-column">
                            <p>Experiencing midfoot pain and stiffness? Get expert treatment from our specialists.</p>
                            <div class="phone-number">+91 98765 43210</div>
                            <a href="appointment.php" class="btn-widget">REQUEST APPOINTMENT</a>
                            <a href="#" class="btn-widget">PATIENT PORTAL</a>
                        </div>
                    </div>

                    <div class="widget">
                        <div class="widget-header">Office Location</div>
                        <div class="widget-content">
                            <p><strong>Mumbai Office</strong></p>
                            <p>Mumbai, India</p>
                            <p><strong>Phone:</strong> +91 98765 43210</p>
                            <p><strong>Email:</strong> info@footark.com</p>
                        </div>
                    </div>

                    <div class="widget">
                        <div class="widget-header">Office Hours</div>
                        <div class="widget-content">
                            <p><strong>Monday - Friday:</strong><br>9:00 AM - 6:00 PM</p>
                            <p><strong>Saturday:</strong><br>9:00 AM - 1:00 PM</p>
                            <p><strong>Sunday:</strong><br>Emergency Only</p>
                        </div>
                    </div>

                    <div class="widget">
                        <div class="widget-header">Insurance Information</div>
                        <div class="widget-content">
                            <p>We accept most major insurance plans. Please contact our office to verify your specific coverage.</p>
                            <a href="#" class="btn-widget">VIEW ACCEPTED PLANS</a>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                    <div class="content-section" id="understanding">
                        <h2>Understanding Midfoot Arthritis</h2>
                        <div class="content-with-image">
                            <div class="content-text">
                                <p>The midfoot is the section of the foot that begins at the level of the Chopart joint. It consists of five bones, connected to each other and to the hindfoot and forefoot. The bones are known as: cuboid, navicular, medial, intermediate and lateral cuneiform bones.</p>
                                
                                <p>The midfoot ends at the Lisfranc (or tarsometatarsal) joint, where the metatarsal bones begin.</p>
                            </div>
                            <div class="content-image-card">
                                <img src="assets/images/services/inner-pages/Bunion-Surgery1.jpg" alt="Midfoot Arthritis">
                            </div>
                        </div>
                    </div>

                    <div class="content-section" id="causes">
                        <h3>What causes midfoot arthritis?</h3>
                        <p>There are different reasons for developing arthritis in the small joints in the midfoot. These include:</p>
                        
                        <ul>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;<strong>Post-traumatic</strong> - Bone fracture or damage/dislocation at any of the bones or joints, even if successfully treated many years before</li>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;<strong>Rheumatoid arthritis</strong> - Patients with rheumatoid or other forms of inflammatory arthritis can also develop arthritis in their foot</li>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;<strong>Osteoarthritis</strong> - Even where there is no injury, arthritis can develop without explanation in the midfoot</li>
                            <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;<strong>Tibialis posterior tendon dysfunction</strong> - If this tendon in the foot develops problems then the arch can flatten and you can develop midfoot or hindfoot arthritis</li>
                        </ul>
                    </div>

                    <div class="content-section" id="progression">
                        <h3>Disease Progression</h3>
                        <div class="highlight-box">
                            <p>People often live with the symptoms for many years before seeking medical help and the pain and stiffness gradually becomes worse. This can make walking and weight-bearing exercise more difficult.</p>
                            
                            <p>Although it can be treated at any stage, nearby joints may be affected as it develops.</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

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
