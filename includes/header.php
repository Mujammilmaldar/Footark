<?php
// Simple path detection - if we're in a subdirectory, add ../
$pathPrefix = '';
if (strpos($_SERVER['PHP_SELF'], '/conditions/') !== false || 
    strpos($_SERVER['PHP_SELF'], '/rehabilitation/') !== false) {
    $pathPrefix = '../';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="<?php echo $pathPrefix; ?>assets/css/main.css">
    <link rel="stylesheet" href="<?php echo $pathPrefix; ?>assets/css/header.css">
    <link rel="stylesheet" href="<?php echo $pathPrefix; ?>assets/css/footer.css">
    <?php if (strpos($_SERVER['REQUEST_URI'], '/conditions/') !== false): ?>
    <link rel="stylesheet" href="<?php echo $pathPrefix; ?>assets/css/inner-pages.css">
    <?php endif; ?>
    <?php if (strpos($_SERVER['REQUEST_URI'], '/rehabilitation/') !== false): ?>
    <link rel="stylesheet" href="<?php echo $pathPrefix; ?>assets/css/rehabilitation-inner-page.css">
    <?php endif; ?>
</head>
<body>
    <header>
        <div class="left-container">
             <div class="nav-brand">
                    <a href="<?php echo $pathPrefix; ?>index.php" class="brand-link">
                        <img src="<?php echo $pathPrefix; ?>assets/images/logo.png" alt="Foot Ark Logo" class="brand-logo">
                    </a>
                </div>
        </div>
        <div class="right-container">
            <div class="first-row">
                <div class="contact-info">
                    <div class="icon-container">
                        <i class="fas fa-phone contact-icon"></i>
                        <span class="contact-text">+91 98765 43210</span>
                    </div>
                    <div class="icon-container">
                        <i class="fas fa-envelope contact-icon"></i>
                        <span class="contact-text">info@footark.com</span>
                    </div>
                    <div class="icon-container">
                        <i class="fas fa-map-marker-alt contact-icon"></i>
                        <span class="contact-text">Mumbai, India</span>
                    </div>
                </div>
                <div class="header-actions">
                    <a href="<?php echo $pathPrefix; ?>appointment.php" class="appointment-btn">Book Appointment</a>
                    <div class="social-links">
                        <a href="#" class="social-link">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="second-row">
                <!-- Mobile Menu Toggle -->
                <button class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="Toggle mobile menu">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                </button>
                
                <div class="nav-menu" id="nav-menu">
                    <!-- Mobile Menu Header -->
                    <div class="mobile-menu-header">
                        <div class="mobile-menu-logo">
                            <img src="<?php echo $pathPrefix; ?>assets/images/logo.png" alt="Foot Ark Logo" class="mobile-logo">
                        </div>
                        <button class="mobile-menu-close" id="mobile-menu-close" aria-label="Close mobile menu">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    
                    <ul class="menu-list">
                        <li class="menu-item">
                            <a href="<?php echo $pathPrefix; ?>index.php" class="menu-link">Home</a>
                        </li>
                        <li class="menu-item">
                            <a href="<?php echo $pathPrefix; ?>about.php" class="menu-link">About</a>
                        </li>
                        <li class="menu-item dropdown">
                            <a href="#" class="menu-link dropdown-toggle">
                                Conditions
                                <span class="dropdown-icon">▼</span>
                            </a>
                            <div class="dropdown-menu mega-dropdown">
                                <div class="dropdown-content">
                                    <div class="dropdown-column">
                                        <h6 class="dropdown-title">Ankle Conditions</h6>
                                        <ul class="dropdown-list">
                                            <li><a href="<?php echo $pathPrefix; ?>conditions/anklesprain.php">Ankle sprain / Instability</a></li>
                                            <li><a href="<?php echo $pathPrefix; ?>conditions/ankle-osteochondral.php">Ankle osteochondral lesion</a></li>
                                            <li><a href="<?php echo $pathPrefix; ?>conditions/ankle-impingement.php">Ankle Impingement</a></li>
                                            <li><a href="<?php echo $pathPrefix; ?>conditions/ankle-synovitis.php">Ankle synovitis</a></li>
                                            <li><a href="<?php echo $pathPrefix; ?>conditions/ankle-arthritis.php">Ankle arthritis</a></li>
                                        </ul>
                                    </div>
                                    <div class="dropdown-column">
                                        <h6 class="dropdown-title">Tendon Issues</h6>
                                        <ul class="dropdown-list">
                                            <li><a href="<?php echo $pathPrefix; ?>conditions/achilles-tendon-pain.php">Achilles tendon pain</a></li>
                                            <li><a href="<?php echo $pathPrefix; ?>conditions/tendon-rupture.php">Achilles tendon rupture</a></li>
                                            <li><a href="<?php echo $pathPrefix; ?>peroneal-tendon.php">Peroneal tendon issues</a></li>
                                        </ul>
                                    </div>
                                    <div class="dropdown-column">
                                        <h6 class="dropdown-title">Foot Problems</h6>
                                        <ul class="dropdown-list">
                                            <li><a href="<?php echo $pathPrefix; ?>flat-foot.php">Flat foot</a></li>
                                            <li><a href="<?php echo $pathPrefix; ?>bunion.php">Bunion</a></li>
                                            <li><a href="<?php echo $pathPrefix; ?>heel-pain.php">Heel pain</a></li>
                                            <li><a href="<?php echo $pathPrefix; ?>neuroma.php">Neuroma</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item dropdown">
                            <a href="#" class="menu-link dropdown-toggle">
                                Treatments
                                <span class="dropdown-icon">▼</span>
                            </a>
                            <div class="dropdown-menu">
                                <ul class="dropdown-list">
                                    <li><a href="<?php echo $pathPrefix; ?>t-ankle-arthroscopy.php">Ankle arthroscopy</a></li>
                                    <li><a href="<?php echo $pathPrefix; ?>t-ankle-ligament.php">Ankle Ligament reconstruction</a></li>
                                    <li><a href="<?php echo $pathPrefix; ?>t-ankle-fusion.php">Ankle fusion</a></li>
                                    <li><a href="<?php echo $pathPrefix; ?>t-bunion-surgery.php">Bunion surgery</a></li>
                                    <li><a href="<?php echo $pathPrefix; ?>flat-foot-treatment.php">Flat foot treatment</a></li>
                                    <li><a href="<?php echo $pathPrefix; ?>t-neuroma.php">Neuroma excision</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item dropdown">
                            <a href="#" class="menu-link dropdown-toggle">
                                Rehabilitation
                                <span class="dropdown-icon">▼</span>
                            </a>
                            <div class="dropdown-menu">
                                <ul class="dropdown-list">
                                    <li><a href="<?php echo $pathPrefix; ?>rehabilitation/r-general-foot.php">General foot surgery guidelines</a></li>
                                    <li><a href="<?php echo $pathPrefix; ?>rehabilitation/r-lateral-ligament.php">Lateral ligament reconstruction</a></li>
                                    <li><a href="<?php echo $pathPrefix; ?>rehabilitation/r-achilles-tendon.php">Achilles tendon repair</a></li>
                                    <li><a href="<?php echo $pathPrefix; ?>rehabilitation/r-bunion.php">Bunion surgery recovery</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item dropdown">
                            <a href="#" class="menu-link dropdown-toggle">
                                Blog
                                <span class="dropdown-icon">▼</span>
                            </a>
                            <div class="dropdown-menu">
                                <ul class="dropdown-list">
                                    <li><a href="<?php echo $pathPrefix; ?>injury-prevention.php">Injury Prevention</a></li>
                                    <li><a href="<?php echo $pathPrefix; ?>marathon-footwear.php">Marathon Footwear</a></li>
                                    <li><a href="<?php echo $pathPrefix; ?>marathon-training.php">Marathon Training</a></li>
                                    <li><a href="<?php echo $pathPrefix; ?>week-before-marathon.php">Pre-Marathon Tips</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item">
                            <a href="<?php echo $pathPrefix; ?>contact.php" class="menu-link cta-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Menu JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileToggle = document.getElementById('mobile-menu-toggle');
            const mobileClose = document.getElementById('mobile-menu-close');
            const navMenu = document.getElementById('nav-menu');
            
            // Function to open menu
            function openMenu() {
                navMenu.classList.add('mobile-active');
                mobileToggle.classList.add('active');
                document.body.classList.add('menu-open');
            }
            
            // Function to close menu
            function closeMenu() {
                navMenu.classList.remove('mobile-active');
                mobileToggle.classList.remove('active');
                document.body.classList.remove('menu-open');
            }
            
            // Hamburger button click
            if (mobileToggle) {
                mobileToggle.addEventListener('click', function(e) {
                    e.stopPropagation();
                    if (navMenu.classList.contains('mobile-active')) {
                        closeMenu();
                    } else {
                        openMenu();
                    }
                });
            }
            
            // Close button click
            if (mobileClose) {
                mobileClose.addEventListener('click', function(e) {
                    e.stopPropagation();
                    closeMenu();
                });
            }

            // Close menu when clicking on a link
            if (navMenu) {
                const menuLinks = navMenu.querySelectorAll('a');
                menuLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        closeMenu();
                    });
                });
            }

            // Close menu when clicking outside (on overlay)
            document.addEventListener('click', function(e) {
                if (navMenu && navMenu.classList.contains('mobile-active') && 
                    !navMenu.contains(e.target) && 
                    !mobileToggle.contains(e.target)) {
                    closeMenu();
                }
            });
        });
    </script>
</body>
