<?php include 'includes/header.php';?>
<link rel="stylesheet" href="assets/css/hero.css">
<link rel="stylesheet" href="assets/css/about.css">
<main>
    <section class="hero-section">
    <div class="video-hero-container">
        <video 
            id="heroVideo"
            autoplay 
            muted 
            loop 
            playsinline 
        >
            <source src="assets/video/hero-bg.mp4" type="video/mp4">
        </video>
    </div>
    
    <div class="hero-content-overlay">
        <div class="container-fluid hero-content-container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="hero-content">
                        <h1 class="hero-title">The Foot Experts</h1>
                        <p class="hero-subtitle">
                            The London Foot & Ankle Surgery is UK's leading specialist centre
                            for Podiatry and Foot Surgery, providing high quality private care in
                            Central London
                        </p>
                        <div class="hero-buttons">
                            <a href="about.php" class="btn discover-btn">DISCOVER MORE</a>
                            <a href="services.php" class="btn view-services-btn">VIEW OUR SERVICES</a>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="about-image">
                    <img src="assets/images/caregivers.jpg" alt="Our Caregivers" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about-content">
                    <div class="about-tag">EXPERIENCE TRUE CAREGIVING</div>
                    <h2 class="about-title">Our Caregivers are screened for empathy, trained in senior care, and matched with clients based on their compatibility.</h2>
                    
                    <div class="about-features">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="feature-box">
                                    <div class="feature-icon">
                                        <i class="heart-icon"></i>
                                    </div>
                                    <h4 class="feature-title">Values</h4>
                                    <p class="feature-desc">We care for the whole person, complexity of each person's life, and believe that addressing a broad range.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="feature-box">
                                    <div class="feature-icon">
                                        <i class="home-icon"></i>
                                    </div>
                                    <h4 class="feature-title">Experience</h4>
                                    <p class="feature-desc">A community in which all people achieve their full potential for health and well-being across the lifespan.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="feature-box">
                                    <div class="feature-icon">
                                        <i class="approach-icon"></i>
                                    </div>
                                    <h4 class="feature-title">Approach</h4>
                                    <p class="feature-desc">Partnerships with education, government, and other community organizations will care multiply.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="feature-box">
                                    <div class="feature-icon">
                                        <i class="providers-icon"></i>
                                    </div>
                                    <h4 class="feature-title">Providers</h4>
                                    <p class="feature-desc">Provide patient-centered healthcare with excellence in quality, service, and access a believe broad range of needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Us Section -->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <!-- Left Side - Contact Information -->
            <div class="col-lg-6 col-md-6">
                <div class="contact-info-container">
                    <div class="contact-header">
                        <span class="contact-tag">CONTACT US</span>
                        <h2 class="contact-title">Discover the Best In Home Care</h2>
                        <p class="contact-subtitle">Delivering world class home care</p>
                    </div>
                    
                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon-wrapper">
                                <i class="location-icon"></i>
                            </div>
                            <div class="contact-content">
                                <h4>Location</h4>
                                <p>New York 60 East<br>65th Street<br>NY 10065</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon-wrapper">
                                <i class="hours-icon"></i>
                            </div>
                            <div class="contact-content">
                                <h4>Hours</h4>
                                <p>Mon-Wed: 8am - 7pm<br>Thursday: 8am - 9pm<br>Friday: 8am - 5pm</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <div class="contact-icon-wrapper">
                                <i class="social-icon"></i>
                            </div>
                            <div class="contact-content">
                                <h4>Social</h4>
                                <div class="contact-social-links">
                                    <a href="#" class="contact-social-link">Facebook</a>
                                    <a href="#" class="contact-social-link">Twitter</a>
                                    <a href="#" class="contact-social-link">Instagram</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-actions">
                        <div class="contact-appointment">
                            <h5>Make an Appointment</h5>
                            <a href="tel:88700600" class="contact-phone">📞 88 700 600</a>
                        </div>
                        <div class="contact-schedule">
                            <h5>Online Schedule</h5>
                            <a href="#" class="contact-book-btn">📅 Book here</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Side - Contact Form -->
            <div class="col-lg-6 col-md-6">
                <div class="contact-form-container">
                    <div class="contact-form-header">
                        <h3>Send us a message</h3>
                        <p class="form-note">Required fields are marked with an asterisk (*).</p>
                    </div>
                    
                    <form class="contact-form" action="#" method="POST">
                        <div class="form-group">
                            <label for="fullName">First and Last name*</label>
                            <input type="text" id="fullName" name="fullName" placeholder="Your name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email address*</label>
                            <input type="email" id="email" name="email" placeholder="Your email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="condition">Condition*</label>
                            <select id="condition" name="condition" required>
                                <option value="">Select condition</option>
                                <option value="arrhythmia">Arrhythmia</option>
                                <option value="foot-pain">Foot Pain</option>
                                <option value="ankle-injury">Ankle Injury</option>
                                <option value="plantar-fasciitis">Plantar Fasciitis</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Additional notes</label>
                            <textarea id="message" name="message" rows="4" placeholder="Tell us more about your condition or any questions you have..."></textarea>
                        </div>
                        
                        <button type="submit" class="contact-submit-btn">SEND YOUR MESSAGE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
<?php include 'includes/footer.php';?>