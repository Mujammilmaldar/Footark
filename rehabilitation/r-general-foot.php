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
              <i class="fa fa-angle-right"></i> <b>General foot & ankle surgery post surgery guidelines </b></h2>
        </div>
        
</section>

<section class="pad45">
    <div class="container">
        <h1 class="section-title">General foot & ankle surgery post surgery guidelines</h1>
        <div class="row">
            <div class="col-md-8 col-lg-8 ">
                <img src="images/General-foot.jpg" style="width:100%" class="img-thumbnail"><br><br>
             
              <p>The subtle effects of general anesthesia, or sedation with regional or local anesthesia, can last more than 24 hours. Rest on the day of surgery. Although you may feel normal, your reflexes and mental ability may be impaired. You may feel dizzy, lightheaded, or sleepy for 24 hours or longer. Do not consume alcohol, drive, operate machinery, or make important personal or business decisions for 24 hours.</p>
              <p>What hurts most often is the swelling. Try to keep your foot, ankle, and knee above the level of your heart as much as possible for the first few days to reduce swelling. Use ice — 20 minutes on, 20 minutes off — for the first 48–72 hours.</p>
              <p>Depending on your surgery, your doctor will direct your activity level, including range of motion and weight bearing status. For your procedure following regarding your toleration of bearing weight:</p>
              <h3>Weight bearing:</h3>
              <ul>
                  <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Weight bearing: as tolerated, with crutches for assistance</li>
                  <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Partial weight bearing: up to 50% of body weight, with crutches</li>
                  <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Non-weight bearing: do not use your leg to bear any weight</li>
              </ul>
<h3>Bandages:</h3>
 <ul>
                  <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Keep your dressings on until your first post-operative visit. Do not change your dressings. Keep all of your dressings clean and dry.</li>
                  <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;Your doctor will tell you when you can remove your dressing. If there are Steri-Strips on your wound, leave them alone. You may shower (running water is okay), but do not soak your foot.</li>
                 
              </ul>
              <h3>Medication:</h3>
              <p>We will prescribe a narcotic for pain control for most patients. Usually, your foot will be numb and pain-free in the recovery room after the procedure, due to the local anesthetic we inject at the end of the surgery. When the local anesthetic starts to wear off, that is when you should start to take your pain medicine. Remember, your goal is to stay ahead of the pain and not get behind. Playing catch up is difficult and can be unpleasant. In addition, an anti-inflammatory medication  can be helpful to reduce pain and swelling.</p>
              <h3>Diet:</h3>
              <p>Advance your diet as tolerated. Constipation is common with the use of pain medicine. You can usually ward off constipation by increasing both dietary fiber and fluid intake. Stool softeners are available if needed.</p>
              <ul>
                  <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;A mild temperature is common on the day of surgery. If you have a temperature over 100 degrees or experience nausea and vomiting that persists after the first day, contact the doctor.</li>
                  <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;We see you back at your post-operative visit, usually 7–10 days after your surgery, to take out your stitches.</li>
                 
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
