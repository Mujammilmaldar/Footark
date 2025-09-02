<?php include 'includes/header.php';?>
<link rel="stylesheet" href="assets/css/inner-pages.css">

    <!-- Hero Banner -->
    <section class="hero-banner">
        <div class="container">
            <div class="hero-breadcrumb" style="margin-bottom: 15px; font-size: 14px; color: #ffffff;">
                <a href="index.php" style="text-decoration: none; color: #ffffff;">Home</a> &gt;
                <a href="services.php" style="text-decoration: none; color: #ffffff;">Services</a> &gt;
                <a href="conditions.php" style="text-decoration: none; color: #ffffff;">Conditions</a> &gt;
                <span style="color: #ffffff;">Ankle Osteochondral Lesion</span>
            </div>
            <div class="hero-content">
                <h1>Ankle Osteochondral Lesion Treatment</h1>
                <p>Advanced treatment for osteochondral defects in the ankle. Our specialists provide cutting-edge therapies including arthroscopy and cartilage restoration procedures.</p>
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
                            <p>Dealing with ankle cartilage damage? Get expert treatment from our specialists.</p>
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
                        <h2>Understanding Ankle Osteochondral Lesions</h2>
                        <div class="content-with-image">
                            <div class="content-text">
                                <p>Osteochondral defects (OCD) are very localised areas of joint damage. These conditions usually occur on the talus (ankle bone) and are a region where the cartilage and underlying bone have been disrupted.</p>
                                
                                <p>How disrupted can vary from 'bruising' to a crater or deep defect on the surface of the joint, lacking the underlying bone as well as cartilage. These most often, though not exclusively, occur after some injury to the joint.</p>
                            </div>
                            <div class="content-image-card">
                                <img src="assets/images/services/inner-pages/Bunion-Surgery1.jpg" alt="Ankle Osteochondral Lesion">
                            </div>
                        </div>
                    </div>

                    <div class="content-section" id="injury-type">
                        <h3>What sort of injury may result in an osteochondral defect?</h3>
                        <p>A not uncommon history is that of a sprained ankle, which has failed to settle and gives symptoms (pain/instability) long after it should (see 'Ankle sprain' section for a more comprehensive review of this problem).</p>
                    </div>

                    <div class="content-section" id="difference-arthritis">
                        <h3>How is this condition different from arthritis?</h3>
                        <p>The changes in the joint surface are very localized (often widespread in arthritis), are almost always just on the talar side of the joint (usually on both sides of the joint in arthritis) and result in softening of the joint surface (usually significant hardening in arthritis).</p>
                    </div>

                    <div class="content-section" id="symptoms">
                        <h3>What symptoms might I expect to have with an osteochondral defect?</h3>
                        <p>Generally pain is the main symptom, on weight bearing and frequently when resting as well. It is not uncommon to also have feelings of instability from the joint or locking within the joint.</p>
                    </div>

                    <div class="content-section" id="diagnosis">
                        <h3>How is it diagnosed?</h3>
                        <p>Although this of injury may be shown up on a x-ray, it is easier to diagnose & define its extent using a MRI or CT scan.</p>
                    </div>

                    <div class="content-section" id="need-treatment">
                        <h3>Do I need to have an osteochondral defect treated?</h3>
                        <div class="highlight-box">
                            <p>It is unclear if an OCD will necessarily progress to osteoarthritis or what its natural history is.</p>
                            <p>A decision to have treatment can be made on the basis of whether the patient has persisting and troublesome symptoms or not.</p>
                        </div>
                    </div>

                    <div class="content-section" id="treatment">
                        <h3>How is it treated?</h3>
                        <p>An ankle arthroscopy (key hole surgery) may be carried out to examine the joint and remove any loose bone fragments or cartilage. Various other surgical options like cartilage transplantation, cell culture and implantation can be considered depending upon the severity of lesions.</p>
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
