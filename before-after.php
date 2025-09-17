<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="assets/css/beforeafter.css">

    <!-- Page Header Section -->
    <section class="page-header-section">
        <div class="container">
            <div class="page-header-content">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                        <li class="breadcrumb-item active" aria-current="page">BEFORE & AFTER GALLERY</li>
                    </ol>
                </nav>
                <h1 class="page-title">BEFORE & AFTER GALLERY</h1>
            </div>
        </div>
    </section>

    <!-- Before After Gallery -->
    <section class="gallery-wrapper">
        <div class="container">
            <div class="gallery-header">
                <h2>Patient Transformation Gallery</h2>
                <p>Witness the life-changing results our patients have achieved through expert care and advanced surgical techniques.</p>
            </div>

            <div class="gallery-grid">
                <div class="before-after-card">
                    <div class="image-container">
                        <img src="assets/images/before-after/1.png" alt="Bunion Surgery Before After" loading="lazy">
                    </div>
                    <div class="card-content">
                        <h3>Bunion Correction Surgery</h3>
                        <p>Complete bunion removal with restored foot alignment and pain relief.</p>
                        <div class="card-meta">
                            <span class="procedure-type">Surgical</span>
                            <span class="recovery-time">6-8 weeks</span>
                        </div>
                    </div>
                </div>

                <div class="before-after-card">
                    <div class="image-container">
                        <img src="assets/images/before-after/2.png" alt="Hammer Toe Correction" loading="lazy">
                    </div>
                    <div class="card-content">
                        <h3>Hammer Toe Correction</h3>
                        <p>Straightened toes with improved function and comfortable shoe fitting.</p>
                        <div class="card-meta">
                            <span class="procedure-type">Minimally Invasive</span>
                            <span class="recovery-time">3-4 weeks</span>
                        </div>
                    </div>
                </div>

                <div class="before-after-card">
                    <div class="image-container">
                        <img src="assets/images/before-after/3.png" alt="Plantar Fasciitis Treatment" loading="lazy">
                    </div>
                    <div class="card-content">
                        <h3>Plantar Fasciitis Treatment</h3>
                        <p>Complete heel pain relief through advanced therapeutic techniques.</p>
                        <div class="card-meta">
                            <span class="procedure-type">Non-Surgical</span>
                            <span class="recovery-time">2-3 weeks</span>
                        </div>
                    </div>
                </div>

                <div class="before-after-card">
                    <div class="image-container">
                        <img src="assets/images/before-after/4.png" alt="Ankle Reconstruction" loading="lazy">
                    </div>
                    <div class="card-content">
                        <h3>Ankle Reconstruction</h3>
                        <p>Restored ankle stability and mobility after complex injury repair.</p>
                        <div class="card-meta">
                            <span class="procedure-type">Reconstructive</span>
                            <span class="recovery-time">8-12 weeks</span>
                        </div>
                    </div>
                </div>

                <div class="before-after-card">
                    <div class="image-container">
                        <img src="assets/images/before-after/5.png" alt="Flat Foot Correction" loading="lazy">
                    </div>
                    <div class="card-content">
                        <h3>Flat Foot Correction</h3>
                        <p>Restored natural arch with improved weight distribution and comfort.</p>
                        <div class="card-meta">
                            <span class="procedure-type">Surgical</span>
                            <span class="recovery-time">6-10 weeks</span>
                        </div>
                    </div>
                </div>

                <div class="before-after-card">
                    <div class="image-container">
                        <img src="assets/images/before-after/6.png" alt="Ingrown Toenail Treatment" loading="lazy">
                    </div>
                    <div class="card-content">
                        <h3>Ingrown Toenail Treatment</h3>
                        <p>Permanent solution for recurring ingrown toenails with minimal scarring.</p>
                        <div class="card-meta">
                            <span class="procedure-type">Outpatient</span>
                            <span class="recovery-time">1-2 weeks</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>

    <script>
        // Smooth scrolling for internal links
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
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.style.boxShadow = '0 2px 15px rgba(0,0,0,0.15)';
            } else {
                header.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
            }
        });

        // Image lazy loading enhancement
        const images = document.querySelectorAll('img[loading="lazy"]');
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.classList.add('fade-in');
                    observer.unobserve(img);
                }
            });
        });

        images.forEach(img => imageObserver.observe(img));
    </script>
</body>
</html>