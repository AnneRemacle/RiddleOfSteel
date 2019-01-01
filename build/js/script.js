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
});
