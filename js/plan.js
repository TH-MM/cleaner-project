$(document).ready(function () {


   // Initialize Slider 2
    $('#slider1').slick({
      slidesToShow: 3,
      dots: true,
      slidesToScroll: 3,
      autoplay: true,
      autoplaySpeed: 3000,
      responsive: [
        {
          breakpoint: 980,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ]
    });
   // Initialize Slider 2
    $('#slider2').slick({
      slidesToShow: 3,
      dots: true,
      slidesToScroll: 3,
      autoplay: true,
      autoplaySpeed: 3000,
      responsive: [
        {
          breakpoint: 980,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ]
    });

    // Initialize Slider 3
    $('#slider3').slick({
      slidesToShow: 3,
      dots: true,
      slidesToScroll: 3,
      autoplay: true,
      autoplaySpeed: 3000,
      responsive: [
        {
          breakpoint: 980,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ]
    });

    // Initialize Slider 4
    $('#slider4').slick({
      slidesToShow: 3,
      dots: true,
      slidesToScroll: 3,
      autoplay: true,
      autoplaySpeed: 3000,
      responsive: [
        {
          breakpoint: 980,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ]
    });




    // Button click events
    $('#slider3Btn').click(function () {
      $('#slider2').addClass('hidden');
      $('#slider1').addClass('hidden');
      $('#slider4').addClass('hidden');
      $(this).css('background-color', '#e8e8e8');
      $('#slider2Btn').css('background-color', 'white');
      $('#slider1Btn').css('background-color', 'white');
      $('#slider4Btn').css('background-color', 'white');
      $('#slider3').removeClass('hidden');
    });

    // Button click events
    $('#slider4Btn').click(function () {
      $('#slider2').addClass('hidden');
      $('#slider1').addClass('hidden');
      $('#slider3').addClass('hidden');
      $(this).css('background-color', '#e8e8e8');
      $('#slider2Btn').css('background-color', 'white');
      $('#slider1Btn').css('background-color', 'white');
      $('#slider3Btn').css('background-color', 'white');
      $('#slider4').removeClass('hidden');
    });
    // Button click events
    $('#slider1Btn').click(function () {
      $('#slider2').addClass('hidden');
      $('#slider3').addClass('hidden');
      $('#slider4').addClass('hidden');
      $(this).css('background-color', '#e8e8e8');
      $('#slider2Btn').css('background-color', 'white');
      $('#slider3Btn').css('background-color', 'white');
      $('#slider4Btn').css('background-color', 'white');
      $('#slider1').removeClass('hidden');
    });

    // Button click events
    $('#slider2Btn').click(function () {
      $('#slider3').addClass('hidden');
      $('#slider1').addClass('hidden');
      $('#slider4').addClass('hidden');
      $(this).css('background-color', '#e8e8e8');
      $('#slider3Btn').css('background-color', 'white');
      $('#slider1Btn').css('background-color', 'white');
      $('#slider4Btn').css('background-color', 'white');
      $('#slider2').removeClass('hidden');
    });

});