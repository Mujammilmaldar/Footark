<?php include 'includes/header.php';?>
<link rel="stylesheet" href="assets/css/inner-pages.css">

    <!-- Hero Banner -->
    <section class="hero-banner">
        <div class="container">
            <div class="hero-breadcrumb" style="margin-bottom: 15px; font-size: 14px; color: #ffffff;">
                <a href="index.php" style="text-decoration: none; color: #ffffff;">Home</a> &gt;
                <a href="services.php" style="text-decoration: none; color: #ffffff;">Services</a> &gt;
                <a href="conditions.php" style="text-decoration: none; color: #ffffff;">Conditions</a> &gt;
                <span style="color: #ffffff;">Freiberg's Disease</span>
            </div>
            <div class="hero-content">
                <h1>Freiberg's Disease Treatment</h1>
                <p>Expert diagnosis and treatment for Freiberg's disease affecting the metatarsal bones. Our specialists provide comprehensive care to manage symptoms and restore foot function.</p>
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
                            <p>Experiencing forefoot pain? Get expert treatment from our specialists.</p>
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
                        <h2>Understanding Freiberg's Disease</h2>
                        <div class="content-with-image">
                            <div class="content-text">
                                <p>Freiberg's disease is rare condition that primarily affects the second or third metatarsal (the long bones of the foot). Although people of all ages can be affected by this condition, Freiberg's disease is most commonly diagnosed during adolescence through the second decade of life.</p>
                                
                                <p>Common signs and symptoms include pain and stiffness in the front of the foot, which often leads to a limp. Affected people may also experience swelling, limited range of motion, and tenderness of the affected foot.</p>
                            </div>
                            <div class="content-image-card">
                                <img src="images/Freiberg's.jpg" alt="Freiberg's Disease">
                            </div>
                        </div>
                    </div>

                    <div class="content-section" id="symptoms">
                        <h3>Symptoms</h3>
                        <div class="highlight-box">
                            <p>Symptoms are generally triggered by weight-bearing activities, including walking. The exact underlying cause of Freiberg's disease is currently unknown.</p>
                        </div>
                    </div>

                    <div class="content-section" id="treatment">
                        <h3>Treatment</h3>
                        <p>Treatment depends on many factors, including the severity of condition; the signs and symptoms present; and the age of the patient.</p>
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
