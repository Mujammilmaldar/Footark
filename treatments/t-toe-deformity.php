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
              <i class="fa fa-angle-right"></i> <b>Toe deformity correction. </b></h2>
        </div>
        
</section>

<section class="pad45">
    <div class="container">
        <h1 class="section-title">Toe deformity correction</h1>
        <div class="row">
            <div class="col-md-8 col-lg-8 ">
                <img src="images/toedeformity1.jpg" style="width:100%" class="img-thumbnail"><br><br>
             <h3>What are toe deformities?</h3>
              <p>A toe deformity correction operation will correct toe deformities such as claw or hammer toe. The aim of such surgery is to correct the deformity and therefore improve the symptoms that the deformity was causing such as pain and loss of mobility.</p>
              <h3>What does this involve?</h3>
              <p>The procedure will usually be performed under general anaesthetic and is a day-case procedure.

An incision will be made over the toe deformity, and frequently a second incision is required over the base of the toe as well.</p>
<p>The toe will then be straightened by lengthening tendons, and removing a small amount of bone from the toe.

The straightened toe will then be fixed either internally by stitching tendons together, or occasionally utilising a wire. If a wire is used, it will be removed in the clinic at six weeks.</p>
<h3>When will I recover?</h3>
<p>At the end of the procedure, you will have a thick bandage wrapped around the foot. For the first few weeks following surgery you will need to elevate your foot as much as possible to reduce swelling. This will both make the foot more comfortable and help the wounds to heal.</p>
<p>You will be advised to walk on your heel for the first few weeks after which you should be able to start wearing soft shoes and putting pressure through the whole foot. The stitches will need removing two weeks following surgery. The swelling can take several months to completely settle.</p>

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
