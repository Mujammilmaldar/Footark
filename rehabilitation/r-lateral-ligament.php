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
           
          <h1>Rehabilitation </h1>
            <h2> <a href="index.php">Home</a> 
              <i class="fa fa-angle-right"></i> <b>Lateral ligament reconstruction.</b></h2>
        </div>
        
</section>

<section class="pad45">
    <div class="container">
        <h1 class="section-title">Lateral ligament reconstruction</h1>
        <div class="row">
            <div class="col-md-8 col-lg-8 ">
                <img src="images/Lateral-ligament.jpg" style="width:100%" class="img-thumbnail"><br><br>
             
              <p>Following ankle arthroscopy, the Anterior Talo-Fibula Ligament (ATFL) and/or Calcaneo-Fibula Ligament (CFL) are reconstructed by tightening the tissue by detaching, advancing and reattaching them with bone anchors or sutures.</p>
              <h3>Day of Operation (week 1)</h3>
              <ul>
                <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Rigid walking boot placed during surgery</li>
                <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Mobilise touch weight bearing (10 % body weight) with 2 crutches</li>
                <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Home the same</li>
                 <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Strict elevation at the level of the chest</li>
                 <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Move toes, knee and hip</li>
            </ul>
            <h3>Weeks 1 – 2 Post Operatively</h3>
             <ul>
                <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Week 1 : Strict elevation at the level of the chest, for 23 hours a day (for pain relief and wound healing)</li>
                <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Week 2 : Strict elevation at the level of the chest 40 minutes every hour</li>
                <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Mobilise touch weight bearing (10 % body weight) with 2 crutches</li>
                 <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Move toes, knee and hip. Straight leg raises</li>
                 
            </ul>
            <h3>Week 3 Post Operatively (after 2 weeks completed)</h3>
             <ul>
                <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Clinic review by doctor – removal of boot, wound inspection, removal of sutures</li>
                <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Rigid walking boot refitted. Now full weight bearing (FWB, 100 % body weight)</li>
                <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Start physiotherapy</li>
                
            </ul>
            </div>
    <div class="col-xl-4 col-md-4 col-lg-4">
                  <?php include'includes/r-sidelist.php';?>
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
