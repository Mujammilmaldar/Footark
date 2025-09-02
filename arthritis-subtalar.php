<?php include 'includes/header.php';?>
<link rel="stylesheet" href="assets/css/inner-pages.css">

    <!-- Hero Banner -->
    <section class="hero-banner">
        <div class="container">
            <div class="hero-breadcrumb" style="margin-bottom: 15px; font-size: 14px; color: #ffffff;">
                <a href="index.php" style="text-decoration: none; color: #ffffff;">Home</a> &gt;
                <a href="services.php" style="text-decoration: none; color: #ffffff;">Services</a> &gt;
                <a href="conditions.php" style="text-decoration: none; color: #ffffff;">Conditions</a> &gt;
                <span style="color: #ffffff;">Subtalar Arthritis</span>
            </div>
            <div class="hero-content">
                <h1>Subtalar Arthritis Treatment</h1>
                <p>Expert care for subtalar arthritis affecting the hindfoot joint. Our specialists provide comprehensive treatment to reduce pain and improve foot function for better mobility.</p>
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
                            <p>Experiencing hindfoot pain and difficulty on uneven surfaces? Get expert treatment from our specialists.</p>
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
                        <h2>Understanding Subtalar Arthritis</h2>
                        <div class="content-with-image">
                            <div class="content-text">
                                <p>Patients with subtalar arthritis will complain of pain on one or both sides of the foot, just below the ankle bones (malleoli). This is commonly illustrated by the patient encircling the affected foot with their fingers, just below the level of the bony prominence on either side of the ankle (malleoli).</p>
                                
                                <p>The hollow just in front of the outside ankle bone (the sinus tarsi) is another common location of pain. The sinus tarsi is a space surrounded by the three contact areas between the talus and calcaneus, that comprise the subtalar joint.</p>
                            </div>
                            <div class="content-image-card">
                                <img src="assets/images/services/inner-pages/Bunion-Surgery1.jpg" alt="Subtalar Arthritis">
                            </div>
                        </div>
                    </div>

                    <div class="content-section" id="function">
                        <h3>Subtalar Joint Function</h3>
                        <p>The subtalar joint is largely responsible for allowing the foot to accommodate uneven terrain by moving the hindfoot from side to side (inversion and eversion). Walking on uneven surfaces places a great deal of stress on the subtalar joint and may be difficult, if not impossible, to accomplish in patients with subtalar arthritis.</p>
                    </div>

                    <div class="content-section" id="causes">
                        <h3>What Causes Subtalar Arthritis?</h3>
                        <div class="highlight-box">
                            <h4>Common Causes</h4>
                            <ul>
                                <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;<strong>Previous trauma</strong> - Usually a calcaneal fracture, although certain fractures involving the talar body may also cause subtalar arthritis</li>
                                <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;<strong>Rheumatoid arthritis</strong> - Inflammatory arthritis affecting the joint</li>
                                <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;<strong>Abnormal loading</strong> - Associated with malalignment of the heel bone (calcaneus)</li>
                            </ul>
                        </div>
                        
                        <p>The load applied to the subtalar joint can be unevenly distributed in cases where the heel bone turns in (varus alignment seen with a high arched foot) or out (valgus alignment associated with a flat foot).</p>
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
