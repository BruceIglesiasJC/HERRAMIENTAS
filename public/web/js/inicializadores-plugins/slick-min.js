/* SLICK MASTER*/
$(document).ready(function(){
  $('.slick-main').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slick-nav'
  });
});

$(document).ready(function(){
    $('.slick-nav').slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      asNavFor: '.slick-main',
      dots: false,
      arrows: true,
      centerMode: true,
      focusOnSelect: true,
      vertical: true,
      verticalSwiping: true,
      responsive: [
        {
          breakpoint: 1199,
          settings: {
             vertical: false,
             verticalSwiping: false,
             slidesToShow: 4
          }
        }
      ]
      
    });
});