<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>
<body>
    <header>
        <div class="left-container">
             <div class="nav-brand">
                    <a href="index.php" class="brand-link">
                        <img src="assets/images/logo.png" alt="Foot Ark Logo" class="brand-logo">
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
                    <a href="appointment.php" class="appointment-btn">Book Appointment</a>
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
                <div class="nav-menu" id="nav-menu">
                    <ul class="menu-list">
                        <li class="menu-item">
                            <a href="index.php" class="menu-link">Home</a>
                        </li>
                        <li class="menu-item">
                            <a href="about.php" class="menu-link">About</a>
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
                                            <li><a href="anklesprain.php">Ankle sprain / Instability</a></li>
                                            <li><a href="ankle-osteochondral.php">Ankle osteochondral lesion</a></li>
                                            <li><a href="ankle-impingement.php">Ankle Impingement</a></li>
                                            <li><a href="ankle-synovitis.php">Ankle synovitis</a></li>
                                            <li><a href="ankle-arthritis.php">Ankle arthritis</a></li>
                                        </ul>
                                    </div>
                                    <div class="dropdown-column">
                                        <h6 class="dropdown-title">Tendon Issues</h6>
                                        <ul class="dropdown-list">
                                            <li><a href="achilles-tendon-pain.php">Achilles tendon pain</a></li>
                                            <li><a href="tendon-rupture.php">Achilles tendon rupture</a></li>
                                            <li><a href="peroneal-tendon.php">Peroneal tendon issues</a></li>
                                        </ul>
                                    </div>
                                    <div class="dropdown-column">
                                        <h6 class="dropdown-title">Foot Problems</h6>
                                        <ul class="dropdown-list">
                                            <li><a href="flat-foot.php">Flat foot</a></li>
                                            <li><a href="bunion.php">Bunion</a></li>
                                            <li><a href="heel-pain.php">Heel pain</a></li>
                                            <li><a href="neuroma.php">Neuroma</a></li>
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
                                    <li><a href="t-ankle-arthroscopy.php">Ankle arthroscopy</a></li>
                                    <li><a href="t-ankle-ligament.php">Ankle Ligament reconstruction</a></li>
                                    <li><a href="t-ankle-fusion.php">Ankle fusion</a></li>
                                    <li><a href="t-bunion-surgery.php">Bunion surgery</a></li>
                                    <li><a href="flat-foot-treatment.php">Flat foot treatment</a></li>
                                    <li><a href="t-neuroma.php">Neuroma excision</a></li>
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
                                    <li><a href="r-general-foot.php">General foot surgery guidelines</a></li>
                                    <li><a href="r-lateral-ligament.php">Lateral ligament reconstruction</a></li>
                                    <li><a href="r-achilles-tendon.php">Achilles tendon repair</a></li>
                                    <li><a href="r-bunion.php">Bunion surgery recovery</a></li>
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
                                    <li><a href="injury-prevention.php">Injury Prevention</a></li>
                                    <li><a href="marathon-footwear.php">Marathon Footwear</a></li>
                                    <li><a href="marathon-training.php">Marathon Training</a></li>
                                    <li><a href="week-before-marathon.php">Pre-Marathon Tips</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item">
                            <a href="contact.php" class="menu-link cta-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
</body>
