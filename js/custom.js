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


$('.single-item').slick({
    dots: false,
    prevArrow: false,
    nextArrow: false,
    autoplay:false,
    autplaySpeed:1500,
  
  });

$('.slider-testimonial').slick({
    dots: false,
    prevArrow: false,
    nextArrow: false,
    autoplay:false,
    autplaySpeed:1500,
    dots:true,
  
  });