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
              <i class="fa fa-angle-right"></i> <b>Achilles tendon rupture repair   </b></h2>
        </div>
        
</section>

<section class="pad45">
    <div class="container">
        <h1 class="section-title">Achilles tendon rupture repair</h1>
        <div class="row">
            <div class="col-md-8 col-lg-8 ">
                <img src="images/Achillestendonrupturerepairtr1.jpg" style="width:100%" class="img-thumbnail"><br><br>
             <h3>What is Achilles tendon repair surgery?</h3>
              <p>Achilles tendon repair surgery is a type of surgery to fix a damaged Achilles tendon.
     The Achilles tendon is a strong, fibrous cord in the lower leg. It connects the muscles of your calf to your heel. It’s the largest tendon in your body. It helps you walk, run, and jump.</p>
     <p>In some cases, the Achilles tendon can tear, or rupture. This is usually due to a sudden, strong force. It can happen during tough physical activity. It can happen if you suddenly move faster or pivot on your foot. Having a foot that turns outward too much can increase your risk of a torn tendon. A ruptured Achilles tendon can cause pain and swelling near your heel. You may not be able to bend your foot downward.</p>
<p>The Achilles tendon can also degenerate. This is also known as tendinitis or tendinopathy. This might cause symptoms like pain and stiffness along your Achilles tendon and on the back of your heel. This is most often through overuse and repeated stress to the tendon. It can result from repeated stress on your tendon, especially if you have recently been more active. Having short calf muscles can increase your risk of tendinopathy.</p>
<h3>Why might I need Achilles tendon repair surgery?</h3>
<p>You might need Achilles tendon surgery if you tore your tendon. Surgery is advised for many cases of a ruptured Achilles tendon. But in some cases, your healthcare provider may advise other treatments first. These may include pain medicine, or a temporary cast to prevent your leg from moving. And your healthcare provider may not advise surgery if you have certain medical conditions. These include diabetes and neuropathy in your legs.</p>
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
