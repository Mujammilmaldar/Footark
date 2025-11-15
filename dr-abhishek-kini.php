<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2QML9M8PGF"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-2QML9M8PGF');
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta data-n-head="ssr" data-hid="og:image:type" property="og:image:type" content="image/webp">
    <meta property="og:image" content="https://www.footark.com/images/Dr.AbhishekKini-FootAnkleSurgeonMumbai.webp" />
    <meta property="og:title" content="Dr. Abhishek R. Kini - Foot & Ankle Specialist in Mumbai" />
    <meta property="og:description" content="Dr. Kini brings over 15 years of focused experience & fellowship-trained expertise in foot
and ankle surgery and sports injury management.." />
    <meta property="og:type" content="profile" />
    <meta property="og:url" content="https://www.footark.com/dr-abhishek-kini.php" />
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Dr. Abhishek R. Kini - Foot & Ankle Specialist in Mumbai</title>
    <meta name="description" content="Dr. Kini brings over 15 years of focused experience & fellowship-trained expertise in foot
and ankle surgery and sports injury management.">
    
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Dr. Abhishek R. Kini - Foot & Ankle Specialist in Mumbai">
    <meta name="twitter:description" content="Dr. Kini brings over 15 years of focused experience & fellowship-trained expertise in foot
and ankle surgery and sports injury management.">
    <meta name="twitter:image" content="https://www.footark.com/images/Dr.AbhishekKini-FootAnkleSurgeonMumbai.webp">
    
    <!-- Additional meta tags -->
    <meta name="keywords" content="Dr. Abhishek Kini, foot and ankle surgeon, sports medicine, Mumbai, ankle specialist, foot specialist, ankle reconstruction">
    <meta name="author" content="Foot ARK">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Abhishek R. Kini - Foot & Ankle Specialist in Mumbai</title>
    <meta name="description"
        content="Dr. Abhishek Kini is a fellowship-trained foot & ankle surgeon specializing in sports medicine and ankle reconstruction in Mumbai, India.">
    <?php include 'includes/head.php'; ?>

    <!-- Add custom CSS for doctor profile page -->
    <style>
        /* Doctor Profile Hero Section - Enhanced */
        .doctor-hero-section {
            background: linear-gradient(135deg, #1c3d5a 0%, #0C4E80 100%);
            color: #fff;
            padding: 40px 0 00px 0;
            position: relative;
        }

        .doctor-hero-content {
            display: flex;
            align-items: center;
            gap: 40px;
            padding: 20px 20px 0px 20px;
        }

        .doctor-profile-img {
            width: 100%;
            height: 60vh;
            border-radius: 12px;
            object-fit: cover;
            /* box-shadow: 0 15px 30px rgba(0,0,0,0.3); */
            /* border: 4px solid rgba(255,255,255,0.15); */
        }

        .doctor-info h1 ,.doctor-info-for-mobile h1 {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 0px;
            letter-spacing: -0.02em;
        }

        .doctor-info h2,,.doctor-info-for-mobile h2 {
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 25px;
            opacity: 0.9;
            line-height: 1.4;
        }

        .doctor-specialty,
        .doctor-languages,
        .doctor-locations {
            font-weight: 600;
            margin-bottom: 15px;
            display: block;
            line-height: 1.6;
        }

        .doctor-specialty strong,
        .doctor-languages strong,
        .doctor-locations strong {
            font-weight: 700;
            color: #F3665D;
        }

        .doctor-cta {
            margin-top: 35px;
        }

        .doctor-cta .btn {
            background: #F3665D;
            color: white;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 6px;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
            border: none;
        }

        .doctor-cta .btn:hover {
            background: #e24d44;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(242, 102, 93, 0.3);
        }

        /* Doctor Profile Content - Updated for sidebar layout */
        .doctor-profile-section {
            padding: 60px 0;
        }
        .mobile-section-for-hero{
            display:none;
        }

        /* Sidebar Navigation */
        .doctor-profile-nav {
            background: #f8f9fa;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 40px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 100px;
        }

        .doctor-profile-nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .doctor-profile-nav li {
            border-bottom: 1px solid #e9ecef;
        }

        .doctor-profile-nav li:last-child {
            border-bottom: none;
        }

        .doctor-profile-nav a {
            display: block;
            padding: 18px 20px;
            color: #333;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s;
            border-left: 4px solid transparent;
        }

        .doctor-profile-nav a.active {
            background: #f1f8ff;
            color: #0C4E80;
            border-left: 4px solid #0C4E80;
        }

        .doctor-profile-nav a:hover:not(.active) {
            background: #e9ecef;
        }

        /* Mobile Nav - Top buttons */
        .mobile-nav {
            display: none;
            margin-bottom: 30px;
            overflow-x: auto;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
            padding-bottom: 10px;
        }

        .mobile-nav ul {
            display: flex;
            flex-wrap:wrap;
            gap:5px;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .mobile-nav li {
            margin-right: 8px;
        }

        .mobile-nav li:last-child {
            margin-right: 0;
        }

        .mobile-nav a {
            display: block;
            padding: 10px 16px;
            background: #f8f9fa;
            color: #333;
            font-weight: 600;
            text-decoration: none;
            border-radius: 6px;
            border: 1px solid #e9ecef;
            transition: all 0.2s;
            font-size: 14px;
        }

        .mobile-nav a.active {
            background: #0C4E80;
            color: white;
            border-color: #0C4E80;
        }

        /* Content area */
        .doctor-profile-content {
            margin-bottom: 50px;
            scroll-margin-top: 120px;
            /* This helps with smooth scrolling positioning */
        }

        .doctor-profile-content h3 {
            font-size: 24px;
            font-weight: 700;
            color: #0C4E80;
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 2px solid #F3665D;
            display: inline-block;
        }

        .doctor-profile-content p {
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 20px;
            color: #444;
        }

        .expertise-list,
        .credentials-list {
            padding-left: 0;
        }

        .expertise-list li,
        .credentials-list li {
            margin-bottom: 15px;
            position: relative;
            padding-left: 25px;
            list-style: none;
            line-height: 1.5;
        }

        .expertise-list li:before,
        .credentials-list li:before {
            content: "•";
            color: #F3665D;
            font-weight: bold;
            font-size: 18px;
            position: absolute;
            left: 5px;
        }

        .expertise-category {
            font-weight: 700;
            margin-top: 20px;
            margin-bottom: 10px;
            color: #333;
            display: block;
        }

        /* Highlight box for important content */
        .highlight-box {
            background-color: #FFF1E6;
            border-left: 4px solid #F3665D;
            padding: 20px 25px;
            margin: 25px 0;
            border-radius: 8px;
        }

        .highlight-box h4 {
            color: #0C4E80;
            font-size: 18px;
            font-weight: 700;
            margin-top: 0;
            margin-bottom: 15px;
        }

        .highlight-box p {
            margin-bottom: 10px;
        }

        .highlight-box p:last-child {
            margin-bottom: 0;
        }

        .highlight-stat {
            font-weight: 700;
            color: #333;
            font-size: 17px;
        }

        /* Mobile responsive adjustments */
        @media (max-width: 991px) {
            .doctor-hero-content {
                flex-direction: column;
                text-align: center;
                padding:0px;
            }

            .doctor-profile-img {
                width: 280px;
                height: 330px;
                margin-bottom: 0px;
            }
            .mobile-section-for-hero{
                display:flex !important; 
            }
            .doctor-info{
                display:none
            }
            .doctor-hero-section{
                padding:0px;
            }

            .doctor-info h1, .doctor-info-for-mobile h1 {
                font-size: 32px;
            }

            .sidebar-col {
                display: none;
            }

            .mobile-nav {
                display: block;
            }
            .mobile-section-for-hero{
            display:flex;
        }
        }
        .doctor-info{
            width: 60%;
        }

        /* Mobile Hero Section Enhancements */
.mobile-section-for-hero {
    display: none;
    background: linear-gradient(to bottom, #f8f9fa 0%, #ffffff 100%);
    padding: 25px 15px 20px;
    text-align: center;
    border-bottom: 1px solid #e9ecef;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.03);
}

.doctor-info-for-mobile {
       display: flex
;
    flex-direction: column;
    align-items: start;
    width: 100%;
    text-align: left;
    margin-left: 10px;
}

.doctor-info-for-mobile h1 {
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 8px;
    color: #0C4E80;
    letter-spacing: -0.01em;
    line-height: 1.2;
}

.doctor-info-for-mobile h2 {
    font-size: 16px;
    font-weight: 500;
    margin-bottom: 20px;
    color: #555;
    line-height: 1.4;
    max-width: 90%;
}

.doctor-info-for-mobile .doctor-cta {
    margin-top: 15px;
    width: 100%;
    display: flex;
}

.doctor-info-for-mobile .btn {
    background: #F3665D;
    color: white;
    padding: 10px 24px;
    font-weight: 600;
    border-radius: 6px;
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-block;
    border: none;
    font-size: 15px;
    box-shadow: 0 3px 10px rgba(243, 102, 93, 0.2);
}

.doctor-info-for-mobile .btn:hover, 
.doctor-info-for-mobile .btn:active {
    background: #e24d44;
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(243, 102, 93, 0.3);
}

/* Add credentials badges below name */
.doctor-credentials-badges {
    display: flex;
    justify-content: center;
    margin-bottom: 15px;
    gap: 10px;
    flex-wrap: wrap;
}

.doctor-credential-badge {
    background-color: rgba(12, 78, 128, 0.08);
    color: #0C4E80;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 500;
}

    </style>
</head>

<body>

    <?php include 'includes/menu.php'; ?>

    <!-- Doctor Hero Section -->
    <section class="doctor-hero-section">
        <div class="container">
            <div class="doctor-hero-content">
                
                <div class="doctor-info">
                    <h1>Dr. Abhishek R. Kini</h1>
                    <h2><b> Consultant Foot & Ankle Reconstruction | Sports Medicine Surgeon</b></h2>
                    <h4>Mumbai, India</h4>
                    <!-- <span class="doctor-specialty"><strong>Specialty:</strong> Foot & Ankle Reconstruction, Sports
                        Medicine</span>
                    <span class="doctor-languages"><strong>Languages:</strong> English, Hindi, Marathi, Konkani, Gujarati, Kannada, Malayalam</span>
                    <span class="doctor-locations"><strong>Location:</strong> Mumbai, India</span> -->

                    <div class="doctor-cta">
                        <a href="/contact.php" class="btn">Schedule Appointment</a>
                    </div>
                </div>
                <div>
                    <img src="images/Dr.AbhishekKini-FootAnkleSurgeonMumbai.webp" alt="Dr. Abhishek R. Kini"
                        class="doctor-profile-img">
                </div>
            </div>
        </div>
    </section>
    <div class="mobile-section-for-hero">
         <div class="doctor-info-for-mobile">
                    <h1>Dr. Abhishek R. Kini</h1>
                    <h2><b> Consultant Foot & Ankle Reconstruction | Sports Medicine Surgeon</b></h2>
                    <h6>Mumbai, India</h6>
                    
                    <!-- Add credential badges -->
                    <div class="doctor-cta">
                        <a href="/contact.php" class="btn">Schedule Appointment</a>
                    </div>
                </div>
    </div>

    <!-- Doctor Profile Content - Updated with sidebar layout -->
    <section class="doctor-profile-section">
        <div class="container">
            <!-- Mobile Navigation - Only visible on mobile -->
            <div class="mobile-nav">
                <ul>
                    <li><a href="#about" class="active">About</a></li>
                            <li><a href="#expertise">Core Expertise</a></li>
                            <li><a href="#credentials">Fellowships & Training</a></li>
                            <li><a href="#clinical-highlights">Clinical Highlights</a></li>
                            <li><a href="#research-publications">Research</a></li>
                            <li><a href="#academic-teaching">Academic & Teaching</a></li>
                            <li><a href="#memberships">Professional Memberships</a></li>
                            <li><a href="#affiliations">Hospital Affiliations</a></li>
                            <li><a href="#publications">Publications</a></li>
                </ul>
            </div>

            <div class="row">
                <!-- Left Sidebar Navigation - col-md-3 -->
                <div class="col-md-3 sidebar-col">
                    <div class="doctor-profile-nav">
                        <ul>
                            <li><a href="#about" class="active">About</a></li>
                            <li><a href="#expertise">Core Expertise</a></li>
                            <li><a href="#credentials">Fellowships & Training</a></li>
                            <li><a href="#clinical-highlights">Clinical Highlights</a></li>
                            <li><a href="#research-publications">Research</a></li>
                            <li><a href="#academic-teaching">Academic & Teaching</a></li>
                            <li><a href="#memberships">Professional Memberships</a></li>
                            <li><a href="#affiliations">Hospital Affiliations</a></li>
                            <li><a href="#publications">Publications</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Main Content Area - col-md-9 -->
                <div class="col-md-9">
                    <div class="doctor-profile-content" id="about">
                        <h3>About</h3>
                        <p>Dr. Kini brings over 15 years of focused experience & fellowship-trained expertise in foot
                            and ankle surgery and sports injury management. As an ankle specialist practicing across
                            leading Mumbai hospitals, he combines international fellowships with a rigorous research
                            background to address complex deformities, trauma and chronic sports injuries in athletes
                            and active adults alike. His clinical approach emphasizes precise diagnosis, tailored
                            intervention and a seamless transition from recovery to performance.</p>

                        <p>Dr. Abhishek Kini merges his training with vast definitive understanding of Indian/Asian
                            human anatomy to deliver bespoke, evidence-driven care. His practical approach has earned
                            him reputation in among reputed Indian athletes/ sports personalities as the go to doctor.
                        </p>
                        <p><b>Languages: </b>English, Hindi, Marathi, Konkani, Gujarati, Kannada and Malayalam</p>
                    </div>

                    <div class="doctor-profile-content" id="expertise">
                        <h3>Core Expertise</h3>
                        <ul class="expertise-list">
                            <li class="expertise-category">Comprehensive Conditions Portfolio</li>
                            <ul>
                                <li>Ankle sprains/instability, osteochondral lesions, impingement, synovitis, all
                                    arthritis patterns (subtalar, midfoot, great toe)</li>
                                <li>Tendon disorders: Achilles tendinitis/rupture, peroneal instability, tibialis
                                    posterior dysfunction</li>
                                <li>Deformities: flat foot, cavus foot, bunion, hammertoe, Freiberg's disease,
                                    sesamoiditis, neuroma</li>
                            </ul>

                            <li class="expertise-category">Advanced Treatments</li>
                            <ul>
                                <li>Arthroscopic techniques: Diagnostic and therapeutic ankle arthroscopy, hindfoot
                                    endoscopy, osteochondral lesion repair</li>
                                <li>Ligament reconstruction: arthroscopic Broström, lateral ligament reconstruction</li>
                                <li>Reconstruction & Fusion: flat foot correction, midfoot superconstructs (Charcot),
                                    total/revision ankle arthroplasty</li>
                                <li>Soft-tissue transfers/ tendon transfers: endoscopic FHL for chronic Achilles rupture
                                </li>
                            </ul>

                            <li class="expertise-category">Sports Medicine & Rehabilitation</li>
                            <ul>
                                <li>Sports injuries: Ligament sprains to complete tears causing ankle instability,
                                    locking, osteochondral defects, tendon injuries/ ruptures</li>
                                <li>Return-to-play protocols with in-house physiotherapy gym and tailor-made loading
                                    programs</li>
                            </ul>

                            <li class="expertise-category">Biomechanical Assessment & Orthotics</li>
                            <ul>
                                <li>Gait analysis, custom orthoses for flat foot, plantar fasciitis management, tibialis
                                    posterior reconstruction</li>
                            </ul>
                        </ul>
                    </div>

                    <div class="doctor-profile-content" id="credentials">
                        <h3>Key Fellowships & Advanced Training</h3>
                        <ul class="credentials-list">
                            <li><b>Foot & Ankle Reconstruction Fellowships: </b></li>
                            <ul>
                                <li>Chelsea & Westminster Hospital & Fortius Clinic, London, UK</li>
                                <li>Academic Medical Center, Amsterdam, Netherlands</li>
                            </ul>
                            <li><b>Fellowship</b> in High Tibial Osteotomy under Prof.Nebulung & Dr.Reichwein,
                                Keiserworth, Dusseldorf, Germany</li>
                            <li><b>Arthroscopy and Sports Medicine Institute</b>, Mumbai</li>
                            <li><b>IOC Diploma in Sports Medicine</b>, prestigious International Olympic Committee</li>
                            <li><b>Train-the-Trainer Master Class</b>, Prince of Wales Hospital, Hong Kong</li>
                            <li><b>Observerships under</b></li>
                            <ul>
                                <li>Prof. C.N. Van Dijk (Netherland)</li>
                                <li>Prof. James Calder (UK)</li>
                                <li>Prof. Stefen Guillo & Piere Barrouk (France)</li>
                                <li>Foot and Ankle Units in Cardiff, Newport, Cambridge</li>
                            </ul>
                            <li><b>DNB </b>Orthopaedics under Prof (Dr.) M Shantharam Shetty</li>
                        </ul>
                    </div>

                    <div class="doctor-profile-content" id="other-certifications">
                        <h3>Other Certifications</h3>
                        <ul class="credentials-list">
                            <li>Certified Advanced Trauma Life Support (ATLS) workshop conducted by Hinduja Hospital and
                                Research Center, Mumbai</li>
                            <li>Certified Course on Biostatistics, Epidemiology and Research Methodology from Manipal
                                Academy of Higher Education July-Dec 2009 - secured 15.25/16 credits.</li>
                            <li>Completed AO Basic, Principles and Advance courses in Trauma and AO Spine Principles
                                course.</li>
                        </ul>
                    </div>
                    <div class="doctor-profile-content" id="clinical-highlights">
                        <h3>Selected Clinical Highlights</h3>
                        <ul class="credentials-list">
                            <li><b>Chronic Achilles Rupture:</b> Endoscopic flexor hallucis longus (FHL) transfer
                                restoring push-off strength in elite athletes</li>
                            <li><b>Ankle Instability:</b> Prospective comparative study of arthroscopic Broström repair
                                in generalized laxity—published and awarded at WIROC 2023</li>
                            <li><b>Charcot Reconstruction:</b> Multicentric Indian experience on midfoot superconstructs
                                for diabetic Charcot—J Foot Ankle Surg (Asia-Pacific) 2023</li>
                            <li><b>Complex Malunited Fractures:</b> Osteotomies and custom plating in neglected pilon
                                fractures, enabling weight-bearing in under 12 weeks</li>
                        </ul>
                    </div>
                    <div class="doctor-profile-content" id="research-publications">
                        <h3>Research & Publications</h3>
                        <ul class="credentials-list">
                            <li><b>16 Indexed Papers</b>, 6 under review; over 90 presentations at national/regional
                                conferences</li>
                            <li>Gold Medals for podium presentations at OASISCON 2009, AP-IFAS 2012, IOACON 2017, WIROC
                                2019 & 2023</li>
                            <li>Principal Investigator, CRASH-2 multicenter trial on tranexamic acid in acute trauma,
                                conducted by<b> London School of Hygiene & Tropical Medicine.</b></li>
                        </ul>
                    </div>
                    <div class="doctor-profile-content" id="academic-teaching">
                        <h3>Academic & Teaching Roles</h3>
                        <ul class="credentials-list">
                            <li>Faculty member, Indian Foot & Ankle Society educational programs nationwide</li>
                            <li>Course director for ankle arthroscopy demonstrations in Sri Lanka, Hong Kong & India</li>
                            <li>Examiner for DNB Orthopaedics, Maharashtra University of Health Sciences</li>
                            <li><b>Conference Faculty:</b></li>
                            <ul>
                                <li>Bombay Orthopaedic Society (Foot & Ankle course)</li>
                                <li>Maharashtra Orthopaedic Association - MOACON (2014, 2017, 2018, 2019)</li>
                                <li>Asia Pacific Orthopedic Association – Trauma</li>
                                <li>Indian Arthroscopy Society</li>
                                <li>Indian Orthopaedic Association - IOACON (2016, 2018)</li>
                                <li>Indian Foot & Ankle Society - IFASCON (2016, 2017, 2018, 2022, 2023, 2024)</li>
                                <li>Western India Regional Orthopaedic Conference (2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022, 2023, 2024)</li>
                            </ul>
                        </ul>
                    </div>
                    <div class="doctor-profile-content" id="memberships">
                        <h3>Professional Memberships</h3>
                        <ul class="credentials-list">
                            <li>Maharashtra Medical Council</li>
                            <li>Indian Medical Council</li>
                            <li>Indian Orthopaedic Association</li>
                            <li>Indian Arthroscopy Society</li>
                            <li>Indian Foot & Ankle society</li>
                            <li>Bombay Orthopaedic Society</li>
                            <li>Maharashtra Orthopaedic association</li>
                            <li>AO Trauma India and AO Spine India</li>
                            <li>European Society for Sports Traumatology, knee surgery & arthroscopy (ESSKA) & Ankle & Foot Associates (AFAS)</li>
                            <li>ISAKOS</li>
                        </ul>
                    </div>

                    <div class="doctor-profile-content" id="affiliations">
                        <h3>Hospital Affiliations (Mumbai & Beyond)</h3>
                        <ul class="credentials-list">
                            <li>Foot ARK clinic, Prabhadevi, Dadar west, Mumbai (Own Clinic)</li>
                            <li>Advanced Orthopaedics: Nana chowk, Grant Road, Mumbai</li>
                            <li>101 Health Suites, Doctor House, Pedder road, Mumbai</li>
                            <li>PD Hinduja Hospital & Research Centre (Mahim & Khar), Mumbai</li>
                            <li>Lilavati Hospital & Research Centre, Bandra West, Mumbai</li>
                            <li>HN Reliance Hospital, Prathna Samaj, Mumbai</li>
                            <li>Breach Candy Hospital Trust, Mumbai</li>
                            <li>Jupiter Hospital, Thane</li>
                            <li>Parekh's Hospital, Ahmedabad</li>
                            <li>Sahyadri Hospitals, Pune</li>
                            <li>Aziz Polyclinic, Dibrugarh, Assam</li>
                        </ul>
                    </div>

                    <div class="doctor-profile-content" id="patient-care">
                        <h3>Patient-Centered Care & Outcomes</h3>
                        
                        <div class="highlight-box">
        <p>Dr. Kini's consultations are described by patients as thorough and candid. In a patient's words – "Consultations with Dr Abhishek are akin to a mechanic inspecting "every gear and bearing" before tuning performance. He outlines realistic recovery timelines, emphasizing self-management and targeted physiotherapy over routine reliance on medication."</p>
        
        <p class="highlight-stat">The pragmatic, data-driven approach has led to > 95% return-to-sport rates in professional athletes treated for ankle injuries and complication rates below 2% even in complex reconstructions by Dr. Abhishek Kini.</p>
    </div>
                    </div>

                    <div class="doctor-profile-content" id="publications">
                        <h3>Publication Details</h3>
                        <ul class="credentials-list">
                            <li><b>1. Odontoid fractures: A retrospective analysis of 53 cases</b><br>
                            Shetty A, Kini AR, Prabhu J. Indian Journal of Orthopaedics 2009;43(4):352–360. PMC</li>
                            
                            <li><b>2. PCR: A Fast Diagnostic Investigation for Spinal Tuberculosis</b><br>
                            Kini AR, Shetty MS, Kumar A, Shetty V. JOASIS 2010. ResearchGate</li>
                            
                            <li><b>3. Sub axial cervical spine injuries – Modification of Stellerman's algorithm</b><br>
                            Shetty A, Kini AR, Muthappa D. Indian Journal of Orthopaedics 2011;45(3):261–268. PMC</li>
                            
                            <li><b>4. Minimally invasive plate osteosynthesis (MIPO) for humerus diaphyseal fractures</b><br>
                            Shetty MS, Kumar A, KT SJ, Kini AR. Indian Journal of Orthopaedics 2011;45(6):520–526. PMC</li>
                            
                            <li><b>5. Validation of Navigation Assisted Cup Placement in Total Hip Arthroplasty</b><br>
                            Kumar A, Shetty MS, Kiran GK, Kini AR. International Orthopaedics (SICOT) 2012;36:17–22. PMC</li>
                            
                            <li><b>6. Management of traumatic atlanto-axial instability: A retrospective study of eight cases</b><br>
                            Shetty A, Kini AR, Gupta A, et al. Indian Journal of Orthopaedics 2012;46:86–91. ResearchGate</li>
                            
                            <li><b>7. Community-associated, methicillin-susceptible and methicillin-resistant Staphylococcus aureus bone and joint infections in children</b><br>
                            Kini AR, Shetty V, Kumar A, Shetty MS, Shetty A. Journal of Pediatric Orthopaedics B 2013;22(2):158–166. PMC</li>
                            
                            <li><b>8. LDRP – Early Results from India</b><br>
                            Shetty MS, Kumar A, Kini AR. Journal of Injury, Trauma and Infection</li>
                            
                            <li><b>9. Reduction techniques in the management of atlanto axial subluxation - Technical note and analysis of cases</b><br>
                            Shetty A, Upadhya S, Kini AR, et al. Indian Journal of Orthopaedics 2013;47:333–339. PubMed</li>
                            
                            <li><b>10. Mini posterior lumbosacral interbody fusion with pre sacral screw stabilization in early lumbo sacral instability</b><br>
                            Shetty A, Kini AR, Chacko A, et al. Indian Journal of Orthopaedics 2015;49:278–283. PubMed</li>
                            
                            <li><b>11. Repairing the posteromedial meniscocapsular separation: a technique using Inside - Out meniscal repair needles</b><br>
                            Joshi A, Sabnis B, Kini AR, Usman S. Arthroscopy Techniques. ArthroscopyTechniques</li>
                            
                            <li><b>12. Arthroscopy in foot and ankle – Open your mind for your eyes to see</b><br>
                            Kini AR, Tapasvi S. Asian Journal of Arthroscopy 2013;3(2):2.</li>
                            
                            <li><b>13. Tendoscopy: A novel way to look at an enigma; Indications, technique and results of managing tendon pathologies in foot and ankle</b><br>
                            Kini AR, Munde A. Asian Journal of Arthroscopy 2013;3(2):24–29. Arthroscopy Journal</li>
                            
                            <li><b>14. It's the Biology Orthopods! Heralding a Reconstructive Revolution Through Musculoskeletal Tissue Banks (MSTB) in India</b><br>
                            Bagaria V, Tiwari A, Kini AR, et al. Indian Journal of Orthopaedics 2022;56(9):1533–1546. PubMed</li>
                            
                            <li><b>15. Conservative management of diabetic Charcot foot: a narrative review</b><br>
                            Phillips A, Divi P, Kini AR, et al. Journal of Foot and Ankle Surgery (Asia-Pacific) 2023;10(S-1):S21–S26. jfasap</li>
                            
                            <li><b>16. Midfoot Charcot and need for arch reconstruction and superconstruct—"Lessons learnt": Multicentric Indian experience</b><br>
                            Rajagopalakrishnan R, Simon R, Kini AR, et al. Journal of Foot and Ankle Surgery (Asia-Pacific) 2023. jfasap</li>
                        </ul>
                    </div>
                </div> <!-- End of col-md-9 -->
            </div> <!-- End of row -->
        </div> <!-- End of container -->
    </section> <!-- End of doctor-profile-section -->
    <?php include "includes/footer.php"; ?>
    <script src="js/owl.carousel.min.js"></script>

    <script type="text/javascript">
        // Improved smooth scroll for both desktop and mobile navigation
        document.querySelectorAll('.doctor-profile-nav a, .mobile-nav a').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                // Remove active class from all links in both navigations
                document.querySelectorAll('.doctor-profile-nav a, .mobile-nav a').forEach(a => {
                    a.classList.remove('active');
                });

                // Add active class to clicked link and its corresponding link in the other navigation
                const href = this.getAttribute('href');
                document.querySelectorAll(`.doctor-profile-nav a[href="${href}"], .mobile-nav a[href="${href}"]`).forEach(a => {
                    a.classList.add('active');
                });

                // Scroll to section with proper offset
                const targetElement = document.querySelector(href);

                // Calculate header offset - typically 80-100px depending on your header height
                const headerOffset = 100;
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            });
        });

        // Add scroll spy to highlight current section in both navigations
        window.addEventListener('scroll', function () {
            const scrollPosition = window.scrollY - 420;

            document.querySelectorAll('.doctor-profile-content').forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;

                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    const id = section.getAttribute('id');

                    document.querySelectorAll('.doctor-profile-nav a, .mobile-nav a').forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === '#' + id) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        });
    </script>

</body>

</html>