<?php include 'includes/header.php'; ?>
<main>
    <section class="hero-section">
        <div class="video-hero-container">
            <!-- Desktop Video -->
            <video class="hero-video-desktop" autoplay muted loop playsinline preload="metadata" poster="assets/images/hero-about.avif">
                <source src="assets/video/hero-bg.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            
            <!-- Mobile Video -->
            <video class="hero-video-mobile" autoplay muted loop playsinline preload="metadata">
                <source src="assets/video/mobilebanner-footarkclinic.webm" type="video/webm">
                <source src="assets/video/mobilebanner-footarkclinic.mp4" type="video/mp4">
                <source src="assets/video/mobilebanner-footarkclinic.mov" type="video/quicktime">
                Your browser does not support the video tag.
            </video>
        </div>

        <div class="hero-content-overlay">
            <div class="container-fluid hero-content-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="hero-content">
                            <h1 class="hero-title">FOOTARK CLINIC</h1>
                            <p class="hero-subtitle">
                                A leading centre in Mumbai for Foot & Ankle care, offering advanced treatment and compassionate care.
                            </p>
                            <div class="hero-buttons">
                                <a href="about.php" class="btn view-services-btn">Know More</a>
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
                        <picture>
                            <source srcset="assets/images/Dr.Abhishekkini-FootAnkleSurgeonMumbai (2).webp" type="image/webp">
                            <img src="assets/images/Dr.Abhishekkini-FootAnkleSurgeonMumbai (2).webp" style="border-radius:var(--border-radius-large);" alt="Dr. Abhishek Kini" class="img-fluid" width="600" height="800" fetchpriority="high" decoding="async">
                        </picture>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about-content">
                        <div class="about-tag">TRUSTED FOOT & ANKLE SPECIALIST OFFERING WORLD-CLASS CARE IN MUMBAI</div>
                        <h2 class="about-title">About Dr. Abhishek Kini</h2>
                        <div class="doctor-info" style="margin-bottom: 2rem;">
                            <div class="desktop-hidden-image">
                                <img src="assets/images/Dr.Abhishekkini-FootAnkleSurgeonMumbai (2).webp" style="border-radius:var(--border-radius-large);" alt="Dr. Abhishek Kini" class="img-fluid" width="600" height="800" loading="lazy">
                        </div>
                            <p style="color: var(--color-text-secondary); font-size: 1rem; line-height: 1.4; margin-bottom: 0.5rem;font-style:italic;">
                                DNB (Orthopaedics), MNAMS<br>
                                Diploma in Sports Medicine (IOC)<br>
                                Foot & Ankle Specialist, Orthopaedic Surgeon
                            </p>
                        </div>
                        
                        
                        <div class="about-description" style="margin-bottom: 2rem;">
                            <p style="color: var(--color-text-secondary); font-size: 1.1rem; line-height: 1.6;">
                                Expert foot and ankle surgeon with over 15 years of experience. Trained internationally in the UK and Holland. Specializes in minimally invasive surgery for faster recovery and better results.
                            </p>
                        </div>

                        <div class="about-features">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="feature-box">
                                        <div class="feature-icon">
                                            <img src="assets/images/home-about/Experienced.webp" alt="Experienced" style="width: auto; height: 40px; object-fit: cover;" width="40" height="40" loading="lazy">
                                        </div>
                                        <div class="feature-content">
                                            <h4 class="feature-title">15+ Years</h4>
                                            <p class="feature-desc">Expert in foot & ankle surgery with proven results.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="feature-box">
                                        <div class="feature-icon">
                                           <img src="assets/images/home-about/Expert.webp" alt="Expert" style="width: auto; height: 40px; object-fit: cover;" width="40" height="40" loading="lazy">
                                        </div>
                                        <div class="feature-content">
                                            <h4 class="feature-title">Advanced</h4>
                                            <p class="feature-desc">Minimally invasive techniques for quick recovery.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="feature-box">
                                        <div class="feature-icon">
                                            <img src="assets/images/home-about/Internationally Trained.webp" alt="Internationally Trained" style="width: auto; height: 40px; object-fit: cover;" width="40" height="40" loading="lazy">
                                        </div>
                                        <div class="feature-content">
                                            <h4 class="feature-title">UK Trained</h4>
                                            <p class="feature-desc">International training brings world-class care.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="feature-box">
                                        <div class="feature-icon">
                                            <img src="assets/images/home-about/PatientCentric.webp" alt="Patient-Centric" style="width: auto; height: 40px; object-fit: cover;" width="40" height="40" loading="lazy">
                                        </div>
                                        <div class="feature-content">
                                            <h4 class="feature-title">Patient First</h4>
                                            <p class="feature-desc">Personalized care for the best outcomes.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- About Button -->
                        <div class="about-button" style="margin-top: 2rem;">
                            <a href="about.php" class="btn view-all-btn">About Dr. Kini</a>
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
                                <img src="assets/images/before-after/1.webp" alt="Bunion Correction Before After" class="result-image" width="400" height="300" loading="lazy">
                            </div>
                        </div>

                        <!-- Result Card 2 -->
                        <div class="result-card">
                            <div class="result-image-container">
                                <img src="assets/images/before-after/2.webp" alt="Plantar Fasciitis Before After" class="result-image" width="400" height="300" loading="lazy">
                            </div>
                        </div>

                        <!-- Result Card 3 -->
                        <div class="result-card">
                            <div class="result-image-container">
                                <img src="assets/images/before-after/3.webp" alt="Ankle Surgery Before After" class="result-image" width="400" height="300" loading="lazy">
                            </div>
                        </div>

                        <!-- Result Card 4 -->
                        <div class="result-card">
                            <div class="result-image-container">
                                <img src="assets/images/before-after/4.webp" alt="Hammer Toe Before After" class="result-image" width="400" height="300" loading="lazy">
                            </div>
                        </div>

                        <!-- Result Card 5 -->
                        <div class="result-card">
                            <div class="result-image-container">
                                <img src="assets/images/before-after/5.webp" alt="Ingrown Nail Before After" class="result-image" width="400" height="300" loading="lazy">
                            </div>
                        </div>

                        <!-- Result Card 6 -->
                        <div class="result-card">
                            <div class="result-image-container">
                                <img src="assets/images/before-after/6.webp" alt="Diabetic Foot Care Before After" class="result-image" width="400" height="300" loading="lazy">
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
                <span class="testimonials-tag">OUR SERVICES</span>
                <h2 class="conditions-title">Expert Foot & Ankle Care</h2>
                <p class="conditions-subtitle">Comprehensive treatment for all foot and ankle conditions</p>
            </div>

            <div class="conditions-grid">
                <div class="condition-card">
                    <div class="condition-top">
                        <div class="condition-icon">
                            <img src="assets/images/home-conditions/SportsInjury.webp" alt="Ankle Sprain" style="width: auto; height: 50px; object-fit: cover;" width="50" height="50" loading="lazy">
                        </div>
                        <h4 class="condition-title">Ankle Sprain</h4>
                        <br>
                    </div>
                    <div class="condition-bottom">
                        <p class="condition-desc">Expert treatment for ankle sprains from minor to severe injuries.</p>
                        <a href="conditions/anklesprain.php" class="condition-read-more black-color">Read More</a>
                    </div>
                </div>

                <div class="condition-card">
                    <div class="condition-top">
                        <div class="condition-icon">
                            <img src="assets/images/home-conditions/AnkleArthroscopy.webp" alt="Ankle Arthroscopy" style="width: auto; height: 50px; object-fit: cover;" width="50" height="50" loading="lazy">
                        </div>
                        <h4 class="condition-title">Ankle Arthroscopy Treatment</h4>
                    </div>
                    <div class="condition-bottom">
                        <p class="condition-desc">Minimally invasive keyhole surgery for ankle joint problems and injuries.</p>
                        <a href="treatments/t-ankle-arthroscopy.php" class="condition-read-more black-color">Read More</a>
                    </div>
                </div>

                <div class="condition-card">
                    <div class="condition-top">
                        <div class="condition-icon">
                            <img src="assets/images/home-conditions/FootAnkleDeformity.webp" alt="Bunion" style="width: auto; height: 50px; object-fit: cover;" width="50" height="50" loading="lazy">
                        </div>
                        <h4 class="condition-title">Bunion</h4>
                        <br>
                    </div>
                    <div class="condition-bottom">
                        <p class="condition-desc">Modern bunion correction with minimal scarring and quick return to activities.</p>
                        <a href="conditions/bunion.php" class="condition-read-more black-color">Read More</a>
                    </div>
                </div>

                <div class="condition-card">
                    <div class="condition-top">
                        <div class="condition-icon">
                            <img src="assets/images/home-conditions/FlatFoot.webp" alt="Flat Foot" style="width: auto; height: 50px; object-fit: cover;" width="50" height="50" loading="lazy">
                        </div>
                        <h4 class="condition-title">Flat Foot</h4>
                        <br>
                    </div>
                    <div class="condition-bottom">
                        <p class="condition-desc">Surgical & non-surgical solutions for flat feet and arch problems.</p>
                        <a href="conditions/flat-foot.php" class="condition-read-more black-color">Read More</a>
                    </div>
                </div>

                <div class="condition-card">
                    <div class="condition-top">
                        <div class="condition-icon">
                            <img src="assets/images/home-conditions/HeelPain.webp" alt="Heel Pain" style="width: auto; height: 50px; object-fit: cover;" width="50" height="50" loading="lazy">
                        </div>
                        <h4 class="condition-title">Heel Pain</h4>
                        <br>
                    </div>
                    <div class="condition-bottom">
                        <p class="condition-desc">Effective treatment for plantar fasciitis and chronic heel pain.</p>
                        <a href="conditions/heel-pain.php" class="condition-read-more black-color">Read More</a>
                    </div>
                </div>

                <div class="condition-card">
                    <div class="condition-top">
                        <div class="condition-icon">
                            <img src="assets/images/home-conditions/LigamentReconstruction.webp" alt="Ankle Ligament Reconstruction" style="width: auto; height: 50px; object-fit: cover;" width="50" height="50" loading="lazy">
                        </div>
                        <h4 class="condition-title">Ankle Ligament Reconstruction</h4>
                    </div>
                    <div class="condition-bottom">
                        <p class="condition-desc">Surgical repair for chronic ankle instability and ligament tears.</p>
                        <a href="treatments/t-ankle-ligament.php" class="condition-read-more black-color">Read More</a>
                    </div>
                </div>

                <div class="condition-card">
                    <div class="condition-top">
                        <div class="condition-icon">
                            <img src="assets/images/home-conditions/AchiliesTendonRepair.webp" alt="Achilles Tendon Repair" style="width: auto; height: 50px; object-fit: cover;" width="50" height="50" loading="lazy">
                        </div>
                        <h4 class="condition-title">Achilles Tendon Repair</h4>
                        <br>
                    </div>
                    <div class="condition-bottom">
                        <p class="condition-desc">Advanced surgical repair for Achilles tendon ruptures and tears.</p>
                        <a href="treatments/t-tendon-rupture.php" class="condition-read-more black-color">Read More</a>
                    </div>
                </div>

                <div class="condition-card">
                    <div class="condition-top">
                        <div class="condition-icon">
                            <img src="assets/images/home-conditions/BigToesurgery.webp" alt="Big Toe Surgery" style="width: auto; height: 50px; object-fit: cover;" width="50" height="50" loading="lazy">
                        </div>
                        <h4 class="condition-title">Big Toe Surgery</h4>
                        <br>
                    </div>
                    <div class="condition-bottom">
                        <p class="condition-desc">Specialized treatment for big toe joint arthritis and stiffness.</p>
                        <a href="treatments/t-big-toe.php" class="condition-read-more black-color">Read More</a>
                    </div>
                </div>
            </div>

            <div class="conditions-footer">
                <a href="conditions.php" class="btn view-all-btn">VIEW ALL</a>
            </div>
        </div>
    </section>

    <!-- Review Section - JavaScript Testimonials Slider -->
    <section class="testimonials-section">
        <div class="container" style="max-width:100%;width: 100%;">
            <div class="testimonials-header">
                <span class="testimonials-tag">REVIEWS</span>
                <h2 class="testimonials-title">Real customers, real results</h2>
            </div>

            <!-- JavaScript Slider -->
            <div class="testimonials-slider" id="testimonialsSlider">
                <div class="slider-viewport">
                    <div class="slider-track" id="sliderTrack">
                        
                        <!-- Review Card 7 -->
                        <div class="testimonial-slide">
                            <div class="google-review-card">
                                <div class="google-header">
                                    <div class="google-logo">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" style="height: 20px; width: auto; opacity: 0.8;">
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
                                    <p class="review-text">I underwent talus bone and medial malleolus surgery along with ankle correction fusion surgery. He is knowledgeable, friendly and efficient. Most importantly he has the patience to listen and clear all doubts. He is quite empathetic, understanding and honest doctor. Thanks to you my Dedicated Doctor.</p>
                                </div>
                                
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar">
                                        <span class="avatar-text">JS</span>
                                    </div>
                                    <div class="reviewer-details">
                                        <div class="reviewer-name">Jagdish Shadija</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review Card 8 -->
                        <div class="testimonial-slide">
                            <div class="google-review-card">
                                <div class="google-header">
                                    <div class="google-logo">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" style="height: 20px; width: auto; opacity: 0.8;">
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
                                    <p class="review-text">One of the Best Doctors for Ankle in our country. He will always guide and give perfect advice, very knowledgeable and well informed Dr. Highly Recommended!</p>
                                </div>
                                
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar">
                                        <span class="avatar-text">NG</span>
                                    </div>
                                    <div class="reviewer-details">
                                        <div class="reviewer-name">Nixit Gada</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review Card 9 -->
                        <div class="testimonial-slide">
                            <div class="google-review-card">
                                <div class="google-header">
                                    <div class="google-logo">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" style="height: 20px; width: auto; opacity: 0.8;">
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
                                    <p class="review-text">You can trust him completely. My ankle got ruptured and after visiting I felt very positive. One of the senior surgeons from Delhi gave me more confidence saying that he is a great doctor. My surgery and recovery process went very smooth. I am happy and my foot is getting better day by day.</p>
                                </div>
                                
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar">
                                        <span class="avatar-text">VN</span>
                                    </div>
                                    <div class="reviewer-details">
                                        <div class="reviewer-name">Vinay Nagia</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review Card 10 -->
                        <div class="testimonial-slide">
                            <div class="google-review-card">
                                <div class="google-header">
                                    <div class="google-logo">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" style="height: 20px; width: auto; opacity: 0.8;">
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
                                    <p class="review-text">Apart from being an excellent ortho, Dr. Kini has a very rare quality where the patient and family can blindly trust and have faith in him. His positive energy is contagious and helps you win half the battle. He is one of those very few considerate doctors who takes into consideration financials of the family as well.</p>
                                </div>
                                
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar">
                                        <span class="avatar-text">ML</span>
                                    </div>
                                    <div class="reviewer-details">
                                        <div class="reviewer-name">Mitali Lakhawala</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review Card 11 -->
                        <div class="testimonial-slide">
                            <div class="google-review-card">
                                <div class="google-header">
                                    <div class="google-logo">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" style="height: 20px; width: auto; opacity: 0.8;">
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
                                    <p class="review-text">Our Heartiest Thanks to feet ankle expert Dr. Abhishek Kini! Thanks a lot for wonderful surgery of my son's Ankle, fractured badly and within two months, my son is back on his feet. A Very complicated surgery and Dr. Abhishek made it Successfully Rewardable. Hats off to you Sir. Stay Blessed always.</p>
                                </div>
                                
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar">
                                        <span class="avatar-text">BN</span>
                                    </div>
                                    <div class="reviewer-details">
                                        <div class="reviewer-name">Batul Noble</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review Card 12 -->
                        <div class="testimonial-slide">
                            <div class="google-review-card">
                                <div class="google-header">
                                    <div class="google-logo">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" style="height: 20px; width: auto; opacity: 0.8;">
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
                                    <p class="review-text">Humble, helpful and brilliant are few words to describe Dr Kini. He ensures his patients are taken good care of, follows up with concern and gives abundant time for us to share our issues. Recommends other therapies before suggesting a surgery. Appreciate his effort and time in helping me recover. Thank you!</p>
                                </div>
                                
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar">
                                        <span class="avatar-text">SS</span>
                                    </div>
                                    <div class="reviewer-details">
                                        <div class="reviewer-name">Shraddha Shah</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review Card 13 -->
                        <div class="testimonial-slide">
                            <div class="google-review-card">
                                <div class="google-header">
                                    <div class="google-logo">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" style="height: 20px; width: auto; opacity: 0.8;">
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
                                    <p class="review-text">Best doctor for the treatment of Ankle injury. Have gone through osteochondral lesion surgery and really worked for me with Dr's treatment. I was suffering a lot and visited at least 10 doctors but nothing worked for me. Finally Dr. Kini's advice and treatment worked for me very well. Thank you so very much.</p>
                                </div>
                                
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar">
                                        <span class="avatar-text">AO</span>
                                    </div>
                                    <div class="reviewer-details">
                                        <div class="reviewer-name">Abhinav Onkar</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review Card 14 -->
                        <div class="testimonial-slide">
                            <div class="google-review-card">
                                <div class="google-header">
                                    <div class="google-logo">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" style="height: 20px; width: auto; opacity: 0.8;">
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
                                    <p class="review-text">A big thanks to feet ankle expert Dr. Abhishek! I had a bad Achilles tendon rupture & was operated from a local orthopedic surgeon. However things got worse. This is where Dr. Abhishek was referred to us. Got operated for debridement & TA repair & now back on my feet with much more confidence & completely healed. Thank you for your support Sir.</p>
                                </div>
                                
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar">
                                        <span class="avatar-text">AJ</span>
                                    </div>
                                    <div class="reviewer-details">
                                        <div class="reviewer-name">Abhijit Jamble</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review Card 15 -->
                        <div class="testimonial-slide">
                            <div class="google-review-card">
                                <div class="google-header">
                                    <div class="google-logo">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" style="height: 20px; width: auto; opacity: 0.8;">
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
                                    <p class="review-text">I met Dr Abhishek Kini 7 years ago for my Hallux Valgus problem. I think that he is a very soft spoken and a gentle person. Dr Abhishek is also knowledgeable and helpful. I just underwent a big toe surgery under his guidance. Thanks so much Dr Abhishek for always being there for me!</p>
                                </div>
                                
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar">
                                        <span class="avatar-text">MH</span>
                                    </div>
                                    <div class="reviewer-details">
                                        <div class="reviewer-name">Madhavi Hadker</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Review Card 16 -->
                        <div class="testimonial-slide">
                            <div class="google-review-card">
                                <div class="google-header">
                                    <div class="google-logo">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google" style="height: 20px; width: auto; opacity: 0.8;">
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
                                    <p class="review-text">I can never thank you enough for all your efforts. You are truly a man of honour and word. In my hardest moments you provided a light amongst the dark. Dr. Abhishek gave me moral support. He is an expert surgeon and an empathetic human being who understands the anxiety of patients. God bless you always Dr. Abhishek.</p>
                                </div>
                                
                                <div class="reviewer-info">
                                    <div class="reviewer-avatar">
                                        <span class="avatar-text">VP</span>
                                    </div>
                                    <div class="reviewer-details">
                                        <div class="reviewer-name">Vidhi Patel</div>
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
                <h2 class="logos-title">Hospital Associations</h2>
            </div>

            <div class="auto-slider-container">
                <div class="auto-slider-track">
                    <div class="logo-slide">
                        <img src="assets/images/company/aziz.webp" alt="Aziz Hospital">
                        <div class="logo-info">
                            <h4 class="logo-name">Aziz Polyclinic</h4>
                            <p class="logo-address">AMC Rd, near Damani Hospital, Dibrugarh, Assam 786001</p>
                        </div>
                    </div>
                    <div class="logo-slide">
                        <img src="assets/images/company/hinduja.webp" alt="Hinduja Hospital">
                        <div class="logo-info">
                            <h4 class="logo-name">Hinduja Hospital & Research Center</h4>
                            <p class="logo-address">SVS Rd, Mahim West, Shivaji Park, Mumbai, 400016</p>
                        </div>
                    </div>
                    <div class="logo-slide">
                        <img src="assets/images/company/Jupiter.webp" alt="Jupiter Hospital">
                        <div class="logo-info">
                            <h4 class="logo-name">Jupiter Hospital</h4>
                            <p class="logo-address">Eastern Express Highway, Service Rd, Next To Viviana Mall, Thane, 400601</p>
                        </div>
                    </div>
                    <div class="logo-slide">
                        <img src="assets/images/company/lilavati.webp" alt="Lilavati Hospital">
                        <div class="logo-info">
                            <h4 class="logo-name">Lilavati Hospital & Research Center</h4>
                            <p class="logo-address">Lilavati Hospital, A-791, Bandra Reclamation Rd, Bandra West, Mumbai, 400050</p>
                        </div>
                    </div>
                    <div class="logo-slide">
                        <img src="assets/images/company/MGM.webp" alt="MGM Healthcare">
                        <div class="logo-info">
                            <h4 class="logo-name">MGM Hospital</h4>
                            <p class="logo-address">Plot No.35, Atmashanti Society, Sector 3, Vashi, Navi Mumbai, Maharashtra 400703</p>
                        </div>
                    </div>
                    <div class="logo-slide">
                        <img src="assets/images/company/oyster.webp" alt="Oyster & Pearl Hospital">
                        <div class="logo-info">
                            <h4 class="logo-name">Oyster & Pearl Hospital</h4>
                            <p class="logo-address">1671-75, Ganeshkhind Rd, near Hotel Pride, Narveer Tanaji Wadi, Shivajinagar, Pune, Maharashtra 411016</p>
                        </div>
                    </div>
                    <div class="logo-slide">
                        <img src="assets/images/company/Parekhs.webp" alt="Parekh's Hospital">
                        <div class="logo-info">
                            <h4 class="logo-name">Parekh’s Hospital</h4>
                            <p class="logo-address">Shyamal Cross Road, 132 Feet Ring Road Shyamal, Satellite, Ahmedabad, Gujarat 380015</p>
                        </div>
                    </div>
                    <div class="logo-slide">
                        <img src="assets/images/company/Reliance.webp" alt="Reliance Hospital">
                        <div class="logo-info">
                            <h4 class="logo-name">HN Reliance Hospital</h4>
                            <p class="logo-address">Prarthana Samaj, Raja Rammohan Roy Rd, Charni Road East, Khetwadi, Girgaon, Mumbai, 400004</p>
                        </div>
                    </div>
                    <!-- Duplicate slides for seamless loop -->
                    <div class="logo-slide">
                        <img src="assets/images/company/aziz.webp" alt="Aziz Hospital">
                        <div class="logo-info">
                            <h4 class="logo-name">Aziz Polyclinic</h4>
                            <p class="logo-address">AMC Rd, near Damani Hospital, Dibrugarh, Assam 786001</p>
                        </div>
                    </div>
                    <div class="logo-slide">
                        <img src="assets/images/company/hinduja.webp" alt="Hinduja Hospital">
                        <div class="logo-info">
                            <h4 class="logo-name">Hinduja Hospital & Research Center</h4>
                            <p class="logo-address">SVS Rd, Mahim West, Shivaji Park, Mumbai, 400016</p>
                        </div>
                    </div>
                    <div class="logo-slide">
                        <img src="assets/images/company/Jupiter.webp" alt="Jupiter Hospital">
                        <div class="logo-info">
                            <h4 class="logo-name">Jupiter Hospital</h4>
                            <p class="logo-address">Eastern Express Highway, Service Rd, Next To Viviana Mall, Thane, 400601</p>
                        </div>
                    </div>
                    <div class="logo-slide">
                        <img src="assets/images/company/lilavati.webp" alt="Lilavati Hospital">
                        <div class="logo-info">
                            <h4 class="logo-name">Lilavati Hospital & Research Center</h4>
                            <p class="logo-address">Lilavati Hospital, A-791, Bandra Reclamation Rd, Bandra West, Mumbai, 400050</p>
                        </div>
                    </div>
                    <div class="logo-slide">
                        <img src="assets/images/company/MGM.webp" alt="MGM Healthcare">
                        <div class="logo-info">
                            <h4 class="logo-name">MGM Hospital</h4>
                            <p class="logo-address">Plot No.35, Atmashanti Society, Sector 3, Vashi, Navi Mumbai, Maharashtra 400703</p>
                        </div>
                    </div>
                    <div class="logo-slide">
                        <img src="assets/images/company/oyster.webp" alt="Oyster & Pearl Hospital">
                        <div class="logo-info">
                            <h4 class="logo-name">Oyster & Pearl Hospital</h4>
                            <p class="logo-address">1671-75, Ganeshkhind Rd, near Hotel Pride, Narveer Tanaji Wadi, Shivajinagar, Pune, Maharashtra 411016</p>
                        </div>
                    </div>
                    <div class="logo-slide">
                        <img src="assets/images/company/Parekhs.webp" alt="Parekh's Hospital">
                        <div class="logo-info">
                            <h4 class="logo-name">Parekh’s Hospital</h4>
                            <p class="logo-address">Shyamal Cross Road, 132 Feet Ring Road Shyamal, Satellite, Ahmedabad, Gujarat 380015</p>
                        </div>
                    </div>
                    <div class="logo-slide">
                        <img src="assets/images/company/Reliance.webp" alt="Reliance Hospital">
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
                            <span class="about-tag">CONTACT US</span>
                            <h3 class="contact-title">Your first step toward recovery starts here</h3>
                        </div>

                        <!-- Map Container -->
                        <div class="contact-map-container">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.1133049436858!2d72.82944177596441!3d19.014728253891818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cecf5890653b%3A0x1b8cb8c7f407f354!2sDr.%20Abhishek%20Kini&#39;s%20Foot%20Ark%20-%20Foot%20%26%20Ankle%20Specialist%20%7C%20Arthroscopic%20Surgeon%20in%20Mumbai!5e0!3m2!1sen!2sin!4v1763188966645!5m2!1sen!2sin" 
                                width="100%" 
                                height="450" 
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

                            <button type="submit" class="contact-submit-btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Lightweight Testimonials Slider JavaScript - Deferred for better performance -->
<script src="assets/js/testimonials-new.js" defer></script>
<!-- Treatment Results Slider JavaScript - Deferred for better performance -->
<script src="assets/js/treatment-results.js" defer></script>

<!-- Simple Video Load Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const videos = document.querySelectorAll('.hero-video-desktop, .hero-video-mobile');
    
    videos.forEach(video => {
        video.addEventListener('loadstart', function() {
            console.log('Video loading started:', this.src);
        });
        
        video.addEventListener('error', function() {
            console.log('Video failed to load:', this.src);
        });
        
        video.addEventListener('canplay', function() {
            console.log('Video can play:', this.src);
            this.play().catch(e => console.log('Autoplay blocked:', e));
        });
        
        // Force load the video
        video.load();
    });
});
</script>

<?php include 'includes/footer.php'; ?>



