/*
Wordpress no identifica el signo $, como parte de la libreria de jquery
por lo que hay que trabajarlo de otra manera.

$ = jQuery.noConflict();
*/

$ = jQuery.noConflict();

$(document).ready(function() {

/*===== Inicia waypoints =================*/

var $head = $('#menu-desk');

$head.waypoint(function () {
	console.log('llego el header');
	$head.sticky({topSpacing:0});
});

/*
var waypoint = new Waypoint({
	element: document.getElementById('menu-desk'),
	handler: function() {
		console.log('Basic waypoint triggered');
		$("#menu-desk").sticky({topSpacing:0});
	}
})
*/





/*====== Finaliza waypoints ======== */


//$('.dropdown-toggle').dropdown()

	var nombre = "orlando reynoso";
  //  console.log("Cargado completamente ");
  // alert(nombre);
	$(window).scroll(function() {
		/* Act on the event */
		var scroll = $(window).scrollTop();
		if(scroll >= 350){
			//console.log("llego a 300px");
		}
		else{

				}
	});


$('.gallery a').each(function(){
	$(this).attr({'data-lightbox':'galeria'});
});


   lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })


});
