/**
 * File base.js.
 *
 * Theme functions.
 */

/*===================================
=            MIN SCRIPTS            =
===================================*/

(function($) {

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function new_map( $el ) {
	
	// var
	var $markers = $el.find('.marker');
	
	
	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};
	
	
	// create map	        	
	var map = new google.maps.Map( $el[0], args);
	
	
	// add a markers reference
	map.markers = [];
	
	
	// add markers
	$markers.each(function(){
		
    	add_marker( $(this), map );
		
	});
	
	
	// center map
	center_map( map );
	
	
	// return
	return map;
	
}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;

$(document).ready(function(){

	$('.map').each(function(){

		// create map
		map = new_map( $(this) );

	});

});

})(jQuery);

/*=================================
=            ACCORDIAN            =
=================================*/

(function($) {
	$('.toggle').on('click', function(e) {
		e.preventDefault();

		var $this = $(this);

		if ($this.next().hasClass('show')) {
			$this.next().removeClass('show');
			$this.removeClass('toggled');
			$this.next().slideUp(350);
		} else {
			$this.parent().parent().find('li .inner').removeClass('show');
			$this.parent().parent().find('li .toggle').removeClass('toggled');
			$this.parent().parent().find('li .inner').slideUp(350);
			$this.next().toggleClass('show');
			$this.toggleClass('toggled');
			$this.next().slideToggle(350);
		}
	});
})(jQuery);

/*===========================
=            NAV            =
===========================*/

(function($){

    $('.hamburger').on('click', function(event) {
    	event.preventDefault();
    	$(this).toggleClass('is-active');
    });
	
})(jQuery);

/*==============================
=            Switch            =
==============================*/


( function( $ ) {

	$('.light-switch').on('click', function(event) {
		event.preventDefault();

		//console.log('clicked')

		$('.lightson').toggleClass('show');
	});
	
} )( jQuery );


/*==============================
=            DIMMER            =
==============================*/


( function( $ ) {

	$('.dimmer').on('click', function(event) {
		event.preventDefault();

		//console.log('clicked')

		$('.lightbulbon').toggleClass('show');
		setTimeout(function() {
			$('.lightbulbglow').toggleClass('show');
		}, 60);
	});
	
} )( jQuery );



( function( $ ) {
	$('.touchme').on('touchstart', function(event){
		event.preventDefault();
		$('.lightbulbon').addClass('show');

		setTimeout(function() {
			$('.lightbulbglow').addClass('show');
		}, 60);
	});
})(jQuery);

( function( $ ) {
	$('.touchme').on('touchend', function(event){
		event.preventDefault();
		$('.lightbulbon').removeClass('show');

		setTimeout(function() {
			$('.lightbulbglow').removeClass('show');
		}, 60);
	});
})(jQuery);

( function( $ ) {
	$('.touchme').on('mouseover', function(event){
		event.preventDefault();
		$('.lightbulbon').addClass('show');

		setTimeout(function() {
			$('.lightbulbglow').addClass('show');
		}, 60);
	});
})(jQuery);

( function( $ ) {
	$('.touchme').on('mouseout', function(event){
		event.preventDefault();
		$('.lightbulbon').removeClass('show');

		setTimeout(function() {
			$('.lightbulbglow').removeClass('show');
		}, 60);
	});
})(jQuery);

/*==============================
=            LOADER            =
==============================*/

// (function($){

// 	function id(v){ return document.getElementById(v); }
// 	function loadbar() {
// 		var ovrl = id("loader"),
// 			prog = id("progress"),
// 			stat = id("progstat"),
// 			img = document.images,
// 			c = 0,
// 			tot = img.length;
// 		if(tot == 0) return doneLoading();

// 		function imgLoaded(){
// 			c += 1;
// 			var perc = ((100/tot*c) << 0) +"%";
// 			prog.style.width = perc;
// 			stat.innerHTML = "Loading "+ perc;
// 			if(c===tot) return doneLoading();
// 		}
// 		function doneLoading(){
// 			ovrl.style.opacity = 0;
// 			setTimeout(function(){ 
// 				ovrl.style.display = "none";
// 			}, 1200);
// 		}
// 		for(var i=0; i<tot; i++) {
// 			var tImg     = new Image();
// 			tImg.onload  = imgLoaded;
// 			tImg.onerror = imgLoaded;
// 			tImg.src     = img[i].src;
// 		}
// 	}
// 	document.addEventListener('DOMContentLoaded', loadbar, false);

// })(jQuery);

/*===============================
=            HEADER             =
===============================*/

(function($) {

	var $document = $(document),
	$element = $('#masthead'),
	header = $('#masthead');

	$document.scroll(function() {
		$element.toggleClass('hidden', $document.scrollTop() >= 99);
	});

	$document.scroll(function() {
		//$element.toggleClass('fixed', $document.scrollTop() >= $(window).height());
		$element.toggleClass('fixed', $document.scrollTop() >= 400);
	});

})(jQuery);

/*===============================
=            BANNER             =
===============================*/

(function($) {

	$('#banner .table').each(function(){
		var headerHeight = $('#masthead').height();
		$(this).css('padding-top', headerHeight+'px');
	});

})(jQuery);

/*===================================
=            ORIENTATION            =
===================================*/

// jQuery(window).on("orientationchange",function($){
// 	if(window.orientation == 0) // Portrait
// 	{
// 		$('#turnme').removeClass('show');
// 		$('body').removeClass('disablescroll');
// 	}
// 	else // Landscape
// 	{
// 		$('#turnme').addClass('show');
// 		$('body').addClass('disablescroll');
// 	}
// });

