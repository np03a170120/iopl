$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 1500) {
      $("#myTopbtn").fadeIn();
    } else {
      $("#myTopbtn").fadeOut();
    }
  });
  $("#myTopbtn").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });
});


// MAIN BANNER SLIDER
$('.main-banner-slider').slick({
    dots: false,
    prevArrow: false,
    nextArrow: false,
    autoplay:false,
    autplaySpeed:1500,
  });


// TESTIMONIAL SLIDER
$('.slider-testimonial').slick({
    dots: false,
    prevArrow: false,
    nextArrow: false,
    autoplay:false,
    autplaySpeed:1500,
    dots:true,
  
  });


// GALLERY
$(document).ready(function () {
  $(".fancybox").fancybox({
    openEffect: "none",
    closeEffect: "none",
    helpers: {
      overlay: {
        css: {
          background: "rgba(58, 42, 45, 0.95)",
        },
      },
    },
  });
});