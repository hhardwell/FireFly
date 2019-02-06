/*

 AUTHOR: Jason

*/

// create carousel instance with slick plugin
$('.carousel').slick({
  slidesToShow: 1,
  variableWidth: false,
  slidesToScroll: 1,
  arrows: false,
  dots: true,
  centerMode: false,
  mobileFirst: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        variableWidth: true,
        arrows: false,
        centerMode: true,
        dots: true
      }
    },
    {
      breakpoint: 1200,
      settings: {
        variableWidth: true,
        arrows: true,
        centerMode: true,
        dots: false
      }
    }
  ]
});

// fade in text content on load
$('.carousel-content').fadeTo(300,0)
$('.slick-current .carousel-content').fadeTo(300,1)

$('.carousel').on('breakpoint', () => {
  $('.carousel-content').fadeTo(300,0)
  $('.slick-current .carousel-content').fadeTo(300,1)
})

// fade out old text on slide change and fade in new txt
$('.carousel').on('beforeChange', (event, slick, currentSlide, nextSlide) => {
  if (currentSlide !== nextSlide) {
    $('.slick-slide').each((index, element) => {
      if (parseInt($(element).attr('data-slick-index')) === currentSlide) {
        $(element).children('.carousel-content').fadeTo(300,0);
      }
      if (parseInt($(element).attr('data-slick-index')) === nextSlide) {
        $(element).children('.carousel-content').fadeTo(300,1);
      }
    })
  }
});
