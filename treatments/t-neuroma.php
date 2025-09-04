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
              <i class="fa fa-angle-right"></i> <b>Neuroma excision  </b></h2>
        </div>
        
</section>

<section class="pad45">
    <div class="container">
        <h1 class="section-title">Neuroma excision</h1>
        <div class="row">
            <div class="col-md-8 col-lg-8 ">
                <img src="images/Neuromaexcisiontr1.jpg" style="width:100%" class="img-thumbnail"><br><br>
             <h3>What is neuroma excision?</h3>
              <p>Neuroma excision is surgery to remove a swollen and enlarged nerve called a neuroma, or a Morton neuroma. It usually occurs in the ball of your foot, between your third and fourth toes. The neuroma becomes pinched between toe bones and ligaments and causes pain when you walk. Surgery may be used to relieve pressure from the neuroma, or to remove it.</p>
             <h3>How do I prepare for surgery?</h3>
             <p>Your surgeon will tell you how to prepare for surgery. You may need to stop taking some medicines several days before surgery, such as blood thinners. Antibiotics may be given before surgery to prevent a bacterial infection. Tell your surgeon if you have ever had an allergic reaction to antibiotics or anesthesia.</p>
             <p>You may be told not to eat or drink anything after midnight on the night before surgery. Your surgeon will tell you which medicines to take or not take on the day of surgery. Arrange to have someone drive you home after surgery and stay with you to make sure you are okay.</p>
             <h3>What will happen during surgery?</h3>
             <p>You may be given general anesthesia to keep you asleep and free from pain during surgery. You may instead be given anesthesia in your spine, leg, or foot to numb the surgery area. With this type of anesthesia, you may still feel pressure or pushing during surgery, but you should not feel any pain.</p>
             <p>An incision is usually made on the top of the foot, above the neuroma. Your surgeon may need to make the incision on the bottom of your foot, but this is not common. If the neuroma will not be removed, your surgeon will only cut one of the ligaments in your foot. This should relieve the pinched nerve. If the neuroma will be removed, your surgeon will first cut the nerve that has the neuroma. Then he or she will remove it. The ligament may also be cut. The incision will be closed with stitches and covered with a bandage.</p>

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
