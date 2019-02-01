(function($) {

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });

  $('.back-to-top').click(function(){
    $('html, body').animate({scrollTop : 0},800, 'swing');
    return false;
  });

  // //navigation
  // $('.navigation').onePageNav({
  //   begin: function() {
  //     console.log('start');
  //   },
  //   end: function() {
  //     console.log('stop');
  //   },
  //   scrollOffset: 0
  // });

  $(".navbar-collapse a").on('click', function() {
    $(".navbar-collapse.collapse").removeClass('in');
  });

  //Home Background Slider



  // featured text
  // $("#rotator .1strotate").textrotator({
  //   animation: "dissolve",
  //   speed: 3000
  // });
  // $("#rotator .2ndrotate").textrotator({
  //   animation: "dissolve",
  //   speed: 3000
  // });

  //iphone carousel animation
  $(window).load(function() {
    $('#intro').addClass("animated fadeIn");
    $('.carousel-iphone').addClass("animated fadeInLeft");
  });

  // Fixed navbar
  $(window).scroll(function() {

    var scrollTop = $(window).scrollTop();

    if (scrollTop > 300) {
      $('.navbar-default').css('display', 'block');
      $('.navbar-default').addClass('fixed-to-top');

    } else if (scrollTop == 0) {

      $('.navbar-default').removeClass('fixed-to-top');
    }
  });


  function navbar() {

    if ($(window).scrollTop() > 1) {
      $('#navigation').addClass('show-nav');
    } else {
      $('#navigation').removeClass('show-nav');
    }

  }

  $(document).ready(function() {

    var browserWidth = $(window).width();

    if (browserWidth > 560) {

      $(window).scroll(function() {
        navbar();
      });

    }

  });


  $(window).resize(function() {

    var browserWidth = $(window).width();

    if (browserWidth > 560) {

      $(window).scroll(function() {
        navbar();
      });

    }

  });


})(jQuery);
