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
              <i class="fa fa-angle-right"></i> <b>Flat foot reconstruction    </b></h2>
        </div>
        
</section>

<section class="pad45">
    <div class="container">
        <h1 class="section-title">Flat foot reconstruction </h1>
        <div class="row">
            <div class="col-md-8 col-lg-8 ">
                <img src="images/flatfootrec1.jpg" style="width:100%" class="img-thumbnail"><br><br>
             <h3>What is flatfoot reconstruction?</h3>
              <p>Flatfoot reconstruction is a combination of surgical procedures that repair the foot’s ligaments and tendons and correct deformities of the bones to restore and support the arch. These adjustments can reduce pain and help the patient return to an active life.</p>
              <h3>Complications</h3>
              <p>Complication rates for flatfoot reconstruction are low. However, the procedure carries the risks of any surgery, including infection, bleeding, blood clots, nerve or blood vessel damage, and anesthesia-related problems. Other complications include a failure of the bones or the surgical wound to completely heal.</p>
              <p>Sometimes, a patient may be bothered by the hardware left in the foot to stabilize the bones. If this occurs, it is usually possible to remove the hardware after healing is complete.</p>
<h3>Surgical treatment</h3>
<p>Since there are many different causes of flatfoot, the types of flatfoot reconstruction surgery are best categorized by the original condition:</p>
<p><b>Posterior tibial tendon dysfunction</b></p>
<p>Posterior tibial tendon dysfunction is a condition in which the tendon connecting the calf muscle to the inner foot is torn or inflamed. Consequently, the damaged tendon can no longer serve its main function of supporting the arch of the foot. Flatfoot is the main result of this type of condition and can be treated by the following flatfoot reconstruction surgeries:</p>
<ul>
       <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Lengthening of the Achilles tendon—Otherwise known as gastrocnemius recession, this procedure is used to lengthen the calf muscles. This surgery treats flatfoot and prevents it from returning. This procedure is often combined with other surgeries to correct posterior tibial tendon dysfunction.</li>
 <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Cleaning the tendon—Also known as tenosynovectomy, this procedure is used in the earlier and less severe stages of posterior tibial tendon dysfunction. It is performed before the arch collapses and while the tendon is only mildly affected. The inflamed tissue is cleaned away and removed from the remaining healthy tendon.</li>
 <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Tendon transfer—This procedure is done to correct flatfoot and reform the lost arch in the foot. During the procedure, the diseased tendon is removed and replaced by tendon from another area of the foot. If the tendon is only partially damaged, the inflamed part is cleaned and removed, then attached to a new tendon.</li>
 <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Cutting and shifting bones—Also called an osteotomy, this procedure consists of cutting and reconstructing bones in the foot to rebuild the arch. The heel bone and the midfoot are the most likely to be reshaped to achieve this desired result. A bone graft may be used to fuse the bones or to lengthen the outside of the foot. Temporary instrumentation such as screws and plates may also be used to hold the bones together while they heal.</li>
   </ul>
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
