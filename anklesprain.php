<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Medicine Specialist | Orthopedic Foot & Ankle Center | Columbus, OH</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #ffffff;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        .header {
            background: #ffffff;
            border-bottom: 1px solid #e0e0e0;
        }

        .header-top {
            background: #2c5aa0;
            padding: 8px 0;
            font-size: 12px;
            color: #fff;
        }

        .header-top .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-main {
            padding: 15px 0;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo img {
            width: 40px;
            height: 40px;
        }

        .logo-text {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .nav {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        .nav a {
            text-decoration: none;
            color: #333;
            font-size: 14px;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav a:hover {
            color: #2c5aa0;
        }

        .header-cta {
            background: #e53e3e;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 13px;
            font-weight: 500;
        }

        /* Breadcrumb */
        .breadcrumb {
            background: #f7fafc;
            padding: 10px 0;
            font-size: 12px;
            border-bottom: 1px solid #e0e0e0;
        }

        .breadcrumb a {
            color: #2c5aa0;
            text-decoration: none;
        }

        .breadcrumb span {
            color: #666;
        }

        /* Hero Banner - Updated to match website */
        .hero-banner {
            background: linear-gradient(135deg, #2c5aa0 0%, #1e3a8a 100%);
            color: white;
            padding: 60px 0 80px;
            position: relative;
            overflow: hidden;
        }

        .hero-banner::before {
            content: '';
            position: absolute;
            top: 0;
            right: -10%;
            width: 70%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 600" fill="none"><circle cx="650" cy="150" r="120" fill="rgba(255,255,255,0.08)"/><circle cx="700" cy="350" r="80" fill="rgba(255,255,255,0.05)"/><circle cx="600" cy="450" r="60" fill="rgba(255,255,255,0.06)"/><path d="M500 100 Q650 200 600 400 Q750 500 700 600 H800 V0 H500 Z" fill="rgba(255,255,255,0.03)"/></svg>') no-repeat;
            background-size: cover;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 600px;
        }

        .hero-banner h1 {
            font-size: 42px;
            margin-bottom: 20px;
            font-weight: 600;
            line-height: 1.2;
        }

        .hero-banner p {
            font-size: 18px;
            line-height: 1.6;
            opacity: 0.9;
            margin-bottom: 30px;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn-primary {
            background: #e53e3e;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-primary:hover {
            background: #c53030;
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: rgba(255,255,255,0.1);
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            border: 2px solid rgba(255,255,255,0.3);
            transition: all 0.3s;
        }

        .btn-secondary:hover {
            background: rgba(255,255,255,0.2);
        }

        /* Main Content Area */
        .main-wrapper {
            background: #ffffff;
            padding: 40px 0;
        }

        .content-layout {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 40px;
        }

        .main-content {
            background: white;
        }

        .content-section {
            margin-bottom: 40px;
        }

        .content-section h2 {
            color: #1a202c;
            font-size: 28px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .content-section h3 {
            color: #2d3748;
            font-size: 22px;
            margin-bottom: 15px;
            margin-top: 25px;
            font-weight: 600;
        }

        .content-section p {
            color: #4a5568;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .content-section ul {
            margin: 15px 0;
            padding-left: 0;
            list-style: none;
        }

        .content-section li {
            position: relative;
            padding: 8px 0 8px 25px;
            color: #4a5568;
            font-size: 16px;
            line-height: 1.5;
        }

        .content-section li:before {
            content: "•";
            position: absolute;
            left: 0;
            color: #2c5aa0;
            font-weight: bold;
            font-size: 18px;
        }

        /* Image for the runner */
        .content-image {
            margin: 30px 0;
            text-align: center;
        }

        .runner-image {
            width: 100%;
            max-width: 500px;
            height: 250px;
            background: linear-gradient(135deg, #e6f3ff 0%, #b3d9ff 100%);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(44, 90, 160, 0.15);
        }

        .runner-image::before {
            content: '🏃‍♂️';
            font-size: 48px;
            position: relative;
            z-index: 2;
        }

        .runner-image::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 20%;
            right: 20%;
            height: 20px;
            background: rgba(44, 90, 160, 0.2);
            border-radius: 50%;
            filter: blur(8px);
        }

        /* Sidebar */
        .sidebar {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .widget {
            background: #f8f9fa;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        .widget-header {
            background: #2c5aa0;
            color: white;
            padding: 12px 15px;
            font-size: 14px;
            font-weight: 600;
        }

        .widget-content {
            padding: 20px 15px;
        }

        .widget-content p {
            color: #666;
            font-size: 13px;
            line-height: 1.5;
            margin-bottom: 10px;
        }

        .contact-info {
            text-align: center;
        }

        .phone-number {
            font-size: 20px;
            font-weight: bold;
            color: #2c5aa0;
            margin: 15px 0;
        }

        .btn-widget {
            background: #28a745;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 13px;
            font-weight: 500;
            display: inline-block;
            margin: 5px 0;
            width: 100%;
            text-align: center;
        }

        .btn-widget:hover {
            background: #218838;
        }

        /* Doctors Section */
        .doctors-section {
            background: #ff6b35;
            padding: 50px 0;
            margin-top: 40px;
        }

        .doctors-title {
            color: white;
            text-align: center;
            margin-bottom: 30px;
        }

        .doctors-title h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .doctors-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }

        .doctor-card {
            background: white;
            border-radius: 6px;
            overflow: hidden;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .doctor-image {
            height: 200px;
            background: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            color: #ccc;
        }

        .doctor-info {
            padding: 20px 15px;
        }

        .doctor-info h4 {
            color: #333;
            font-size: 16px;
            margin-bottom: 8px;
        }

        .doctor-specialty {
            color: #2c5aa0;
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .doctor-info p {
            color: #666;
            font-size: 12px;
            line-height: 1.4;
        }

        /* Footer */
        .footer {
            background: #f8f9fa;
            border-top: 1px solid #e0e0e0;
            padding: 30px 0;
            color: #666;
            font-size: 12px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .footer-section h5 {
            color: #333;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .footer-section a {
            color: #666;
            text-decoration: none;
            display: block;
            margin-bottom: 5px;
            font-size: 12px;
        }

        .footer-section a:hover {
            color: #2c5aa0;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #e0e0e0;
            color: #999;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-top .container {
                flex-direction: column;
                gap: 5px;
            }

            .header-content {
                flex-direction: column;
                gap: 15px;
            }

            .nav {
                flex-wrap: wrap;
                justify-content: center;
                gap: 15px;
            }

            .content-layout {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .sidebar {
                order: -1;
            }

            .hero-banner h1 {
                font-size: 32px;
            }

            .hero-banner p {
                font-size: 16px;
            }

            .hero-buttons {
                flex-direction: column;
            }

            .doctors-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-top">
            <div class="container">
                <span>Call us today: (614) 895-8747</span>
                <span>350 W Wilson Bridge Rd, Worthington, OH 43085</span>
            </div>
        </div>
        <div class="header-main">
            <div class="container">
                <div class="header-content">
                    <div class="logo">
                        <div class="logo-text">ORTHOPEDIC FOOT & ANKLE CENTER</div>
                    </div>
                    <nav>
                        <ul class="nav">
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">ABOUT</a></li>
                            <li><a href="#">SERVICES</a></li>
                            <li><a href="#">PHYSICIANS</a></li>
                            <li><a href="#">LOCATIONS</a></li>
                            <li><a href="#">CONTACT</a></li>
                        </ul>
                    </nav>
                    <a href="#" class="header-cta">SCHEDULE APPOINTMENT</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <div class="container">
            <a href="#">Home</a> > <a href="#">Services</a> > <span>Sports Medicine Specialist</span>
        </div>
    </section>

    <!-- Hero Banner -->
    <section class="hero-banner">
        <div class="container">
            <div class="hero-content">
                <h1>Sports Medicine Specialist</h1>
                <p>Expert care for sports-related foot and ankle injuries. Our specialized team helps athletes and active individuals recover faster and return to peak performance.</p>
                <div class="hero-buttons">
                    <a href="#" class="btn-primary">Schedule Consultation</a>
                    <a href="#" class="btn-secondary">Call (614) 895-8747</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="main-wrapper">
        <div class="container">
            <div class="content-layout">
                <div class="main-content">
                    <div class="content-section">
                        <h2>What is a Sports Medicine Specialist?</h2>
                        <p>A sports medicine specialist is a healthcare professional who focuses on helping people prevent, treat, and recover from sports and exercise-related injuries. At Orthopedic Foot & Ankle Center, our sports medicine specialists concentrate specifically on foot and ankle conditions that affect athletes and active individuals of all levels.</p>
                        
                        <p>Our comprehensive approach combines the latest diagnostic techniques with evidence-based treatment protocols to ensure optimal outcomes. We understand that every athlete is unique, which is why we develop personalized treatment plans that consider your specific sport, goals, and lifestyle requirements.</p>
                    </div>

                    <div class="content-section">
                        <h3>When to See a Sports Medicine Specialist</h3>
                        <p>You should consider consulting with our sports medicine specialists if you experience any of the following symptoms or conditions:</p>
                        
                        <ul>
                            <li>Persistent foot or ankle pain during or after physical activity</li>
                            <li>Swelling that doesn't improve with rest, ice, compression, and elevation</li>
                            <li>Difficulty bearing weight on your foot or ankle</li>
                            <li>Recurring ankle sprains or chronic instability</li>
                            <li>Noticeable decrease in athletic performance</li>
                            <li>Chronic heel pain or plantar fasciitis symptoms</li>
                            <li>Achilles tendon pain, stiffness, or suspected rupture</li>
                            <li>Stress fractures or acute fractures</li>
                            <li>Joint stiffness that limits your range of motion</li>
                            <li>Any sports-related injury that hasn't healed within 72 hours</li>
                        </ul>

                        <p>Early intervention is crucial in sports medicine. Addressing injuries promptly can prevent minor issues from developing into chronic problems that may sideline you for extended periods.</p>
                    </div>

                    <div class="content-image">
                        <div class="runner-image"></div>
                    </div>

                    <div class="content-section">
                        <h3>What Sports Injuries Do We Treat?</h3>
                        <p>Our board-certified sports medicine specialists have extensive experience treating a wide range of foot and ankle conditions common in athletes:</p>
                        
                        <ul>
                            <li>Acute and chronic ankle sprains and ligament tears</li>
                            <li>Achilles tendon ruptures, tendinitis, and tendinosis</li>
                            <li>Stress fractures of the foot and ankle</li>
                            <li>Plantar fasciitis and heel pain syndrome</li>
                            <li>Turf toe and first metatarsophalangeal joint injuries</li>
                            <li>Sesamoid fractures and sesamoiditis</li>
                            <li>Posterior tibial tendon dysfunction</li>
                            <li>Peroneal tendon tears and subluxation</li>
                            <li>Osteochondral lesions and cartilage injuries</li>
                            <li>Morton's neuroma and nerve entrapment syndromes</li>
                            <li>High ankle sprains (syndesmotic injuries)</li>
                            <li>Fractures and dislocations requiring surgical intervention</li>
                        </ul>
                    </div>

                    <div class="content-section">
                        <h3>Our Comprehensive Treatment Approach</h3>
                        <p>At Orthopedic Foot & Ankle Center, we believe in a multi-disciplinary approach to sports medicine that encompasses:</p>
                        
                        <ul>
                            <li><strong>Advanced Diagnostics:</strong> State-of-the-art imaging including digital X-rays, MRI, CT scans, and ultrasound</li>
                            <li><strong>Conservative Treatment:</strong> Physical therapy, custom orthotics, bracing, and activity modification</li>
                            <li><strong>Injection Therapies:</strong> Corticosteroid injections, platelet-rich plasma (PRP), and hyaluronic acid treatments</li>
                            <li><strong>Minimally Invasive Surgery:</strong> Arthroscopic procedures and percutaneous techniques when indicated</li>
                            <li><strong>Reconstructive Surgery:</strong> Complex repairs for severe injuries and failed previous treatments</li>
                            <li><strong>Rehabilitation Programs:</strong> Sport-specific protocols designed for safe return to activity</li>
                            <li><strong>Performance Optimization:</strong> Biomechanical analysis and movement pattern correction</li>
                            <li><strong>Injury Prevention:</strong> Education and strategies to reduce future injury risk</li>
                        </ul>
                    </div>

                    <div class="content-section">
                        <h3>Why Choose Our Sports Medicine Center?</h3>
                        <p>Our sports medicine specialists bring together extensive training, cutting-edge technology, and a deep understanding of athletic performance requirements. We are committed to helping you achieve your goals while maintaining the highest standards of care.</p>
                        
                        <p>Whether you're a professional athlete, collegiate competitor, or recreational enthusiast, we provide the expertise and personalized attention you need to overcome your injury and return to the activities you love.</p>
                    </div>
                </div>

                <div class="sidebar">
                    <div class="widget">
                        <div class="widget-header">Schedule an Appointment</div>
                        <div class="widget-content contact-info">
                            <p>Ready to get back in the game? Contact our sports medicine specialists today.</p>
                            <div class="phone-number">(614) 895-8747</div>
                            <a href="#" class="btn-widget">REQUEST APPOINTMENT</a>
                            <a href="#" class="btn-widget">PATIENT PORTAL</a>
                        </div>
                    </div>

                    <div class="widget">
                        <div class="widget-header">Office Location</div>
                        <div class="widget-content">
                            <p><strong>Worthington Office</strong></p>
                            <p>350 W Wilson Bridge Rd<br>Worthington, OH 43085</p>
                            <p><strong>Phone:</strong> (614) 895-8747</p>
                            <p><strong>Fax:</strong> (614) 895-8749</p>
                        </div>
                    </div>

                    <div class="widget">
                        <div class="widget-header">Office Hours</div>
                        <div class="widget-content">
                            <p><strong>Monday - Friday:</strong><br>8:00 AM - 5:00 PM</p>
                            <p><strong>Saturday:</strong><br>8:00 AM - 12:00 PM</p>
                            <p><strong>Sunday:</strong><br>Emergency Only</p>
                        </div>
                    </div>

                    <div class="widget">
                        <div class="widget-header">Insurance Information</div>
                        <div class="widget-content">
                            <p>We accept most major insurance plans including Medicare and Medicaid. Please contact our office to verify your specific coverage.</p>
                            <a href="#" class="btn-widget">VIEW ACCEPTED PLANS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Doctors Section -->
    <section class="doctors-section">
        <div class="container">
            <div class="doctors-title">
                <h2>Meet Our Sports Medicine Specialists</h2>
                <p>Board-certified experts dedicated to athletic performance and injury recovery</p>
            </div>
            <div class="doctors-grid">
                <div class="doctor-card">
                    <div class="doctor-image">👨‍⚕️</div>
                    <div class="doctor-info">
                        <h4>Dr. Michael Anderson</h4>
                        <div class="doctor-specialty">Sports Medicine Specialist</div>
                        <p>Fellowship-trained in sports medicine with expertise in foot and ankle injuries. Team physician for local professional sports organizations.</p>
                    </div>
                </div>
                <div class="doctor-card">
                    <div class="doctor-image">👩‍⚕️</div>
                    <div class="doctor-info">
                        <h4>Dr. Sarah Mitchell</h4>
                        <div class="doctor-specialty">Orthopedic Foot & Ankle Surgeon</div>
                        <p>Specializes in minimally invasive arthroscopic procedures and sports-related reconstructive surgery.</p>
                    </div>
                </div>
                <div class="doctor-card">
                    <div class="doctor-image">👨‍⚕️</div>
                    <div class="doctor-info">
                        <h4>Dr. James Rodriguez</h4>
                        <div class="doctor-specialty">Biomechanics Specialist</div>
                        <p>Expert in gait analysis, performance optimization, and custom orthotic fabrication for athletes.</p>
                    </div>
                </div>
                <div class="doctor-card">
                    <div class="doctor-image">👩‍⚕️</div>
                    <div class="doctor-info">
                        <h4>Dr. Lisa Thompson</h4>
                        <div class="doctor-specialty">Sports Medicine Physician</div>
                        <p>Focuses on injury prevention, rehabilitation protocols, and safe return-to-sport guidelines.</p>
                    </div>
                </div>
                <div class="doctor-card">
                    <div class="doctor-image">👨‍⚕️</div>
                    <div class="doctor-info">
                        <h4>Dr. Robert Chen</h4>
                        <div class="doctor-specialty">Reconstructive Surgery</div>
                        <p>Specializes in complex foot and ankle reconstruction for severe sports injuries and revision procedures.</p>
                    </div>
                </div>
                <div class="doctor-card">
                    <div class="doctor-image">👩‍⚕️</div>
                    <div class="doctor-info">
                        <h4>Dr. Amanda Davis</h4>
                        <div class="doctor-specialty">Pediatric Sports Medicine</div>
                        <p>Expert in treating young athletes with growth-related conditions and adolescent sports injuries.</p>
                    </div>
                </div>
                <div class="doctor-card">
                    <div class="doctor-image">👨‍⚕️</div>
                    <div class="doctor-info">
                        <h4>Dr. Kevin Wilson</h4>
                        <div class="doctor-specialty">Research & Clinical Excellence</div>
                        <p>Leading researcher in sports medicine with extensive publications and involvement in clinical trials.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h5>About Our Practice</h5>
                    <p>Orthopedic Foot & Ankle Center provides comprehensive foot and ankle care throughout the Columbus metro area.</p>
                </div>
                <div class="footer-section">
                    <h5>Quick Links</h5>
                    <a href="#">Services</a>
                    <a href="#">Physicians</a>
                    <a href="#">Locations</a>
                    <a href="#">Patient Forms</a>
                    <a href="#">Insurance</a>
                </div>
                <div class="footer-section">
                    <h5>Services</h5>
                    <a href="#">Sports Medicine</a>
                    <a href="#">Foot Surgery</a>
                    <a href="#">Ankle Surgery</a>
                    <a href="#">Diabetic Care</a>
                    <a href="#">Trauma Care</a>
                </div>
                <div class="footer-section">
                    <h5>Contact</h5>
                    <a href="tel:6148958747">(614) 895-8747</a>
                    <a href="#">350 W Wilson Bridge Rd<br>Worthington, OH 43085</a>
                    <a href="mailto:info@orthofootankle.com">info@orthofootankle.com</a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Orthopedic Foot & Ankle Center. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            if (window.scrollY > 50) {
                header.style.boxShadow = '0 2px 15px rgba(0,0,0,0.15)';
            } else {
                header.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
            }
        });
    </script>
</body>
</html>