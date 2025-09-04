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
              <i class="fa fa-angle-right"></i> <b> Ankle arthroscopy</b></h2>
        </div>
        
</section>

<section class="pad45">
    <div class="container">
        <h1 class="section-title"> Ankle arthroscopy</h1>
        <div class="row">
            <div class="col-md-8 col-lg-8 ">
                <img src="images/r-ankle-artho.jpg" style="width:100%" class="img-thumbnail"><br><br>
            <h3>WHAT YOU SHOULD KNOW:</h3>
              <p>Ankle arthroscopy (ahr-THROS-ko-pe) is a procedure to check or repair a damaged or diseased ankle joint. The ankle joint is where your lower leg bones and the bone on the top of your foot meet. Ankle arthroscopy may be done to check an injured, unstable, stiff, or painful ankle. If you have these problems after treatment with exercises, special shoes, a splint or other measures, you may need an ankle arthroscopy. This procedure shows the condition of your bones, cartilage, tendons, ligaments, and other tissues. Tendons are strong elastic tissues that connect muscles to bones. Ligaments connect one bone to another.</p>
             
              <p>Ankle arthroscopy may be used to remove, repair, or rebuild part of the ankle. It may be done to fix broken bones, ligament tears, loose tissue, or other problems. During the procedure, an arthroscope is used to see inside the joint. An arthroscope is a long metal tube with a light, camera, and magnifying glass on the end. Small tools will be used to fix your ankle problem. With ankle arthroscopy, your ankle problem may be found and treated, and you may be able to do your usual activities.</p>
              <h3>INSTRUCTIONS:</h3>
              <p><b>Take your medicine as directed:</b></p>
              <p>Call your primary healthcare provider if you think your medicine is not helping or if you have side effects. Tell him if you are allergic to any medicine. Keep a list of the medicines, vitamins, and herbs you take. Include the amounts, and when and why you take them. Bring the list or the pill bottles to follow-up visits. Carry your medicine list with you in case of an emergency.</p>
              <p><b>Follow-up visit information:</b></p>
              <p>Keep all appointments. Your caregivers will need to see you regularly to check on your ankle. You may also need to have your bandage or cast changed, or sutures removed. Write down any questions you may have. This way you will remember to ask these questions during your next visit.</p>
              <h3>Activity:</h3>
              <p>Your activity guidelines after surgery depend on what was done during surgery, and many other factors. Ask your caregiver what activity you can and cannot do after surgery. The following are general guidelines after ankle arthroscopy:</p>
           
            <ul>
                <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Keep your leg elevated for three days after surgery. Prop your leg up on pillows when you sit or lie down. Keep your ankle propped up higher than the level of your heart. Doing this will help decrease swelling in your ankle and foot.</li>
                <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;You may have a cast or splint on your lower leg, ankle and foot. You may be asked not to weight-bear (put your foot down on the floor) for days or even weeks after surgery. You will need to use crutches to walk. A caregiver called a physical therapist may teach you how to walk using crutches.</li>
                <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Caregivers will tell you when you may start to put your foot down (weight-bear) as you stand and walk. You may need to wear a cast, splint, or brace for a time while you begin to bear weight on your ankle.</li>
                 
            </ul>
            <h3>Wound care:</h3>
            <p>If you need to wear a bandage, keep it clean and dry. Do not remove the bandage over your wound unless your caregiver says it is OK. Clean your wound or wounds as ordered by your caregiver.</p>
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
