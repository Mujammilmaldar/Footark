<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Procedures - Foot & Ankle Specialists</title>
    <link rel="stylesheet" href="assets/css/procedures.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <nav class="breadcrumb">
                <a href="index.php"><i class="fas fa-home"></i> Home</a>
                <span>/</span>
                <span>Procedures</span>
            </nav>
            <h1><i class="fas fa-user-md"></i> Medical Procedures</h1>
            <p>Advanced foot and ankle surgical procedures with minimally invasive techniques</p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="main-content">
        <div class="container">
            <!-- Introduction -->
            <div class="intro">
                <h2><i class="fas fa-stethoscope"></i> Our Procedures</h2>
                <p>Our podiatrists use minimally invasive techniques that provide superior results with faster recovery times and better aesthetic outcomes.</p>
            </div>

            <!-- Procedures Grid -->
            <div class="procedures-grid">
                <div class="row g-4">
                    <div class="col-lg-6 col-md-12">
                        <div class="procedure-card">
                            <h3><i class="fas fa-foot"></i> Foot Surgeries</h3>
                            <ul class="procedure-list">
                                <li>
                                    <i class="fas fa-bone"></i>
                                    <span>Achilles Tendon Surgery</span>
                                </li>
                                <li>
                                    <i class="fas fa-shoe-prints"></i>
                                    <span>Bunion Surgery</span>
                                </li>
                                <li>
                                    <i class="fas fa-cut"></i>
                                    <span>Bilateral Bunionectomy</span>
                                </li>
                                <li>
                                    <i class="fas fa-tools"></i>
                                    <span>Cheilectomy</span>
                                </li>
                                <li>
                                    <i class="fas fa-circle-notch"></i>
                                    <span>Corn Removal Surgery</span>
                                </li>
                                <li>
                                    <i class="fas fa-magic"></i>
                                    <span>Cosmetic Foot Surgery</span>
                                </li>
                                <li>
                                    <i class="fas fa-compress-arrows-alt"></i>
                                    <span>Flat Foot Surgery</span>
                                </li>
                                <li>
                                    <i class="fas fa-hand-point-right"></i>
                                    <span>Hammer Toe Surgery</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-12">
                        <div class="procedure-card">
                            <h3><i class="fas fa-heartbeat"></i> Specialized Treatments</h3>
                            <ul class="procedure-list">
                                <li>
                                    <i class="fas fa-walking"></i>
                                    <span>Heel Spur Surgery</span>
                                </li>
                                <li>
                                    <i class="fas fa-nail"></i>
                                    <span>Ingrown Toenail Surgery</span>
                                </li>
                                <li>
                                    <i class="fas fa-brain"></i>
                                    <span>Neuroma Surgery</span>
                                </li>
                                <li>
                                    <i class="fas fa-shoe-prints"></i>
                                    <span>Custom Orthotics</span>
                                </li>
                                <li>
                                    <i class="fas fa-scissors"></i>
                                    <span>Overgrown Toe Skin Surgery</span>
                                </li>
                                <li>
                                    <i class="fas fa-hand-holding-medical"></i>
                                    <span>Plantar Fasciitis Surgery</span>
                                </li>
                                <li>
                                    <i class="fas fa-link"></i>
                                    <span>Tendon Surgery</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="cta-section">
                <h3>Schedule Your Consultation</h3>
                <p>Connect with our expert podiatrists for personalized treatment options</p>
                <div class="cta-buttons">
                    <a href="contact.php" class="btn btn-primary">
                        <i class="fas fa-calendar-plus"></i> Book Appointment
                    </a>
                    <a href="tel:+1234567890" class="btn btn-secondary">
                        <i class="fas fa-phone"></i> Call Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script src="assets/js/procedures.js"></script>
</body>
</html>
