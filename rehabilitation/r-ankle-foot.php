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
              <i class="fa fa-angle-right"></i> <b>Ankle and foot fracture fixation.</b></h2>
        </div>
        
</section>

<section class="pad45">
    <div class="container">
        <h1 class="section-title">Ankle and foot fracture fixation.</h1>
        <div class="row">
            <div class="col-md-8 col-lg-8 ">
                <img src="images/r-ankle-foot.jpg" style="width:100%" class="img-thumbnail"><br><br>
            
              <p>A broken ankle is also known as an ankle "fracture." This means that one or more of the bones that make up the ankle joint are broken.</p>
              <p>A fractured ankle can range from a simple break in one bone, which may not stop you from walking, to several fractures, which forces your ankle out of place and may require that you not put weight on it for a few months.</p>
              <p>Simply put, the more bones that are broken, the more unstable the ankle becomes. There may be ligaments damaged as well. The ligaments of the ankle hold the ankle bones and joint in position.

Broken ankles affect people of all ages. During the past 30 to 40 years, doctors have noted an increase in the number and severity of broken ankles, due in part to an active, older population of "baby boomers."</p>
          
            
            <p>Three bones make up the ankle joint:</p>
            
            <ul>
                <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Tibia - shinbone</li>
                <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Fibula - smaller bone of the lower leg</li>
                <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Talus - a small bone that sits between the heel bone (calcaneus) and the tibia and fibula</li>
                 
            </ul>
            <h3>Symptoms</h3>
            <p>Common symptoms for a broken ankle include:</p>
              <ul>
                <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Immediate and severe pain</li>
                <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Swelling</li>
                <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Bruising</li>
                 <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Tender to touch</li>
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
