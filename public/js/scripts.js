$( document ).ready( function() {
	$('#slippry-demo').slippry();

	$( '.features' ).mouseover( function() {
		$( this ).children( ':first-child' ).addClass( 'animated tada hovered' );
		$( this ).children( 'h4' ).addClass( 'text-purple' );
	} );
	$( '.features' ).mouseout( function() {
		$( this ).children( ':first-child' ).removeClass( 'animated tada hovered' );
		$( this ).children( 'h4' ).removeClass( 'text-purple' );
	} );
} )