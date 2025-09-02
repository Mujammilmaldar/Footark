<?php include 'includes/header.php';?>
<link rel="stylesheet" href="assets/css/inner-pages.css">

    <!-- Hero Banner -->
    <section class="hero-banner">
        <div class="container">
            <div class="hero-breadcrumb" style="margin-bottom: 15px; font-size: 14px; color: #ffffff;">
                <a href="index.php" style="text-decoration: none; color: #ffffff;">Home</a> &gt;
                <a href="services.php" style="text-decoration: none; color: #ffffff;">Services</a> &gt;
                <a href="conditions.php" style="text-decoration: none; color: #ffffff;">Conditions</a> &gt;
                <span style="color: #ffffff;">Fractures of Foot and Ankle</span>
            </div>
            <div class="hero-content">
                <h1>Fractures of Foot and Ankle</h1>
                <p>Comprehensive treatment for foot and ankle fractures. Our expert team provides specialized care for all types of bone fractures in the foot and ankle complex.</p>
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
                            <p>Experiencing foot or ankle fracture? Get immediate expert care from our specialists.</p>
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
                        <h2>Understanding Foot and Ankle Fractures</h2>
                        <div class="content-with-image">
                            <div class="content-text">
                                <p>A bone fracture is another term for a broken bone. Fractures can range from small cracks in the bone (hairline fractures) to breaks that have separated the bone into three or more pieces (comminuted fractures).</p>

                                <p>Your ankles and feet are made up of some the most commonly injured bones and joints in the body, which makes them some of the most prone for breaks – broken toes are especially common.</p>

                                <p>The ankle is a hinge-type joint that connects the leg to the foot. Three bones fit together snugly here, and are supported by strong ligaments. An ankle fracture is a break of one or more of these bones. These fractures can sometimes be mistaken as sprains, as the symptoms are very similar.</p>
                            </div>
                            <div class="content-image-card">
                                <img src="images/foot-ankle-arthritis-treatment.jpg" alt="Foot and Ankle Fractures">
                            </div>
                        </div>
                    </div>

                    <div class="content-section" id="anatomy">
                        <h3>Foot Anatomy</h3>
                        <p>The foot (including toes) is very complex – made up of 33 joints, more than 100 muscles, and 26 bones varying in size. The foot is also broken up into 3 parts:</p>
                        
                        <ul>
                            <li>Forefoot – toes (phalanges) and the metatarsals</li>
                            <li>Midfoot – arches and top of foot</li>
                            <li>Hindfoot – heel to the ankle</li>
                        </ul>
                    </div>

                    <div class="content-section" id="causes">
                        <h3>Common Causes of Ankle Fractures</h3>
                        <p>Some of the most common causes of ankle fractures are:</p>
                        <ul>
                            <li>Rolling the ankle (in or out)</li>
                            <li>Severely twisting the ankle</li>
                            <li>Over extension</li>
                            <li>Severe impact & direct force on the ankle</li>
                        </ul>
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
