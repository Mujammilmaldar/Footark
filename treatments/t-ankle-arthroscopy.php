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
              <i class="fa fa-angle-right"></i> <b>Ankle arthroscopy    </b></h2>
        </div>
        
</section>

<section class="pad45">
    <div class="container">
        <h1 class="section-title">Ankle arthroscopy   </h1>
        <div class="row">
            <div class="col-md-8">
                <img src="images/arthroscopytr.jpg" style="width:100%" class="img-thumbnail"><br><br>
             
              <p>An arthroscope is a tiny TV camera that can be inserted into a very small 
incision. It allows the surgeon to see the area where he or she is working on 
a TV screen. </p>
<h3>Surgery </h3>

<p>If nonsurgical treatments do not work, surgery may be recommended. The 
type of surgery will vary depending on the location and cause of ankle 
impingement. </p>
<p><b>Debridement :</b>Debridement is the most common surgery for anterior ankle 
impingement. Many surgeons prefer to perform this procedure with an 
arthroscope. An arthroscope is a tiny TV camera that can be inserted into a 
very small incision. It allows the surgeon to see the area where he or she is 
working on a TV screen. </p>
<p>To begin, two small incisions are made through the skin on each side of the 
impingement area. The surgeon inserts the arthroscope to see which area 
of the tendons or joint capsule are irritated and thickened. The arthroscope 
lets the doctor see if a meniscoid lesion (mentioned earlier) is present. A 
small shaver is used to clear away (debride) irritated tissue from the 
affected ligaments. The surgeon also debrides the tissue forming a 
meniscoid lesion and any areas of the joint capsule that are inflamed. Small 
forceps may also be used to clear away irritated or inflamed tissue. 
Small bone spurs on the tibia or talus are removed. If the spurs are large, 
the surgeon may decide to create a new incision over or next to the spur. 
This allows a special instrument, called an osteotome, to be inserted. The 
surgeon uses the osteotome to carefully remove these larger bone spurs. 
Before concluding the procedure, a fluoroscope is used to check the 
debridement and to make sure no bony fragments remain. A fluoroscope is 
a special X-ray machine that allows the surgeon to see a live X-ray picture 
on a TV screen during surgery. When the surgeon is satisfied that 
debridement and removal of bone fragments is complete, the skin is 
stitched together. </p>
<h3>Os Trigonum Excision </h3>
<p>The goal of an os trigonum excision is to carefully remove (excise) the os 
trigonum to alleviate pinching of the tissues above or below it. It is 
standard to use an open surgical method which requires a one- to two-inch 
incision over the outer part of the back of the ankle. An arthroscope is not 
routinely used for os trigonum excision because there are many nerves and 
blood vessels in the back of the ankle that could be injured by an 
 
 
arthroscope. </p>
<p>This surgery begins by placing the patient face down on the operating table. 
The surgeon makes a small incision over the lateral side of the back of the 
ankle, just behind the outer anklebone. A retractor is used to carefully hold 
the nearby tendons, nerves, and blood vessels out of the way. The surgeon 
locates the os trigonum. A scalpel is usually sufficient to dissect the os 
trigonum. However, if a bony bridge binds the os trigonum to the talus, the 
surgeon may need to use a chisel or osteotome. 
A fluoroscope is used to check for any remaining bony fragments. When the 
surgeon is satisfied that all bone fragments have been removed, the skin is 
stitched together. Patients are placed in a special splint designed to protect 
the ankle and to keep the foot from pointing downward. </p>
<h3>What should I expect following treatment? </h3>
<p><b>Nonsurgical Rehabilitation </b></p>
<p>Even if you don't need surgery, you may need to follow a program of 
rehabilitation exercises. Your doctor may recommend that you work with a 
physical therapist. Your therapist can create a program to help you regain 
ankle function. It is very important to improve strength and coordination in 
the ankle. </p>
<p><b>After Surgery </b></p>
<p>After debridement surgery, patients are usually placed in an ankle splint. 
Patients begin by using crutches. The amount of weight put on the foot is 
gradually increased over a period of one to two weeks. Patients generally 
advance quickly in rehabilitation and are able to resume normal activity 
within four to six weeks. </p>
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
