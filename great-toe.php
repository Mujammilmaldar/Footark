<?php include 'includes/header.php';?>
<link rel="stylesheet" href="assets/css/inner-pages.css">

    <!-- Hero Banner -->
    <section class="hero-banner">
        <div class="container">
            <div class="hero-breadcrumb" style="margin-bottom: 15px; font-size: 14px; color: #ffffff;">
                <a href="index.php" style="text-decoration: none; color: #ffffff;">Home</a> &gt;
                <a href="services.php" style="text-decoration: none; color: #ffffff;">Services</a> &gt;
                <a href="conditions.php" style="text-decoration: none; color: #ffffff;">Conditions</a> &gt;
                <span style="color: #ffffff;">Great Toe Arthritis</span>
            </div>
            <div class="hero-content">
                <h1>Great Toe Arthritis Treatment</h1>
                <p>Expert care for hallux rigidus and big toe arthritis. Our specialists provide comprehensive treatment options to reduce pain and restore mobility in the great toe joint.</p>
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
                            <p>Experiencing big toe pain and stiffness? Get expert treatment from our specialists.</p>
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
                        <h2>Understanding Great Toe Arthritis</h2>
                        <div class="content-with-image">
                            <div class="content-text">
                                <p>Hallux rigidus is the medical name for arthritis that occurs at the base of the big toe. The joint at the base of the big toe is called the first metatarsophalangeal joint, or MTP joint. This is the junction of the long bone of the forefoot and the small bone of the big toe.</p>
                                
                                <p>Because of the mechanics of our feet, this joint is especially prone to developing arthritis. In fact, hallux rigidus, or big toe arthritis, is the most common site of arthritis in the foot.</p>
                            </div>
                            <div class="content-image-card">
                                <img src="images/Arthritisgreat toe.jpg" alt="Great Toe Arthritis">
                            </div>
                        </div>
                    </div>

                    <div class="content-section" id="symptoms">
                        <h3>Symptoms</h3>
                        <p>The most common symptom and the most common reason to seek medical attention for this problem is pain around the base of the big toe. This pain is accentuated with activity, especially running or jumping. Wearing firm-soled shoes that prevent motion at the base of the big toe will help relieve symptoms.</p>
                        
                        <p>Other common symptoms include swelling at the base of the big toe, a lump next to this joint due to bone spur formation, and calluses from the abnormal shape of the toe.</p>
                        
                        <div class="highlight-box">
                            <h4>Common Signs</h4>
                            <p>The common signs people with hallux rigidus notice include:</p>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Pain at the base of the big toe</li>
                                <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Swelling of the toe</li>
                                <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Difficulty with activities including running, walking up hills</li>
                            </ul>
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
