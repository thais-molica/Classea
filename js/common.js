
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

  $("#owl-demo").owlCarousel({

      items : 3,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3],
      navigation: true,
      navigationText: false

  });

  //Contato
  /*$( "button", "#contact-form" ).on( " click", function () {
    var form = $( "#contact-form" ),
        name = form.find( "#name" ),
        subject = form.find( "#subject" ),
        message = form.find( "textarea" ),
        toCorrect = [],
        valid = true;

    var check = function ( input ) {

      var text = input.siblings( "span" ).text().replace( ":", "");
      if ( input.val().length == 0 ) {

        valid = false;
        input.addClass( "error");
        toCorrect.push( text ) ;

      } else {

        input.removeClass( "error");
        if ( toCorrect.indexOf( text ) > 1 ) {
          toCorrect.splice( text, 1 );
        }

      }
    }

    check( name );
    check( subject );
    check( message );

    if ( !valid ) {
      var modal = $( "#error-modal" ),
          content;

      if ( modal.length == 0 ) {
        $( "body" ).append( "<div class='modal' id='error-modal'><div class='content'><h2>Por favor, corrija os campos abaixo:</h2><ul></ul></div></div>" );
      }

      for ( var i in toCorrect ) {
        content += "<li>" + toCorrect[i] + "</li>";
        console.log(toCorrect[i])
      }

      $( "ul", modal ).html( content );
      modal.show().addClass( "in" );
    }

  } ) ;*/
} ) ;
