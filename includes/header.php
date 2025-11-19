<?php
// Simplified path detection for Footancle directory
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
// For root directory files (index.php, about.php, etc.), no prefix needed
else {
    $pathPrefix = '';
}
?><!doctypehtml><html lang=en><meta charset=UTF-8><meta content="width=device-width,initial-scale=1"name=viewport><link href="<?php echo $pathPrefix; ?>assets/images/favicon.webp"rel=icon type=image/x-icon><link href="<?php echo $pathPrefix; ?>assets/images/favicon.webp"rel="shortcut icon"><link href="<?php echo $pathPrefix; ?>assets/images/favicon.webp"rel=apple-touch-icon><link href=//cdnjs.cloudflare.com rel=dns-prefetch><link href=https://cdnjs.cloudflare.com rel=preconnect crossorigin><link href=//upload.wikimedia.org rel=dns-prefetch><link href=//www.google.com rel=dns-prefetch><?php 
    // Detect if this is the home page - defined early for preload
    $isHomePageCheck = (
        strpos($_SERVER['SCRIPT_NAME'], 'index.php') !== false || 
        $_SERVER['REQUEST_URI'] === '/' || 
        $_SERVER['REQUEST_URI'] === '/Footark/' || 
        $_SERVER['REQUEST_URI'] === '/Footark' ||
        basename($_SERVER['SCRIPT_NAME']) === 'index.php'
    );
    
    if ($isHomePageCheck): 
    ?><link href="<?php echo $pathPrefix; ?>assets/images/Dr.Abhishekkini-FootAnkleSurgeonMumbai (2).webp"rel=preload as=image fetchpriority=high><?php endif; ?><title><?php 
        $currentPage = basename($_SERVER['SCRIPT_NAME'], '.php');
        switch($currentPage) {
            case 'index':
                echo 'FootArk Clinic - Expert Foot & Ankle Specialist in Mumbai | Dr. Abhishek Kini';
                break;
            case 'about':
                echo 'About Dr. Abhishek Kini - Leading Foot & Ankle Surgeon Mumbai | FootArk Clinic';
                break;
            case 'contact':
                echo 'Contact FootArk Clinic - Book Appointment with Foot & Ankle Specialist Mumbai';
                break;
            case 'conditions':
                echo 'Foot & Ankle Conditions Treatment - Expert Care Mumbai | FootArk Clinic';
                break;
            case 'procedures':
                echo 'Advanced Foot & Ankle Procedures - Minimally Invasive Surgery Mumbai';
                break;
            default:
                echo 'FootArk Clinic - Premier Foot & Ankle Care Mumbai | Dr. Abhishek Kini';
        }
    ?></title><meta content="<?php 
        switch($currentPage) {
            case 'index':
                echo 'Leading foot & ankle specialist Dr. Abhishek Kini offers expert treatment in Mumbai. 12+ years experience, UK trained, minimally invasive surgery. Book consultation today.';
                break;
            case 'about':
                echo 'Dr. Abhishek Kini - DNB Orthopaedics, MNAMS, UK trained foot & ankle surgeon with 12+ years experience. Specializing in minimally invasive procedures in Mumbai.';
                break;
            case 'contact':
                echo 'Contact FootArk Clinic to book appointment with Dr. Abhishek Kini. Expert foot & ankle treatment in Mumbai. Call +91 98765 43210 or book online.';
                break;
            default:
                echo 'FootArk Clinic provides comprehensive foot & ankle care in Mumbai. Expert diagnosis, advanced treatment, and personalized care by Dr. Abhishek Kini.';
        }
    ?>"name=description><meta content="foot doctor Mumbai, ankle specialist Mumbai, orthopedic surgeon, bunion surgery, ankle arthroscopy, sports injury treatment, Dr. Abhishek Kini"name=keywords><meta content="Dr. Abhishek Kini - FootArk Clinic"name=author><meta content="FootArk Clinic"property=og:site_name><meta content="<?php 
        switch($currentPage) {
            case 'index':
                echo 'FootArk Clinic - Expert Foot & Ankle Specialist in Mumbai';
                break;
            case 'about':
                echo 'Dr. Abhishek Kini - Leading Foot & Ankle Surgeon Mumbai';
                break;
            default:
                echo 'FootArk Clinic - Premier Foot & Ankle Care Mumbai';
        }
    ?>"property=og:title><meta content="Leading foot & ankle specialist Dr. Abhishek Kini offers expert treatment in Mumbai. 12+ years experience, UK trained, minimally invasive surgery."property=og:description><meta content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/' . $pathPrefix; ?>assets/images/favicon.webp"property=og:image><meta content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>"property=og:url><meta content=website property=og:type><meta content=en_IN property=og:locale><meta content=summary_large_image name=twitter:card><meta content="FootArk Clinic - Expert Foot & Ankle Specialist Mumbai"name=twitter:title><meta content="Leading foot & ankle specialist Dr. Abhishek Kini offers expert treatment in Mumbai. 12+ years experience, UK trained, minimally invasive surgery."name=twitter:description><meta content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/' . $pathPrefix; ?>assets/images/favicon.webp"name=twitter:image><meta content="index, follow"name=robots><meta content=#1e3c72 name=theme-color><meta content=#1e3c72 name=msapplication-TileColor><style>body{margin:0;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif;opacity:0;animation:.3s ease-out forwards fadeInPage}@keyframes fadeInPage{0%{opacity:0}100%{opacity:1}}header{background:#fff;box-shadow:0 2px 4px rgba(0,0,0,.1);padding:0 2rem;display:flex;justify-content:space-between;align-items:center;z-index:1000}.nav-brand img{width:150px;height:auto}.hero-section{min-height:70vh;background:#1e3c72;position:relative;display:flex;align-items:center;justify-content:center;overflow:hidden}.hero-content{max-width:600px;text-align:left;color:#fff;padding:2rem 0;z-index:3}.hero-title{font-size:clamp(2rem,5vw,3.5rem);font-weight:700;line-height:1.2;margin-bottom:0;color:#fff}.hero-subtitle{font-size:clamp(1rem,2vw,1.25rem);line-height:1.6;margin-bottom:2rem;color:#fff}.hero-buttons{display:flex;gap:1rem;flex-wrap:wrap}.hero-buttons .btn{padding:.75rem 2rem;font-weight:600;border-radius:6px;text-decoration:none;display:inline-block}.discover-btn{background:#e85a4f;color:#fff;border:2px solid #e85a4f}.view-services-btn{background:0 0;color:#fff;border:2px solid #fff}img{max-width:100%;height:auto;display:block}.video-hero-container{position:absolute;top:0;left:0;width:100%;height:100%;z-index:1;overflow:hidden}.hero-video-desktop{position:absolute;top:50%;left:50%;min-width:100%;min-height:100%;transform:translate(-50%,-50%);object-fit:cover}.hero-content-overlay{position:absolute;top:0;left:0;right:0;bottom:0;z-index:2;background:linear-gradient(135deg,rgba(0,0,0,.5),rgba(0,0,0,.3));display:flex;align-items:flex-end;padding:0 2rem}</style><link href="<?php echo $pathPrefix; ?>assets/css/main.css"rel=stylesheet><link href="<?php echo $pathPrefix; ?>assets/css/header.css"rel=stylesheet media=print onload='this.media="all",this.onload=null'><link href="<?php echo $pathPrefix; ?>assets/css/footer.css"rel=stylesheet media=print onload='this.media="all",this.onload=null'><noscript><link href="<?php echo $pathPrefix; ?>assets/css/header.css"rel=stylesheet><link href="<?php echo $pathPrefix; ?>assets/css/footer.css"rel=stylesheet></noscript><link href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css rel=stylesheet media=print onload='this.media="all",this.onload=null'><noscript><link href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css rel=stylesheet></noscript><style>@font-face{font-family:'Font Awesome 6 Free';font-display:swap}@font-face{font-family:'Font Awesome 6 Brands';font-display:swap}</style><?php 
    // Detect if this is the home page (index.php or root directory)
    $isHomePage = (
        strpos($_SERVER['SCRIPT_NAME'], 'index.php') !== false || 
        $_SERVER['REQUEST_URI'] === '/' || 
        $_SERVER['REQUEST_URI'] === '/Footancle/' || 
        $_SERVER['REQUEST_URI'] === '/Footancle' ||
        basename($_SERVER['SCRIPT_NAME']) === 'index.php'
    );
    
    if ($isHomePage): 
    ?><link href="<?php echo $pathPrefix; ?>assets/css/hero.css"rel=stylesheet media=print onload='this.media="all",this.onload=null'><link href="<?php echo $pathPrefix; ?>assets/css/about.css"rel=stylesheet media=print onload='this.media="all",this.onload=null'><link href="<?php echo $pathPrefix; ?>assets/css/treatment-results.css"rel=stylesheet media=print onload='this.media="all",this.onload=null'><link href="<?php echo $pathPrefix; ?>assets/css/testimonials-new.css"rel=stylesheet media=print onload='this.media="all",this.onload=null'><link href="<?php echo $pathPrefix; ?>assets/css/mobile-responsive.css"rel=stylesheet media=print onload='this.media="all",this.onload=null'><link href="<?php echo $pathPrefix; ?>assets/css/mobile-slider-fix.css"rel=stylesheet media=print onload='this.media="all",this.onload=null'><noscript><link href="<?php echo $pathPrefix; ?>assets/css/hero.css"rel=stylesheet><link href="<?php echo $pathPrefix; ?>assets/css/about.css"rel=stylesheet><link href="<?php echo $pathPrefix; ?>assets/css/treatment-results.css"rel=stylesheet><link href="<?php echo $pathPrefix; ?>assets/css/testimonials-new.css"rel=stylesheet><link href="<?php echo $pathPrefix; ?>assets/css/mobile-responsive.css"rel=stylesheet><link href="<?php echo $pathPrefix; ?>assets/css/mobile-slider-fix.css"rel=stylesheet></noscript><?php endif; ?><?php if (strpos($_SERVER['REQUEST_URI'], '/conditions/') !== false): ?><link href="<?php echo $pathPrefix; ?>assets/css/inner-pages.css"rel=stylesheet><?php endif; ?><?php if (strpos($_SERVER['REQUEST_URI'], '/treatments/') !== false): ?><link href="<?php echo $pathPrefix; ?>assets/css/inner-pages.css"rel=stylesheet><?php endif; ?><?php if (strpos($_SERVER['REQUEST_URI'], 'conditions.php') !== false): ?><link href="<?php echo $pathPrefix; ?>assets/css/procedures.css"rel=stylesheet><?php endif; ?><?php if (strpos($_SERVER['REQUEST_URI'], 'treatments.php') !== false): ?><link href="<?php echo $pathPrefix; ?>assets/css/procedures.css"rel=stylesheet><?php endif; ?><?php if (strpos($_SERVER['REQUEST_URI'], '/rehabilitation/') !== false): ?><link href="<?php echo $pathPrefix; ?>assets/css/rehabilitation-inner-page.css"rel=stylesheet><?php endif; ?><?php if (strpos($_SERVER['REQUEST_URI'], '/blog/') !== false): ?><link href="<?php echo $pathPrefix; ?>assets/css/blog.css"rel=stylesheet><?php endif; ?><?php if (strpos($_SERVER['REQUEST_URI'], 'contact.php') !== false): ?><link href="<?php echo $pathPrefix; ?>assets/css/contact.css"rel=stylesheet><?php endif; ?><header><div class=left-container><div class=nav-brand><a href="<?php echo $pathPrefix; ?>index.php"class=brand-link><img alt="Foot Ark Logo"class=brand-logo src="<?php echo $pathPrefix; ?>assets/images/logo.webp"></a></div></div><div class=right-container><div class=first-row><div class=contact-info><div class=icon-container><i class="fas contact-icon fa-phone"></i> <span class=contact-text>+91 98765 43210</span></div><div class=icon-container><i class="fas contact-icon fa-envelope"></i> <span class=contact-text>info@footark.com</span></div><div class=icon-container><i class="fas contact-icon fa-map-marker-alt"></i> <span class=contact-text>Mumbai, India</span></div></div><div class=header-actions><div class=social-links-header><a href=https://www.facebook.com/DrAbhishekKini class=social-link-header><i class="fab fa-facebook"style=font-weight:300></i> </a><a href=https://www.instagram.com/footarkclinic/ class=social-link-header target=_blank><i class="fab fa-instagram"style=font-weight:300></i> </a><a href=https://www.youtube.com/@FootarkClinic-FootAnkleSpecial/ class=social-link-header target=_blank><i class="fab fa-youtube"style=font-weight:300></i> </a><a href="https://www.linkedin.com/in/dr-abhishek-kini-ab379b27/?originalSubdomain=in"class=social-link-header><i class="fab fa-linkedin-in"style=font-weight:300></i></a></div></div></div><div class=second-row><button aria-label="Toggle mobile menu"class=mobile-menu-toggle id=mobile-menu-toggle><span class=hamburger-line></span> <span class=hamburger-line></span> <span class=hamburger-line></span></button><div class=nav-menu id=nav-menu><div class=mobile-menu-header><button aria-label="Close mobile menu"class=mobile-menu-close id=mobile-menu-close><i class="fas fa-times"></i></button></div><ul class=menu-list><li class=menu-item><a href="<?php echo $pathPrefix; ?>index.php"class=menu-link>Home</a><li class=menu-item><a href="<?php echo $pathPrefix; ?>about.php"class=menu-link>About</a><li class="menu-item dropdown"><div class=dropdown-container><a href="<?php echo $pathPrefix; ?>conditions.php"class="menu-link conditions-link">Conditions </a><span class=dropdown-arrow data-dropdown-toggle><i class="fas fa-chevron-down"></i></span></div><div class="dropdown-menu mega-dropdown"><div class=dropdown-content><div class=dropdown-column><h6 class=dropdown-title>Ankle Conditions</h6><ul class=dropdown-list><li><a href="<?php echo $pathPrefix; ?>conditions/anklesprain.php">Ankle Sprain / Instability</a><li><a href="<?php echo $pathPrefix; ?>conditions/ankle-osteochondral.php">Ankle Osteochondral Lesion</a><li><a href="<?php echo $pathPrefix; ?>conditions/ankle-impingement.php">Ankle Impingement</a><li><a href="<?php echo $pathPrefix; ?>conditions/ankle-synovitis.php">Ankle Synovitis</a><li><a href="<?php echo $pathPrefix; ?>conditions/ankle-arthiritis.php">Ankle Arthritis</a></ul></div><div class=dropdown-column><h6 class=dropdown-title>Tendon Issues</h6><ul class=dropdown-list><li><a href="<?php echo $pathPrefix; ?>conditions/achilles-tendon-pain.php">Achilles Tendon Pain</a><li><a href="<?php echo $pathPrefix; ?>conditions/tendon-rupture.php">Achilles Tendon Rupture</a><li><a href="<?php echo $pathPrefix; ?>conditions/peroneal-tendon.php">Peroneal Tendon Issues</a></ul></div><div class=dropdown-column><h6 class=dropdown-title>Midfoot & Arthritis</h6><ul class=dropdown-list><li><a href="<?php echo $pathPrefix; ?>conditions/arthritis-midfoot.php">Arthritis - Midfoot</a><li><a href="<?php echo $pathPrefix; ?>conditions/arthritis-subtalar.php">Arthritis - Subtalar</a></ul></div><div class=dropdown-column><h6 class=dropdown-title>Foot Problems</h6><ul class=dropdown-list><li><a href="<?php echo $pathPrefix; ?>conditions/flat-foot.php">Flat Foot</a><li><a href="<?php echo $pathPrefix; ?>conditions/cavus-foot.php">Cavus Foot</a><li><a href="<?php echo $pathPrefix; ?>conditions/foot-ankle.php">Foot & Ankle</a><li><a href="<?php echo $pathPrefix; ?>conditions/bunion.php">Bunion</a><li><a href="<?php echo $pathPrefix; ?>conditions/heel-pain.php">Heel Pain</a><li><a href="<?php echo $pathPrefix; ?>conditions/neuroma.php">Neuroma</a></ul></div><div class=dropdown-column><h6 class=dropdown-title>Toe & Other Issues</h6><ul class=dropdown-list><li><a href="<?php echo $pathPrefix; ?>conditions/great-toe.php">Great Toe</a><li><a href="<?php echo $pathPrefix; ?>conditions/toe-deformity.php">Toe Deformity</a><li><a href="<?php echo $pathPrefix; ?>conditions/sesmoiditis.php">Sesamoiditis</a><li><a href="<?php echo $pathPrefix; ?>conditions/freibergs-disease.php">Freiberg's Disease</a></ul></div></div></div><li class="menu-item dropdown"><div class=dropdown-container><a href="<?php echo $pathPrefix; ?>treatments.php"class="menu-link treatments-link">Treatments </a><span class=dropdown-arrow data-dropdown-toggle><i class="fas fa-chevron-down"></i></span></div><div class="dropdown-menu mega-dropdown"><div class=dropdown-content><div class=dropdown-column><h6 class=dropdown-title>Ankle Treatments</h6><ul class=dropdown-list><li><a href="<?php echo $pathPrefix; ?>treatments/t-ankle-arthroscopy.php">Ankle Arthroscopy</a><li><a href="<?php echo $pathPrefix; ?>treatments/t-ankle-ligament.php">Ankle Ligament Reconstruction</a><li><a href="<?php echo $pathPrefix; ?>treatments/t-ankle-fusion.php">Ankle Fusion</a></ul></div><div class=dropdown-column><h6 class=dropdown-title>Foot Treatments</h6><ul class=dropdown-list><li><a href="<?php echo $pathPrefix; ?>treatments/t-bunion-surgery.php">Bunion Surgery</a><li><a href="<?php echo $pathPrefix; ?>treatments/t-flat-foot.php">Flat Foot Treatment</a><li><a href="<?php echo $pathPrefix; ?>treatments/t-foot-fusion.php">Foot Fusion</a><li><a href="<?php echo $pathPrefix; ?>treatments/t-hindfoot-endoscopy.php">Hindfoot Endoscopy</a></ul></div><div class=dropdown-column><h6 class=dropdown-title>Specialized Procedures</h6><ul class=dropdown-list><li><a href="<?php echo $pathPrefix; ?>treatments/t-big-toe.php">Big Toe Surgery</a><li><a href="<?php echo $pathPrefix; ?>treatments/t-toe-deformity.php">Toe Deformity Correction</a><li><a href="<?php echo $pathPrefix; ?>treatments/t-neuroma.php">Neuroma Excision</a><li><a href="<?php echo $pathPrefix; ?>treatments/t-tendon-rupture.php">Tendon Rupture Repair</a><li><a href="<?php echo $pathPrefix; ?>treatments/t-tendon-enthesophyte.php">Tendon Enthesophyte</a></ul></div></div></div><li class="menu-item dropdown"><div class=dropdown-container><span class="menu-link rehabilitation-link"style=cursor:pointer>Rehabilitation </span><span class=dropdown-arrow data-dropdown-toggle><i class="fas fa-chevron-down"></i></span></div><div class=dropdown-menu><ul class=dropdown-list><li><a href="<?php echo $pathPrefix; ?>rehabilitation/r-general-foot.php">General foot surgery guidelines</a><li><a href="<?php echo $pathPrefix; ?>rehabilitation/r-lateral-ligament.php">Lateral ligament reconstruction</a><li><a href="<?php echo $pathPrefix; ?>rehabilitation/r-achilles-tendon.php">Achilles tendon repair</a><li><a href="<?php echo $pathPrefix; ?>rehabilitation/r-ankle-arthroscopy.php">Ankle arthroscopy</a><li><a href="<?php echo $pathPrefix; ?>rehabilitation/r-ankle-foot.php">Ankle & foot fractures</a><li><a href="<?php echo $pathPrefix; ?>rehabilitation/r-bunion.php">Bunion surgery recovery</a><li><a href="<?php echo $pathPrefix; ?>rehabilitation/r-flat-foot.php">Flat foot surgery</a></ul></div><li class="menu-item dropdown"><div class=dropdown-container><span class="menu-link blog-link"style=cursor:pointer>Blog </span><span class=dropdown-arrow data-dropdown-toggle><i class="fas fa-chevron-down"></i></span></div><div class=dropdown-menu><ul class=dropdown-list><li><a href="<?php echo $pathPrefix; ?>blog/injury-prevention.php">Injury Prevention</a><li><a href="<?php echo $pathPrefix; ?>blog/marathon-footwear.php">Marathon Footwear</a><li><a href="<?php echo $pathPrefix; ?>blog/marathon-training.php">Marathon Training</a><li><a href="<?php echo $pathPrefix; ?>blog/week-before-marathon.php">Pre-Marathon Tips</a></ul></div><li class=menu-item><a href="<?php echo $pathPrefix; ?>contact.php"class="contact-btn view-all-btn">Contact</a></ul></div></div></div></header><script>document.addEventListener('DOMContentLoaded', function() {
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
                const dropdownArrows = navMenu.querySelectorAll('[data-dropdown-toggle]');
                
                // Handle traditional dropdown toggles
                dropdownToggles.forEach(toggle => {
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
                        }
                    };
                    
                    toggle.addEventListener('click', handleToggle);
                    toggle.addEventListener('touchend', handleToggle);
                });
                
                // Handle separate dropdown arrows (like for Conditions)
                dropdownArrows.forEach(arrow => {
                    const handleArrowToggle = function(e) {
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
                            
                            // Ensure entire dropdown is visible on mobile
                            if (window.innerWidth <= 768) {
                                setTimeout(() => {
                                    const dropdownMenu = dropdown.querySelector('.dropdown-menu');
                                    if (dropdownMenu) {
                                        const dropdownRect = dropdownMenu.getBoundingClientRect();
                                        const menuRect = navMenu.getBoundingClientRect();
                                        
                                        const dropdownBottom = dropdownRect.bottom;
                                        const menuBottom = menuRect.bottom;
                                        
                                        if (dropdownBottom > menuBottom) {
                                            const scrollNeeded = dropdownBottom - menuBottom + 20;
                                            navMenu.scrollBy({
                                                top: scrollNeeded,
                                                behavior: 'smooth'
                                            });
                                        }
                                    }
                                }, 200);
                            }
                        }
                    };
                    
                    arrow.addEventListener('click', handleArrowToggle);
                    arrow.addEventListener('touchend', handleArrowToggle);
                });
                
                // Handle text-only dropdown toggles (rehabilitation and blog)
                const textOnlyDropdowns = navMenu.querySelectorAll('.rehabilitation-link, .blog-link');
                textOnlyDropdowns.forEach(textElement => {
                    const handleTextToggle = function(e) {
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
                        }
                    };
                    
                    textElement.addEventListener('click', handleTextToggle);
                    textElement.addEventListener('touchend', handleTextToggle);
                });
                
                // Close dropdowns when clicking/touching anywhere else in the menu
                navMenu.addEventListener('click', function(e) {
                    if (!e.target.closest('.dropdown-toggle') && 
                        !e.target.closest('[data-dropdown-toggle]') && 
                        !e.target.closest('.rehabilitation-link') &&
                        !e.target.closest('.blog-link') &&
                        !e.target.closest('.dropdown-menu')) {
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
            
            // Clean Page Transitions - Professional & Fast  
            function addSmoothTransitions() {
                // Create minimal overlay
                const overlay = document.createElement('div');
                overlay.className = 'page-transition-overlay';
                document.body.appendChild(overlay);
                
                // Add clean transitions to navigation links
                const navLinks = document.querySelectorAll('a:not([href^="#"]):not([href^="javascript:"]):not([target="_blank"])');
                
                navLinks.forEach(link => {
                    link.addEventListener('click', function(e) {
                        // Skip if it's a dropdown toggle or external link
                        if (this.classList.contains('dropdown-toggle') || 
                            this.getAttribute('href').startsWith('http') ||
                            this.getAttribute('href').startsWith('#') ||
                            this.getAttribute('href').startsWith('mailto:') ||
                            this.getAttribute('href').startsWith('tel:')) {
                            return;
                        }
                        
                        e.preventDefault();
                        const href = this.getAttribute('href');
                        
                        // Show clean overlay
                        overlay.classList.add('active');
                        document.body.classList.add('page-loading');
                        
                        // Fast navigation - no delay
                        setTimeout(() => {
                            window.location.href = href;
                        }, 80);
                    });
                });
                
                // Clean page load handling - Force clear loading states
                window.addEventListener('load', function() {
                    overlay.classList.remove('active');
                    document.body.classList.remove('page-loading');
                    
                    // Mobile-specific fix - Force restore body styles
                    if (window.innerWidth <= 768) {
                        document.body.style.opacity = '1';
                        document.body.style.background = '';
                        document.body.style.backgroundColor = '';
                    }
                });
                
                // Handle back/forward navigation cleanly
                window.addEventListener('pageshow', function(e) {
                    overlay.classList.remove('active');
                    document.body.classList.remove('page-loading');
                    
                    // Mobile-specific fix - Force restore body styles
                    if (window.innerWidth <= 768) {
                        document.body.style.opacity = '1';
                        document.body.style.background = '';
                        document.body.style.backgroundColor = '';
                    }
                });
                
                // Handle forms
                const forms = document.querySelectorAll('form[method]');
                forms.forEach(form => {
                    form.addEventListener('submit', function(e) {
                        overlay.classList.add('active');
                        document.body.classList.add('page-loading');
                    });
                });
                
                // Additional mobile fix - Force clear any stuck loading states after 1 second
                setTimeout(() => {
                    document.body.classList.remove('page-loading');
                    overlay.classList.remove('active');
                }, 1000);
            }
            
            // Initialize smooth transitions
            addSmoothTransitions();
        });</script>