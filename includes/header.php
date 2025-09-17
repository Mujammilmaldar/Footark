<?php
// Robust path detection for both Footancle and FootAncle variations
$pathPrefix = '';

// Get the current script's directory and name
$scriptDir = dirname($_SERVER['SCRIPT_NAME']);
$scriptName = $_SERVER['SCRIPT_NAME'];

// Normalize path separators
$scriptDir = str_replace('\\', '/', $scriptDir);
$scriptName = str_replace('\\', '/', $scriptName);

// Check if we're in subdirectories first
if (strpos($scriptDir, '/conditions') !== false) {
    $pathPrefix = '../';
}
else if (strpos($scriptDir, '/treatments') !== false) {
    $pathPrefix = '../';
}
else if (strpos($scriptDir, '/rehabilitation') !== false) {
    $pathPrefix = '../';
}
else if (strpos($scriptDir, '/blog') !== false) {
    $pathPrefix = '../';
}
// Check if we're in the root directory (handle both Footancle and FootAncle)
else if ((strpos($scriptName, '/Footark/') !== false || strpos($scriptName, '/Footark/') !== false) && 
         (basename($scriptDir) === 'Footark' || basename($scriptDir) === 'Footark' || 
          $scriptDir === '/Footark' || $scriptDir === '/Footark')) {
    $pathPrefix = '';
}
// Handle case where we're directly in root with files like index.php, about.php
else if (basename(dirname($scriptName)) === 'Footark' || basename(dirname($scriptName)) === 'Footark') {
    $pathPrefix = '';
}
// We're outside the main directory completely
else {
    // Use the actual directory name from the URL
    if (strpos($_SERVER['REQUEST_URI'], '/Footark/') !== false) {
        $pathPrefix = 'Footark/';
    } else {
        $pathPrefix = 'Footark/';
    }
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
    <?php if (strpos($_SERVER['REQUEST_URI'], '/blog/') !== false): ?>
    <link rel="stylesheet" href="<?php echo $pathPrefix; ?>assets/css/blog.css">
    <?php endif; ?>
    <?php if (strpos($_SERVER['REQUEST_URI'], 'contact.php') !== false): ?>
    <link rel="stylesheet" href="<?php echo $pathPrefix; ?>assets/css/contact.css">
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
                    <div class="social-links-header">
                        <!-- Old filled icons - commented out
                        <a href="#" class="social-link-header">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-link-header">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-link-header">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        -->
                        
                        <!-- New outline/border style icons - no background, just borders -->
                        <a href="#" class="social-link-header">
                            <i class="fab fa-facebook" style="font-weight: 300;"></i>
                        </a>
                        <a href="#" class="social-link-header">
                            <i class="fab fa-instagram" style="font-weight: 300;"></i>
                        </a>
                        <a href="#" class="social-link-header">
                            <i class="fab fa-linkedin-in" style="font-weight: 300;"></i>
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
                                    <li><a href="<?php echo $pathPrefix; ?>blog/injury-prevention.php">Injury Prevention</a></li>
                                    <li><a href="<?php echo $pathPrefix; ?>blog/marathon-footwear.php">Marathon Footwear</a></li>
                                    <li><a href="<?php echo $pathPrefix; ?>blog/marathon-training.php">Marathon Training</a></li>
                                    <li><a href="<?php echo $pathPrefix; ?>blog/week-before-marathon.php">Pre-Marathon Tips</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item">
                            <a href="<?php echo $pathPrefix; ?>contact.php" class="cta-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Contact Footer (only visible on mobile) -->
    <div class="mobile-contact-footer">
        <a href="tel:+919876543210" class="mobile-contact-item">
            <i class="fas fa-phone"></i>
            <span>Call</span>
        </a>
        <a href="https://wa.me/919876543210" class="mobile-contact-item" target="_blank">
            <i class="fab fa-whatsapp"></i>
            <span>WhatsApp</span>
        </a>
        <a href="<?php echo $pathPrefix; ?>contact.php" class="mobile-contact-item">
            <i class="fas fa-envelope"></i>
            <span>Contact</span>
        </a>
    </div>

    <!-- Mobile Menu JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileToggle = document.getElementById('mobile-menu-toggle');
            const mobileClose = document.getElementById('mobile-menu-close');
            const navMenu = document.getElementById('nav-menu');
            let scrollPosition = 0;
            
            // Function to open menu
            function openMenu() {
                // Store current scroll position
                scrollPosition = window.pageYOffset;
                
                navMenu.classList.add('mobile-active');
                mobileToggle.classList.add('active');
                document.body.classList.add('menu-open');
                
                // Fix body position to prevent scroll
                document.body.style.top = `-${scrollPosition}px`;
            }
            
            // Function to close menu
            function closeMenu() {
                navMenu.classList.remove('mobile-active');
                mobileToggle.classList.remove('active');
                document.body.classList.remove('menu-open');
                
                // Restore scroll position
                document.body.style.top = '';
                window.scrollTo(0, scrollPosition);
                
                // Close all dropdowns when menu closes
                const dropdowns = navMenu.querySelectorAll('.dropdown');
                dropdowns.forEach(dropdown => {
                    dropdown.classList.remove('active');
                });
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

            // Handle dropdown toggles in mobile menu - enhanced mobile support
            if (navMenu) {
                const dropdownToggles = navMenu.querySelectorAll('.dropdown-toggle');
                dropdownToggles.forEach(toggle => {
                    // Handle both click and touch events for mobile
                    const handleToggle = function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        
                        const dropdown = this.closest('.dropdown');
                        const isCurrentlyActive = dropdown.classList.contains('active');
                        
                        // Close all dropdowns first
                        const allDropdowns = navMenu.querySelectorAll('.dropdown');
                        allDropdowns.forEach(dd => {
                            dd.classList.remove('active');
                        });
                        
                        // If the clicked dropdown wasn't active, open it
                        if (!isCurrentlyActive) {
                            dropdown.classList.add('active');
                            
                            // Ensure entire dropdown is visible
                            setTimeout(() => {
                                const dropdownMenu = dropdown.querySelector('.dropdown-menu');
                                if (dropdownMenu) {
                                    // Get the bottom of the dropdown relative to the menu
                                    const dropdownRect = dropdownMenu.getBoundingClientRect();
                                    const menuRect = navMenu.getBoundingClientRect();
                                    
                                    // Calculate if dropdown extends beyond visible area
                                    const dropdownBottom = dropdownRect.bottom;
                                    const menuBottom = menuRect.bottom;
                                    
                                    if (dropdownBottom > menuBottom) {
                                        // Calculate how much to scroll
                                        const scrollNeeded = dropdownBottom - menuBottom + 20; // 20px buffer
                                        navMenu.scrollBy({
                                            top: scrollNeeded,
                                            behavior: 'smooth'
                                        });
                                    }
                                    
                                    // Also check if dropdown top is visible
                                    const dropdownTop = dropdownRect.top;
                                    const menuTop = menuRect.top;
                                    
                                    if (dropdownTop < menuTop) {
                                        const scrollUp = menuTop - dropdownTop + 20; // 20px buffer
                                        navMenu.scrollBy({
                                            top: -scrollUp,
                                            behavior: 'smooth'
                                        });
                                    }
                                }
                            }, 200);
                        }
                    };
                    
                    toggle.addEventListener('click', handleToggle);
                    toggle.addEventListener('touchend', handleToggle);
                });
                
                // Close dropdowns when clicking/touching anywhere else in the menu
                navMenu.addEventListener('click', function(e) {
                    if (!e.target.closest('.dropdown-toggle') && !e.target.closest('.dropdown-menu')) {
                        const allDropdowns = navMenu.querySelectorAll('.dropdown');
                        allDropdowns.forEach(dd => {
                            dd.classList.remove('active');
                        });
                    }
                });
                
                // Close menu only when clicking on actual page links
                const menuLinks = navMenu.querySelectorAll('a:not(.dropdown-toggle)');
                menuLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        if (this.getAttribute('href') !== '#') {
                            closeMenu();
                        }
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
            
            // Handle window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth > 768) {
                    closeMenu();
                }
            });
        });
    </script>
</body>
