
 "use strict";

 var showModal = function ( modal ) {

   modal.fadeIn();
   setTimeout( function () {
     modal.addClass( "in" );
    }, 3 ) ;

 } ;

 var closeModal = function ( modal ) {

   $( ".close", modal ).on( "click", function () {

     modal.removeClass( "in" );
     setTimeout( function() {
       modal.fadeOut();
     }, 300 ) ;

   } ) ;

 } ;

 var modal = function () {

  $( ".activate-modal" ).on( "click", function () {

    var target = $( this ).data( "target" ),
        modal = $( ".modal." + target );

    showModal( modal );
    closeModal( modal );

  } ) ;

}

var gallery = function () {

  $( ".item", ".gallery" ).on( "click", function () {

    var modal = $( ".modal.gallery" ),
        img = $( this ).find( "img" ),
        toAppend = "<img src='" + img.data( "img" ) + "'>";

    modal.find( ".to-append" ).html( toAppend );
    showModal( modal ) ;
    closeModal( modal );

  } ) ;

} ;

var tabs = function () {

  $( "button", ".tabs" ).on( "click", function ( e ) {

    e.preventDefault();

    var li = $( this ).closest( "li" );

    $( ".active", ".tabs" ).removeClass( "active" );
    li.addClass( "active" );
    window.location.hash = li.attr( "data-id" );

  } ) ;

} ;

var sendMail = function () {
  window.location.href = "mailto:?subject="
                        + document.title +
                        "&body="+escape(window.location.href) ;
}
var sendFacebook = function (link, title, img) {
    link = link != undefined ? link : window.location.href;
    title = title != undefined ? title : document.title;
    window.open("https://www.facebook.com/sharer/sharer.php?u=" + escape(link) + "&t=" + document.title, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600'); return false;
}
var sendTwitter = function (link, title) {
    link = link != undefined ? link : window.location.href;
    title = title != undefined ? title : document.title;
    window.open("http://twitter.com/home?status=" + escape(title) + " " + escape(link), '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600'); return false;
}
var sendGPlus = function (link, title) {
    link = link != undefined ? link : window.location.href;
    title = title != undefined ? title : document.title;
    window.open("https://plus.google.com/share?url=" + escape(link), '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=530,width=490'); return false;
}

$( document ).ready( function () {

  $( "select", ".calories-spent" ).on( "change", function () {

    var that = $( this ),
        val = that.val();

    $( ".active", ".calories-spent" ).removeClass( "active" );
    $( "li[data-val='" + val + "']" ).addClass( "active" );

  } ) ;

  modal();
  gallery();
  tabs();

  $( "#owl-demo" ).owlCarousel( {

      items : 3,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3],
      navigation: true,
      navigationText: false

  } ) ;

  $( "#owl-special" ).owlCarousel( {

      items : 1,
      itemsDesktop : [1199,1],
      itemsDesktopSmall : [979,1],
      navigation: true,
      navigationText: false

  } ) ;

  $( "#owl-classea").owlCarousel( {

      items : 2,
      navigation: true,
      navigationText: false

  } ) ;

  //Contato
  	/*valida��o de email*/
  	$( "#send-btn", "#contact-form" ).click( function() {

  		if( $( "input#name" ).val() == "" ) {

  			$( "input#name" ).addClass( 'alert' );
  			$( "input#name" ).focus();
  			$( '#alert_box' ).html( 'Por favor insira seu nome' );
  			$( '#alert_box' ).show();


  		} else if ( $( "input#subject" ).val() == "" ) {

        $( "input#subject" ).addClass( 'alert' );
        $( "input#subject" ).focus();
        $( '#alert_box' ).html( 'Por favor insira um assunto' );
  			$( '#alert_box' ).show();

  		} else if ( $( "textarea" ).val() == "" ) {

        $( "textarea" ).addClass( 'alert' );
        $( "textarea" ).focus();
        $( '#alert_box' ).html( 'Por favor insira sua mensagem' );
        $( '#alert_box' ).show();

      } else {
  				$( '#shadow' ).fadeIn( function() {
  					 enviarRegistro();
  				} ) ;
  			}

  	} ) ;


  	//remove o destaque de alerta as inputs
  	$('input, textarea').click( function() {
  		$(this).removeClass('alert');
  		$('#alert_box').hide();
  	});

  	//envio
  	function enviarRegistro() {
  		$.post( "send.php", {
  			nome:$( "input#name" ).val(),
  			email:$( "input#subject" ).val(),
  			mensagem:$( "textarea#message" ).val()
  		},

  		function( respondeEdition ){
  			if( respondeEdition == 500 ) {
  				$('input').val('');
  				$('textarea').val('');
  				$('#shadow p').fadeOut(function(){
  					$('#send').fadeIn();
  					$('#send').fadeIn();
  					$('#shadow').click(function(){
  							$('#send').fadeOut(function(){
  								$('#shadow').fadeOut();
  					  		});
  					  	});
  					 });
  				}else if (respondeEdition == 400){
  					$('#shadow p').fadeOut(function(){
  						$('#notsend').fadeIn();
  						$('#shadow').click(function(){
  					 		$('#notsend').fadeOut(function(){
  					  			$('#shadow').fadeOut();
  					  		});
  					 });
  				});
  			}
  		});
  	}

  	// o botao com o id enviar enviar o formulario
  	/*$('#send-btn').click(function(){
  		$('#contact-form').submit();
  	});*/


} ) ;
