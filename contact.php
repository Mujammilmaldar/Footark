<?php include 'includes/header.php'; ?>

    <!-- Page Header Section -->
    <section class="page-header-section">
        <div class="container">
            <div class="page-header-content">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                        <li class="breadcrumb-item active" aria-current="page">CONTACT US</li>
                    </ol>
                </nav>
                <h1 class="page-title">CONTACT US</h1>
                <div class="page-meta">
                    <div class="meta-info">
                        <span class="meta-label">Get in touch with our</span>
                        <span class="meta-author">Expert Medical Team</span>
                        <span class="meta-clinic">at Footark Specialists</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Contact Content -->
    <section class="contact-content-section">
        <div class="container">
            <div class="contact-layout">
                
                <!-- Contact Form Section -->
                <div class="contact-form-section">
                    <div class="contact-form-header">
                        <h2 class="section-title">Schedule Your Appointment</h2>
                        <p class="form-description">Fill out the form below and our medical team will get back to you within 24 hours to confirm your appointment and discuss your treatment options.</p>
                    </div>

                    <form class="contact-form" action="#" method="POST">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" id="firstName" name="firstName" class="form-input" required>
                            </div>
                            <div class="form-group">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" id="lastName" name="lastName" class="form-input" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" id="email" name="email" class="form-input" required>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="form-input" required>
                            </div>
                        </div>

                        <div class="form-group full-width">
                            <label for="appointmentType" class="form-label">Appointment Type</label>
                            <select id="appointmentType" name="appointmentType" class="form-select" required>
                                <option value="">Select appointment type</option>
                                <option value="consultation">Initial Consultation</option>
                                <option value="follow-up">Follow-up Visit</option>
                                <option value="surgery">Surgery Consultation</option>
                                <option value="emergency">Emergency</option>
                            </select>
                        </div>

                        <div class="form-group full-width">
                            <label for="condition" class="form-label">Primary Concern</label>
                            <select id="condition" name="condition" class="form-select">
                                <option value="">Select your condition</option>
                                <option value="ankle-sprain">Ankle Sprain</option>
                                <option value="bunion">Bunion</option>
                                <option value="heel-pain">Heel Pain</option>
                                <option value="flat-foot">Flat Foot</option>
                                <option value="arthritis">Arthritis</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group full-width">
                            <label for="message" class="form-label">Additional Information</label>
                            <textarea id="message" name="message" class="form-textarea" placeholder="Please describe your symptoms, when they started, and any previous treatments..."></textarea>
                        </div>

                        <button type="submit" class="form-submit-btn">
                            <i class="fas fa-calendar-check"></i>
                            Request Appointment
                        </button>

                        <div class="form-note">
                            <p><strong>Note:</strong> This form is for appointment requests only. For medical emergencies, please call our emergency line immediately or visit the nearest emergency room.</p>
                        </div>
                    </form>
                </div>

                <!-- Contact Information Sidebar -->
                <div class="contact-sidebar">
                    
                    <!-- Office Information -->
                    <div class="contact-info-card">
                        <h3 class="card-title">Clinic Information</h3>
                        <div class="contact-details">
                            <div class="contact-item">
                                <i class="fas fa-phone contact-icon"></i>
                                <div class="contact-text">
                                    <span class="contact-label">Primary Phone</span>
                                    <a href="tel:+919876543210" class="contact-value">+91 98765 43210</a>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-envelope contact-icon"></i>
                                <div class="contact-text">
                                    <span class="contact-label">Email</span>
                                    <a href="mailto:info@footark.com" class="contact-value">info@footark.com</a>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-map-marker-alt contact-icon"></i>
                                <div class="contact-text">
                                    <span class="contact-label">Location</span>
                                    <span class="contact-value">Mumbai, Maharashtra</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Office Hours -->
                    <div class="contact-info-card">
                        <h3 class="card-title">Office Hours</h3>
                        <div class="office-hours">
                            <div class="hours-item">
                                <span class="day">Monday - Friday</span>
                                <span class="time">9:00 AM - 6:00 PM</span>
                            </div>
                            <div class="hours-item">
                                <span class="day">Saturday</span>
                                <span class="time">9:00 AM - 2:00 PM</span>
                            </div>
                            <div class="hours-item">
                                <span class="day">Sunday</span>
                                <span class="time">Emergency Only</span>
                            </div>
                        </div>
                        <div class="emergency-note">
                            <i class="fas fa-exclamation-triangle"></i>
                            <span>24/7 Emergency Service Available</span>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="contact-actions">
                        <a href="tel:+919876543210" class="contact-action-btn primary">
                            <i class="fas fa-phone"></i>
                            Call Now
                        </a>
                        <a href="https://wa.me/919876543210" class="contact-action-btn whatsapp">
                            <i class="fab fa-whatsapp"></i>
                            WhatsApp
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Location Map Section -->
    <section class="map-section">
        <div class="container">
            <div class="map-header">
                <h2 class="section-title">Find Our Clinic</h2>
                <p class="map-description">Conveniently located in Mumbai with easy access to public transportation and parking facilities.</p>
            </div>
            <div class="map-container">
                <div class="map-placeholder">
                    <i class="fas fa-map-marked-alt"></i>
                    <h3>Interactive Map</h3>
                    <p>Google Maps integration will be added here</p>
                    <a href="https://maps.google.com" target="_blank" class="map-link">
                        <i class="fas fa-external-link-alt"></i>
                        View in Google Maps
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
