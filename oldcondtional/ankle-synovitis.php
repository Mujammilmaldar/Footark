<?php include '../includes/header.php';?>


    <!-- Hero Banner -->
    <section class="hero-banner">
        <div class="container">
            <div class="hero-breadcrumb" style="margin-bottom: 15px; font-size: 14px; color: #ffffff;">
                <a href="../index.php" style="text-decoration: none; color: #ffffff;">Home</a> &gt;
                <a href="../services.php" style="text-decoration: none; color: #ffffff;">Services</a> &gt;
                <a href="../conditions.php" style="text-decoration: none; color: #ffffff;">Conditions</a> &gt;
                <span style="color: #ffffff;">Ankle Synovitis</span>
            </div>
            <div class="hero-content">
                <h1>Ankle Synovitis Treatment</h1>
                <p>Expert diagnosis and treatment for ankle synovitis and joint inflammation. Our specialists provide comprehensive care to reduce inflammation and restore joint function.</p>
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
                            <p>Experiencing ankle swelling and inflammation? Get expert treatment from our specialists.</p>
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
                        <h2>Understanding Ankle Synovitis</h2>
                        <div class="content-with-image">
                            <div class="content-text">
                                <p>The synovium is the lining of any joint and it produces a lubricating fluid (synovial fluid) which helps the bones move smoothly over each other. Ankle synovitis is inflammation of this synovium.</p>
                                
                                <p>Synovitis of the ankle can be the resultant of autoimmune disorders like gout and rheumatoid arthritis or an injury.</p>
                            </div>
                            <div class="content-image-card">
                                <img src="../images/ankle-synovitis.webp" alt="Ankle Synovitis">
                            </div>
                        </div>
                    </div>

                    <div class="content-section" id="causes">
                        <h3>What causes ankle synovitis?</h3>
                        <p>Ankle injury or affection by an infection or an inflammatory disease, the synovial membrane gets inflamed and thus, allowing the synovial fluid contained within to leak into the joint. This leakage of the fluid would lead to cartilage degradation, joint instability and can potentially block the supply of nutrients to the surrounding regions.</p>
                        
                        <div class="highlight-box">
                            <h4>Common Causes</h4>
                            <p>Most common causes are inflammatory conditions like rheumatoid arthritis, gout, infective affections like bacterial or tuberculous infections or chronic instability predisposing to synovitis.</p>
                        </div>
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
