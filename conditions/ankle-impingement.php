<?php include '../includes/header.php';?>


    <!-- Hero Banner -->
    <section class="hero-banner">
        <div class="container">
            <div class="hero-breadcrumb" style="margin-bottom: 15px; font-size: 14px; color: #ffffff;">
                <a href="../index.php" style="text-decoration: none; color: #ffffff;">Home</a> &gt;
                <a href="../services.php" style="text-decoration: none; color: #ffffff;">Services</a> &gt;
                <a href="../conditions.php" style="text-decoration: none; color: #ffffff;">Conditions</a> &gt;
                <span style="color: #ffffff;">Ankle Impingement</span>
            </div>
            <div class="hero-content">
                <h1>Ankle Impingement Treatment</h1>
                <p>Expert diagnosis and treatment for ankle impingement syndrome. Our specialists provide comprehensive care to relieve pain and restore normal ankle function.</p>
                <div class="hero-buttons">
                    <a href="../appointment.php" class="btn-primary">Schedule Consultation</a>
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
                            <p>Experiencing ankle impingement pain? Get expert treatment from our specialists.</p>
                            <div class="phone-number">+91 98765 43210</div>
                            <a href="../appointment.php" class="btn-widget">REQUEST APPOINTMENT</a>
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
                        <h2>Understanding Ankle Impingement</h2>
                        <div class="content-with-image">
                            <div class="content-text">
                                <p>Ankle impingement occurs when soft tissues around the ankle are pinched or nipped. Impingement mainly happens when the ankle is fully bent up or down, leading to pain either in the front or back of the ankle joint.</p>
                                
                                <p>Problems near the front of the joint are usually associated with past ankle sprains. Pinching in the back of the ankle occurs most often in ballet dancers and is usually due to irritation around a bony prominence on the back of the ankle.</p>
                            </div>
                            <div class="content-image-card">
                                <img src="../assets/images/services/inner-pages/Bunion-Surgery1.jpg" alt="Ankle Impingement">
                            </div>
                        </div>
                    </div>

                    <div class="content-section" id="anatomy">
                        <h3>What parts of the ankle are involved?</h3>
                        <p>The ankle joint is formed where the bones of the lower leg, the tibia and the fibula, connect above the anklebone, called the talus. The tibia is the main bone of the lower leg. The fibula is the small, thin bone along the outer edge of the tibia.</p>
                        
                        <p>The ankle joint is a hinge that allows the foot to move up (dorsiflexion) and down (plantarflexion). The ankle is a synovial joint, meaning it is enclosed in a joint capsule that contains a lubricant called synovial fluid.</p>
                    </div>

                    <div class="content-section" id="subtalar-joint">
                        <h3>The Subtalar Joint</h3>
                        <p>The talus rests on the the heelbone (the calcaneus). The joint formed between these two bones is called the subtalar joint. The calcaneus extends backward below the ankle, forming a shelf on which the talus rests.</p>
                        
                        <div class="highlight-box">
                            <h4>Os Trigonum</h4>
                            <p>Two small bony bumps, called tuberosities, project from the back of the talus, one on the inside (medial) edge and one on the outer (lateral) edge. In some people the lateral tuberosity is not united to the talus. The separate piece of bone is called an os trigonum.</p>
                            
                            <p>This separation of the os trigonum from the talus is usually not a fracture. About 15 percent of people have an os trigonum. An os trigonum sometimes causes problems of impingement in the back of the ankle.</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

<?php include '../includes/footer.php'; ?>

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
