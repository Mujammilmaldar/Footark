<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="assets/css/hero.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="assets/css/about.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="assets/css/treatment-results.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="assets/css/testimonials-new.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="assets/css/mobile-responsive.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="assets/css/mobile-slider-fix.css?v=<?php echo time(); ?>">
<main>
    <section class="hero-section">
        <div class="video-hero-container">
            <video id="heroVideo" autoplay muted loop playsinline>
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
                        <h2 class="about-title">Expert, Compassionate Caregivers</h2>

                        <div class="about-features">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="feature-box">
                                        <div class="feature-icon">
                                            <span data-ico-remixiconsbusiness="" class="bt_bb_icon_holder"></span>
                                        </div>
                                        <div class="feature-content">
                                            <h4 class="feature-title">Values</h4>
                                            <p class="feature-desc">We care for the whole person and believe that addressing a
                                                broad range of life's complexities.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="feature-box">
                                        <div class="feature-icon">
                                            <i class="home-icon"></i>
                                        </div>
                                        <div class="feature-content">
                                            <h4 class="feature-title">Experience</h4>
                                            <p class="feature-desc">A community where people achieve their full
                                                potential for health and well-being.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="feature-box">
                                        <div class="feature-icon">
                                            <i class="approach-icon"></i>
                                        </div>
                                        <div class="feature-content">
                                            <h4 class="feature-title">Approach</h4>
                                            <p class="feature-desc">Partnerships with education, government, and
                                                community organizations multiply our impact.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="feature-box">
                                        <div class="feature-icon">
                                            <i class="providers-icon"></i>
                                        </div>
                                        <div class="feature-content">
                                            <h4 class="feature-title">Providers</h4>
                                            <p class="feature-desc">Patient-centered healthcare with excellence in
                                                quality, service, and access to a range of needs.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Treatment Results Showcase Section -->
    <section class="treatment-results-section">
        <div class="container">
            <div class="results-header">
                <span class="testimonials-tag">TRANSFORMATIONS</span>
                <h2 class="results-title">Before & After Results</h2>
                <p class="results-subtitle">Real results from our professional treatments</p>
            </div>

            <div class="results-slider-container">
                <div class="results-slider-wrapper">
                    <div class="results-slider-track" id="resultsSliderTrack">
                        
                        <!-- Result Card 1 -->
                        <div class="result-card">
                            <div class="result-image-container">
                                <img src="assets/images/before-after/1.png" alt="Bunion Correction Before After" class="result-image">
                                <div class="result-overlay">
                                    <div class="result-content">
                                        <h4 class="result-title">Bunion Correction</h4>
                                        <p class="result-duration">6 months treatment</p>
                                        <div class="result-badge">Success</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Result Card 2 -->
                        <div class="result-card">
                            <div class="result-image-container">
                                <img src="assets/images/before-after/2.png" alt="Plantar Fasciitis Before After" class="result-image">
                                <div class="result-overlay">
                                    <div class="result-content">
                                        <h4 class="result-title">Plantar Fasciitis</h4>
                                        <p class="result-duration">3 months recovery</p>
                                        <div class="result-badge">Success</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Result Card 3 -->
                        <div class="result-card">
                            <div class="result-image-container">
                                <img src="assets/images/before-after/3.png" alt="Ankle Surgery Before After" class="result-image">
                                <div class="result-overlay">
                                    <div class="result-content">
                                        <h4 class="result-title">Ankle Surgery</h4>
                                        <p class="result-duration">4 months healing</p>
                                        <div class="result-badge">Success</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Result Card 4 -->
                        <div class="result-card">
                            <div class="result-image-container">
                                <img src="assets/images/before-after/4.png" alt="Hammer Toe Before After" class="result-image">
                                <div class="result-overlay">
                                    <div class="result-content">
                                        <h4 class="result-title">Hammer Toe</h4>
                                        <p class="result-duration">2 months treatment</p>
                                        <div class="result-badge">Success</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Result Card 5 -->
                        <div class="result-card">
                            <div class="result-image-container">
                                <img src="assets/images/before-after/5.png" alt="Ingrown Nail Before After" class="result-image">
                                <div class="result-overlay">
                                    <div class="result-content">
                                        <h4 class="result-title">Ingrown Nail</h4>
                                        <p class="result-duration">1 month recovery</p>
                                        <div class="result-badge">Success</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Result Card 6 -->
                        <div class="result-card">
                            <div class="result-image-container">
                                <img src="assets/images/before-after/6.png" alt="Diabetic Foot Care Before After" class="result-image">
                                <div class="result-overlay">
                                    <div class="result-content">
                                        <h4 class="result-title">Diabetic Foot Care</h4>
                                        <p class="result-duration">Ongoing care</p>
                                        <div class="result-badge">Success</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Slider Controls -->
                <div class="results-slider-controls">
                    <div class="results-slider-dots" id="resultsSliderDots"></div>
                    
                    <div class="results-slider-arrows">
                        <button class="results-arrow-btn prev-arrow" id="resultsPrevBtn" aria-label="Previous results">
                            <i class="fa fa-chevron-left"></i>
                        </button>
                        <button class="results-arrow-btn next-arrow" id="resultsNextBtn" aria-label="Next results">
                            <i class="fa fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Conditions We Treat Section -->
    <section class="conditions-section">
        <div class="container">
            <div class="conditions-header">
                <span class="conditions-tag">SPECIALIZATIONS</span>
                <h2 class="conditions-title">Conditions We Treat</h2>
                <p class="conditions-subtitle">Comprehensive foot and ankle care for all conditions</p>
            </div>

            <div class="conditions-grid">
                <div class="condition-card">
                    <div class="condition-icon">
                        <i class="fas fa-foot"></i>
                    </div>
                    <h4 class="condition-title">Bunion Surgery</h4>
                    <p class="condition-desc">Advanced minimally invasive bunion correction using latest surgical techniques with faster recovery times and excellent cosmetic results.</p>
                    <a href="bunion.php" class="condition-read-more">Read More</a>
                </div>

                <div class="condition-card">
                    <div class="condition-icon">
                        <i class="fas fa-bone"></i>
                    </div>
                    <h4 class="condition-title">Heel Pain</h4>
                    <p class="condition-desc">Comprehensive treatment for plantar fasciitis and heel spurs. We offer both conservative treatments and surgical options for persistent cases.</p>
                    <a href="heel-pain.php" class="condition-read-more">Read More</a>
                </div>

                <div class="condition-card">
                    <div class="condition-icon">
                        <i class="fas fa-walking"></i>
                    </div>
                    <h4 class="condition-title">Flat Foot</h4>
                    <p class="condition-desc">Expert reconstruction for adult acquired flatfoot deformity including custom orthotics and advanced surgical reconstruction techniques.</p>
                    <a href="flat-foot.php" class="condition-read-more">Read More</a>
                </div>

                <div class="condition-card">
                    <div class="condition-icon">
                        <i class="fas fa-ambulance"></i>
                    </div>
                    <h4 class="condition-title">Ankle Arthritis</h4>
                    <p class="condition-desc">Specialized care including joint preservation techniques, ankle arthroscopy, and total ankle replacement to maintain mobility.</p>
                    <a href="arthritis-midfoot.php" class="condition-read-more">Read More</a>
                </div>

                <div class="condition-card">
                    <div class="condition-icon">
                        <i class="fas fa-hand-paper"></i>
                    </div>
                    <h4 class="condition-title">Achilles Tendon</h4>
                    <p class="condition-desc">Complete achilles care from acute ruptures to chronic tendinopathy using minimally invasive repair techniques and rehabilitation.</p>
                    <a href="conditions/achilles-tendon-pain.php" class="condition-read-more">Read More</a>
                </div>

                <div class="condition-card">
                    <div class="condition-icon">
                        <i class="fas fa-cut"></i>
                    </div>
                    <h4 class="condition-title">Toe Deformities</h4>
                    <p class="condition-desc">Expert correction of hammer toe, claw toe, and mallet toe deformities with minimal scarring and quick recovery options.</p>
                    <a href="great-toe.php" class="condition-read-more">Read More</a>
                </div>

                <div class="condition-card">
                    <div class="condition-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h4 class="condition-title">Diabetic Foot</h4>
                    <p class="condition-desc">Comprehensive diabetic foot care including ulcer treatment and infection management to prevent amputations and maintain foot health.</p>
                    <a href="conditions/diabetic-foot.php" class="condition-read-more">Read More</a>
                </div>

                <div class="condition-card">
                    <div class="condition-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h4 class="condition-title">Sports Injuries</h4>
                    <p class="condition-desc">Specialized treatment for athletic foot and ankle injuries with targeted rehabilitation and injury prevention strategies.</p>
                    <a href="conditions/anklesprain.php" class="condition-read-more">Read More</a>
                </div>
            </div>

            <div class="conditions-footer">
                <a href="conditions.php" class="btn view-all-btn">VIEW ALL CONDITIONS</a>
            </div>
        </div>
    </section>

    <!-- Review Section - JavaScript Testimonials Slider -->
    <section class="testimonials-section">
        <div class="container">
            <div class="testimonials-header">
                <span class="testimonials-tag">REVIEWS</span>
                <h2 class="testimonials-title">Real customers, real results</h2>
            </div>

            <!-- JavaScript Slider -->
            <div class="testimonials-slider" id="testimonialsSlider">
                <div class="slider-viewport">
                    <div class="slider-track" id="sliderTrack">
                        
                        <!-- Review Card 1 -->
                        <div class="testimonial-slide">
                            <div class="google-review-card">
                                <div class="google-header">
                                    <div class="google-logo">
                                        <div class="google-logo-icon">G</div>
                                        <span class="google-text">Google Review</span>
                                    </div>
                                </div>
                                
                                <div class="star-rating">
                                    <div class="stars">
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                    </div>
                                    <span class="rating-text">5.0</span>
                                </div>
                                
                                <div class="review-content">
                                    <p class="review-text">I am a retired Paediatrician and my wife a retired GP. We had gone to India where my wife twisted her foot and fractured 4 metatarsals in her foot. Dr Kini provided exceptional care and expertise that made all the difference in her recovery.</p>
                                    <a href="#" class="read-more">Read more</a>
                                </div>
                                
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar">
                                        <span class="avatar-text">AD</span>
                                    </div>
                                    <div class="reviewer-details">
                                        <div class="reviewer-name">Adrian Daniels</div>
                                        <div class="review-date">March 3, 2022</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review Card 2 -->
                        <div class="testimonial-slide">
                            <div class="google-review-card">
                                <div class="google-header">
                                    <div class="google-logo">
                                        <div class="google-logo-icon">G</div>
                                        <span class="google-text">Google Review</span>
                                    </div>
                                   
                                </div>
                                
                                <div class="star-rating">
                                    <div class="stars">
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                    </div>
                                    <span class="rating-text">5.0</span>
                                </div>
                                
                                <div class="review-content">
                                    <p class="review-text">My wife saw Mr Kini as she had become unable to walk due to the build up of significant scar tissue from a former achilles injury. His surgical expertise and post-operative care were outstanding. She can now walk pain-free.</p>
                                    <a href="#" class="read-more">Read more</a>
                                </div>
                                
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar">
                                        <span class="avatar-text">JS</span>
                                    </div>
                                    <div class="reviewer-details">
                                        <div class="reviewer-name">John Smith</div>
                                        <div class="review-date">February 15, 2022</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review Card 3 -->
                        <div class="testimonial-slide">
                            <div class="google-review-card">
                                <div class="google-header">
                                    <div class="google-logo">
                                        <div class="google-logo-icon">G</div>
                                        <span class="google-text">Google Review</span>
                                    </div>
                                    
                                </div>
                                
                                <div class="star-rating">
                                    <div class="stars">
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                    </div>
                                    <span class="rating-text">5.0</span>
                                </div>
                                
                                <div class="review-content">
                                    <p class="review-text">I can highly recommend Dr Kini, he is a brilliant orthopaedic surgeon. I had hammered toe surgery in July, which I'm quickly recovering from. His attention to detail and patient care throughout the entire process was exceptional.</p>
                                    <a href="#" class="read-more">Read more</a>
                                </div>
                                
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar">
                                        <span class="avatar-text">MJ</span>
                                    </div>
                                    <div class="reviewer-details">
                                        <div class="reviewer-name">Mary Johnson</div>
                                        <div class="review-date">January 28, 2022</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review Card 4 -->
                        <div class="testimonial-slide">
                            <div class="google-review-card">
                                <div class="google-header">
                                    <div class="google-logo">
                                        <div class="google-logo-icon">G</div>
                                        <span class="google-text">Google Review</span>
                                    </div>
                                   
                                </div>
                                
                                <div class="star-rating">
                                    <div class="stars">
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                    </div>
                                    <span class="rating-text">5.0</span>
                                </div>
                                
                                <div class="review-content">
                                    <p class="review-text">I initially saw Dr Kini for a broken toe, but on the x-ray he spotted Haglunds Deformity in one foot - this was a revelation, it explained why I had been having issues. His diagnostic skills and treatment approach were exceptional.</p>
                                    <a href="#" class="read-more">Read more</a>
                                </div>
                                
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar">
                                        <span class="avatar-text">RW</span>
                                    </div>
                                    <div class="reviewer-details">
                                        <div class="reviewer-name">Robert Wilson</div>
                                        <div class="review-date">December 10, 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review Card 5 -->
                        <div class="testimonial-slide">
                            <div class="google-review-card">
                                <div class="google-header">
                                    <div class="google-logo">
                                        <div class="google-logo-icon">G</div>
                                        <span class="google-text">Google Review</span>
                                    </div>
                                    
                                    
                                </div>
                                
                                <div class="star-rating">
                                    <div class="stars">
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                    </div>
                                    <span class="rating-text">5.0</span>
                                </div>
                                
                                <div class="review-content">
                                    <p class="review-text">Dr Kini performed ankle arthroscopy for my chronic ankle pain. The procedure was minimally invasive and recovery was much faster than expected. I'm now back to running and all my normal activities without any pain.</p>
                                    <a href="#" class="read-more">Read more</a>
                                </div>
                                
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar">
                                        <span class="avatar-text">SP</span>
                                    </div>
                                    <div class="reviewer-details">
                                        <div class="reviewer-name">Sarah Parker</div>
                                        <div class="review-date">November 22, 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review Card 6 -->
                        <div class="testimonial-slide">
                            <div class="google-review-card">
                                <div class="google-header">
                                    <div class="google-logo">
                                        <div class="google-logo-icon">G</div>
                                        <span class="google-text">Google Review</span>
                                    </div>
                                    
                                </div>
                                
                                <div class="star-rating">
                                    <div class="stars">
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                        <span class="star">★</span>
                                    </div>
                                    <span class="rating-text">5.0</span>
                                </div>
                                
                                <div class="review-content">
                                    <p class="review-text">Excellent care and treatment for my flat foot condition. Dr Kini explained everything clearly and the reconstruction surgery was very successful. The follow-up care was outstanding and I couldn't be happier with the results.</p>
                                    <a href="#" class="read-more">Read more</a>
                                </div>
                                
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar">
                                        <span class="avatar-text">DL</span>
                                    </div>
                                    <div class="reviewer-details">
                                        <div class="reviewer-name">David Lee</div>
                                        <div class="review-date">October 5, 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Slider Controls -->
                <div class="slider-controls">
                    <div class="slider-dots" id="sliderDots"></div>
                    
                    <div class="slider-arrows">
                        <button class="slider-arrow prev-arrow" id="prevBtn" aria-label="Previous testimonials">
        <i class="fa fa-chevron-left"></i>
    </button>
    <button class="slider-arrow next-arrow" id="nextBtn" aria-label="Next testimonials">
        <i class="fa fa-chevron-right"></i>
    </button>
                    </div>
                </div>
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
                        <div class="logo-info">
                            <h4 class="logo-name">Aziz Polyclinic</h4>
                            <p class="logo-address">AMC Rd, near Damani Hospital, Dibrugarh, Assam 786001</p>
                        </div>
                    </div>
                    <div class="logo-slide">
                        <img src="assets/images/company/hinduja.png" alt="Hinduja Hospital">
                        <div class="logo-info">
                            <h4 class="logo-name">Hinduja Hospital & Research Center</h4>
                            <p class="logo-address">SVS Rd, Mahim West, Shivaji Park, Mumbai, 400016</p>
                        </div>
                    </div>
                    <div class="logo-slide">
                        <img src="assets/images/company/Jupiter.png" alt="Jupiter Hospital">
                        <div class="logo-info">
                            <h4 class="logo-name">Jupiter Hospital</h4>
                            <p class="logo-address">Eastern Express Highway, Service Rd, Next To Viviana Mall, Thane, 400601</p>
                        </div>
                    </div>
                    <div class="logo-slide">
                        <img src="assets/images/company/lilavati.png" alt="Lilavati Hospital">
                        <div class="logo-info">
                            <h4 class="logo-name">Lilavati Hospital & Research Center</h4>
                            <p class="logo-address">Lilavati Hospital, A-791, Bandra Reclamation Rd, Bandra West, Mumbai, 400050</p>
                        </div>
                    </div>
                    <div class="logo-slide">
                        <img src="assets/images/company/MGM.png" alt="MGM Healthcare">
                        <div class="logo-info">
                            <h4 class="logo-name">MGM Hospital</h4>
                            <p class="logo-address">Plot No.35, Atmashanti Society, Sector 3, Vashi, Navi Mumbai, Maharashtra 400703</p>
                        </div>
                    </div>
                    <div class="logo-slide">
                        <img src="assets/images/company/oyster.png" alt="Oyster & Pearl Hospital">
                        <div class="logo-info">
                            <h4 class="logo-name">Oyster & Pearl Hospital</h4>
                            <p class="logo-address">1671-75, Ganeshkhind Rd, near Hotel Pride, Narveer Tanaji Wadi, Shivajinagar, Pune, Maharashtra 411016</p>
                        </div>
                    </div>
                    <div class="logo-slide">
                        <img src="assets/images/company/Parekhs.png" alt="Parekh's Hospital">
                        <div class="logo-info">
                            <h4 class="logo-name">Parekh’s Hospital</h4>
                            <p class="logo-address">Shyamal Cross Road, 132 Feet Ring Road Shyamal, Satellite, Ahmedabad, Gujarat 380015</p>
                        </div>
                    </div>
                    <div class="logo-slide">
                        <img src="assets/images/company/Reliance.png" alt="Reliance Hospital">
                        <div class="logo-info">
                            <h4 class="logo-name">HN Reliance Hospital</h4>
                            <p class="logo-address">Prarthana Samaj, Raja Rammohan Roy Rd, Charni Road East, Khetwadi, Girgaon, Mumbai, 400004</p>
                        </div>
                    </div>
                    <!-- Duplicate slides for seamless loop -->
                    <div class="logo-slide">
                        <img src="assets/images/company/aziz.png" alt="Aziz Hospital">
                        <div class="logo-info">
                            <h4 class="logo-name">Aziz Polyclinic</h4>
                            <p class="logo-address">AMC Rd, near Damani Hospital, Dibrugarh, Assam 786001</p>
                        </div>
                    </div>
                    <div class="logo-slide">
                        <img src="assets/images/company/hinduja.png" alt="Hinduja Hospital">
                        <div class="logo-info">
                            <h4 class="logo-name">Hinduja Hospital & Research Center</h4>
                            <p class="logo-address">SVS Rd, Mahim West, Shivaji Park, Mumbai, 400016</p>
                        </div>
                    </div>
                    <div class="logo-slide">
                        <img src="assets/images/company/Jupiter.png" alt="Jupiter Hospital">
                        <div class="logo-info">
                            <h4 class="logo-name">Jupiter Hospital</h4>
                            <p class="logo-address">Eastern Express Highway, Service Rd, Next To Viviana Mall, Thane, 400601</p>
                        </div>
                    </div>
                    <div class="logo-slide">
                        <img src="assets/images/company/lilavati.png" alt="Lilavati Hospital">
                        <div class="logo-info">
                            <h4 class="logo-name">Lilavati Hospital & Research Center</h4>
                            <p class="logo-address">Lilavati Hospital, A-791, Bandra Reclamation Rd, Bandra West, Mumbai, 400050</p>
                        </div>
                    </div>
                    <div class="logo-slide">
                        <img src="assets/images/company/MGM.png" alt="MGM Healthcare">
                        <div class="logo-info">
                            <h4 class="logo-name">MGM Hospital</h4>
                            <p class="logo-address">Plot No.35, Atmashanti Society, Sector 3, Vashi, Navi Mumbai, Maharashtra 400703</p>
                        </div>
                    </div>
                    <div class="logo-slide">
                        <img src="assets/images/company/oyster.png" alt="Oyster & Pearl Hospital">
                        <div class="logo-info">
                            <h4 class="logo-name">Oyster & Pearl Hospital</h4>
                            <p class="logo-address">1671-75, Ganeshkhind Rd, near Hotel Pride, Narveer Tanaji Wadi, Shivajinagar, Pune, Maharashtra 411016</p>
                        </div>
                    </div>
                    <div class="logo-slide">
                        <img src="assets/images/company/Parekhs.png" alt="Parekh's Hospital">
                        <div class="logo-info">
                            <h4 class="logo-name">Parekh’s Hospital</h4>
                            <p class="logo-address">Shyamal Cross Road, 132 Feet Ring Road Shyamal, Satellite, Ahmedabad, Gujarat 380015</p>
                        </div>
                    </div>
                    <div class="logo-slide">
                        <img src="assets/images/company/Reliance.png" alt="Reliance Hospital">
                        <div class="logo-info">
                            <h4 class="logo-name">HN Reliance Hospital</h4>
                            <p class="logo-address">Prarthana Samaj, Raja Rammohan Roy Rd, Charni Road East, Khetwadi, Girgaon, Mumbai, 400004</p>
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

                        <!-- Map Container -->
                        <div class="contact-map-container">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.9674891487547!2d72.83102731490284!3d19.03758078711428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cf26f4c34d1b%3A0x2be8d86c82a7fdbb!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1639123456789!5m2!1sen!2sin" 
                                width="100%" 
                                height="350" 
                                style="border:0; border-radius: 12px; margin: 20px 0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
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
                                <label for="phone">Phone Number*</label>
                                <input type="tel" id="phone" name="phone" required placeholder="Enter your phone number" 
                                       pattern="[0-9+\-\s()]*" 
                                       title="Please enter only numbers, spaces, +, -, and parentheses"
                                       oninput="this.value = this.value.replace(/[^0-9+\-\s()]/g, '')"
                                       maxlength="15">
                            </div>

                            <div class="form-group">
                                <label for="message">Additional notes</label>
                                <textarea id="message" name="message" rows="4"
                                    placeholder="Tell us more about your condition or any questions you have..."></textarea>
                            </div>

                            <button type="submit" class="contact-submit-btn">SEND YOUR MESSAGE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Lightweight Testimonials Slider JavaScript -->
<script src="assets/js/testimonials-new.js"></script>
<!-- Treatment Results Slider JavaScript -->
<script src="assets/js/treatment-results.js"></script>

<?php include 'includes/footer.php'; ?>