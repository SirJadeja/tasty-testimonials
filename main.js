jQuery(document).ready(function($) {
  $('.testi-cards').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    infinite: true,
    speed: 300,
    arrows: false,
    responsive: [
      {
        breakpoint: 1024, // Medium screens and above
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 768, // Small screens and above
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });
});
