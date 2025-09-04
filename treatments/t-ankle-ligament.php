<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2QML9M8PGF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2QML9M8PGF');
</script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <?php include'includes/head.php';?>
</head>
<body>

<?php include'includes/menu.php';?>
   
<section class="blog_banner_bg">
        <div class="container">
           
          <h1>Treatments </h1>
            <h2> <a href="index.php">Home</a> 
              <i class="fa fa-angle-right"></i> <b>Ankle Ligament reconstruction surgery  </b></h2>
        </div>
        
</section>

<section class="pad45">
    <div class="container">
        <h1 class="section-title">Ankle Ligament reconstruction surgery   </h1>
        <div class="row">
            <div class="col-md-8">
                <img src="images/ankleligament1.jpg" style="width:100%" class="img-thumbnail"><br><br>
            
              <p>Ankle ligament reconstruction is a surgical procedure that tightens the outside or lateral ligaments of the ankle. There are two major ankle ligaments that stabilize the lateral ankle, the anterior talofibular ligament and the calcaneofibular ligament. This surgery is intended for active, healthy patients who have experienced frequent ankle sprains which has led to chronic ankle instability and pain. Non-operative treatments include physical therapy and supportive ankle braces. For some patients with mild or moderate ankle instability, these non-operative treatments are sufficient to resume activities, and an operation is not necessary. However, for patients who remain symptomatic after trying conservative therapies, surgery may be considered. At the time of the operation, the quality of the lateral ligaments is evaluated to determine whether your own ligaments can be used for the reconstruction by tightening them (detaching them and reattaching them in a tightened position). If the ligaments are severely damaged, an allograft (cadaver) tendon is used to reinforce the damaged ligaments. Depending on the severity of your ankle instability, either one or both of the major ligaments are tightened (reconstructed). This is an extremely effective procedure which allows patients to resume activity that was previously limited by ankle instability.</p>
<h3>Preparing for the surgery</h3>
<p>When your surgery has been scheduled, you will be given a pre-surgery packet including information on location of the surgery. This procedure is performed at an outpatient surgery center. Patients over the age of 50 and with certain health conditions will require a blood work-up and EKG. Blood thinners should be discontinued prior to the surgery. This includes Coumadin, Plavix, aspirin, anti-inflammatory medicines (ibuprofen, naproxen, Aleve, Motrin, diclofenac, etc.), glucosamine, and herbs that may cause thinning of the blood. If you are on prescribed medicines such as Coumadin or Plavix, meet with your primary care doctor prior to discontinuation.</p>
            </div>
    <div class="col-xl-4 col-md-4 col-lg-4">
                  <?php include'includes/treatment-list.php';?>
    </div>
</section>

<?php include"includes/footer.php";?>
  <script src="js/owl.carousel.min.js"></script>

    <script type="text/javascript">
        
            //show tabs content on hover only on big screens
                $('.where-does-it-hurt-box-right1 .nav-tabs .nav-link').hover(function() {
                    $(this).tab('show');
                });
                  

// Sticky navbar
// =========================
            $(document).ready(function () {
                // Custom function which toggles between sticky class (is-sticky)
                var stickyToggle = function (sticky, stickyWrapper, scrollElement) {
                    var stickyHeight = sticky.outerHeight();
                    var stickyTop = stickyWrapper.offset().top;
                    if (scrollElement.scrollTop() >= stickyTop) {
                        stickyWrapper.height(stickyHeight);
                        sticky.addClass("is-sticky");
                    }
                    else {
                        sticky.removeClass("is-sticky");
                        stickyWrapper.height('auto');
                    }
                };

                // Find all data-toggle="sticky-onscroll" elements
                $('[data-toggle="sticky-onscroll"]').each(function () {
                    var sticky = $(this);
                    var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
                    sticky.before(stickyWrapper);
                    sticky.addClass('sticky');

                    // Scroll & resize events
                    $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function () {
                        stickyToggle(sticky, stickyWrapper, $(this));
                    });

                    // On page load
                    stickyToggle(sticky, stickyWrapper, $(window));
                });
            });

// $(window).scroll(function(){
//     if($(window).scrollTop() <= 1000){
//       $('.section-title').addClass('animated  slideInLeft');
//     } else {
//       $('.section-title').removeClass('animated slideInLeft');
//     }
// });

//script for owl
$('#section-services').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    smartSpeed: 1000,
    autoplay: 5000,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:2
        },
        1200:{
            items:3
        }
    }
});

$('#section-testimonial').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    smartSpeed: 1000,
    autoplay: 5000,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1
        },
        1200:{
            items:1
        }
    }
});

    </script>

</body>
</html>
