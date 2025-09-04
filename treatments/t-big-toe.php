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
              <i class="fa fa-angle-right"></i> <b>Big toe fusion  </b></h2>
        </div>
        
</section>

<section class="pad45">
    <div class="container">
        <h1 class="section-title">Big toe fusion</h1>
        <div class="row">
            <div class="col-md-8 col-lg-8 ">
                <img src="images/bigtoe1.jpg" style="width:100%" class="img-thumbnail"><br><br>
             <h3>What does the surgery involve?</h3>
              <p>During the surgery your surgeon will make a small incision around 5cm long on the back of your big toe to expose the arthritic joint. 

  The joint is cleared from any bone spurs that often grow around the big toe joint. The remaining joint cartilage is then removed to expose the undersurface of the joint. This surface is then perforated and thus “prepared” for a fusion. The aim is to encourage  bleeding and stem cells at the end of the bones to facilitate healing or union. Just like when a fracture or break heals.</p>
  <p>After the surfaces are ready they are held in a functional position for the big toe and fixed rigidly using small plates (see picture) and screws. The joint will then heal into one solid bone.</p>
<h3>What happens on the day of the surgery?</h3>
<p>The surgery is performed as a day surgical procedure and you are often able to go home on the same day. Occasionally if the procedure takes place late in the afternoon or early evening then it may be advisable for you to stay for one night.

We perform the surgery under a general anaesthetic and you will meet and discuss your anaesthetic needs or concerns with our anaesthetist prior to surgery.</p>
<p>The surgery can take between 45-60 mins depending on the complexity. At the start of the procedure we will infiltrate a local anaesthetic “block” around the ankle. This will make the foot numb and help with post surgery pain. This lasts a few hours after the operation. so don’t worry if you cannot feel your toes when you wake up.

The incision is closed with dissolvable stitches in most but not all cases. You are likely to ‘wake up’ with needles in your arm for the anaesthetic agents (cannula) and a big bandage around the foot.</p>
<p>The surgery is done using a tourniquet around the thigh. This is to prevent blood getting into the operative field. This does means that occasionally your thigh might feel bruised and a little sore after the surgery. This is normal and usually settles in a day or two.</p>
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
