<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Foot & Ankle Specialists</title>
    <link rel="stylesheet" href="assets/css/main.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/contact.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="contact-header">
                <span class="contact-tag">CONTACT US</span>
                <h1 class="contact-title">Get In Touch With Our Expert Team</h1>
                <p class="contact-subtitle">Book your consultation today and take the first step towards better foot health</p>
            </div>
        </div>
    </section>

    <!-- Main Contact Content -->
    <section class="main-content">
        <div class="container">
            <div class="row">
                
                <!-- Contact Form Section -->
                <div class="col-lg-8 col-md-7">
                    <div class="contact-form-section">
                        <div class="contact-form-header">
                            <h2 class="section-title">Schedule Your Appointment</h2>
                            <p class="form-description">Fill out the form below and our medical team will get back to you within 24 hours to confirm your appointment.</p>
                        </div>

                        <form class="contact-form" action="#" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstName" class="form-label">First Name*</label>
                                        <input type="text" id="firstName" name="firstName" class="form-input" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastName" class="form-label">Last Name*</label>
                                        <input type="text" id="lastName" name="lastName" class="form-input" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email Address*</label>
                                        <input type="email" id="email" name="email" class="form-input" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone" class="form-label">Phone Number*</label>
                                        <input type="tel" id="phone" name="phone" class="form-input" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="appointmentType" class="form-label">Appointment Type*</label>
                                <select id="appointmentType" name="appointmentType" class="form-select" required>
                                    <option value="">Select appointment type</option>
                                    <option value="consultation">Initial Consultation</option>
                                    <option value="follow-up">Follow-up Visit</option>
                                    <option value="surgery">Surgery Consultation</option>
                                    <option value="emergency">Emergency</option>
                                </select>
                            </div>

                            <div class="form-group">
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

                            <div class="form-group">
                                <label for="message" class="form-label">Additional Information</label>
                                <textarea id="message" name="message" class="form-textarea" placeholder="Please describe your symptoms, when they started, and any previous treatments..."></textarea>
                            </div>

                            <button type="submit" class="form-submit-btn">
                                Submit
                            </button>

                            <div class="form-note">
                                <p><strong>Note:</strong> This form is for appointment requests only. For medical emergencies, please call our emergency line immediately or visit the nearest emergency room.</p>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Contact Information Sidebar -->
                <div class="col-lg-4 col-md-5">
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
                                        <span class="contact-value">Mumbai, Maharashtra, India</span>
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

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Location Map Section -->
    <section class="map-section">
        <div class="container">
            <div class="map-header">
                <span class="map-tag">FIND US</span>
                <h2 class="map-title">Our Location</h2>
                <p class="map-description">Conveniently located in Mumbai with easy access to public transportation and parking facilities.</p>
            </div>
            <div class="map-container">
                <!-- Google Maps Embed -->
                <iframe 
                    class="map-iframe"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.1160972!2d72.74109995709166!3d19.082177512292154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1694567890123!5m2!1sen!2sin"
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom Contact JS -->
    <script>
        // Form validation and enhancement
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('.contact-form');
            const submitBtn = document.querySelector('.form-submit-btn');
            
            // Handle form submission
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Add loading state
                submitBtn.innerHTML = 'SENDING...';
                submitBtn.disabled = true;
                
                // Simulate form submission (replace with actual form handling)
                setTimeout(() => {
                    alert('Thank you! Your appointment request has been submitted. We will contact you within 24 hours.');
                    form.reset();
                    submitBtn.innerHTML = 'SEND YOUR MESSAGE';
                    submitBtn.disabled = false;
                }, 2000);
            });
        });
    </script>
</body>
</html>