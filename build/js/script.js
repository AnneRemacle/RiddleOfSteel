$(document).ready(function() {

    $(".navigation-button").on( "click", function(e) {
        e.preventDefault();
        if ( $( ".navigation-menu" ).is( ":hidden" ) ) {
            $( ".navigation-menu" ).slideDown( "slow" );
            $( ".navigation-button__open" ).css( "visibility", "hidden" );
            $( ".navigation-button__close" ).css( "visibility", "visible" );
          } else {
            $( ".navigation-menu" ).slideUp();
            $( ".navigation-button__open" ).css( "visibility", "visible" );
            $( ".navigation-button__close" ).css( "visibility", "hidden" );
          }
    } )

    //Carousel for hero photos
    var mySiema = new Siema({
        selector: '.siema',
        duration: 400,
        easing: 'ease-out',
        perPage: 1,
        startIndex: 0,
        draggable: true,
        multipleDrag: true,
        threshold: 20,
        loop: true,
        rtl: false,
        onInit: () => {},
        onChange: () => {},
    });
    setInterval(() => mySiema.next(), 3000)

    //carousel for FAQ
    var carousel = new Siema({
        selector: '.carousel',
        duration: 400,
        easing: 'ease-out',
        perPage: 1,
        startIndex: 0,
        draggable: true,
        multipleDrag: true,
        threshold: 20,
        loop: true,
        rtl: false,
        onInit: () => {},
        onChange: () => {},
    });

    //Buttons for FAQ
    const btn0 = document.querySelector('.btn0');
    const btn1 = document.querySelector('.btn1');
    const btn2 = document.querySelector('.btn2');
    const btn3 = document.querySelector('.btn3');

    btn0.addEventListener('click', () => carousel.goTo(0));
    btn1.addEventListener('click', () => carousel.goTo(1));
    btn2.addEventListener('click', () => carousel.goTo(2));
    btn3.addEventListener('click', () => carousel.goTo(3));
});

// Display menu on scroll
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos && prevScrollpos < 200) {
    document.getElementById("navigation").style.top = "-6em";
  } else {
    document.getElementById("navigation").style.top = "0";
  }
  prevScrollpos = currentScrollPos;
}

// $(".toggle-button").on("click", function(){
//     $(this).parent().find(".toggle-content").slideToggle("slow");
//     if($(this).find("svg").hasClass("fa-plus")){
//         $(this).find("svg").removeClass("fa-plus").addClass("fa-minus");
//     }else{
//         $(this).find("svg").removeClass("fa-minus").addClass("fa-plus");
//     }
// });
