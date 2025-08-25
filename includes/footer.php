<footer class="main-footer">
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <!-- Company Information -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-section">
                        <div class="footer-logo">
                            <h3>Footancle</h3>
                            <p class="footer-tagline">Expert Foot & Ankle Care</p>
                        </div>
                        <p class="footer-description">
                            The London Foot & Ankle Surgery is UK's leading specialist centre for Podiatry and Foot Surgery, providing high quality private care in Central London.
                        </p>
                        <div class="footer-social">
                            <a href="#" class="social-link" aria-label="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-link" aria-label="Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-link" aria-label="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="social-link" aria-label="LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-section">
                        <h4 class="footer-title">Quick Links</h4>
                        <ul class="footer-links">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="team.php">Our Team</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Services -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-section">
                        <h4 class="footer-title">Our Services</h4>
                        <ul class="footer-links">
                            <li><a href="#">Foot Surgery</a></li>
                            <li><a href="#">Ankle Treatment</a></li>
                            <li><a href="#">Sports Injuries</a></li>
                            <li><a href="#">Diabetic Foot Care</a></li>
                            <li><a href="#">Bunion Treatment</a></li>
                            <li><a href="#">Heel Pain Relief</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-section">
                        <h4 class="footer-title">Contact Info</h4>
                        <div class="footer-contact">
                            <div class="contact-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="contact-details">
                                    <p>New York 60 East<br>65th Street<br>NY 10065</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-phone"></i>
                                <div class="contact-details">
                                    <p><a href="tel:88700600">88 700 600</a></p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <div class="contact-details">
                                    <p><a href="mailto:info@footancle.com">info@footancle.com</a></p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-clock"></i>
                                <div class="contact-details">
                                    <p>Mon-Wed: 8am - 7pm<br>Thu: 8am - 9pm<br>Fri: 8am - 5pm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-copyright">
                        <p>&copy; <?php echo date('Y'); ?> Footancle. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-legal">
                        <ul class="legal-links">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Cookie Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Back to Top Button -->
<button class="back-to-top" id="backToTop" aria-label="Back to top">
    <i class="fas fa-chevron-up"></i>
</button>
<script>
// Back to Top Button Functionality
document.addEventListener('DOMContentLoaded', function() {
    const backToTopButton = document.getElementById('backToTop');
    
    // Show/hide button based on scroll position
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTopButton.classList.add('visible');
        } else {
            backToTopButton.classList.remove('visible');
        }
    });
    
    // Smooth scroll to top when clicked
    backToTopButton.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});
</script>
