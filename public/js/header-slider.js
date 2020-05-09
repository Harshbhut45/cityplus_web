$('.center').slick({
    centerMode: true,
    infinite: true,
    centerPadding: '60px',
    slidesToShow: 1,
    autoplay:true,
    autoplaySpeed:1500,
    arrows: false,
    speed: 500,
    variableWidth: true,
  });
  $('.center').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    console.log('beforeChange', currentSlide, nextSlide);
  });
  $('.center').on('afterChange', function(event, slick, currentSlide){
    console.log('afterChange', currentSlide);
  });