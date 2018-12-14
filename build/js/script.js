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

});
