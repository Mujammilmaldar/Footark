<?php include '../includes/header.php';?>

    <!-- Hero Banner -->
    <section class="hero-banner">
        <div class="container">
            <div class="hero-container">
                <div class="inner-container">
                    <div class="hero-breadcrumb" style="margin-bottom: 15px; font-size: 14px; color: #ffffff;">
                        <a href="../index.php" style="text-decoration: none; color: #ffffff;">Home</a> &gt;
                        <a href="../services.php" style="text-decoration: none; color: #ffffff;">Services</a> &gt;
                        <a href="../treatments.php" style="text-decoration: none; color: #ffffff;">Treatments</a> &gt;
                        <span style="color: #ffffff;">Big Toe Fusion</span>
                    </div>
                    <div class="hero-content">
                        <h1>Big Toe Fusion Treatment</h1>
                        
                        <!-- Mobile Image - Shows after heading on mobile only -->
                        <div class="mobile-hero-image desktop-hidden">
                            <img src="images/bigtoe1.jpg" alt="Big Toe Fusion">
                        </div>
                        
                        <p>Advanced big toe fusion surgery for severe arthritis and joint degeneration. Our specialized approach provides effective pain relief and improved function for the first metatarsophalangeal joint.</p>
                        <div class="hero-buttons">
                            <a href="../contact.php" class="btn-primary">Schedule Consultation</a>
                        </div>
                    </div>
                </div>
                <div class="image-container mobile-hidden">
                    <img src="images/bigtoe1.jpg" alt="Big Toe Fusion">
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="main-wrapper">
        <div class="container">
            <div class="content-layout">
                
                <div class="sidebar">
                    <div class="widget">
                        <div class="widget-header">Table of Contents</div>
                        <div class="widget-content">
                            <nav class="toc-nav">
                                <ul class="toc-list">
                                    <li><a href="#procedure" class="toc-link">What Surgery Involves</a></li>
                                    <li><a href="#surgery-day" class="toc-link">Surgery Day Process</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="widget widget-dr-kini mobile-hidden">
                        <img src="../assets/images/home-about/Dr.AbhishekKini-Homepage.webp" alt="Big Toe Fusion">
                        <h6 style="margin-bottom:0px;margin-top:10px;padding-bottom:0px;">Dr. Abhishek Kini</h6>
                        <p style="font-style: italic;">Foot & Ankle Specialist</p>
                        <a href="../about.php" class="view-all-btn contact-btn">Know More</a>
                    </div>
                </div>
                <div class="main-content">
                    <div class="content-section" id="procedure">
                        <h2>What does the surgery involve?</h2>
                        <div class="content-with-image">
                            <div class="content-text">
                                <p>During the surgery your surgeon will make a small incision around 5cm long on the back of your big toe to expose the arthritic joint. The joint is cleared from any bone spurs that often grow around the big toe joint. The remaining joint cartilage is then removed to expose the undersurface of the joint. This surface is then perforated and thus "prepared" for a fusion. The aim is to encourage bleeding and stem cells at the end of the bones to facilitate healing or union. Just like when a fracture or break heals.</p>
                                <p>After the surfaces are ready they are held in a functional position for the big toe and fixed rigidly using small plates (see picture) and screws. The joint will then heal into one solid bone.</p>
                            </div>
                            <div class="content-image-card">
                                <img src="images/bigtoe1.jpg" alt="Big Toe Fusion">
                            </div>
                        </div>
                    </div>

                    <div class="content-section" id="surgery-day">
                        <h3>What happens on the day of the surgery?</h3>
                        <p>The surgery is performed as a day surgical procedure and you are often able to go home on the same day. Occasionally if the procedure takes place late in the afternoon or early evening then it may be advisable for you to stay for one night. We perform the surgery under a general anaesthetic and you will meet and discuss your anaesthetic needs or concerns with our anaesthetist prior to surgery.</p>
                        <p>The surgery can take between 45-60 mins depending on the complexity. At the start of the procedure we will infiltrate a local anaesthetic "block" around the ankle. This will make the foot numb and help with post surgery pain. This lasts a few hours after the operation. so don't worry if you cannot feel your toes when you wake up. The incision is closed with dissolvable stitches in most but not all cases. You are likely to 'wake up' with needles in your arm for the anaesthetic agents (cannula) and a big bandage around the foot.</p>
                        <p>The surgery is done using a tourniquet around the thigh. This is to prevent blood getting into the operative field. This does means that occasionally your thigh might feel bruised and a little sore after the surgery. This is normal and usually settles in a day or two.</p>
                    </div>

                </div>
                <div class="widget widget-dr-kini desktop-hidden">
                    <img src="../assets/images/home-about/Dr.AbhishekKini-Homepage.webp" alt="Big Toe Fusion">
                    <h6 style="margin-bottom:0px;margin-top:10px;padding-bottom:0px;">Dr. Abhishek Kini</h6>
                    <p style="font-style: italic;">Foot & Ankle Specialist</p>
                    <a href="../about.php" class="view-all-btn contact-btn">Know More</a>
                </div>

                <div class="widget desktop-hidden">
                    <div class="widget-header">Office Location</div>
                    <div class="widget-content">
                        <p><i class="fas fa-map-marker-alt"></i> <strong>Mumbai Office</strong></p>
                        <p style="margin-left: 20px;">Mumbai, India</p>
                        <p><i class="fas fa-phone"></i> <strong>Phone:</strong> +91 98765 43210</p>
                        <p><i class="fas fa-envelope"></i> <strong>Email:</strong> info@footark.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include '../includes/footer.php'; ?>

    <script>
        // Smooth scrolling for all internal links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Table of Contents active state
        function updateActiveTOC() {
            const sections = document.querySelectorAll('.content-section');
            const tocLinks = document.querySelectorAll('.toc-link');
            
            let current = '';
            const scrollPos = window.scrollY + 150;
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                
                if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
                    current = section.getAttribute('id');
                }
            });
            
            tocLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        }

        window.addEventListener('scroll', updateActiveTOC);
        document.addEventListener('DOMContentLoaded', updateActiveTOC);

        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.style.boxShadow = '0 2px 15px rgba(0,0,0,0.15)';
            } else {
                header.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
            }
        });
    </script>
