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
              <i class="fa fa-angle-right"></i> <b>Flat foot reconstruction.</b></h2>
        </div>
        
</section>

<section class="pad45">
    <div class="container">
        <h1 class="section-title">Flat foot reconstruction.</h1>
        <div class="row">
            <div class="col-md-8 col-lg-8 ">
                <img src="images/r-flat-foot.jpg" style="width:100%" class="img-thumbnail"><br><br>
           <p><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;You will be in a splint for the first two weeks after surgery. </p>
           <p><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Bleeding through the dressing is normal. Expect some reddish staining of the splint near the surgical site.  </p>
            <p><i class="fa fa-check-square-o"></i> &nbsp;&nbsp; Reinforce the splint with ACE wrap as needed.  </p>
              <p><i class="fa fa-check-square-o"></i> &nbsp;&nbsp; No weight may be put on the leg during the first two weeks. You may use crutches and the other leg to
get around.  </p>
 <p><i class="fa fa-check-square-o"></i> &nbsp;&nbsp; Elevate the leg on 2-3 pillows as much as possible.</p>
  <p><i class="fa fa-check-square-o"></i> &nbsp;&nbsp; Ice helps with swelling and pain. </p>
  <p><i class="fa fa-check-square-o"></i> &nbsp;&nbsp; Protect the dressing from getting wet</p>
  <p><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;  Swelling may persist for at least a year in some way.</p>
            <ul>
                <li><i class="fa fa-angle-right"></i> &nbsp;&nbsp; On the first post-op visit, we will remove the splint and take out the stitches. </li>
                <li><i class="fa fa-angle-right"></i> &nbsp;&nbsp;You will be put into a walking cast at two weeks. You may walk as much as you like at this point.</li>
              
                 <li><i class="fa fa-angle-right"></i> &nbsp;&nbsp;At the second visit (around 4 weeks after surgery), the cast will be removed and we will give you a
boot to walk in as much as possible. We will also order a brace for you so that you may sleep in the
brace and drive; 6 weeks after your surgery</li>
            </ul>
            <p><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;  Therapy will start at this point, 4-6 weeks after surgery.</p>  
            <p><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;  Therapy will be very gentle for the first two weeks (4-6 weeks to 6-8 weeks after surgery). At the 6th or 8th
week after surgery, the therapy will become harder and you will do more activity. </p>
<p><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;   During therapy, as you get stronger, you will go from the boot to a brace for walking.</p>
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
