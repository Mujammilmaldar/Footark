<?php include 'includes/header.php';?>
<link rel="stylesheet" href="assets/css/about.css">

<main>
    <!-- About Hero Section - Same as Image with Parallax -->
    <section class="about-hero-section" style="background: url('assets/images/aboutBG.png'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="parallax-overlay"></div>
        <div class="container">
            <div class="about-hero-content">
                <h1 class="about-main-title">About Our <span class="title-accent">Team</span></h1>
                <p class="about-hero-subtitle">Our experts provide the highest quality patient care and treatment</p>
            </div>
        </div>
    </section>

    <!-- Doctor Profile Section - Same as Image -->
    <section class="doctor-profile-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="doctor-info">
                        <h2 class="doctor-name">Dr Johnathan Smith</h2>
                        <p class="doctor-title">Chief Medical Officer, Senior Cardiologist</p>
                        
                        <div class="doctor-description">
                            <div class="description-column">
                                <p>Doctor Johnatan Smith is a triple board certified physician, certified by the American Board of Internal Medicine in Cardiology, Interventional Cardiology and Internal Medicine. He has over 20 years of experience in Cardiology and the management of Cardiovascular Disease and has a total of over 30 years experience as a physician. Dr Smith is a Fellow of the American College of Cardiology (FACC) and a Fellow of the European Society of Cardiology (FESC) and has a doctorate.</p>
                                
                                <p>Dr Smith is on a Mission to use his knowledge and experience to help the public, bringing them up to date information that impacts their health, and keeping the public informed about the latest developments in Cardiology in particular.</p>
                            </div>
                            
                            <div class="description-column">
                                <p>I have interests in all aspects of general cardiology including but not limited to coronary artery disease, valvular heart disease, heart failure management, hypertrophic cardiomyopathy.</p>
                                
                                <div class="doctor-signature">
                                    <img src="assets/images/signature.png" alt="Doctor Signature" class="signature-img">
                                    <p class="signature-title">Chief Medical Officer</p>
                                </div>
                            </div>
                        </div>

                        <!-- Statistics Section -->
                        <div class="doctor-stats">
                            <div class="stat-card">
                                <div class="stat-number" data-count="39">0</div>
                                <div class="stat-title">Angioplasty</div>
                                <div class="stat-description">Procedure used to open clogged heart arteries and clean them.</div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-number" data-count="54">0</div>
                                <div class="stat-title">Bypass Surgery</div>
                                <div class="stat-description">Procedure used to improve blood flow to your heart.</div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-number" data-count="123">0</div>
                                <div class="stat-title">Stent Placements</div>
                                <div class="stat-description">Procedure used to open arteries in heart and place stent.</div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-number" data-count="73">0</div>
                                <div class="stat-title">Catheter Ablation</div>
                                <div class="stat-description">Procedure that scars tissue in heart to block blood signals.</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-5 col-md-6">
                    <div class="doctor-image">
                        <img src="assets/images/doctor-profile.png" alt="Dr Johnathan Smith" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Biography Details Section -->
    <section class="biography-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 order-1">
                    <div class="biography-image">
                        <img src="assets/images/doctor2.png" alt="Dr. Johnathan Smith" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 order-2">
                    <div class="biography-content">
                        <h2 class="biography-title">Biography details</h2>
                        
                        <div class="biography-accordion">
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3><a href="#specialties">Specialties</a></h3>
                                </div>
                                <div class="accordion-content" id="specialties">
                                    <ul>
                                        <li>Interventional Cardiology</li>
                                        <li>Coronary Artery Disease</li>
                                        <li>Valvular Heart Disease</li>
                                        <li>Heart Failure Management</li>
                                        <li>Hypertrophic Cardiomyopathy</li>
                                        <li>Cardiac Catheterization</li>
                                        <li>Preventive Cardiology</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3><a href="#qualifications">Qualifications</a></h3>
                                </div>
                                <div class="accordion-content" id="qualifications">
                                    <ul>
                                        <li>MD - Doctor of Medicine</li>
                                        <li>Fellowship in Cardiology</li>
                                        <li>Fellowship in Interventional Cardiology</li>
                                        <li>Board Certified in Internal Medicine</li>
                                        <li>Fellow of American College of Cardiology (FACC)</li>
                                        <li>Fellow of European Society of Cardiology (FESC)</li>
                                        <li>Advanced Cardiac Life Support (ACLS) Certified</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3><a href="#research">Research and Publications</a></h3>
                                </div>
                                <div class="accordion-content" id="research">
                                    <ul>
                                        <li>"Advances in Minimally Invasive Cardiac Surgery" - Journal of Cardiology 2023</li>
                                        <li>"Novel Approaches to Heart Failure Management" - American Heart Journal 2022</li>
                                        <li>"Coronary Intervention Techniques: A 20-Year Review" - Circulation Research 2021</li>
                                        <li>"Prevention Strategies in Cardiovascular Disease" - European Heart Journal 2020</li>
                                        <li>Principal Investigator: Clinical Trial on New Stent Technology</li>
                                        <li>Co-author: 50+ peer-reviewed publications</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <h3><a href="#achievements">Achievements</a></h3>
                                </div>
                                <div class="accordion-content" id="achievements">
                                    <ul>
                                        <li>Outstanding Physician Award - Medical Association 2023</li>
                                        <li>Excellence in Patient Care - Healthcare Excellence Awards 2022</li>
                                        <li>Top Doctor Recognition - Regional Medical Board 2021</li>
                                        <li>Innovation in Cardiac Treatment - Medical Innovation Society 2020</li>
                                        <li>30+ Years of Medical Excellence</li>
                                        <li>20+ Years Specialized in Cardiology</li>
                                        <li>Guest Speaker at International Cardiology Conferences</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
// Number counting animation
function animateCounter(element, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        const currentValue = Math.floor(progress * (end - start) + start);
        element.innerHTML = currentValue;
        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    window.requestAnimationFrame(step);
}

// Intersection Observer for triggering animation when visible
const observerOptions = {
    threshold: 0.5,
    rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const statNumbers = entry.target.querySelectorAll('.stat-number');
            statNumbers.forEach((number, index) => {
                const finalValue = parseInt(number.getAttribute('data-count'));
                // Add staggered delay for each number
                setTimeout(() => {
                    animateCounter(number, 0, finalValue, 2000);
                }, index * 200);
            });
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

// Start observing when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    const statsSection = document.querySelector('.doctor-stats');
    if (statsSection) {
        observer.observe(statsSection);
    }
});
</script>
