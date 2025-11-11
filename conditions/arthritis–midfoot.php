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
          <h1>Arthritis – Midfoot </h1>
            <h2> <a href="index.php">Home</a> 
              <i class="fa fa-angle-right"></i> <b>Arthritis – Midfoot  </b></h2>
        </div>
        
</section>

<section class="pad45">
    <div class="container">
        <h1 class="section-title">Arthritis – Midfoot </h1>
        <div class="row">
            <div class="col-md-8">
                <img src="../assets/images/Midfoot.jpg" style="width:100%" class="img-thumbnail"><br><br>
             
               <p>Subtalar arthritis is characterized by pain in the hindfoot that is aggravated by standing and walking, particularly on uneven ground. It is likely to be associated with stiffness when attempting to move the foot from side to side. The location of the pain is commonly just below the level of the inside and outside ankle bones (medial and lateral malleoli). The most common cause of subtalar arthritis is a previous injury – usually a calcaneal fracture, or abnormal alignment of the heal bone.</p>



            </div>
    <div class="col-xl-4 col-md-4 col-lg-4">
                  <?php include'includes/sidelist.php';?>
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

