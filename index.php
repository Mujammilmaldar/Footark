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
                    <img src="assets/images/hero-about.avif" alt="Our Caregivers" class="img-fluid">
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
                                       <span data-ico-remixiconsbusiness="" class="bt_bb_icon_holder"></span>
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

<!-- Before and After Section -->
<section class="before-after-section">
    <div class="container">
        <div class="slider-header">
            <span class="slider-tag">TRANSFORMATIONS</span>
            <h2 class="slider-title">Before & After Results</h2>
            <p class="slider-subtitle">Real results from our professional treatments</p>
        </div>
        
        <div class="css-slider-container">
            <div class="slider-wrapper">
                <input type="radio" name="slider" id="slide1" checked>
                <input type="radio" name="slider" id="slide2">
                
                <div class="slider-track">
                    <div class="slide-group">
                        <div class="slide">
                            <img src="assets/images/before-after/1.png" alt="Before After 1">
                            <div class="slide-overlay">
                                <h4>Bunion Correction</h4>
                                <p>6 months treatment</p>
                            </div>
                        </div>
                        <div class="slide">
                            <img src="assets/images/before-after/2.png" alt="Before After 2">
                            <div class="slide-overlay">
                                <h4>Plantar Fasciitis</h4>
                                <p>3 months recovery</p>
                            </div>
                        </div>
                        <div class="slide">
                            <img src="assets/images/before-after/3.png" alt="Before After 3">
                            <div class="slide-overlay">
                                <h4>Ankle Surgery</h4>
                                <p>4 months healing</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="slide-group">
                        <div class="slide">
                            <img src="assets/images/before-after/4.png" alt="Before After 4">
                            <div class="slide-overlay">
                                <h4>Hammer Toe</h4>
                                <p>2 months treatment</p>
                            </div>
                        </div>
                        <div class="slide">
                            <img src="assets/images/before-after/5.png" alt="Before After 5">
                            <div class="slide-overlay">
                                <h4>Ingrown Nail</h4>
                                <p>1 month recovery</p>
                            </div>
                        </div>
                        <div class="slide">
                            <img src="assets/images/before-after/6.png" alt="Before After 6">
                            <div class="slide-overlay">
                                <h4>Diabetic Foot Care</h4>
                                <p>Ongoing care</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="slider-controls">
                    <label for="slide1" class="control-btn">
                        <span class="control-dot"></span>
                    </label>
                    <label for="slide2" class="control-btn">
                        <span class="control-dot"></span>
                    </label>
                </div>
                
                <div class="slider-arrows">
                    <label for="slide1" class="arrow-btn prev-btn">
                        <i class="fa fa-chevron-left"></i>
                    </label>
                    <label for="slide2" class="arrow-btn next-btn">
                        <i class="fa fa-chevron-right"></i>
                    </label>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Review Section  -->
  <section class="testimonials-section">
    <div class="container">
      <div class="testimonials-header text-center">
        <h1 class="testimonials-title">Real customers, real results</h1>
      </div>
      
      <!-- Swiper Container -->
      <div class="swiper testimonials-swiper">
        <div class="swiper-wrapper">
          
          <!-- Slide 1 -->
          <div class="swiper-slide">
            <div class="testimonial-card">
              <div class="card-header">
                <div class="stars">
                  <span>★★★★★</span>
                </div>
                <div class="google-verified">
                  <span class="verified-icon">✓</span>
                </div>
                <div class="google-logo">
                  <span class="google-g">G</span>
                </div>
              </div>
              <div class="testimonial-content">
                <p>I am a retired Paediatrician and my wife a retired GP. We had gone to India where my wife twisted her foot and fractured 4 metatarsals in her...</p>
                <a href="#" class="read-more">Read more</a>
              </div>
              <div class="reviewer-info">
                <div class="reviewer-avatar">
                  <span class="avatar-text">AD</span>
                </div>
                <div class="reviewer-details">
                  <div class="reviewer-name">Adrian Daniels</div>
                  <div class="review-date">2022-03-03</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="swiper-slide">
            <div class="testimonial-card">
              <div class="card-header">
                <div class="stars">
                  <span>★★★★★</span>
                </div>
                <div class="google-verified">
                  <span class="verified-icon">✓</span>
                </div>
                <div class="google-logo">
                  <span class="google-g">G</span>
                </div>
              </div>
              <div class="testimonial-content">
                <p>My wife saw Mr Kini as she had become unable to walk due to the build up of significant scar tissue from a former achilles injury a few...</p>
                <a href="#" class="read-more">Read more</a>
              </div>
              <div class="reviewer-info">
                <div class="reviewer-avatar">
                  <span class="avatar-text">JS</span>
                </div>
                <div class="reviewer-details">
                  <div class="reviewer-name">John Smith</div>
                  <div class="review-date">2022-02-15</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="swiper-slide">
            <div class="testimonial-card">
              <div class="card-header">
                <div class="stars">
                  <span>★★★★★</span>
                </div>
                <div class="google-verified">
                  <span class="verified-icon">✓</span>
                </div>
                <div class="google-logo">
                  <span class="google-g">G</span>
                </div>
              </div>
              <div class="testimonial-content">
                <p>I can highly recommend Dr Kini, he is a brilliant orthopaedic surgeon. I had hammered toe surgery in July, which I'm quickly recovering from...</p>
                <a href="#" class="read-more">Read more</a>
              </div>
              <div class="reviewer-info">
                <div class="reviewer-avatar">
                  <span class="avatar-text">MJ</span>
                </div>
                <div class="reviewer-details">
                  <div class="reviewer-name">Mary Johnson</div>
                  <div class="review-date">2022-01-28</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 4 -->
          <div class="swiper-slide">
            <div class="testimonial-card">
              <div class="card-header">
                <div class="stars">
                  <span>★★★★★</span>
                </div>
                <div class="google-verified">
                  <span class="verified-icon">✓</span>
                </div>
                <div class="google-logo">
                  <span class="google-g">G</span>
                </div>
              </div>
              <div class="testimonial-content">
                <p>I initially saw Dr Kini for a broken toe, but on the x-ray he spotted Haglunds Deformity in one foot - this was a revelation, it explained why...</p>
                <a href="#" class="read-more">Read more</a>
              </div>
              <div class="reviewer-info">
                <div class="reviewer-avatar">
                  <span class="avatar-text">RW</span>
                </div>
                <div class="reviewer-details">
                  <div class="reviewer-name">Robert Wilson</div>
                  <div class="review-date">2021-12-10</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 5 -->
          <div class="swiper-slide">
            <div class="testimonial-card">
              <div class="card-header">
                <div class="stars">
                  <span>★★★★★</span>
                </div>
                <div class="google-verified">
                  <span class="verified-icon">✓</span>
                </div>
                <div class="google-logo">
                  <span class="google-g">G</span>
                </div>
              </div>
              <div class="testimonial-content">
                <p>Dr Kini performed ankle arthroscopy for my chronic ankle pain. The procedure was minimally invasive and recovery was much faster than expected...</p>
                <a href="#" class="read-more">Read more</a>
              </div>
              <div class="reviewer-info">
                <div class="reviewer-avatar">
                  <span class="avatar-text">SP</span>
                </div>
                <div class="reviewer-details">
                  <div class="reviewer-name">Sarah Parker</div>
                  <div class="review-date">2021-11-22</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 6 -->
          <div class="swiper-slide">
            <div class="testimonial-card">
              <div class="card-header">
                <div class="stars">
                  <span>★★★★★</span>
                </div>
                <div class="google-verified">
                  <span class="verified-icon">✓</span>
                </div>
                <div class="google-logo">
                  <span class="google-g">G</span>
                </div>
              </div>
              <div class="testimonial-content">
                <p>Excellent care and treatment for my flat foot condition. Dr Kini explained everything clearly and the reconstruction surgery was very successful...</p>
                <a href="#" class="read-more">Read more</a>
              </div>
              <div class="reviewer-info">
                <div class="reviewer-avatar">
                  <span class="avatar-text">DL</span>
                </div>
                <div class="reviewer-details">
                  <div class="reviewer-name">David Lee</div>
                  <div class="review-date">2021-10-05</div>
                </div>
              </div>
            </div>
          </div>

        </div>
        
        <!-- Navigation buttons -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        
        <!-- Pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>

<!-- Company Logos Auto Slider Section -->
<section class="company-logos-section">
    <div class="container">
        <div class="logos-header">
            <span class="logos-tag">TRUSTED BY</span>
            <h2 class="logos-title">Our Partners & Clients</h2>
        </div>
        
        <div class="auto-slider-container">
            <div class="auto-slider-track">
                <div class="logo-slide">
                    <img src="assets/images/company/aziz.png" alt="Aziz Hospital">
                </div>
                <div class="logo-slide">
                    <img src="assets/images/company/hinduja.png" alt="Hinduja Hospital">
                </div>
                <div class="logo-slide">
                    <img src="assets/images/company/Jupiter.png" alt="Jupiter Hospital">
                </div>
                <div class="logo-slide">
                    <img src="assets/images/company/lilavati.png" alt="Lilavati Hospital">
                </div>
                <div class="logo-slide">
                    <img src="assets/images/company/MGM.png" alt="MGM Healthcare">
                </div>
                <div class="logo-slide">
                    <img src="assets/images/company/oyster.png" alt="Oyster & Pearl Hospital">
                </div>
                <div class="logo-slide">
                    <img src="assets/images/company/Parekhs.png" alt="Parekh's Hospital">
                </div>
                <div class="logo-slide">
                    <img src="assets/images/company/Reliance.png" alt="Reliance Hospital">
                </div>
                <!-- Duplicate slides for seamless loop -->
                <div class="logo-slide">
                    <img src="assets/images/company/aziz.png" alt="Aziz Hospital">
                </div>
                <div class="logo-slide">
                    <img src="assets/images/company/hinduja.png" alt="Hinduja Hospital">
                </div>
                <div class="logo-slide">
                    <img src="assets/images/company/Jupiter.png" alt="Jupiter Hospital">
                </div>
                <div class="logo-slide">
                    <img src="assets/images/company/lilavati.png" alt="Lilavati Hospital">
                </div>
                <div class="logo-slide">
                    <img src="assets/images/company/MGM.png" alt="MGM Healthcare">
                </div>
                <div class="logo-slide">
                    <img src="assets/images/company/oyster.png" alt="Oyster & Pearl Hospital">
                </div>
                <div class="logo-slide">
                    <img src="assets/images/company/Parekhs.png" alt="Parekh's Hospital">
                </div>
                <div class="logo-slide">
                    <img src="assets/images/company/Reliance.png" alt="Reliance Hospital">
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
                        <div class="contact-item flex-column">
                            <div class="contact-icon-wrapper">
                                <i class="location-icon"></i>
                            </div>
                            <div class="contact-content">
                                <h4>Location</h4>
                                <p>New York 60 East<br>65th Street<br>NY 10065</p>
                            </div>
                        </div>
                        
                        <div class="contact-item flex-column">
                            <div class="contact-icon-wrapper">
                                <i class="hours-icon"></i>
                            </div>
                            <div class="contact-content">
                                <h4>Hours</h4>
                                <p>Mon-Wed: 8am - 7pm<br>Thursday: 8am - 9pm<br>Friday: 8am - 5pm</p>
                            </div>
                        </div>
                        
                        <div class="contact-item flex-column">
                            <div class="contact-icon-wrapper">
                                <i class="social-icon"></i>
                            </div>
                            <div class="contact-content">
                                <h4>Social</h4>
                                <div class="contact-social-links above-footer-links">
                                    <a href="#" class="above-footer-links">Facebook</a>
                                    <a href="#" class="above-footer-links">Twitter</a>
                                    <a href="#" class="above-footer-links">Instagram</a>
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