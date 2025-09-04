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
          <h1>Conditions</h1>
            <h2> <a href="index.php">Home</a> 
              <i class="fa fa-angle-right"></i> <b>Achilles Tendon Rupture</b></h2>
        </div>
        
</section>

<section class="pad45">
    <div class="container">
        <h1 class="section-title">Achilles Tendon Rupture</h1>
        <div class="row">
            <div class="col-md-8">
                <img src="images/Achillestendonrupture.jpg" style="width:100%" class="img-thumbnail"><br><br>
             <h3>How common is a ruptured Achilles tendon </h3>
               <p>The Achilles tendon is the most frequently injured 
tendon around the foot and ankle. With the 
demographics of an aging population, increasingly 
aware of the importance of physical exercise and 
maintaining overall health, both acute ruptures of the 
tendon and chronic pain from the intact tendon are 
being seen more frequently. Rupture of the Achilles 
tendon however is by no means limited to those past 
the peak of physical fitness or unaccustomed to 
exercise and it is very much an affliction of the young, 
active sporting population also.</p>

<h3>What are the symptoms of ruptured Achilles 
tendon?</h3>
<p>The history of Achilles rupture is usually classically 
described as a feeling of being kicked to the Achilles 
area and sometimes even a very audible “crack” or 
“snap” is heard. There is an immediate inability to 
continue with the activity and well-localized pain.  In 
the vast majority of cases bruising behind and to the 
sides of the ankle and swelling occurs rapidly. 
You should seek medical advice immediately.  
 </p>


<h3>How long will symptoms last if I do nothing? </h3>
<p>Usually two weeks after a complete rupture there is 
usually very little pain anymore.  At this stage it’s more 
common to notice a weakness of gait, possibly a 
feeling of instability and also likely a limp. It will also 
not be possible to raise yourself onto tip toes on the 
injured ankle. </p>
<h3>If I think I have an Achilles rupture do I need a 
scan?  </h3>

 <p>If you think you may have torn your Achilles tendon, it 
is better to get it checked by an orthopaedic surgeon 
as soon as possible. Early diagnosis with the help of 
clinical examination and confirmed by a scan can 
make a difference in it being more treatable, leading to 
better long-term outcome.  </p>
<h3>What happens if the treatment of Achilles rupture 
is delayed?  </h3>
<p>Without treatment, the tendon edges remain apart and heal 
incorrectly with excessive scar tissue. This causes weakness 
of the calf muscles leading to difficulty in push-off activities 
like running or even brisk walking.  
 </p>

<h3>How is it treated? </h3>
<p>Surgical repair: Young, active, fit individuals are advised to 
undergo repair of their ruptured tendon. Surgical repair has 
lower risk of rupture and advantage of earlier return to 
normal activities, including sports.  
In surgery the ends of torn tendon are approximated and 
stitched together using minimally invasive techniques, which 
cause minimal damage to surrounding tissues, thus bringing 
better outcomes. A boot or a brace is given till it heals.  
Non-surgical treatment: The leg is immobilized in a plaster 
cast to approximate the torn end as close as possible. This 
treatment may be prolonged and associated with weakness 
of calf muscles and an increase risk of re-rupture compared 
to surgical treatment.   </p>
<h3>When can I return to activities of daily living? </h3>
<p>If the tendon is treated promptly in the most appropriate 
way, most individuals can return to jogging after 12 weeks 
and jumping sports in 6-9 months. Office work (sitting on a 
desk) can be resumed within a week of wound healing. If 
your job involves heavy labour, it may take 3-4 months to be 
 
 
comfortable at work.  
 </p>

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
