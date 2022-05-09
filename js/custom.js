$(document).ready(function(){
    $('.mainslider').slick({
        dots: true,
        infinite: true,
        speed: 1000,
        slidesToShow: 1,
        autoplay: true,
        arrows:true
      });

      $('.main-slide').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        arrows:true
      });
  });