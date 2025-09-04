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
              <i class="fa fa-angle-right"></i> <b>Bunion surgery </b></h2>
        </div>
        
</section>

<section class="pad45">
    <div class="container">
        <h1 class="section-title">Bunion surgery </h1>
        <div class="row">
            <div class="col-md-8 col-lg-8 ">
                <img src="images/Bunion-Surgery1.jpg" style="width:100%" class="img-thumbnail"><br><br>
          
              <p>Bunion surgery is an operation to remove or realign the bone that sticks out on your big toe when you have a bunion. This will set your toe joint into a better position and relieve pain.

The treatment and care you receive may differ from what’s described here as it will be designed to meet your individual needs.</p>
<h3>What happens during bunion surgery?</h3>
<p>Surgery to remove a bunion usually takes less than an hour, but it will depend on the type of operation you have. Ask your surgeon how long your operation will take.

There are lots of different types of operations to treat bunions. The exact procedure you have will depend on things like the size of your bunion, and the shape of your foot. If you have arthritis in the joint of your big toe, this may also influence which procedure you have.</p>
<p>Usually, the operations will involve your surgeon removing some bone and re-aligning it to make the side of your foot look straighter. The exact shape of the cut will depend on your specific needs. Your surgeon might repair ligaments and tendons in your foot too. They may use screws or wires to keep everything in place. These are usually permanent, but sometimes your surgeon will remove them later.

To access your bunion, your surgeon may first make a cut on the inner side of your foot, over your big toe joint. Or they might do keyhole surgery and get to the bone through several small cuts.</p>
<h3>Complications of bunion surgery</h3>
<p>Complications are when problems occur during or after the operation. Complications of bunion surgery can include:</p>
<ul>
       <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;a stiff toe – the tendons in your big toe may be damaged during the operation, which can affect how well your toe moves</li>
 <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;a numb toe – the nerves in your toe may be injured</li>
 <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;an abnormal toe position – your big toe may heal out of line and bend outwards or upwards, or be slightly shorter</li>
 <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;slow healing – this can cause ongoing pain and swelling</li>
 <li><i class="fa fa-check-square-o"></i> &nbsp;&nbsp;an infection – you may need antibiotics to treat it</li>
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
