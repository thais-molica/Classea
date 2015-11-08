
 "use strict";

var modal = function () {

  $( ".activate-modal" ).on( "click", function () {

    var target = $( this ).data( "target" ),
        modal = $( ".modal." + target );

    modal.fadeIn();
    setTimeout(function(){
      modal.addClass( "in" );
     }, 3);

    $( ".close", modal ).on( "click", function () {
      modal.removeClass( "in" );
      setTimeout(function(){
        modal.fadeOut();
      }, 300);
    } ) ;

  } ) ;

}

$( document ).ready( function () {
  modal();
} ) ;
